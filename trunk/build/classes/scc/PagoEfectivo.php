<?php



/**
 * Skeleton subclass for representing a row from the 'pago_efectivo' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class PagoEfectivo extends BasePagoEfectivo {
    
    static public function listaPagosEfectivo($id_caja) {
        $id_cuadre_caja = $_SESSION['caja_'.$id_caja];
        $gxml = <<<ram
<rows>
<head>
<column width="50" type="ro" align="center" color="white" sort="na">Id Pago</column>
<column width="125" type="ro" align="center" color="white" sort="na">Fecha-Hora</column>
<column width="150" type="ro" align="left" color="white" sort="na">Concepto</column>
<column width="75" type="price" align="right" color="white" sort="na">Valor</column>
<column width="115" type="ro" align="left" color="white" sort="na">Recibe</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $pagos_efectivo = PagoEfectivoQuery::create()
                        ->where('PagoEfectivo.IdCuadreCaja = ?',$id_cuadre_caja)
                        ->find();
        foreach($pagos_efectivo as $pago_efectivo) {
            $estado = "Pagado";
            if($pago_efectivo->getEstado() == "N")
                $estado = "Anulado";
            $concepto = substr($pago_efectivo->getConcepto(),0,40);
            $gxml .= '<row id="'.$pago_efectivo->getIdPagoEfectivo().'">';
            $gxml .= '<cell>'.$pago_efectivo->getIdPagoEfectivo().'</cell>';
            $gxml .= '<cell>'.$pago_efectivo->getFechaHora().'</cell>';
            $gxml .= '<cell>'.$concepto.'</cell>';
            $gxml .= '<cell>'.$pago_efectivo->getValor().'</cell>';
            $gxml .= '<cell>'.$pago_efectivo->getReceptor().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaPagoEfectivo($idPersona,$id_caja) {
        $fechaHora = date("Y-m-d H:i:s");
        $id_cuadre_caja = $_SESSION['caja_'.$id_caja];
        try {
            $gxml = "";
            $con = Propel::getConnection(PagoEfectivoPeer::DATABASE_NAME);
            $pago = new PagoEfectivo();
            $pago->setIdPersona($idPersona);
            $pago->setIdAutoriza($_REQUEST[$_REQUEST['ids'].'_autoriza']);
            $pago->setIdCuadreCaja($id_cuadre_caja);
            $pago->setFechaHora($fechaHora);
            $pago->setValor($_REQUEST[$_REQUEST['ids'].'_valor']);
            $pago->setConcepto($_REQUEST[$_REQUEST['ids'].'_concepto']);
            $pago->setReceptor($_REQUEST[$_REQUEST['ids'].'_receptor']);
            $pago->setEstado('P');
            $con->beginTransaction();
            $pago->save($con);
            Log::registraLog($idPersona,'Pago Efectivo','Pago Efectivo # '.$pago->getIdPagoEfectivo().' registrado: '.$pago->getConcepto(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$pago->getIdPagoEfectivo().'" tid="'.$pago->getIdPagoEfectivo().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar el pago en efectivo</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarPagoEfectivo($idPago) {
        try {
            $pago = PagoEfectivoQuery::create()
                    ->findPk($idPago);
            $estado = "Anulado";
            if($pago->getEstado() == 'P') $estado = "Pagado";
            $gxml = '<data>';
            $gxml .= '<fecha_hora>'.$pago->getFechaHora().'</fecha_hora>';
            $gxml .= '<autoriza>'.$pago->getPersonaRelatedByIdAutoriza()->getApellido()." ".$pago->getPersonaRelatedByIdAutoriza()->getNombre().'</autoriza>';
            $gxml .= '<receptor>'.$pago->getReceptor().'</receptor>';
            $gxml .= '<concepto>'.$pago->getConcepto().'</concepto>';
            $gxml .= '<valor>'.$pago->getValor().'</valor>';
            $gxml .= '<estado>'.$estado.'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function anularPersona($idPersona) {
        try {
            $gxml = "";
            $pago = new PagoEfectivo();
            $con = Propel::getConnection(PagoEfectivoPeer::DATABASE_NAME);
            $pago = PagoEfectivoQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $con->beginTransaction();
            $pago->setEstado('N');
            $pago->save();
            Log::registraLog($idPersona,'Pago Efectivo','Pago en Efectivo # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].' Anulado','U',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$pago->getIdPagoEfectivo().'" tid="'.$pago->getIdPagoEfectivo().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible anular el pago en efectivo</action></data>';
        }
        return $gxml;
    }

} // PagoEfectivo
