<?php


/**
 * Base class that represents a row from the 'factura' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseFactura extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'FacturaPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        FacturaPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_factura field.
	 * @var        int
	 */
	protected $id_factura;

	/**
	 * The value for the id_orden field.
	 * @var        int
	 */
	protected $id_orden;

	/**
	 * The value for the id_cliente field.
	 * @var        int
	 */
	protected $id_cliente;

	/**
	 * The value for the no_factura field.
	 * @var        string
	 */
	protected $no_factura;

	/**
	 * The value for the fecha_hora field.
	 * @var        string
	 */
	protected $fecha_hora;

	/**
	 * The value for the sub_total field.
	 * @var        string
	 */
	protected $sub_total;

	/**
	 * The value for the iva_porcentaje field.
	 * @var        string
	 */
	protected $iva_porcentaje;

	/**
	 * The value for the base_iva field.
	 * @var        string
	 */
	protected $base_iva;

	/**
	 * The value for the base_iva_0 field.
	 * @var        string
	 */
	protected $base_iva_0;

	/**
	 * The value for the iva_total field.
	 * @var        string
	 */
	protected $iva_total;

	/**
	 * The value for the descuento field.
	 * @var        string
	 */
	protected $descuento;

	/**
	 * The value for the valor_total field.
	 * @var        string
	 */
	protected $valor_total;

	/**
	 * @var        Cliente
	 */
	protected $aCliente;

	/**
	 * @var        Orden
	 */
	protected $aOrden;

	/**
	 * @var        array DetalleFactura[] Collection to store aggregation of DetalleFactura objects.
	 */
	protected $collDetalleFacturas;

	/**
	 * @var        array Pago[] Collection to store aggregation of Pago objects.
	 */
	protected $collPagos;

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
	 * Get the [id_factura] column value.
	 * 
	 * @return     int
	 */
	public function getIdFactura()
	{
		return $this->id_factura;
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
	 * Get the [id_cliente] column value.
	 * 
	 * @return     int
	 */
	public function getIdCliente()
	{
		return $this->id_cliente;
	}

	/**
	 * Get the [no_factura] column value.
	 * 
	 * @return     string
	 */
	public function getNoFactura()
	{
		return $this->no_factura;
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
	 * Get the [sub_total] column value.
	 * 
	 * @return     string
	 */
	public function getSubTotal()
	{
		return $this->sub_total;
	}

	/**
	 * Get the [iva_porcentaje] column value.
	 * 
	 * @return     string
	 */
	public function getIvaPorcentaje()
	{
		return $this->iva_porcentaje;
	}

	/**
	 * Get the [base_iva] column value.
	 * 
	 * @return     string
	 */
	public function getBaseIva()
	{
		return $this->base_iva;
	}

	/**
	 * Get the [base_iva_0] column value.
	 * 
	 * @return     string
	 */
	public function getBaseIva()
	{
		return $this->base_iva_0;
	}

	/**
	 * Get the [iva_total] column value.
	 * 
	 * @return     string
	 */
	public function getIvaTotal()
	{
		return $this->iva_total;
	}

	/**
	 * Get the [descuento] column value.
	 * 
	 * @return     string
	 */
	public function getDescuento()
	{
		return $this->descuento;
	}

	/**
	 * Get the [valor_total] column value.
	 * 
	 * @return     string
	 */
	public function getValorTotal()
	{
		return $this->valor_total;
	}

	/**
	 * Set the value of [id_factura] column.
	 * 
	 * @param      int $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setIdFactura($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_factura !== $v) {
			$this->id_factura = $v;
			$this->modifiedColumns[] = FacturaPeer::ID_FACTURA;
		}

		return $this;
	} // setIdFactura()

	/**
	 * Set the value of [id_orden] column.
	 * 
	 * @param      int $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setIdOrden($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_orden !== $v) {
			$this->id_orden = $v;
			$this->modifiedColumns[] = FacturaPeer::ID_ORDEN;
		}

		if ($this->aOrden !== null && $this->aOrden->getIdOrden() !== $v) {
			$this->aOrden = null;
		}

		return $this;
	} // setIdOrden()

	/**
	 * Set the value of [id_cliente] column.
	 * 
	 * @param      int $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setIdCliente($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_cliente !== $v) {
			$this->id_cliente = $v;
			$this->modifiedColumns[] = FacturaPeer::ID_CLIENTE;
		}

		if ($this->aCliente !== null && $this->aCliente->getIdCliente() !== $v) {
			$this->aCliente = null;
		}

		return $this;
	} // setIdCliente()

	/**
	 * Set the value of [no_factura] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setNoFactura($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->no_factura !== $v) {
			$this->no_factura = $v;
			$this->modifiedColumns[] = FacturaPeer::NO_FACTURA;
		}

		return $this;
	} // setNoFactura()

	/**
	 * Sets the value of [fecha_hora] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setFechaHora($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora !== null && $tmpDt = new DateTime($this->fecha_hora)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora = $newDateAsString;
				$this->modifiedColumns[] = FacturaPeer::FECHA_HORA;
			}
		} // if either are not null

		return $this;
	} // setFechaHora()

	/**
	 * Set the value of [sub_total] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setSubTotal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sub_total !== $v) {
			$this->sub_total = $v;
			$this->modifiedColumns[] = FacturaPeer::SUB_TOTAL;
		}

		return $this;
	} // setSubTotal()

	/**
	 * Set the value of [iva_porcentaje] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setIvaPorcentaje($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->iva_porcentaje !== $v) {
			$this->iva_porcentaje = $v;
			$this->modifiedColumns[] = FacturaPeer::IVA_PORCENTAJE;
		}

		return $this;
	} // setIvaPorcentaje()

	/**
	 * Set the value of [base_iva] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setBaseIva($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_iva !== $v) {
			$this->base_iva = $v;
			$this->modifiedColumns[] = FacturaPeer::BASE_IVA;
		}

		return $this;
	} // setBaseIva()

	/**
	 * Set the value of [base_iva_0] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setBaseIva($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_iva_0 !== $v) {
			$this->base_iva_0 = $v;
			$this->modifiedColumns[] = FacturaPeer::BASE_IVA_0;
		}

		return $this;
	} // setBaseIva()

	/**
	 * Set the value of [iva_total] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setIvaTotal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->iva_total !== $v) {
			$this->iva_total = $v;
			$this->modifiedColumns[] = FacturaPeer::IVA_TOTAL;
		}

		return $this;
	} // setIvaTotal()

	/**
	 * Set the value of [descuento] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setDescuento($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->descuento !== $v) {
			$this->descuento = $v;
			$this->modifiedColumns[] = FacturaPeer::DESCUENTO;
		}

		return $this;
	} // setDescuento()

	/**
	 * Set the value of [valor_total] column.
	 * 
	 * @param      string $v new value
	 * @return     Factura The current object (for fluent API support)
	 */
	public function setValorTotal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->valor_total !== $v) {
			$this->valor_total = $v;
			$this->modifiedColumns[] = FacturaPeer::VALOR_TOTAL;
		}

		return $this;
	} // setValorTotal()

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

			$this->id_factura = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_orden = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_cliente = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->no_factura = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->fecha_hora = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->sub_total = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->iva_porcentaje = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->base_iva = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->base_iva_0 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->iva_total = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->descuento = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->valor_total = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = FacturaPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Factura object", $e);
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
		if ($this->aCliente !== null && $this->id_cliente !== $this->aCliente->getIdCliente()) {
			$this->aCliente = null;
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
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = FacturaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCliente = null;
			$this->aOrden = null;
			$this->collDetalleFacturas = null;

			$this->collPagos = null;

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
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				FacturaQuery::create()
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
			$con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				FacturaPeer::addInstanceToPool($this);
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

			if ($this->aCliente !== null) {
				if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
					$affectedRows += $this->aCliente->save($con);
				}
				$this->setCliente($this->aCliente);
			}

			if ($this->aOrden !== null) {
				if ($this->aOrden->isModified() || $this->aOrden->isNew()) {
					$affectedRows += $this->aOrden->save($con);
				}
				$this->setOrden($this->aOrden);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = FacturaPeer::ID_FACTURA;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(FacturaPeer::ID_FACTURA) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.FacturaPeer::ID_FACTURA.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdFactura($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += FacturaPeer::doUpdate($this, $con);
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

			if ($this->collPagos !== null) {
				foreach ($this->collPagos as $referrerFK) {
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

			if ($this->aCliente !== null) {
				if (!$this->aCliente->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
				}
			}

			if ($this->aOrden !== null) {
				if (!$this->aOrden->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrden->getValidationFailures());
				}
			}


			if (($retval = FacturaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collDetalleFacturas !== null) {
					foreach ($this->collDetalleFacturas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPagos !== null) {
					foreach ($this->collPagos as $referrerFK) {
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
		$pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdFactura();
				break;
			case 1:
				return $this->getIdOrden();
				break;
			case 2:
				return $this->getIdCliente();
				break;
			case 3:
				return $this->getNoFactura();
				break;
			case 4:
				return $this->getFechaHora();
				break;
			case 5:
				return $this->getSubTotal();
				break;
			case 6:
				return $this->getIvaPorcentaje();
				break;
			case 7:
				return $this->getBaseIva();
				break;
			case 8:
				return $this->getBaseIva();
				break;
			case 9:
				return $this->getIvaTotal();
				break;
			case 10:
				return $this->getDescuento();
				break;
			case 11:
				return $this->getValorTotal();
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
		if (isset($alreadyDumpedObjects['Factura'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Factura'][$this->getPrimaryKey()] = true;
		$keys = FacturaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdFactura(),
			$keys[1] => $this->getIdOrden(),
			$keys[2] => $this->getIdCliente(),
			$keys[3] => $this->getNoFactura(),
			$keys[4] => $this->getFechaHora(),
			$keys[5] => $this->getSubTotal(),
			$keys[6] => $this->getIvaPorcentaje(),
			$keys[7] => $this->getBaseIva(),
			$keys[8] => $this->getBaseIva(),
			$keys[9] => $this->getIvaTotal(),
			$keys[10] => $this->getDescuento(),
			$keys[11] => $this->getValorTotal(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCliente) {
				$result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aOrden) {
				$result['Orden'] = $this->aOrden->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collDetalleFacturas) {
				$result['DetalleFacturas'] = $this->collDetalleFacturas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collPagos) {
				$result['Pagos'] = $this->collPagos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdFactura($value);
				break;
			case 1:
				$this->setIdOrden($value);
				break;
			case 2:
				$this->setIdCliente($value);
				break;
			case 3:
				$this->setNoFactura($value);
				break;
			case 4:
				$this->setFechaHora($value);
				break;
			case 5:
				$this->setSubTotal($value);
				break;
			case 6:
				$this->setIvaPorcentaje($value);
				break;
			case 7:
				$this->setBaseIva($value);
				break;
			case 8:
				$this->setBaseIva($value);
				break;
			case 9:
				$this->setIvaTotal($value);
				break;
			case 10:
				$this->setDescuento($value);
				break;
			case 11:
				$this->setValorTotal($value);
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
		$keys = FacturaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdFactura($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdOrden($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdCliente($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNoFactura($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechaHora($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSubTotal($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIvaPorcentaje($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setBaseIva($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBaseIva($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIvaTotal($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDescuento($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setValorTotal($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(FacturaPeer::DATABASE_NAME);

		if ($this->isColumnModified(FacturaPeer::ID_FACTURA)) $criteria->add(FacturaPeer::ID_FACTURA, $this->id_factura);
		if ($this->isColumnModified(FacturaPeer::ID_ORDEN)) $criteria->add(FacturaPeer::ID_ORDEN, $this->id_orden);
		if ($this->isColumnModified(FacturaPeer::ID_CLIENTE)) $criteria->add(FacturaPeer::ID_CLIENTE, $this->id_cliente);
		if ($this->isColumnModified(FacturaPeer::NO_FACTURA)) $criteria->add(FacturaPeer::NO_FACTURA, $this->no_factura);
		if ($this->isColumnModified(FacturaPeer::FECHA_HORA)) $criteria->add(FacturaPeer::FECHA_HORA, $this->fecha_hora);
		if ($this->isColumnModified(FacturaPeer::SUB_TOTAL)) $criteria->add(FacturaPeer::SUB_TOTAL, $this->sub_total);
		if ($this->isColumnModified(FacturaPeer::IVA_PORCENTAJE)) $criteria->add(FacturaPeer::IVA_PORCENTAJE, $this->iva_porcentaje);
		if ($this->isColumnModified(FacturaPeer::BASE_IVA)) $criteria->add(FacturaPeer::BASE_IVA, $this->base_iva);
		if ($this->isColumnModified(FacturaPeer::BASE_IVA_0)) $criteria->add(FacturaPeer::BASE_IVA_0, $this->base_iva_0);
		if ($this->isColumnModified(FacturaPeer::IVA_TOTAL)) $criteria->add(FacturaPeer::IVA_TOTAL, $this->iva_total);
		if ($this->isColumnModified(FacturaPeer::DESCUENTO)) $criteria->add(FacturaPeer::DESCUENTO, $this->descuento);
		if ($this->isColumnModified(FacturaPeer::VALOR_TOTAL)) $criteria->add(FacturaPeer::VALOR_TOTAL, $this->valor_total);

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
		$criteria = new Criteria(FacturaPeer::DATABASE_NAME);
		$criteria->add(FacturaPeer::ID_FACTURA, $this->id_factura);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdFactura();
	}

	/**
	 * Generic method to set the primary key (id_factura column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdFactura($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdFactura();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Factura (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdOrden($this->getIdOrden());
		$copyObj->setIdCliente($this->getIdCliente());
		$copyObj->setNoFactura($this->getNoFactura());
		$copyObj->setFechaHora($this->getFechaHora());
		$copyObj->setSubTotal($this->getSubTotal());
		$copyObj->setIvaPorcentaje($this->getIvaPorcentaje());
		$copyObj->setBaseIva($this->getBaseIva());
		$copyObj->setBaseIva($this->getBaseIva());
		$copyObj->setIvaTotal($this->getIvaTotal());
		$copyObj->setDescuento($this->getDescuento());
		$copyObj->setValorTotal($this->getValorTotal());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getDetalleFacturas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDetalleFactura($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPagos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPago($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdFactura(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Factura Clone of current object.
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
	 * @return     FacturaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new FacturaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Cliente object.
	 *
	 * @param      Cliente $v
	 * @return     Factura The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCliente(Cliente $v = null)
	{
		if ($v === null) {
			$this->setIdCliente(NULL);
		} else {
			$this->setIdCliente($v->getIdCliente());
		}

		$this->aCliente = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Cliente object, it will not be re-added.
		if ($v !== null) {
			$v->addFactura($this);
		}

		return $this;
	}


	/**
	 * Get the associated Cliente object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Cliente The associated Cliente object.
	 * @throws     PropelException
	 */
	public function getCliente(PropelPDO $con = null)
	{
		if ($this->aCliente === null && ($this->id_cliente !== null)) {
			$this->aCliente = ClienteQuery::create()->findPk($this->id_cliente, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCliente->addFacturas($this);
			 */
		}
		return $this->aCliente;
	}

	/**
	 * Declares an association between this object and a Orden object.
	 *
	 * @param      Orden $v
	 * @return     Factura The current object (for fluent API support)
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
			$v->addFactura($this);
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
				$this->aOrden->addFacturas($this);
			 */
		}
		return $this->aOrden;
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
	 * If this Factura is new, it will return
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
					->filterByFactura($this)
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
					->filterByFactura($this)
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
			$l->setFactura($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Factura is new, it will return
	 * an empty collection; or if this Factura has previously
	 * been saved, it will retrieve related DetalleFacturas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Factura.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DetalleFactura[] List of DetalleFactura objects
	 */
	public function getDetalleFacturasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DetalleFacturaQuery::create(null, $criteria);
		$query->joinWith('Producto', $join_behavior);

		return $this->getDetalleFacturas($query, $con);
	}

	/**
	 * Clears out the collPagos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPagos()
	 */
	public function clearPagos()
	{
		$this->collPagos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPagos collection.
	 *
	 * By default this just sets the collPagos collection to an empty array (like clearcollPagos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initPagos($overrideExisting = true)
	{
		if (null !== $this->collPagos && !$overrideExisting) {
			return;
		}
		$this->collPagos = new PropelObjectCollection();
		$this->collPagos->setModel('Pago');
	}

	/**
	 * Gets an array of Pago objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Factura is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Pago[] List of Pago objects
	 * @throws     PropelException
	 */
	public function getPagos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPagos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagos) {
				// return empty collection
				$this->initPagos();
			} else {
				$collPagos = PagoQuery::create(null, $criteria)
					->filterByFactura($this)
					->find($con);
				if (null !== $criteria) {
					return $collPagos;
				}
				$this->collPagos = $collPagos;
			}
		}
		return $this->collPagos;
	}

	/**
	 * Returns the number of related Pago objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Pago objects.
	 * @throws     PropelException
	 */
	public function countPagos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPagos || null !== $criteria) {
			if ($this->isNew() && null === $this->collPagos) {
				return 0;
			} else {
				$query = PagoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFactura($this)
					->count($con);
			}
		} else {
			return count($this->collPagos);
		}
	}

	/**
	 * Method called to associate a Pago object to this object
	 * through the Pago foreign key attribute.
	 *
	 * @param      Pago $l Pago
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPago(Pago $l)
	{
		if ($this->collPagos === null) {
			$this->initPagos();
		}
		if (!$this->collPagos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPagos[]= $l;
			$l->setFactura($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Factura is new, it will return
	 * an empty collection; or if this Factura has previously
	 * been saved, it will retrieve related Pagos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Factura.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Pago[] List of Pago objects
	 */
	public function getPagosJoinFormaPago($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoQuery::create(null, $criteria);
		$query->joinWith('FormaPago', $join_behavior);

		return $this->getPagos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Factura is new, it will return
	 * an empty collection; or if this Factura has previously
	 * been saved, it will retrieve related Pagos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Factura.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Pago[] List of Pago objects
	 */
	public function getPagosJoinBanco($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoQuery::create(null, $criteria);
		$query->joinWith('Banco', $join_behavior);

		return $this->getPagos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Factura is new, it will return
	 * an empty collection; or if this Factura has previously
	 * been saved, it will retrieve related Pagos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Factura.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Pago[] List of Pago objects
	 */
	public function getPagosJoinTarjetaCredito($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PagoQuery::create(null, $criteria);
		$query->joinWith('TarjetaCredito', $join_behavior);

		return $this->getPagos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_factura = null;
		$this->id_orden = null;
		$this->id_cliente = null;
		$this->no_factura = null;
		$this->fecha_hora = null;
		$this->sub_total = null;
		$this->iva_porcentaje = null;
		$this->base_iva = null;
		$this->base_iva_0 = null;
		$this->iva_total = null;
		$this->descuento = null;
		$this->valor_total = null;
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
			if ($this->collPagos) {
				foreach ($this->collPagos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collDetalleFacturas instanceof PropelCollection) {
			$this->collDetalleFacturas->clearIterator();
		}
		$this->collDetalleFacturas = null;
		if ($this->collPagos instanceof PropelCollection) {
			$this->collPagos->clearIterator();
		}
		$this->collPagos = null;
		$this->aCliente = null;
		$this->aOrden = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(FacturaPeer::DEFAULT_STRING_FORMAT);
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

} // BaseFactura
