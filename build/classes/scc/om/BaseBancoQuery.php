<?php


/**
 * Base class that represents a query for the 'banco' table.
 *
 * 
 *
 * @method     BancoQuery orderByIdBanco($order = Criteria::ASC) Order by the id_banco column
 * @method     BancoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     BancoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     BancoQuery groupByIdBanco() Group by the id_banco column
 * @method     BancoQuery groupByDescripcion() Group by the descripcion column
 * @method     BancoQuery groupByEstado() Group by the estado column
 *
 * @method     BancoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BancoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BancoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BancoQuery leftJoinPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pago relation
 * @method     BancoQuery rightJoinPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pago relation
 * @method     BancoQuery innerJoinPago($relationAlias = null) Adds a INNER JOIN clause to the query using the Pago relation
 *
 * @method     Banco findOne(PropelPDO $con = null) Return the first Banco matching the query
 * @method     Banco findOneOrCreate(PropelPDO $con = null) Return the first Banco matching the query, or a new Banco object populated from the query conditions when no match is found
 *
 * @method     Banco findOneByIdBanco(int $id_banco) Return the first Banco filtered by the id_banco column
 * @method     Banco findOneByDescripcion(string $descripcion) Return the first Banco filtered by the descripcion column
 * @method     Banco findOneByEstado(string $estado) Return the first Banco filtered by the estado column
 *
 * @method     array findByIdBanco(int $id_banco) Return Banco objects filtered by the id_banco column
 * @method     array findByDescripcion(string $descripcion) Return Banco objects filtered by the descripcion column
 * @method     array findByEstado(string $estado) Return Banco objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseBancoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBancoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Banco', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BancoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BancoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BancoQuery) {
			return $criteria;
		}
		$query = new BancoQuery();
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
	 * @return    Banco|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BancoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BancoPeer::ID_BANCO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BancoPeer::ID_BANCO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_banco column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdBanco(1234); // WHERE id_banco = 1234
	 * $query->filterByIdBanco(array(12, 34)); // WHERE id_banco IN (12, 34)
	 * $query->filterByIdBanco(array('min' => 12)); // WHERE id_banco > 12
	 * </code>
	 *
	 * @param     mixed $idBanco The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function filterByIdBanco($idBanco = null, $comparison = null)
	{
		if (is_array($idBanco) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BancoPeer::ID_BANCO, $idBanco, $comparison);
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
	 * @return    BancoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BancoPeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    BancoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BancoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Pago object
	 *
	 * @param     Pago $pago  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function filterByPago($pago, $comparison = null)
	{
		if ($pago instanceof Pago) {
			return $this
				->addUsingAlias(BancoPeer::ID_BANCO, $pago->getIdBanco(), $comparison);
		} elseif ($pago instanceof PropelCollection) {
			return $this
				->usePagoQuery()
					->filterByPrimaryKeys($pago->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPago() only accepts arguments of type Pago or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Pago relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function joinPago($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Pago');
		
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
			$this->addJoinObject($join, 'Pago');
		}
		
		return $this;
	}

	/**
	 * Use the Pago relation Pago object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoQuery A secondary query class using the current class as primary query
	 */
	public function usePagoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinPago($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Pago', 'PagoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Banco $banco Object to remove from the list of results
	 *
	 * @return    BancoQuery The current query, for fluid interface
	 */
	public function prune($banco = null)
	{
		if ($banco) {
			$this->addUsingAlias(BancoPeer::ID_BANCO, $banco->getIdBanco(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBancoQuery
