<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    $arbol_menu = mb_convert_encoding($persona_sesion->generaArbolOpciones(0,$persona_sesion->getIdPersona()),"ISO-8859-1","UTF-8");
    $usuario = mb_convert_encoding($persona_sesion->getNombre()." ".$persona_sesion->getApellido(),"ISO-8859-1","UTF-8");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
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
            layout_principal.cells("a").setText("Usuario: <?=$usuario?>");
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar.xml");
            layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2U");
            layout_secundario.cells("a").setWidth(230);
            layout_secundario.cells("a").setText("Arbol de Opciones");
            layout_secundario.cells("a").fixSize(true,true);
            layout_secundario.cells("b").hideHeader();
            tree_opciones = layout_secundario.cells("a").attachTree();
            tree_opciones.loadXMLString('<?=$arbol_menu?>');
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		if(id=="salir")
		    window.location = "exit.php";
	    });
            tree_opciones.attachEvent("onClick",function(id_opcion) {
                layout_secundario.cells("b").attachURL('opcion_handler.php?id='+id_opcion);
            });
	    status_bar = layout_principal.attachStatusBar();
	    status_bar.setText('Rafa');
        }); //Fin de Load Principal
    </script>
</head>
<body>
</body>
</html>
<?php
    Propel::close();
?>