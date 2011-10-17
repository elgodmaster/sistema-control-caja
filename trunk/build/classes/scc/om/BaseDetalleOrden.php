<?php


/**
 * Base class that represents a row from the 'detalle_orden' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseDetalleOrden extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DetalleOrdenPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DetalleOrdenPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_detalle_orden field.
	 * @var        int
	 */
	protected $id_detalle_orden;

	/**
	 * The value for the id_orden field.
	 * @var        int
	 */
	protected $id_orden;

	/**
	 * The value for the id_persona field.
	 * @var        int
	 */
	protected $id_persona;

	/**
	 * The value for the fecha_hora field.
	 * @var        string
	 */
	protected $fecha_hora;

	/**
	 * The value for the numero_orden field.
	 * @var        string
	 */
	protected $numero_orden;

	/**
	 * @var        Persona
	 */
	protected $aPersona;

	/**
	 * @var        Orden
	 */
	protected $aOrden;

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
	 * Get the [id_detalle_orden] column value.
	 * 
	 * @return     int
	 */
	public function getIdDetalleOrden()
	{
		return $this->id_detalle_orden;
	}

	/**
	 * Get the [id_orden] column value.
	 * 
	 * @return     int
	 */
	public function getIdOrden()
	{
		return $this->id_orden;
	}

	/**
	 * Get the [id_persona] column value.
	 * 
	 * @return     int
	 */
	public function getIdPersona()
	{
		return $this->id_persona;
	}

	/**
	 * Get the [optionally formatted] temporal [fecha_hora] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaHora($format = 'Y-m-d H:i:s')
	{
		if ($this->fecha_hora === null) {
			return null;
		}


		if ($this->fecha_hora === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_hora);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_hora, true), $x);
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
	 * Get the [numero_orden] column value.
	 * 
	 * @return     string
	 */
	public function getNumeroOrden()
	{
		return $this->numero_orden;
	}

	/**
	 * Set the value of [id_detalle_orden] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleOrden The current object (for fluent API support)
	 */
	public function setIdDetalleOrden($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_detalle_orden !== $v) {
			$this->id_detalle_orden = $v;
			$this->modifiedColumns[] = DetalleOrdenPeer::ID_DETALLE_ORDEN;
		}

		return $this;
	} // setIdDetalleOrden()

	/**
	 * Set the value of [id_orden] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleOrden The current object (for fluent API support)
	 */
	public function setIdOrden($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_orden !== $v) {
			$this->id_orden = $v;
			$this->modifiedColumns[] = DetalleOrdenPeer::ID_ORDEN;
		}

		if ($this->aOrden !== null && $this->aOrden->getIdOrden() !== $v) {
			$this->aOrden = null;
		}

		return $this;
	} // setIdOrden()

	/**
	 * Set the value of [id_persona] column.
	 * 
	 * @param      int $v new value
	 * @return     DetalleOrden The current object (for fluent API support)
	 */
	public function setIdPersona($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_persona !== $v) {
			$this->id_persona = $v;
			$this->modifiedColumns[] = DetalleOrdenPeer::ID_PERSONA;
		}

		if ($this->aPersona !== null && $this->aPersona->getIdPersona() !== $v) {
			$this->aPersona = null;
		}

		return $this;
	} // setIdPersona()

	/**
	 * Sets the value of [fecha_hora] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     DetalleOrden The current object (for fluent API support)
	 */
	public function setFechaHora($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora !== null && $tmpDt = new DateTime($this->fecha_hora)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora = $newDateAsString;
				$this->modifiedColumns[] = DetalleOrdenPeer::FECHA_HORA;
			}
		} // if either are not null

		return $this;
	} // setFechaHora()

	/**
	 * Set the value of [numero_orden] column.
	 * 
	 * @param      string $v new value
	 * @return     DetalleOrden The current object (for fluent API support)
	 */
	public function setNumeroOrden($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->numero_orden !== $v) {
			$this->numero_orden = $v;
			$this->modifiedColumns[] = DetalleOrdenPeer::NUMERO_ORDEN;
		}

		return $this;
	} // setNumeroOrden()

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

			$this->id_detalle_orden = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_orden = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_persona = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->fecha_hora = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->numero_orden = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = DetalleOrdenPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating DetalleOrden object", $e);
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

		if ($this->aOrden !== null && $this->id_orden !== $this->aOrden->getIdOrden()) {
			$this->aOrden = null;
		}
		if ($this->aPersona !== null && $this->id_persona !== $this->aPersona->getIdPersona()) {
			$this->aPersona = null;
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
			$con = Propel::getConnection(DetalleOrdenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DetalleOrdenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aPersona = null;
			$this->aOrden = null;
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
			$con = Propel::getConnection(DetalleOrdenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				DetalleOrdenQuery::create()
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
			$con = Propel::getConnection(DetalleOrdenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				DetalleOrdenPeer::addInstanceToPool($this);
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

			if ($this->aPersona !== null) {
				if ($this->aPersona->isModified() || $this->aPersona->isNew()) {
					$affectedRows += $this->aPersona->save($con);
				}
				$this->setPersona($this->aPersona);
			}

			if ($this->aOrden !== null) {
				if ($this->aOrden->isModified() || $this->aOrden->isNew()) {
					$affectedRows += $this->aOrden->save($con);
				}
				$this->setOrden($this->aOrden);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DetalleOrdenPeer::ID_DETALLE_ORDEN;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(DetalleOrdenPeer::ID_DETALLE_ORDEN) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.DetalleOrdenPeer::ID_DETALLE_ORDEN.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdDetalleOrden($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += DetalleOrdenPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aPersona !== null) {
				if (!$this->aPersona->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersona->getValidationFailures());
				}
			}

			if ($this->aOrden !== null) {
				if (!$this->aOrden->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrden->getValidationFailures());
				}
			}


			if (($retval = DetalleOrdenPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = DetalleOrdenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdDetalleOrden();
				break;
			case 1:
				return $this->getIdOrden();
				break;
			case 2:
				return $this->getIdPersona();
				break;
			case 3:
				return $this->getFechaHora();
				break;
			case 4:
				return $this->getNumeroOrden();
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
		if (isset($alreadyDumpedObjects['DetalleOrden'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['DetalleOrden'][$this->getPrimaryKey()] = true;
		$keys = DetalleOrdenPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdDetalleOrden(),
			$keys[1] => $this->getIdOrden(),
			$keys[2] => $this->getIdPersona(),
			$keys[3] => $this->getFechaHora(),
			$keys[4] => $this->getNumeroOrden(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aPersona) {
				$result['Persona'] = $this->aPersona->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aOrden) {
				$result['Orden'] = $this->aOrden->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = DetalleOrdenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdDetalleOrden($value);
				break;
			case 1:
				$this->setIdOrden($value);
				break;
			case 2:
				$this->setIdPersona($value);
				break;
			case 3:
				$this->setFechaHora($value);
				break;
			case 4:
				$this->setNumeroOrden($value);
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
		$keys = DetalleOrdenPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdDetalleOrden($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdOrden($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdPersona($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFechaHora($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumeroOrden($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DetalleOrdenPeer::DATABASE_NAME);

		if ($this->isColumnModified(DetalleOrdenPeer::ID_DETALLE_ORDEN)) $criteria->add(DetalleOrdenPeer::ID_DETALLE_ORDEN, $this->id_detalle_orden);
		if ($this->isColumnModified(DetalleOrdenPeer::ID_ORDEN)) $criteria->add(DetalleOrdenPeer::ID_ORDEN, $this->id_orden);
		if ($this->isColumnModified(DetalleOrdenPeer::ID_PERSONA)) $criteria->add(DetalleOrdenPeer::ID_PERSONA, $this->id_persona);
		if ($this->isColumnModified(DetalleOrdenPeer::FECHA_HORA)) $criteria->add(DetalleOrdenPeer::FECHA_HORA, $this->fecha_hora);
		if ($this->isColumnModified(DetalleOrdenPeer::NUMERO_ORDEN)) $criteria->add(DetalleOrdenPeer::NUMERO_ORDEN, $this->numero_orden);

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
		$criteria = new Criteria(DetalleOrdenPeer::DATABASE_NAME);
		$criteria->add(DetalleOrdenPeer::ID_DETALLE_ORDEN, $this->id_detalle_orden);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdDetalleOrden();
	}

	/**
	 * Generic method to set the primary key (id_detalle_orden column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdDetalleOrden($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdDetalleOrden();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DetalleOrden (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdOrden($this->getIdOrden());
		$copyObj->setIdPersona($this->getIdPersona());
		$copyObj->setFechaHora($this->getFechaHora());
		$copyObj->setNumeroOrden($this->getNumeroOrden());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getDetallePedidos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDetallePedido($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdDetalleOrden(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     DetalleOrden Clone of current object.
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
	 * @return     DetalleOrdenPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DetalleOrdenPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Persona object.
	 *
	 * @param      Persona $v
	 * @return     DetalleOrden The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPersona(Persona $v = null)
	{
		if ($v === null) {
			$this->setIdPersona(NULL);
		} else {
			$this->setIdPersona($v->getIdPersona());
		}

		$this->aPersona = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Persona object, it will not be re-added.
		if ($v !== null) {
			$v->addDetalleOrden($this);
		}

		return $this;
	}


	/**
	 * Get the associated Persona object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Persona The associated Persona object.
	 * @throws     PropelException
	 */
	public function getPersona(PropelPDO $con = null)
	{
		if ($this->aPersona === null && ($this->id_persona !== null)) {
			$this->aPersona = PersonaQuery::create()->findPk($this->id_persona, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPersona->addDetalleOrdens($this);
			 */
		}
		return $this->aPersona;
	}

	/**
	 * Declares an association between this object and a Orden object.
	 *
	 * @param      Orden $v
	 * @return     DetalleOrden The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setOrden(Orden $v = null)
	{
		if ($v === null) {
			$this->setIdOrden(NULL);
		} else {
			$this->setIdOrden($v->getIdOrden());
		}

		$this->aOrden = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Orden object, it will not be re-added.
		if ($v !== null) {
			$v->addDetalleOrden($this);
		}

		return $this;
	}


	/**
	 * Get the associated Orden object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Orden The associated Orden object.
	 * @throws     PropelException
	 */
	public function getOrden(PropelPDO $con = null)
	{
		if ($this->aOrden === null && ($this->id_orden !== null)) {
			$this->aOrden = OrdenQuery::create()->findPk($this->id_orden, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aOrden->addDetalleOrdens($this);
			 */
		}
		return $this->aOrden;
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
	 * If this DetalleOrden is new, it will return
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
					->filterByDetalleOrden($this)
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
					->filterByDetalleOrden($this)
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
			$l->setDetalleOrden($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DetalleOrden is new, it will return
	 * an empty collection; or if this DetalleOrden has previously
	 * been saved, it will retrieve related DetallePedidos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DetalleOrden.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DetallePedido[] List of DetallePedido objects
	 */
	public function getDetallePedidosJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DetallePedidoQuery::create(null, $criteria);
		$query->joinWith('Producto', $join_behavior);

		return $this->getDetallePedidos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_detalle_orden = null;
		$this->id_orden = null;
		$this->id_persona = null;
		$this->fecha_hora = null;
		$this->numero_orden = null;
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
			if ($this->collDetallePedidos) {
				foreach ($this->collDetallePedidos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collDetallePedidos instanceof PropelCollection) {
			$this->collDetallePedidos->clearIterator();
		}
		$this->collDetallePedidos = null;
		$this->aPersona = null;
		$this->aOrden = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(DetalleOrdenPeer::DEFAULT_STRING_FORMAT);
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

} // BaseDetalleOrden
