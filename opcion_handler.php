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
*/
switch($_REQUEST['id']) {
    case "10":
        header("location: usuario_handler.php?int_cod=".$_REQUEST['id']);
        break;
    default:
        header("location: interfaz_handler.php?int_cod=".$_REQUEST['id']);
        break;
}
Propel::close();
?>