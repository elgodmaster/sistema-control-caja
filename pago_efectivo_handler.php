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
    <title>.::. Sistema de Caja SCC 1.0 .::.</title>
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
	function eliminacion_handler() {
	    dhtmlx.alert({title:"Mensaje", text: "Registro Anulado!!!"});
	    forma_edicion.clear();
	    layout_principal.progressOff();
	    grid.clearAndLoad("midware.php?a=grid&b=pago_efectivo&c=<?=$id_caja?>"); 
	}
	function registro_handler() {
	    dhtmlx.alert({title:"Mensaje", text: "Registro Ingresado!!!"});
	    layout_principal.progressOff();
	    popupWindow.close();
	    grid.clearAndLoad("midware.php?a=grid&b=pago_efectivo&c=<?=$id_caja?>");
	}
	function error_eliminacion_handler(nodo) {
	    dhtmlx.alert({title:"Mensaje", text: nodo.firstChild.data});
	    layout_principal.progressOff();
	    grid.clearAndLoad("midware.php?a=grid&b=pago_efectivo&c=<?=$id_caja?>");
	}
	function error_registro_handler(nodo) {
	    dhtmlx.alert({title:"Mensaje", text: nodo.firstChild.data});
	    layout_principal.progressOff();
	    popupWindow.close();
	}
	function apaga_progress() {
	    layout_secundario.cells("a").progressOff();
	}
	var layout_principal,layout_secundario,popupWindow,forma_nuevo,dpg,dpe,dpn;
	dhtmlx.image_path = "codebase/imgs/";
	dhtmlxEvent(window,"load",function() { //Inicio de Load Principal
            layout_principal = new dhtmlXLayoutObject(document.body,"1C");
            layout_principal.cells("a").setText("Pagos en Efectivo");
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("xml/toolbar_pago_efectivo.xml");
            layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2U");
            layout_secundario.cells("a").setWidth(600);
            layout_secundario.cells("a").fixSize(true,true);
            layout_secundario.cells("a").hideHeader();
            layout_secundario.cells("b").hideHeader();
            grid = layout_secundario.cells("a").attachGrid();
	    grid.enableTooltips("false,false,false,false");
	    dpg = new dataProcessor("midware.php?a=delete&b=pago_efectivo"); 
	    dpg.defineAction("eli_ok",eliminacion_handler);
	    dpg.defineAction("no_eli",error_eliminacion_handler);
	    dpg.init(grid);
	    layout_secundario.cells("a").progressOn();
	    grid.loadXML("midware.php?a=grid&b=pago_efectivo&c=<?=$id_caja?>",apaga_progress);
	    forma_edicion = layout_secundario.cells("b").attachForm();
	    forma_edicion.loadStruct("xml/f_pago_efectivo_e.xml",function() {
		//forma_edicion.hideItem("anular");
	    });
	    grid.attachEvent("onRowSelect",function(rID,cInd){
		forma_edicion.load("midware.php?a=select&b=pago_efectivo&id="+rID);
	    });
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		if(id=="nuevo") {
		    popupWindow = layout_principal.dhxWins.createWindow("nuevo_pago", 0, 0, 406, 280);
		    popupWindow.center();
		    popupWindow.setModal(true);
		    popupWindow.setText("Nuevo Pago en Efectivo");
		    popupWindow.setIcon("images/nuevo.gif","images/nuevo.gif");
		    forma_nuevo = popupWindow.attachForm();
		    forma_nuevo.loadStruct("xml/f_pago_efectivo_n.xml",function(){
			forma_nuevo.setReadonly("autoriza",true);
			forma_nuevo.getCombo("autoriza").loadXML('midware.php?a=combo&b=autoriza_pago');
		    });
		    dpn = new dataProcessor("midware.php?a=insert&b=pago_efectivo&c=<?=$id_caja?>");
		    dpn.setTransactionMode("POST", true);
		    dpn.setUpdateMode("off");
		    dpn.defineAction("reg_ok",registro_handler);
		    dpn.defineAction("no_reg",error_registro_handler);
		    dpn.init(forma_nuevo);    
		    forma_nuevo.attachEvent("onButtonClick",function(id){
			if(forma_nuevo.validate()) {
			    popupWindow.progressOn();
			    dpn.sendData();
			}
			else
			    alert('Los datos marcados son obligatorios, o no tienen el formato correcto...!!!');
		    });
		}
		if(id=="anular") {
		    if(grid.getSelectedRowId() != null) {
			grid.deleteRow(grid.getSelectedRowId());
		    }
		    else
			alert('Debe seleccionar un registro para anular..!!');
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