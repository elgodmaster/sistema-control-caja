<?php


/**
 * Base class that represents a row from the 'caja' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseCaja extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CajaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CajaPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_caja field.
	 * @var        int
	 */
	protected $id_caja;

	/**
	 * The value for the descripcion field.
	 * @var        string
	 */
	protected $descripcion;

	/**
	 * The value for the base_efectivo field.
	 * @var        string
	 */
	protected $base_efectivo;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * @var        array CuadreCaja[] Collection to store aggregation of CuadreCaja objects.
	 */
	protected $collCuadreCajas;

	/**
	 * @var        array UsuarioCaja[] Collection to store aggregation of UsuarioCaja objects.
	 */
	protected $collUsuarioCajas;

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
	 * Get the [id_caja] column value.
	 * 
	 * @return     int
	 */
	public function getIdCaja()
	{
		return $this->id_caja;
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
	 * Get the [base_efectivo] column value.
	 * 
	 * @return     string
	 */
	public function getBaseEfectivo()
	{
		return $this->base_efectivo;
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
	 * Set the value of [id_caja] column.
	 * 
	 * @param      int $v new value
	 * @return     Caja The current object (for fluent API support)
	 */
	public function setIdCaja($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_caja !== $v) {
			$this->id_caja = $v;
			$this->modifiedColumns[] = CajaPeer::ID_CAJA;
		}

		return $this;
	} // setIdCaja()

	/**
	 * Set the value of [descripcion] column.
	 * 
	 * @param      string $v new value
	 * @return     Caja The current object (for fluent API support)
	 */
	public function setDescripcion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = CajaPeer::DESCRIPCION;
		}

		return $this;
	} // setDescripcion()

	/**
	 * Set the value of [base_efectivo] column.
	 * 
	 * @param      string $v new value
	 * @return     Caja The current object (for fluent API support)
	 */
	public function setBaseEfectivo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_efectivo !== $v) {
			$this->base_efectivo = $v;
			$this->modifiedColumns[] = CajaPeer::BASE_EFECTIVO;
		}

		return $this;
	} // setBaseEfectivo()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      string $v new value
	 * @return     Caja The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = CajaPeer::ESTADO;
		}

		return $this;
	} // setEstado()

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

			$this->id_caja = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->descripcion = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->base_efectivo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->estado = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = CajaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Caja object", $e);
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
			$con = Propel::getConnection(CajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CajaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collCuadreCajas = null;

			$this->collUsuarioCajas = null;

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
			$con = Propel::getConnection(CajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CajaQuery::create()
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
			$con = Propel::getConnection(CajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CajaPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = CajaPeer::ID_CAJA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CajaPeer::ID_CAJA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CajaPeer::ID_CAJA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setIdCaja($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = CajaPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCuadreCajas !== null) {
				foreach ($this->collCuadreCajas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUsuarioCajas !== null) {
				foreach ($this->collUsuarioCajas as $referrerFK) {
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


			if (($retval = CajaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCuadreCajas !== null) {
					foreach ($this->collCuadreCajas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUsuarioCajas !== null) {
					foreach ($this->collUsuarioCajas as $referrerFK) {
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
		$pos = CajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCaja();
				break;
			case 1:
				return $this->getDescripcion();
				break;
			case 2:
				return $this->getBaseEfectivo();
				break;
			case 3:
				return $this->getEstado();
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
		if (isset($alreadyDumpedObjects['Caja'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Caja'][$this->getPrimaryKey()] = true;
		$keys = CajaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCaja(),
			$keys[1] => $this->getDescripcion(),
			$keys[2] => $this->getBaseEfectivo(),
			$keys[3] => $this->getEstado(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collCuadreCajas) {
				$result['CuadreCajas'] = $this->collCuadreCajas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collUsuarioCajas) {
				$result['UsuarioCajas'] = $this->collUsuarioCajas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = CajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCaja($value);
				break;
			case 1:
				$this->setDescripcion($value);
				break;
			case 2:
				$this->setBaseEfectivo($value);
				break;
			case 3:
				$this->setEstado($value);
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
		$keys = CajaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCaja($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescripcion($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBaseEfectivo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEstado($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CajaPeer::DATABASE_NAME);

		if ($this->isColumnModified(CajaPeer::ID_CAJA)) $criteria->add(CajaPeer::ID_CAJA, $this->id_caja);
		if ($this->isColumnModified(CajaPeer::DESCRIPCION)) $criteria->add(CajaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(CajaPeer::BASE_EFECTIVO)) $criteria->add(CajaPeer::BASE_EFECTIVO, $this->base_efectivo);
		if ($this->isColumnModified(CajaPeer::ESTADO)) $criteria->add(CajaPeer::ESTADO, $this->estado);

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
		$criteria = new Criteria(CajaPeer::DATABASE_NAME);
		$criteria->add(CajaPeer::ID_CAJA, $this->id_caja);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCaja();
	}

	/**
	 * Generic method to set the primary key (id_caja column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCaja($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCaja();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Caja (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDescripcion($this->getDescripcion());
		$copyObj->setBaseEfectivo($this->getBaseEfectivo());
		$copyObj->setEstado($this->getEstado());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCuadreCajas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCuadreCaja($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUsuarioCajas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUsuarioCaja($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCaja(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Caja Clone of current object.
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
	 * @return     CajaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CajaPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collCuadreCajas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCuadreCajas()
	 */
	public function clearCuadreCajas()
	{
		$this->collCuadreCajas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCuadreCajas collection.
	 *
	 * By default this just sets the collCuadreCajas collection to an empty array (like clearcollCuadreCajas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initCuadreCajas($overrideExisting = true)
	{
		if (null !== $this->collCuadreCajas && !$overrideExisting) {
			return;
		}
		$this->collCuadreCajas = new PropelObjectCollection();
		$this->collCuadreCajas->setModel('CuadreCaja');
	}

	/**
	 * Gets an array of CuadreCaja objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Caja is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CuadreCaja[] List of CuadreCaja objects
	 * @throws     PropelException
	 */
	public function getCuadreCajas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCuadreCajas || null !== $criteria) {
			if ($this->isNew() && null === $this->collCuadreCajas) {
				// return empty collection
				$this->initCuadreCajas();
			} else {
				$collCuadreCajas = CuadreCajaQuery::create(null, $criteria)
					->filterByCaja($this)
					->find($con);
				if (null !== $criteria) {
					return $collCuadreCajas;
				}
				$this->collCuadreCajas = $collCuadreCajas;
			}
		}
		return $this->collCuadreCajas;
	}

	/**
	 * Returns the number of related CuadreCaja objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CuadreCaja objects.
	 * @throws     PropelException
	 */
	public function countCuadreCajas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCuadreCajas || null !== $criteria) {
			if ($this->isNew() && null === $this->collCuadreCajas) {
				return 0;
			} else {
				$query = CuadreCajaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCaja($this)
					->count($con);
			}
		} else {
			return count($this->collCuadreCajas);
		}
	}

	/**
	 * Method called to associate a CuadreCaja object to this object
	 * through the CuadreCaja foreign key attribute.
	 *
	 * @param      CuadreCaja $l CuadreCaja
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCuadreCaja(CuadreCaja $l)
	{
		if ($this->collCuadreCajas === null) {
			$this->initCuadreCajas();
		}
		if (!$this->collCuadreCajas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCuadreCajas[]= $l;
			$l->setCaja($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Caja is new, it will return
	 * an empty collection; or if this Caja has previously
	 * been saved, it will retrieve related CuadreCajas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Caja.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CuadreCaja[] List of CuadreCaja objects
	 */
	public function getCuadreCajasJoinPersona($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CuadreCajaQuery::create(null, $criteria);
		$query->joinWith('Persona', $join_behavior);

		return $this->getCuadreCajas($query, $con);
	}

	/**
	 * Clears out the collUsuarioCajas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUsuarioCajas()
	 */
	public function clearUsuarioCajas()
	{
		$this->collUsuarioCajas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUsuarioCajas collection.
	 *
	 * By default this just sets the collUsuarioCajas collection to an empty array (like clearcollUsuarioCajas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initUsuarioCajas($overrideExisting = true)
	{
		if (null !== $this->collUsuarioCajas && !$overrideExisting) {
			return;
		}
		$this->collUsuarioCajas = new PropelObjectCollection();
		$this->collUsuarioCajas->setModel('UsuarioCaja');
	}

	/**
	 * Gets an array of UsuarioCaja objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Caja is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UsuarioCaja[] List of UsuarioCaja objects
	 * @throws     PropelException
	 */
	public function getUsuarioCajas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioCajas || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioCajas) {
				// return empty collection
				$this->initUsuarioCajas();
			} else {
				$collUsuarioCajas = UsuarioCajaQuery::create(null, $criteria)
					->filterByCaja($this)
					->find($con);
				if (null !== $criteria) {
					return $collUsuarioCajas;
				}
				$this->collUsuarioCajas = $collUsuarioCajas;
			}
		}
		return $this->collUsuarioCajas;
	}

	/**
	 * Returns the number of related UsuarioCaja objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UsuarioCaja objects.
	 * @throws     PropelException
	 */
	public function countUsuarioCajas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUsuarioCajas || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsuarioCajas) {
				return 0;
			} else {
				$query = UsuarioCajaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCaja($this)
					->count($con);
			}
		} else {
			return count($this->collUsuarioCajas);
		}
	}

	/**
	 * Method called to associate a UsuarioCaja object to this object
	 * through the UsuarioCaja foreign key attribute.
	 *
	 * @param      UsuarioCaja $l UsuarioCaja
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUsuarioCaja(UsuarioCaja $l)
	{
		if ($this->collUsuarioCajas === null) {
			$this->initUsuarioCajas();
		}
		if (!$this->collUsuarioCajas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUsuarioCajas[]= $l;
			$l->setCaja($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Caja is new, it will return
	 * an empty collection; or if this Caja has previously
	 * been saved, it will retrieve related UsuarioCajas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Caja.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioCaja[] List of UsuarioCaja objects
	 */
	public function getUsuarioCajasJoinPersona($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioCajaQuery::create(null, $criteria);
		$query->joinWith('Persona', $join_behavior);

		return $this->getUsuarioCajas($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_caja = null;
		$this->descripcion = null;
		$this->base_efectivo = null;
		$this->estado = null;
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
			if ($this->collCuadreCajas) {
				foreach ($this->collCuadreCajas as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioCajas) {
				foreach ($this->collUsuarioCajas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collCuadreCajas instanceof PropelCollection) {
			$this->collCuadreCajas->clearIterator();
		}
		$this->collCuadreCajas = null;
		if ($this->collUsuarioCajas instanceof PropelCollection) {
			$this->collUsuarioCajas->clearIterator();
		}
		$this->collUsuarioCajas = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(CajaPeer::DEFAULT_STRING_FORMAT);
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

} // BaseCaja
