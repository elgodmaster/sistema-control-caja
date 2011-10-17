<?php



/**
 * This class defines the structure of the 'grupo' table.
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
class GrupoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.GrupoTableMap';

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
		$this->setName('grupo');
		$this->setPhpName('Grupo');
		$this->setClassname('Grupo');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_GRUPO', 'IdGrupo', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ORDEN', 'IdOrden', 'INTEGER', 'orden', 'ID_ORDEN', true, null, null);
		$this->addForeignKey('ID_MESA', 'IdMesa', 'INTEGER', 'mesa', 'ID_MESA', true, null, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 70, null);
		$this->addColumn('FECHA_CREACION', 'FechaCreacion', 'DATE', true, null, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		$this->addColumn('TIPO', 'Tipo', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Mesa', 'Mesa', RelationMap::MANY_TO_ONE, array('id_mesa' => 'id_mesa', ), 'RESTRICT', null);
    $this->addRelation('Orden', 'Orden', RelationMap::MANY_TO_ONE, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
	} // buildRelations()

} // GrupoTableMap
