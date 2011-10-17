<?php


/**
 * Base class that represents a query for the 'usuario_caja' table.
 *
 * 
 *
 * @method     UsuarioCajaQuery orderByIdUsuarioCaja($order = Criteria::ASC) Order by the id_usuario_caja column
 * @method     UsuarioCajaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     UsuarioCajaQuery orderByIdCaja($order = Criteria::ASC) Order by the id_caja column
 *
 * @method     UsuarioCajaQuery groupByIdUsuarioCaja() Group by the id_usuario_caja column
 * @method     UsuarioCajaQuery groupByIdPersona() Group by the id_persona column
 * @method     UsuarioCajaQuery groupByIdCaja() Group by the id_caja column
 *
 * @method     UsuarioCajaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioCajaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioCajaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioCajaQuery leftJoinCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the Caja relation
 * @method     UsuarioCajaQuery rightJoinCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Caja relation
 * @method     UsuarioCajaQuery innerJoinCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the Caja relation
 *
 * @method     UsuarioCajaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     UsuarioCajaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     UsuarioCajaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     UsuarioCaja findOne(PropelPDO $con = null) Return the first UsuarioCaja matching the query
 * @method     UsuarioCaja findOneOrCreate(PropelPDO $con = null) Return the first UsuarioCaja matching the query, or a new UsuarioCaja object populated from the query conditions when no match is found
 *
 * @method     UsuarioCaja findOneByIdUsuarioCaja(int $id_usuario_caja) Return the first UsuarioCaja filtered by the id_usuario_caja column
 * @method     UsuarioCaja findOneByIdPersona(int $id_persona) Return the first UsuarioCaja filtered by the id_persona column
 * @method     UsuarioCaja findOneByIdCaja(int $id_caja) Return the first UsuarioCaja filtered by the id_caja column
 *
 * @method     array findByIdUsuarioCaja(int $id_usuario_caja) Return UsuarioCaja objects filtered by the id_usuario_caja column
 * @method     array findByIdPersona(int $id_persona) Return UsuarioCaja objects filtered by the id_persona column
 * @method     array findByIdCaja(int $id_caja) Return UsuarioCaja objects filtered by the id_caja column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseUsuarioCajaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUsuarioCajaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'UsuarioCaja', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UsuarioCajaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UsuarioCajaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UsuarioCajaQuery) {
			return $criteria;
		}
		$query = new UsuarioCajaQuery();
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
	 * @return    UsuarioCaja|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UsuarioCajaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UsuarioCajaPeer::ID_USUARIO_CAJA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UsuarioCajaPeer::ID_USUARIO_CAJA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_usuario_caja column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdUsuarioCaja(1234); // WHERE id_usuario_caja = 1234
	 * $query->filterByIdUsuarioCaja(array(12, 34)); // WHERE id_usuario_caja IN (12, 34)
	 * $query->filterByIdUsuarioCaja(array('min' => 12)); // WHERE id_usuario_caja > 12
	 * </code>
	 *
	 * @param     mixed $idUsuarioCaja The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByIdUsuarioCaja($idUsuarioCaja = null, $comparison = null)
	{
		if (is_array($idUsuarioCaja) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UsuarioCajaPeer::ID_USUARIO_CAJA, $idUsuarioCaja, $comparison);
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(UsuarioCajaPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(UsuarioCajaPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UsuarioCajaPeer::ID_PERSONA, $idPersona, $comparison);
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByIdCaja($idCaja = null, $comparison = null)
	{
		if (is_array($idCaja)) {
			$useMinMax = false;
			if (isset($idCaja['min'])) {
				$this->addUsingAlias(UsuarioCajaPeer::ID_CAJA, $idCaja['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCaja['max'])) {
				$this->addUsingAlias(UsuarioCajaPeer::ID_CAJA, $idCaja['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UsuarioCajaPeer::ID_CAJA, $idCaja, $comparison);
	}

	/**
	 * Filter the query by a related Caja object
	 *
	 * @param     Caja|PropelCollection $caja The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByCaja($caja, $comparison = null)
	{
		if ($caja instanceof Caja) {
			return $this
				->addUsingAlias(UsuarioCajaPeer::ID_CAJA, $caja->getIdCaja(), $comparison);
		} elseif ($caja instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(UsuarioCajaPeer::ID_CAJA, $caja->toKeyValue('PrimaryKey', 'IdCaja'), $comparison);
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(UsuarioCajaPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(UsuarioCajaPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    UsuarioCajaQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     UsuarioCaja $usuarioCaja Object to remove from the list of results
	 *
	 * @return    UsuarioCajaQuery The current query, for fluid interface
	 */
	public function prune($usuarioCaja = null)
	{
		if ($usuarioCaja) {
			$this->addUsingAlias(UsuarioCajaPeer::ID_USUARIO_CAJA, $usuarioCaja->getIdUsuarioCaja(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUsuarioCajaQuery
