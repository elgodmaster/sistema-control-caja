<?php


/**
 * Base class that represents a query for the 'forma_pago' table.
 *
 * 
 *
 * @method     FormaPagoQuery orderByIdFormaPago($order = Criteria::ASC) Order by the id_forma_pago column
 * @method     FormaPagoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     FormaPagoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     FormaPagoQuery groupByIdFormaPago() Group by the id_forma_pago column
 * @method     FormaPagoQuery groupByDescripcion() Group by the descripcion column
 * @method     FormaPagoQuery groupByEstado() Group by the estado column
 *
 * @method     FormaPagoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FormaPagoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FormaPagoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FormaPagoQuery leftJoinPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pago relation
 * @method     FormaPagoQuery rightJoinPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pago relation
 * @method     FormaPagoQuery innerJoinPago($relationAlias = null) Adds a INNER JOIN clause to the query using the Pago relation
 *
 * @method     FormaPago findOne(PropelPDO $con = null) Return the first FormaPago matching the query
 * @method     FormaPago findOneOrCreate(PropelPDO $con = null) Return the first FormaPago matching the query, or a new FormaPago object populated from the query conditions when no match is found
 *
 * @method     FormaPago findOneByIdFormaPago(int $id_forma_pago) Return the first FormaPago filtered by the id_forma_pago column
 * @method     FormaPago findOneByDescripcion(string $descripcion) Return the first FormaPago filtered by the descripcion column
 * @method     FormaPago findOneByEstado(string $estado) Return the first FormaPago filtered by the estado column
 *
 * @method     array findByIdFormaPago(int $id_forma_pago) Return FormaPago objects filtered by the id_forma_pago column
 * @method     array findByDescripcion(string $descripcion) Return FormaPago objects filtered by the descripcion column
 * @method     array findByEstado(string $estado) Return FormaPago objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseFormaPagoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseFormaPagoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'FormaPago', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new FormaPagoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    FormaPagoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof FormaPagoQuery) {
			return $criteria;
		}
		$query = new FormaPagoQuery();
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
	 * @return    FormaPago|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = FormaPagoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(FormaPagoPeer::ID_FORMA_PAGO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(FormaPagoPeer::ID_FORMA_PAGO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_forma_pago column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdFormaPago(1234); // WHERE id_forma_pago = 1234
	 * $query->filterByIdFormaPago(array(12, 34)); // WHERE id_forma_pago IN (12, 34)
	 * $query->filterByIdFormaPago(array('min' => 12)); // WHERE id_forma_pago > 12
	 * </code>
	 *
	 * @param     mixed $idFormaPago The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function filterByIdFormaPago($idFormaPago = null, $comparison = null)
	{
		if (is_array($idFormaPago) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(FormaPagoPeer::ID_FORMA_PAGO, $idFormaPago, $comparison);
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
	 * @return    FormaPagoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(FormaPagoPeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    FormaPagoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(FormaPagoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Pago object
	 *
	 * @param     Pago $pago  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function filterByPago($pago, $comparison = null)
	{
		if ($pago instanceof Pago) {
			return $this
				->addUsingAlias(FormaPagoPeer::ID_FORMA_PAGO, $pago->getIdFormaPago(), $comparison);
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
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function joinPago($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function usePagoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPago($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Pago', 'PagoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     FormaPago $formaPago Object to remove from the list of results
	 *
	 * @return    FormaPagoQuery The current query, for fluid interface
	 */
	public function prune($formaPago = null)
	{
		if ($formaPago) {
			$this->addUsingAlias(FormaPagoPeer::ID_FORMA_PAGO, $formaPago->getIdFormaPago(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseFormaPagoQuery
