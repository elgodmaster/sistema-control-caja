<?php


/**
 * Base class that represents a query for the 'menu' table.
 *
 * 
 *
 * @method     MenuQuery orderByIdMenu($order = Criteria::ASC) Order by the id_menu column
 * @method     MenuQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     MenuQuery orderByIdMenuPadre($order = Criteria::ASC) Order by the id_menu_padre column
 * @method     MenuQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method     MenuQuery orderByNivel($order = Criteria::ASC) Order by the nivel column
 * @method     MenuQuery orderByOrden($order = Criteria::ASC) Order by the orden column
 * @method     MenuQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     MenuQuery groupByIdMenu() Group by the id_menu column
 * @method     MenuQuery groupByDescripcion() Group by the descripcion column
 * @method     MenuQuery groupByIdMenuPadre() Group by the id_menu_padre column
 * @method     MenuQuery groupByLink() Group by the link column
 * @method     MenuQuery groupByNivel() Group by the nivel column
 * @method     MenuQuery groupByOrden() Group by the orden column
 * @method     MenuQuery groupByEstado() Group by the estado column
 *
 * @method     MenuQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MenuQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MenuQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MenuQuery leftJoinMenuPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the MenuPersona relation
 * @method     MenuQuery rightJoinMenuPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MenuPersona relation
 * @method     MenuQuery innerJoinMenuPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the MenuPersona relation
 *
 * @method     Menu findOne(PropelPDO $con = null) Return the first Menu matching the query
 * @method     Menu findOneOrCreate(PropelPDO $con = null) Return the first Menu matching the query, or a new Menu object populated from the query conditions when no match is found
 *
 * @method     Menu findOneByIdMenu(int $id_menu) Return the first Menu filtered by the id_menu column
 * @method     Menu findOneByDescripcion(string $descripcion) Return the first Menu filtered by the descripcion column
 * @method     Menu findOneByIdMenuPadre(int $id_menu_padre) Return the first Menu filtered by the id_menu_padre column
 * @method     Menu findOneByLink(string $link) Return the first Menu filtered by the link column
 * @method     Menu findOneByNivel(int $nivel) Return the first Menu filtered by the nivel column
 * @method     Menu findOneByOrden(int $orden) Return the first Menu filtered by the orden column
 * @method     Menu findOneByEstado(string $estado) Return the first Menu filtered by the estado column
 *
 * @method     array findByIdMenu(int $id_menu) Return Menu objects filtered by the id_menu column
 * @method     array findByDescripcion(string $descripcion) Return Menu objects filtered by the descripcion column
 * @method     array findByIdMenuPadre(int $id_menu_padre) Return Menu objects filtered by the id_menu_padre column
 * @method     array findByLink(string $link) Return Menu objects filtered by the link column
 * @method     array findByNivel(int $nivel) Return Menu objects filtered by the nivel column
 * @method     array findByOrden(int $orden) Return Menu objects filtered by the orden column
 * @method     array findByEstado(string $estado) Return Menu objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseMenuQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMenuQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Menu', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MenuQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MenuQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MenuQuery) {
			return $criteria;
		}
		$query = new MenuQuery();
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
	 * @return    Menu|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MenuPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MenuPeer::ID_MENU, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MenuPeer::ID_MENU, $keys, Criteria::IN);
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
	 * @param     mixed $idMenu The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByIdMenu($idMenu = null, $comparison = null)
	{
		if (is_array($idMenu) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MenuPeer::ID_MENU, $idMenu, $comparison);
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
	 * @return    MenuQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MenuPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query on the id_menu_padre column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdMenuPadre(1234); // WHERE id_menu_padre = 1234
	 * $query->filterByIdMenuPadre(array(12, 34)); // WHERE id_menu_padre IN (12, 34)
	 * $query->filterByIdMenuPadre(array('min' => 12)); // WHERE id_menu_padre > 12
	 * </code>
	 *
	 * @param     mixed $idMenuPadre The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByIdMenuPadre($idMenuPadre = null, $comparison = null)
	{
		if (is_array($idMenuPadre)) {
			$useMinMax = false;
			if (isset($idMenuPadre['min'])) {
				$this->addUsingAlias(MenuPeer::ID_MENU_PADRE, $idMenuPadre['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idMenuPadre['max'])) {
				$this->addUsingAlias(MenuPeer::ID_MENU_PADRE, $idMenuPadre['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MenuPeer::ID_MENU_PADRE, $idMenuPadre, $comparison);
	}

	/**
	 * Filter the query on the link column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLink('fooValue');   // WHERE link = 'fooValue'
	 * $query->filterByLink('%fooValue%'); // WHERE link LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $link The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByLink($link = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($link)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $link)) {
				$link = str_replace('*', '%', $link);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MenuPeer::LINK, $link, $comparison);
	}

	/**
	 * Filter the query on the nivel column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNivel(1234); // WHERE nivel = 1234
	 * $query->filterByNivel(array(12, 34)); // WHERE nivel IN (12, 34)
	 * $query->filterByNivel(array('min' => 12)); // WHERE nivel > 12
	 * </code>
	 *
	 * @param     mixed $nivel The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByNivel($nivel = null, $comparison = null)
	{
		if (is_array($nivel)) {
			$useMinMax = false;
			if (isset($nivel['min'])) {
				$this->addUsingAlias(MenuPeer::NIVEL, $nivel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nivel['max'])) {
				$this->addUsingAlias(MenuPeer::NIVEL, $nivel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MenuPeer::NIVEL, $nivel, $comparison);
	}

	/**
	 * Filter the query on the orden column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOrden(1234); // WHERE orden = 1234
	 * $query->filterByOrden(array(12, 34)); // WHERE orden IN (12, 34)
	 * $query->filterByOrden(array('min' => 12)); // WHERE orden > 12
	 * </code>
	 *
	 * @param     mixed $orden The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden = null, $comparison = null)
	{
		if (is_array($orden)) {
			$useMinMax = false;
			if (isset($orden['min'])) {
				$this->addUsingAlias(MenuPeer::ORDEN, $orden['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($orden['max'])) {
				$this->addUsingAlias(MenuPeer::ORDEN, $orden['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MenuPeer::ORDEN, $orden, $comparison);
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
	 * @return    MenuQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MenuPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related MenuPersona object
	 *
	 * @param     MenuPersona $menuPersona  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function filterByMenuPersona($menuPersona, $comparison = null)
	{
		if ($menuPersona instanceof MenuPersona) {
			return $this
				->addUsingAlias(MenuPeer::ID_MENU, $menuPersona->getIdMenu(), $comparison);
		} elseif ($menuPersona instanceof PropelCollection) {
			return $this
				->useMenuPersonaQuery()
					->filterByPrimaryKeys($menuPersona->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByMenuPersona() only accepts arguments of type MenuPersona or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the MenuPersona relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function joinMenuPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('MenuPersona');
		
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
			$this->addJoinObject($join, 'MenuPersona');
		}
		
		return $this;
	}

	/**
	 * Use the MenuPersona relation MenuPersona object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MenuPersonaQuery A secondary query class using the current class as primary query
	 */
	public function useMenuPersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMenuPersona($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'MenuPersona', 'MenuPersonaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Menu $menu Object to remove from the list of results
	 *
	 * @return    MenuQuery The current query, for fluid interface
	 */
	public function prune($menu = null)
	{
		if ($menu) {
			$this->addUsingAlias(MenuPeer::ID_MENU, $menu->getIdMenu(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMenuQuery
