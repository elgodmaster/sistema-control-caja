<?php


/**
 * Base class that represents a query for the 'orden' table.
 *
 * 
 *
 * @method     OrdenQuery orderByIdOrden($order = Criteria::ASC) Order by the id_orden column
 * @method     OrdenQuery orderByIdCuadreCaja($order = Criteria::ASC) Order by the id_cuadre_caja column
 * @method     OrdenQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     OrdenQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 *
 * @method     OrdenQuery groupByIdOrden() Group by the id_orden column
 * @method     OrdenQuery groupByIdCuadreCaja() Group by the id_cuadre_caja column
 * @method     OrdenQuery groupByIdPersona() Group by the id_persona column
 * @method     OrdenQuery groupByFechaHora() Group by the fecha_hora column
 *
 * @method     OrdenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OrdenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OrdenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OrdenQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     OrdenQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     OrdenQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     OrdenQuery leftJoinCuadreCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuadreCaja relation
 * @method     OrdenQuery rightJoinCuadreCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuadreCaja relation
 * @method     OrdenQuery innerJoinCuadreCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the CuadreCaja relation
 *
 * @method     OrdenQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method     OrdenQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method     OrdenQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method     OrdenQuery leftJoinGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupo relation
 * @method     OrdenQuery rightJoinGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupo relation
 * @method     OrdenQuery innerJoinGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupo relation
 *
 * @method     OrdenQuery leftJoinDetalleOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetalleOrden relation
 * @method     OrdenQuery rightJoinDetalleOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetalleOrden relation
 * @method     OrdenQuery innerJoinDetalleOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the DetalleOrden relation
 *
 * @method     Orden findOne(PropelPDO $con = null) Return the first Orden matching the query
 * @method     Orden findOneOrCreate(PropelPDO $con = null) Return the first Orden matching the query, or a new Orden object populated from the query conditions when no match is found
 *
 * @method     Orden findOneByIdOrden(int $id_orden) Return the first Orden filtered by the id_orden column
 * @method     Orden findOneByIdCuadreCaja(int $id_cuadre_caja) Return the first Orden filtered by the id_cuadre_caja column
 * @method     Orden findOneByIdPersona(int $id_persona) Return the first Orden filtered by the id_persona column
 * @method     Orden findOneByFechaHora(string $fecha_hora) Return the first Orden filtered by the fecha_hora column
 *
 * @method     array findByIdOrden(int $id_orden) Return Orden objects filtered by the id_orden column
 * @method     array findByIdCuadreCaja(int $id_cuadre_caja) Return Orden objects filtered by the id_cuadre_caja column
 * @method     array findByIdPersona(int $id_persona) Return Orden objects filtered by the id_persona column
 * @method     array findByFechaHora(string $fecha_hora) Return Orden objects filtered by the fecha_hora column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseOrdenQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOrdenQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Orden', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OrdenQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OrdenQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OrdenQuery) {
			return $criteria;
		}
		$query = new OrdenQuery();
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
	 * @return    Orden|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OrdenPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OrdenPeer::ID_ORDEN, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OrdenPeer::ID_ORDEN, $keys, Criteria::IN);
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
	 * @param     mixed $idOrden The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByIdOrden($idOrden = null, $comparison = null)
	{
		if (is_array($idOrden) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OrdenPeer::ID_ORDEN, $idOrden, $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByIdCuadreCaja($idCuadreCaja = null, $comparison = null)
	{
		if (is_array($idCuadreCaja)) {
			$useMinMax = false;
			if (isset($idCuadreCaja['min'])) {
				$this->addUsingAlias(OrdenPeer::ID_CUADRE_CAJA, $idCuadreCaja['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCuadreCaja['max'])) {
				$this->addUsingAlias(OrdenPeer::ID_CUADRE_CAJA, $idCuadreCaja['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrdenPeer::ID_CUADRE_CAJA, $idCuadreCaja, $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(OrdenPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(OrdenPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrdenPeer::ID_PERSONA, $idPersona, $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(OrdenPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(OrdenPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrdenPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(OrdenPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(OrdenPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
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
	 * Filter the query by a related CuadreCaja object
	 *
	 * @param     CuadreCaja|PropelCollection $cuadreCaja The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByCuadreCaja($cuadreCaja, $comparison = null)
	{
		if ($cuadreCaja instanceof CuadreCaja) {
			return $this
				->addUsingAlias(OrdenPeer::ID_CUADRE_CAJA, $cuadreCaja->getIdCuadreCaja(), $comparison);
		} elseif ($cuadreCaja instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(OrdenPeer::ID_CUADRE_CAJA, $cuadreCaja->toKeyValue('PrimaryKey', 'IdCuadreCaja'), $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
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
	 * Filter the query by a related Factura object
	 *
	 * @param     Factura $factura  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByFactura($factura, $comparison = null)
	{
		if ($factura instanceof Factura) {
			return $this
				->addUsingAlias(OrdenPeer::ID_ORDEN, $factura->getIdOrden(), $comparison);
		} elseif ($factura instanceof PropelCollection) {
			return $this
				->useFacturaQuery()
					->filterByPrimaryKeys($factura->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Factura relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function joinFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Factura');
		
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
			$this->addJoinObject($join, 'Factura');
		}
		
		return $this;
	}

	/**
	 * Use the Factura relation Factura object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FacturaQuery A secondary query class using the current class as primary query
	 */
	public function useFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFactura($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
	}

	/**
	 * Filter the query by a related Grupo object
	 *
	 * @param     Grupo $grupo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByGrupo($grupo, $comparison = null)
	{
		if ($grupo instanceof Grupo) {
			return $this
				->addUsingAlias(OrdenPeer::ID_ORDEN, $grupo->getIdOrden(), $comparison);
		} elseif ($grupo instanceof PropelCollection) {
			return $this
				->useGrupoQuery()
					->filterByPrimaryKeys($grupo->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByGrupo() only accepts arguments of type Grupo or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Grupo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function joinGrupo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Grupo');
		
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
			$this->addJoinObject($join, 'Grupo');
		}
		
		return $this;
	}

	/**
	 * Use the Grupo relation Grupo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GrupoQuery A secondary query class using the current class as primary query
	 */
	public function useGrupoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGrupo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Grupo', 'GrupoQuery');
	}

	/**
	 * Filter the query by a related DetalleOrden object
	 *
	 * @param     DetalleOrden $detalleOrden  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function filterByDetalleOrden($detalleOrden, $comparison = null)
	{
		if ($detalleOrden instanceof DetalleOrden) {
			return $this
				->addUsingAlias(OrdenPeer::ID_ORDEN, $detalleOrden->getIdOrden(), $comparison);
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
	 * @return    OrdenQuery The current query, for fluid interface
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
	 * @param     Orden $orden Object to remove from the list of results
	 *
	 * @return    OrdenQuery The current query, for fluid interface
	 */
	public function prune($orden = null)
	{
		if ($orden) {
			$this->addUsingAlias(OrdenPeer::ID_ORDEN, $orden->getIdOrden(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOrdenQuery
