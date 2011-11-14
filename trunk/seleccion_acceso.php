<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    $usuario = mb_convert_encoding($persona_sesion->getNombre()." ".$persona_sesion->getApellido(),"ISO-8859-1","UTF-8");
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
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	}
	.style4 {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-weight: bold;
		color: #000066;
	}
    </style>
    <script type="text/javascript">
	var layout_principal;
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText(".::. Sistema de Control de Caja .::.");
	    layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2E");
	    layout_secundario.cells("a").setText("Accesos:");
	    layout_secundario.cells("b").setHeight(142);
	    layout_secundario.cells("b").fixSize(1,1);
	    layout_secundario.cells("b").hideHeader();
	    layout_secundario.setCollapsedText('a', 'Accesos:');
	    data_view_accesos = layout_secundario.cells("a").attachDataView({
		height: "auto",
		type:{
			template:"html->opciones",height:70,width:100
		}
	    });
	    data_view_opciones = layout_secundario.cells("b").attachDataView({
		height: "auto",
		type:{
			template:"html->opciones"
		}
	    });
	    data_view_accesos.load('midware.php?a=dataview&b=accesos','xml');
	    data_view_opciones.add({
		id:"salir",
		IMG:"images/salir.png",
		TITULO:"Salir"
	    });
	    layout_principal.cells("a").showHeader();
	    data_view_accesos.attachEvent("onItemClick",function(id, ev, html){
		if(id=="administrador")
		    window.location = "mapp.php";
		if(id.split("_")[0]=="caja")
		    window.location = "manejo_caja.php?id="+id.split("_")[1];
	    });
	    data_view_opciones.attachEvent("onItemClick",function(id, ev, html) {
		if(id=="salir")
		    window.location = "exit.php";
	    });
	    status_bar = layout_principal.attachStatusBar();
	    status_bar.setText("Usuario: <?=$usuario?>");
        }); //Fin de Load Principal
    </script>
</head>
<body>
<div id="opciones" style="display:none;">
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><div align="center"><img src="#IMG#" width="48" height="48" border="0"></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style1">#TITULO#</span></div></td>
    </tr>
    </table>
</div>
</body>
</html>
<?php
    Propel::close();
?>