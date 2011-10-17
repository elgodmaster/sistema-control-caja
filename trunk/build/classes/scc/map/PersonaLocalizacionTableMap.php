<?php



/**
 * This class defines the structure of the 'persona_localizacion' table.
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
class PersonaLocalizacionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.PersonaLocalizacionTableMap';

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
		$this->setName('persona_localizacion');
		$this->setPhpName('PersonaLocalizacion');
		$this->setClassname('PersonaLocalizacion');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PERSONA_LOCALIZACION', 'IdPersonaLocalizacion', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_LOCALIZACION', 'IdLocalizacion', 'INTEGER', 'localizacion', 'ID_LOCALIZACION', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('Localizacion', 'Localizacion', RelationMap::MANY_TO_ONE, array('id_localizacion' => 'id_localizacion', ), 'RESTRICT', null);
	} // buildRelations()

} // PersonaLocalizacionTableMap
