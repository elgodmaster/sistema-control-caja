<?php



/**
 * Skeleton subclass for representing a row from the 'banco' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Banco extends BaseBanco {
    
    static public function listaBancos() {
        $gxml = <<<ram
<rows>
<head>
<column width="80" type="ro" align="center" color="white" sort="na">Id Banco</column>
<column width="240" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $bancos = BancoQuery::create()
                ->orderByIdBanco()
                ->find();
        foreach($bancos as $banco) {
            $estado = "Inactivo";
            if($banco->getEstado() == 'A')
                $estado = "Activo";
            $gxml .= '<row id="'.$banco->getIdBanco().'">';
            $gxml .= '<cell>'.$banco->getIdBanco().'</cell>';
            $gxml .= '<cell>'.$banco->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaBanco($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME);
            $banco = new Banco();
            $banco->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $banco->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $banco->save($con);
            Log::registraLog($idPersona,'Banco','Banco # '.$banco->getIdBanco().': '.$banco->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$banco->getIdBanco().'" tid="'.$banco->getIdBanco().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar el nuevo banco</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarBanco($idBanco) {
        try {
            $banco = BancoQuery::create()
                            ->findPk($idBanco);
            $gxml = '<data>';
            $gxml .= '<descripcion>'.$banco->getDescripcion().'</descripcion>';
            $gxml .= '<estado>'.$banco->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarBanco($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME);
            $banco = BancoQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($banco) {
                $banco->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $banco->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $banco->save($con);
                Log::registraLog($idPersona,'Banco','Banco # '.$banco->getIdBanco().': '.$banco->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$banco->getIdBanco().'" tid="'.$banco->getIdBanco().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar el banco</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar el banco</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarBanco($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME);
            $banco = BancoQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $descripcion = $banco->getDescripcion();
            $con->beginTransaction();
            $banco->delete();
            Log::registraLog($idPersona,'Banco','Banco # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$descripcion,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$banco->getIdBanco().'" tid="'.$banco->getIdBanco().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar el banco</action></data>';
        }
        return $gxml;
    }

} // Banco
