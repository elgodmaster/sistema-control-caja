<?php



/**
 * Skeleton subclass for representing a row from the 'log' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class Log extends BaseLog {
    
    static public function registraLog($idPersona,$modulo,$detalle,$accion,$con){
        $respuesta = true;
        $fechaHora = date("Y-m-d H:i:s");
        $log = new Log();
        $log->setIdPersona($idPersona);
        $log->setFechaHora($fechaHora);
        $log->setModulo($modulo);
        $log->setDetalle($detalle);
        $log->setAccion($accion);
        $log->save($con);
    }
    
    static public function logError($detalle) {
        $fp = fopen('error_log.txt','a');
        $fechaHora = date("Y-m-d H:i:s");
        $logText = '['.$fechaHora.']'.chr(13).$detalle.chr(13);
        fwrite($fp,$logText);
        fclose($fp);
    }

} // Log
