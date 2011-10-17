<?php


/**
 * Base class that represents a row from the 'persona' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePersona extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PersonaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PersonaPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_persona field.
	 * @var        int
	 */
	protected $id_persona;

	/**
	 * The value for the id_cargo field.
	 * @var        int
	 */
	protected $id_cargo;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the apellido field.
	 * @var        string
	 */
	protected $apellido;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the identificacion field.
	 * @var        string
	 */
	protected $identificacion;

	/**
	 * The value for the fecha_nacimiento field.
	 * @var        string
	 */
	protected $fecha_nacimiento;

	/**
	 * The value for the estado field.
	 * @var        string
	 */
	protected $estado;

	/**
	 * The value for the clave field.
	 * @var        string
	 */
	protected $clave;

	/**
	 * The value for the fecha_ingreso field.
	 * @var        string
	 */
	protected $fecha_ingreso;

	/**
	 * The value for the fecha_salida field.
	 * @var        string
	 */
	protected $fecha_salida;

	/**
	 * The value for the autoriza_pago field.
	 * @var        string
	 */
	protected $autoriza_pago;

	/**
	 * @var        Cargo
	 */
	protected $aCargo;

	/**
	 * @var        array CuadreCaja[] Collection to store aggregation of CuadreCaja objects.
	 */
	protected $collCuadreCajas;

	/**
	 * @var        array Log[] Collection to store aggregation of Log objects.
	 */
	protected $collLogs;

	/**
	 * @var        array MenuPersona[] Collection to store aggregation of MenuPersona objects.
	 */
	protected $collMenuPersonas;

	/**
	 * @var        array Orden[] Collection to store aggregation of Orden objects.
	 */
	protected $collOrdens;

	/**
	 * @var        array PersonaLocalizacion[] Collection to store aggregation of PersonaLocalizacion objects.
	 */
	protected $collPersonaLocalizacions;

	/**
	 * @var        array UsuarioCaja[] Collection to store aggregation of UsuarioCaja objects.
	 */
	protected $collUsuarioCajas;

	/**
	 * @var        array PagoEfectivo[] Collection to store aggregation of PagoEfectivo objects.
	 */
	protected $collPagoEfectivosRelatedByIdPersona;

	/**
	 * @var        array PagoEfectivo[] Collection to store aggregation of PagoEfectivo objects.
	 */
	protected $collPagoEfectivosRelatedByIdAutoriza;

	/**
	 * @var        array DetalleOrden[] Collection to store aggregation of DetalleOrden objects.
	 */
	protected $collDetalleOrdens;

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
	 * Get the [id_persona] column value.
	 * 
	 * @return     int
	 */
	public function getIdPersona()
	{
		return $this->id_persona;
	}

	/**
	 * Get the [id_cargo] column value.
	 * 
	 * @return     int
	 */
	public function getIdCargo()
	{
		return $this->id_cargo;
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
	 * Get the [apellido] column value.
	 * 
	 * @return     string
	 */
	public function getApellido()
	{
		return $this->apellido;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [identificacion] column value.
	 * 
	 * @return     string
	 */
	public function getIdentificacion()
	{
		return $this->identificacion;
	}

	/**
	 * Get the [optionally formatted] temporal [fecha_nacimiento] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaNacimiento($format = '%x')
	{
		if ($this->fecha_nacimiento === null) {
			return null;
		}


		if ($this->fecha_nacimiento === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_nacimiento);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_nacimiento, true), $x);
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
	 * Get the [clave] column value.
	 * 
	 * @return     string
	 */
	public function getClave()
	{
		return $this->clave;
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
	 * Get the [optionally formatted] temporal [fecha_salida] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFechaSalida($format = '%x')
	{
		if ($this->fecha_salida === null) {
			return null;
		}


		if ($this->fecha_salida === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->fecha_salida);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_salida, true), $x);
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
	 * Get the [autoriza_pago] column value.
	 * 
	 * @return     string
	 */
	public function getAutorizaPago()
	{
		return $this->autoriza_pago;
	}

	/**
	 * Set the value of [id_persona] column.
	 * 
	 * @param      int $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setIdPersona($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_persona !== $v) {
			$this->id_persona = $v;
			$this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
		}

		return $this;
	} // setIdPersona()

	/**
	 * Set the value of [id_cargo] column.
	 * 
	 * @param      int $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setIdCargo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_cargo !== $v) {
			$this->id_cargo = $v;
			$this->modifiedColumns[] = PersonaPeer::ID_CARGO;
		}

		if ($this->aCargo !== null && $this->aCargo->getIdCargo() !== $v) {
			$this->aCargo = null;
		}

		return $this;
	} // setIdCargo()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = PersonaPeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [apellido] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setApellido($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->apellido !== $v) {
			$this->apellido = $v;
			$this->modifiedColumns[] = PersonaPeer::APELLIDO;
		}

		return $this;
	} // setApellido()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = PersonaPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [identificacion] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setIdentificacion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->identificacion !== $v) {
			$this->identificacion = $v;
			$this->modifiedColumns[] = PersonaPeer::IDENTIFICACION;
		}

		return $this;
	} // setIdentificacion()

	/**
	 * Sets the value of [fecha_nacimiento] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setFechaNacimiento($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_nacimiento !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_nacimiento !== null && $tmpDt = new DateTime($this->fecha_nacimiento)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_nacimiento = $newDateAsString;
				$this->modifiedColumns[] = PersonaPeer::FECHA_NACIMIENTO;
			}
		} // if either are not null

		return $this;
	} // setFechaNacimiento()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = PersonaPeer::ESTADO;
		}

		return $this;
	} // setEstado()

	/**
	 * Set the value of [clave] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setClave($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->clave !== $v) {
			$this->clave = $v;
			$this->modifiedColumns[] = PersonaPeer::CLAVE;
		}

		return $this;
	} // setClave()

	/**
	 * Sets the value of [fecha_ingreso] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setFechaIngreso($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_ingreso !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_ingreso !== null && $tmpDt = new DateTime($this->fecha_ingreso)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_ingreso = $newDateAsString;
				$this->modifiedColumns[] = PersonaPeer::FECHA_INGRESO;
			}
		} // if either are not null

		return $this;
	} // setFechaIngreso()

	/**
	 * Sets the value of [fecha_salida] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setFechaSalida($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_salida !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_salida !== null && $tmpDt = new DateTime($this->fecha_salida)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_salida = $newDateAsString;
				$this->modifiedColumns[] = PersonaPeer::FECHA_SALIDA;
			}
		} // if either are not null

		return $this;
	} // setFechaSalida()

	/**
	 * Set the value of [autoriza_pago] column.
	 * 
	 * @param      string $v new value
	 * @return     Persona The current object (for fluent API support)
	 */
	public function setAutorizaPago($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->autoriza_pago !== $v) {
			$this->autoriza_pago = $v;
			$this->modifiedColumns[] = PersonaPeer::AUTORIZA_PAGO;
		}

		return $this;
	} // setAutorizaPago()

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

			$this->id_persona = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_cargo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->apellido = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->identificacion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->fecha_nacimiento = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->estado = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->clave = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->fecha_ingreso = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->fecha_salida = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->autoriza_pago = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = PersonaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Persona object", $e);
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

		if ($this->aCargo !== null && $this->id_cargo !== $this->aCargo->getIdCargo()) {
			$this->aCargo = null;
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
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PersonaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCargo = null;
			$this->collCuadreCajas = null;

			$this->collLogs = null;

			$this->collMenuPersonas = null;

			$this->collOrdens = null;

			$this->collPersonaLocalizacions = null;

			$this->collUsuarioCajas = null;

			$this->collPagoEfectivosRelatedByIdPersona = null;

			$this->collPagoEfectivosRelatedByIdAutoriza = null;

			$this->collDetalleOrdens = null;

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
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PersonaQuery::create()
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
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PersonaPeer::addInstanceToPool($this);
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

			if ($this->aCargo !== null) {
				if ($this->aCargo->isModified() || $this->aCargo->isNew()) {
					$affectedRows += $this->aCargo->save($con);
				}
				$this->setCargo($this->aCargo);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PersonaPeer::ID_PERSONA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersonaPeer::ID_PERSONA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdPersona($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PersonaPeer::doUpdate($this, $con);
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

			if ($this->collLogs !== null) {
				foreach ($this->collLogs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMenuPersonas !== null) {
				foreach ($this->collMenuPersonas as $referrerFK) {
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

			if ($this->collPersonaLocalizacions !== null) {
				foreach ($this->collPersonaLocalizacions as $referrerFK) {
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

			if ($this->collPagoEfectivosRelatedByIdPersona !== null) {
				foreach ($this->collPagoEfectivosRelatedByIdPersona as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPagoEfectivosRelatedByIdAutoriza !== null) {
				foreach ($this->collPagoEfectivosRelatedByIdAutoriza as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDetalleOrdens !== null) {
				foreach ($this->collDetalleOrdens as $referrerFK) {
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

			if ($this->aCargo !== null) {
				if (!$this->aCargo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCargo->getValidationFailures());
				}
			}


			if (($retval = PersonaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCuadreCajas !== null) {
					foreach ($this->collCuadreCajas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collLogs !== null) {
					foreach ($this->collLogs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMenuPersonas !== null) {
					foreach ($this->collMenuPersonas as $referrerFK) {
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

				if ($this->collPersonaLocalizacions !== null) {
					foreach ($this->collPersonaLocalizacions as $referrerFK) {
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

				if ($this->collPagoEfectivosRelatedByIdPersona !== null) {
					foreach ($this->collPagoEfectivosRelatedByIdPersona as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPagoEfectivosRelatedByIdAutoriza !== null) {
					foreach ($this->collPagoEfectivosRelatedByIdAutoriza as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDetalleOrdens !== null) {
					foreach ($this->collDetalleOrdens as $referrerFK) {
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
		$pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdPersona();
				break;
			case 1:
				return $this->getIdCargo();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getApellido();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getIdentificacion();
				break;
			case 6:
				return $this->getFechaNacimiento();
				break;
			case 7:
				return $this->getEstado();
				break;
			case 8:
				return $this->getClave();
				break;
			case 9:
				return $this->getFechaIngreso();
				break;
			case 10:
				return $this->getFechaSalida();
				break;
			case 11:
				return $this->getAutorizaPago();
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
		if (isset($alreadyDumpedObjects['Persona'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Persona'][$this->getPrimaryKey()] = true;
		$keys = PersonaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdPersona(),
			$keys[1] => $this->getIdCargo(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getApellido(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getIdentificacion(),
			$keys[6] => $this->getFechaNacimiento(),
			$keys[7] => $this->getEstado(),
			$keys[8] => $this->getClave(),
			$keys[9] => $this->getFechaIngreso(),
			$keys[10] => $this->getFechaSalida(),
			$keys[11] => $this->getAutorizaPago(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCargo) {
				$result['Cargo'] = $this->aCargo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collCuadreCajas) {
				$result['CuadreCajas'] = $this->collCuadreCajas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collLogs) {
				$result['Logs'] = $this->collLogs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collMenuPersonas) {
				$result['MenuPersonas'] = $this->collMenuPersonas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collOrdens) {
				$result['Ordens'] = $this->collOrdens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPersonaLocalizacions) {
				$result['PersonaLocalizacions'] = $this->collPersonaLocalizacions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collUsuarioCajas) {
				$result['UsuarioCajas'] = $this->collUsuarioCajas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPagoEfectivosRelatedByIdPersona) {
				$result['PagoEfectivosRelatedByIdPersona'] = $this->collPagoEfectivosRelatedByIdPersona->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPagoEfectivosRelatedByIdAutoriza) {
				$result['PagoEfectivosRelatedByIdAutoriza'] = $this->collPagoEfectivosRelatedByIdAutoriza->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collDetalleOrdens) {
				$result['DetalleOrdens'] = $this->collDetalleOrdens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdPersona($value);
				break;
			case 1:
				$this->setIdCargo($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setApellido($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setIdentificacion($value);
				break;
			case 6:
				$this->setFechaNacimiento($value);
				break;
			case 7:
				$this->setEstado($value);
				break;
			case 8:
				$this->setClave($value);
				break;
			case 9:
				$this->setFechaIngreso($value);
				break;
			case 10:
				$this->setFechaSalida($value);
				break;
			case 11:
				$this->setAutorizaPago($value);
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
		$keys = PersonaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdPersona($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdCargo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setApellido($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdentificacion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFechaNacimiento($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setEstado($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setClave($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFechaIngreso($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFechaSalida($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAutorizaPago($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PersonaPeer::DATABASE_NAME);

		if ($this->isColumnModified(PersonaPeer::ID_PERSONA)) $criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);
		if ($this->isColumnModified(PersonaPeer::ID_CARGO)) $criteria->add(PersonaPeer::ID_CARGO, $this->id_cargo);
		if ($this->isColumnModified(PersonaPeer::NOMBRE)) $criteria->add(PersonaPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(PersonaPeer::APELLIDO)) $criteria->add(PersonaPeer::APELLIDO, $this->apellido);
		if ($this->isColumnModified(PersonaPeer::EMAIL)) $criteria->add(PersonaPeer::EMAIL, $this->email);
		if ($this->isColumnModified(PersonaPeer::IDENTIFICACION)) $criteria->add(PersonaPeer::IDENTIFICACION, $this->identificacion);
		if ($this->isColumnModified(PersonaPeer::FECHA_NACIMIENTO)) $criteria->add(PersonaPeer::FECHA_NACIMIENTO, $this->fecha_nacimiento);
		if ($this->isColumnModified(PersonaPeer::ESTADO)) $criteria->add(PersonaPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(PersonaPeer::CLAVE)) $criteria->add(PersonaPeer::CLAVE, $this->clave);
		if ($this->isColumnModified(PersonaPeer::FECHA_INGRESO)) $criteria->add(PersonaPeer::FECHA_INGRESO, $this->fecha_ingreso);
		if ($this->isColumnModified(PersonaPeer::FECHA_SALIDA)) $criteria->add(PersonaPeer::FECHA_SALIDA, $this->fecha_salida);
		if ($this->isColumnModified(PersonaPeer::AUTORIZA_PAGO)) $criteria->add(PersonaPeer::AUTORIZA_PAGO, $this->autoriza_pago);

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
		$criteria = new Criteria(PersonaPeer::DATABASE_NAME);
		$criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdPersona();
	}

	/**
	 * Generic method to set the primary key (id_persona column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdPersona($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdPersona();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Persona (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdCargo($this->getIdCargo());
		$copyObj->setNombre($this->getNombre());
		$copyObj->setApellido($this->getApellido());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setIdentificacion($this->getIdentificacion());
		$copyObj->setFechaNacimiento($this->getFechaNacimiento());
		$copyObj->setEstado($this->getEstado());
		$copyObj->setClave($this->getClave());
		$copyObj->setFechaIngreso($this->getFechaIngreso());
		$copyObj->setFechaSalida($this->getFechaSalida());
		$copyObj->setAutorizaPago($this->getAutorizaPago());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCuadreCajas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCuadreCaja($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getLogs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addLog($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getMenuPersonas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addMenuPersona($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getOrdens() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addOrden($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPersonaLocalizacions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPersonaLocalizacion($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUsuarioCajas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUsuarioCaja($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPagoEfectivosRelatedByIdPersona() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPagoEfectivoRelatedByIdPersona($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPagoEfectivosRelatedByIdAutoriza() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPagoEfectivoRelatedByIdAutoriza($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDetalleOrdens() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDetalleOrden($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdPersona(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Persona Clone of current object.
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
	 * @return     PersonaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PersonaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Cargo object.
	 *
	 * @param      Cargo $v
	 * @return     Persona The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCargo(Cargo $v = null)
	{
		if ($v === null) {
			$this->setIdCargo(NULL);
		} else {
			$this->setIdCargo($v->getIdCargo());
		}

		$this->aCargo = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Cargo object, it will not be re-added.
		if ($v !== null) {
			$v->addPersona($this);
		}

		return $this;
	}


	/**
	 * Get the associated Cargo object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Cargo The associated Cargo object.
	 * @throws     PropelException
	 */
	public function getCargo(PropelPDO $con = null)
	{
		if ($this->aCargo === null && ($this->id_cargo !== null)) {
			$this->aCargo = CargoQuery::create()->findPk($this->id_cargo, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCargo->addPersonas($this);
			 */
		}
		return $this->aCargo;
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
	 * If this Persona is new, it will return
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
					->filterByPersona($this)
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
					->filterByPersona($this)
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
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related CuadreCajas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CuadreCaja[] List of CuadreCaja objects
	 */
	public function getCuadreCajasJoinCaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CuadreCajaQuery::create(null, $criteria);
		$query->joinWith('Caja', $join_behavior);

		return $this->getCuadreCajas($query, $con);
	}

	/**
	 * Clears out the collLogs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLogs()
	 */
	public function clearLogs()
	{
		$this->collLogs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLogs collection.
	 *
	 * By default this just sets the collLogs collection to an empty array (like clearcollLogs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initLogs($overrideExisting = true)
	{
		if (null !== $this->collLogs && !$overrideExisting) {
			return;
		}
		$this->collLogs = new PropelObjectCollection();
		$this->collLogs->setModel('Log');
	}

	/**
	 * Gets an array of Log objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persona is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Log[] List of Log objects
	 * @throws     PropelException
	 */
	public function getLogs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLogs || null !== $criteria) {
			if ($this->isNew() && null === $this->collLogs) {
				// return empty collection
				$this->initLogs();
			} else {
				$collLogs = LogQuery::create(null, $criteria)
					->filterByPersona($this)
					->find($con);
				if (null !== $criteria) {
					return $collLogs;
				}
				$this->collLogs = $collLogs;
			}
		}
		return $this->collLogs;
	}

	/**
	 * Returns the number of related Log objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Log objects.
	 * @throws     PropelException
	 */
	public function countLogs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLogs || null !== $criteria) {
			if ($this->isNew() && null === $this->collLogs) {
				return 0;
			} else {
				$query = LogQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersona($this)
					->count($con);
			}
		} else {
			return count($this->collLogs);
		}
	}

	/**
	 * Method called to associate a Log object to this object
	 * through the Log foreign key attribute.
	 *
	 * @param      Log $l Log
	 * @return     void
	 * @throws     PropelException
	 */
	public function addLog(Log $l)
	{
		if ($this->collLogs === null) {
			$this->initLogs();
		}
		if (!$this->collLogs->contains($l)) { // only add it if the **same** object is not already associated
			$this->collLogs[]= $l;
			$l->setPersona($this);
		}
	}

	/**
	 * Clears out the collMenuPersonas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addMenuPersonas()
	 */
	public function clearMenuPersonas()
	{
		$this->collMenuPersonas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collMenuPersonas collection.
	 *
	 * By default this just sets the collMenuPersonas collection to an empty array (like clearcollMenuPersonas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initMenuPersonas($overrideExisting = true)
	{
		if (null !== $this->collMenuPersonas && !$overrideExisting) {
			return;
		}
		$this->collMenuPersonas = new PropelObjectCollection();
		$this->collMenuPersonas->setModel('MenuPersona');
	}

	/**
	 * Gets an array of MenuPersona objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persona is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array MenuPersona[] List of MenuPersona objects
	 * @throws     PropelException
	 */
	public function getMenuPersonas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collMenuPersonas || null !== $criteria) {
			if ($this->isNew() && null === $this->collMenuPersonas) {
				// return empty collection
				$this->initMenuPersonas();
			} else {
				$collMenuPersonas = MenuPersonaQuery::create(null, $criteria)
					->filterByPersona($this)
					->find($con);
				if (null !== $criteria) {
					return $collMenuPersonas;
				}
				$this->collMenuPersonas = $collMenuPersonas;
			}
		}
		return $this->collMenuPersonas;
	}

	/**
	 * Returns the number of related MenuPersona objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related MenuPersona objects.
	 * @throws     PropelException
	 */
	public function countMenuPersonas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collMenuPersonas || null !== $criteria) {
			if ($this->isNew() && null === $this->collMenuPersonas) {
				return 0;
			} else {
				$query = MenuPersonaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersona($this)
					->count($con);
			}
		} else {
			return count($this->collMenuPersonas);
		}
	}

	/**
	 * Method called to associate a MenuPersona object to this object
	 * through the MenuPersona foreign key attribute.
	 *
	 * @param      MenuPersona $l MenuPersona
	 * @return     void
	 * @throws     PropelException
	 */
	public function addMenuPersona(MenuPersona $l)
	{
		if ($this->collMenuPersonas === null) {
			$this->initMenuPersonas();
		}
		if (!$this->collMenuPersonas->contains($l)) { // only add it if the **same** object is not already associated
			$this->collMenuPersonas[]= $l;
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related MenuPersonas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array MenuPersona[] List of MenuPersona objects
	 */
	public function getMenuPersonasJoinMenu($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = MenuPersonaQuery::create(null, $criteria);
		$query->joinWith('Menu', $join_behavior);

		return $this->getMenuPersonas($query, $con);
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
	 * If this Persona is new, it will return
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
					->filterByPersona($this)
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
					->filterByPersona($this)
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
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related Ordens from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Orden[] List of Orden objects
	 */
	public function getOrdensJoinCuadreCaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = OrdenQuery::create(null, $criteria);
		$query->joinWith('CuadreCaja', $join_behavior);

		return $this->getOrdens($query, $con);
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
	 * If this Persona is new, it will return
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
					->filterByPersona($this)
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
					->filterByPersona($this)
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
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related PersonaLocalizacions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PersonaLocalizacion[] List of PersonaLocalizacion objects
	 */
	public function getPersonaLocalizacionsJoinLocalizacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PersonaLocalizacionQuery::create(null, $criteria);
		$query->joinWith('Localizacion', $join_behavior);

		return $this->getPersonaLocalizacions($query, $con);
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
	 * If this Persona is new, it will return
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
					->filterByPersona($this)
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
					->filterByPersona($this)
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
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related UsuarioCajas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UsuarioCaja[] List of UsuarioCaja objects
	 */
	public function getUsuarioCajasJoinCaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UsuarioCajaQuery::create(null, $criteria);
		$query->joinWith('Caja', $join_behavior);

		return $this->getUsuarioCajas($query, $con);
	}

	/**
	 * Clears out the collPagoEfectivosRelatedByIdPersona collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPagoEfectivosRelatedByIdPersona()
	 */
	public function clearPagoEfectivosRelatedByIdPersona()
	{
		$this->collPagoEfectivosRelatedByIdPersona = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPagoEfectivosRelatedByIdPersona collection.
	 *
	 * By default this just sets the collPagoEfectivosRelatedByIdPersona collection to an empty array (like clearcollPagoEfectivosRelatedByIdPersona());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPagoEfectivosRelatedByIdPersona($overrideExisting = true)
	{
		if (null !== $this->collPagoEfectivosRelatedByIdPersona && !$overrideExisting) {
			return;
		}
		$this->collPagoEfectivosRelatedByIdPersona = new PropelObjectCollection();
		$this->collPagoEfectivosRelatedByIdPersona->setModel('PagoEfectivo');
	}

	/**
	 * Gets an array of PagoEfectivo objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persona is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 * @throws     PropelException
	 */
	public function getPagoEfectivosRelatedByIdPersona($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivosRelatedByIdPersona || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivosRelatedByIdPersona) {
				// return empty collection
				$this->initPagoEfectivosRelatedByIdPersona();
			} else {
				$collPagoEfectivosRelatedByIdPersona = PagoEfectivoQuery::create(null, $criteria)
					->filterByPersonaRelatedByIdPersona($this)
					->find($con);
				if (null !== $criteria) {
					return $collPagoEfectivosRelatedByIdPersona;
				}
				$this->collPagoEfectivosRelatedByIdPersona = $collPagoEfectivosRelatedByIdPersona;
			}
		}
		return $this->collPagoEfectivosRelatedByIdPersona;
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
	public function countPagoEfectivosRelatedByIdPersona(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivosRelatedByIdPersona || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivosRelatedByIdPersona) {
				return 0;
			} else {
				$query = PagoEfectivoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersonaRelatedByIdPersona($this)
					->count($con);
			}
		} else {
			return count($this->collPagoEfectivosRelatedByIdPersona);
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
	public function addPagoEfectivoRelatedByIdPersona(PagoEfectivo $l)
	{
		if ($this->collPagoEfectivosRelatedByIdPersona === null) {
			$this->initPagoEfectivosRelatedByIdPersona();
		}
		if (!$this->collPagoEfectivosRelatedByIdPersona->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPagoEfectivosRelatedByIdPersona[]= $l;
			$l->setPersonaRelatedByIdPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related PagoEfectivosRelatedByIdPersona from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 */
	public function getPagoEfectivosRelatedByIdPersonaJoinCuadreCaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoEfectivoQuery::create(null, $criteria);
		$query->joinWith('CuadreCaja', $join_behavior);

		return $this->getPagoEfectivosRelatedByIdPersona($query, $con);
	}

	/**
	 * Clears out the collPagoEfectivosRelatedByIdAutoriza collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPagoEfectivosRelatedByIdAutoriza()
	 */
	public function clearPagoEfectivosRelatedByIdAutoriza()
	{
		$this->collPagoEfectivosRelatedByIdAutoriza = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPagoEfectivosRelatedByIdAutoriza collection.
	 *
	 * By default this just sets the collPagoEfectivosRelatedByIdAutoriza collection to an empty array (like clearcollPagoEfectivosRelatedByIdAutoriza());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPagoEfectivosRelatedByIdAutoriza($overrideExisting = true)
	{
		if (null !== $this->collPagoEfectivosRelatedByIdAutoriza && !$overrideExisting) {
			return;
		}
		$this->collPagoEfectivosRelatedByIdAutoriza = new PropelObjectCollection();
		$this->collPagoEfectivosRelatedByIdAutoriza->setModel('PagoEfectivo');
	}

	/**
	 * Gets an array of PagoEfectivo objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persona is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 * @throws     PropelException
	 */
	public function getPagoEfectivosRelatedByIdAutoriza($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivosRelatedByIdAutoriza || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivosRelatedByIdAutoriza) {
				// return empty collection
				$this->initPagoEfectivosRelatedByIdAutoriza();
			} else {
				$collPagoEfectivosRelatedByIdAutoriza = PagoEfectivoQuery::create(null, $criteria)
					->filterByPersonaRelatedByIdAutoriza($this)
					->find($con);
				if (null !== $criteria) {
					return $collPagoEfectivosRelatedByIdAutoriza;
				}
				$this->collPagoEfectivosRelatedByIdAutoriza = $collPagoEfectivosRelatedByIdAutoriza;
			}
		}
		return $this->collPagoEfectivosRelatedByIdAutoriza;
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
	public function countPagoEfectivosRelatedByIdAutoriza(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPagoEfectivosRelatedByIdAutoriza || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagoEfectivosRelatedByIdAutoriza) {
				return 0;
			} else {
				$query = PagoEfectivoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersonaRelatedByIdAutoriza($this)
					->count($con);
			}
		} else {
			return count($this->collPagoEfectivosRelatedByIdAutoriza);
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
	public function addPagoEfectivoRelatedByIdAutoriza(PagoEfectivo $l)
	{
		if ($this->collPagoEfectivosRelatedByIdAutoriza === null) {
			$this->initPagoEfectivosRelatedByIdAutoriza();
		}
		if (!$this->collPagoEfectivosRelatedByIdAutoriza->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPagoEfectivosRelatedByIdAutoriza[]= $l;
			$l->setPersonaRelatedByIdAutoriza($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related PagoEfectivosRelatedByIdAutoriza from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array PagoEfectivo[] List of PagoEfectivo objects
	 */
	public function getPagoEfectivosRelatedByIdAutorizaJoinCuadreCaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoEfectivoQuery::create(null, $criteria);
		$query->joinWith('CuadreCaja', $join_behavior);

		return $this->getPagoEfectivosRelatedByIdAutoriza($query, $con);
	}

	/**
	 * Clears out the collDetalleOrdens collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDetalleOrdens()
	 */
	public function clearDetalleOrdens()
	{
		$this->collDetalleOrdens = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDetalleOrdens collection.
	 *
	 * By default this just sets the collDetalleOrdens collection to an empty array (like clearcollDetalleOrdens());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initDetalleOrdens($overrideExisting = true)
	{
		if (null !== $this->collDetalleOrdens && !$overrideExisting) {
			return;
		}
		$this->collDetalleOrdens = new PropelObjectCollection();
		$this->collDetalleOrdens->setModel('DetalleOrden');
	}

	/**
	 * Gets an array of DetalleOrden objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persona is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DetalleOrden[] List of DetalleOrden objects
	 * @throws     PropelException
	 */
	public function getDetalleOrdens($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDetalleOrdens || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetalleOrdens) {
				// return empty collection
				$this->initDetalleOrdens();
			} else {
				$collDetalleOrdens = DetalleOrdenQuery::create(null, $criteria)
					->filterByPersona($this)
					->find($con);
				if (null !== $criteria) {
					return $collDetalleOrdens;
				}
				$this->collDetalleOrdens = $collDetalleOrdens;
			}
		}
		return $this->collDetalleOrdens;
	}

	/**
	 * Returns the number of related DetalleOrden objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DetalleOrden objects.
	 * @throws     PropelException
	 */
	public function countDetalleOrdens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDetalleOrdens || null !== $criteria) {
			if ($this->isNew() && null === $this->collDetalleOrdens) {
				return 0;
			} else {
				$query = DetalleOrdenQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersona($this)
					->count($con);
			}
		} else {
			return count($this->collDetalleOrdens);
		}
	}

	/**
	 * Method called to associate a DetalleOrden object to this object
	 * through the DetalleOrden foreign key attribute.
	 *
	 * @param      DetalleOrden $l DetalleOrden
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDetalleOrden(DetalleOrden $l)
	{
		if ($this->collDetalleOrdens === null) {
			$this->initDetalleOrdens();
		}
		if (!$this->collDetalleOrdens->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDetalleOrdens[]= $l;
			$l->setPersona($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persona is new, it will return
	 * an empty collection; or if this Persona has previously
	 * been saved, it will retrieve related DetalleOrdens from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persona.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DetalleOrden[] List of DetalleOrden objects
	 */
	public function getDetalleOrdensJoinOrden($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DetalleOrdenQuery::create(null, $criteria);
		$query->joinWith('Orden', $join_behavior);

		return $this->getDetalleOrdens($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_persona = null;
		$this->id_cargo = null;
		$this->nombre = null;
		$this->apellido = null;
		$this->email = null;
		$this->identificacion = null;
		$this->fecha_nacimiento = null;
		$this->estado = null;
		$this->clave = null;
		$this->fecha_ingreso = null;
		$this->fecha_salida = null;
		$this->autoriza_pago = null;
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
			if ($this->collLogs) {
				foreach ($this->collLogs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collMenuPersonas) {
				foreach ($this->collMenuPersonas as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collOrdens) {
				foreach ($this->collOrdens as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPersonaLocalizacions) {
				foreach ($this->collPersonaLocalizacions as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUsuarioCajas) {
				foreach ($this->collUsuarioCajas as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPagoEfectivosRelatedByIdPersona) {
				foreach ($this->collPagoEfectivosRelatedByIdPersona as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPagoEfectivosRelatedByIdAutoriza) {
				foreach ($this->collPagoEfectivosRelatedByIdAutoriza as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDetalleOrdens) {
				foreach ($this->collDetalleOrdens as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collCuadreCajas instanceof PropelCollection) {
			$this->collCuadreCajas->clearIterator();
		}
		$this->collCuadreCajas = null;
		if ($this->collLogs instanceof PropelCollection) {
			$this->collLogs->clearIterator();
		}
		$this->collLogs = null;
		if ($this->collMenuPersonas instanceof PropelCollection) {
			$this->collMenuPersonas->clearIterator();
		}
		$this->collMenuPersonas = null;
		if ($this->collOrdens instanceof PropelCollection) {
			$this->collOrdens->clearIterator();
		}
		$this->collOrdens = null;
		if ($this->collPersonaLocalizacions instanceof PropelCollection) {
			$this->collPersonaLocalizacions->clearIterator();
		}
		$this->collPersonaLocalizacions = null;
		if ($this->collUsuarioCajas instanceof PropelCollection) {
			$this->collUsuarioCajas->clearIterator();
		}
		$this->collUsuarioCajas = null;
		if ($this->collPagoEfectivosRelatedByIdPersona instanceof PropelCollection) {
			$this->collPagoEfectivosRelatedByIdPersona->clearIterator();
		}
		$this->collPagoEfectivosRelatedByIdPersona = null;
		if ($this->collPagoEfectivosRelatedByIdAutoriza instanceof PropelCollection) {
			$this->collPagoEfectivosRelatedByIdAutoriza->clearIterator();
		}
		$this->collPagoEfectivosRelatedByIdAutoriza = null;
		if ($this->collDetalleOrdens instanceof PropelCollection) {
			$this->collDetalleOrdens->clearIterator();
		}
		$this->collDetalleOrdens = null;
		$this->aCargo = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PersonaPeer::DEFAULT_STRING_FORMAT);
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

} // BasePersona
