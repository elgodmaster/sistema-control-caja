<?php



/**
 * Skeleton subclass for representing a row from the 'localizacion' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Localizacion extends BaseLocalizacion {
    
    static public function listaLocalizaciones() {
        $gxml = <<<ram
<rows>
<head>
<column width="90" type="ro" align="center" color="white" sort="na">Id Terminal</column>
<column width="150" type="ro" align="left" color="white" sort="na">Nombre</column>
<column width="135" type="ro" align="center" color="white" sort="na">Tipo Dispositivo</column>
<column width="55" type="ro" align="center" color="white" sort="na">Visible</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $localizaciones = LocalizacionQuery::create()
                ->orderByIdLocalizacion()
                ->find();
        foreach($localizaciones as $localizacion) {
            $estado = "Inactiva";
            $visible = "NO";
            switch($localizacion->getOutputDevice()) {
                case "M":
                    $tipo_dispositivo = "Pantalla (Mensajes)";
                    break;
                case "C":
                    $tipo_dispositivo = "Pantalla (Caja)";
                    break;
                case "E":
                    $tipo_dispositivo = "Impresora (Mensajes)";
                    break;
                case "F":
                    $tipo_dispositivo = "Impresora (Caja)";
                    break;
            }
            if($localizacion->getEstado() == 'A')
                $estado = "Activa";
            if($localizacion->getVisible() == 'S')
                $visible = "SI";
            $gxml .= '<row id="'.$localizacion->getIdLocalizacion().'">';
            $gxml .= '<cell>'.$localizacion->getIdLocalizacion().'</cell>';
            $gxml .= '<cell>'.$localizacion->getNombre().'</cell>';
            $gxml .= '<cell>'.$tipo_dispositivo.'</cell>';
            $gxml .= '<cell>'.$visible.'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaLocalizacion($idPersona) {
        try {
            $modulo = mb_convert_encoding("Localización","UTF-8","ISO-8859-1");
            $gxml = "";
            $con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME);
            $localizacion = new Localizacion();
            $localizacion->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
            $localizacion->setOutputDevice($_REQUEST[$_REQUEST['ids'].'_tipo_dispositivo']);
            $localizacion->setDireccionPrinter($_REQUEST[$_REQUEST['ids'].'_direccion_printer']);
            $localizacion->setVisible($_REQUEST[$_REQUEST['ids'].'_visible']);
            $localizacion->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $localizacion->save($con);
            Log::registraLog($idPersona,$modulo,$modulo.' # '.$localizacion->getIdLocalizacion().': '.$localizacion->getNombre(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$localizacion->getIdLocalizacion().'" tid="'.$localizacion->getIdLocalizacion().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva localización</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarLocalizacion($idLocalizacion) {
        try {
            $localizacion = LocalizacionQuery::create()
                            ->findPk($idLocalizacion);
            $gxml = '<data>';
            $gxml .= '<nombre>'.$localizacion->getNombre().'</nombre>';
            $gxml .= '<tipo_dispositivo>'.$localizacion->getOutputDevice().'</tipo_dispositivo>';
            $gxml .= '<direccion_printer>'.$localizacion->getDireccionPrinter().'</direccion_printer>';
            $gxml .= '<visible>'.$localizacion->getVisible().'</visible>';
            $gxml .= '<estado>'.$localizacion->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarLocalizacion($idPersona) {
        try {
            $modulo = mb_convert_encoding("Localización","UTF-8","ISO-8859-1");
            $gxml = "";
            $con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME);
            $localizacion = LocalizacionQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($localizacion) {
                $localizacion->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
                $localizacion->setOutputDevice($_REQUEST[$_REQUEST['ids'].'_tipo_dispositivo']);
                $localizacion->setDireccionPrinter($_REQUEST[$_REQUEST['ids'].'_direccion_printer']);
                $localizacion->setVisible($_REQUEST[$_REQUEST['ids'].'_visible']);
                $localizacion->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $localizacion->save($con);
                Log::registraLog($idPersona,$modulo,$modulo.' # '.$localizacion->getIdLocalizacion().': '.$localizacion->getNombre(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$localizacion->getIdLocalizacion().'" tid="'.$localizacion->getIdLocalizacion().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la localización</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la localización</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarLocalizacion($idPersona) {
        try {
            $modulo = mb_convert_encoding("Localización","UTF-8","ISO-8859-1");
            $gxml = "";
            $con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME);
            $localizacion = LocalizacionQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $nombre = $localizacion->getNombre();
            $con->beginTransaction();
            $localizacion->delete();
            Log::registraLog($idPersona,$modulo,$modulo.' # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$nombre,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$localizacion->getIdLocalizacion().'" tid="'.$localizacion->getIdLocalizacion().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar la localización</action></data>';
        }
        return $gxml;
    }

} // Localizacion
