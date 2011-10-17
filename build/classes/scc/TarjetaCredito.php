<?php



/**
 * Skeleton subclass for representing a row from the 'tarjeta_credito' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class TarjetaCredito extends BaseTarjetaCredito {
    
    static public function listaTarjetasCredito() {
        $gxml = <<<ram
<rows>
<head>
<column width="75" type="ro" align="center" color="white" sort="na">Id Tarjeta</column>
<column width="200" type="ro" align="left" color="white" sort="na">Emisor</column>
<column width="130" type="ro" align="right" color="white" sort="na">Porcentaje Comisión</column>
<column width="90" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $tarjetas = TarjetaCreditoQuery::create()
                ->orderByIdTarjetaCredito()
                ->find();
        foreach($tarjetas as $tarjeta) {
            $estado = "Inactiva";
            if($tarjeta->getEstado() == 'A')
                $estado = "Activa";
            $gxml .= '<row id="'.$tarjeta->getIdTarjetaCredito().'">';
            $gxml .= '<cell>'.$tarjeta->getIdTarjetaCredito().'</cell>';
            $gxml .= '<cell>'.$tarjeta->getEmisor().'</cell>';
            $gxml .= '<cell>'.$tarjeta->getPorcentajeComision().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaTarjetaCredito($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(TarjetaCreditoPeer::DATABASE_NAME);
            $tarjeta = new TarjetaCredito();
            $tarjeta->setEmisor($_REQUEST[$_REQUEST['ids'].'_emisor']);
            $tarjeta->setPorcentajeComision($_REQUEST[$_REQUEST['ids'].'_porcentaje_comision']);
            $tarjeta->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $tarjeta->save($con);
            Log::registraLog($idPersona,'Tarjeta','Tarjeta # '.$tarjeta->getIdTarjetaCredito().': '.$tarjeta->getEmisor(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$tarjeta->getIdTarjetaCredito().'" tid="'.$tarjeta->getIdTarjetaCredito().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva Tarjeta de Crédito</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarTarjetaCredito($idTarjetaCredito) {
        try {
            $tarjeta = TarjetaCreditoQuery::create()
                            ->findPk($idTarjetaCredito);
            $gxml = '<data>';
            $gxml .= '<emisor>'.$tarjeta->getEmisor().'</emisor>';
            $gxml .= '<porcentaje_comision>'.$tarjeta->getPorcentajeComision().'</porcentaje_comision>';
            $gxml .= '<estado>'.$tarjeta->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarTarjetaCredito($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(TarjetaCreditoPeer::DATABASE_NAME);
            $tarjeta = TarjetaCreditoQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($tarjeta) {
                $tarjeta->setEmisor($_REQUEST[$_REQUEST['ids'].'_emisor']);
                $tarjeta->setPorcentajeComision($_REQUEST[$_REQUEST['ids'].'_porcentaje_comision']);
                $tarjeta->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $tarjeta->save($con);
                Log::registraLog($idPersona,'Tarjeta','Tarjeta # '.$tarjeta->getIdTarjetaCredito().': '.$tarjeta->getEmisor(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$tarjeta->getIdTarjetaCredito().'" tid="'.$tarjeta->getIdTarjetaCredito().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la tarjeta de crédito</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la tarjeta de crédito</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarTarjetaCredito($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(TarjetaCreditoPeer::DATABASE_NAME);
            $tarjeta = TarjetaCreditoQuery::create()
                    ->findPk($_REQUEST['gr_id']);
            $emisor = $tarjeta->getEmisor();
            $con->beginTransaction();
            $tarjeta->delete();
            Log::registraLog($idPersona,'Tarjeta','Tarjeta # '.$_REQUEST['gr_id'].': '.$emisor,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$tarjeta->getIdTarjetaCredito().'" tid="'.$tarjeta->getIdTarjetaCredito().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar la tarjeta de crédito</action></data>';
        }
        return $gxml;
    }

} // TarjetaCredito
