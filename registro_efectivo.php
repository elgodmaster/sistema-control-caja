<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    require_once 'includes/interfaz.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <title>.::. Sistema de Control de Caja SCC 1.0 .::.</title>
    <!-- dhtmlx.js contains all necessary dhtmlx library javascript code -->
    <script src="codebase/dhtmlx.js" type="text/javascript"></script>
    <!-- dhtmlx.css contains styles definitions for all included components -->
    <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlx.css">
    <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlx_custom.css">
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
	    width:430px; height:30px;font-size:24px;
	}
    </style>
    <script type="text/javascript">
	var layout_principal,layout_secundario,popupWindow,forma_nuevo,dpg,dpe,dpn,g_rID;
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText("Registro Efectivo"); //Valor Dinámico
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar_sc.xml");
            forma_edicion = layout_principal.cells("a").attachForm();
	    forma_edicion.loadStruct("xml/f_registro_efectivo.xml",function(){
		var mytext = document.getElementById("efectivo_final"); mytext.focus();
		alert(mytext);
	    });
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		
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