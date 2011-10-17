<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    require_once 'includes/interfaz.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    $int_cod = $_REQUEST['int_cod'];
    $titulo1 = "titulo1_".$int_cod; 				$titulo1 = $$titulo1;
    $ancho = "ancho_".$int_cod; 				$ancho = $$ancho;
    $forma_edicion = "forma_edicion_".$int_cod;			$forma_edicion = $$forma_edicion;
    $clear_forma_edicion = "clear_forma_edicion_".$int_cod;	$clear_forma_edicion = $$clear_forma_edicion;
    $ancho_ventana_nuevo = "ancho_ventana_nuevo_".$int_cod;	$ancho_ventana_nuevo = $$ancho_ventana_nuevo;
    $alto_ventana_nuevo = "alto_ventana_nuevo_".$int_cod;	$alto_ventana_nuevo = $$alto_ventana_nuevo;
    $titulo_nuevo = "titulo_nuevo_".$int_cod;			$titulo_nuevo = $$titulo_nuevo;
    $forma_nuevo = "forma_nuevo_".$int_cod;			$forma_nuevo = $$forma_nuevo;
    $manejo_fecha_nuevo = "manejo_fecha_nuevo_".$int_cod;	$manejo_fecha_nuevo = $$manejo_fecha_nuevo;
    $manejo_fecha_edicion = "manejo_fecha_edicion_".$int_cod;	$manejo_fecha_edicion = $$manejo_fecha_edicion;
    $manejo_combo_nuevo = "manejo_combo_nuevo_".$int_cod;	$manejo_combo_nuevo = $$manejo_combo_nuevo;
    $manejo_combo_edicion = "manejo_combo_edicion_".$int_cod;	$manejo_combo_edicion = $$manejo_combo_edicion;
    $toolbar = "toolbar_".$int_cod;				$toolbar = $$toolbar;
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
	function actualizacion_handler() {
	    alert('Registro actualizado..!!');
	    <?=$clear_forma_edicion?>
	    //forma_edicion.unload();
	    //forma_edicion.setItemValue("nombre","");
	    layout_principal.progressOff();
	    grid.clearAndLoad("midware.php?a=grid&b=<?=$int_cod?>"); //Valor Dinámico
	}
	function eliminacion_handler() {
	    alert('Registro eliminado..!!');
	    <?=$clear_forma_edicion?>
	    layout_principal.progressOff();
	    grid.clearAndLoad("midware.php?a=grid&b=<?=$int_cod?>"); //Valor Dinámico
	}
	function registro_handler() {
	    alert('Registro Ingresado..!!');
	    layout_principal.progressOff();
	    popupWindow.close();
	    grid.clearAndLoad("midware.php?a=grid&b=<?=$int_cod?>"); //Valor Dinámico
	}
	function error_actualizacion_handler(nodo) {
	    alert(nodo.firstChild.data);
	    layout_principal.progressOff();
	}
	function error_eliminacion_handler(nodo) {
	    alert(nodo.firstChild.data);
	    layout_principal.progressOff();
	    grid.clearAndLoad("midware.php?a=grid&b=<?=$int_cod?>"); //Valor Dinámico
	}
	function error_registro_handler(nodo) {
	    alert(nodo.firstChild.data);
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
            layout_principal.cells("a").setText("<?=$titulo1?>"); //Valor Dinámico
            toolbar_principal = layout_principal.cells("a").attachToolbar();
            toolbar_principal.setIconsPath("images/");
            toolbar_principal.loadXML("<?=$toolbar?>");
            layout_secundario = new dhtmlXLayoutObject(layout_principal.cells("a"),"2U");
            layout_secundario.cells("a").setWidth(<?=$ancho?>); //Valor Dinámico
            layout_secundario.cells("a").fixSize(true,true);
            layout_secundario.cells("a").hideHeader();
            layout_secundario.cells("b").hideHeader();
            grid = layout_secundario.cells("a").attachGrid();
	    grid.enableTooltips("false,false,false,false");
	    dpg = new dataProcessor("midware.php?a=delete&b=<?=$int_cod?>");  //Valor Dinámico
	    dpg.defineAction("eli_ok",eliminacion_handler);
	    dpg.defineAction("no_eli",error_eliminacion_handler);
	    dpg.init(grid);
	    layout_secundario.cells("a").progressOn();
	    grid.loadXML("midware.php?a=grid&b=<?=$int_cod?>",apaga_progress); //Valor Dinámico
	    forma_edicion = layout_secundario.cells("b").attachForm();
	    forma_edicion.loadStruct("xml/<?=$forma_edicion?>",function(){
		<?=$manejo_combo_edicion?>
	    }); //Valor Dinámico
	    grid.attachEvent("onRowSelect",function(rID,cInd){
		forma_edicion.load("midware.php?a=select&b=<?=$int_cod?>&id="+rID); //Valor Dinámico
	    });
	    dpe = new dataProcessor("midware.php?a=update&b=<?=$int_cod?>"); //Valor Dinámico
	    dpe.setTransactionMode("POST", true);
	    dpe.setUpdateMode("off");
	    dpe.defineAction("act_ok",actualizacion_handler);
	    dpe.defineAction("no_act",error_actualizacion_handler);
	    dpe.init(forma_edicion);
	    forma_edicion.attachEvent("onButtonClick",function(id,command){
		if(command == 'guardar') {
		    if(forma_edicion.validate()) {
			<?=$manejo_fecha_edicion?>
			layout_principal.progressOn();
			dpe.sendData();
		    }
		}
	    });
            layout_principal.cells("a").showHeader();
	    toolbar_principal.attachEvent("onClick",function(id){
		if(id=="nuevo") {
		    popupWindow = layout_principal.dhxWins.createWindow("nuevo_forma", 0, 0, <?=$ancho_ventana_nuevo?>, <?=$alto_ventana_nuevo?>); //Valor Dinámico
		    popupWindow.center();
		    popupWindow.setModal(true);
		    popupWindow.setText("<?=$titulo_nuevo?>"); //Valor Dinámico
		    forma_nuevo = popupWindow.attachForm();
		    //forma_nuevo.loadStruct("xml/<?=$forma_nuevo?>");
		    forma_nuevo.loadStruct("xml/<?=$forma_nuevo?>",function(){
			<?=$manejo_combo_nuevo?>
			//var rafa = forma_nuevo.getCombo("cargo");
			//alert(rafa);
			//rafa.loadXMLString('<?=$opciones?>');
			//forma_nuevo.getCombo("cargo").addOption(1,"rafa");
			//forma_nuevo.setReadonly("cargo",true);
			//forma_nuevo.getCombo("cargo").loadXMLString('<?=$opciones?>');
			//forma_nuevo.getCombo("cargo").loadXML('midware.php?a=combo&b=cargo');
			}); //Valor Dinámico
		    dpn = new dataProcessor("midware.php?a=insert&b=<?=$int_cod?>"); //Valor Dinámico
		    dpn.setTransactionMode("POST", true);
		    dpn.setUpdateMode("off");
		    dpn.defineAction("reg_ok",registro_handler);
		    dpn.defineAction("no_reg",error_registro_handler);
		    dpn.init(forma_nuevo);    
		    forma_nuevo.attachEvent("onButtonClick",function(id){
			if(forma_nuevo.validate()) {
			    <?=$manejo_fecha_nuevo?>
			    popupWindow.progressOn();
			    dpn.sendData();
			}
			else
			    alert('Los datos marcados son obligatorios, o no tienen el formato correcto...!!!');
		    });
		}
		if(id=="elimina") {
		    if(grid.getSelectedRowId() != null) {
			grid.deleteRow(grid.getSelectedRowId());
		    }
		    else
			alert('Debe seleccionar un registro para eliminar..!!');
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