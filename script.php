<?php


ini_set('display_errors', 7);
ini_set('display_startup_errors', 7);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

set_time_limit( 7200 ); // Limite de tempo de execução: 2h. Deixe 0 (zero) para sem limite
ignore_user_abort( true ); // Não encerra o processamento em caso de perda de conexão

require_once __DIR__ . '/Config/Config.php';
require_once __DIR__ . Config::AUTOLOAD;
require_once __DIR__ . Config::LOG;
require_once __DIR__ . Config::SESSION;
require_once __DIR__ . Config::PATH_CONFIG . 'Routes.php';
require_once __DIR__ . Config::PATH_CONFIG . 'Controller.php';
require_once __DIR__ . Config::PATH_CONFIG . 'Connect.php';
require_once __DIR__ . Config::REDIRECT;
require_once __DIR__ . Config::SERVICE;

require_once __DIR__ . Config::PATH_CONTROLLER . 'EnvioController.php';

Session::init();

print_r("Iniciou\n");

$envioController = new EnvioController(null);
$envioController->processoDeEnvio();

print_r("Fim\n");

if ($envioController->aindaTemEmailParaEnviar()) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.lisaruth.com.br/newsletter/main/script.php');
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	curl_exec($ch);
	curl_close($ch);
}