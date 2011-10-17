<?php



/**
 * This class defines the structure of the 'orden' table.
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
class OrdenTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.OrdenTableMap';

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
		$this->setName('orden');
		$this->setPhpName('Orden');
		$this->setClassname('Orden');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDEN', 'IdOrden', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_CUADRE_CAJA', 'IdCuadreCaja', 'INTEGER', 'cuadre_caja', 'ID_CUADRE_CAJA', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('CuadreCaja', 'CuadreCaja', RelationMap::MANY_TO_ONE, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
    $this->addRelation('Factura', 'Factura', RelationMap::ONE_TO_MANY, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
    $this->addRelation('Grupo', 'Grupo', RelationMap::ONE_TO_MANY, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
    $this->addRelation('DetalleOrden', 'DetalleOrden', RelationMap::ONE_TO_MANY, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
	} // buildRelations()

} // OrdenTableMap
