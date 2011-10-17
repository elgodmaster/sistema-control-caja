<?php


/**
 * Base class that represents a query for the 'cuadre_caja' table.
 *
 * 
 *
 * @method     CuadreCajaQuery orderByIdCuadreCaja($order = Criteria::ASC) Order by the id_cuadre_caja column
 * @method     CuadreCajaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     CuadreCajaQuery orderByIdCaja($order = Criteria::ASC) Order by the id_caja column
 * @method     CuadreCajaQuery orderByFechaHoraI($order = Criteria::ASC) Order by the fecha_hora_i column
 * @method     CuadreCajaQuery orderByFechaHoraF($order = Criteria::ASC) Order by the fecha_hora_f column
 * @method     CuadreCajaQuery orderByBaseEfectivo($order = Criteria::ASC) Order by the base_efectivo column
 * @method     CuadreCajaQuery orderByEfectivoInicial($order = Criteria::ASC) Order by the efectivo_inicial column
 * @method     CuadreCajaQuery orderByEfectivoFinal($order = Criteria::ASC) Order by the efectivo_final column
 * @method     CuadreCajaQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method     CuadreCajaQuery orderByAjuste($order = Criteria::ASC) Order by the ajuste column
 * @method     CuadreCajaQuery orderByComentario($order = Criteria::ASC) Order by the comentario column
 *
 * @method     CuadreCajaQuery groupByIdCuadreCaja() Group by the id_cuadre_caja column
 * @method     CuadreCajaQuery groupByIdPersona() Group by the id_persona column
 * @method     CuadreCajaQuery groupByIdCaja() Group by the id_caja column
 * @method     CuadreCajaQuery groupByFechaHoraI() Group by the fecha_hora_i column
 * @method     CuadreCajaQuery groupByFechaHoraF() Group by the fecha_hora_f column
 * @method     CuadreCajaQuery groupByBaseEfectivo() Group by the base_efectivo column
 * @method     CuadreCajaQuery groupByEfectivoInicial() Group by the efectivo_inicial column
 * @method     CuadreCajaQuery groupByEfectivoFinal() Group by the efectivo_final column
 * @method     CuadreCajaQuery groupByEstado() Group by the estado column
 * @method     CuadreCajaQuery groupByAjuste() Group by the ajuste column
 * @method     CuadreCajaQuery groupByComentario() Group by the comentario column
 *
 * @method     CuadreCajaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CuadreCajaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CuadreCajaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CuadreCajaQuery leftJoinCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the Caja relation
 * @method     CuadreCajaQuery rightJoinCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Caja relation
 * @method     CuadreCajaQuery innerJoinCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the Caja relation
 *
 * @method     CuadreCajaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     CuadreCajaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     CuadreCajaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     CuadreCajaQuery leftJoinIngresoEgreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the IngresoEgreso relation
 * @method     CuadreCajaQuery rightJoinIngresoEgreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the IngresoEgreso relation
 * @method     CuadreCajaQuery innerJoinIngresoEgreso($relationAlias = null) Adds a INNER JOIN clause to the query using the IngresoEgreso relation
 *
 * @method     CuadreCajaQuery leftJoinOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orden relation
 * @method     CuadreCajaQuery rightJoinOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orden relation
 * @method     CuadreCajaQuery innerJoinOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the Orden relation
 *
 * @method     CuadreCajaQuery leftJoinPagoEfectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the PagoEfectivo relation
 * @method     CuadreCajaQuery rightJoinPagoEfectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PagoEfectivo relation
 * @method     CuadreCajaQuery innerJoinPagoEfectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the PagoEfectivo relation
 *
 * @method     CuadreCaja findOne(PropelPDO $con = null) Return the first CuadreCaja matching the query
 * @method     CuadreCaja findOneOrCreate(PropelPDO $con = null) Return the first CuadreCaja matching the query, or a new CuadreCaja object populated from the query conditions when no match is found
 *
 * @method     CuadreCaja findOneByIdCuadreCaja(int $id_cuadre_caja) Return the first CuadreCaja filtered by the id_cuadre_caja column
 * @method     CuadreCaja findOneByIdPersona(int $id_persona) Return the first CuadreCaja filtered by the id_persona column
 * @method     CuadreCaja findOneByIdCaja(int $id_caja) Return the first CuadreCaja filtered by the id_caja column
 * @method     CuadreCaja findOneByFechaHoraI(string $fecha_hora_i) Return the first CuadreCaja filtered by the fecha_hora_i column
 * @method     CuadreCaja findOneByFechaHoraF(string $fecha_hora_f) Return the first CuadreCaja filtered by the fecha_hora_f column
 * @method     CuadreCaja findOneByBaseEfectivo(string $base_efectivo) Return the first CuadreCaja filtered by the base_efectivo column
 * @method     CuadreCaja findOneByEfectivoInicial(string $efectivo_inicial) Return the first CuadreCaja filtered by the efectivo_inicial column
 * @method     CuadreCaja findOneByEfectivoFinal(string $efectivo_final) Return the first CuadreCaja filtered by the efectivo_final column
 * @method     CuadreCaja findOneByEstado(string $estado) Return the first CuadreCaja filtered by the estado column
 * @method     CuadreCaja findOneByAjuste(string $ajuste) Return the first CuadreCaja filtered by the ajuste column
 * @method     CuadreCaja findOneByComentario(string $comentario) Return the first CuadreCaja filtered by the comentario column
 *
 * @method     array findByIdCuadreCaja(int $id_cuadre_caja) Return CuadreCaja objects filtered by the id_cuadre_caja column
 * @method     array findByIdPersona(int $id_persona) Return CuadreCaja objects filtered by the id_persona column
 * @method     array findByIdCaja(int $id_caja) Return CuadreCaja objects filtered by the id_caja column
 * @method     array findByFechaHoraI(string $fecha_hora_i) Return CuadreCaja objects filtered by the fecha_hora_i column
 * @method     array findByFechaHoraF(string $fecha_hora_f) Return CuadreCaja objects filtered by the fecha_hora_f column
 * @method     array findByBaseEfectivo(string $base_efectivo) Return CuadreCaja objects filtered by the base_efectivo column
 * @method     array findByEfectivoInicial(string $efectivo_inicial) Return CuadreCaja objects filtered by the efectivo_inicial column
 * @method     array findByEfectivoFinal(string $efectivo_final) Return CuadreCaja objects filtered by the efectivo_final column
 * @method     array findByEstado(string $estado) Return CuadreCaja objects filtered by the estado column
 * @method     array findByAjuste(string $ajuste) Return CuadreCaja objects filtered by the ajuste column
 * @method     array findByComentario(string $comentario) Return CuadreCaja objects filtered by the comentario column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseCuadreCajaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCuadreCajaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'CuadreCaja', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CuadreCajaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CuadreCajaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CuadreCajaQuery) {
			return $criteria;
		}
		$query = new CuadreCajaQuery();
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
	 * @return    CuadreCaja|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CuadreCajaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cuadre_caja column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdCuadreCaja(1234); // WHERE id_cuadre_caja = 1234
	 * $query->filterByIdCuadreCaja(array(12, 34)); // WHERE id_cuadre_caja IN (12, 34)
	 * $query->filterByIdCuadreCaja(array('min' => 12)); // WHERE id_cuadre_caja > 12
	 * </code>
	 *
	 * @param     mixed $idCuadreCaja The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByIdCuadreCaja($idCuadreCaja = null, $comparison = null)
	{
		if (is_array($idCuadreCaja) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $idCuadreCaja, $comparison);
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
	 * @see       filterByPersona()
	 *
	 * @param     mixed $idPersona The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::ID_PERSONA, $idPersona, $comparison);
	}

	/**
	 * Filter the query on the id_caja column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdCaja(1234); // WHERE id_caja = 1234
	 * $query->filterByIdCaja(array(12, 34)); // WHERE id_caja IN (12, 34)
	 * $query->filterByIdCaja(array('min' => 12)); // WHERE id_caja > 12
	 * </code>
	 *
	 * @see       filterByCaja()
	 *
	 * @param     mixed $idCaja The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByIdCaja($idCaja = null, $comparison = null)
	{
		if (is_array($idCaja)) {
			$useMinMax = false;
			if (isset($idCaja['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::ID_CAJA, $idCaja['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCaja['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::ID_CAJA, $idCaja['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::ID_CAJA, $idCaja, $comparison);
	}

	/**
	 * Filter the query on the fecha_hora_i column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaHoraI('2011-03-14'); // WHERE fecha_hora_i = '2011-03-14'
	 * $query->filterByFechaHoraI('now'); // WHERE fecha_hora_i = '2011-03-14'
	 * $query->filterByFechaHoraI(array('max' => 'yesterday')); // WHERE fecha_hora_i > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaHoraI The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByFechaHoraI($fechaHoraI = null, $comparison = null)
	{
		if (is_array($fechaHoraI)) {
			$useMinMax = false;
			if (isset($fechaHoraI['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_I, $fechaHoraI['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHoraI['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_I, $fechaHoraI['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_I, $fechaHoraI, $comparison);
	}

	/**
	 * Filter the query on the fecha_hora_f column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaHoraF('2011-03-14'); // WHERE fecha_hora_f = '2011-03-14'
	 * $query->filterByFechaHoraF('now'); // WHERE fecha_hora_f = '2011-03-14'
	 * $query->filterByFechaHoraF(array('max' => 'yesterday')); // WHERE fecha_hora_f > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaHoraF The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByFechaHoraF($fechaHoraF = null, $comparison = null)
	{
		if (is_array($fechaHoraF)) {
			$useMinMax = false;
			if (isset($fechaHoraF['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_F, $fechaHoraF['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHoraF['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_F, $fechaHoraF['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::FECHA_HORA_F, $fechaHoraF, $comparison);
	}

	/**
	 * Filter the query on the base_efectivo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBaseEfectivo(1234); // WHERE base_efectivo = 1234
	 * $query->filterByBaseEfectivo(array(12, 34)); // WHERE base_efectivo IN (12, 34)
	 * $query->filterByBaseEfectivo(array('min' => 12)); // WHERE base_efectivo > 12
	 * </code>
	 *
	 * @param     mixed $baseEfectivo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByBaseEfectivo($baseEfectivo = null, $comparison = null)
	{
		if (is_array($baseEfectivo)) {
			$useMinMax = false;
			if (isset($baseEfectivo['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::BASE_EFECTIVO, $baseEfectivo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($baseEfectivo['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::BASE_EFECTIVO, $baseEfectivo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::BASE_EFECTIVO, $baseEfectivo, $comparison);
	}

	/**
	 * Filter the query on the efectivo_inicial column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEfectivoInicial(1234); // WHERE efectivo_inicial = 1234
	 * $query->filterByEfectivoInicial(array(12, 34)); // WHERE efectivo_inicial IN (12, 34)
	 * $query->filterByEfectivoInicial(array('min' => 12)); // WHERE efectivo_inicial > 12
	 * </code>
	 *
	 * @param     mixed $efectivoInicial The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByEfectivoInicial($efectivoInicial = null, $comparison = null)
	{
		if (is_array($efectivoInicial)) {
			$useMinMax = false;
			if (isset($efectivoInicial['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::EFECTIVO_INICIAL, $efectivoInicial['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($efectivoInicial['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::EFECTIVO_INICIAL, $efectivoInicial['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::EFECTIVO_INICIAL, $efectivoInicial, $comparison);
	}

	/**
	 * Filter the query on the efectivo_final column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEfectivoFinal(1234); // WHERE efectivo_final = 1234
	 * $query->filterByEfectivoFinal(array(12, 34)); // WHERE efectivo_final IN (12, 34)
	 * $query->filterByEfectivoFinal(array('min' => 12)); // WHERE efectivo_final > 12
	 * </code>
	 *
	 * @param     mixed $efectivoFinal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByEfectivoFinal($efectivoFinal = null, $comparison = null)
	{
		if (is_array($efectivoFinal)) {
			$useMinMax = false;
			if (isset($efectivoFinal['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::EFECTIVO_FINAL, $efectivoFinal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($efectivoFinal['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::EFECTIVO_FINAL, $efectivoFinal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::EFECTIVO_FINAL, $efectivoFinal, $comparison);
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
	 * @return    CuadreCajaQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CuadreCajaPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query on the ajuste column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAjuste(1234); // WHERE ajuste = 1234
	 * $query->filterByAjuste(array(12, 34)); // WHERE ajuste IN (12, 34)
	 * $query->filterByAjuste(array('min' => 12)); // WHERE ajuste > 12
	 * </code>
	 *
	 * @param     mixed $ajuste The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByAjuste($ajuste = null, $comparison = null)
	{
		if (is_array($ajuste)) {
			$useMinMax = false;
			if (isset($ajuste['min'])) {
				$this->addUsingAlias(CuadreCajaPeer::AJUSTE, $ajuste['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ajuste['max'])) {
				$this->addUsingAlias(CuadreCajaPeer::AJUSTE, $ajuste['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::AJUSTE, $ajuste, $comparison);
	}

	/**
	 * Filter the query on the comentario column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByComentario('fooValue');   // WHERE comentario = 'fooValue'
	 * $query->filterByComentario('%fooValue%'); // WHERE comentario LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $comentario The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comentario)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comentario)) {
				$comentario = str_replace('*', '%', $comentario);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CuadreCajaPeer::COMENTARIO, $comentario, $comparison);
	}

	/**
	 * Filter the query by a related Caja object
	 *
	 * @param     Caja|PropelCollection $caja The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByCaja($caja, $comparison = null)
	{
		if ($caja instanceof Caja) {
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_CAJA, $caja->getIdCaja(), $comparison);
		} elseif ($caja instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_CAJA, $caja->toKeyValue('PrimaryKey', 'IdCaja'), $comparison);
		} else {
			throw new PropelException('filterByCaja() only accepts arguments of type Caja or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Caja relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function joinCaja($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Caja');
		
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
			$this->addJoinObject($join, 'Caja');
		}
		
		return $this;
	}

	/**
	 * Use the Caja relation Caja object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CajaQuery A secondary query class using the current class as primary query
	 */
	public function useCajaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCaja($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Caja', 'CajaQuery');
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
		} else {
			throw new PropelException('filterByPersona() only accepts arguments of type Persona or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Persona relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function joinPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Persona');
		
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
			$this->addJoinObject($join, 'Persona');
		}
		
		return $this;
	}

	/**
	 * Use the Persona relation Persona object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery A secondary query class using the current class as primary query
	 */
	public function usePersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersona($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Persona', 'PersonaQuery');
	}

	/**
	 * Filter the query by a related IngresoEgreso object
	 *
	 * @param     IngresoEgreso $ingresoEgreso  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByIngresoEgreso($ingresoEgreso, $comparison = null)
	{
		if ($ingresoEgreso instanceof IngresoEgreso) {
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $ingresoEgreso->getIdCuadreCaja(), $comparison);
		} elseif ($ingresoEgreso instanceof PropelCollection) {
			return $this
				->useIngresoEgresoQuery()
					->filterByPrimaryKeys($ingresoEgreso->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByIngresoEgreso() only accepts arguments of type IngresoEgreso or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the IngresoEgreso relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function joinIngresoEgreso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('IngresoEgreso');
		
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
			$this->addJoinObject($join, 'IngresoEgreso');
		}
		
		return $this;
	}

	/**
	 * Use the IngresoEgreso relation IngresoEgreso object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    IngresoEgresoQuery A secondary query class using the current class as primary query
	 */
	public function useIngresoEgresoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinIngresoEgreso($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'IngresoEgreso', 'IngresoEgresoQuery');
	}

	/**
	 * Filter the query by a related Orden object
	 *
	 * @param     Orden $orden  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden, $comparison = null)
	{
		if ($orden instanceof Orden) {
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $orden->getIdCuadreCaja(), $comparison);
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
	 * @return    CuadreCajaQuery The current query, for fluid interface
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
	 * Filter the query by a related PagoEfectivo object
	 *
	 * @param     PagoEfectivo $pagoEfectivo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function filterByPagoEfectivo($pagoEfectivo, $comparison = null)
	{
		if ($pagoEfectivo instanceof PagoEfectivo) {
			return $this
				->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $pagoEfectivo->getIdCuadreCaja(), $comparison);
		} elseif ($pagoEfectivo instanceof PropelCollection) {
			return $this
				->usePagoEfectivoQuery()
					->filterByPrimaryKeys($pagoEfectivo->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPagoEfectivo() only accepts arguments of type PagoEfectivo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PagoEfectivo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function joinPagoEfectivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PagoEfectivo');
		
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
			$this->addJoinObject($join, 'PagoEfectivo');
		}
		
		return $this;
	}

	/**
	 * Use the PagoEfectivo relation PagoEfectivo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoEfectivoQuery A secondary query class using the current class as primary query
	 */
	public function usePagoEfectivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPagoEfectivo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PagoEfectivo', 'PagoEfectivoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CuadreCaja $cuadreCaja Object to remove from the list of results
	 *
	 * @return    CuadreCajaQuery The current query, for fluid interface
	 */
	public function prune($cuadreCaja = null)
	{
		if ($cuadreCaja) {
			$this->addUsingAlias(CuadreCajaPeer::ID_CUADRE_CAJA, $cuadreCaja->getIdCuadreCaja(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCuadreCajaQuery
