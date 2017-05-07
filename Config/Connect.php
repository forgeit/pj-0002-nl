<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;


class Connect {

    public static function getEm() {
        $paths = array('./Model/');
        $isDevMode = false;
                
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => '78981',
            'dbname' => 'hosto210_newsletter',
            'host' => 'localhost',
            'charset' => 'utf8'
        );
        
        $config = Setup::createConfiguration($isDevMode);
        $driver = new AnnotationDriver(new AnnotationReader(), $paths);
        AnnotationRegistry::registerLoader('class_exists');
        $config->setMetadataDriverImpl($driver);
        $config->setProxyDir('./Model/Proxies/');
        $config->setAutoGenerateProxyClasses(true); //colocar como false quando entrar em produção

        if (Session::exists('entity_manager')) {
            $entityManager = Session::getVar('entity_manager', true);
        } else {
            $entityManager = EntityManager::create($dbParams, $config);
            Session::setVar('entity_manager', $entityManager, true);
        }
        
        return $entityManager;
    }
}