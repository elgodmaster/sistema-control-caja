<?php


/**
 * Base class that represents a row from the 'pago' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePago extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PagoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PagoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_pago field.
	 * @var        int
	 */
	protected $id_pago;

	/**
	 * The value for the id_tarjeta_credito field.
	 * @var        int
	 */
	protected $id_tarjeta_credito;

	/**
	 * The value for the id_banco field.
	 * @var        int
	 */
	protected $id_banco;

	/**
	 * The value for the id_forma_pago field.
	 * @var        int
	 */
	protected $id_forma_pago;

	/**
	 * The value for the id_factura field.
	 * @var        int
	 */
	protected $id_factura;

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
	 * The value for the comision_tarjeta field.
	 * @var        string
	 */
	protected $comision_tarjeta;

	/**
	 * The value for the numero_chq field.
	 * @var        string
	 */
	protected $numero_chq;

	/**
	 * @var        Factura
	 */
	protected $aFactura;

	/**
	 * @var        FormaPago
	 */
	protected $aFormaPago;

	/**
	 * @var        Banco
	 */
	protected $aBanco;

	/**
	 * @var        TarjetaCredito
	 */
	protected $aTarjetaCredito;

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
	 * Get the [id_pago] column value.
	 * 
	 * @return     int
	 */
	public function getIdPago()
	{
		return $this->id_pago;
	}

	/**
	 * Get the [id_tarjeta_credito] column value.
	 * 
	 * @return     int
	 */
	public function getIdTarjetaCredito()
	{
		return $this->id_tarjeta_credito;
	}

	/**
	 * Get the [id_banco] column value.
	 * 
	 * @return     int
	 */
	public function getIdBanco()
	{
		return $this->id_banco;
	}

	/**
	 * Get the [id_forma_pago] column value.
	 * 
	 * @return     int
	 */
	public function getIdFormaPago()
	{
		return $this->id_forma_pago;
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
	 * Get the [comision_tarjeta] column value.
	 * 
	 * @return     string
	 */
	public function getComisionTarjeta()
	{
		return $this->comision_tarjeta;
	}

	/**
	 * Get the [numero_chq] column value.
	 * 
	 * @return     string
	 */
	public function getNumeroChq()
	{
		return $this->numero_chq;
	}

	/**
	 * Set the value of [id_pago] column.
	 * 
	 * @param      int $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setIdPago($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_pago !== $v) {
			$this->id_pago = $v;
			$this->modifiedColumns[] = PagoPeer::ID_PAGO;
		}

		return $this;
	} // setIdPago()

	/**
	 * Set the value of [id_tarjeta_credito] column.
	 * 
	 * @param      int $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setIdTarjetaCredito($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tarjeta_credito !== $v) {
			$this->id_tarjeta_credito = $v;
			$this->modifiedColumns[] = PagoPeer::ID_TARJETA_CREDITO;
		}

		if ($this->aTarjetaCredito !== null && $this->aTarjetaCredito->getIdTarjetaCredito() !== $v) {
			$this->aTarjetaCredito = null;
		}

		return $this;
	} // setIdTarjetaCredito()

	/**
	 * Set the value of [id_banco] column.
	 * 
	 * @param      int $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setIdBanco($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_banco !== $v) {
			$this->id_banco = $v;
			$this->modifiedColumns[] = PagoPeer::ID_BANCO;
		}

		if ($this->aBanco !== null && $this->aBanco->getIdBanco() !== $v) {
			$this->aBanco = null;
		}

		return $this;
	} // setIdBanco()

	/**
	 * Set the value of [id_forma_pago] column.
	 * 
	 * @param      int $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setIdFormaPago($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_forma_pago !== $v) {
			$this->id_forma_pago = $v;
			$this->modifiedColumns[] = PagoPeer::ID_FORMA_PAGO;
		}

		if ($this->aFormaPago !== null && $this->aFormaPago->getIdFormaPago() !== $v) {
			$this->aFormaPago = null;
		}

		return $this;
	} // setIdFormaPago()

	/**
	 * Set the value of [id_factura] column.
	 * 
	 * @param      int $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setIdFactura($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_factura !== $v) {
			$this->id_factura = $v;
			$this->modifiedColumns[] = PagoPeer::ID_FACTURA;
		}

		if ($this->aFactura !== null && $this->aFactura->getIdFactura() !== $v) {
			$this->aFactura = null;
		}

		return $this;
	} // setIdFactura()

	/**
	 * Sets the value of [fecha_hora] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setFechaHora($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->fecha_hora !== null || $dt !== null) {
			$currentDateAsString = ($this->fecha_hora !== null && $tmpDt = new DateTime($this->fecha_hora)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->fecha_hora = $newDateAsString;
				$this->modifiedColumns[] = PagoPeer::FECHA_HORA;
			}
		} // if either are not null

		return $this;
	} // setFechaHora()

	/**
	 * Set the value of [valor] column.
	 * 
	 * @param      string $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setValor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = PagoPeer::VALOR;
		}

		return $this;
	} // setValor()

	/**
	 * Set the value of [comision_tarjeta] column.
	 * 
	 * @param      string $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setComisionTarjeta($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comision_tarjeta !== $v) {
			$this->comision_tarjeta = $v;
			$this->modifiedColumns[] = PagoPeer::COMISION_TARJETA;
		}

		return $this;
	} // setComisionTarjeta()

	/**
	 * Set the value of [numero_chq] column.
	 * 
	 * @param      string $v new value
	 * @return     Pago The current object (for fluent API support)
	 */
	public function setNumeroChq($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->numero_chq !== $v) {
			$this->numero_chq = $v;
			$this->modifiedColumns[] = PagoPeer::NUMERO_CHQ;
		}

		return $this;
	} // setNumeroChq()

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

			$this->id_pago = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_tarjeta_credito = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_banco = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_forma_pago = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_factura = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->fecha_hora = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->valor = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->comision_tarjeta = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->numero_chq = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = PagoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Pago object", $e);
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

		if ($this->aTarjetaCredito !== null && $this->id_tarjeta_credito !== $this->aTarjetaCredito->getIdTarjetaCredito()) {
			$this->aTarjetaCredito = null;
		}
		if ($this->aBanco !== null && $this->id_banco !== $this->aBanco->getIdBanco()) {
			$this->aBanco = null;
		}
		if ($this->aFormaPago !== null && $this->id_forma_pago !== $this->aFormaPago->getIdFormaPago()) {
			$this->aFormaPago = null;
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
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PagoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aFactura = null;
			$this->aFormaPago = null;
			$this->aBanco = null;
			$this->aTarjetaCredito = null;
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
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PagoQuery::create()
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
			$con = Propel::getConnection(PagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PagoPeer::addInstanceToPool($this);
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

			if ($this->aFormaPago !== null) {
				if ($this->aFormaPago->isModified() || $this->aFormaPago->isNew()) {
					$affectedRows += $this->aFormaPago->save($con);
				}
				$this->setFormaPago($this->aFormaPago);
			}

			if ($this->aBanco !== null) {
				if ($this->aBanco->isModified() || $this->aBanco->isNew()) {
					$affectedRows += $this->aBanco->save($con);
				}
				$this->setBanco($this->aBanco);
			}

			if ($this->aTarjetaCredito !== null) {
				if ($this->aTarjetaCredito->isModified() || $this->aTarjetaCredito->isNew()) {
					$affectedRows += $this->aTarjetaCredito->save($con);
				}
				$this->setTarjetaCredito($this->aTarjetaCredito);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PagoPeer::ID_PAGO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PagoPeer::ID_PAGO) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PagoPeer::ID_PAGO.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setIdPago($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PagoPeer::doUpdate($this, $con);
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

			if ($this->aFormaPago !== null) {
				if (!$this->aFormaPago->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFormaPago->getValidationFailures());
				}
			}

			if ($this->aBanco !== null) {
				if (!$this->aBanco->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBanco->getValidationFailures());
				}
			}

			if ($this->aTarjetaCredito !== null) {
				if (!$this->aTarjetaCredito->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTarjetaCredito->getValidationFailures());
				}
			}


			if (($retval = PagoPeer::doValidate($this, $columns)) !== true) {
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
		$pos = PagoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdPago();
				break;
			case 1:
				return $this->getIdTarjetaCredito();
				break;
			case 2:
				return $this->getIdBanco();
				break;
			case 3:
				return $this->getIdFormaPago();
				break;
			case 4:
				return $this->getIdFactura();
				break;
			case 5:
				return $this->getFechaHora();
				break;
			case 6:
				return $this->getValor();
				break;
			case 7:
				return $this->getComisionTarjeta();
				break;
			case 8:
				return $this->getNumeroChq();
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
		if (isset($alreadyDumpedObjects['Pago'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Pago'][$this->getPrimaryKey()] = true;
		$keys = PagoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdPago(),
			$keys[1] => $this->getIdTarjetaCredito(),
			$keys[2] => $this->getIdBanco(),
			$keys[3] => $this->getIdFormaPago(),
			$keys[4] => $this->getIdFactura(),
			$keys[5] => $this->getFechaHora(),
			$keys[6] => $this->getValor(),
			$keys[7] => $this->getComisionTarjeta(),
			$keys[8] => $this->getNumeroChq(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aFactura) {
				$result['Factura'] = $this->aFactura->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aFormaPago) {
				$result['FormaPago'] = $this->aFormaPago->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aBanco) {
				$result['Banco'] = $this->aBanco->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aTarjetaCredito) {
				$result['TarjetaCredito'] = $this->aTarjetaCredito->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = PagoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdPago($value);
				break;
			case 1:
				$this->setIdTarjetaCredito($value);
				break;
			case 2:
				$this->setIdBanco($value);
				break;
			case 3:
				$this->setIdFormaPago($value);
				break;
			case 4:
				$this->setIdFactura($value);
				break;
			case 5:
				$this->setFechaHora($value);
				break;
			case 6:
				$this->setValor($value);
				break;
			case 7:
				$this->setComisionTarjeta($value);
				break;
			case 8:
				$this->setNumeroChq($value);
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
		$keys = PagoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdPago($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdTarjetaCredito($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdBanco($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdFormaPago($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdFactura($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFechaHora($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setValor($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComisionTarjeta($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNumeroChq($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PagoPeer::DATABASE_NAME);

		if ($this->isColumnModified(PagoPeer::ID_PAGO)) $criteria->add(PagoPeer::ID_PAGO, $this->id_pago);
		if ($this->isColumnModified(PagoPeer::ID_TARJETA_CREDITO)) $criteria->add(PagoPeer::ID_TARJETA_CREDITO, $this->id_tarjeta_credito);
		if ($this->isColumnModified(PagoPeer::ID_BANCO)) $criteria->add(PagoPeer::ID_BANCO, $this->id_banco);
		if ($this->isColumnModified(PagoPeer::ID_FORMA_PAGO)) $criteria->add(PagoPeer::ID_FORMA_PAGO, $this->id_forma_pago);
		if ($this->isColumnModified(PagoPeer::ID_FACTURA)) $criteria->add(PagoPeer::ID_FACTURA, $this->id_factura);
		if ($this->isColumnModified(PagoPeer::FECHA_HORA)) $criteria->add(PagoPeer::FECHA_HORA, $this->fecha_hora);
		if ($this->isColumnModified(PagoPeer::VALOR)) $criteria->add(PagoPeer::VALOR, $this->valor);
		if ($this->isColumnModified(PagoPeer::COMISION_TARJETA)) $criteria->add(PagoPeer::COMISION_TARJETA, $this->comision_tarjeta);
		if ($this->isColumnModified(PagoPeer::NUMERO_CHQ)) $criteria->add(PagoPeer::NUMERO_CHQ, $this->numero_chq);

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
		$criteria = new Criteria(PagoPeer::DATABASE_NAME);
		$criteria->add(PagoPeer::ID_PAGO, $this->id_pago);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdPago();
	}

	/**
	 * Generic method to set the primary key (id_pago column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdPago($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdPago();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Pago (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdTarjetaCredito($this->getIdTarjetaCredito());
		$copyObj->setIdBanco($this->getIdBanco());
		$copyObj->setIdFormaPago($this->getIdFormaPago());
		$copyObj->setIdFactura($this->getIdFactura());
		$copyObj->setFechaHora($this->getFechaHora());
		$copyObj->setValor($this->getValor());
		$copyObj->setComisionTarjeta($this->getComisionTarjeta());
		$copyObj->setNumeroChq($this->getNumeroChq());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdPago(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Pago Clone of current object.
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
	 * @return     PagoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PagoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Factura object.
	 *
	 * @param      Factura $v
	 * @return     Pago The current object (for fluent API support)
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
			$v->addPago($this);
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
				$this->aFactura->addPagos($this);
			 */
		}
		return $this->aFactura;
	}

	/**
	 * Declares an association between this object and a FormaPago object.
	 *
	 * @param      FormaPago $v
	 * @return     Pago The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setFormaPago(FormaPago $v = null)
	{
		if ($v === null) {
			$this->setIdFormaPago(NULL);
		} else {
			$this->setIdFormaPago($v->getIdFormaPago());
		}

		$this->aFormaPago = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the FormaPago object, it will not be re-added.
		if ($v !== null) {
			$v->addPago($this);
		}

		return $this;
	}


	/**
	 * Get the associated FormaPago object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     FormaPago The associated FormaPago object.
	 * @throws     PropelException
	 */
	public function getFormaPago(PropelPDO $con = null)
	{
		if ($this->aFormaPago === null && ($this->id_forma_pago !== null)) {
			$this->aFormaPago = FormaPagoQuery::create()->findPk($this->id_forma_pago, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aFormaPago->addPagos($this);
			 */
		}
		return $this->aFormaPago;
	}

	/**
	 * Declares an association between this object and a Banco object.
	 *
	 * @param      Banco $v
	 * @return     Pago The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBanco(Banco $v = null)
	{
		if ($v === null) {
			$this->setIdBanco(NULL);
		} else {
			$this->setIdBanco($v->getIdBanco());
		}

		$this->aBanco = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Banco object, it will not be re-added.
		if ($v !== null) {
			$v->addPago($this);
		}

		return $this;
	}


	/**
	 * Get the associated Banco object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Banco The associated Banco object.
	 * @throws     PropelException
	 */
	public function getBanco(PropelPDO $con = null)
	{
		if ($this->aBanco === null && ($this->id_banco !== null)) {
			$this->aBanco = BancoQuery::create()->findPk($this->id_banco, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aBanco->addPagos($this);
			 */
		}
		return $this->aBanco;
	}

	/**
	 * Declares an association between this object and a TarjetaCredito object.
	 *
	 * @param      TarjetaCredito $v
	 * @return     Pago The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTarjetaCredito(TarjetaCredito $v = null)
	{
		if ($v === null) {
			$this->setIdTarjetaCredito(NULL);
		} else {
			$this->setIdTarjetaCredito($v->getIdTarjetaCredito());
		}

		$this->aTarjetaCredito = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TarjetaCredito object, it will not be re-added.
		if ($v !== null) {
			$v->addPago($this);
		}

		return $this;
	}


	/**
	 * Get the associated TarjetaCredito object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     TarjetaCredito The associated TarjetaCredito object.
	 * @throws     PropelException
	 */
	public function getTarjetaCredito(PropelPDO $con = null)
	{
		if ($this->aTarjetaCredito === null && ($this->id_tarjeta_credito !== null)) {
			$this->aTarjetaCredito = TarjetaCreditoQuery::create()->findPk($this->id_tarjeta_credito, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTarjetaCredito->addPagos($this);
			 */
		}
		return $this->aTarjetaCredito;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_pago = null;
		$this->id_tarjeta_credito = null;
		$this->id_banco = null;
		$this->id_forma_pago = null;
		$this->id_factura = null;
		$this->fecha_hora = null;
		$this->valor = null;
		$this->comision_tarjeta = null;
		$this->numero_chq = null;
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
		$this->aFormaPago = null;
		$this->aBanco = null;
		$this->aTarjetaCredito = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PagoPeer::DEFAULT_STRING_FORMAT);
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

} // BasePago
