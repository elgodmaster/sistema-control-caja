<?php



/**
 * This class defines the structure of the 'detalle_pedido' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.scc.map
 */
class DetallePedidoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.DetallePedidoTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('detalle_pedido');
		$this->setPhpName('DetallePedido');
		$this->setClassname('DetallePedido');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DETALLE_PEDIDO', 'IdDetallePedido', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_PRODUCTO', 'IdProducto', 'INTEGER', 'producto', 'ID_PRODUCTO', true, null, null);
		$this->addForeignKey('ID_DETALLE_ORDEN', 'IdDetalleOrden', 'INTEGER', 'detalle_orden', 'ID_DETALLE_ORDEN', true, null, null);
		$this->addColumn('CANTIDAD', 'Cantidad', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DetalleOrden', 'DetalleOrden', RelationMap::MANY_TO_ONE, array('id_detalle_orden' => 'id_detalle_orden', ), 'RESTRICT', null);
    $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('id_producto' => 'id_producto', ), 'RESTRICT', null);
	} // buildRelations()

} // DetallePedidoTableMap
