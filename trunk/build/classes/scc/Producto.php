<?php



/**
 * Skeleton subclass for representing a row from the 'producto' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ltc
 */
class Producto extends BaseProducto {
    
    static public function listaProductos() {
        $gxml = <<<ram
<rows>
<head>
<column width="80" type="ro" align="center" color="white" sort="na">Id Producto</column>
<column width="70" type="ro" align="left" color="white" sort="na">Tipo</column>
<column width="215" type="ro" align="left" color="white" sort="na">Descripción</column>
<column width="65" type="price" align="right" color="white" sort="na">Costo</column>
<column width="65" type="price" align="right" color="white" sort="na">Precio</column>
</head>
ram;
        $productos = ProductoQuery::create()
                ->orderByIdProducto()
                ->find();
        foreach($productos as $producto) {
            $estado = "Inactivo";
            $tipo = "Bebida";
            if($producto->getEstado() == 'A')
                $estado = "Activa";
            if($producto->getTipo() == 'P')
                $tipo = "Plato";
            $gxml .= '<row id="'.$producto->getIdProducto().'">';
            $gxml .= '<cell>'.$producto->getIdProducto().'</cell>';
            $gxml .= '<cell>'.$tipo.'</cell>';
            $gxml .= '<cell>'.$producto->getDescripcion().'</cell>';
            $gxml .= '<cell>'.$producto->getCosto().'</cell>';
            $gxml .= '<cell>'.$producto->getPrecio().'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaProducto($idPersona) {
        $fecha_actual = date("Y-m-d");
        try {
            $gxml = "";
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME);
            $producto = new Producto();
            $producto->setTipo($_REQUEST[$_REQUEST['ids'].'_tipo']);
            $producto->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
            $producto->setStockHandler($_REQUEST[$_REQUEST['ids'].'_stock_handler']);
            $producto->setStock($_REQUEST[$_REQUEST['ids'].'_stock']);
            $producto->setCosto($_REQUEST[$_REQUEST['ids'].'_costo']);
            $producto->setPrecio($_REQUEST[$_REQUEST['ids'].'_precio']);
            $producto->setFechaIngreso($fecha_actual);
            $producto->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
            $producto->setEspecificaciones($_REQUEST[$_REQUEST['ids'].'_especificaciones']);
            $producto->setImagen($_REQUEST[$_REQUEST['ids'].'_imagen']);
            $producto->setPagaIva($_REQUEST[$_REQUEST['ids'].'_paga_iva']);
            $con->beginTransaction();
            $producto->save($con);
            Log::registraLog($idPersona,'Producto','Producto # '.$producto->getIdProducto().': '.$producto->getDescripcion(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$producto->getIdProducto().'" tid="'.$producto->getIdProducto().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar el nuevo producto</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarProducto($idProducto) {
        try {
            $producto = ProductoQuery::create()
                            ->findPk($idProducto);
            $gxml = '<data>';
            $gxml .= '<tipo>'.$producto->getTipo().'</tipo>';
            $gxml .= '<descripcion>'.$producto->getDescripcion().'</descripcion>';
            $gxml .= '<stock_handler>'.$producto->getStockHandler().'</stock_handler>';
            $gxml .= '<stock>'.$producto->getStock().'</stock>';
            $gxml .= '<costo>'.$producto->getCosto().'</costo>';
            $gxml .= '<precio>'.$producto->getPrecio().'</precio>';
            $gxml .= '<especificaciones>'.$producto->getEspecificaciones().'</especificaciones>';
            $gxml .= '<imagen>'.$producto->getImagen().'</imagen>';
            $gxml .= '<paga_iva>'.$producto->getPagaIva().'</paga_iva>';
            $gxml .= '<estado>'.$producto->getEstado().'</estado>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarProducto($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME);
            $producto = ProductoQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($producto) {
                $producto->setTipo($_REQUEST[$_REQUEST['ids'].'_tipo']);
                $producto->setDescripcion($_REQUEST[$_REQUEST['ids'].'_descripcion']);
                $producto->setStockHandler($_REQUEST[$_REQUEST['ids'].'_stock_handler']);
                $producto->setStock($_REQUEST[$_REQUEST['ids'].'_stock']);
                $producto->setCosto($_REQUEST[$_REQUEST['ids'].'_costo']);
                $producto->setPrecio($_REQUEST[$_REQUEST['ids'].'_precio']);
                $producto->setEstado($_REQUEST[$_REQUEST['ids'].'_estado']);
                $producto->setEspecificaciones($_REQUEST[$_REQUEST['ids'].'_especificaciones']);
                $producto->setImagen($_REQUEST[$_REQUEST['ids'].'_imagen']);
                $producto->setPagaIva($_REQUEST[$_REQUEST['ids'].'_paga_iva']);
                $con->beginTransaction();
                $producto->save($con);
                Log::registraLog($idPersona,'Producto','Producto # '.$producto->getIdProducto().': '.$producto->getDescripcion(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$producto->getIdProducto().'" tid="'.$producto->getIdProducto().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar el producto</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar el producto</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarProducto($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME);
            $producto = ProductoQuery::create()
                    ->findPk($_REQUEST['gr_id']);
            $descripcion = $producto->getDescripcion();
            $con->beginTransaction();
            $producto->delete();
            Log::registraLog($idPersona,'Producto','Producto # '.$_REQUEST['gr_id'].': '.$descripcion,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$producto->getIdProducto().'" tid="'.$producto->getIdProducto().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar el producto</action></data>';
        }
        return $gxml;
    }

} // Producto
