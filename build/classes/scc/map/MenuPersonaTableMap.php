<?php



/**
 * This class defines the structure of the 'menu_persona' table.
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
class MenuPersonaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.MenuPersonaTableMap';

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
		$this->setName('menu_persona');
		$this->setPhpName('MenuPersona');
		$this->setClassname('MenuPersona');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_MENU_PERSONA', 'IdMenuPersona', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_MENU', 'IdMenu', 'INTEGER', 'menu', 'ID_MENU', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('Menu', 'Menu', RelationMap::MANY_TO_ONE, array('id_menu' => 'id_menu', ), 'RESTRICT', null);
	} // buildRelations()

} // MenuPersonaTableMap
