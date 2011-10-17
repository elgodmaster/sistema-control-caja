<?php



/**
 * This class defines the structure of the 'cuadre_caja' table.
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
class CuadreCajaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.CuadreCajaTableMap';

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
		$this->setName('cuadre_caja');
		$this->setPhpName('CuadreCaja');
		$this->setClassname('CuadreCaja');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CUADRE_CAJA', 'IdCuadreCaja', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_PERSONA', 'IdPersona', 'INTEGER', 'persona', 'ID_PERSONA', true, null, null);
		$this->addForeignKey('ID_CAJA', 'IdCaja', 'INTEGER', 'caja', 'ID_CAJA', true, null, null);
		$this->addColumn('FECHA_HORA_I', 'FechaHoraI', 'TIMESTAMP', true, null, null);
		$this->addColumn('FECHA_HORA_F', 'FechaHoraF', 'TIMESTAMP', true, null, null);
		$this->addColumn('BASE_EFECTIVO', 'BaseEfectivo', 'DECIMAL', true, 10, null);
		$this->addColumn('EFECTIVO_INICIAL', 'EfectivoInicial', 'DECIMAL', true, 10, null);
		$this->addColumn('EFECTIVO_FINAL', 'EfectivoFinal', 'DECIMAL', true, 10, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		$this->addColumn('AJUSTE', 'Ajuste', 'DECIMAL', true, 10, null);
		$this->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Caja', 'Caja', RelationMap::MANY_TO_ONE, array('id_caja' => 'id_caja', ), 'RESTRICT', null);
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('id_persona' => 'id_persona', ), 'RESTRICT', null);
    $this->addRelation('IngresoEgreso', 'IngresoEgreso', RelationMap::ONE_TO_MANY, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
    $this->addRelation('Orden', 'Orden', RelationMap::ONE_TO_MANY, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
    $this->addRelation('PagoEfectivo', 'PagoEfectivo', RelationMap::ONE_TO_MANY, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
	} // buildRelations()

} // CuadreCajaTableMap
