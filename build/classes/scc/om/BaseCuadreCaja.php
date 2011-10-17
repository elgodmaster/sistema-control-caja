<?php


/**
 * Base class that represents a row from the 'cuadre_caja' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseCuadreCaja extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CuadreCajaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CuadreCajaPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_cuadre_caja field.
	 * @var        int
	 */
	protected $id_cuadre_caja;

	/**
	 * The value for the id_persona field.
	 * @var        int
	 */
	protected $id_persona;

	/**
	 * The value for the id_caja field.
	 * @var        int
	 */
	protected $id_caja;

	/**
	 * The value for the fecha_hora_i field.
	 * @var        string
	 */
	protected $fecha_hora_i;

	/**
	 * The value for the fecha_hora_f field.
	 * @var        string
	 */
	protected $fecha_hora_f;

	/**
	 * The value for the base_efectivo field.
	 * @var        string
	 */
	protected $base_efectivo;

	/**
	 * The value for the efectivo_inicial field.
	 * @var        string
	 */
	protected $efectivo_inicial;

	/**
	 * The value for the efectivo_final field.
	 * @var        string
	 */
	protected $efectivo_final;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * The value for the ajuste field.
	 * @var        string
	 */
	protected $ajuste;

	/**
	 * The value for the comentario field.
	 * @var        string
	 */
	protected $comentario;

	/**
	 * @var        Caja
	 */
	protected $aCaja;

	/**
	 * @var        Persona
	 */
	protected $aPersona;

	/**
	 * @var        array IngresoEgreso[] Collection to store aggregation of IngresoEgreso objects.
	 */
	protected $collIngresoEgresos;

	/**
	 * @var        array Orden[] Collection to store aggregation of Orden objects.
	 */
	protected $collOrdens;

	/**
	 * @var        array PagoEfectivo[] Collection to store aggregation of PagoEfectivo objects.
	 */
	protected $collPagoEfectivos;

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
	 * Get the [id_cuadre_caja] column value.
	 * 
	 * @return     int
	 */
	public function getIdCuadreCaja()
	{
		return $this->id_cuadre_caja;
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
	 * Get the [id_caja] column value.
	 * 
	 * @return     int
	 */
	public function getIdCaja()
	{
		return $this->id_caja;
	}

	/**
	 * Get the [optionally formatted] temporal [fecha_hora_i] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaHoraI($format = 'Y-m-d H:i:s')
	{
		if ($this->fecha_hora_i === null) {
			return null;
		}


		if ($this->fecha_hora_i === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_hora_i);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_hora_i, true), $x);
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
	 * Get the [optionally formatted] temporal [fecha_hora_f] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaHoraF($format = 'Y-m-d H:i:s')
	{
		if ($this->fecha_hora_f === null) {
			return null;
		}


		if ($this->fecha_hora_f === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_hora_f);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_hora_f, true), $x);
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
	 * Get the [base_efectivo] column value.
	 * 
	 * @return     string
	 */
	public function getBaseEfectivo()
	{
		return $this->base_efectivo;
	}

	/**
	 * Get the [efectivo_inicial] column value.
	 * 
	 * @return     string
	 */
	public function getEfectivoInicial()
	{
		return $this->efectivo_inicial;
	}

	/**
	 * Get the [efectivo_final] column value.
	 * 
	 * @return     string
	 */
	public function getEfectivoFinal()
	{
		return $this->efectivo_final;
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
	 * Get the [ajuste] column value.
	 * 
	 * @return     string
	 */
	public function getAjuste()
	{
		return $this->ajuste;
	}

	/**
	 * Get the [comentario] column value.
	 * 
	 * @return     string
	 */
	public function getComentario()
	{
		return $this->comentario;
	}

	/**
	 * Set the value of [id_cuadre_caja] column.
	 * 
	 * @param      int $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setIdCuadreCaja($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_cuadre_caja !== $v) {
			$this->id_cuadre_caja = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::ID_CUADRE_CAJA;
		}

		return $this;
	} // setIdCuadreCaja()

	/**
	 * Set the value of [id_persona] column.
	 * 
	 * @param      int $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setIdPersona($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_persona !== $v) {
			$this->id_persona = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::ID_PERSONA;
		}

		if ($this->aPersona !== null && $this->aPersona->getIdPersona() !== $v) {
			$this->aPersona = null;
		}

		return $this;
	} // setIdPersona()

	/**
	 * Set the value of [id_caja] column.
	 * 
	 * @param      int $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setIdCaja($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_caja !== $v) {
			$this->id_caja = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::ID_CAJA;
		}

		if ($this->aCaja !== null && $this->aCaja->getIdCaja() !== $v) {
			$this->aCaja = null;
		}

		return $this;
	} // setIdCaja()

	/**
	 * Sets the value of [fecha_hora_i] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setFechaHoraI($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora_i !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora_i !== null && $tmpDt = new DateTime($this->fecha_hora_i)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora_i = $newDateAsString;
				$this->modifiedColumns[] = CuadreCajaPeer::FECHA_HORA_I;
			}
		} // if either are not null

		return $this;
	} // setFechaHoraI()

	/**
	 * Sets the value of [fecha_hora_f] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setFechaHoraF($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora_f !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora_f !== null && $tmpDt = new DateTime($this->fecha_hora_f)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora_f = $newDateAsString;
				$this->modifiedColumns[] = CuadreCajaPeer::FECHA_HORA_F;
			}
		} // if either are not null

		return $this;
	} // setFechaHoraF()

	/**
	 * Set the value of [base_efectivo] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setBaseEfectivo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_efectivo !== $v) {
			$this->base_efectivo = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::BASE_EFECTIVO;
		}

		return $this;
	} // setBaseEfectivo()

	/**
	 * Set the value of [efectivo_inicial] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setEfectivoInicial($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->efectivo_inicial !== $v) {
			$this->efectivo_inicial = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::EFECTIVO_INICIAL;
		}

		return $this;
	} // setEfectivoInicial()

	/**
	 * Set the value of [efectivo_final] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setEfectivoFinal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->efectivo_final !== $v) {
			$this->efectivo_final = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::EFECTIVO_FINAL;
		}

		return $this;
	} // setEfectivoFinal()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::ESTADO;
		}

		return $this;
	} // setEstado()

	/**
	 * Set the value of [ajuste] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setAjuste($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ajuste !== $v) {
			$this->ajuste = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::AJUSTE;
		}

		return $this;
	} // setAjuste()

	/**
	 * Set the value of [comentario] column.
	 * 
	 * @param      string $v new value
	 * @return     CuadreCaja The current object (for fluent API support)
	 */
	public function setComentario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comentario !== $v) {
			$this->comentario = $v;
			$this->modifiedColumns[] = CuadreCajaPeer::COMENTARIO;
		}

		return $this;
	} // setComentario()

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

			$this->id_cuadre_caja = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_persona = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_caja = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->fecha_hora_i = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->fecha_hora_f = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->base_efectivo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->efectivo_inicial = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->efectivo_final = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->estado = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->ajuste = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->comentario = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = CuadreCajaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating CuadreCaja object", $e);
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

		if ($this->aPersona !== null && $this->id_persona !== $this->aPersona->getIdPersona()) {
			$this->aPersona = null;
		}
		if ($this->aCaja !== null && $this->id_caja !== $this->aCaja->getIdCaja()) {
			$this->aCaja = null;
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
			$con = Propel::getConnection(CuadreCajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CuadreCajaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCaja = null;
			$this->aPersona = null;
			$this->collIngresoEgresos = null;

			$this->collOrdens = null;

			$this->collPagoEfectivos = null;

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
			$con = Propel::getConnection(CuadreCajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CuadreCajaQuery::create()
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
			$con = Propel::getConnection(CuadreCajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CuadreCajaPeer::addInstanceToPool($this);
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

			if ($this->aCaja !== null) {
				if ($this->aCaja->isModified() || $this->aCaja->isNew()) {
					$affectedRows += $this->aCaja->save($con);
				}
				$this->setCaja($this->aCaja);
			}

			if ($this->aPersona !== null) {
				if ($this->aPersona->isModified() || $this->aPersona->isNew()) {
					$affectedRows += $this->aPersona->save($con);
				}
				$this->setPersona($this->aPersona);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CuadreCajaPeer::ID_CUADRE_CAJA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CuadreCajaPeer::ID_CUADRE_CAJA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CuadreCajaPeer::ID_CUADRE_CAJA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdCuadreCaja($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += CuadreCajaPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collIngresoEgresos !== null) {
				foreach ($this->collIngresoEgresos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collOrdens !== null) {
				foreach ($this->collOrdens as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPagoEfectivos !== null) {
				foreach ($this->collPagoEfectivos as $referrerFK) {
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

			if ($this->aCaja !== null) {
				if (!$this->aCaja->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCaja->getValidationFailures());
				}
			}

			if ($this->aPersona !== null) {
				if (!$this->aPersona->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersona->getValidationFailures());
				}
			}


			if (($retval = CuadreCajaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIngresoEgresos !== null) {
					foreach ($this->collIngresoEgresos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collOrdens !== null) {
					foreach ($this->collOrdens as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPagoEfectivos !== null) {
					foreach ($this->collPagoEfectivos as $referrerFK) {
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
		$pos = CuadreCajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCuadreCaja();
				break;
			case 1:
				return $this->getIdPersona();
				break;
			case 2:
				return $this->getIdCaja();
				break;
			case 3:
				return $this->getFechaHoraI();
				break;
			case 4:
				return $this->getFechaHoraF();
				break;
			case 5:
				return $this->getBaseEfectivo();
				break;
			case 6:
				return $this->getEfectivoInicial();
				break;
			case 7:
				return $this->getEfectivoFinal();
				break;
			case 8:
				return $this->getEstado();
				break;
			case 9:
				return $this->getAjuste();
				break;
			case 10:
				return $this->getComentario();
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
		if (isset($alreadyDumpedObjects['CuadreCaja'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['CuadreCaja'][$this->getPrimaryKey()] = true;
		$keys = CuadreCajaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCuadreCaja(),
			$keys[1] => $this->getIdPersona(),
			$keys[2] => $this->getIdCaja(),
			$keys[3] => $this->getFechaHoraI(),
			$keys[4] => $this->getFechaHoraF(),
			$keys[5] => $this->getBaseEfectivo(),
			$keys[6] => $this->getEfectivoInicial(),
			$keys[7] => $this->getEfectivoFinal(),
			$keys[8] => $this->getEstado(),
			$keys[9] => $this->getAjuste(),
			$keys[10] => $this->getComentario(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCaja) {
				$result['Caja'] = $this->aCaja->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aPersona) {
				$result['Persona'] = $this->aPersona->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collIngresoEgresos) {
				$result['IngresoEgresos'] = $this->collIngresoEgresos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collOrdens) {
				$result['Ordens'] = $this->collOrdens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPagoEfectivos) {
				$result['PagoEfectivos'] = $this->collPagoEfectivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = CuadreCajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCuadreCaja($value);
				break;
			case 1:
				$this->setIdPersona($value);
				break;
			case 2:
				$this->setIdCaja($value);
				break;
			case 3:
				$this->setFechaHoraI($value);
				break;
			case 4:
				$this->setFechaHoraF($value);
				break;
			case 5:
				$this->setBaseEfectivo($value);
				break;
			case 6:
				$this->setEfectivoInicial($value);
				break;
			case 7:
				$this->setEfectivoFinal($value);
				break;
			case 8:
				$this->setEstado($value);
				break;
			case 9:
				$this->setAjuste($value);
				break;
			case 10:
				$this->setComentario($value);
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
		$keys = CuadreCajaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCuadreCaja($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdPersona($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdCaja($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFechaHoraI($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechaHoraF($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBaseEfectivo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEfectivoInicial($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setEfectivoFinal($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEstado($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAjuste($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setComentario($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CuadreCajaPeer::DATABASE_NAME);

		if ($this->isColumnModified(CuadreCajaPeer::ID_CUADRE_CAJA)) $criteria->add(CuadreCajaPeer::ID_CUADRE_CAJA, $this->id_cuadre_caja);
		if ($this->isColumnModified(CuadreCajaPeer::ID_PERSONA)) $criteria->add(CuadreCajaPeer::ID_PERSONA, $this->id_persona);
		if ($this->isColumnModified(CuadreCajaPeer::ID_CAJA)) $criteria->add(CuadreCajaPeer::ID_CAJA, $this->id_caja);
		if ($this->isColumnModified(CuadreCajaPeer::FECHA_HORA_I)) $criteria->add(CuadreCajaPeer::FECHA_HORA_I, $this->fecha_hora_i);
		if ($this->isColumnModified(CuadreCajaPeer::FECHA_HORA_F)) $criteria->add(CuadreCajaPeer::FECHA_HORA_F, $this->fecha_hora_f);
		if ($this->isColumnModified(CuadreCajaPeer::BASE_EFECTIVO)) $criteria->add(CuadreCajaPeer::BASE_EFECTIVO, $this->base_efectivo);
		if ($this->isColumnModified(CuadreCajaPeer::EFECTIVO_INICIAL)) $criteria->add(CuadreCajaPeer::EFECTIVO_INICIAL, $this->efectivo_inicial);
		if ($this->isColumnModified(CuadreCajaPeer::EFECTIVO_FINAL)) $criteria->add(CuadreCajaPeer::EFECTIVO_FINAL, $this->efectivo_final);
		if ($this->isColumnModified(CuadreCajaPeer::ESTADO)) $criteria->add(CuadreCajaPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(CuadreCajaPeer::AJUSTE)) $criteria->add(CuadreCajaPeer::AJUSTE, $this->ajuste);
		if ($this->isColumnModified(CuadreCajaPeer::COMENTARIO)) $criteria->add(CuadreCajaPeer::COMENTARIO, $this->comentario);

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
		$criteria = new Criteria(CuadreCajaPeer::DATABASE_NAME);
		$criteria->add(CuadreCajaPeer::ID_CUADRE_CAJA, $this->id_cuadre_caja);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCuadreCaja();
	}

	/**
	 * Generic method to set the primary key (id_cuadre_caja column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCuadreCaja($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCuadreCaja();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of CuadreCaja (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdPersona($this->getIdPersona());
		$copyObj->setIdCaja($this->getIdCaja());
		$copyObj->setFechaHoraI($this->getFechaHoraI());
		$copyObj->setFechaHoraF($this->getFechaHoraF());
		$copyObj->setBaseEfectivo($this->getBaseEfectivo());
		$copyObj->setEfectivoInicial($this->getEfectivoInicial());
		$copyObj->setEfectivoFinal($this->getEfectivoFinal());
		$copyObj->setEstado($this->getEstado());
		$copyObj->setAjuste($this->getAjuste());
		$copyObj->setComentario($this->getComentario());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getIngresoEgresos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addIngresoEgreso($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getOrdens() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addOrden($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPagoEfectivos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPagoEfectivo($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCuadreCaja(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     CuadreCaja Clone of current object.
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
	 * @return     CuadreCajaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CuadreCajaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Caja object.
	 *
	 * @param      Caja $v
	 * @return     CuadreCaja The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCaja(Caja $v = null)
	{
		if ($v === null) {
			$this->setIdCaja(NULL);
		} else {
			$this->setIdCaja($v->getIdCaja());
		}

		$this->aCaja = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Caja object, it will not be re-added.
		if ($v !== null) {
			$v->addCuadreCaja($this);
		}

		return $this;
	}


	/**
	 * Get the associated Caja object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Caja The associated Caja object.
	 * @throws     PropelException
	 */
	public function getCaja(PropelPDO $con = null)
	{
		if ($this->aCaja === null && ($this->id_caja !== null)) {
			$this->aCaja = CajaQuery::create()->findPk($this->id_caja, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCaja->addCuadreCajas($this);
			 */
		}
		return $this->aCaja;
	}

	/**
	 * Declares an association between this object and a Persona object.
	 *
	 * @param      Persona $v
	 * @return     CuadreCaja The current object (for fluent API support)
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
			$v->addCuadreCaja($this);
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
				$this->aPersona->addCuadreCajas($this);
			 */
		}
		return $this->aPersona;
	}

	/**
	 * Clears out the collIngresoEgresos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addIngresoEgresos()
	 */
	public function clearIngresoEgresos()
	{
		$this->collIngresoEgresos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collIngresoEgresos collection.
	 *
	 * By default this just sets the collIngresoEgresos collection to an empty array (like clearcollIngresoEgresos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initIngresoEgresos($overrideExisting = true)
	{
		if (null !== $this->collIngresoEgresos && !$overrideExisting) {
			return;
		}
		$this->collIngresoEgresos = new PropelObjectCollection();
		$this->collIngresoEgresos->setModel('IngresoEgreso');
	}

	/**
	 * Gets an array of IngresoEgreso objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CuadreCaja is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array IngresoEgreso[] List of IngresoEgreso objects
	 * @throws     PropelException
	 */
	public function getIngresoEgresos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collIngresoEgresos || null !== $criteria) {
			if ($this->isNew() && null === $this->collIngresoEgresos) {
				// return empty collection
				$this->initIngresoEgresos();
			} else {
				$collIngresoEgresos = IngresoEgresoQuery::create(null, $criteria)
					->filterByCuadreCaja($this)
					->find($con);
				if (null !== $criteria) {
					return $collIngresoEgresos;
				}
				$this->collIngresoEgresos = $collIngresoEgresos;
			}
		}
		return $this->collIngresoEgresos;
	}

	/**
	 * Returns the number of related IngresoEgreso objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related IngresoEgreso objects.
	 * @throws     PropelException
	 */
	public function countIngresoEgresos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collIngresoEgresos || null !== $criteria) {
			if ($this->isNew() && null === $this->collIngresoEgresos) {
				return 0;
			} else {
				$query = IngresoEgresoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCuadreCaja($this)
					->count($con);
			}
		} else {
			return count($this->collIngresoEgresos);
		}
	}

	/**
	 * Method called to associate a IngresoEgreso object to this object
	 * through the IngresoEgreso foreign key attribute.
	 *
	 * @param      IngresoEgreso $l IngresoEgreso
	 * @return     void
	 * @throws     PropelException
	 */
	public function addIngresoEgreso(IngresoEgreso $l)
	{
		if ($this->collIngresoEgresos === null) {
			$this->initIngresoEgresos();
		}
		if (!$this->collIngresoEgresos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collIngresoEgresos[]= $l;
			$l->setCuadreCaja($this);
		}
	}

	/**
	 * Clears out the collOrdens collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addOrdens()
	 */
	public function clearOrdens()
	{
		$this->collOrdens = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collOrdens collection.
	 *
	 * By default this just sets the collOrdens collection to an empty array (like clearcollOrdens());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initOrdens($overrideExisting = true)
	{
		if (null !== $this->collOrdens && !$overrideExisting) {
			return;
		}
		$this->collOrdens = new PropelObjectCollection();
		$this->collOrdens->setModel('Orden');
	}

	/**
	 * Gets an array of Orden objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CuadreCaja is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Orden[] List of Orden objects
	 * @throws     PropelException
	 */
	public function getOrdens($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collOrdens || null !== $criteria) {
			if ($this->isNew() && null === $this->collOrdens) {
				// return empty collection
				$this->initOrdens();
			} else {
				$collOrdens = OrdenQuery::create(null, $criteria)
					->filterByCuadreCaja($this)
					->find($con);
				if (null !== $criteria) {
					return $collOrdens;
				}
				$this->collOrdens = $collOrdens;
			}
		}
		return $this->collOrdens;
	}

	/**
	 * Returns the number of related Orden objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Orden objects.
	 * @throws     PropelException
	 */
	public function countOrdens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collOrdens || null !== $criteria) {
			if ($this->isNew() && null === $this->collOrdens) {
				return 0;
			} else {
				$query = OrdenQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCuadreCaja($this)
					->count($con);
			}
		} else {
			return count($this->collOrdens);
		}
	}

	/**
	 * Method called to associate a Orden object to this object
	 * through the Orden foreign key attribute.
	 *
	 * @param      Orden $l Orden
	 * @return     void
	 * @throws     PropelException
	 */
	public function addOrden(Orden $l)
	{
		if ($this->collOrdens === null) {
			$this->initOrdens();
		}
		if (!$this->collOrdens->contains($l)) { // only add it if the **same** object is not already associated
			$this->collOrdens[]= $l;
			$l->setCuadreCaja($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CuadreCaja is new, it will return
	 * an empty collection; or if this CuadreCaja has previously
	 * been saved, it will retrieve related Ordens from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CuadreCaja.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Orden[] List of Orden objects
	 */
	public function getOrdensJoinPersona($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = OrdenQuery::create(null, $criteria);
		$query->joinWith('Persona', $join_behavior);

		return $this->getOrdens($query, $con);
	}

	/**
	 * Clears out the collPagoEfectivos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPagoEfectivos()
	 */
	public function clearPagoEfectivos()
	{
		$this->collPagoEfectivos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPagoEfectivos collection.
	 *
	 * By default this just sets the collPagoEfectivos collection to an empty array (like clearcollPagoEfectivos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPagoEfectivos($overrideExisting = true)
	{
		if (null !== $this->collPagoEfectivos && !$overrideExisting) {
			return;
		}
		$this->collPagoEfectivos = new PropelObjectCollection();
		$this->collPagoEfectivos->setModel('PagoEfectivo');
	}

	/**
	 * Gets an array of PagoEfectivo objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CuadreCaja is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 * @throws     PropelException
	 */
	public function getPagoEfectivos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivos) {
				// return empty collection
				$this->initPagoEfectivos();
			} else {
				$collPagoEfectivos = PagoEfectivoQuery::create(null, $criteria)
					->filterByCuadreCaja($this)
					->find($con);
				if (null !== $criteria) {
					return $collPagoEfectivos;
				}
				$this->collPagoEfectivos = $collPagoEfectivos;
			}
		}
		return $this->collPagoEfectivos;
	}

	/**
	 * Returns the number of related PagoEfectivo objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PagoEfectivo objects.
	 * @throws     PropelException
	 */
	public function countPagoEfectivos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivos) {
				return 0;
			} else {
				$query = PagoEfectivoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCuadreCaja($this)
					->count($con);
			}
		} else {
			return count($this->collPagoEfectivos);
		}
	}

	/**
	 * Method called to associate a PagoEfectivo object to this object
	 * through the PagoEfectivo foreign key attribute.
	 *
	 * @param      PagoEfectivo $l PagoEfectivo
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPagoEfectivo(PagoEfectivo $l)
	{
		if ($this->collPagoEfectivos === null) {
			$this->initPagoEfectivos();
		}
		if (!$this->collPagoEfectivos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPagoEfectivos[]= $l;
			$l->setCuadreCaja($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CuadreCaja is new, it will return
	 * an empty collection; or if this CuadreCaja has previously
	 * been saved, it will retrieve related PagoEfectivos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CuadreCaja.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 */
	public function getPagoEfectivosJoinPersonaRelatedByIdPersona($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoEfectivoQuery::create(null, $criteria);
		$query->joinWith('PersonaRelatedByIdPersona', $join_behavior);

		return $this->getPagoEfectivos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CuadreCaja is new, it will return
	 * an empty collection; or if this CuadreCaja has previously
	 * been saved, it will retrieve related PagoEfectivos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CuadreCaja.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 */
	public function getPagoEfectivosJoinPersonaRelatedByIdAutoriza($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoEfectivoQuery::create(null, $criteria);
		$query->joinWith('PersonaRelatedByIdAutoriza', $join_behavior);

		return $this->getPagoEfectivos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_cuadre_caja = null;
		$this->id_persona = null;
		$this->id_caja = null;
		$this->fecha_hora_i = null;
		$this->fecha_hora_f = null;
		$this->base_efectivo = null;
		$this->efectivo_inicial = null;
		$this->efectivo_final = null;
		$this->estado = null;
		$this->ajuste = null;
		$this->comentario = null;
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
			if ($this->collIngresoEgresos) {
				foreach ($this->collIngresoEgresos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collOrdens) {
				foreach ($this->collOrdens as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPagoEfectivos) {
				foreach ($this->collPagoEfectivos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collIngresoEgresos instanceof PropelCollection) {
			$this->collIngresoEgresos->clearIterator();
		}
		$this->collIngresoEgresos = null;
		if ($this->collOrdens instanceof PropelCollection) {
			$this->collOrdens->clearIterator();
		}
		$this->collOrdens = null;
		if ($this->collPagoEfectivos instanceof PropelCollection) {
			$this->collPagoEfectivos->clearIterator();
		}
		$this->collPagoEfectivos = null;
		$this->aCaja = null;
		$this->aPersona = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(CuadreCajaPeer::DEFAULT_STRING_FORMAT);
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

} // BaseCuadreCaja
