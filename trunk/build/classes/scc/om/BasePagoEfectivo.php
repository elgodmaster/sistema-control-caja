<?php


/**
 * Base class that represents a row from the 'pago_efectivo' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePagoEfectivo extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PagoEfectivoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PagoEfectivoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_pago_efectivo field.
	 * @var        int
	 */
	protected $id_pago_efectivo;

	/**
	 * The value for the id_persona field.
	 * @var        int
	 */
	protected $id_persona;

	/**
	 * The value for the id_autoriza field.
	 * @var        int
	 */
	protected $id_autoriza;

	/**
	 * The value for the id_cuadre_caja field.
	 * @var        int
	 */
	protected $id_cuadre_caja;

	/**
	 * The value for the fecha_hora field.
	 * @var        string
	 */
	protected $fecha_hora;

	/**
	 * The value for the valor field.
	 * @var        string
	 */
	protected $valor;

	/**
	 * The value for the concepto field.
	 * @var        string
	 */
	protected $concepto;

	/**
	 * The value for the receptor field.
	 * @var        string
	 */
	protected $receptor;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * @var        CuadreCaja
	 */
	protected $aCuadreCaja;

	/**
	 * @var        Persona
	 */
	protected $aPersonaRelatedByIdPersona;

	/**
	 * @var        Persona
	 */
	protected $aPersonaRelatedByIdAutoriza;

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
	 * Get the [id_pago_efectivo] column value.
	 * 
	 * @return     int
	 */
	public function getIdPagoEfectivo()
	{
		return $this->id_pago_efectivo;
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
	 * Get the [id_autoriza] column value.
	 * 
	 * @return     int
	 */
	public function getIdAutoriza()
	{
		return $this->id_autoriza;
	}

	/**
	 * Get the [id_cuadre_caja] column value.
	 * 
	 * @return     int
	 */
	public function getIdCuadreCaja()
	{
		return $this->id_cuadre_caja;
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
	 * Get the [valor] column value.
	 * 
	 * @return     string
	 */
	public function getValor()
	{
		return $this->valor;
	}

	/**
	 * Get the [concepto] column value.
	 * 
	 * @return     string
	 */
	public function getConcepto()
	{
		return $this->concepto;
	}

	/**
	 * Get the [receptor] column value.
	 * 
	 * @return     string
	 */
	public function getReceptor()
	{
		return $this->receptor;
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
	 * Set the value of [id_pago_efectivo] column.
	 * 
	 * @param      int $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setIdPagoEfectivo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_pago_efectivo !== $v) {
			$this->id_pago_efectivo = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::ID_PAGO_EFECTIVO;
		}

		return $this;
	} // setIdPagoEfectivo()

	/**
	 * Set the value of [id_persona] column.
	 * 
	 * @param      int $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setIdPersona($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_persona !== $v) {
			$this->id_persona = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::ID_PERSONA;
		}

		if ($this->aPersonaRelatedByIdPersona !== null && $this->aPersonaRelatedByIdPersona->getIdPersona() !== $v) {
			$this->aPersonaRelatedByIdPersona = null;
		}

		return $this;
	} // setIdPersona()

	/**
	 * Set the value of [id_autoriza] column.
	 * 
	 * @param      int $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setIdAutoriza($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_autoriza !== $v) {
			$this->id_autoriza = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::ID_AUTORIZA;
		}

		if ($this->aPersonaRelatedByIdAutoriza !== null && $this->aPersonaRelatedByIdAutoriza->getIdPersona() !== $v) {
			$this->aPersonaRelatedByIdAutoriza = null;
		}

		return $this;
	} // setIdAutoriza()

	/**
	 * Set the value of [id_cuadre_caja] column.
	 * 
	 * @param      int $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setIdCuadreCaja($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_cuadre_caja !== $v) {
			$this->id_cuadre_caja = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::ID_CUADRE_CAJA;
		}

		if ($this->aCuadreCaja !== null && $this->aCuadreCaja->getIdCuadreCaja() !== $v) {
			$this->aCuadreCaja = null;
		}

		return $this;
	} // setIdCuadreCaja()

	/**
	 * Sets the value of [fecha_hora] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setFechaHora($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora !== null && $tmpDt = new DateTime($this->fecha_hora)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora = $newDateAsString;
				$this->modifiedColumns[] = PagoEfectivoPeer::FECHA_HORA;
			}
		} // if either are not null

		return $this;
	} // setFechaHora()

	/**
	 * Set the value of [valor] column.
	 * 
	 * @param      string $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setValor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::VALOR;
		}

		return $this;
	} // setValor()

	/**
	 * Set the value of [concepto] column.
	 * 
	 * @param      string $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setConcepto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->concepto !== $v) {
			$this->concepto = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::CONCEPTO;
		}

		return $this;
	} // setConcepto()

	/**
	 * Set the value of [receptor] column.
	 * 
	 * @param      string $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setReceptor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->receptor !== $v) {
			$this->receptor = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::RECEPTOR;
		}

		return $this;
	} // setReceptor()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      string $v new value
	 * @return     PagoEfectivo The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = PagoEfectivoPeer::ESTADO;
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

			$this->id_pago_efectivo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_persona = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_autoriza = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_cuadre_caja = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->fecha_hora = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->valor = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->concepto = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->receptor = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->estado = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = PagoEfectivoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating PagoEfectivo object", $e);
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

		if ($this->aPersonaRelatedByIdPersona !== null && $this->id_persona !== $this->aPersonaRelatedByIdPersona->getIdPersona()) {
			$this->aPersonaRelatedByIdPersona = null;
		}
		if ($this->aPersonaRelatedByIdAutoriza !== null && $this->id_autoriza !== $this->aPersonaRelatedByIdAutoriza->getIdPersona()) {
			$this->aPersonaRelatedByIdAutoriza = null;
		}
		if ($this->aCuadreCaja !== null && $this->id_cuadre_caja !== $this->aCuadreCaja->getIdCuadreCaja()) {
			$this->aCuadreCaja = null;
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
			$con = Propel::getConnection(PagoEfectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PagoEfectivoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCuadreCaja = null;
			$this->aPersonaRelatedByIdPersona = null;
			$this->aPersonaRelatedByIdAutoriza = null;
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
			$con = Propel::getConnection(PagoEfectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PagoEfectivoQuery::create()
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
			$con = Propel::getConnection(PagoEfectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PagoEfectivoPeer::addInstanceToPool($this);
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

			if ($this->aCuadreCaja !== null) {
				if ($this->aCuadreCaja->isModified() || $this->aCuadreCaja->isNew()) {
					$affectedRows += $this->aCuadreCaja->save($con);
				}
				$this->setCuadreCaja($this->aCuadreCaja);
			}

			if ($this->aPersonaRelatedByIdPersona !== null) {
				if ($this->aPersonaRelatedByIdPersona->isModified() || $this->aPersonaRelatedByIdPersona->isNew()) {
					$affectedRows += $this->aPersonaRelatedByIdPersona->save($con);
				}
				$this->setPersonaRelatedByIdPersona($this->aPersonaRelatedByIdPersona);
			}

			if ($this->aPersonaRelatedByIdAutoriza !== null) {
				if ($this->aPersonaRelatedByIdAutoriza->isModified() || $this->aPersonaRelatedByIdAutoriza->isNew()) {
					$affectedRows += $this->aPersonaRelatedByIdAutoriza->save($con);
				}
				$this->setPersonaRelatedByIdAutoriza($this->aPersonaRelatedByIdAutoriza);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PagoEfectivoPeer::ID_PAGO_EFECTIVO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PagoEfectivoPeer::ID_PAGO_EFECTIVO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PagoEfectivoPeer::ID_PAGO_EFECTIVO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdPagoEfectivo($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PagoEfectivoPeer::doUpdate($this, $con);
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

			if ($this->aCuadreCaja !== null) {
				if (!$this->aCuadreCaja->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCuadreCaja->getValidationFailures());
				}
			}

			if ($this->aPersonaRelatedByIdPersona !== null) {
				if (!$this->aPersonaRelatedByIdPersona->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersonaRelatedByIdPersona->getValidationFailures());
				}
			}

			if ($this->aPersonaRelatedByIdAutoriza !== null) {
				if (!$this->aPersonaRelatedByIdAutoriza->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersonaRelatedByIdAutoriza->getValidationFailures());
				}
			}


			if (($retval = PagoEfectivoPeer::doValidate($this, $columns)) !== true) {
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
		$pos = PagoEfectivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdPagoEfectivo();
				break;
			case 1:
				return $this->getIdPersona();
				break;
			case 2:
				return $this->getIdAutoriza();
				break;
			case 3:
				return $this->getIdCuadreCaja();
				break;
			case 4:
				return $this->getFechaHora();
				break;
			case 5:
				return $this->getValor();
				break;
			case 6:
				return $this->getConcepto();
				break;
			case 7:
				return $this->getReceptor();
				break;
			case 8:
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
		if (isset($alreadyDumpedObjects['PagoEfectivo'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['PagoEfectivo'][$this->getPrimaryKey()] = true;
		$keys = PagoEfectivoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdPagoEfectivo(),
			$keys[1] => $this->getIdPersona(),
			$keys[2] => $this->getIdAutoriza(),
			$keys[3] => $this->getIdCuadreCaja(),
			$keys[4] => $this->getFechaHora(),
			$keys[5] => $this->getValor(),
			$keys[6] => $this->getConcepto(),
			$keys[7] => $this->getReceptor(),
			$keys[8] => $this->getEstado(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCuadreCaja) {
				$result['CuadreCaja'] = $this->aCuadreCaja->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aPersonaRelatedByIdPersona) {
				$result['PersonaRelatedByIdPersona'] = $this->aPersonaRelatedByIdPersona->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aPersonaRelatedByIdAutoriza) {
				$result['PersonaRelatedByIdAutoriza'] = $this->aPersonaRelatedByIdAutoriza->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = PagoEfectivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdPagoEfectivo($value);
				break;
			case 1:
				$this->setIdPersona($value);
				break;
			case 2:
				$this->setIdAutoriza($value);
				break;
			case 3:
				$this->setIdCuadreCaja($value);
				break;
			case 4:
				$this->setFechaHora($value);
				break;
			case 5:
				$this->setValor($value);
				break;
			case 6:
				$this->setConcepto($value);
				break;
			case 7:
				$this->setReceptor($value);
				break;
			case 8:
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
		$keys = PagoEfectivoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdPagoEfectivo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdPersona($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdAutoriza($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCuadreCaja($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechaHora($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setValor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setConcepto($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setReceptor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEstado($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PagoEfectivoPeer::DATABASE_NAME);

		if ($this->isColumnModified(PagoEfectivoPeer::ID_PAGO_EFECTIVO)) $criteria->add(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $this->id_pago_efectivo);
		if ($this->isColumnModified(PagoEfectivoPeer::ID_PERSONA)) $criteria->add(PagoEfectivoPeer::ID_PERSONA, $this->id_persona);
		if ($this->isColumnModified(PagoEfectivoPeer::ID_AUTORIZA)) $criteria->add(PagoEfectivoPeer::ID_AUTORIZA, $this->id_autoriza);
		if ($this->isColumnModified(PagoEfectivoPeer::ID_CUADRE_CAJA)) $criteria->add(PagoEfectivoPeer::ID_CUADRE_CAJA, $this->id_cuadre_caja);
		if ($this->isColumnModified(PagoEfectivoPeer::FECHA_HORA)) $criteria->add(PagoEfectivoPeer::FECHA_HORA, $this->fecha_hora);
		if ($this->isColumnModified(PagoEfectivoPeer::VALOR)) $criteria->add(PagoEfectivoPeer::VALOR, $this->valor);
		if ($this->isColumnModified(PagoEfectivoPeer::CONCEPTO)) $criteria->add(PagoEfectivoPeer::CONCEPTO, $this->concepto);
		if ($this->isColumnModified(PagoEfectivoPeer::RECEPTOR)) $criteria->add(PagoEfectivoPeer::RECEPTOR, $this->receptor);
		if ($this->isColumnModified(PagoEfectivoPeer::ESTADO)) $criteria->add(PagoEfectivoPeer::ESTADO, $this->estado);

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
		$criteria = new Criteria(PagoEfectivoPeer::DATABASE_NAME);
		$criteria->add(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $this->id_pago_efectivo);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdPagoEfectivo();
	}

	/**
	 * Generic method to set the primary key (id_pago_efectivo column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdPagoEfectivo($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdPagoEfectivo();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of PagoEfectivo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdPersona($this->getIdPersona());
		$copyObj->setIdAutoriza($this->getIdAutoriza());
		$copyObj->setIdCuadreCaja($this->getIdCuadreCaja());
		$copyObj->setFechaHora($this->getFechaHora());
		$copyObj->setValor($this->getValor());
		$copyObj->setConcepto($this->getConcepto());
		$copyObj->setReceptor($this->getReceptor());
		$copyObj->setEstado($this->getEstado());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdPagoEfectivo(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     PagoEfectivo Clone of current object.
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
	 * @return     PagoEfectivoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PagoEfectivoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a CuadreCaja object.
	 *
	 * @param      CuadreCaja $v
	 * @return     PagoEfectivo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCuadreCaja(CuadreCaja $v = null)
	{
		if ($v === null) {
			$this->setIdCuadreCaja(NULL);
		} else {
			$this->setIdCuadreCaja($v->getIdCuadreCaja());
		}

		$this->aCuadreCaja = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CuadreCaja object, it will not be re-added.
		if ($v !== null) {
			$v->addPagoEfectivo($this);
		}

		return $this;
	}


	/**
	 * Get the associated CuadreCaja object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CuadreCaja The associated CuadreCaja object.
	 * @throws     PropelException
	 */
	public function getCuadreCaja(PropelPDO $con = null)
	{
		if ($this->aCuadreCaja === null && ($this->id_cuadre_caja !== null)) {
			$this->aCuadreCaja = CuadreCajaQuery::create()->findPk($this->id_cuadre_caja, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCuadreCaja->addPagoEfectivos($this);
			 */
		}
		return $this->aCuadreCaja;
	}

	/**
	 * Declares an association between this object and a Persona object.
	 *
	 * @param      Persona $v
	 * @return     PagoEfectivo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPersonaRelatedByIdPersona(Persona $v = null)
	{
		if ($v === null) {
			$this->setIdPersona(NULL);
		} else {
			$this->setIdPersona($v->getIdPersona());
		}

		$this->aPersonaRelatedByIdPersona = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Persona object, it will not be re-added.
		if ($v !== null) {
			$v->addPagoEfectivoRelatedByIdPersona($this);
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
	public function getPersonaRelatedByIdPersona(PropelPDO $con = null)
	{
		if ($this->aPersonaRelatedByIdPersona === null && ($this->id_persona !== null)) {
			$this->aPersonaRelatedByIdPersona = PersonaQuery::create()->findPk($this->id_persona, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPersonaRelatedByIdPersona->addPagoEfectivosRelatedByIdPersona($this);
			 */
		}
		return $this->aPersonaRelatedByIdPersona;
	}

	/**
	 * Declares an association between this object and a Persona object.
	 *
	 * @param      Persona $v
	 * @return     PagoEfectivo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPersonaRelatedByIdAutoriza(Persona $v = null)
	{
		if ($v === null) {
			$this->setIdAutoriza(NULL);
		} else {
			$this->setIdAutoriza($v->getIdPersona());
		}

		$this->aPersonaRelatedByIdAutoriza = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Persona object, it will not be re-added.
		if ($v !== null) {
			$v->addPagoEfectivoRelatedByIdAutoriza($this);
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
	public function getPersonaRelatedByIdAutoriza(PropelPDO $con = null)
	{
		if ($this->aPersonaRelatedByIdAutoriza === null && ($this->id_autoriza !== null)) {
			$this->aPersonaRelatedByIdAutoriza = PersonaQuery::create()->findPk($this->id_autoriza, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aPersonaRelatedByIdAutoriza->addPagoEfectivosRelatedByIdAutoriza($this);
			 */
		}
		return $this->aPersonaRelatedByIdAutoriza;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_pago_efectivo = null;
		$this->id_persona = null;
		$this->id_autoriza = null;
		$this->id_cuadre_caja = null;
		$this->fecha_hora = null;
		$this->valor = null;
		$this->concepto = null;
		$this->receptor = null;
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
		} // if ($deep)

		$this->aCuadreCaja = null;
		$this->aPersonaRelatedByIdPersona = null;
		$this->aPersonaRelatedByIdAutoriza = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PagoEfectivoPeer::DEFAULT_STRING_FORMAT);
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

} // BasePagoEfectivo
