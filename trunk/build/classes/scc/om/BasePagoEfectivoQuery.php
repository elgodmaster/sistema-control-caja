<?php


/**
 * Base class that represents a query for the 'pago_efectivo' table.
 *
 * 
 *
 * @method     PagoEfectivoQuery orderByIdPagoEfectivo($order = Criteria::ASC) Order by the id_pago_efectivo column
 * @method     PagoEfectivoQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     PagoEfectivoQuery orderByIdAutoriza($order = Criteria::ASC) Order by the id_autoriza column
 * @method     PagoEfectivoQuery orderByIdCuadreCaja($order = Criteria::ASC) Order by the id_cuadre_caja column
 * @method     PagoEfectivoQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     PagoEfectivoQuery orderByValor($order = Criteria::ASC) Order by the valor column
 * @method     PagoEfectivoQuery orderByConcepto($order = Criteria::ASC) Order by the concepto column
 * @method     PagoEfectivoQuery orderByReceptor($order = Criteria::ASC) Order by the receptor column
 * @method     PagoEfectivoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     PagoEfectivoQuery groupByIdPagoEfectivo() Group by the id_pago_efectivo column
 * @method     PagoEfectivoQuery groupByIdPersona() Group by the id_persona column
 * @method     PagoEfectivoQuery groupByIdAutoriza() Group by the id_autoriza column
 * @method     PagoEfectivoQuery groupByIdCuadreCaja() Group by the id_cuadre_caja column
 * @method     PagoEfectivoQuery groupByFechaHora() Group by the fecha_hora column
 * @method     PagoEfectivoQuery groupByValor() Group by the valor column
 * @method     PagoEfectivoQuery groupByConcepto() Group by the concepto column
 * @method     PagoEfectivoQuery groupByReceptor() Group by the receptor column
 * @method     PagoEfectivoQuery groupByEstado() Group by the estado column
 *
 * @method     PagoEfectivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PagoEfectivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PagoEfectivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PagoEfectivoQuery leftJoinCuadreCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuadreCaja relation
 * @method     PagoEfectivoQuery rightJoinCuadreCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuadreCaja relation
 * @method     PagoEfectivoQuery innerJoinCuadreCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the CuadreCaja relation
 *
 * @method     PagoEfectivoQuery leftJoinPersonaRelatedByIdPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaRelatedByIdPersona relation
 * @method     PagoEfectivoQuery rightJoinPersonaRelatedByIdPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaRelatedByIdPersona relation
 * @method     PagoEfectivoQuery innerJoinPersonaRelatedByIdPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaRelatedByIdPersona relation
 *
 * @method     PagoEfectivoQuery leftJoinPersonaRelatedByIdAutoriza($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaRelatedByIdAutoriza relation
 * @method     PagoEfectivoQuery rightJoinPersonaRelatedByIdAutoriza($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaRelatedByIdAutoriza relation
 * @method     PagoEfectivoQuery innerJoinPersonaRelatedByIdAutoriza($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaRelatedByIdAutoriza relation
 *
 * @method     PagoEfectivo findOne(PropelPDO $con = null) Return the first PagoEfectivo matching the query
 * @method     PagoEfectivo findOneOrCreate(PropelPDO $con = null) Return the first PagoEfectivo matching the query, or a new PagoEfectivo object populated from the query conditions when no match is found
 *
 * @method     PagoEfectivo findOneByIdPagoEfectivo(int $id_pago_efectivo) Return the first PagoEfectivo filtered by the id_pago_efectivo column
 * @method     PagoEfectivo findOneByIdPersona(int $id_persona) Return the first PagoEfectivo filtered by the id_persona column
 * @method     PagoEfectivo findOneByIdAutoriza(int $id_autoriza) Return the first PagoEfectivo filtered by the id_autoriza column
 * @method     PagoEfectivo findOneByIdCuadreCaja(int $id_cuadre_caja) Return the first PagoEfectivo filtered by the id_cuadre_caja column
 * @method     PagoEfectivo findOneByFechaHora(string $fecha_hora) Return the first PagoEfectivo filtered by the fecha_hora column
 * @method     PagoEfectivo findOneByValor(string $valor) Return the first PagoEfectivo filtered by the valor column
 * @method     PagoEfectivo findOneByConcepto(string $concepto) Return the first PagoEfectivo filtered by the concepto column
 * @method     PagoEfectivo findOneByReceptor(string $receptor) Return the first PagoEfectivo filtered by the receptor column
 * @method     PagoEfectivo findOneByEstado(string $estado) Return the first PagoEfectivo filtered by the estado column
 *
 * @method     array findByIdPagoEfectivo(int $id_pago_efectivo) Return PagoEfectivo objects filtered by the id_pago_efectivo column
 * @method     array findByIdPersona(int $id_persona) Return PagoEfectivo objects filtered by the id_persona column
 * @method     array findByIdAutoriza(int $id_autoriza) Return PagoEfectivo objects filtered by the id_autoriza column
 * @method     array findByIdCuadreCaja(int $id_cuadre_caja) Return PagoEfectivo objects filtered by the id_cuadre_caja column
 * @method     array findByFechaHora(string $fecha_hora) Return PagoEfectivo objects filtered by the fecha_hora column
 * @method     array findByValor(string $valor) Return PagoEfectivo objects filtered by the valor column
 * @method     array findByConcepto(string $concepto) Return PagoEfectivo objects filtered by the concepto column
 * @method     array findByReceptor(string $receptor) Return PagoEfectivo objects filtered by the receptor column
 * @method     array findByEstado(string $estado) Return PagoEfectivo objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePagoEfectivoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePagoEfectivoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'PagoEfectivo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PagoEfectivoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PagoEfectivoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PagoEfectivoQuery) {
			return $criteria;
		}
		$query = new PagoEfectivoQuery();
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
	 * @return    PagoEfectivo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PagoEfectivoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_pago_efectivo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdPagoEfectivo(1234); // WHERE id_pago_efectivo = 1234
	 * $query->filterByIdPagoEfectivo(array(12, 34)); // WHERE id_pago_efectivo IN (12, 34)
	 * $query->filterByIdPagoEfectivo(array('min' => 12)); // WHERE id_pago_efectivo > 12
	 * </code>
	 *
	 * @param     mixed $idPagoEfectivo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByIdPagoEfectivo($idPagoEfectivo = null, $comparison = null)
	{
		if (is_array($idPagoEfectivo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $idPagoEfectivo, $comparison);
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
	 * @see       filterByPersonaRelatedByIdPersona()
	 *
	 * @param     mixed $idPersona The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::ID_PERSONA, $idPersona, $comparison);
	}

	/**
	 * Filter the query on the id_autoriza column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdAutoriza(1234); // WHERE id_autoriza = 1234
	 * $query->filterByIdAutoriza(array(12, 34)); // WHERE id_autoriza IN (12, 34)
	 * $query->filterByIdAutoriza(array('min' => 12)); // WHERE id_autoriza > 12
	 * </code>
	 *
	 * @see       filterByPersonaRelatedByIdAutoriza()
	 *
	 * @param     mixed $idAutoriza The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByIdAutoriza($idAutoriza = null, $comparison = null)
	{
		if (is_array($idAutoriza)) {
			$useMinMax = false;
			if (isset($idAutoriza['min'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_AUTORIZA, $idAutoriza['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAutoriza['max'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_AUTORIZA, $idAutoriza['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::ID_AUTORIZA, $idAutoriza, $comparison);
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
	 * @see       filterByCuadreCaja()
	 *
	 * @param     mixed $idCuadreCaja The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByIdCuadreCaja($idCuadreCaja = null, $comparison = null)
	{
		if (is_array($idCuadreCaja)) {
			$useMinMax = false;
			if (isset($idCuadreCaja['min'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_CUADRE_CAJA, $idCuadreCaja['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCuadreCaja['max'])) {
				$this->addUsingAlias(PagoEfectivoPeer::ID_CUADRE_CAJA, $idCuadreCaja['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::ID_CUADRE_CAJA, $idCuadreCaja, $comparison);
	}

	/**
	 * Filter the query on the fecha_hora column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaHora('2011-03-14'); // WHERE fecha_hora = '2011-03-14'
	 * $query->filterByFechaHora('now'); // WHERE fecha_hora = '2011-03-14'
	 * $query->filterByFechaHora(array('max' => 'yesterday')); // WHERE fecha_hora > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaHora The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(PagoEfectivoPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(PagoEfectivoPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query on the valor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValor(1234); // WHERE valor = 1234
	 * $query->filterByValor(array(12, 34)); // WHERE valor IN (12, 34)
	 * $query->filterByValor(array('min' => 12)); // WHERE valor > 12
	 * </code>
	 *
	 * @param     mixed $valor The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByValor($valor = null, $comparison = null)
	{
		if (is_array($valor)) {
			$useMinMax = false;
			if (isset($valor['min'])) {
				$this->addUsingAlias(PagoEfectivoPeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valor['max'])) {
				$this->addUsingAlias(PagoEfectivoPeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::VALOR, $valor, $comparison);
	}

	/**
	 * Filter the query on the concepto column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByConcepto('fooValue');   // WHERE concepto = 'fooValue'
	 * $query->filterByConcepto('%fooValue%'); // WHERE concepto LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $concepto The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByConcepto($concepto = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($concepto)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $concepto)) {
				$concepto = str_replace('*', '%', $concepto);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::CONCEPTO, $concepto, $comparison);
	}

	/**
	 * Filter the query on the receptor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByReceptor('fooValue');   // WHERE receptor = 'fooValue'
	 * $query->filterByReceptor('%fooValue%'); // WHERE receptor LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $receptor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByReceptor($receptor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($receptor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $receptor)) {
				$receptor = str_replace('*', '%', $receptor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PagoEfectivoPeer::RECEPTOR, $receptor, $comparison);
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
	 * @return    PagoEfectivoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PagoEfectivoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related CuadreCaja object
	 *
	 * @param     CuadreCaja|PropelCollection $cuadreCaja The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByCuadreCaja($cuadreCaja, $comparison = null)
	{
		if ($cuadreCaja instanceof CuadreCaja) {
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_CUADRE_CAJA, $cuadreCaja->getIdCuadreCaja(), $comparison);
		} elseif ($cuadreCaja instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_CUADRE_CAJA, $cuadreCaja->toKeyValue('PrimaryKey', 'IdCuadreCaja'), $comparison);
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
	 * @return    PagoEfectivoQuery The current query, for fluid interface
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
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByPersonaRelatedByIdPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
		} else {
			throw new PropelException('filterByPersonaRelatedByIdPersona() only accepts arguments of type Persona or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PersonaRelatedByIdPersona relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function joinPersonaRelatedByIdPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PersonaRelatedByIdPersona');
		
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
			$this->addJoinObject($join, 'PersonaRelatedByIdPersona');
		}
		
		return $this;
	}

	/**
	 * Use the PersonaRelatedByIdPersona relation Persona object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery A secondary query class using the current class as primary query
	 */
	public function usePersonaRelatedByIdPersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersonaRelatedByIdPersona($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PersonaRelatedByIdPersona', 'PersonaQuery');
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function filterByPersonaRelatedByIdAutoriza($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_AUTORIZA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoEfectivoPeer::ID_AUTORIZA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
		} else {
			throw new PropelException('filterByPersonaRelatedByIdAutoriza() only accepts arguments of type Persona or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PersonaRelatedByIdAutoriza relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function joinPersonaRelatedByIdAutoriza($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PersonaRelatedByIdAutoriza');
		
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
			$this->addJoinObject($join, 'PersonaRelatedByIdAutoriza');
		}
		
		return $this;
	}

	/**
	 * Use the PersonaRelatedByIdAutoriza relation Persona object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaQuery A secondary query class using the current class as primary query
	 */
	public function usePersonaRelatedByIdAutorizaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersonaRelatedByIdAutoriza($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PersonaRelatedByIdAutoriza', 'PersonaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PagoEfectivo $pagoEfectivo Object to remove from the list of results
	 *
	 * @return    PagoEfectivoQuery The current query, for fluid interface
	 */
	public function prune($pagoEfectivo = null)
	{
		if ($pagoEfectivo) {
			$this->addUsingAlias(PagoEfectivoPeer::ID_PAGO_EFECTIVO, $pagoEfectivo->getIdPagoEfectivo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePagoEfectivoQuery
