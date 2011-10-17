<?php



/**
 * This class defines the structure of the 'persona' table.
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
class PersonaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.PersonaTableMap';

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
		$this->setName('persona');
		$this->setPhpName('Persona');
		$this->setClassname('Persona');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PERSONA', 'IdPersona', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_CARGO', 'IdCargo', 'INTEGER', 'cargo', 'ID_CARGO', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 45, null);
		$this->addColumn('APELLIDO', 'Apellido', 'VARCHAR', true, 45, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 50, null);
		$this->addColumn('IDENTIFICACION', 'Identificacion', 'VARCHAR', true, 13, null);
		$this->addColumn('FECHA_NACIMIENTO', 'FechaNacimiento', 'DATE', false, null, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		$this->addColumn('CLAVE', 'Clave', 'VARCHAR', true, 50, null);
		$this->addColumn('FECHA_INGRESO', 'FechaIngreso', 'DATE', true, null, null);
		$this->addColumn('FECHA_SALIDA', 'FechaSalida', 'DATE', false, null, null);
		$this->addColumn('AUTORIZA_PAGO', 'AutorizaPago', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Cargo', 'Cargo', RelationMap::MANY_TO_ONE, array('id_cargo' => 'id_cargo', ), 'RESTRICT', null);
    $this->addRelation('CuadreCaja', 'CuadreCaja', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('Log', 'Log', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('MenuPersona', 'MenuPersona', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('Orden', 'Orden', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('PersonaLocalizacion', 'PersonaLocalizacion', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('UsuarioCaja', 'UsuarioCaja', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('PagoEfectivoRelatedByIdPersona', 'PagoEfectivo', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('PagoEfectivoRelatedByIdAutoriza', 'PagoEfectivo', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_autoriza', ), 'RESTRICT', null);
    $this->addRelation('DetalleOrden', 'DetalleOrden', RelationMap::ONE_TO_MANY, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
	} // buildRelations()

} // PersonaTableMap
