<?php


/**
 * Base static class for performing query and update operations on the 'pago' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePagoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'scc';

	/** the table name for this class */
	const TABLE_NAME = 'pago';

	/** the related Propel class for this table */
	const OM_CLASS = 'Pago';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'scc.Pago';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PagoTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 9;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 9;

	/** the column name for the ID_PAGO field */
	const ID_PAGO = 'pago.ID_PAGO';

	/** the column name for the ID_TARJETA_CREDITO field */
	const ID_TARJETA_CREDITO = 'pago.ID_TARJETA_CREDITO';

	/** the column name for the ID_BANCO field */
	const ID_BANCO = 'pago.ID_BANCO';

	/** the column name for the ID_FORMA_PAGO field */
	const ID_FORMA_PAGO = 'pago.ID_FORMA_PAGO';

	/** the column name for the ID_FACTURA field */
	const ID_FACTURA = 'pago.ID_FACTURA';

	/** the column name for the FECHA_HORA field */
	const FECHA_HORA = 'pago.FECHA_HORA';

	/** the column name for the VALOR field */
	const VALOR = 'pago.VALOR';

	/** the column name for the COMISION_TARJETA field */
	const COMISION_TARJETA = 'pago.COMISION_TARJETA';

	/** the column name for the NUMERO_CHQ field */
	const NUMERO_CHQ = 'pago.NUMERO_CHQ';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of Pago objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Pago[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdPago', 'IdTarjetaCredito', 'IdBanco', 'IdFormaPago', 'IdFactura', 'FechaHora', 'Valor', 'ComisionTarjeta', 'NumeroChq', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPago', 'idTarjetaCredito', 'idBanco', 'idFormaPago', 'idFactura', 'fechaHora', 'valor', 'comisionTarjeta', 'numeroChq', ),
		BasePeer::TYPE_COLNAME => array (self::ID_PAGO, self::ID_TARJETA_CREDITO, self::ID_BANCO, self::ID_FORMA_PAGO, self::ID_FACTURA, self::FECHA_HORA, self::VALOR, self::COMISION_TARJETA, self::NUMERO_CHQ, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PAGO', 'ID_TARJETA_CREDITO', 'ID_BANCO', 'ID_FORMA_PAGO', 'ID_FACTURA', 'FECHA_HORA', 'VALOR', 'COMISION_TARJETA', 'NUMERO_CHQ', ),
		BasePeer::TYPE_FIELDNAME => array ('id_pago', 'id_tarjeta_credito', 'id_banco', 'id_forma_pago', 'id_factura', 'fecha_hora', 'valor', 'comision_tarjeta', 'numero_chq', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdPago' => 0, 'IdTarjetaCredito' => 1, 'IdBanco' => 2, 'IdFormaPago' => 3, 'IdFactura' => 4, 'FechaHora' => 5, 'Valor' => 6, 'ComisionTarjeta' => 7, 'NumeroChq' => 8, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPago' => 0, 'idTarjetaCredito' => 1, 'idBanco' => 2, 'idFormaPago' => 3, 'idFactura' => 4, 'fechaHora' => 5, 'valor' => 6, 'comisionTarjeta' => 7, 'numeroChq' => 8, ),
		BasePeer::TYPE_COLNAME => array (self::ID_PAGO => 0, self::ID_TARJETA_CREDITO => 1, self::ID_BANCO => 2, self::ID_FORMA_PAGO => 3, self::ID_FACTURA => 4, self::FECHA_HORA => 5, self::VALOR => 6, self::COMISION_TARJETA => 7, self::NUMERO_CHQ => 8, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PAGO' => 0, 'ID_TARJETA_CREDITO' => 1, 'ID_BANCO' => 2, 'ID_FORMA_PAGO' => 3, 'ID_FACTURA' => 4, 'FECHA_HORA' => 5, 'VALOR' => 6, 'COMISION_TARJETA' => 7, 'NUMERO_CHQ' => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id_pago' => 0, 'id_tarjeta_credito' => 1, 'id_banco' => 2, 'id_forma_pago' => 3, 'id_factura' => 4, 'fecha_hora' => 5, 'valor' => 6, 'comision_tarjeta' => 7, 'numero_chq' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. PagoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PagoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(PagoPeer::ID_PAGO);
			$criteria->addSelectColumn(PagoPeer::ID_TARJETA_CREDITO);
			$criteria->addSelectColumn(PagoPeer::ID_BANCO);
			$criteria->addSelectColumn(PagoPeer::ID_FORMA_PAGO);
			$criteria->addSelectColumn(PagoPeer::ID_FACTURA);
			$criteria->addSelectColumn(PagoPeer::FECHA_HORA);
			$criteria->addSelectColumn(PagoPeer::VALOR);
			$criteria->addSelectColumn(PagoPeer::COMISION_TARJETA);
			$criteria->addSelectColumn(PagoPeer::NUMERO_CHQ);
		} else {
			$criteria->addSelectColumn($alias . '.ID_PAGO');
			$criteria->addSelectColumn($alias . '.ID_TARJETA_CREDITO');
			$criteria->addSelectColumn($alias . '.ID_BANCO');
			$criteria->addSelectColumn($alias . '.ID_FORMA_PAGO');
			$criteria->addSelectColumn($alias . '.ID_FACTURA');
			$criteria->addSelectColumn($alias . '.FECHA_HORA');
			$criteria->addSelectColumn($alias . '.VALOR');
			$criteria->addSelectColumn($alias . '.COMISION_TARJETA');
			$criteria->addSelectColumn($alias . '.NUMERO_CHQ');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Pago
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PagoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return PagoPeer::populateObjects(PagoPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PagoPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Pago $value A Pago object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdPago();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Pago object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Pago) {
				$key = (string) $value->getIdPago();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Pago object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Pago Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to pago
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = PagoPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PagoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PagoPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Pago object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PagoPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PagoPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PagoPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = PagoPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PagoPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Factura table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinFactura(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related FormaPago table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinFormaPago(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Banco table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinBanco(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related TarjetaCredito table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinTarjetaCredito(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with their Factura objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinFactura(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol = PagoPeer::NUM_HYDRATE_COLUMNS;
		FacturaPeer::addSelectColumns($criteria);

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = FacturaPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = FacturaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					FacturaPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Pago) to $obj2 (Factura)
				$obj2->addPago($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with their FormaPago objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinFormaPago(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol = PagoPeer::NUM_HYDRATE_COLUMNS;
		FormaPagoPeer::addSelectColumns($criteria);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = FormaPagoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = FormaPagoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = FormaPagoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					FormaPagoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Pago) to $obj2 (FormaPago)
				$obj2->addPago($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with their Banco objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinBanco(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol = PagoPeer::NUM_HYDRATE_COLUMNS;
		BancoPeer::addSelectColumns($criteria);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = BancoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = BancoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = BancoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					BancoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Pago) to $obj2 (Banco)
				$obj2->addPago($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with their TarjetaCredito objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinTarjetaCredito(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol = PagoPeer::NUM_HYDRATE_COLUMNS;
		TarjetaCreditoPeer::addSelectColumns($criteria);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = TarjetaCreditoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = TarjetaCreditoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = TarjetaCreditoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					TarjetaCreditoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Pago) to $obj2 (TarjetaCredito)
				$obj2->addPago($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of Pago objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol2 = PagoPeer::NUM_HYDRATE_COLUMNS;

		FacturaPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + FacturaPeer::NUM_HYDRATE_COLUMNS;

		FormaPagoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + FormaPagoPeer::NUM_HYDRATE_COLUMNS;

		BancoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + BancoPeer::NUM_HYDRATE_COLUMNS;

		TarjetaCreditoPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + TarjetaCreditoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Factura rows

			$key2 = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = FacturaPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = FacturaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					FacturaPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Pago) to the collection in $obj2 (Factura)
				$obj2->addPago($obj1);
			} // if joined row not null

			// Add objects for joined FormaPago rows

			$key3 = FormaPagoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = FormaPagoPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = FormaPagoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					FormaPagoPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (Pago) to the collection in $obj3 (FormaPago)
				$obj3->addPago($obj1);
			} // if joined row not null

			// Add objects for joined Banco rows

			$key4 = BancoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = BancoPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = BancoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BancoPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (Pago) to the collection in $obj4 (Banco)
				$obj4->addPago($obj1);
			} // if joined row not null

			// Add objects for joined TarjetaCredito rows

			$key5 = TarjetaCreditoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = TarjetaCreditoPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = TarjetaCreditoPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					TarjetaCreditoPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (Pago) to the collection in $obj5 (TarjetaCredito)
				$obj5->addPago($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Factura table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptFactura(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related FormaPago table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptFormaPago(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Banco table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptBanco(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related TarjetaCredito table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptTarjetaCredito(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PagoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PagoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with all related objects except Factura.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptFactura(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol2 = PagoPeer::NUM_HYDRATE_COLUMNS;

		FormaPagoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + FormaPagoPeer::NUM_HYDRATE_COLUMNS;

		BancoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + BancoPeer::NUM_HYDRATE_COLUMNS;

		TarjetaCreditoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + TarjetaCreditoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined FormaPago rows

				$key2 = FormaPagoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = FormaPagoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = FormaPagoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					FormaPagoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Pago) to the collection in $obj2 (FormaPago)
				$obj2->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined Banco rows

				$key3 = BancoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BancoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BancoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BancoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Pago) to the collection in $obj3 (Banco)
				$obj3->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined TarjetaCredito rows

				$key4 = TarjetaCreditoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = TarjetaCreditoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = TarjetaCreditoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					TarjetaCreditoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Pago) to the collection in $obj4 (TarjetaCredito)
				$obj4->addPago($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with all related objects except FormaPago.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptFormaPago(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol2 = PagoPeer::NUM_HYDRATE_COLUMNS;

		FacturaPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + FacturaPeer::NUM_HYDRATE_COLUMNS;

		BancoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + BancoPeer::NUM_HYDRATE_COLUMNS;

		TarjetaCreditoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + TarjetaCreditoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Factura rows

				$key2 = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = FacturaPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = FacturaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					FacturaPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Pago) to the collection in $obj2 (Factura)
				$obj2->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined Banco rows

				$key3 = BancoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BancoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BancoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BancoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Pago) to the collection in $obj3 (Banco)
				$obj3->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined TarjetaCredito rows

				$key4 = TarjetaCreditoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = TarjetaCreditoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = TarjetaCreditoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					TarjetaCreditoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Pago) to the collection in $obj4 (TarjetaCredito)
				$obj4->addPago($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with all related objects except Banco.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptBanco(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol2 = PagoPeer::NUM_HYDRATE_COLUMNS;

		FacturaPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + FacturaPeer::NUM_HYDRATE_COLUMNS;

		FormaPagoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + FormaPagoPeer::NUM_HYDRATE_COLUMNS;

		TarjetaCreditoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + TarjetaCreditoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_TARJETA_CREDITO, TarjetaCreditoPeer::ID_TARJETA_CREDITO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Factura rows

				$key2 = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = FacturaPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = FacturaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					FacturaPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Pago) to the collection in $obj2 (Factura)
				$obj2->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined FormaPago rows

				$key3 = FormaPagoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = FormaPagoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = FormaPagoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					FormaPagoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Pago) to the collection in $obj3 (FormaPago)
				$obj3->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined TarjetaCredito rows

				$key4 = TarjetaCreditoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = TarjetaCreditoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = TarjetaCreditoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					TarjetaCreditoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Pago) to the collection in $obj4 (TarjetaCredito)
				$obj4->addPago($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Pago objects pre-filled with all related objects except TarjetaCredito.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Pago objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptTarjetaCredito(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PagoPeer::addSelectColumns($criteria);
		$startcol2 = PagoPeer::NUM_HYDRATE_COLUMNS;

		FacturaPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + FacturaPeer::NUM_HYDRATE_COLUMNS;

		FormaPagoPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + FormaPagoPeer::NUM_HYDRATE_COLUMNS;

		BancoPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + BancoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PagoPeer::ID_FACTURA, FacturaPeer::ID_FACTURA, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_FORMA_PAGO, FormaPagoPeer::ID_FORMA_PAGO, $join_behavior);

		$criteria->addJoin(PagoPeer::ID_BANCO, BancoPeer::ID_BANCO, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PagoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PagoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PagoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PagoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Factura rows

				$key2 = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = FacturaPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = FacturaPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					FacturaPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Pago) to the collection in $obj2 (Factura)
				$obj2->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined FormaPago rows

				$key3 = FormaPagoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = FormaPagoPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = FormaPagoPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					FormaPagoPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (Pago) to the collection in $obj3 (FormaPago)
				$obj3->addPago($obj1);

			} // if joined row is not null

				// Add objects for joined Banco rows

				$key4 = BancoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BancoPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BancoPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BancoPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (Pago) to the collection in $obj4 (Banco)
				$obj4->addPago($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BasePagoPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePagoPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PagoTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? PagoPeer::CLASS_DEFAULT : PagoPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Pago or Criteria object.
	 *
	 * @param      mixed $values Criteria or Pago object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Pago object
		}

		if ($criteria->containsKey(PagoPeer::ID_PAGO) && $criteria->keyContainsValue(PagoPeer::ID_PAGO) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PagoPeer::ID_PAGO.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Pago or Criteria object.
	 *
	 * @param      mixed $values Criteria or Pago object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PagoPeer::ID_PAGO);
			$value = $criteria->remove(PagoPeer::ID_PAGO);
			if ($value) {
				$selectCriteria->add(PagoPeer::ID_PAGO, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PagoPeer::TABLE_NAME);
			}

		} else { // $values is Pago object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the pago table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PagoPeer::TABLE_NAME, $con, PagoPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PagoPeer::clearInstancePool();
			PagoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Pago or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Pago object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PagoPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Pago) { // it's a model object
			// invalidate the cache for this single object
			PagoPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PagoPeer::ID_PAGO, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				PagoPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			PagoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Pago object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Pago $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PagoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PagoPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(PagoPeer::DATABASE_NAME, PagoPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Pago
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PagoPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PagoPeer::DATABASE_NAME);
		$criteria->add(PagoPeer::ID_PAGO, $pk);

		$v = PagoPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PagoPeer::DATABASE_NAME);
			$criteria->add(PagoPeer::ID_PAGO, $pks, Criteria::IN);
			$objs = PagoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePagoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePagoPeer::buildTableMap();

