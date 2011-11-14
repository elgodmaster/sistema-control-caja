<?php
/*
    Configuración de títulos de pantallas y parámetros
*/

//Cajas
$titulo1_4 = "Configuración de Cajas";
$ancho_4 = "500";
$forma_edicion_4 = "f_cajas.xml";
$ancho_ventana_nuevo_4 = "350";
$alto_ventana_nuevo_4 = "200";
$titulo_nuevo_4 = "Nueva Caja";
$forma_nuevo_4 = "f_cajas.xml";
$clear_forma_edicion_4 = "forma_edicion.clear();";
$toolbar_4 = "xml/toolbar_nuevo.xml";

//Cargos
$titulo1_5 = "Configuración de Cargos";
$ancho_5 = "500";
$forma_edicion_5 = "f_cargos.xml";
$ancho_ventana_nuevo_5 = "350";
$alto_ventana_nuevo_5 = "170";
$titulo_nuevo_5 = "Nuevo Cargo";
$forma_nuevo_5 = "f_cargos.xml";
$clear_forma_edicion_5 = "forma_edicion.clear();";
$toolbar_5 = "xml/toolbar_nuevo.xml";

//Localizaciones
$titulo1_6 = "Configuración de Terminales";
$ancho_6 = "500";
$forma_edicion_6 = "f_localizaciones.xml";
$ancho_ventana_nuevo_6 = "350";
$alto_ventana_nuevo_6 = "250";
$titulo_nuevo_6 = "Nueva Terminal";
$forma_nuevo_6 = "f_localizaciones.xml";
$clear_forma_edicion_6 = "forma_edicion.clear();";
$toolbar_6 = "xml/toolbar_nuevo.xml";

//Mesas
$titulo1_7 = "Configuración de Mesas";
$ancho_7 = "500";
$forma_edicion_7 = "f_mesas.xml";
$ancho_ventana_nuevo_7 = "350";
$alto_ventana_nuevo_7 = "200";
$titulo_nuevo_7 = "Nueva Mesa";
$forma_nuevo_7 = "f_mesas.xml";
$clear_forma_edicion_7 = "forma_edicion.clear();";
$toolbar_7 = "xml/toolbar_nuevo.xml";

//Productos
$titulo1_8 = "Mantenimiento de Productos";
$ancho_8 = "500";
$forma_edicion_8 = "f_productos.xml";
$ancho_ventana_nuevo_8 = "350";
$alto_ventana_nuevo_8 = "430";
$titulo_nuevo_8 = "Nuevo Producto";
$forma_nuevo_8 = "f_productos.xml";
$clear_forma_edicion_8 = "forma_edicion.clear();";
$toolbar_8 = "xml/toolbar_nuevo.xml";

//Usuarios
$titulo1_10 = "Mantenimiento de Usuarios";
$ancho_10 = "500";
$forma_edicion_10 = "f_usuarios_e.xml";
$ancho_ventana_nuevo_10 = "405";
$alto_ventana_nuevo_10 = "510";
$titulo_nuevo_10 = "Nuevo Usuario";
$forma_nuevo_10 = "f_usuarios_n.xml";
$forma_hidden_10 = "f_hidden.xml";
$manejo_fecha_nuevo_10 = <<<ram
forma_nuevo.setItemValue("fecha_ingreso",forma_nuevo.getCalendar("fecha_ingreso_c").getFormatedDate());
ram;
$manejo_fecha_edicion_10 = <<<ram
forma_edicion.setItemValue("fecha_ingreso",forma_edicion.getCalendar("fecha_ingreso_c").getFormatedDate());
forma_edicion.setItemValue("fecha_salida",forma_edicion.getCalendar("fecha_salida_c").getFormatedDate());
ram;
$manejo_combo_nuevo_10 = <<<ram
forma_nuevo.setReadonly("cargo",true);
forma_nuevo.getCombo("cargo").loadXML('midware.php?a=combo&b=cargo');
ram;
$manejo_combo_edicion_10 = <<<ram
forma_edicion.setReadonly("cargo",true);
forma_edicion.getCombo("cargo").loadXML('midware.php?a=combo&b=cargo');
ram;
$toolbar_10 = "xml/toolbar_usuario.xml";
$toolbar_sc_10 = "xml/toolbar_sc.xml";
$clear_forma_edicion_10 = "forma_edicion.clear();";
$alto_ventana_opciones_10 = "460";
$ancho_ventana_opciones_10 = "405";
$alto_ventana_localizaciones_10 = "460";
$ancho_ventana_localizaciones_10 = "405";
$alto_ventana_cajas_10 = "460";
$ancho_ventana_cajas_10 = "405";
$titulo_opciones_10 = "Opciones de Menú";
$titulo_localizaciones_10 = "Terminales Usuario";
$titulo_cajas_10 = "Cajas Usuario";

//Clientes
$titulo1_11 = "Mantenimiento de Clientes";
$ancho_11 = "500";
$forma_edicion_11 = "f_clientes.xml";
$ancho_ventana_nuevo_11 = "350";
$alto_ventana_nuevo_11 = "430";
$titulo_nuevo_11 = "Nuevo Cliente";
$forma_nuevo_11 = "f_clientes.xml";
$clear_forma_edicion_11 = "forma_edicion.clear();";
$toolbar_11 = "xml/toolbar_nuevo.xml";

//Tarjetas de Crédito
$titulo1_16 = "Mantenimiento de Tarjetas de Crédito";
$ancho_16 = "500";
$forma_edicion_16 = "f_tarjetas.xml";
$ancho_ventana_nuevo_16 = "360";
$alto_ventana_nuevo_16 = "190";
$titulo_nuevo_16 = "Nueva Tarjeta de Crédito";
$forma_nuevo_16 = "f_tarjetas.xml";
$clear_forma_edicion_16 = "forma_edicion.clear();";
$toolbar_16 = "xml/toolbar_nuevo.xml";

//Bancos
$titulo1_17 = "Mantenimiento de Bancos";
$ancho_17 = "500";
$forma_edicion_17 = "f_bancos.xml";
$ancho_ventana_nuevo_17 = "350";
$alto_ventana_nuevo_17 = "170";
$titulo_nuevo_17 = "Nuevo Banco";
$forma_nuevo_17 = "f_bancos.xml";
$clear_forma_edicion_17 = "forma_edicion.clear();";
$toolbar_17 = "xml/toolbar_nuevo.xml";

//Formas de Pago
$titulo1_18 = "Mantenimiento de Formas de Pago";
$ancho_18 = "500";
$forma_edicion_18 = "f_formas.xml";
$ancho_ventana_nuevo_18 = "350";
$alto_ventana_nuevo_18 = "170";
$titulo_nuevo_18 = "Nueva Forma de Pago";
$forma_nuevo_18 = "f_formas.xml";
$clear_forma_edicion_18 = "forma_edicion.clear();";
$toolbar_18 = "xml/toolbar_nuevo.xml";

?>