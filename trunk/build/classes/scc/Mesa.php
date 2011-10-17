<?php



/**
 * Skeleton subclass for representing a row from the 'mesa' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Mesa extends BaseMesa {
    
    static public function listaMesas() {
        $gxml = <<<ram
<rows>
<head>
<column width="100" type="ro" align="center" color="white" sort="na">Id Mesa</column>
<column width="150" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="105" type="ro" align="right" color="white" sort="na">Código</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $mesas = MesaQuery::create()
                ->orderByIdMesa()
                ->find();
        foreach($mesas as $mesa) {
            $estado = "Inactiva";
            if($mesa->getEstado() == 'A')
                $estado = "Activa";
            $gxml .= '<row id="'.$mesa->getIdMesa().'">';
            $gxml .= '<cell>'.$mesa->getIdMesa().'</cell>';
            $gxml .= '<cell>'.$mesa->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$mesa->getCodigo().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaMesa($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(MesaPeer::DATABASE_NAME);
            $mesa = new Mesa();
            $mesa->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $mesa->setCodigo($_REQUEST[$_REQUEST['ids'].'_codigo']);
            $mesa->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $mesa->save($con);
            Log::registraLog($idPersona,'Mesa','Mesa # '.$mesa->getIdMesa().': '.$mesa->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$mesa->getIdMesa().'" tid="'.$mesa->getIdMesa().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva mesa</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarMesa($idMesa) {
        try {
            $mesa = MesaQuery::create()
                            ->findPk($idMesa);
            $gxml = '<data>';
            $gxml .= '<descripcion>'.$mesa->getDescripcion().'</descripcion>';
            $gxml .= '<codigo>'.$mesa->getCodigo().'</codigo>';
            $gxml .= '<estado>'.$mesa->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarMesa($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(MesaPeer::DATABASE_NAME);
            $mesa = MesaQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($mesa) {
                $mesa->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $mesa->setCodigo($_REQUEST[$_REQUEST['ids'].'_codigo']);
                $mesa->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $mesa->save($con);
                Log::registraLog($idPersona,'Mesa','Mesa # '.$mesa->getIdMesa().': '.$mesa->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$mesa->getIdMesa().'" tid="'.$mesa->getIdMesa().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la mesa</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la mesa</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarMesa($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(MesaPeer::DATABASE_NAME);
            $mesa = MesaQuery::create()
                    ->findPk($_REQUEST['gr_id']);
            $descripcion = $mesa->getDescripcion();
            $con->beginTransaction();
            $mesa->delete();
            Log::registraLog($idPersona,'Mesa','Mesa # '.$_REQUEST['gr_id'].': '.$descripcion,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$mesa->getIdMesa().'" tid="'.$mesa->getIdMesa().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar la mesa</action></data>';
        }
        return $gxml;
    }

} // Mesa
