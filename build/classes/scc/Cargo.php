<?php



/**
 * Skeleton subclass for representing a row from the 'cargo' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Cargo extends BaseCargo {
    
    static public function listaCargos() {
        $gxml = <<<ram
<rows>
<head>
<column width="100" type="ro" align="center" color="white" sort="na">Id Cargo</column>
<column width="200" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $cargos = CargoQuery::create()
                ->where('Cargo.IdCargo <> 0')
                ->orderByIdCargo()
                ->find();
        foreach($cargos as $cargo) {
            $estado = "Inactivo";
            if($cargo->getEstado() == 'A')
                $estado = "Activo";
            $gxml .= '<row id="'.$cargo->getIdCargo().'">';
            $gxml .= '<cell>'.$cargo->getIdCargo().'</cell>';
            $gxml .= '<cell>'.$cargo->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function listaCargosCombo() {
        $gxml = '<complete>';
        $cargos = CargoQuery::create()
                ->where("Cargo.Estado IN ('A','M')")
                ->orderByDescripcion()
                ->find();
        foreach($cargos as $cargo) {
            $gxml .= '<option value="'.$cargo->getIdCargo().'">'.$cargo->getDescripcion().'</option>';
        }
        $gxml .= '</complete>';
        return $gxml;
    }
    
    static public function guardaCargo($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CargoPeer::DATABASE_NAME);
            $cargo = new Cargo();
            $cargo->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $cargo->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $con->beginTransaction();
            $cargo->save($con);
            Log::registraLog($idPersona,'Cargo','Cargo # '.$cargo->getIdCargo().': '.$cargo->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$cargo->getIdCargo().'" tid="'.$cargo->getIdCargo().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar el nuevo cargo</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarCargo($idCargo) {
        try {
            $cargo = CargoQuery::create()
                            ->findPk($idCargo);
            $gxml = '<data>';
            $gxml .= '<descripcion>'.$cargo->getDescripcion().'</descripcion>';
            $gxml .= '<estado>'.$cargo->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarCargo($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CargoPeer::DATABASE_NAME);
            $cargo = CargoQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($cargo) {
                $cargo->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $cargo->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $con->beginTransaction();
                $cargo->save($con);
                Log::registraLog($idPersona,'Cargo','Cargo # '.$cargo->getIdCargo().': '.$cargo->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$cargo->getIdCargo().'" tid="'.$cargo->getIdCargo().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar el cargo</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar el cargo</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarCargo($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(CargoPeer::DATABASE_NAME);
            $cargo = CargoQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $descripcion = $cargo->getDescripcion();
            $con->beginTransaction();
            $cargo->delete();
            Log::registraLog($idPersona,'Cargo','Cargo # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$descripcion,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$cargo->getIdCargo().'" tid="'.$cargo->getIdCargo().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar el cargo</action></data>';
        }
        return $gxml;
    }

} // Cargo
