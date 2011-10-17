<?php



/**
 * This class defines the structure of the 'pago_efectivo' table.
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
class PagoEfectivoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.PagoEfectivoTableMap';

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
		$this->setName('pago_efectivo');
		$this->setPhpName('PagoEfectivo');
		$this->setClassname('PagoEfectivo');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PAGO_EFECTIVO', 'IdPagoEfectivo', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		$this->addForeignKey('ID_AUTORIZA', 'IdAutoriza', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		$this->addForeignKey('ID_CUADRE_CAJA', 'IdCuadreCaja', 'INTEGER', 'cuadre_caja', 'ID_CUADRE_CAJA', true, null, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		$this->addColumn('VALOR', 'Valor', 'DECIMAL', true, 10, null);
		$this->addColumn('CONCEPTO', 'Concepto', 'LONGVARCHAR', true, null, null);
		$this->addColumn('RECEPTOR', 'Receptor', 'VARCHAR', true, 200, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CuadreCaja', 'CuadreCaja', RelationMap::MANY_TO_ONE, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
    $this->addRelation('PersonaRelatedByIdPersona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('PersonaRelatedByIdAutoriza', 'Persona', RelationMap::MANY_TO_ONE, array('id_autoriza' => 'id_persona', ), 'RESTRICT', null);
	} // buildRelations()

} // PagoEfectivoTableMap
