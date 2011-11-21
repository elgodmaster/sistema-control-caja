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
    
    static public function obtenerCuadreCajaActiva($id_caja) {
        try {
            $cuadre_caja = CuadreCajaQuery::create()
                        ->where('CuadreCaja.IdCaja = ?',$id_caja)
                        ->where('CuadreCaja.Estado = ?','A')
                        ->findOne();
            if($cuadre_caja)
                $id_cuadre_caja = $cuadre_caja->getIdCuadreCaja();
            else
                $id_cuadre_caja = -1;
        }
        catch(Exception $e) {
            Log::logError($e);
            $id_cuadre_caja = -2;
        }
        return $id_cuadre_caja;
    }
    
    static public function generaOpcionesCaja($menu,$id_caja,$id_persona) {
        $tilde_i = mb_convert_encoding("í","UTF-8","ISO-8859-1");
        $gxml = "<data>";
        switch($menu) {
            //Menu Principal
            case "0":
            case "inicio":
                $gxml .= '<item id="caja">';
                $gxml .= '<IMG>images/cajas.png</IMG>';
                $gxml .= '<TITULO>Caja</TITULO>';
                $gxml .= '</item>';
                if(isset($_SESSION['caja_'.$id_caja])) {
                    $gxml .= '<item id="efectivo">';
                    $gxml .= '<IMG>images/dollar.gif</IMG>';
                    $gxml .= '<TITULO>Efectivo</TITULO>';
                    $gxml .= '</item>';
                }
                $gxml .= '<item id="ordenes">';
                $gxml .= '<IMG>images/orden.png</IMG>';
                $gxml .= '<TITULO>Ordenes</TITULO>';
                $gxml .= '</item>';
                $gxml .= '<item id="ingegr">';
                $gxml .= '<IMG>images/ingegr2.png</IMG>';
                $gxml .= '<TITULO>I/E Tesorer'.$tilde_i.'a</TITULO>';
                $gxml .= '</item>';
                break;
            //Click en opción de Caja
            case "caja":
                if(!isset($_SESSION['caja_'.$id_caja])) {
                    $gxml .= '<item id="abrir_caja">';
                    $gxml .= '<IMG>images/abrir_caja.png</IMG>';
                    $gxml .= '<TITULO>Abrir Caja</TITULO>';
                    $gxml .= '</item>';
                }
                if(isset($_SESSION['caja_'.$id_caja])) {
                    $gxml .= '<item id="cuadre_caja">';
                    $gxml .= '<IMG>images/cuadre_caja.png</IMG>';
                    $gxml .= '<TITULO>Cuadre Caja</TITULO>';
                    $gxml .= '</item>';
                    $gxml .= '<item id="sobra_falta">';
                    $gxml .= '<IMG>images/sobra_falta.png</IMG>';
                    $gxml .= '<TITULO>Sobrante Faltante</TITULO>';
                    $gxml .= '</item>';
                }
                $gxml .= '<item id="inicio">';
                $gxml .= '<IMG>images/inicio.png</IMG>';
                $gxml .= '<TITULO>Inicio</TITULO>';
                $gxml .= '</item>';
                break;
            case "efectivo":
                $gxml .= '<item id="registro_efectivo_x">';
                $gxml .= '<IMG>images/efectivo.png</IMG>';
                $gxml .= '<TITULO>Registro Efectivo</TITULO>';
                $gxml .= '</item>';
                $gxml .= '<item id="pago_efectivo_x">';
                $gxml .= '<IMG>images/pago_efectivo.png</IMG>';
                $gxml .= '<TITULO>Pagos en Efectivo</TITULO>';
                $gxml .= '</item>';
                $gxml .= '<item id="inicio">';
                $gxml .= '<IMG>images/inicio.png</IMG>';
                $gxml .= '<TITULO>Inicio</TITULO>';
                $gxml .= '</item>';
                break;
            case "ordenes":
                $gxml .= '<item id="registro_orden_x">';
                $gxml .= '<IMG>images/registro_orden.png</IMG>';
                $gxml .= '<TITULO>Registro Orden</TITULO>';
                $gxml .= '</item>';
                $gxml .= '<item id="consulta_orden_x">';
                $gxml .= '<IMG>images/consulta_orden.png</IMG>';
                $gxml .= '<TITULO>Consulta Orden</TITULO>';
                $gxml .= '</item>';
                $gxml .= '<item id="inicio">';
                $gxml .= '<IMG>images/inicio.png</IMG>';
                $gxml .= '<TITULO>Inicio</TITULO>';
                $gxml .= '</item>';
                break;
            case "abrir_caja":
                $cuadre_caja = new CuadreCaja();
                $id_cuadre_caja = $cuadre_caja->aperturarCuadreCaja($id_caja,$id_persona);
                if($id_cuadre_caja) {
                    $_SESSION['caja_'.$id_caja] = $id_cuadre_caja;
                }
                if(!isset($_SESSION['caja_'.$id_caja])) {
                    $gxml .= '<item id="abrir_caja">';
                    $gxml .= '<IMG>images/abrir_caja.png</IMG>';
                    $gxml .= '<TITULO>Abrir Caja</TITULO>';
                    $gxml .= '</item>';
                }
                if(isset($_SESSION['caja_'.$id_caja])) {
                    $gxml .= '<item id="cuadre_caja">';
                    $gxml .= '<IMG>images/cuadre_caja.png</IMG>';
                    $gxml .= '<TITULO>Cuadre Caja</TITULO>';
                    $gxml .= '</item>';
                    $gxml .= '<item id="sobra_falta">';
                    $gxml .= '<IMG>images/sobra_falta.png</IMG>';
                    $gxml .= '<TITULO>Sobrante Faltante</TITULO>';
                    $gxml .= '</item>';
                }
                $gxml .= '<item id="inicio">';
                $gxml .= '<IMG>images/inicio.png</IMG>';
                $gxml .= '<TITULO>Inicio</TITULO>';
                $gxml .= '</item>';
                break;
        }
        $gxml .= "</data>";
        return $gxml;
    }
    
    static public function evaluaAccionesTomar($menu,$id_caja) {
        $gxml = "";
        switch($menu) {
            case "abrir_caja":
                $gxml .= '<data>';
                $gxml .= '<item>';
                $gxml .= 'status_bar.setText(barra_estado + "Cuadre de Caja Activo: '.$_SESSION['caja_'.$id_caja].'");';
                $gxml .= 'dhtmlx.alert({title:"Mensaje", text:"Caja # '.$_SESSION['caja_'.$id_caja].' Abierta Exitosamente!"});';
                $gxml .= '</item>';
                $gxml .= '</data>';
                break;
            case "registro_efectivo_x":
                $gxml .= '<data>';
                $gxml .= '<item>';
                $gxml .= "layout_secundario.cells('b').attachURL('opcion_handler.php?id=30');";
                $gxml .= '</item>';
                $gxml .= '</data>';
                break;
            case "pago_efectivo_x":
                $gxml .= '<data>';
                $gxml .= '<item>';
                $gxml .= "layout_secundario.cells('b').attachURL('opcion_handler.php?id=31');";
                $gxml .= '</item>';
                $gxml .= '</data>';
                break;
            case "registro_orden_x":
                $gxml .= '<data>';
                $gxml .= '<item>';
                $gxml .= "layout_secundario.cells('b').attachURL('opcion_handler.php?id=32');";
                $gxml .= '</item>';
                $gxml .= '</data>';
                break;
            default:
                $gxml .= '<data>'; 
                $gxml .= '<item>';
                $gxml .= '</item>';
                $gxml .= '</data>';
                break;
        }
        return $gxml;
    }

} // Caja
