<?php


/**
 * Base class that represents a query for the 'persona' table.
 *
 * 
 *
 * @method     PersonaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     PersonaQuery orderByIdCargo($order = Criteria::ASC) Order by the id_cargo column
 * @method     PersonaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PersonaQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     PersonaQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     PersonaQuery orderByIdentificacion($order = Criteria::ASC) Order by the identificacion column
 * @method     PersonaQuery orderByFechaNacimiento($order = Criteria::ASC) Order by the fecha_nacimiento column
 * @method     PersonaQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method     PersonaQuery orderByClave($order = Criteria::ASC) Order by the clave column
 * @method     PersonaQuery orderByFechaIngreso($order = Criteria::ASC) Order by the fecha_ingreso column
 * @method     PersonaQuery orderByFechaSalida($order = Criteria::ASC) Order by the fecha_salida column
 * @method     PersonaQuery orderByAutorizaPago($order = Criteria::ASC) Order by the autoriza_pago column
 *
 * @method     PersonaQuery groupByIdPersona() Group by the id_persona column
 * @method     PersonaQuery groupByIdCargo() Group by the id_cargo column
 * @method     PersonaQuery groupByNombre() Group by the nombre column
 * @method     PersonaQuery groupByApellido() Group by the apellido column
 * @method     PersonaQuery groupByEmail() Group by the email column
 * @method     PersonaQuery groupByIdentificacion() Group by the identificacion column
 * @method     PersonaQuery groupByFechaNacimiento() Group by the fecha_nacimiento column
 * @method     PersonaQuery groupByEstado() Group by the estado column
 * @method     PersonaQuery groupByClave() Group by the clave column
 * @method     PersonaQuery groupByFechaIngreso() Group by the fecha_ingreso column
 * @method     PersonaQuery groupByFechaSalida() Group by the fecha_salida column
 * @method     PersonaQuery groupByAutorizaPago() Group by the autoriza_pago column
 *
 * @method     PersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaQuery leftJoinCargo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargo relation
 * @method     PersonaQuery rightJoinCargo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargo relation
 * @method     PersonaQuery innerJoinCargo($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargo relation
 *
 * @method     PersonaQuery leftJoinCuadreCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuadreCaja relation
 * @method     PersonaQuery rightJoinCuadreCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuadreCaja relation
 * @method     PersonaQuery innerJoinCuadreCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the CuadreCaja relation
 *
 * @method     PersonaQuery leftJoinLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the Log relation
 * @method     PersonaQuery rightJoinLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Log relation
 * @method     PersonaQuery innerJoinLog($relationAlias = null) Adds a INNER JOIN clause to the query using the Log relation
 *
 * @method     PersonaQuery leftJoinMenuPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the MenuPersona relation
 * @method     PersonaQuery rightJoinMenuPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MenuPersona relation
 * @method     PersonaQuery innerJoinMenuPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the MenuPersona relation
 *
 * @method     PersonaQuery leftJoinOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orden relation
 * @method     PersonaQuery rightJoinOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orden relation
 * @method     PersonaQuery innerJoinOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the Orden relation
 *
 * @method     PersonaQuery leftJoinPersonaLocalizacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaLocalizacion relation
 * @method     PersonaQuery rightJoinPersonaLocalizacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaLocalizacion relation
 * @method     PersonaQuery innerJoinPersonaLocalizacion($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaLocalizacion relation
 *
 * @method     PersonaQuery leftJoinUsuarioCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioCaja relation
 * @method     PersonaQuery rightJoinUsuarioCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioCaja relation
 * @method     PersonaQuery innerJoinUsuarioCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioCaja relation
 *
 * @method     PersonaQuery leftJoinPagoEfectivoRelatedByIdPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the PagoEfectivoRelatedByIdPersona relation
 * @method     PersonaQuery rightJoinPagoEfectivoRelatedByIdPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PagoEfectivoRelatedByIdPersona relation
 * @method     PersonaQuery innerJoinPagoEfectivoRelatedByIdPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the PagoEfectivoRelatedByIdPersona relation
 *
 * @method     PersonaQuery leftJoinPagoEfectivoRelatedByIdAutoriza($relationAlias = null) Adds a LEFT JOIN clause to the query using the PagoEfectivoRelatedByIdAutoriza relation
 * @method     PersonaQuery rightJoinPagoEfectivoRelatedByIdAutoriza($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PagoEfectivoRelatedByIdAutoriza relation
 * @method     PersonaQuery innerJoinPagoEfectivoRelatedByIdAutoriza($relationAlias = null) Adds a INNER JOIN clause to the query using the PagoEfectivoRelatedByIdAutoriza relation
 *
 * @method     PersonaQuery leftJoinDetalleOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetalleOrden relation
 * @method     PersonaQuery rightJoinDetalleOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetalleOrden relation
 * @method     PersonaQuery innerJoinDetalleOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the DetalleOrden relation
 *
 * @method     Persona findOne(PropelPDO $con = null) Return the first Persona matching the query
 * @method     Persona findOneOrCreate(PropelPDO $con = null) Return the first Persona matching the query, or a new Persona object populated from the query conditions when no match is found
 *
 * @method     Persona findOneByIdPersona(int $id_persona) Return the first Persona filtered by the id_persona column
 * @method     Persona findOneByIdCargo(int $id_cargo) Return the first Persona filtered by the id_cargo column
 * @method     Persona findOneByNombre(string $nombre) Return the first Persona filtered by the nombre column
 * @method     Persona findOneByApellido(string $apellido) Return the first Persona filtered by the apellido column
 * @method     Persona findOneByEmail(string $email) Return the first Persona filtered by the email column
 * @method     Persona findOneByIdentificacion(string $identificacion) Return the first Persona filtered by the identificacion column
 * @method     Persona findOneByFechaNacimiento(string $fecha_nacimiento) Return the first Persona filtered by the fecha_nacimiento column
 * @method     Persona findOneByEstado(string $estado) Return the first Persona filtered by the estado column
 * @method     Persona findOneByClave(string $clave) Return the first Persona filtered by the clave column
 * @method     Persona findOneByFechaIngreso(string $fecha_ingreso) Return the first Persona filtered by the fecha_ingreso column
 * @method     Persona findOneByFechaSalida(string $fecha_salida) Return the first Persona filtered by the fecha_salida column
 * @method     Persona findOneByAutorizaPago(string $autoriza_pago) Return the first Persona filtered by the autoriza_pago column
 *
 * @method     array findByIdPersona(int $id_persona) Return Persona objects filtered by the id_persona column
 * @method     array findByIdCargo(int $id_cargo) Return Persona objects filtered by the id_cargo column
 * @method     array findByNombre(string $nombre) Return Persona objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Persona objects filtered by the apellido column
 * @method     array findByEmail(string $email) Return Persona objects filtered by the email column
 * @method     array findByIdentificacion(string $identificacion) Return Persona objects filtered by the identificacion column
 * @method     array findByFechaNacimiento(string $fecha_nacimiento) Return Persona objects filtered by the fecha_nacimiento column
 * @method     array findByEstado(string $estado) Return Persona objects filtered by the estado column
 * @method     array findByClave(string $clave) Return Persona objects filtered by the clave column
 * @method     array findByFechaIngreso(string $fecha_ingreso) Return Persona objects filtered by the fecha_ingreso column
 * @method     array findByFechaSalida(string $fecha_salida) Return Persona objects filtered by the fecha_salida column
 * @method     array findByAutorizaPago(string $autoriza_pago) Return Persona objects filtered by the autoriza_pago column
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePersonaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePersonaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Persona', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PersonaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PersonaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PersonaQuery) {
			return $criteria;
		}
		$query = new PersonaQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Persona|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PersonaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_persona column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdPersona(1234); // WHERE id_persona = 1234
	 * $query->filterByIdPersona(array(12, 34)); // WHERE id_persona IN (12, 34)
	 * $query->filterByIdPersona(array('min' => 12)); // WHERE id_persona > 12
	 * </code>
	 *
	 * @param     mixed $idPersona The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $idPersona, $comparison);
	}

	/**
	 * Filter the query on the id_cargo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdCargo(1234); // WHERE id_cargo = 1234
	 * $query->filterByIdCargo(array(12, 34)); // WHERE id_cargo IN (12, 34)
	 * $query->filterByIdCargo(array('min' => 12)); // WHERE id_cargo > 12
	 * </code>
	 *
	 * @see       filterByCargo()
	 *
	 * @param     mixed $idCargo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByIdCargo($idCargo = null, $comparison = null)
	{
		if (is_array($idCargo)) {
			$useMinMax = false;
			if (isset($idCargo['min'])) {
				$this->addUsingAlias(PersonaPeer::ID_CARGO, $idCargo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCargo['max'])) {
				$this->addUsingAlias(PersonaPeer::ID_CARGO, $idCargo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaPeer::ID_CARGO, $idCargo, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
	 * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nombre The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the apellido column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
	 * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $apellido The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByApellido($apellido = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apellido)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apellido)) {
				$apellido = str_replace('*', '%', $apellido);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::APELLIDO, $apellido, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the identificacion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdentificacion('fooValue');   // WHERE identificacion = 'fooValue'
	 * $query->filterByIdentificacion('%fooValue%'); // WHERE identificacion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $identificacion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByIdentificacion($identificacion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($identificacion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $identificacion)) {
				$identificacion = str_replace('*', '%', $identificacion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::IDENTIFICACION, $identificacion, $comparison);
	}

	/**
	 * Filter the query on the fecha_nacimiento column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaNacimiento('2011-03-14'); // WHERE fecha_nacimiento = '2011-03-14'
	 * $query->filterByFechaNacimiento('now'); // WHERE fecha_nacimiento = '2011-03-14'
	 * $query->filterByFechaNacimiento(array('max' => 'yesterday')); // WHERE fecha_nacimiento > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaNacimiento The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByFechaNacimiento($fechaNacimiento = null, $comparison = null)
	{
		if (is_array($fechaNacimiento)) {
			$useMinMax = false;
			if (isset($fechaNacimiento['min'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_NACIMIENTO, $fechaNacimiento['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaNacimiento['max'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_NACIMIENTO, $fechaNacimiento['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaPeer::FECHA_NACIMIENTO, $fechaNacimiento, $comparison);
	}

	/**
	 * Filter the query on the estado column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEstado('fooValue');   // WHERE estado = 'fooValue'
	 * $query->filterByEstado('%fooValue%'); // WHERE estado LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $estado The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByEstado($estado = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($estado)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $estado)) {
				$estado = str_replace('*', '%', $estado);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query on the clave column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByClave('fooValue');   // WHERE clave = 'fooValue'
	 * $query->filterByClave('%fooValue%'); // WHERE clave LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $clave The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByClave($clave = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($clave)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $clave)) {
				$clave = str_replace('*', '%', $clave);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::CLAVE, $clave, $comparison);
	}

	/**
	 * Filter the query on the fecha_ingreso column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaIngreso('2011-03-14'); // WHERE fecha_ingreso = '2011-03-14'
	 * $query->filterByFechaIngreso('now'); // WHERE fecha_ingreso = '2011-03-14'
	 * $query->filterByFechaIngreso(array('max' => 'yesterday')); // WHERE fecha_ingreso > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaIngreso The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByFechaIngreso($fechaIngreso = null, $comparison = null)
	{
		if (is_array($fechaIngreso)) {
			$useMinMax = false;
			if (isset($fechaIngreso['min'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_INGRESO, $fechaIngreso['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaIngreso['max'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_INGRESO, $fechaIngreso['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaPeer::FECHA_INGRESO, $fechaIngreso, $comparison);
	}

	/**
	 * Filter the query on the fecha_salida column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaSalida('2011-03-14'); // WHERE fecha_salida = '2011-03-14'
	 * $query->filterByFechaSalida('now'); // WHERE fecha_salida = '2011-03-14'
	 * $query->filterByFechaSalida(array('max' => 'yesterday')); // WHERE fecha_salida > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaSalida The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByFechaSalida($fechaSalida = null, $comparison = null)
	{
		if (is_array($fechaSalida)) {
			$useMinMax = false;
			if (isset($fechaSalida['min'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_SALIDA, $fechaSalida['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaSalida['max'])) {
				$this->addUsingAlias(PersonaPeer::FECHA_SALIDA, $fechaSalida['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaPeer::FECHA_SALIDA, $fechaSalida, $comparison);
	}

	/**
	 * Filter the query on the autoriza_pago column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAutorizaPago('fooValue');   // WHERE autoriza_pago = 'fooValue'
	 * $query->filterByAutorizaPago('%fooValue%'); // WHERE autoriza_pago LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $autorizaPago The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByAutorizaPago($autorizaPago = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($autorizaPago)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $autorizaPago)) {
				$autorizaPago = str_replace('*', '%', $autorizaPago);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersonaPeer::AUTORIZA_PAGO, $autorizaPago, $comparison);
	}

	/**
	 * Filter the query by a related Cargo object
	 *
	 * @param     Cargo|PropelCollection $cargo The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByCargo($cargo, $comparison = null)
	{
		if ($cargo instanceof Cargo) {
			return $this
				->addUsingAlias(PersonaPeer::ID_CARGO, $cargo->getIdCargo(), $comparison);
		} elseif ($cargo instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PersonaPeer::ID_CARGO, $cargo->toKeyValue('PrimaryKey', 'IdCargo'), $comparison);
		} else {
			throw new PropelException('filterByCargo() only accepts arguments of type Cargo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Cargo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinCargo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Cargo');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Cargo');
		}
		
		return $this;
	}

	/**
	 * Use the Cargo relation Cargo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CargoQuery A secondary query class using the current class as primary query
	 */
	public function useCargoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCargo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cargo', 'CargoQuery');
	}

	/**
	 * Filter the query by a related CuadreCaja object
	 *
	 * @param     CuadreCaja $cuadreCaja  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByCuadreCaja($cuadreCaja, $comparison = null)
	{
		if ($cuadreCaja instanceof CuadreCaja) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $cuadreCaja->getIdPersona(), $comparison);
		} elseif ($cuadreCaja instanceof PropelCollection) {
			return $this
				->useCuadreCajaQuery()
					->filterByPrimaryKeys($cuadreCaja->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCuadreCaja() only accepts arguments of type CuadreCaja or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CuadreCaja relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinCuadreCaja($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CuadreCaja');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'CuadreCaja');
		}
		
		return $this;
	}

	/**
	 * Use the CuadreCaja relation CuadreCaja object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CuadreCajaQuery A secondary query class using the current class as primary query
	 */
	public function useCuadreCajaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCuadreCaja($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CuadreCaja', 'CuadreCajaQuery');
	}

	/**
	 * Filter the query by a related Log object
	 *
	 * @param     Log $log  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByLog($log, $comparison = null)
	{
		if ($log instanceof Log) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $log->getIdPersona(), $comparison);
		} elseif ($log instanceof PropelCollection) {
			return $this
				->useLogQuery()
					->filterByPrimaryKeys($log->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLog() only accepts arguments of type Log or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Log relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinLog($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Log');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Log');
		}
		
		return $this;
	}

	/**
	 * Use the Log relation Log object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LogQuery A secondary query class using the current class as primary query
	 */
	public function useLogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLog($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Log', 'LogQuery');
	}

	/**
	 * Filter the query by a related MenuPersona object
	 *
	 * @param     MenuPersona $menuPersona  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByMenuPersona($menuPersona, $comparison = null)
	{
		if ($menuPersona instanceof MenuPersona) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $menuPersona->getIdPersona(), $comparison);
		} elseif ($menuPersona instanceof PropelCollection) {
			return $this
				->useMenuPersonaQuery()
					->filterByPrimaryKeys($menuPersona->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByMenuPersona() only accepts arguments of type MenuPersona or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the MenuPersona relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinMenuPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('MenuPersona');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'MenuPersona');
		}
		
		return $this;
	}

	/**
	 * Use the MenuPersona relation MenuPersona object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MenuPersonaQuery A secondary query class using the current class as primary query
	 */
	public function useMenuPersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMenuPersona($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'MenuPersona', 'MenuPersonaQuery');
	}

	/**
	 * Filter the query by a related Orden object
	 *
	 * @param     Orden $orden  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden, $comparison = null)
	{
		if ($orden instanceof Orden) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $orden->getIdPersona(), $comparison);
		} elseif ($orden instanceof PropelCollection) {
			return $this
				->useOrdenQuery()
					->filterByPrimaryKeys($orden->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByOrden() only accepts arguments of type Orden or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Orden relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinOrden($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Orden');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Orden');
		}
		
		return $this;
	}

	/**
	 * Use the Orden relation Orden object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrdenQuery A secondary query class using the current class as primary query
	 */
	public function useOrdenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinOrden($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Orden', 'OrdenQuery');
	}

	/**
	 * Filter the query by a related PersonaLocalizacion object
	 *
	 * @param     PersonaLocalizacion $personaLocalizacion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByPersonaLocalizacion($personaLocalizacion, $comparison = null)
	{
		if ($personaLocalizacion instanceof PersonaLocalizacion) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $personaLocalizacion->getIdPersona(), $comparison);
		} elseif ($personaLocalizacion instanceof PropelCollection) {
			return $this
				->usePersonaLocalizacionQuery()
					->filterByPrimaryKeys($personaLocalizacion->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPersonaLocalizacion() only accepts arguments of type PersonaLocalizacion or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PersonaLocalizacion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinPersonaLocalizacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PersonaLocalizacion');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PersonaLocalizacion');
		}
		
		return $this;
	}

	/**
	 * Use the PersonaLocalizacion relation PersonaLocalizacion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaLocalizacionQuery A secondary query class using the current class as primary query
	 */
	public function usePersonaLocalizacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersonaLocalizacion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PersonaLocalizacion', 'PersonaLocalizacionQuery');
	}

	/**
	 * Filter the query by a related UsuarioCaja object
	 *
	 * @param     UsuarioCaja $usuarioCaja  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByUsuarioCaja($usuarioCaja, $comparison = null)
	{
		if ($usuarioCaja instanceof UsuarioCaja) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $usuarioCaja->getIdPersona(), $comparison);
		} elseif ($usuarioCaja instanceof PropelCollection) {
			return $this
				->useUsuarioCajaQuery()
					->filterByPrimaryKeys($usuarioCaja->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByUsuarioCaja() only accepts arguments of type UsuarioCaja or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the UsuarioCaja relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinUsuarioCaja($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UsuarioCaja');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UsuarioCaja');
		}
		
		return $this;
	}

	/**
	 * Use the UsuarioCaja relation UsuarioCaja object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UsuarioCajaQuery A secondary query class using the current class as primary query
	 */
	public function useUsuarioCajaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUsuarioCaja($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UsuarioCaja', 'UsuarioCajaQuery');
	}

	/**
	 * Filter the query by a related PagoEfectivo object
	 *
	 * @param     PagoEfectivo $pagoEfectivo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByPagoEfectivoRelatedByIdPersona($pagoEfectivo, $comparison = null)
	{
		if ($pagoEfectivo instanceof PagoEfectivo) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $pagoEfectivo->getIdPersona(), $comparison);
		} elseif ($pagoEfectivo instanceof PropelCollection) {
			return $this
				->usePagoEfectivoRelatedByIdPersonaQuery()
					->filterByPrimaryKeys($pagoEfectivo->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPagoEfectivoRelatedByIdPersona() only accepts arguments of type PagoEfectivo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PagoEfectivoRelatedByIdPersona relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinPagoEfectivoRelatedByIdPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PagoEfectivoRelatedByIdPersona');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PagoEfectivoRelatedByIdPersona');
		}
		
		return $this;
	}

	/**
	 * Use the PagoEfectivoRelatedByIdPersona relation PagoEfectivo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoEfectivoQuery A secondary query class using the current class as primary query
	 */
	public function usePagoEfectivoRelatedByIdPersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPagoEfectivoRelatedByIdPersona($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PagoEfectivoRelatedByIdPersona', 'PagoEfectivoQuery');
	}

	/**
	 * Filter the query by a related PagoEfectivo object
	 *
	 * @param     PagoEfectivo $pagoEfectivo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByPagoEfectivoRelatedByIdAutoriza($pagoEfectivo, $comparison = null)
	{
		if ($pagoEfectivo instanceof PagoEfectivo) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $pagoEfectivo->getIdAutoriza(), $comparison);
		} elseif ($pagoEfectivo instanceof PropelCollection) {
			return $this
				->usePagoEfectivoRelatedByIdAutorizaQuery()
					->filterByPrimaryKeys($pagoEfectivo->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPagoEfectivoRelatedByIdAutoriza() only accepts arguments of type PagoEfectivo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PagoEfectivoRelatedByIdAutoriza relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinPagoEfectivoRelatedByIdAutoriza($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PagoEfectivoRelatedByIdAutoriza');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PagoEfectivoRelatedByIdAutoriza');
		}
		
		return $this;
	}

	/**
	 * Use the PagoEfectivoRelatedByIdAutoriza relation PagoEfectivo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoEfectivoQuery A secondary query class using the current class as primary query
	 */
	public function usePagoEfectivoRelatedByIdAutorizaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPagoEfectivoRelatedByIdAutoriza($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PagoEfectivoRelatedByIdAutoriza', 'PagoEfectivoQuery');
	}

	/**
	 * Filter the query by a related DetalleOrden object
	 *
	 * @param     DetalleOrden $detalleOrden  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function filterByDetalleOrden($detalleOrden, $comparison = null)
	{
		if ($detalleOrden instanceof DetalleOrden) {
			return $this
				->addUsingAlias(PersonaPeer::ID_PERSONA, $detalleOrden->getIdPersona(), $comparison);
		} elseif ($detalleOrden instanceof PropelCollection) {
			return $this
				->useDetalleOrdenQuery()
					->filterByPrimaryKeys($detalleOrden->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByDetalleOrden() only accepts arguments of type DetalleOrden or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the DetalleOrden relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function joinDetalleOrden($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DetalleOrden');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'DetalleOrden');
		}
		
		return $this;
	}

	/**
	 * Use the DetalleOrden relation DetalleOrden object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetalleOrdenQuery A secondary query class using the current class as primary query
	 */
	public function useDetalleOrdenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDetalleOrden($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DetalleOrden', 'DetalleOrdenQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Persona $persona Object to remove from the list of results
	 *
	 * @return    PersonaQuery The current query, for fluid interface
	 */
	public function prune($persona = null)
	{
		if ($persona) {
			$this->addUsingAlias(PersonaPeer::ID_PERSONA, $persona->getIdPersona(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePersonaQuery
