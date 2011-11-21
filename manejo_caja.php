<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    $usuario = mb_convert_encoding($persona_sesion->getNombre()." ".$persona_sesion->getApellido(),"ISO-8859-1","UTF-8");
    $id_caja = $_REQUEST['id'];
    unset($_SESSION['caja_'.$id_caja]);
    $id_cuadre_caja = Caja::obtenerCuadreCajaActiva($id_caja);
    if($id_cuadre_caja > 0) {
	$_SESSION['caja_'.$id_caja] = $id_cuadre_caja;
	$_SESSION['id_caja'] = $id_caja;
	$mensaje_status_caja = "Cuadre de Caja Activo: ".$id_cuadre_caja;
    }
    else
	$mensaje_status_caja = "No existe cuadre de caja activo";
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
    </style>
    <script type="text/javascript">
	function evaluaRespuesta(loader) {
	    var resp = loader.doXPath("/data/item");
	    eval(resp[0].childNodes(0).nodeValue);
    	}
	var layout_principal,layout_secundario;
	var barra_estado = "Usuario: <?=$usuario?> | Modulo: Caja | ";
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText(".::. Sistema de Control de Caja .::.");
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar.xml");
            layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2U");
            layout_secundario.cells("a").setWidth(120);
            layout_secundario.cells("a").setText("Opciones");
            layout_secundario.cells("a").fixSize(true,true);
            layout_secundario.cells("b").hideHeader();
	    data_view_opciones = layout_secundario.cells("a").attachDataView({
		height: "auto",
		type:{
			template:"html->opciones",height:80,width:98
		}
	    });
	    data_view_opciones.load('midware.php?a=dataview&b=caja&c=0&d=<?=$id_caja?>','xml');
	    data_view_opciones.attachEvent("onItemClick",function(id, ev, html){
		if(id.substr(id.length-1,1) != 'x') {
		    data_view_opciones.clearAll();
		    data_view_opciones.load('midware.php?a=dataview&b=caja&c='+id+'&d=<?=$id_caja?>','xml',function(){
			if(id.substr(id.length-1,1) == 'j')
			    dhtmlxAjax.post('midware.php','a=dataview&b=evalua&c='+id+'&d=<?=$id_caja?>',evaluaRespuesta);
		    });
		}
		else
		    dhtmlxAjax.post('midware.php','a=dataview&b=evalua&c='+id+'&d=<?=$id_caja?>',evaluaRespuesta);
	    });
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		if(id=="regresar")
		    window.location = "seleccion_acceso.php";
		if(id=="salir")
		    window.location = "exit.php";
	    });
	    status_bar = layout_principal.attachStatusBar();
	    status_bar.setText(barra_estado + "<?=$mensaje_status_caja?>");
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