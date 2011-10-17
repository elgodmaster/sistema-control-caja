<?php



/**
 * This class defines the structure of the 'factura' table.
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
class FacturaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.FacturaTableMap';

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
		$this->setName('factura');
		$this->setPhpName('Factura');
		$this->setClassname('Factura');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_FACTURA', 'IdFactura', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ORDEN', 'IdOrden', 'INTEGER', 'orden', 'ID_ORDEN', true, null, null);
		$this->addForeignKey('ID_CLIENTE', 'IdCliente', 'INTEGER', 'cliente', 'ID_CLIENTE', true, null, null);
		$this->addColumn('NO_FACTURA', 'NoFactura', 'VARCHAR', true, 20, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		$this->addColumn('SUB_TOTAL', 'SubTotal', 'DECIMAL', true, 10, null);
		$this->addColumn('IVA_PORCENTAJE', 'IvaPorcentaje', 'DECIMAL', true, 10, null);
		$this->addColumn('BASE_IVA', 'BaseIva', 'DECIMAL', true, 10, null);
		$this->addColumn('BASE_IVA_0', 'BaseIva', 'DECIMAL', true, 10, null);
		$this->addColumn('IVA_TOTAL', 'IvaTotal', 'DECIMAL', true, 10, null);
		$this->addColumn('DESCUENTO', 'Descuento', 'DECIMAL', true, 10, null);
		$this->addColumn('VALOR_TOTAL', 'ValorTotal', 'DECIMAL', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('id_cliente' => 'id_cliente', ), 'RESTRICT', null);
    $this->addRelation('Orden', 'Orden', RelationMap::MANY_TO_ONE, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
    $this->addRelation('DetalleFactura', 'DetalleFactura', RelationMap::ONE_TO_MANY, array('id_factura' => 'id_factura', ), 'RESTRICT', null);
    $this->addRelation('Pago', 'Pago', RelationMap::ONE_TO_MANY, array('id_factura' => 'id_factura', ), 'RESTRICT', null);
	} // buildRelations()

} // FacturaTableMap
