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
    
    public function generaArbolLocalizaciones($id_persona) {
        $this->arbol_xml = "";
        $this->arbol_xml .= '<tree id="0"><item text="Terminales" tooltip = "" select="1" open="1" id="main">';
        $localizaciones = LocalizacionQuery::create()
                        ->where('Localizacion.Estado = ?','A')
                        ->where('Localizacion.OutputDevice IN ?',array('M','C'))
                        ->find();
        foreach($localizaciones as $localizacion) {
            $cuenta = PersonaLocalizacionQuery::create()
                    ->where('PersonaLocalizacion.IdPersona = ?',$id_persona)
                    ->where('PersonaLocalizacion.IdLocalizacion = ?',$localizacion->getIdLocalizacion())
                    ->count();
            $checked = "";
            if($cuenta) $checked = 'checked="1"';
            $this->arbol_xml .= '<item text="'.$localizacion->getNombre().'" tooltip= "" id="'.$localizacion->getIdLocalizacion().'" '.$checked.'/>';
        }
        $this->arbol_xml .= '</item></tree>';
        return $this->arbol_xml;
    }
    
    public function generaArbolCajas($id_persona) {
        $this->arbol_xml = "";
        $this->arbol_xml .= '<tree id="0"><item text="Cajas" tooltip = "" select="1" open="1" id="main">';
        $caja = new Caja();
        $cajas = CajaQuery::create()
                ->where('Caja.Estado = ?','A')
                ->find();
        foreach($cajas as $caja) {
            $cuenta = UsuarioCajaQuery::create()
                    ->where('UsuarioCaja.IdPersona = ?',$id_persona)
                    ->where('UsuarioCaja.IdCaja = ?',$caja->getIdCaja())
                    ->count();
            $checked = "";
            if($cuenta) $checked = 'checked="1"';
            $this->arbol_xml .= '<item text="'.$caja->getDescripcion().'" tooltip= "" id="'.$caja->getIdCaja().'" '.$checked.'/>';
        }
        $this->arbol_xml .= '</item></tree>';
        return $this->arbol_xml;
    }
    
    public function generaArbolOpciones($forma,$id_persona) {
        /**
         * $forma es un indicador de forma de construir arbol, con o sin checkboxes.
         * valor 1 - Con Checkboxes
         * valor 0 - Menú principal
        */
        $this->arbol_xml = "";
        if(!$forma)
            $this->arbol_xml = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>";
        $this->arbol_xml .= '<tree id="0"><item text="Opciones" tooltip = "" select="1" open="1" id="main">';
        if($forma)
            $this->generaArbolOpcionesRecursivaOpciones(1,$id_persona);
        else
            $this->generaArbolOpcionesRecursivaMenu(1,$id_persona);
        $this->arbol_xml .= '</item></tree>';
        return $this->arbol_xml;
    }
    
    private function generaArbolOpcionesRecursivaOpciones($nivel,$id_persona,$idMenuPadre = 0) {
        $opciones = MenuQuery::create()
                    ->where('Menu.Nivel = ?',$nivel)
                    ->where('Menu.IdMenuPadre = ?',$idMenuPadre)
                    ->where('Menu.Estado = ?','A')
                    ->orderByOrden()
                    ->find();
        foreach($opciones as $opcion) {
            if($opcion->getLink() == 'NA') {
                $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip = "" open="1" id="'.$opcion->getIdmenu().'">';
                $this->generaArbolOpcionesRecursivaOpciones($opcion->getNivel() + 1,$id_persona,$opcion->getIdmenu());
                $this->arbol_xml .= '</item>';
            }
            else {
                $cuenta = MenuPersonaQuery::create()
                            ->where('MenuPersona.IdMenu = ?',$opcion->getIdMenu())
                            ->where('MenuPersona.IdPersona = ?',$id_persona)
                            ->count();
                $checked = '';
                if($cuenta) $checked = 'checked="1"';
                $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip= "" id="'.$opcion->getIdmenu().'" '.$checked.'/>';
            }
        }
    }
    
    private function generaArbolOpcionesRecursivaMenu($nivel,$id_persona,$idMenuPadre = 0) {
        if($this->getIdPersona() == 0)
            $opciones = MenuQuery::create()
                        ->where('Menu.Nivel = ?',$nivel)
                        ->where('Menu.IdMenuPadre = ?',$idMenuPadre)
                        ->where('Menu.Estado = ?','A')
                        ->orderByOrden()
                        ->find();
        else
            $opciones = MenuQuery::create()
                        ->join('Menu.MenuPersona')
                        ->where('MenuPersona.IdPersona = ?',$id_persona)
                        ->where('Menu.Nivel = ?',$nivel)
                        ->where('Menu.IdMenuPadre = ?',$idMenuPadre)
                        ->where('Menu.Estado = ?','A')
                        ->orderByOrden()
                        ->find();
        foreach($opciones as $opcion) {
            if($opcion->getLink() == 'NA') {
                $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip = "" open="1" id="'.$opcion->getIdmenu().'">';
                $this->generaArbolOpcionesRecursivaMenu($opcion->getNivel() + 1,$id_persona,$opcion->getIdmenu());
                $this->arbol_xml .= '</item>';
            }
            else {
                $this->arbol_xml .= '<item text="'.$opcion->getDescripcion().'" tooltip= "" id="'.$opcion->getIdmenu().'"/>';
            }
        }
    }
    
    public function actualizaArbolOpcionesMenu($opciones,$id_persona) {
        $gxml = "";
        try {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
            $persona = PersonaQuery::create()
                    ->findPk($id_persona);
            $opciones_array = split(',',$opciones);
            for($i=0;$i<count($opciones_array);$i++) {
                if($opciones_array[$i] != 'main') {
                    $menu_persona = new MenuPersona();
                    $menu_persona->setIdPersona($id_persona);
                    $menu_persona->setIdMenu($opciones_array[$i]);
                    $persona->addMenuPersona($menu_persona);
                }
            }
            $con->beginTransaction();
            $delete_opciones = MenuPersonaQuery::create()
                            ->where('MenuPersona.IdPersona = ?',$id_persona)
                            ->delete($con);
            if(strlen(trim($opciones))) $persona->save($con);
            Log::registraLog($id_persona,'Persona','Registro de opciones de menu para persona # '.$id_persona.': '.$persona->getNombre().' '.$persona->getApellido(),'O',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$id_persona.'" tid="'.$id_persona.'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar las opciones de menu</action></data>';
        }
        return $gxml;
    }
    
    public function actualizaArbolLocalizaciones($localizaciones,$id_persona) {
        $gxml = "";
        try {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
            $persona = PersonaQuery::create()
                    ->findPk($id_persona);
            $localizaciones_array = split(',',$localizaciones);
            for($i=0;$i<count($localizaciones_array);$i++) {
                if($localizaciones_array[$i] != 'main') {
                    $persona_localizacion = new PersonaLocalizacion();
                    $persona_localizacion->setIdPersona($id_persona);
                    $persona_localizacion->setIdLocalizacion($localizaciones_array[$i]);
                    $persona->addPersonaLocalizacion($persona_localizacion);
                }
            }
            $con->beginTransaction();
            $delete_localizaciones = PersonaLocalizacionQuery::create()
                            ->where('PersonaLocalizacion.IdPersona = ?',$id_persona)
                            ->delete($con);
            if(strlen(trim($localizaciones))) $persona->save($con);
            Log::registraLog($id_persona,'Persona','Registro de localizaciones de usuario para persona # '.$id_persona.': '.$persona->getNombre().' '.$persona->getApellido(),'Z',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$id_persona.'" tid="'.$id_persona.'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar las localizaciones de usuario</action></data>';
        }
        return $gxml;
    }
    
    public function actualizaArbolCajas($cajas,$id_persona) {
        $gxml = "";
        try {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
            $persona = new Persona();
            $persona = PersonaQuery::create()
                    ->findPk($id_persona);
            $cajas_array = split(',',$cajas);
            for($i=0;$i<count($cajas_array);$i++) {
                if($cajas_array[$i] != 'main') {
                    $usuario_caja = new UsuarioCaja();
                    $usuario_caja->setIdPersona($id_persona);
                    $usuario_caja->setIdCaja($cajas_array[$i]);
                    $persona->addUsuarioCaja($usuario_caja);
                }
            }
            $con->beginTransaction();
            $delete_cajas = UsuarioCajaQuery::create()
                            ->where('UsuarioCaja.IdPersona = ?',$id_persona)
                            ->delete($con);
            if(strlen(trim($cajas))) $persona->save($con);
            Log::registraLog($id_persona,'Persona','Registro de cajas de usuario para persona # '.$id_persona.': '.$persona->getNombre().' '.$persona->getApellido(),'J',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$id_persona.'" tid="'.$id_persona.'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar las cajas de usuario</action></data>';
        }
        return $gxml;
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
            if($_REQUEST[$_REQUEST['ids'].'_administrador'] == "1")
                $persona->setAdministrador('1');
            else
                $persona->setAdministrador('0');
            if($_REQUEST[$_REQUEST['ids'].'_control_cajas'] == "1")
                $persona->setControlCajas('1');
            else
                $persona->setControlCajas('0');
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
            $persona = new Persona();
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
            $gxml .= '<clave></clave>';
            $gxml .= '<estado>'.$persona->getEstado().'</estado>';
            $gxml .= '<autoriza_pago>'.$persona->getAutorizaPago().'</autoriza_pago>';
            $gxml .= '<administrador>'.$persona->getAdministrador().'</administrador>';
            $gxml .= '<control_cajas>'.$persona->getControlCajas().'</control_cajas>';
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
                if($_REQUEST[$_REQUEST['ids'].'_administrador'] == "1")
                    $persona->setAdministrador('1');
                else
                    $persona->setAdministrador('0');
                if($_REQUEST[$_REQUEST['ids'].'_control_cajas'] == "1")
                    $persona->setControlCajas('1');
                else
                    $persona->setControlCajas('0');
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
        if($_REQUEST[$_REQUEST['ids'].'_gr_id'] != "0") {
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
    
    static public function generaAccesosPersona($idPersona) {
        $tilde_o = mb_convert_encoding("ó","UTF-8","ISO-8859-1");
        $gxml = '<data>';
        $persona = PersonaQuery::create()
                ->findPK($idPersona);
        if($persona->getControlCajas() == "1") {
            if($idPersona == "0") {
                $cajas = CajaQuery::create()
                        ->where('Caja.Estado = ?','A')
                        ->find();
                foreach($cajas as $caja) {
                    $gxml .= '<item id="caja_'.$caja->getIdCaja().'">';
                    $gxml .= '<IMG>images/cajas.png</IMG>';
                    $gxml .= '<TITULO>'.$caja->getDescripcion().'</TITULO>';
                    $gxml .= '</item>';
                }
            }
            else {
                $cajas = CajaQuery::create()
                        ->join('Caja.UsuarioCaja')
                        ->where('Caja.Estado = ?','A')
                        ->where('UsuarioCaja.IdPersona = ?',$idPersona)
                        ->find();
                foreach($cajas as $caja) {
                    $gxml .= '<item id="caja_'.$caja->getIdCaja().'">';
                    $gxml .= '<IMG>images/cajas.png</IMG>';
                    $gxml .= '<TITULO>'.$caja->getDescripcion().'</TITULO>';
                    $gxml .= '</item>';
                }
            }
        }
        if($idPersona == "0") {
            $terminales = LocalizacionQuery::create()
                        ->where('Localizacion.Estado = ?','A')
                        ->where('Localizacion.OutputDevice = ?','M')
                        ->find();
            foreach($terminales as $terminal) {
                $gxml .= '<item id="terminal_'.$terminal->getIdLocalizacion().'">';
                $gxml .= '<IMG>images/pantalla.png</IMG>';
                $gxml .= '<TITULO>'.$terminal->getNombre().'</TITULO>';
                $gxml .= '</item>';
            }
        }
        if($persona->getAdministrador() == "1") {
            $gxml .= '<item id="administrador">';
            $gxml .= '<IMG>images/administrador.png</IMG>';
            $gxml .= '<TITULO>Configuraci'.$tilde_o.'n</TITULO>';
            $gxml .= '</item>';
        }
        $gxml .= '</data>';
        return $gxml;
    }

} // Persona
