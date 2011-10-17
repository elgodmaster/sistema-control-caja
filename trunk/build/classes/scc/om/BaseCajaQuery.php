<?php


/**
 * Base class that represents a query for the 'caja' table.
 *
 * 
 *
 * @method     CajaQuery orderByIdCaja($order = Criteria::ASC) Order by the id_caja column
 * @method     CajaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     CajaQuery orderByBaseEfectivo($order = Criteria::ASC) Order by the base_efectivo column
 * @method     CajaQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     CajaQuery groupByIdCaja() Group by the id_caja column
 * @method     CajaQuery groupByDescripcion() Group by the descripcion column
 * @method     CajaQuery groupByBaseEfectivo() Group by the base_efectivo column
 * @method     CajaQuery groupByEstado() Group by the estado column
 *
 * @method     CajaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CajaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CajaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CajaQuery leftJoinCuadreCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuadreCaja relation
 * @method     CajaQuery rightJoinCuadreCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuadreCaja relation
 * @method     CajaQuery innerJoinCuadreCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the CuadreCaja relation
 *
 * @method     CajaQuery leftJoinUsuarioCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioCaja relation
 * @method     CajaQuery rightJoinUsuarioCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioCaja relation
 * @method     CajaQuery innerJoinUsuarioCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioCaja relation
 *
 * @method     Caja findOne(PropelPDO $con = null) Return the first Caja matching the query
 * @method     Caja findOneOrCreate(PropelPDO $con = null) Return the first Caja matching the query, or a new Caja object populated from the query conditions when no match is found
 *
 * @method     Caja findOneByIdCaja(int $id_caja) Return the first Caja filtered by the id_caja column
 * @method     Caja findOneByDescripcion(string $descripcion) Return the first Caja filtered by the descripcion column
 * @method     Caja findOneByBaseEfectivo(string $base_efectivo) Return the first Caja filtered by the base_efectivo column
 * @method     Caja findOneByEstado(string $estado) Return the first Caja filtered by the estado column
 *
 * @method     array findByIdCaja(int $id_caja) Return Caja objects filtered by the id_caja column
 * @method     array findByDescripcion(string $descripcion) Return Caja objects filtered by the descripcion column
 * @method     array findByBaseEfectivo(string $base_efectivo) Return Caja objects filtered by the base_efectivo column
 * @method     array findByEstado(string $estado) Return Caja objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseCajaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCajaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Caja', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CajaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CajaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CajaQuery) {
			return $criteria;
		}
		$query = new CajaQuery();
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
	 * @return    Caja|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CajaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CajaPeer::ID_CAJA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CajaPeer::ID_CAJA, $keys, Criteria::IN);
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
	 * @param     mixed $idCaja The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByIdCaja($idCaja = null, $comparison = null)
	{
		if (is_array($idCaja) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CajaPeer::ID_CAJA, $idCaja, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
	 * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $descripcion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByDescripcion($descripcion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descripcion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descripcion)) {
				$descripcion = str_replace('*', '%', $descripcion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CajaPeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByBaseEfectivo($baseEfectivo = null, $comparison = null)
	{
		if (is_array($baseEfectivo)) {
			$useMinMax = false;
			if (isset($baseEfectivo['min'])) {
				$this->addUsingAlias(CajaPeer::BASE_EFECTIVO, $baseEfectivo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($baseEfectivo['max'])) {
				$this->addUsingAlias(CajaPeer::BASE_EFECTIVO, $baseEfectivo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CajaPeer::BASE_EFECTIVO, $baseEfectivo, $comparison);
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
	 * @return    CajaQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CajaPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related CuadreCaja object
	 *
	 * @param     CuadreCaja $cuadreCaja  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByCuadreCaja($cuadreCaja, $comparison = null)
	{
		if ($cuadreCaja instanceof CuadreCaja) {
			return $this
				->addUsingAlias(CajaPeer::ID_CAJA, $cuadreCaja->getIdCaja(), $comparison);
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
	 * @return    CajaQuery The current query, for fluid interface
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
	 * Filter the query by a related UsuarioCaja object
	 *
	 * @param     UsuarioCaja $usuarioCaja  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function filterByUsuarioCaja($usuarioCaja, $comparison = null)
	{
		if ($usuarioCaja instanceof UsuarioCaja) {
			return $this
				->addUsingAlias(CajaPeer::ID_CAJA, $usuarioCaja->getIdCaja(), $comparison);
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
	 * @return    CajaQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Caja $caja Object to remove from the list of results
	 *
	 * @return    CajaQuery The current query, for fluid interface
	 */
	public function prune($caja = null)
	{
		if ($caja) {
			$this->addUsingAlias(CajaPeer::ID_CAJA, $caja->getIdCaja(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCajaQuery
