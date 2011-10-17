<?php


/**
 * Base class that represents a row from the 'producto' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseProducto extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ProductoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ProductoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_producto field.
	 * @var        int
	 */
	protected $id_producto;

	/**
	 * The value for the descripcion field.
	 * @var        string
	 */
	protected $descripcion;

	/**
	 * The value for the tipo field.
	 * @var        string
	 */
	protected $tipo;

	/**
	 * The value for the stock_handler field.
	 * @var        string
	 */
	protected $stock_handler;

	/**
	 * The value for the stock field.
	 * @var        string
	 */
	protected $stock;

	/**
	 * The value for the costo field.
	 * @var        string
	 */
	protected $costo;

	/**
	 * The value for the precio field.
	 * @var        string
	 */
	protected $precio;

	/**
	 * The value for the fecha_ingreso field.
	 * @var        string
	 */
	protected $fecha_ingreso;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * The value for the especificaciones field.
	 * @var        string
	 */
	protected $especificaciones;

	/**
	 * The value for the imagen field.
	 * @var        string
	 */
	protected $imagen;

	/**
	 * The value for the paga_iva field.
	 * @var        string
	 */
	protected $paga_iva;

	/**
	 * @var        array DetalleFactura[] Collection to store aggregation of DetalleFactura objects.
	 */
	protected $collDetalleFacturas;

	/**
	 * @var        array DetallePedido[] Collection to store aggregation of DetallePedido objects.
	 */
	protected $collDetallePedidos;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id_producto] column value.
	 * 
	 * @return     int
	 */
	public function getIdProducto()
	{
		return $this->id_producto;
	}

	/**
	 * Get the [descripcion] column value.
	 * 
	 * @return     string
	 */
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	/**
	 * Get the [tipo] column value.
	 * B =\g Bebida / P =\g Plato
	 * @return     string
	 */
	public function getTipo()
	{
		return $this->tipo;
	}

	/**
	 * Get the [stock_handler] column value.
	 * 
	 * @return     string
	 */
	public function getStockHandler()
	{
		return $this->stock_handler;
	}

	/**
	 * Get the [stock] column value.
	 * 
	 * @return     string
	 */
	public function getStock()
	{
		return $this->stock;
	}

	/**
	 * Get the [costo] column value.
	 * 
	 * @return     string
	 */
	public function getCosto()
	{
		return $this->costo;
	}

	/**
	 * Get the [precio] column value.
	 * 
	 * @return     string
	 */
	public function getPrecio()
	{
		return $this->precio;
	}

	/**
	 * Get the [optionally formatted] temporal [fecha_ingreso] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaIngreso($format = '%x')
	{
		if ($this->fecha_ingreso === null) {
			return null;
		}


		if ($this->fecha_ingreso === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_ingreso);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_ingreso, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [estado] column value.
	 * 
	 * @return     string
	 */
	public function getEstado()
	{
		return $this->estado;
	}

	/**
	 * Get the [especificaciones] column value.
	 * 
	 * @return     string
	 */
	public function getEspecificaciones()
	{
		return $this->especificaciones;
	}

	/**
	 * Get the [imagen] column value.
	 * 
	 * @return     string
	 */
	public function getImagen()
	{
		return $this->imagen;
	}

	/**
	 * Get the [paga_iva] column value.
	 * 
	 * @return     string
	 */
	public function getPagaIva()
	{
		return $this->paga_iva;
	}

	/**
	 * Set the value of [id_producto] column.
	 * 
	 * @param      int $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setIdProducto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_producto !== $v) {
			$this->id_producto = $v;
			$this->modifiedColumns[] = ProductoPeer::ID_PRODUCTO;
		}

		return $this;
	} // setIdProducto()

	/**
	 * Set the value of [descripcion] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setDescripcion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ProductoPeer::DESCRIPCION;
		}

		return $this;
	} // setDescripcion()

	/**
	 * Set the value of [tipo] column.
	 * B =\g Bebida / P =\g Plato
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setTipo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = ProductoPeer::TIPO;
		}

		return $this;
	} // setTipo()

	/**
	 * Set the value of [stock_handler] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setStockHandler($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stock_handler !== $v) {
			$this->stock_handler = $v;
			$this->modifiedColumns[] = ProductoPeer::STOCK_HANDLER;
		}

		return $this;
	} // setStockHandler()

	/**
	 * Set the value of [stock] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setStock($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stock !== $v) {
			$this->stock = $v;
			$this->modifiedColumns[] = ProductoPeer::STOCK;
		}

		return $this;
	} // setStock()

	/**
	 * Set the value of [costo] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setCosto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->costo !== $v) {
			$this->costo = $v;
			$this->modifiedColumns[] = ProductoPeer::COSTO;
		}

		return $this;
	} // setCosto()

	/**
	 * Set the value of [precio] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setPrecio($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->precio !== $v) {
			$this->precio = $v;
			$this->modifiedColumns[] = ProductoPeer::PRECIO;
		}

		return $this;
	} // setPrecio()

	/**
	 * Sets the value of [fecha_ingreso] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setFechaIngreso($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_ingreso !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_ingreso !== null && $tmpDt = new DateTime($this->fecha_ingreso)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_ingreso = $newDateAsString;
				$this->modifiedColumns[] = ProductoPeer::FECHA_INGRESO;
			}
		} // if either are not null

		return $this;
	} // setFechaIngreso()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = ProductoPeer::ESTADO;
		}

		return $this;
	} // setEstado()

	/**
	 * Set the value of [especificaciones] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setEspecificaciones($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->especificaciones !== $v) {
			$this->especificaciones = $v;
			$this->modifiedColumns[] = ProductoPeer::ESPECIFICACIONES;
		}

		return $this;
	} // setEspecificaciones()

	/**
	 * Set the value of [imagen] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setImagen($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->imagen !== $v) {
			$this->imagen = $v;
			$this->modifiedColumns[] = ProductoPeer::IMAGEN;
		}

		return $this;
	} // setImagen()

	/**
	 * Set the value of [paga_iva] column.
	 * 
	 * @param      string $v new value
	 * @return     Producto The current object (for fluent API support)
	 */
	public function setPagaIva($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->paga_iva !== $v) {
			$this->paga_iva = $v;
			$this->modifiedColumns[] = ProductoPeer::PAGA_IVA;
		}

		return $this;
	} // setPagaIva()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_producto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->descripcion = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->tipo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->stock_handler = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->stock = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->costo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->precio = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->fecha_ingreso = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->estado = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->especificaciones = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->imagen = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->paga_iva = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = ProductoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Producto object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ProductoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collDetalleFacturas = null;

			$this->collDetallePedidos = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ProductoQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				ProductoPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ProductoPeer::ID_PRODUCTO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ProductoPeer::ID_PRODUCTO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProductoPeer::ID_PRODUCTO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setIdProducto($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ProductoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collDetalleFacturas !== null) {
				foreach ($this->collDetalleFacturas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDetallePedidos !== null) {
				foreach ($this->collDetallePedidos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = ProductoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collDetalleFacturas !== null) {
					foreach ($this->collDetalleFacturas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDetallePedidos !== null) {
					foreach ($this->collDetallePedidos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdProducto();
				break;
			case 1:
				return $this->getDescripcion();
				break;
			case 2:
				return $this->getTipo();
				break;
			case 3:
				return $this->getStockHandler();
				break;
			case 4:
				return $this->getStock();
				break;
			case 5:
				return $this->getCosto();
				break;
			case 6:
				return $this->getPrecio();
				break;
			case 7:
				return $this->getFechaIngreso();
				break;
			case 8:
				return $this->getEstado();
				break;
			case 9:
				return $this->getEspecificaciones();
				break;
			case 10:
				return $this->getImagen();
				break;
			case 11:
				return $this->getPagaIva();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Producto'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Producto'][$this->getPrimaryKey()] = true;
		$keys = ProductoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdProducto(),
			$keys[1] => $this->getDescripcion(),
			$keys[2] => $this->getTipo(),
			$keys[3] => $this->getStockHandler(),
			$keys[4] => $this->getStock(),
			$keys[5] => $this->getCosto(),
			$keys[6] => $this->getPrecio(),
			$keys[7] => $this->getFechaIngreso(),
			$keys[8] => $this->getEstado(),
			$keys[9] => $this->getEspecificaciones(),
			$keys[10] => $this->getImagen(),
			$keys[11] => $this->getPagaIva(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collDetalleFacturas) {
				$result['DetalleFacturas'] = $this->collDetalleFacturas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collDetallePedidos) {
				$result['DetallePedidos'] = $this->collDetallePedidos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdProducto($value);
				break;
			case 1:
				$this->setDescripcion($value);
				break;
			case 2:
				$this->setTipo($value);
				break;
			case 3:
				$this->setStockHandler($value);
				break;
			case 4:
				$this->setStock($value);
				break;
			case 5:
				$this->setCosto($value);
				break;
			case 6:
				$this->setPrecio($value);
				break;
			case 7:
				$this->setFechaIngreso($value);
				break;
			case 8:
				$this->setEstado($value);
				break;
			case 9:
				$this->setEspecificaciones($value);
				break;
			case 10:
				$this->setImagen($value);
				break;
			case 11:
				$this->setPagaIva($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProductoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdProducto($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescripcion($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTipo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setStockHandler($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStock($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCosto($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPrecio($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFechaIngreso($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEstado($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEspecificaciones($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setImagen($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPagaIva($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ProductoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProductoPeer::ID_PRODUCTO)) $criteria->add(ProductoPeer::ID_PRODUCTO, $this->id_producto);
		if ($this->isColumnModified(ProductoPeer::DESCRIPCION)) $criteria->add(ProductoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ProductoPeer::TIPO)) $criteria->add(ProductoPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(ProductoPeer::STOCK_HANDLER)) $criteria->add(ProductoPeer::STOCK_HANDLER, $this->stock_handler);
		if ($this->isColumnModified(ProductoPeer::STOCK)) $criteria->add(ProductoPeer::STOCK, $this->stock);
		if ($this->isColumnModified(ProductoPeer::COSTO)) $criteria->add(ProductoPeer::COSTO, $this->costo);
		if ($this->isColumnModified(ProductoPeer::PRECIO)) $criteria->add(ProductoPeer::PRECIO, $this->precio);
		if ($this->isColumnModified(ProductoPeer::FECHA_INGRESO)) $criteria->add(ProductoPeer::FECHA_INGRESO, $this->fecha_ingreso);
		if ($this->isColumnModified(ProductoPeer::ESTADO)) $criteria->add(ProductoPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(ProductoPeer::ESPECIFICACIONES)) $criteria->add(ProductoPeer::ESPECIFICACIONES, $this->especificaciones);
		if ($this->isColumnModified(ProductoPeer::IMAGEN)) $criteria->add(ProductoPeer::IMAGEN, $this->imagen);
		if ($this->isColumnModified(ProductoPeer::PAGA_IVA)) $criteria->add(ProductoPeer::PAGA_IVA, $this->paga_iva);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProductoPeer::DATABASE_NAME);
		$criteria->add(ProductoPeer::ID_PRODUCTO, $this->id_producto);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdProducto();
	}

	/**
	 * Generic method to set the primary key (id_producto column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdProducto($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdProducto();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Producto (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDescripcion($this->getDescripcion());
		$copyObj->setTipo($this->getTipo());
		$copyObj->setStockHandler($this->getStockHandler());
		$copyObj->setStock($this->getStock());
		$copyObj->setCosto($this->getCosto());
		$copyObj->setPrecio($this->getPrecio());
		$copyObj->setFechaIngreso($this->getFechaIngreso());
		$copyObj->setEstado($this->getEstado());
		$copyObj->setEspecificaciones($this->getEspecificaciones());
		$copyObj->setImagen($this->getImagen());
		$copyObj->setPagaIva($this->getPagaIva());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getDetalleFacturas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDetalleFactura($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDetallePedidos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDetallePedido($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdProducto(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Producto Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ProductoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ProductoPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collDetalleFacturas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDetalleFacturas()
	 */
	public function clearDetalleFacturas()
	{
		$this->collDetalleFacturas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDetalleFacturas collection.
	 *
	 * By default this just sets the collDetalleFacturas collection to an empty array (like clearcollDetalleFacturas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initDetalleFacturas($overrideExisting = true)
	{
		if (null !== $this->collDetalleFacturas && !$overrideExisting) {
			return;
		}
		$this->collDetalleFacturas = new PropelObjectCollection();
		$this->collDetalleFacturas->setModel('DetalleFactura');
	}

	/**
	 * Gets an array of DetalleFactura objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Producto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DetalleFactura[] List of DetalleFactura objects
	 * @throws     PropelException
	 */
	public function getDetalleFacturas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDetalleFacturas || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetalleFacturas) {
				// return empty collection
				$this->initDetalleFacturas();
			} else {
				$collDetalleFacturas = DetalleFacturaQuery::create(null, $criteria)
					->filterByProducto($this)
					->find($con);
				if (null !== $criteria) {
					return $collDetalleFacturas;
				}
				$this->collDetalleFacturas = $collDetalleFacturas;
			}
		}
		return $this->collDetalleFacturas;
	}

	/**
	 * Returns the number of related DetalleFactura objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DetalleFactura objects.
	 * @throws     PropelException
	 */
	public function countDetalleFacturas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDetalleFacturas || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetalleFacturas) {
				return 0;
			} else {
				$query = DetalleFacturaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProducto($this)
					->count($con);
			}
		} else {
			return count($this->collDetalleFacturas);
		}
	}

	/**
	 * Method called to associate a DetalleFactura object to this object
	 * through the DetalleFactura foreign key attribute.
	 *
	 * @param      DetalleFactura $l DetalleFactura
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDetalleFactura(DetalleFactura $l)
	{
		if ($this->collDetalleFacturas === null) {
			$this->initDetalleFacturas();
		}
		if (!$this->collDetalleFacturas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDetalleFacturas[]= $l;
			$l->setProducto($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Producto is new, it will return
	 * an empty collection; or if this Producto has previously
	 * been saved, it will retrieve related DetalleFacturas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Producto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DetalleFactura[] List of DetalleFactura objects
	 */
	public function getDetalleFacturasJoinFactura($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DetalleFacturaQuery::create(null, $criteria);
		$query->joinWith('Factura', $join_behavior);

		return $this->getDetalleFacturas($query, $con);
	}

	/**
	 * Clears out the collDetallePedidos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDetallePedidos()
	 */
	public function clearDetallePedidos()
	{
		$this->collDetallePedidos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDetallePedidos collection.
	 *
	 * By default this just sets the collDetallePedidos collection to an empty array (like clearcollDetallePedidos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initDetallePedidos($overrideExisting = true)
	{
		if (null !== $this->collDetallePedidos && !$overrideExisting) {
			return;
		}
		$this->collDetallePedidos = new PropelObjectCollection();
		$this->collDetallePedidos->setModel('DetallePedido');
	}

	/**
	 * Gets an array of DetallePedido objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Producto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DetallePedido[] List of DetallePedido objects
	 * @throws     PropelException
	 */
	public function getDetallePedidos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDetallePedidos || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetallePedidos) {
				// return empty collection
				$this->initDetallePedidos();
			} else {
				$collDetallePedidos = DetallePedidoQuery::create(null, $criteria)
					->filterByProducto($this)
					->find($con);
				if (null !== $criteria) {
					return $collDetallePedidos;
				}
				$this->collDetallePedidos = $collDetallePedidos;
			}
		}
		return $this->collDetallePedidos;
	}

	/**
	 * Returns the number of related DetallePedido objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DetallePedido objects.
	 * @throws     PropelException
	 */
	public function countDetallePedidos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDetallePedidos || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetallePedidos) {
				return 0;
			} else {
				$query = DetallePedidoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProducto($this)
					->count($con);
			}
		} else {
			return count($this->collDetallePedidos);
		}
	}

	/**
	 * Method called to associate a DetallePedido object to this object
	 * through the DetallePedido foreign key attribute.
	 *
	 * @param      DetallePedido $l DetallePedido
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDetallePedido(DetallePedido $l)
	{
		if ($this->collDetallePedidos === null) {
			$this->initDetallePedidos();
		}
		if (!$this->collDetallePedidos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDetallePedidos[]= $l;
			$l->setProducto($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Producto is new, it will return
	 * an empty collection; or if this Producto has previously
	 * been saved, it will retrieve related DetallePedidos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Producto.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DetallePedido[] List of DetallePedido objects
	 */
	public function getDetallePedidosJoinDetalleOrden($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DetallePedidoQuery::create(null, $criteria);
		$query->joinWith('DetalleOrden', $join_behavior);

		return $this->getDetallePedidos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_producto = null;
		$this->descripcion = null;
		$this->tipo = null;
		$this->stock_handler = null;
		$this->stock = null;
		$this->costo = null;
		$this->precio = null;
		$this->fecha_ingreso = null;
		$this->estado = null;
		$this->especificaciones = null;
		$this->imagen = null;
		$this->paga_iva = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collDetalleFacturas) {
				foreach ($this->collDetalleFacturas as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDetallePedidos) {
				foreach ($this->collDetallePedidos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collDetalleFacturas instanceof PropelCollection) {
			$this->collDetalleFacturas->clearIterator();
		}
		$this->collDetalleFacturas = null;
		if ($this->collDetallePedidos instanceof PropelCollection) {
			$this->collDetallePedidos->clearIterator();
		}
		$this->collDetallePedidos = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ProductoPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseProducto
