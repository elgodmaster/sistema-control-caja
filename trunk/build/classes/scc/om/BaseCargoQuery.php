<?php


/**
 * Base class that represents a query for the 'cargo' table.
 *
 * 
 *
 * @method     CargoQuery orderByIdCargo($order = Criteria::ASC) Order by the id_cargo column
 * @method     CargoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     CargoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     CargoQuery groupByIdCargo() Group by the id_cargo column
 * @method     CargoQuery groupByDescripcion() Group by the descripcion column
 * @method     CargoQuery groupByEstado() Group by the estado column
 *
 * @method     CargoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CargoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CargoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CargoQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     CargoQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     CargoQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     Cargo findOne(PropelPDO $con = null) Return the first Cargo matching the query
 * @method     Cargo findOneOrCreate(PropelPDO $con = null) Return the first Cargo matching the query, or a new Cargo object populated from the query conditions when no match is found
 *
 * @method     Cargo findOneByIdCargo(int $id_cargo) Return the first Cargo filtered by the id_cargo column
 * @method     Cargo findOneByDescripcion(string $descripcion) Return the first Cargo filtered by the descripcion column
 * @method     Cargo findOneByEstado(string $estado) Return the first Cargo filtered by the estado column
 *
 * @method     array findByIdCargo(int $id_cargo) Return Cargo objects filtered by the id_cargo column
 * @method     array findByDescripcion(string $descripcion) Return Cargo objects filtered by the descripcion column
 * @method     array findByEstado(string $estado) Return Cargo objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseCargoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCargoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Cargo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CargoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CargoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CargoQuery) {
			return $criteria;
		}
		$query = new CargoQuery();
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
	 * @return    Cargo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CargoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CargoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CargoPeer::ID_CARGO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CargoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CargoPeer::ID_CARGO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cargo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdCargo(1234); // WHERE id_cargo = 1234
	 * $query->filterByIdCargo(array(12, 34)); // WHERE id_cargo IN (12, 34)
	 * $query->filterByIdCargo(array('min' => 12)); // WHERE id_cargo > 12
	 * </code>
	 *
	 * @param     mixed $idCargo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CargoQuery The current query, for fluid interface
	 */
	public function filterByIdCargo($idCargo = null, $comparison = null)
	{
		if (is_array($idCargo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CargoPeer::ID_CARGO, $idCargo, $comparison);
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
	 * @return    CargoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CargoPeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    CargoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CargoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona $persona  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CargoQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(CargoPeer::ID_CARGO, $persona->getIdCargo(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			return $this
				->usePersonaQuery()
					->filterByPrimaryKeys($persona->getPrimaryKeys())
				->endUse();
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
	 * @return    CargoQuery The current query, for fluid interface
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
	 * @param     Cargo $cargo Object to remove from the list of results
	 *
	 * @return    CargoQuery The current query, for fluid interface
	 */
	public function prune($cargo = null)
	{
		if ($cargo) {
			$this->addUsingAlias(CargoPeer::ID_CARGO, $cargo->getIdCargo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCargoQuery
