<?php



/**
 * This class defines the structure of the 'localizacion' table.
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
class LocalizacionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.LocalizacionTableMap';

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
		$this->setName('localizacion');
		$this->setPhpName('Localizacion');
		$this->setClassname('Localizacion');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_LOCALIZACION', 'IdLocalizacion', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 20, null);
		$this->addColumn('OUTPUT_DEVICE', 'OutputDevice', 'VARCHAR', true, 1, null);
		$this->addColumn('DIRECCION_PRINTER', 'DireccionPrinter', 'VARCHAR', false, 50, null);
		$this->addColumn('VISIBLE', 'Visible', 'VARCHAR', true, 1, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Mensaje', 'Mensaje', RelationMap::ONE_TO_MANY, array('id_localizacion' => 'id_localizacion', ), 'RESTRICT', null);
    $this->addRelation('PersonaLocalizacion', 'PersonaLocalizacion', RelationMap::ONE_TO_MANY, array('id_localizacion' => 'id_localizacion', ), 'RESTRICT', null);
	} // buildRelations()

} // LocalizacionTableMap
