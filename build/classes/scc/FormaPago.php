<?php



/**
 * Skeleton subclass for representing a row from the 'forma_pago' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class FormaPago extends BaseFormaPago {
    
    static public function listaFormaPago() {
        $gxml = <<<ram
<rows>
<head>
<column width="100" type="ro" align="center" color="white" sort="na">Id Forma Pago</column>
<column width="150" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $formas = FormaPagoQuery::create()
                ->orderByIdFormaPago()
                ->find();
        foreach($formas as $forma) {
            $estado = "Inactiva";
            if($forma->getEstado() == 'A')
                $estado = "Activa";
            $gxml .= '<row id="'.$forma->getIdFormaPago().'">';
            $gxml .= '<cell>'.$forma->getIdFormaPago().'</cell>';
            $gxml .= '<cell>'.$forma->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaFormaPago($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(FormaPagoPeer::DATABASE_NAME);
            $forma = new FormaPago();
            $forma->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $forma->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $forma->save($con);
            Log::registraLog($idPersona,'Forma','Forma # '.$forma->getIdFormaPago().': '.$forma->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$forma->getIdFormaPago().'" tid="'.$forma->getIdFormaPago().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva forma de pago</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarFormaPago($idFormaPago) {
        try {
            $forma = FormaPagoQuery::create()
                            ->findPk($idFormaPago);
            $gxml = '<data>';
            $gxml .= '<descripcion>'.$forma->getDescripcion().'</descripcion>';
            $gxml .= '<estado>'.$forma->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarFormaPago($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(FormaPagoPeer::DATABASE_NAME);
            $forma = FormaPagoQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($forma) {
                $forma->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $forma->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $forma->save($con);
                Log::registraLog($idPersona,'Forma','Forma # '.$forma->getIdFormaPago().': '.$forma->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$forma->getIdFormaPago().'" tid="'.$forma->getIdFormaPago().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la forma de pago</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la forma de pago</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarFormaPago($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(FormaPagoPeer::DATABASE_NAME);
            $forma = FormaPagoQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $descripcion = $forma->getDescripcion();
            $con->beginTransaction();
            $forma->delete();
            Log::registraLog($idPersona,'Forma','Forma # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$nombre,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$forma->getIdFormaPago().'" tid="'.$forma->getIdFormaPago().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar la forma de pago</action></data>';
        }
        return $gxml;
    }

} // FormaPago
