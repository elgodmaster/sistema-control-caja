<?php


/**
 * Base class that represents a row from the 'localizacion' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseLocalizacion extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'LocalizacionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        LocalizacionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_localizacion field.
	 * @var        int
	 */
	protected $id_localizacion;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the output_device field.
	 * @var        string
	 */
	protected $output_device;

	/**
	 * The value for the direccion_printer field.
	 * @var        string
	 */
	protected $direccion_printer;

	/**
	 * The value for the visible field.
	 * @var        string
	 */
	protected $visible;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * @var        array Mensaje[] Collection to store aggregation of Mensaje objects.
	 */
	protected $collMensajes;

	/**
	 * @var        array PersonaLocalizacion[] Collection to store aggregation of PersonaLocalizacion objects.
	 */
	protected $collPersonaLocalizacions;

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
	 * Get the [id_localizacion] column value.
	 * 
	 * @return     int
	 */
	public function getIdLocalizacion()
	{
		return $this->id_localizacion;
	}

	/**
	 * Get the [nombre] column value.
	 * 
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [output_device] column value.
	 * I =\g Impresora / P =\g Pantalla
	 * @return     string
	 */
	public function getOutputDevice()
	{
		return $this->output_device;
	}

	/**
	 * Get the [direccion_printer] column value.
	 * Direcci\243n IP
	 * @return     string
	 */
	public function getDireccionPrinter()
	{
		return $this->direccion_printer;
	}

	/**
	 * Get the [visible] column value.
	 * Indica S o N la localizaci\243n es visible al momento de ingresar el usuario
	 * @return     string
	 */
	public function getVisible()
	{
		return $this->visible;
	}

	/**
	 * Get the [estado] column value.
	 * A =\g Activo / I =\g Inactivo
	 * @return     string
	 */
	public function getEstado()
	{
		return $this->estado;
	}

	/**
	 * Set the value of [id_localizacion] column.
	 * 
	 * @param      int $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setIdLocalizacion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_localizacion !== $v) {
			$this->id_localizacion = $v;
			$this->modifiedColumns[] = LocalizacionPeer::ID_LOCALIZACION;
		}

		return $this;
	} // setIdLocalizacion()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = LocalizacionPeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [output_device] column.
	 * I =\g Impresora / P =\g Pantalla
	 * @param      string $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setOutputDevice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->output_device !== $v) {
			$this->output_device = $v;
			$this->modifiedColumns[] = LocalizacionPeer::OUTPUT_DEVICE;
		}

		return $this;
	} // setOutputDevice()

	/**
	 * Set the value of [direccion_printer] column.
	 * Direcci\243n IP
	 * @param      string $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setDireccionPrinter($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->direccion_printer !== $v) {
			$this->direccion_printer = $v;
			$this->modifiedColumns[] = LocalizacionPeer::DIRECCION_PRINTER;
		}

		return $this;
	} // setDireccionPrinter()

	/**
	 * Set the value of [visible] column.
	 * Indica S o N la localizaci\243n es visible al momento de ingresar el usuario
	 * @param      string $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setVisible($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->visible !== $v) {
			$this->visible = $v;
			$this->modifiedColumns[] = LocalizacionPeer::VISIBLE;
		}

		return $this;
	} // setVisible()

	/**
	 * Set the value of [estado] column.
	 * A =\g Activo / I =\g Inactivo
	 * @param      string $v new value
	 * @return     Localizacion The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = LocalizacionPeer::ESTADO;
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

			$this->id_localizacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->output_device = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->direccion_printer = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->visible = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->estado = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = LocalizacionPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Localizacion object", $e);
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
			$con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = LocalizacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collMensajes = null;

			$this->collPersonaLocalizacions = null;

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
			$con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				LocalizacionQuery::create()
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
			$con = Propel::getConnection(LocalizacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				LocalizacionPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = LocalizacionPeer::ID_LOCALIZACION;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(LocalizacionPeer::ID_LOCALIZACION) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.LocalizacionPeer::ID_LOCALIZACION.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setIdLocalizacion($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = LocalizacionPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collMensajes !== null) {
				foreach ($this->collMensajes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPersonaLocalizacions !== null) {
				foreach ($this->collPersonaLocalizacions as $referrerFK) {
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


			if (($retval = LocalizacionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collMensajes !== null) {
					foreach ($this->collMensajes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPersonaLocalizacions !== null) {
					foreach ($this->collPersonaLocalizacions as $referrerFK) {
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
		$pos = LocalizacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdLocalizacion();
				break;
			case 1:
				return $this->getNombre();
				break;
			case 2:
				return $this->getOutputDevice();
				break;
			case 3:
				return $this->getDireccionPrinter();
				break;
			case 4:
				return $this->getVisible();
				break;
			case 5:
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
		if (isset($alreadyDumpedObjects['Localizacion'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Localizacion'][$this->getPrimaryKey()] = true;
		$keys = LocalizacionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdLocalizacion(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getOutputDevice(),
			$keys[3] => $this->getDireccionPrinter(),
			$keys[4] => $this->getVisible(),
			$keys[5] => $this->getEstado(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collMensajes) {
				$result['Mensajes'] = $this->collMensajes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPersonaLocalizacions) {
				$result['PersonaLocalizacions'] = $this->collPersonaLocalizacions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = LocalizacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdLocalizacion($value);
				break;
			case 1:
				$this->setNombre($value);
				break;
			case 2:
				$this->setOutputDevice($value);
				break;
			case 3:
				$this->setDireccionPrinter($value);
				break;
			case 4:
				$this->setVisible($value);
				break;
			case 5:
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
		$keys = LocalizacionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdLocalizacion($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOutputDevice($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDireccionPrinter($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setVisible($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEstado($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(LocalizacionPeer::DATABASE_NAME);

		if ($this->isColumnModified(LocalizacionPeer::ID_LOCALIZACION)) $criteria->add(LocalizacionPeer::ID_LOCALIZACION, $this->id_localizacion);
		if ($this->isColumnModified(LocalizacionPeer::NOMBRE)) $criteria->add(LocalizacionPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(LocalizacionPeer::OUTPUT_DEVICE)) $criteria->add(LocalizacionPeer::OUTPUT_DEVICE, $this->output_device);
		if ($this->isColumnModified(LocalizacionPeer::DIRECCION_PRINTER)) $criteria->add(LocalizacionPeer::DIRECCION_PRINTER, $this->direccion_printer);
		if ($this->isColumnModified(LocalizacionPeer::VISIBLE)) $criteria->add(LocalizacionPeer::VISIBLE, $this->visible);
		if ($this->isColumnModified(LocalizacionPeer::ESTADO)) $criteria->add(LocalizacionPeer::ESTADO, $this->estado);

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
		$criteria = new Criteria(LocalizacionPeer::DATABASE_NAME);
		$criteria->add(LocalizacionPeer::ID_LOCALIZACION, $this->id_localizacion);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdLocalizacion();
	}

	/**
	 * Generic method to set the primary key (id_localizacion column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdLocalizacion($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdLocalizacion();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Localizacion (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNombre($this->getNombre());
		$copyObj->setOutputDevice($this->getOutputDevice());
		$copyObj->setDireccionPrinter($this->getDireccionPrinter());
		$copyObj->setVisible($this->getVisible());
		$copyObj->setEstado($this->getEstado());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getMensajes() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addMensaje($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPersonaLocalizacions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPersonaLocalizacion($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdLocalizacion(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Localizacion Clone of current object.
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
	 * @return     LocalizacionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new LocalizacionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collMensajes collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addMensajes()
	 */
	public function clearMensajes()
	{
		$this->collMensajes = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collMensajes collection.
	 *
	 * By default this just sets the collMensajes collection to an empty array (like clearcollMensajes());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initMensajes($overrideExisting = true)
	{
		if (null !== $this->collMensajes && !$overrideExisting) {
			return;
		}
		$this->collMensajes = new PropelObjectCollection();
		$this->collMensajes->setModel('Mensaje');
	}

	/**
	 * Gets an array of Mensaje objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Localizacion is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Mensaje[] List of Mensaje objects
	 * @throws     PropelException
	 */
	public function getMensajes($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collMensajes || null !== $criteria) {
			if ($this->isNew() && null === $this->collMensajes) {
				// return empty collection
				$this->initMensajes();
			} else {
				$collMensajes = MensajeQuery::create(null, $criteria)
					->filterByLocalizacion($this)
					->find($con);
				if (null !== $criteria) {
					return $collMensajes;
				}
				$this->collMensajes = $collMensajes;
			}
		}
		return $this->collMensajes;
	}

	/**
	 * Returns the number of related Mensaje objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Mensaje objects.
	 * @throws     PropelException
	 */
	public function countMensajes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collMensajes || null !== $criteria) {
			if ($this->isNew() && null === $this->collMensajes) {
				return 0;
			} else {
				$query = MensajeQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByLocalizacion($this)
					->count($con);
			}
		} else {
			return count($this->collMensajes);
		}
	}

	/**
	 * Method called to associate a Mensaje object to this object
	 * through the Mensaje foreign key attribute.
	 *
	 * @param      Mensaje $l Mensaje
	 * @return     void
	 * @throws     PropelException
	 */
	public function addMensaje(Mensaje $l)
	{
		if ($this->collMensajes === null) {
			$this->initMensajes();
		}
		if (!$this->collMensajes->contains($l)) { // only add it if the **same** object is not already associated
			$this->collMensajes[]= $l;
			$l->setLocalizacion($this);
		}
	}

	/**
	 * Clears out the collPersonaLocalizacions collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPersonaLocalizacions()
	 */
	public function clearPersonaLocalizacions()
	{
		$this->collPersonaLocalizacions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPersonaLocalizacions collection.
	 *
	 * By default this just sets the collPersonaLocalizacions collection to an empty array (like clearcollPersonaLocalizacions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPersonaLocalizacions($overrideExisting = true)
	{
		if (null !== $this->collPersonaLocalizacions && !$overrideExisting) {
			return;
		}
		$this->collPersonaLocalizacions = new PropelObjectCollection();
		$this->collPersonaLocalizacions->setModel('PersonaLocalizacion');
	}

	/**
	 * Gets an array of PersonaLocalizacion objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Localizacion is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PersonaLocalizacion[] List of PersonaLocalizacion objects
	 * @throws     PropelException
	 */
	public function getPersonaLocalizacions($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPersonaLocalizacions || null !== $criteria) {
			if ($this->isNew() && null === $this->collPersonaLocalizacions) {
				// return empty collection
				$this->initPersonaLocalizacions();
			} else {
				$collPersonaLocalizacions = PersonaLocalizacionQuery::create(null, $criteria)
					->filterByLocalizacion($this)
					->find($con);
				if (null !== $criteria) {
					return $collPersonaLocalizacions;
				}
				$this->collPersonaLocalizacions = $collPersonaLocalizacions;
			}
		}
		return $this->collPersonaLocalizacions;
	}

	/**
	 * Returns the number of related PersonaLocalizacion objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PersonaLocalizacion objects.
	 * @throws     PropelException
	 */
	public function countPersonaLocalizacions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPersonaLocalizacions || null !== $criteria) {
			if ($this->isNew() && null === $this->collPersonaLocalizacions) {
				return 0;
			} else {
				$query = PersonaLocalizacionQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByLocalizacion($this)
					->count($con);
			}
		} else {
			return count($this->collPersonaLocalizacions);
		}
	}

	/**
	 * Method called to associate a PersonaLocalizacion object to this object
	 * through the PersonaLocalizacion foreign key attribute.
	 *
	 * @param      PersonaLocalizacion $l PersonaLocalizacion
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPersonaLocalizacion(PersonaLocalizacion $l)
	{
		if ($this->collPersonaLocalizacions === null) {
			$this->initPersonaLocalizacions();
		}
		if (!$this->collPersonaLocalizacions->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPersonaLocalizacions[]= $l;
			$l->setLocalizacion($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Localizacion is new, it will return
	 * an empty collection; or if this Localizacion has previously
	 * been saved, it will retrieve related PersonaLocalizacions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Localizacion.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PersonaLocalizacion[] List of PersonaLocalizacion objects
	 */
	public function getPersonaLocalizacionsJoinPersona($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PersonaLocalizacionQuery::create(null, $criteria);
		$query->joinWith('Persona', $join_behavior);

		return $this->getPersonaLocalizacions($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_localizacion = null;
		$this->nombre = null;
		$this->output_device = null;
		$this->direccion_printer = null;
		$this->visible = null;
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
			if ($this->collMensajes) {
				foreach ($this->collMensajes as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPersonaLocalizacions) {
				foreach ($this->collPersonaLocalizacions as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collMensajes instanceof PropelCollection) {
			$this->collMensajes->clearIterator();
		}
		$this->collMensajes = null;
		if ($this->collPersonaLocalizacions instanceof PropelCollection) {
			$this->collPersonaLocalizacions->clearIterator();
		}
		$this->collPersonaLocalizacions = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(LocalizacionPeer::DEFAULT_STRING_FORMAT);
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

} // BaseLocalizacion
