<?php /* Smarty version 3.1.27, created on 2017-05-16 20:28:19
         compiled from "/var/www/newsletter/main/View/templates/tema01/relatorio/lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:887469224591b8b13e76539_74735972%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20ff1487212e43c2cf519e355d569673e01fd82' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/relatorio/lista.tpl',
      1 => 1494132760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '887469224591b8b13e76539_74735972',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b8b13f13fe8_79149371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b8b13f13fe8_79149371')) {
function content_591b8b13f13fe8_79149371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '887469224591b8b13e76539_74735972';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ("default/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("default/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                        <small><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</small>
                    </h1>
                </section>
                <section class="content">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        001 - Relatório de E-mails Enviados Por Período
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        Relatório detalhado e quantitativo de e-mails enviado durante um período determinado.
                                    </p>
                                    <p>
                                        <a class="btn btn-flat btn-primary" href="/newsletter/main/index.php?c=r001&m=visualizar">Visualizar Relatório</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        002 - Relatório Lidos X Não Lidos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Relatório quantitativo e estatistico de e-mails enviados, efetuando a comparação entre lidos e não lidos.</p>
                                    
                                    <p>
                                        <a class="btn btn-flat btn-primary" href="/newsletter/main/index.php?c=r002&m=visualizar">Visualizar Relatório</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("default/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </body>
</html>
<?php }
}
?>