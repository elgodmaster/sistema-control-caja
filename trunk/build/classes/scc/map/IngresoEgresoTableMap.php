<?php



/**
 * This class defines the structure of the 'ingreso_egreso' table.
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
class IngresoEgresoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.IngresoEgresoTableMap';

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
		$this->setName('ingreso_egreso');
		$this->setPhpName('IngresoEgreso');
		$this->setClassname('IngresoEgreso');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_INGRESO_EGRESO', 'IdIngresoEgreso', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_CUADRE_CAJA', 'IdCuadreCaja', 'INTEGER', 'cuadre_caja', 'ID_CUADRE_CAJA', true, null, null);
		$this->addColumn('FECHA_HORA', 'FechaHora', 'TIMESTAMP', true, null, null);
		$this->addColumn('VALOR', 'Valor', 'DECIMAL', true, 10, null);
		$this->addColumn('TIPO', 'Tipo', 'VARCHAR', true, 1, null);
		$this->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', true, null, null);
		$this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CuadreCaja', 'CuadreCaja', RelationMap::MANY_TO_ONE, array('id_cuadre_caja' => 'id_cuadre_caja', ), 'RESTRICT', null);
	} // buildRelations()

} // IngresoEgresoTableMap
