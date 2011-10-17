<?php



/**
 * This class defines the structure of the 'cliente' table.
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
class ClienteTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'scc.map.ClienteTableMap';

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
		$this->setName('cliente');
		$this->setPhpName('Cliente');
		$this->setClassname('Cliente');
		$this->setPackage('scc');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CLIENTE', 'IdCliente', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 50, null);
		$this->addColumn('APELLIDO', 'Apellido', 'VARCHAR', true, 50, null);
		$this->addColumn('RUC', 'Ruc', 'VARCHAR', true, 13, null);
		$this->addColumn('TELEFONO', 'Telefono', 'VARCHAR', true, 15, null);
		$this->addColumn('DIRECCION', 'Direccion', 'VARCHAR', true, 100, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 50, null);
		$this->addColumn('CONTACTO', 'Contacto', 'VARCHAR', false, 70, null);
		$this->addColumn('FECHA_NACIMIENTO', 'FechaNacimiento', 'DATE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Factura', 'Factura', RelationMap::ONE_TO_MANY, array('id_cliente' => 'id_cliente', ), 'RESTRICT', null);
	} // buildRelations()

} // ClienteTableMap
