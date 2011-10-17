<?php



/**
 * This class defines the structure of the 'detalle_orden' table.
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
class DetalleOrdenTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.DetalleOrdenTableMap';

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
		$this->setName('detalle_orden');
		$this->setPhpName('DetalleOrden');
		$this->setClassname('DetalleOrden');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DETALLE_ORDEN', 'IdDetalleOrden', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ORDEN', 'IdOrden', 'INTEGER', 'orden', 'ID_ORDEN', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		$this->addColumn('NUMERO_ORDEN', 'NumeroOrden', 'VARCHAR', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('Orden', 'Orden', RelationMap::MANY_TO_ONE, array('id_orden' => 'id_orden', ), 'RESTRICT', null);
    $this->addRelation('DetallePedido', 'DetallePedido', RelationMap::ONE_TO_MANY, array('id_detalle_orden' => 'id_detalle_orden', ), 'RESTRICT', null);
	} // buildRelations()

} // DetalleOrdenTableMap
