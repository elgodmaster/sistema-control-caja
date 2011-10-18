<?php



/**
 * Skeleton subclass for representing a row from the 'persona' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Persona extends BasePersona {
    
    protected $arbol_xml;
    
    public function generaArbolOpciones() {
        if($this->getIdPersona() == 0) {
            $this->arbol_xml = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>";
            $this->arbol_xml .= '<tree id="0"><item text="Opciones" tooltip = "" select="1" open="1" id="main">';
            $this->generaArbolOpcionesRecursiva(1);
            $this->arbol_xml .= '</item></tree>';
        }
        return $this->arbol_xml;
    }
    
    private function generaArbolOpcionesRecursiva($nivel,$idMenuPadre = 0) {
        if($this->getIdPersona() == 0) {
            $opciones = MenuQuery::create()
                        ->where('Menu.Nivel = ?',$nivel)
                        ->where('Menu.IdMenuPadre = ?',$idMenuPadre)
                        ->where('Menu.Estado = ?','A')
                        ->orderByOrden()
                        ->find();
            foreach($opciones as $opcion) {
                if($opcion->getLink() == 'NA') {
                    $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip = "" open="1" id="'.$opcion->getIdmenu().'">';
                    $this->generaArbolOpcionesRecursiva($opcion->getNivel() + 1,$opcion->getIdmenu());
                    $this->arbol_xml .= '</item>';
                }
                else
                    $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip= "" id="'.$opcion->getIdmenu().'"/>';
            }
        }
    }
    
    static public function listaPersonas() {
        $gxml = <<<ram
<rows>
<head>
<column width="70" type="ro" align="center" color="white" sort="na">Id Persona</column>
<column width="250" type="ro" align="left" color="white" sort="na">Nombre</column>
<column width="105" type="ro" align="left" color="white" sort="na">Cargo</column>
<column width="65" type="ro" align="center" color="white" sort="na">Estado</column>
</head>
ram;
        $personas = PersonaQuery::create()
                ->joinWith('Persona.Cargo')
                ->orderByIdPersona()
                ->find();
        foreach($personas as $persona) {
            $estado = "Inactiva";
            $autoriza_pago = "No";
            if($persona->getEstado() == 'A')
                $estado = "Activa";
            if($persona->getAutorizaPago() == 'S')
                $autoriza_pago = "SI";
            $gxml .= '<row id="'.$persona->getIdPersona().'">';
            $gxml .= '<cell>'.$persona->getIdPersona().'</cell>';
            $gxml .= '<cell>'.$persona->getApellido()." ".$persona->getNombre().'</cell>';
            $gxml .= '<cell>'.$persona->getCargo()->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$estado.'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaPersona($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
            $persona = new Persona();
            $persona->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
            $persona->setApellido($_REQUEST[$_REQUEST['ids'].'_apellido']);
            $persona->setIdCargo($_REQUEST[$_REQUEST['ids'].'_cargo']);
            $persona->setFechaIngreso($_REQUEST[$_REQUEST['ids'].'_fecha_ingreso']);
            $persona->setFechaSalida('3000-01-01');
            $persona->setEmail($_REQUEST[$_REQUEST['ids'].'_email']);
            $persona->setIdentificacion($_REQUEST[$_REQUEST['ids'].'_identificacion']);
            $persona->setFechaNacimiento($_REQUEST[$_REQUEST['ids'].'_fecha_nacimiento']);
            $persona->setClave(md5($_REQUEST[$_REQUEST['ids'].'_fecha_salida']));
            $persona->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $persona->setAutorizaPago($_REQUEST[$_REQUEST['ids'].'_autoriza_pago']);
            $con->beginTransaction();
            $persona->save($con);
            Log::registraLog($idPersona,'Persona','Persona # '.$persona->getIdPersona().': '.$persona->getNombre().' '.$persona->getApellido(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$persona->getIdPersona().'" tid="'.$persona->getIdPersona().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar la nueva persona</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarPersona($idPersona) {
        try {
            $persona = PersonaQuery::create()
                            ->findPk($idPersona);
            $gxml = '<data>';
            $gxml .= '<nombre>'.$persona->getNombre().'</nombre>';
            $gxml .= '<apellido>'.$persona->getApellido().'</apellido>';
            $gxml .= '<cargo>'.$persona->getIdCargo().'</cargo>';
            $gxml .= '<fecha_ingreso>'.$persona->getFechaIngreso('Y-m-d').'</fecha_ingreso>';
            $gxml .= '<fecha_salida>'.$persona->getFechaSalida('Y-m-d').'</fecha_salida>';
            $gxml .= '<fecha_ingreso_c>'.$persona->getFechaIngreso('Y-m-d').'</fecha_ingreso_c>';
            $gxml .= '<fecha_salida_c>'.$persona->getFechaSalida('Y-m-d').'</fecha_salida_c>';
            $gxml .= '<email>'.$persona->getEmail().'</email>';
            $gxml .= '<identificacion>'.$persona->getIdentificacion().'</identificacion>';
            $gxml .= '<fecha_nacimiento>'.$persona->getFechaNacimiento('Y-m-d').'</fecha_nacimiento>';
            $gxml .= '<clave>'.$persona->getClave().'</clave>';
            $gxml .= '<estado>'.$persona->getEstado().'</estado>';
            $gxml .= '<autoriza_pago>'.$persona->getAutorizaPago().'</autoriza_pago>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarPersona($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
            $persona = PersonaQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($persona) {
                $persona->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
                $persona->setApellido($_REQUEST[$_REQUEST['ids'].'_apellido']);
                $persona->setEmail($_REQUEST[$_REQUEST['ids'].'_email']);
                $persona->setIdCargo($_REQUEST[$_REQUEST['ids'].'_cargo']);
                $persona->setIdentificacion($_REQUEST[$_REQUEST['ids'].'_identificacion']);
                $persona->setFechaNacimiento($_REQUEST[$_REQUEST['ids'].'_fecha_nacimiento']);
                $persona->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $persona->setFechaIngreso($_REQUEST[$_REQUEST['ids'].'_fecha_ingreso']);
                $persona->setFechaSalida($_REQUEST[$_REQUEST['ids'].'_fecha_salida']);
                $persona->setAutorizaPago($_REQUEST[$_REQUEST['ids'].'_autoriza_pago']);
                if(trim($_REQUEST[$_REQUEST['ids'].'_clave']) != "")
                    $persona->setClave(md5($_REQUEST[$_REQUEST['ids'].'_clave']));
                $con->beginTransaction();
                $persona->save($con);
                Log::registraLog($idPersona,'Persona','Persona # '.$persona->getIdPersona().': '.$persona->getIdPersona(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$persona->getIdPersona().'" tid="'.$persona->getIdPersona().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar la persona</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar la persona</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarPersona($idPersona) {
        if($_REQUEST['gr_id'] != "0") {
            try {
                $gxml = "";
                $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
                $persona = PersonaQuery::create()
                        ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
                $nombre = $persona->getNombre()." ".$persona->getApellido();
                $con->beginTransaction();
                $persona->delete();
                Log::registraLog($idPersona,'Persona','Persona # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$nombre,'E',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$persona->getIdPersona().'" tid="'.$persona->getIdPersona().'"></action><action type="eli_ok"></action></data>';
            }
            catch(Exception $e) {
                $con->rollBack();
                Log::logError($e);
                $gxml = '<data><action type="no_eli">No fue posible eliminar la persona</action></data>';
            }
        }
        else
            $gxml = '<data><action type="no_eli">No es posible eliminar al id de usuario administrador</action></data>';
        return $gxml;
    }

} // Persona
