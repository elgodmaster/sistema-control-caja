<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    header("Content-type: text/xml");
    echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
    $fp = fopen('rafa.txt','w');
    fwrite($fp,serialize($_REQUEST));
    fclose($fp);
    switch($_REQUEST['a']) {        
        //Listas para GRID
        case "grid":
            switch($_REQUEST['b']) {
                case "4":
                    $gxml = Caja::listaCajas();
                    break;
                case "5":
                    $gxml = Cargo::listaCargos();
                    break;
                case "6":
                    $gxml = Localizacion::listaLocalizaciones();
                    break;
                case "7":
                    $gxml = Mesa::listaMesas();
                    break;
                case "8":
                    $gxml = Producto::listaProductos();
                    break;
                case "10":
                    $gxml = Persona::listaPersonas();
                    break;
                case "11":
                    $gxml = Cliente::listaClientes();
                    break;
                case "16":
                    $gxml = TarjetaCredito::listaTarjetasCredito();
                    break;
                case "17":
                    $gxml = Banco::listaBancos();
                    break;
                case "18":
                    $gxml = FormaPago::listaFormaPago();
                    break;
            }
            break;
        
        //Inserts
        case "insert":
            switch($_REQUEST['b']) {
                case "4":
                    $gxml = Caja::guardaCaja($persona_sesion->getIdPersona());
                    break;
                case "5":
                    $gxml = Cargo::guardaCargo($persona_sesion->getIdPersona());
                    break;
                case "6":
                    $gxml = Localizacion::guardaLocalizacion($persona_sesion->getIdPersona());
                    break;
                case "7":
                    $gxml = Mesa::guardaMesa($persona_sesion->getIdPersona());
                    break;
                case "8":
                    $gxml = Producto::guardaProducto($persona_sesion->getIdPersona());
                    break;
                case "10":
                    $gxml = Persona::guardaPersona($persona_sesion->getIdPersona());
                    break;
                case "11":
                    $gxml = Cliente::guardaCliente($persona_sesion->getIdPersona());
                    break;
                case "16":
                    $gxml = TarjetaCredito::guardaTarjetaCredito($persona_sesion->getIdPersona());
                    break;
                case "17":
                    $gxml = Banco::guardaBanco($persona_sesion->getIdPersona());
                    break;
                case "18":
                    $gxml = FormaPago::guardaFormaPago($persona_sesion->getIdPersona());
                    break;
            }
            break;
        
        //Selección para Forma Update
        case "select":
            switch($_REQUEST['b']) {
                case "4":
                    $gxml = Caja::seleccionarCaja($_REQUEST['id']);
                    break;
                case "5":
                    $gxml = Cargo::seleccionarCargo($_REQUEST['id']);
                    break;
                case "6":
                    $gxml = Localizacion::seleccionarLocalizacion($_REQUEST['id']);
                    break;
                case "7":
                    $gxml = Mesa::seleccionarMesa($_REQUEST['id']);
                    break;
                case "8":
                    $gxml = Producto::seleccionarProducto($_REQUEST['id']);
                    break;
                case "10":
                    $gxml = Persona::seleccionarPersona($_REQUEST['id']);
                    break;
                case "16":
                    $gxml = TarjetaCredito::seleccionarTarjetaCredito($_REQUEST['id']);
                    break;
                case "17":
                    $gxml = Banco::seleccionarBanco($_REQUEST['id']);
                    break;
                case "18":
                    $gxml = FormaPago::seleccionarFormaPago($_REQUEST['id']);
                    break;
            }
            break;
        
        //Actualizaciones
        case "update":
            switch($_REQUEST['b']) {
                case "4":
                    $gxml = Caja::actualizarCaja($persona_sesion->getIdPersona());
                    break;
                case "5":
                    $gxml = Cargo::actualizarCargo($persona_sesion->getIdPersona());
                    break;
                case "6":
                    $gxml = Localizacion::actualizarLocalizacion($persona_sesion->getIdPersona());
                    break;
                case "7":
                    $gxml = Mesa::actualizarMesa($persona_sesion->getIdPersona());
                    break;
                case "8":
                    $gxml = Producto::actualizarProducto($persona_sesion->getIdPersona());
                    break;
                case "10":
                    $gxml = Persona::actualizarPersona($persona_sesion->getIdPersona());
                    break;
                case "16":
                    $gxml = TarjetaCredito::actualizarTarjetaCredito($persona_sesion->getIdPersona());
                    break;
                case "17":
                    $gxml = Banco::actualizarBanco($persona_sesion->getIdPersona());
                    break;
                case "18":
                    $gxml = FormaPago::actualizarFormaPago($persona_sesion->getIdPersona());
                    break;
            }
            break;
        
        //Eliminaciones
        case "delete":
            switch($_REQUEST['b']) {
                case "4":
                    $gxml = Caja::eliminarCaja($persona_sesion->getIdPersona());
                    break;
                case "5":
                    $gxml = Cargo::eliminarCargo($persona_sesion->getIdPersona());
                    break;
                case "6":
                    $gxml = Localizacion::eliminarLocalizacion($persona_sesion->getIdPersona());
                    break;
                case "7":
                    $gxml = Mesa::eliminarMesa($persona_sesion->getIdPersona());
                    break;
                case "8":
                    $gxml = Producto::eliminarProducto($persona_sesion->getIdPersona());
                    break;
                case "10":
                    $gxml = Persona::eliminarPersona($persona_sesion->getIdPersona());
                    break;
                case "16":
                    $gxml = TarjetaCredito::eliminarTarjetaCredito($persona_sesion->getIdPersona());
                    break;
                case "17":
                    $gxml = Banco::eliminarBanco($persona_sesion->getIdPersona());
                    break;
                case "18":
                    $gxml = FormaPago::eliminarFormaPago($persona_sesion->getIdPersona());
                    break;
            }
            break;
        
        //Combos
        case "combo":
            switch($_REQUEST['b']) {
                case "cargo":
                    $gxml = Cargo::listaCargosCombo();
                    break;
            }
            break;
        
        //Trees
        case "tree":
            switch($_REQUEST['b']) {
                case "menu_opciones":
                    switch($_REQUEST['c']) {
                        case "select":
                            $gxml = $persona_sesion->generaArbolOpciones(1,$_REQUEST['id']);
                            break;
                        case "update":
                            $gxml = $persona_sesion->actualizaArbolOpcionesMenu($_REQUEST[$_REQUEST['ids'].'_campo'],$_REQUEST['id']);
                            break;
                    }
                    break;
                case "localizaciones":
                    switch($_REQUEST['c']) {
                        case "select":
                            $gxml = $persona_sesion->generaArbolLocalizaciones($_REQUEST['id']);
                            break;
                        case "update":
                            $gxml = $persona_sesion->actualizaArbolLocalizaciones($_REQUEST[$_REQUEST['ids'].'_campo'],$_REQUEST['id']);
                            break;
                    }
                    break;
                case "cajas":
                    switch($_REQUEST['c']) {
                        case "select":
                            $gxml = $persona_sesion->generaArbolCajas($_REQUEST['id']);
                            break;
                        case "update":
                            $gxml = $persona_sesion->actualizaArbolCajas($_REQUEST[$_REQUEST['ids'].'_campo'],$_REQUEST['id']);
                            break;
                    }
                    break;
            }
            break;
    }
    Propel::close();
    echo mb_convert_encoding($gxml,"ISO-8859-1","UTF-8");
?>