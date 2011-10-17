<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>.::. Sistema de Caja LTC 1.0 .::.</title>
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
    </style>
    <script type="text/javascript">
	var layout_principal,layout_secundario;
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText("Configuración de Cajas");
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar.xml");
            layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2U");
            layout_secundario.cells("a").setWidth(530);
            layout_secundario.cells("a").fixSize(true,true);
            layout_secundario.cells("a").hideHeader();
            layout_secundario.cells("b").hideHeader();
            grid = layout_secundario.cells("a").attachGrid();
            layout_principal.cells("a").showHeader();
        }) //Fin de Load Principal
    </script>
</head>
<body>
</body>
</html>
<?php
    Propel::close();
?>