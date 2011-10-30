<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    require_once 'includes/interfaz.php';
    Header('Cache-Control: no-cache');
    Header('Pragma: no-cache');
    
    $int_cod = $_REQUEST['int_cod'];
    $titulo1 = "titulo1_".$int_cod; 						$titulo1 = $$titulo1;
    $ancho = "ancho_".$int_cod; 						$ancho = $$ancho;
    $forma_edicion = "forma_edicion_".$int_cod;					$forma_edicion = $$forma_edicion;
    $clear_forma_edicion = "clear_forma_edicion_".$int_cod;			$clear_forma_edicion = $$clear_forma_edicion;
    $ancho_ventana_nuevo = "ancho_ventana_nuevo_".$int_cod;			$ancho_ventana_nuevo = $$ancho_ventana_nuevo;
    $alto_ventana_nuevo = "alto_ventana_nuevo_".$int_cod;			$alto_ventana_nuevo = $$alto_ventana_nuevo;
    $titulo_nuevo = "titulo_nuevo_".$int_cod;					$titulo_nuevo = $$titulo_nuevo;
    $forma_nuevo = "forma_nuevo_".$int_cod;					$forma_nuevo = $$forma_nuevo;
    $forma_hidden = "forma_hidden_".$int_cod;					$forma_hidden = $$forma_hidden;
    $manejo_fecha_nuevo = "manejo_fecha_nuevo_".$int_cod;			$manejo_fecha_nuevo = $$manejo_fecha_nuevo;
    $manejo_fecha_edicion = "manejo_fecha_edicion_".$int_cod;			$manejo_fecha_edicion = $$manejo_fecha_edicion;
    $manejo_combo_nuevo = "manejo_combo_nuevo_".$int_cod;			$manejo_combo_nuevo = $$manejo_combo_nuevo;
    $manejo_combo_edicion = "manejo_combo_edicion_".$int_cod;			$manejo_combo_edicion = $$manejo_combo_edicion;
    $toolbar = "toolbar_".$int_cod;						$toolbar = $$toolbar;
    $toolbar_sc = "toolbar_sc_".$int_cod;					$toolbar_sc = $$toolbar_sc;
    $alto_ventana_opciones = "alto_ventana_opciones_".$int_cod;			$alto_ventana_opciones = $$alto_ventana_opciones;
    $ancho_ventana_opciones = "ancho_ventana_opciones_".$int_cod;		$ancho_ventana_opciones = $$ancho_ventana_opciones;
    $titulo_opciones = "titulo_opciones_".$int_cod;				$titulo_opciones = $$titulo_opciones;
    $alto_ventana_localizaciones = "alto_ventana_localizaciones_".$int_cod;	$alto_ventana_localizaciones = $$alto_ventana_localizaciones;
    $ancho_ventana_localizaciones = "ancho_ventana_localizaciones_".$int_cod;	$ancho_ventana_localizaciones = $$ancho_ventana_localizaciones;
    $titulo_localizaciones = "titulo_localizaciones_".$int_cod;			$titulo_localizaciones = $$titulo_localizaciones;
    $alto_ventana_cajas = "alto_ventana_cajas_".$int_cod;			$alto_ventana_cajas = $$alto_ventana_cajas;
    $ancho_ventana_cajas = "ancho_ventana_cajas_".$int_cod;			$ancho_ventana_cajas = $$ancho_ventana_cajas;
    $titulo_cajas = "titulo_cajas_".$int_cod;					$titulo_cajas = $$titulo_cajas;
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
	var layout_principal,layout_secundario,popupWindow,forma_nuevo,dpg,dpe,dpn,g_rID;
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
		g_rID = rID;
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
		    popupWindow.setIcon("images/nuevo.gif","images/nuevo.gif");
		    forma_nuevo = popupWindow.attachForm();
		    forma_nuevo.loadStruct("xml/<?=$forma_nuevo?>",function(){
			<?=$manejo_combo_nuevo?>
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
		if(id=="opciones_menu") {
		    if(grid.getSelectedRowId() != null) {
			if(g_rID == 0)
			    alert('El usuario administrador tiene acceso a todas las opciones');
			else {
			    popupWindow = layout_principal.dhxWins.createWindow("opciones_menu_tree", 0, 0, <?=$ancho_ventana_opciones?>, <?=$alto_ventana_opciones?>); //Valor Dinámico
			    popupWindow.center();
			    popupWindow.setModal(true);
			    popupWindow.setText("<?=$titulo_opciones?>"); //Valor Dinámico
			    popupWindow.setIcon("images/list.gif","images/list.gif");
			    forma_opciones = popupWindow.attachForm();
			    forma_opciones.loadStruct("xml/<?=$forma_hidden?>"); //Valor Dinámico
			    dpo = new dataProcessor("midware.php?a=tree&b=menu_opciones&c=update&id="+g_rID);
			    dpo.setTransactionMode("POST", true);
			    dpo.setUpdateMode("off");
			    dpo.defineAction("reg_ok",registro_handler);
			    dpo.defineAction("no_reg",error_registro_handler);
			    dpo.init(forma_opciones);
			    toolbar_opciones = popupWindow.attachToolbar();
			    toolbar_opciones.setIconsPath("images/");
			    toolbar_opciones.loadXML("<?=$toolbar_sc?>"); //Valor Dinámico
			    tree_opciones = popupWindow.attachTree();
			    tree_opciones.enableCheckBoxes(true);
			    tree_opciones.enableThreeStateCheckboxes(true);
			    tree_opciones.loadXML("midware.php?a=tree&b=menu_opciones&c=select&id="+g_rID);
			    toolbar_opciones.attachEvent("onClick",function(id){
				if(id=="guardar") {
				    forma_opciones.setItemValue("campo",tree_opciones.getAllCheckedBranches());
				    dpo.sendData();
				}
			    });
			}
		    }
		    else
			alert('Debe seleccionar un registro para editar..!!');
		}
		if(id=="localizaciones") {
		    if(grid.getSelectedRowId() != null) {
			if(g_rID == 0)
			    alert('El usuario administrador no tiene acceso a las localizaciones');
			else {
			    popupWindow = layout_principal.dhxWins.createWindow("localizaciones_tree", 0, 0, <?=$ancho_ventana_localizaciones?>, <?=$alto_ventana_localizaciones?>); //Valor Dinámico
			    popupWindow.center();
			    popupWindow.setModal(true);
			    popupWindow.setText("<?=$titulo_localizaciones?>"); //Valor Dinámico
			    popupWindow.setIcon("images/locali.gif","images/locali.gif");
			    forma_localizaciones = popupWindow.attachForm();
			    forma_localizaciones.loadStruct("xml/<?=$forma_hidden?>"); //Valor Dinámico
			    dpl = new dataProcessor("midware.php?a=tree&b=localizaciones&c=update&id="+g_rID);
			    dpl.setTransactionMode("POST", true);
			    dpl.setUpdateMode("off");
			    dpl.defineAction("reg_ok",registro_handler);
			    dpl.defineAction("no_reg",error_registro_handler);
			    dpl.init(forma_localizaciones);
			    toolbar_localizaciones = popupWindow.attachToolbar();
			    toolbar_localizaciones.setIconsPath("images/");
			    toolbar_localizaciones.loadXML("<?=$toolbar_sc?>"); //Valor Dinámico
			    tree_localizaciones = popupWindow.attachTree();
			    tree_localizaciones.enableCheckBoxes(true);
			    tree_localizaciones.enableThreeStateCheckboxes(true);
			    tree_localizaciones.loadXML("midware.php?a=tree&b=localizaciones&c=select&id="+g_rID);
			    toolbar_localizaciones.attachEvent("onClick",function(id){
				if(id=="guardar") {
				    forma_localizaciones.setItemValue("campo",tree_localizaciones.getAllCheckedBranches());
				    dpl.sendData();
				}
			    });
			}
		    }
		    else
			alert('Debe seleccionar un registro para editar..!!');
		}
		if(id=="cajas") {
		    if(grid.getSelectedRowId() != null) {
			if(g_rID == 0)
			    alert('El usuario administrador no puede tener acceso a cajas');
			else {
			    popupWindow = layout_principal.dhxWins.createWindow("cajas_tree", 0, 0, <?=$ancho_ventana_cajas?>, <?=$alto_ventana_cajas?>); //Valor Dinámico
			    popupWindow.center();
			    popupWindow.setModal(true);
			    popupWindow.setText("<?=$titulo_cajas?>"); //Valor Dinámico
			    popupWindow.setIcon("images/caja.gif","images/caja.gif");
			    forma_cajas = popupWindow.attachForm();
			    forma_cajas.loadStruct("xml/<?=$forma_hidden?>"); //Valor Dinámico
			    dpc = new dataProcessor("midware.php?a=tree&b=cajas&c=update&id="+g_rID);
			    dpc.setTransactionMode("POST", true);
			    dpc.setUpdateMode("off");
			    dpc.defineAction("reg_ok",registro_handler);
			    dpc.defineAction("no_reg",error_registro_handler);
			    dpc.init(forma_cajas);
			    toolbar_cajas = popupWindow.attachToolbar();
			    toolbar_cajas.setIconsPath("images/");
			    toolbar_cajas.loadXML("<?=$toolbar_sc?>"); //Valor Dinámico
			    tree_cajas = popupWindow.attachTree();
			    tree_cajas.enableCheckBoxes(true);
			    tree_cajas.enableThreeStateCheckboxes(true);
			    tree_cajas.loadXML("midware.php?a=tree&b=cajas&c=select&id="+g_rID);
			    toolbar_cajas.attachEvent("onClick",function(id){
				if(id=="guardar") {
				    forma_cajas.setItemValue("campo",tree_cajas.getAllCheckedBranches());
				    dpc.sendData();
				}
			    });
			}
		    }
		    else
			alert('Debe seleccionar un registro para editar..!!');
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