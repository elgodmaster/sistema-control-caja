<?php


/**
 * Base class that represents a query for the 'persona_localizacion' table.
 *
 * 
 *
 * @method     PersonaLocalizacionQuery orderByIdPersonaLocalizacion($order = Criteria::ASC) Order by the id_persona_localizacion column
 * @method     PersonaLocalizacionQuery orderByIdLocalizacion($order = Criteria::ASC) Order by the id_localizacion column
 * @method     PersonaLocalizacionQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 *
 * @method     PersonaLocalizacionQuery groupByIdPersonaLocalizacion() Group by the id_persona_localizacion column
 * @method     PersonaLocalizacionQuery groupByIdLocalizacion() Group by the id_localizacion column
 * @method     PersonaLocalizacionQuery groupByIdPersona() Group by the id_persona column
 *
 * @method     PersonaLocalizacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaLocalizacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaLocalizacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaLocalizacionQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     PersonaLocalizacionQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     PersonaLocalizacionQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     PersonaLocalizacionQuery leftJoinLocalizacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localizacion relation
 * @method     PersonaLocalizacionQuery rightJoinLocalizacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localizacion relation
 * @method     PersonaLocalizacionQuery innerJoinLocalizacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Localizacion relation
 *
 * @method     PersonaLocalizacion findOne(PropelPDO $con = null) Return the first PersonaLocalizacion matching the query
 * @method     PersonaLocalizacion findOneOrCreate(PropelPDO $con = null) Return the first PersonaLocalizacion matching the query, or a new PersonaLocalizacion object populated from the query conditions when no match is found
 *
 * @method     PersonaLocalizacion findOneByIdPersonaLocalizacion(int $id_persona_localizacion) Return the first PersonaLocalizacion filtered by the id_persona_localizacion column
 * @method     PersonaLocalizacion findOneByIdLocalizacion(int $id_localizacion) Return the first PersonaLocalizacion filtered by the id_localizacion column
 * @method     PersonaLocalizacion findOneByIdPersona(int $id_persona) Return the first PersonaLocalizacion filtered by the id_persona column
 *
 * @method     array findByIdPersonaLocalizacion(int $id_persona_localizacion) Return PersonaLocalizacion objects filtered by the id_persona_localizacion column
 * @method     array findByIdLocalizacion(int $id_localizacion) Return PersonaLocalizacion objects filtered by the id_localizacion column
 * @method     array findByIdPersona(int $id_persona) Return PersonaLocalizacion objects filtered by the id_persona column
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePersonaLocalizacionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePersonaLocalizacionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'PersonaLocalizacion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PersonaLocalizacionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PersonaLocalizacionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PersonaLocalizacionQuery) {
			return $criteria;
		}
		$query = new PersonaLocalizacionQuery();
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
	 * @return    PersonaLocalizacion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PersonaLocalizacionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA_LOCALIZACION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA_LOCALIZACION, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_persona_localizacion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdPersonaLocalizacion(1234); // WHERE id_persona_localizacion = 1234
	 * $query->filterByIdPersonaLocalizacion(array(12, 34)); // WHERE id_persona_localizacion IN (12, 34)
	 * $query->filterByIdPersonaLocalizacion(array('min' => 12)); // WHERE id_persona_localizacion > 12
	 * </code>
	 *
	 * @param     mixed $idPersonaLocalizacion The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByIdPersonaLocalizacion($idPersonaLocalizacion = null, $comparison = null)
	{
		if (is_array($idPersonaLocalizacion) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA_LOCALIZACION, $idPersonaLocalizacion, $comparison);
	}

	/**
	 * Filter the query on the id_localizacion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdLocalizacion(1234); // WHERE id_localizacion = 1234
	 * $query->filterByIdLocalizacion(array(12, 34)); // WHERE id_localizacion IN (12, 34)
	 * $query->filterByIdLocalizacion(array('min' => 12)); // WHERE id_localizacion > 12
	 * </code>
	 *
	 * @see       filterByLocalizacion()
	 *
	 * @param     mixed $idLocalizacion The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByIdLocalizacion($idLocalizacion = null, $comparison = null)
	{
		if (is_array($idLocalizacion)) {
			$useMinMax = false;
			if (isset($idLocalizacion['min'])) {
				$this->addUsingAlias(PersonaLocalizacionPeer::ID_LOCALIZACION, $idLocalizacion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLocalizacion['max'])) {
				$this->addUsingAlias(PersonaLocalizacionPeer::ID_LOCALIZACION, $idLocalizacion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaLocalizacionPeer::ID_LOCALIZACION, $idLocalizacion, $comparison);
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
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA, $idPersona, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
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
	 * Filter the query by a related Localizacion object
	 *
	 * @param     Localizacion|PropelCollection $localizacion The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function filterByLocalizacion($localizacion, $comparison = null)
	{
		if ($localizacion instanceof Localizacion) {
			return $this
				->addUsingAlias(PersonaLocalizacionPeer::ID_LOCALIZACION, $localizacion->getIdLocalizacion(), $comparison);
		} elseif ($localizacion instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PersonaLocalizacionPeer::ID_LOCALIZACION, $localizacion->toKeyValue('PrimaryKey', 'IdLocalizacion'), $comparison);
		} else {
			throw new PropelException('filterByLocalizacion() only accepts arguments of type Localizacion or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Localizacion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function joinLocalizacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Localizacion');
		
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
			$this->addJoinObject($join, 'Localizacion');
		}
		
		return $this;
	}

	/**
	 * Use the Localizacion relation Localizacion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocalizacionQuery A secondary query class using the current class as primary query
	 */
	public function useLocalizacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLocalizacion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Localizacion', 'LocalizacionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PersonaLocalizacion $personaLocalizacion Object to remove from the list of results
	 *
	 * @return    PersonaLocalizacionQuery The current query, for fluid interface
	 */
	public function prune($personaLocalizacion = null)
	{
		if ($personaLocalizacion) {
			$this->addUsingAlias(PersonaLocalizacionPeer::ID_PERSONA_LOCALIZACION, $personaLocalizacion->getIdPersonaLocalizacion(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePersonaLocalizacionQuery
