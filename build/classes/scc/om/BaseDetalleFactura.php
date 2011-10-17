<?php


/**
 * Base class that represents a row from the 'detalle_factura' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseDetalleFactura extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DetalleFacturaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DetalleFacturaPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_detalle_factura field.
	 * @var        int
	 */
	protected $id_detalle_factura;

	/**
	 * The value for the id_producto field.
	 * @var        int
	 */
	protected $id_producto;

	/**
	 * The value for the id_factura field.
	 * @var        int
	 */
	protected $id_factura;

	/**
	 * The value for the precio field.
	 * @var        string
	 */
	protected $precio;

	/**
	 * The value for the costo field.
	 * @var        string
	 */
	protected $costo;

	/**
	 * The value for the cantidad field.
	 * @var        int
	 */
	protected $cantidad;

	/**
	 * @var        Factura
	 */
	protected $aFactura;

	/**
	 * @var        Producto
	 */
	protected $aProducto;

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
	 * Get the [id_detalle_factura] column value.
	 * 
	 * @return     int
	 */
	public function getIdDetalleFactura()
	{
		return $this->id_detalle_factura;
	}

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
	 * Get the [id_factura] column value.
	 * 
	 * @return     int
	 */
	public function getIdFactura()
	{
		return $this->id_factura;
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
	 * Get the [costo] column value.
	 * 
	 * @return     string
	 */
	public function getCosto()
	{
		return $this->costo;
	}

	/**
	 * Get the [cantidad] column value.
	 * 
	 * @return     int
	 */
	public function getCantidad()
	{
		return $this->cantidad;
	}

	/**
	 * Set the value of [id_detalle_factura] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setIdDetalleFactura($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_detalle_factura !== $v) {
			$this->id_detalle_factura = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::ID_DETALLE_FACTURA;
		}

		return $this;
	} // setIdDetalleFactura()

	/**
	 * Set the value of [id_producto] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setIdProducto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_producto !== $v) {
			$this->id_producto = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::ID_PRODUCTO;
		}

		if ($this->aProducto !== null && $this->aProducto->getIdProducto() !== $v) {
			$this->aProducto = null;
		}

		return $this;
	} // setIdProducto()

	/**
	 * Set the value of [id_factura] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setIdFactura($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_factura !== $v) {
			$this->id_factura = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::ID_FACTURA;
		}

		if ($this->aFactura !== null && $this->aFactura->getIdFactura() !== $v) {
			$this->aFactura = null;
		}

		return $this;
	} // setIdFactura()

	/**
	 * Set the value of [precio] column.
	 * 
	 * @param      string $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setPrecio($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->precio !== $v) {
			$this->precio = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::PRECIO;
		}

		return $this;
	} // setPrecio()

	/**
	 * Set the value of [costo] column.
	 * 
	 * @param      string $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setCosto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->costo !== $v) {
			$this->costo = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::COSTO;
		}

		return $this;
	} // setCosto()

	/**
	 * Set the value of [cantidad] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleFactura The current object (for fluent API support)
	 */
	public function setCantidad($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cantidad !== $v) {
			$this->cantidad = $v;
			$this->modifiedColumns[] = DetalleFacturaPeer::CANTIDAD;
		}

		return $this;
	} // setCantidad()

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

			$this->id_detalle_factura = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_producto = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_factura = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->precio = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->costo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->cantidad = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = DetalleFacturaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating DetalleFactura object", $e);
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

		if ($this->aProducto !== null && $this->id_producto !== $this->aProducto->getIdProducto()) {
			$this->aProducto = null;
		}
		if ($this->aFactura !== null && $this->id_factura !== $this->aFactura->getIdFactura()) {
			$this->aFactura = null;
		}
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
			$con = Propel::getConnection(DetalleFacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DetalleFacturaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aFactura = null;
			$this->aProducto = null;
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
			$con = Propel::getConnection(DetalleFacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				DetalleFacturaQuery::create()
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
			$con = Propel::getConnection(DetalleFacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				DetalleFacturaPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aFactura !== null) {
				if ($this->aFactura->isModified() || $this->aFactura->isNew()) {
					$affectedRows += $this->aFactura->save($con);
				}
				$this->setFactura($this->aFactura);
			}

			if ($this->aProducto !== null) {
				if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
					$affectedRows += $this->aProducto->save($con);
				}
				$this->setProducto($this->aProducto);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DetalleFacturaPeer::ID_DETALLE_FACTURA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(DetalleFacturaPeer::ID_DETALLE_FACTURA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.DetalleFacturaPeer::ID_DETALLE_FACTURA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdDetalleFactura($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += DetalleFacturaPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aFactura !== null) {
				if (!$this->aFactura->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFactura->getValidationFailures());
				}
			}

			if ($this->aProducto !== null) {
				if (!$this->aProducto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
				}
			}


			if (($retval = DetalleFacturaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = DetalleFacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdDetalleFactura();
				break;
			case 1:
				return $this->getIdProducto();
				break;
			case 2:
				return $this->getIdFactura();
				break;
			case 3:
				return $this->getPrecio();
				break;
			case 4:
				return $this->getCosto();
				break;
			case 5:
				return $this->getCantidad();
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
		if (isset($alreadyDumpedObjects['DetalleFactura'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['DetalleFactura'][$this->getPrimaryKey()] = true;
		$keys = DetalleFacturaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdDetalleFactura(),
			$keys[1] => $this->getIdProducto(),
			$keys[2] => $this->getIdFactura(),
			$keys[3] => $this->getPrecio(),
			$keys[4] => $this->getCosto(),
			$keys[5] => $this->getCantidad(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aFactura) {
				$result['Factura'] = $this->aFactura->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aProducto) {
				$result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = DetalleFacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdDetalleFactura($value);
				break;
			case 1:
				$this->setIdProducto($value);
				break;
			case 2:
				$this->setIdFactura($value);
				break;
			case 3:
				$this->setPrecio($value);
				break;
			case 4:
				$this->setCosto($value);
				break;
			case 5:
				$this->setCantidad($value);
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
		$keys = DetalleFacturaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdDetalleFactura($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProducto($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdFactura($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrecio($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCosto($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCantidad($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DetalleFacturaPeer::DATABASE_NAME);

		if ($this->isColumnModified(DetalleFacturaPeer::ID_DETALLE_FACTURA)) $criteria->add(DetalleFacturaPeer::ID_DETALLE_FACTURA, $this->id_detalle_factura);
		if ($this->isColumnModified(DetalleFacturaPeer::ID_PRODUCTO)) $criteria->add(DetalleFacturaPeer::ID_PRODUCTO, $this->id_producto);
		if ($this->isColumnModified(DetalleFacturaPeer::ID_FACTURA)) $criteria->add(DetalleFacturaPeer::ID_FACTURA, $this->id_factura);
		if ($this->isColumnModified(DetalleFacturaPeer::PRECIO)) $criteria->add(DetalleFacturaPeer::PRECIO, $this->precio);
		if ($this->isColumnModified(DetalleFacturaPeer::COSTO)) $criteria->add(DetalleFacturaPeer::COSTO, $this->costo);
		if ($this->isColumnModified(DetalleFacturaPeer::CANTIDAD)) $criteria->add(DetalleFacturaPeer::CANTIDAD, $this->cantidad);

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
		$criteria = new Criteria(DetalleFacturaPeer::DATABASE_NAME);
		$criteria->add(DetalleFacturaPeer::ID_DETALLE_FACTURA, $this->id_detalle_factura);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdDetalleFactura();
	}

	/**
	 * Generic method to set the primary key (id_detalle_factura column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdDetalleFactura($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdDetalleFactura();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DetalleFactura (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProducto($this->getIdProducto());
		$copyObj->setIdFactura($this->getIdFactura());
		$copyObj->setPrecio($this->getPrecio());
		$copyObj->setCosto($this->getCosto());
		$copyObj->setCantidad($this->getCantidad());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdDetalleFactura(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     DetalleFactura Clone of current object.
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
	 * @return     DetalleFacturaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DetalleFacturaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Factura object.
	 *
	 * @param      Factura $v
	 * @return     DetalleFactura The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setFactura(Factura $v = null)
	{
		if ($v === null) {
			$this->setIdFactura(NULL);
		} else {
			$this->setIdFactura($v->getIdFactura());
		}

		$this->aFactura = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Factura object, it will not be re-added.
		if ($v !== null) {
			$v->addDetalleFactura($this);
		}

		return $this;
	}


	/**
	 * Get the associated Factura object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Factura The associated Factura object.
	 * @throws     PropelException
	 */
	public function getFactura(PropelPDO $con = null)
	{
		if ($this->aFactura === null && ($this->id_factura !== null)) {
			$this->aFactura = FacturaQuery::create()->findPk($this->id_factura, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aFactura->addDetalleFacturas($this);
			 */
		}
		return $this->aFactura;
	}

	/**
	 * Declares an association between this object and a Producto object.
	 *
	 * @param      Producto $v
	 * @return     DetalleFactura The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProducto(Producto $v = null)
	{
		if ($v === null) {
			$this->setIdProducto(NULL);
		} else {
			$this->setIdProducto($v->getIdProducto());
		}

		$this->aProducto = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Producto object, it will not be re-added.
		if ($v !== null) {
			$v->addDetalleFactura($this);
		}

		return $this;
	}


	/**
	 * Get the associated Producto object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Producto The associated Producto object.
	 * @throws     PropelException
	 */
	public function getProducto(PropelPDO $con = null)
	{
		if ($this->aProducto === null && ($this->id_producto !== null)) {
			$this->aProducto = ProductoQuery::create()->findPk($this->id_producto, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProducto->addDetalleFacturas($this);
			 */
		}
		return $this->aProducto;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_detalle_factura = null;
		$this->id_producto = null;
		$this->id_factura = null;
		$this->precio = null;
		$this->costo = null;
		$this->cantidad = null;
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
		} // if ($deep)

		$this->aFactura = null;
		$this->aProducto = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(DetalleFacturaPeer::DEFAULT_STRING_FORMAT);
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

} // BaseDetalleFactura
