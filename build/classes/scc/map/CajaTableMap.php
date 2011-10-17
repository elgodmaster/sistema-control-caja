<?php



/**
 * This class defines the structure of the 'caja' table.
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
class CajaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.CajaTableMap';

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
		$this->setName('caja');
		$this->setPhpName('Caja');
		$this->setClassname('Caja');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CAJA', 'IdCaja', 'INTEGER', true, null, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 45, null);
		$this->addColumn('BASE_EFECTIVO', 'BaseEfectivo', 'DECIMAL', true, 10, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CuadreCaja', 'CuadreCaja', RelationMap::ONE_TO_MANY, array('id_caja' => 'id_caja', ), 'RESTRICT', null);
    $this->addRelation('UsuarioCaja', 'UsuarioCaja', RelationMap::ONE_TO_MANY, array('id_caja' => 'id_caja', ), 'RESTRICT', null);
	} // buildRelations()

} // CajaTableMap
