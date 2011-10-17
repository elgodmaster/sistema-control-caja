<?php


/**
 * Base class that represents a query for the 'menu_persona' table.
 *
 * 
 *
 * @method     MenuPersonaQuery orderByIdMenuPersona($order = Criteria::ASC) Order by the id_menu_persona column
 * @method     MenuPersonaQuery orderByIdMenu($order = Criteria::ASC) Order by the id_menu column
 * @method     MenuPersonaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 *
 * @method     MenuPersonaQuery groupByIdMenuPersona() Group by the id_menu_persona column
 * @method     MenuPersonaQuery groupByIdMenu() Group by the id_menu column
 * @method     MenuPersonaQuery groupByIdPersona() Group by the id_persona column
 *
 * @method     MenuPersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MenuPersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MenuPersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MenuPersonaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     MenuPersonaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     MenuPersonaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     MenuPersonaQuery leftJoinMenu($relationAlias = null) Adds a LEFT JOIN clause to the query using the Menu relation
 * @method     MenuPersonaQuery rightJoinMenu($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Menu relation
 * @method     MenuPersonaQuery innerJoinMenu($relationAlias = null) Adds a INNER JOIN clause to the query using the Menu relation
 *
 * @method     MenuPersona findOne(PropelPDO $con = null) Return the first MenuPersona matching the query
 * @method     MenuPersona findOneOrCreate(PropelPDO $con = null) Return the first MenuPersona matching the query, or a new MenuPersona object populated from the query conditions when no match is found
 *
 * @method     MenuPersona findOneByIdMenuPersona(int $id_menu_persona) Return the first MenuPersona filtered by the id_menu_persona column
 * @method     MenuPersona findOneByIdMenu(int $id_menu) Return the first MenuPersona filtered by the id_menu column
 * @method     MenuPersona findOneByIdPersona(int $id_persona) Return the first MenuPersona filtered by the id_persona column
 *
 * @method     array findByIdMenuPersona(int $id_menu_persona) Return MenuPersona objects filtered by the id_menu_persona column
 * @method     array findByIdMenu(int $id_menu) Return MenuPersona objects filtered by the id_menu column
 * @method     array findByIdPersona(int $id_persona) Return MenuPersona objects filtered by the id_persona column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseMenuPersonaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMenuPersonaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'MenuPersona', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MenuPersonaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MenuPersonaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MenuPersonaQuery) {
			return $criteria;
		}
		$query = new MenuPersonaQuery();
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
	 * @return    MenuPersona|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MenuPersonaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MenuPersonaPeer::ID_MENU_PERSONA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MenuPersonaPeer::ID_MENU_PERSONA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_menu_persona column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdMenuPersona(1234); // WHERE id_menu_persona = 1234
	 * $query->filterByIdMenuPersona(array(12, 34)); // WHERE id_menu_persona IN (12, 34)
	 * $query->filterByIdMenuPersona(array('min' => 12)); // WHERE id_menu_persona > 12
	 * </code>
	 *
	 * @param     mixed $idMenuPersona The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByIdMenuPersona($idMenuPersona = null, $comparison = null)
	{
		if (is_array($idMenuPersona) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MenuPersonaPeer::ID_MENU_PERSONA, $idMenuPersona, $comparison);
	}

	/**
	 * Filter the query on the id_menu column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdMenu(1234); // WHERE id_menu = 1234
	 * $query->filterByIdMenu(array(12, 34)); // WHERE id_menu IN (12, 34)
	 * $query->filterByIdMenu(array('min' => 12)); // WHERE id_menu > 12
	 * </code>
	 *
	 * @see       filterByMenu()
	 *
	 * @param     mixed $idMenu The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByIdMenu($idMenu = null, $comparison = null)
	{
		if (is_array($idMenu)) {
			$useMinMax = false;
			if (isset($idMenu['min'])) {
				$this->addUsingAlias(MenuPersonaPeer::ID_MENU, $idMenu['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idMenu['max'])) {
				$this->addUsingAlias(MenuPersonaPeer::ID_MENU, $idMenu['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MenuPersonaPeer::ID_MENU, $idMenu, $comparison);
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
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(MenuPersonaPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(MenuPersonaPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MenuPersonaPeer::ID_PERSONA, $idPersona, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(MenuPersonaPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MenuPersonaPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    MenuPersonaQuery The current query, for fluid interface
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
	 * Filter the query by a related Menu object
	 *
	 * @param     Menu|PropelCollection $menu The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function filterByMenu($menu, $comparison = null)
	{
		if ($menu instanceof Menu) {
			return $this
				->addUsingAlias(MenuPersonaPeer::ID_MENU, $menu->getIdMenu(), $comparison);
		} elseif ($menu instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MenuPersonaPeer::ID_MENU, $menu->toKeyValue('PrimaryKey', 'IdMenu'), $comparison);
		} else {
			throw new PropelException('filterByMenu() only accepts arguments of type Menu or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Menu relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function joinMenu($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Menu');
		
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
			$this->addJoinObject($join, 'Menu');
		}
		
		return $this;
	}

	/**
	 * Use the Menu relation Menu object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MenuQuery A secondary query class using the current class as primary query
	 */
	public function useMenuQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMenu($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Menu', 'MenuQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     MenuPersona $menuPersona Object to remove from the list of results
	 *
	 * @return    MenuPersonaQuery The current query, for fluid interface
	 */
	public function prune($menuPersona = null)
	{
		if ($menuPersona) {
			$this->addUsingAlias(MenuPersonaPeer::ID_MENU_PERSONA, $menuPersona->getIdMenuPersona(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMenuPersonaQuery
