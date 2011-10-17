<?php



/**
 * This class defines the structure of the 'producto' table.
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
class ProductoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.ProductoTableMap';

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
		$this->setName('producto');
		$this->setPhpName('Producto');
		$this->setClassname('Producto');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PRODUCTO', 'IdProducto', 'INTEGER', true, null, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 50, null);
		$this->addColumn('TIPO', 'Tipo', 'VARCHAR', true, 1, null);
		$this->addColumn('STOCK_HANDLER', 'StockHandler', 'VARCHAR', true, 1, null);
		$this->addColumn('STOCK', 'Stock', 'DECIMAL', true, 10, null);
		$this->addColumn('COSTO', 'Costo', 'DECIMAL', true, 10, null);
		$this->addColumn('PRECIO', 'Precio', 'DECIMAL', true, 10, null);
		$this->addColumn('FECHA_INGRESO', 'FechaIngreso', 'DATE', true, null, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		$this->addColumn('ESPECIFICACIONES', 'Especificaciones', 'LONGVARCHAR', false, null, null);
		$this->addColumn('IMAGEN', 'Imagen', 'VARCHAR', false, 50, null);
		$this->addColumn('PAGA_IVA', 'PagaIva', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DetalleFactura', 'DetalleFactura', RelationMap::ONE_TO_MANY, array('id_producto' => 'id_producto', ), 'RESTRICT', null);
    $this->addRelation('DetallePedido', 'DetallePedido', RelationMap::ONE_TO_MANY, array('id_producto' => 'id_producto', ), 'RESTRICT', null);
	} // buildRelations()

} // ProductoTableMap
