<?php


/**
 * Base class that represents a query for the 'tarjeta_credito' table.
 *
 * 
 *
 * @method     TarjetaCreditoQuery orderByIdTarjetaCredito($order = Criteria::ASC) Order by the id_tarjeta_credito column
 * @method     TarjetaCreditoQuery orderByEmisor($order = Criteria::ASC) Order by the emisor column
 * @method     TarjetaCreditoQuery orderByPorcentajeComision($order = Criteria::ASC) Order by the porcentaje_comision column
 * @method     TarjetaCreditoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     TarjetaCreditoQuery groupByIdTarjetaCredito() Group by the id_tarjeta_credito column
 * @method     TarjetaCreditoQuery groupByEmisor() Group by the emisor column
 * @method     TarjetaCreditoQuery groupByPorcentajeComision() Group by the porcentaje_comision column
 * @method     TarjetaCreditoQuery groupByEstado() Group by the estado column
 *
 * @method     TarjetaCreditoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TarjetaCreditoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TarjetaCreditoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TarjetaCreditoQuery leftJoinPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pago relation
 * @method     TarjetaCreditoQuery rightJoinPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pago relation
 * @method     TarjetaCreditoQuery innerJoinPago($relationAlias = null) Adds a INNER JOIN clause to the query using the Pago relation
 *
 * @method     TarjetaCredito findOne(PropelPDO $con = null) Return the first TarjetaCredito matching the query
 * @method     TarjetaCredito findOneOrCreate(PropelPDO $con = null) Return the first TarjetaCredito matching the query, or a new TarjetaCredito object populated from the query conditions when no match is found
 *
 * @method     TarjetaCredito findOneByIdTarjetaCredito(int $id_tarjeta_credito) Return the first TarjetaCredito filtered by the id_tarjeta_credito column
 * @method     TarjetaCredito findOneByEmisor(string $emisor) Return the first TarjetaCredito filtered by the emisor column
 * @method     TarjetaCredito findOneByPorcentajeComision(string $porcentaje_comision) Return the first TarjetaCredito filtered by the porcentaje_comision column
 * @method     TarjetaCredito findOneByEstado(string $estado) Return the first TarjetaCredito filtered by the estado column
 *
 * @method     array findByIdTarjetaCredito(int $id_tarjeta_credito) Return TarjetaCredito objects filtered by the id_tarjeta_credito column
 * @method     array findByEmisor(string $emisor) Return TarjetaCredito objects filtered by the emisor column
 * @method     array findByPorcentajeComision(string $porcentaje_comision) Return TarjetaCredito objects filtered by the porcentaje_comision column
 * @method     array findByEstado(string $estado) Return TarjetaCredito objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseTarjetaCreditoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTarjetaCreditoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'TarjetaCredito', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TarjetaCreditoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TarjetaCreditoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TarjetaCreditoQuery) {
			return $criteria;
		}
		$query = new TarjetaCreditoQuery();
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
	 * @return    TarjetaCredito|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TarjetaCreditoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TarjetaCreditoPeer::ID_TARJETA_CREDITO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TarjetaCreditoPeer::ID_TARJETA_CREDITO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tarjeta_credito column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdTarjetaCredito(1234); // WHERE id_tarjeta_credito = 1234
	 * $query->filterByIdTarjetaCredito(array(12, 34)); // WHERE id_tarjeta_credito IN (12, 34)
	 * $query->filterByIdTarjetaCredito(array('min' => 12)); // WHERE id_tarjeta_credito > 12
	 * </code>
	 *
	 * @param     mixed $idTarjetaCredito The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByIdTarjetaCredito($idTarjetaCredito = null, $comparison = null)
	{
		if (is_array($idTarjetaCredito) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TarjetaCreditoPeer::ID_TARJETA_CREDITO, $idTarjetaCredito, $comparison);
	}

	/**
	 * Filter the query on the emisor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmisor('fooValue');   // WHERE emisor = 'fooValue'
	 * $query->filterByEmisor('%fooValue%'); // WHERE emisor LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $emisor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByEmisor($emisor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($emisor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $emisor)) {
				$emisor = str_replace('*', '%', $emisor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TarjetaCreditoPeer::EMISOR, $emisor, $comparison);
	}

	/**
	 * Filter the query on the porcentaje_comision column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPorcentajeComision(1234); // WHERE porcentaje_comision = 1234
	 * $query->filterByPorcentajeComision(array(12, 34)); // WHERE porcentaje_comision IN (12, 34)
	 * $query->filterByPorcentajeComision(array('min' => 12)); // WHERE porcentaje_comision > 12
	 * </code>
	 *
	 * @param     mixed $porcentajeComision The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByPorcentajeComision($porcentajeComision = null, $comparison = null)
	{
		if (is_array($porcentajeComision)) {
			$useMinMax = false;
			if (isset($porcentajeComision['min'])) {
				$this->addUsingAlias(TarjetaCreditoPeer::PORCENTAJE_COMISION, $porcentajeComision['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($porcentajeComision['max'])) {
				$this->addUsingAlias(TarjetaCreditoPeer::PORCENTAJE_COMISION, $porcentajeComision['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TarjetaCreditoPeer::PORCENTAJE_COMISION, $porcentajeComision, $comparison);
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
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TarjetaCreditoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Pago object
	 *
	 * @param     Pago $pago  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function filterByPago($pago, $comparison = null)
	{
		if ($pago instanceof Pago) {
			return $this
				->addUsingAlias(TarjetaCreditoPeer::ID_TARJETA_CREDITO, $pago->getIdTarjetaCredito(), $comparison);
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
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
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
	 * @param     TarjetaCredito $tarjetaCredito Object to remove from the list of results
	 *
	 * @return    TarjetaCreditoQuery The current query, for fluid interface
	 */
	public function prune($tarjetaCredito = null)
	{
		if ($tarjetaCredito) {
			$this->addUsingAlias(TarjetaCreditoPeer::ID_TARJETA_CREDITO, $tarjetaCredito->getIdTarjetaCredito(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTarjetaCreditoQuery
