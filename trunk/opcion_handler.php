<?php
require_once 'includes/init.php';
require_once 'includes/ac.php';
/*
 $_REQUEST['id']
 4 => Cajas
 5 => Cargos
 6 => Localizaciones
 7 => Mesas
 8 => Productos
 16 => Tarjetas de Crédito
 17 => Bancos
 18 => Formas de Pago
 11 => Clientes
 12 => Cuadre de Caja
 13 => Ordenes
 14 => Grupos
 15 => Ingresos & Egresos
 10 => Usuarios
 
 30 => Registro Efectivo Caja
 31 => Registro de Pagos en Efectivo
 32 => Registro de Ordenes
*/
switch($_REQUEST['id']) {
    case "10":
        header("location: usuario_handler.php?int_cod=".$_REQUEST['id']);
        break;
    case "30":
        header("location: registro_efectivo.php");
        break;
    case "31":
        header("location: pago_efectivo_handler.php");
        break;
    case "32":
        header("location: registro_orden_handler.php");
        break;
    default:
        header("location: interfaz_handler.php?int_cod=".$_REQUEST['id']);
        break;
}
Propel::close();
?>