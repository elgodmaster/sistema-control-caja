<?php



/**
 * This class defines the structure of the 'detalle_factura' table.
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
class DetalleFacturaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.DetalleFacturaTableMap';

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
		$this->setName('detalle_factura');
		$this->setPhpName('DetalleFactura');
		$this->setClassname('DetalleFactura');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DETALLE_FACTURA', 'IdDetalleFactura', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_PRODUCTO', 'IdProducto', 'INTEGER', 'producto', 'ID_PRODUCTO', true, null, null);
		$this->addForeignKey('ID_FACTURA', 'IdFactura', 'INTEGER', 'factura', 'ID_FACTURA', true, null, null);
		$this->addColumn('PRECIO', 'Precio', 'DECIMAL', true, 10, null);
		$this->addColumn('COSTO', 'Costo', 'DECIMAL', true, 10, null);
		$this->addColumn('CANTIDAD', 'Cantidad', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Factura', 'Factura', RelationMap::MANY_TO_ONE, array('id_factura' => 'id_factura', ), 'RESTRICT', null);
    $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('id_producto' => 'id_producto', ), 'RESTRICT', null);
	} // buildRelations()

} // DetalleFacturaTableMap
