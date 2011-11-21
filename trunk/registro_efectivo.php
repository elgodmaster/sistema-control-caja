<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    require_once 'includes/interfaz.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    $id_caja = $_SESSION['id_caja'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <title>.::. Sistema de Control de Caja SCC 1.0 .::.</title>
    <!-- dhtmlx.js contains all necessary dhtmlx library javascript code -->
    <script src="codebase/dhtmlx.js" type="text/javascript"></script>
    <script src='codebase/message.js' type="text/javascript"></script>
    <!-- dhtmlx.css contains styles definitions for all included components -->
    <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlx.css">
    <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlx_custom.css">
	<link rel="STYLESHEET" type="text/css" href="codebase/themes/message_default.css">
    <!--<script src="codebase/connector/connector.js"></script>-->
    <style>
        /*these styles allow dhtmlxLayout to work in fullscreen mode in different browsers correctly*/
        html, body {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
            background-color:white;
        }
	.style1 {
	    width:330px; height:30px;font-size:24px;
	}
    </style>
    <script type="text/javascript">
	function actualizacion_handler() {
	    dhtmlx.alert({title:"Mensaje", text: "Efectivo Final de Caja Actualizado!!!"});
	    layout_principal.progressOff();
	}
	function error_actualizacion_handler(nodo) {
	    dhtmlx.alert({title:"Mensaje", text: nodo.firstChild.data});
	    //alert(nodo.firstChild.data);
	    layout_principal.progressOff();
	}
	var layout_principal,layout_secundario,popupWindow,forma_nuevo,dpg,dpe,dpn,g_rID;
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText("Registro Efectivo");
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar_sc.xml");
            forma_edicion = layout_principal.cells("a").attachForm();
	    forma_edicion.loadStruct("xml/f_registro_efectivo.xml",function(){
		forma_edicion.load("midware.php?a=select&b=efectivo_final&c=<?=$id_caja?>");
		forma_edicion.setItemFocus("efectivo_final");
	    });
	    dpe = new dataProcessor("midware.php?a=update&b=efectivo_final&c=<?=$id_caja?>"); //Valor Dinámico
	    dpe.setTransactionMode("POST", true);
	    dpe.setUpdateMode("off");
	    dpe.defineAction("act_ok",actualizacion_handler);
	    dpe.defineAction("no_act",error_actualizacion_handler);
	    dpe.init(forma_edicion);
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		if(id == "guardar")
		    if(forma_edicion.validate()) {
			layout_principal.progressOn();
			dpe.sendData();
		    }
	    });
        }) //Fin de Load Principal
    </script>
</head>
<body>
</body>
</html>
<?php
    Propel::close();
?>