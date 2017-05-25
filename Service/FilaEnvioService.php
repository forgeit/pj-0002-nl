<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FilaEnvioService
 *
 * @author kelvin
 */
class FilaEnvioService extends Service {

    public function buscarHistorico() {
        try{
            $query = Connect::getEm()
                ->getConnection()
                ->prepare("SELECT 
                    f.id AS id,
                    CASE WHEN t.titulo IS NULL THEN 'Template Removido' ELSE t.titulo END AS template,
                    f.email AS email,
                    s.ds_situacao AS situacao,
                    DATE_FORMAT(f.ts_envio,'%d/%m/%Y %H:%i') AS dataEnvio
                    FROM fila_envio f 
                    JOIN situacao s ON s.id = f.id_situacao 
                    LEFT JOIN template t ON t.id = f.id_template");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            $this->log->error($ex);
            return null;
        }
    }
    
    public function buscarAlgunsAguardando() {
        try{
            $query = Connect::getEm()->getConnection()->prepare('select * from fila_envio where id_situacao = 1 LIMIT 10');
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            $this->log->error($ex);
            return null;
        }
    }

    public function buscarTodosAguardando() {
        try{
            $query = Connect::getEm()->getConnection()->prepare('select * from fila_envio where id_situacao = 1');
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            $this->log->error($ex);
            return null;
        }
    }
    
    public function verificarFilaEnvio() {
        try{
            $query = Connect::getEm()->getConnection()->prepare('select count(*) as total from fila_envio where id_situacao = 1');
            $query->execute();
            return $query->fetchAll()[0]['total'];
        } catch (Exception $ex) {
            $this->log->error($ex);
            return null;
        }
    }
    
}
