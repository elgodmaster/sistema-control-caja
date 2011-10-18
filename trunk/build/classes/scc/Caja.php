<?php



/**
 * Skeleton subclass for representing a row from the 'caja' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class Caja extends BaseCaja {
    
    static public function listaCajas() {
        $gxml = <<<ram
<rows>
<head>
<column width="60" type="ro" align="center" color="white" sort="na">Id Caja</column>
<column width="180" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="105" type="price" align="right" color="white" sort="na">Base Efectivo</column>
<column width="75" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $cajas = CajaQuery::create()
                ->orderByIdCaja()
                ->find();
        foreach($cajas as $caja) {
            $estado = "Inactiva";
            if($caja->getEstado() == 'A')
                $estado = "Activa";
            $gxml .= '<row id="'.$caja->getIdCaja().'">';
            $gxml .= '<cell>'.$caja->getIdCaja().'</cell>';
            $gxml .= '<cell>'.$caja->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$caja->getBaseEfectivo().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaCaja($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CajaPeer::DATABASE_NAME);
            $caja = new Caja();
            $caja->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $caja->setBaseEfectivo($_REQUEST[$_REQUEST['ids'].'_baseefectivo']);
            $caja->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $caja->save($con);
            Log::registraLog($idPersona,'Caja','Caja # '.$caja->getIdCaja().': '.$caja->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$caja->getIdCaja().'" tid="'.$caja->getIdCaja().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva caja</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarCaja($idCaja) {
        try {
            $caja = CajaQuery::create()
                    ->findPk($idCaja);
            $gxml = '<data>';
            $gxml .= '<descripcion>'.$caja->getDescripcion().'</descripcion>';
            $gxml .= '<baseefectivo>'.$caja->getBaseEfectivo().'</baseefectivo>';
            $gxml .= '<estado>'.$caja->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarCaja($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CajaPeer::DATABASE_NAME);
            $caja = CajaQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($caja) {
                $caja->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $caja->setBaseEfectivo($_REQUEST[$_REQUEST['ids'].'_baseefectivo']);
                $caja->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $caja->save($con);
                Log::registraLog($idPersona,'Caja','Caja # '.$caja->getIdCaja().': '.$caja->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$caja->getIdCaja().'" tid="'.$caja->getIdCaja().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la caja</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la caja</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarCaja($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CajaPeer::DATABASE_NAME);
            $caja = CajaQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $descripcion = $caja->getDescripcion();
            $con->beginTransaction();
            $caja->delete();
            Log::registraLog($idPersona,'Caja','Caja # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$descripcion,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$caja->getIdCaja().'" tid="'.$caja->getIdCaja().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar la caja</action></data>';
        }
        return $gxml;
    }

} // Caja
