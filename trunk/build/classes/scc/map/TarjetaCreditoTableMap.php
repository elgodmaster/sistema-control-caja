<?php



/**
 * This class defines the structure of the 'tarjeta_credito' table.
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
class TarjetaCreditoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.TarjetaCreditoTableMap';

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
		$this->setName('tarjeta_credito');
		$this->setPhpName('TarjetaCredito');
		$this->setClassname('TarjetaCredito');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_TARJETA_CREDITO', 'IdTarjetaCredito', 'INTEGER', true, null, null);
		$this->addColumn('EMISOR', 'Emisor', 'VARCHAR', true, 100, null);
		$this->addColumn('PORCENTAJE_COMISION', 'PorcentajeComision', 'DECIMAL', true, 5, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Pago', 'Pago', RelationMap::ONE_TO_MANY, array('id_tarjeta_credito' => 'id_tarjeta_credito', ), 'RESTRICT', null);
	} // buildRelations()

} // TarjetaCreditoTableMap
