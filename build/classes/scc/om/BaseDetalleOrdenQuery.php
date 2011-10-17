<?php


/**
 * Base class that represents a query for the 'detalle_orden' table.
 *
 * 
 *
 * @method     DetalleOrdenQuery orderByIdDetalleOrden($order = Criteria::ASC) Order by the id_detalle_orden column
 * @method     DetalleOrdenQuery orderByIdOrden($order = Criteria::ASC) Order by the id_orden column
 * @method     DetalleOrdenQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     DetalleOrdenQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     DetalleOrdenQuery orderByNumeroOrden($order = Criteria::ASC) Order by the numero_orden column
 *
 * @method     DetalleOrdenQuery groupByIdDetalleOrden() Group by the id_detalle_orden column
 * @method     DetalleOrdenQuery groupByIdOrden() Group by the id_orden column
 * @method     DetalleOrdenQuery groupByIdPersona() Group by the id_persona column
 * @method     DetalleOrdenQuery groupByFechaHora() Group by the fecha_hora column
 * @method     DetalleOrdenQuery groupByNumeroOrden() Group by the numero_orden column
 *
 * @method     DetalleOrdenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DetalleOrdenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DetalleOrdenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DetalleOrdenQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     DetalleOrdenQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     DetalleOrdenQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     DetalleOrdenQuery leftJoinOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orden relation
 * @method     DetalleOrdenQuery rightJoinOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orden relation
 * @method     DetalleOrdenQuery innerJoinOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the Orden relation
 *
 * @method     DetalleOrdenQuery leftJoinDetallePedido($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetallePedido relation
 * @method     DetalleOrdenQuery rightJoinDetallePedido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetallePedido relation
 * @method     DetalleOrdenQuery innerJoinDetallePedido($relationAlias = null) Adds a INNER JOIN clause to the query using the DetallePedido relation
 *
 * @method     DetalleOrden findOne(PropelPDO $con = null) Return the first DetalleOrden matching the query
 * @method     DetalleOrden findOneOrCreate(PropelPDO $con = null) Return the first DetalleOrden matching the query, or a new DetalleOrden object populated from the query conditions when no match is found
 *
 * @method     DetalleOrden findOneByIdDetalleOrden(int $id_detalle_orden) Return the first DetalleOrden filtered by the id_detalle_orden column
 * @method     DetalleOrden findOneByIdOrden(int $id_orden) Return the first DetalleOrden filtered by the id_orden column
 * @method     DetalleOrden findOneByIdPersona(int $id_persona) Return the first DetalleOrden filtered by the id_persona column
 * @method     DetalleOrden findOneByFechaHora(string $fecha_hora) Return the first DetalleOrden filtered by the fecha_hora column
 * @method     DetalleOrden findOneByNumeroOrden(string $numero_orden) Return the first DetalleOrden filtered by the numero_orden column
 *
 * @method     array findByIdDetalleOrden(int $id_detalle_orden) Return DetalleOrden objects filtered by the id_detalle_orden column
 * @method     array findByIdOrden(int $id_orden) Return DetalleOrden objects filtered by the id_orden column
 * @method     array findByIdPersona(int $id_persona) Return DetalleOrden objects filtered by the id_persona column
 * @method     array findByFechaHora(string $fecha_hora) Return DetalleOrden objects filtered by the fecha_hora column
 * @method     array findByNumeroOrden(string $numero_orden) Return DetalleOrden objects filtered by the numero_orden column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseDetalleOrdenQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDetalleOrdenQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'DetalleOrden', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DetalleOrdenQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DetalleOrdenQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DetalleOrdenQuery) {
			return $criteria;
		}
		$query = new DetalleOrdenQuery();
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
	 * @return    DetalleOrden|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DetalleOrdenPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DetalleOrdenPeer::ID_DETALLE_ORDEN, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DetalleOrdenPeer::ID_DETALLE_ORDEN, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_detalle_orden column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdDetalleOrden(1234); // WHERE id_detalle_orden = 1234
	 * $query->filterByIdDetalleOrden(array(12, 34)); // WHERE id_detalle_orden IN (12, 34)
	 * $query->filterByIdDetalleOrden(array('min' => 12)); // WHERE id_detalle_orden > 12
	 * </code>
	 *
	 * @param     mixed $idDetalleOrden The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByIdDetalleOrden($idDetalleOrden = null, $comparison = null)
	{
		if (is_array($idDetalleOrden) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DetalleOrdenPeer::ID_DETALLE_ORDEN, $idDetalleOrden, $comparison);
	}

	/**
	 * Filter the query on the id_orden column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrden(1234); // WHERE id_orden = 1234
	 * $query->filterByIdOrden(array(12, 34)); // WHERE id_orden IN (12, 34)
	 * $query->filterByIdOrden(array('min' => 12)); // WHERE id_orden > 12
	 * </code>
	 *
	 * @see       filterByOrden()
	 *
	 * @param     mixed $idOrden The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByIdOrden($idOrden = null, $comparison = null)
	{
		if (is_array($idOrden)) {
			$useMinMax = false;
			if (isset($idOrden['min'])) {
				$this->addUsingAlias(DetalleOrdenPeer::ID_ORDEN, $idOrden['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrden['max'])) {
				$this->addUsingAlias(DetalleOrdenPeer::ID_ORDEN, $idOrden['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleOrdenPeer::ID_ORDEN, $idOrden, $comparison);
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
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(DetalleOrdenPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(DetalleOrdenPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleOrdenPeer::ID_PERSONA, $idPersona, $comparison);
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
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(DetalleOrdenPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(DetalleOrdenPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleOrdenPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query on the numero_orden column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNumeroOrden('fooValue');   // WHERE numero_orden = 'fooValue'
	 * $query->filterByNumeroOrden('%fooValue%'); // WHERE numero_orden LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $numeroOrden The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByNumeroOrden($numeroOrden = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($numeroOrden)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $numeroOrden)) {
				$numeroOrden = str_replace('*', '%', $numeroOrden);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DetalleOrdenPeer::NUMERO_ORDEN, $numeroOrden, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(DetalleOrdenPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetalleOrdenPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    DetalleOrdenQuery The current query, for fluid interface
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
	 * Filter the query by a related Orden object
	 *
	 * @param     Orden|PropelCollection $orden The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden, $comparison = null)
	{
		if ($orden instanceof Orden) {
			return $this
				->addUsingAlias(DetalleOrdenPeer::ID_ORDEN, $orden->getIdOrden(), $comparison);
		} elseif ($orden instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetalleOrdenPeer::ID_ORDEN, $orden->toKeyValue('PrimaryKey', 'IdOrden'), $comparison);
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
	 * @return    DetalleOrdenQuery The current query, for fluid interface
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
	 * Filter the query by a related DetallePedido object
	 *
	 * @param     DetallePedido $detallePedido  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function filterByDetallePedido($detallePedido, $comparison = null)
	{
		if ($detallePedido instanceof DetallePedido) {
			return $this
				->addUsingAlias(DetalleOrdenPeer::ID_DETALLE_ORDEN, $detallePedido->getIdDetalleOrden(), $comparison);
		} elseif ($detallePedido instanceof PropelCollection) {
			return $this
				->useDetallePedidoQuery()
					->filterByPrimaryKeys($detallePedido->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByDetallePedido() only accepts arguments of type DetallePedido or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the DetallePedido relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function joinDetallePedido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DetallePedido');
		
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
			$this->addJoinObject($join, 'DetallePedido');
		}
		
		return $this;
	}

	/**
	 * Use the DetallePedido relation DetallePedido object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetallePedidoQuery A secondary query class using the current class as primary query
	 */
	public function useDetallePedidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDetallePedido($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DetallePedido', 'DetallePedidoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DetalleOrden $detalleOrden Object to remove from the list of results
	 *
	 * @return    DetalleOrdenQuery The current query, for fluid interface
	 */
	public function prune($detalleOrden = null)
	{
		if ($detalleOrden) {
			$this->addUsingAlias(DetalleOrdenPeer::ID_DETALLE_ORDEN, $detalleOrden->getIdDetalleOrden(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDetalleOrdenQuery
