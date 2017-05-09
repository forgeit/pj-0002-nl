<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_name('newsletter_forge');
@session_start();

/**
 * Description of EnvioController
 *
 * @author kelvin
 */
class EnvioController extends Controller {

    private $smarty;
    private $log;

    public function __construct($smarty) {
        $this->smarty = $smarty;
        $this->log = Log::getLog(__CLASS__);
    }

    public function enviar() {
        require_once './Model/FilaEnvio.php';
        require_once './Model/Situacao.php';
        require_once './Model/Template.php';
        require_once './Model/Historico.php';
        require_once './Service/Service.php';
        require_once './Service/HistoricoService.php';
        require_once './Service/FilaEnvioService.php';

        $filaEnvioService = new FilaEnvioService();

        if ($filaEnvioService->verificarFilaEnvio() > 0) {
            print_r(json_encode(array('exec' => false, 'msg' => 'Já existe um processo de envio em execução, aguarde a finalização do mesmo para enviar o próximo lote.')));
            exit();
        }

        $totalEmail = count($_POST['emails']);

        if ($totalEmail == 0) {
            print_r(json_encode(array('exec' => false, 'msg' => 'Para enviar a campanha é necessário selecionar os contatos.')));
            exit();
        }

        $historicoService = new HistoricoService();

        $totalRestante = (unserialize(Session::getVar('cliente'))->getTotalEmail() - $historicoService->buscarPorMesAno(date('m'), date('Y')));
        if ($totalEmail > $totalRestante) {
            print_r(json_encode(array('exec' => false, 'msg' => 'Você não possui a cota necessária para enviar a campanha, verifique o total restante. <br/> Total Restante: &nbsp;' . $totalRestante)));
            exit();
        }

        try {

            $mes = (int) date('m');
            $ano = (int) date('Y');
            $service = new Service();

            $situacao = new Situacao();
            $situacao = $service->findById('Situacao', Config::ID_AGUARDANDO);
            $template = new Template();
            $template = $service->findById('Template', $_POST['template_id']);

            $totalSucesso = 0;
            $arrayErro = array();

            foreach ($_POST['emails'] as $email) {

                $filaEnvio = new FilaEnvio();
                $filaEnvio->setMes($mes);
                $filaEnvio->setAno($ano);
                $filaEnvio->setEmail($email);
                $filaEnvio->setSituacao($situacao);
                $filaEnvio->setTemplate($template);

                if ($service->insert($filaEnvio)) {
                    $totalSucesso++;
                } else {
                    $arrayErro[] = $email;
                }
            }

            $mensagem = 'Total Iniciado com Sucesso: &nbsp;' . $totalSucesso . '<br/>';

            if (count($arrayErro) > 0) {
                $mensagem .= 'Email com erro: <br/>';

                foreach ($arrayErro as $email) {
                    $mensagem .= $email . '<br/>';
                }
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://www.lisaruth.com.br/newsletter/main/script.php');
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 1);
            curl_exec($ch);
            curl_close($ch);

            print_r(json_encode(array('exec' => true, 'msg' => $mensagem)));
        } catch (Exception $ex) {
            print_r(json_encode(array('exec' => false, 'msg' => 'Ocorreu um erro ao iniciar o envio das campanhas.')));
            exit();
        }
    }

    public function processoDeEnvio() {
        require_once './Model/Situacao.php';
        require_once './Model/Assinatura.php';
        require_once './Model/FilaEnvio.php';
        require_once './Service/Service.php';
        require_once './Service/FilaEnvioService.php';
        require_once './Model/Template.php';
        require_once './Model/Cliente.php';

        $filaEnvioService = new FilaEnvioService();
        $filaEnvioList = $filaEnvioService->buscarTodosAguardando();

        file_put_contents("./logs/execucao.tmp", "Executando\n");

        $service = new Service();
        
                
        $cliente = new Cliente();
        $cliente = $service->findById('Cliente', 1);
        
        $template = $service->findById('Template', $filaEnvioList[0]['id_template']);
        $assinatura = new Assinatura();
        $assinatura = $service->findById('Assinatura', 1);

        foreach ($filaEnvioList as $value) {
            $this->log->info($value);
            $this->email($value, $template, $assinatura, $cliente);
            sleep(60);
        }

        unlink("./logs/execucao.tmp");
    }

    public function email($array, $template, $assinatura, $cliente) {
        require_once './Model/Situacao.php';
        require_once './Model/Assinatura.php';
        require_once './Model/FilaEnvio.php';
        require_once './Service/Service.php';
        require_once './Service/FilaEnvioService.php';
        require_once './Model/Template.php';
        require_once './Model/Cliente.php';

        $mail = new PHPMailer();

        $mail->IsSMTP();
        
        $mail->Timeout = 10;
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.lisaruth.com.br';
        $mail->Username = 'newsletter@lisaruth.com.br';
        $mail->Password = '7898187730123';
        $mail->From = 'newsletter@lisaruth.com.br';
        $mail->FromName = 'Lisaruth Delícias Caseiras';

        $this->log->info('querido');
        $this->log->info($cliente->getHostSmtp());
        $this->log->info($cliente->getUserNameSmtp());
        $this->log->info($cliente->getPasswordSmtp());
        $this->log->info($cliente->getFromSmtp());
        $this->log->info($cliente->getFromNameSmtp());
        $this->log->info('cheguei');
        
        $mail->AddAddress($array['email'], $array['email']);

        $mail->isHTML(true);

        $mail->Subject = $template->getTitulo();
        $mail->Body = $template->getTexto();

        $dom = new DOMDocument();
        $string = mb_convert_encoding($mail->Body, 'html-entities', 'utf-8');
        $dom->loadHTML($string);
        $dom->preserveWhiteSpace = false;
        $links = $dom->getElementsByTagName('a');

        foreach ($links as $key => $value) {
            $url = $value->getAttribute('href') . '&el=' . base64_encode($array['email']) . '&tl=' . $template->getId();
            $value->setAttribute('href', $url);
        }

        $mail->Body = $dom->saveHTML();

        if ($assinatura->getHtmlAssinatura() != null) {
            $mail->Body .= "<br/>" . $assinatura->getHtmlAssinatura();
        }

        $mail->Body = $mail->Body . file_get_contents('./View/templates/tema01/assinatura.html');
        $mail->Body = str_replace("[ID_FILA_ENVIO]", $array['id'], $mail->Body);

        $service = new Service();
        $fila = new FilaEnvio();
        $situacao = new Situacao();

        $fila = $service->findById('FilaEnvio', $array['id']);

        if (!$mail->send()) {
            $this->log->error($mail->ErrorInfo);
            $situacao = $service->findById('Situacao', 3);
        } else {
            $situacao = $service->findById('Situacao', 2);
        }

        $this->log->info("Teste testezito no mas.");

        $fila->setSituacao($situacao);
        $fila->setTsEnvio(new \DateTime(date('Y-m-d H:i:s')));

        if ($service->update($fila)) {
            $this->log->info("Sucesso");
        } else {
            $this->log->error("Erro");
        }
    }

    public function lista() {
        require_once './Service/Service.php';
        require_once './Model/Template.php';
        $service = new Service();

        $templates = $service->findAll('Template');

        $template_ids = array();
        $template_titulos = array();
        foreach ($templates as $t) {
            $template_ids[] = $t->getId();
            $template_titulos[] = $t->getTitulo();
        }

        $this->smarty->assign('template_ids', $template_ids);
        $this->smarty->assign('template_titulos', $template_titulos);
        $this->smarty->assign('template_id', $template_ids[0]);

        $this->smarty->assign('titulo', 'Envio');
        $this->smarty->assign('cliente', unserialize(Session::getVar('cliente')));
        $this->smarty->assign('subtitulo', 'Envie suas campanhas.');
        $this->smarty->display('envio.tpl');
    }

}
