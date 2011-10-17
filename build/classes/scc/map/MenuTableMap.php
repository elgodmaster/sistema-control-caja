<?php



/**
 * This class defines the structure of the 'menu' table.
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
class MenuTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.MenuTableMap';

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
		$this->setName('menu');
		$this->setPhpName('Menu');
		$this->setClassname('Menu');
		$this->setPackage('scc');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_MENU', 'IdMenu', 'INTEGER', true, null, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 30, null);
		$this->addColumn('ID_MENU_PADRE', 'IdMenuPadre', 'INTEGER', true, null, null);
		$this->addColumn('LINK', 'Link', 'VARCHAR', true, 100, null);
		$this->addColumn('NIVEL', 'Nivel', 'INTEGER', true, null, null);
		$this->addColumn('ORDEN', 'Orden', 'INTEGER', true, null, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('MenuPersona', 'MenuPersona', RelationMap::ONE_TO_MANY, array('id_menu' => 'id_menu', ), 'RESTRICT', null);
	} // buildRelations()

} // MenuTableMap
