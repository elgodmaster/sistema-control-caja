<?php



/**
 * This class defines the structure of the 'pago' table.
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
class PagoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.PagoTableMap';

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
		$this->setName('pago');
		$this->setPhpName('Pago');
		$this->setClassname('Pago');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PAGO', 'IdPago', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_TARJETA_CREDITO', 'IdTarjetaCredito', 'INTEGER', 'tarjeta_credito', 'ID_TARJETA_CREDITO', true, null, null);
		$this->addForeignKey('ID_BANCO', 'IdBanco', 'INTEGER', 'banco', 'ID_BANCO', false, null, null);
		$this->addForeignKey('ID_FORMA_PAGO', 'IdFormaPago', 'INTEGER', 'forma_pago', 'ID_FORMA_PAGO', true, null, null);
		$this->addForeignKey('ID_FACTURA', 'IdFactura', 'INTEGER', 'factura', 'ID_FACTURA', true, null, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		$this->addColumn('VALOR', 'Valor', 'DECIMAL', true, 10, null);
		$this->addColumn('COMISION_TARJETA', 'ComisionTarjeta', 'DECIMAL', true, 5, null);
		$this->addColumn('NUMERO_CHQ', 'NumeroChq', 'VARCHAR', false, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Factura', 'Factura', RelationMap::MANY_TO_ONE, array('id_factura' => 'id_factura', ), 'RESTRICT', null);
    $this->addRelation('FormaPago', 'FormaPago', RelationMap::MANY_TO_ONE, array('id_forma_pago' => 'id_forma_pago', ), 'RESTRICT', null);
    $this->addRelation('Banco', 'Banco', RelationMap::MANY_TO_ONE, array('id_banco' => 'id_banco', ), 'RESTRICT', null);
    $this->addRelation('TarjetaCredito', 'TarjetaCredito', RelationMap::MANY_TO_ONE, array('id_tarjeta_credito' => 'id_tarjeta_credito', ), 'RESTRICT', null);
	} // buildRelations()

} // PagoTableMap
