<?php


/**
 * Base class that represents a query for the 'mesa' table.
 *
 * 
 *
 * @method     MesaQuery orderByIdMesa($order = Criteria::ASC) Order by the id_mesa column
 * @method     MesaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     MesaQuery orderByCodigo($order = Criteria::ASC) Order by the codigo column
 * @method     MesaQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     MesaQuery groupByIdMesa() Group by the id_mesa column
 * @method     MesaQuery groupByDescripcion() Group by the descripcion column
 * @method     MesaQuery groupByCodigo() Group by the codigo column
 * @method     MesaQuery groupByEstado() Group by the estado column
 *
 * @method     MesaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MesaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MesaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MesaQuery leftJoinGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupo relation
 * @method     MesaQuery rightJoinGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupo relation
 * @method     MesaQuery innerJoinGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupo relation
 *
 * @method     Mesa findOne(PropelPDO $con = null) Return the first Mesa matching the query
 * @method     Mesa findOneOrCreate(PropelPDO $con = null) Return the first Mesa matching the query, or a new Mesa object populated from the query conditions when no match is found
 *
 * @method     Mesa findOneByIdMesa(int $id_mesa) Return the first Mesa filtered by the id_mesa column
 * @method     Mesa findOneByDescripcion(string $descripcion) Return the first Mesa filtered by the descripcion column
 * @method     Mesa findOneByCodigo(string $codigo) Return the first Mesa filtered by the codigo column
 * @method     Mesa findOneByEstado(string $estado) Return the first Mesa filtered by the estado column
 *
 * @method     array findByIdMesa(int $id_mesa) Return Mesa objects filtered by the id_mesa column
 * @method     array findByDescripcion(string $descripcion) Return Mesa objects filtered by the descripcion column
 * @method     array findByCodigo(string $codigo) Return Mesa objects filtered by the codigo column
 * @method     array findByEstado(string $estado) Return Mesa objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseMesaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMesaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'Mesa', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MesaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MesaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MesaQuery) {
			return $criteria;
		}
		$query = new MesaQuery();
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
	 * @return    Mesa|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MesaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MesaPeer::ID_MESA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MesaPeer::ID_MESA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_mesa column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdMesa(1234); // WHERE id_mesa = 1234
	 * $query->filterByIdMesa(array(12, 34)); // WHERE id_mesa IN (12, 34)
	 * $query->filterByIdMesa(array('min' => 12)); // WHERE id_mesa > 12
	 * </code>
	 *
	 * @param     mixed $idMesa The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function filterByIdMesa($idMesa = null, $comparison = null)
	{
		if (is_array($idMesa) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MesaPeer::ID_MESA, $idMesa, $comparison);
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
	 * @return    MesaQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MesaPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query on the codigo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCodigo('fooValue');   // WHERE codigo = 'fooValue'
	 * $query->filterByCodigo('%fooValue%'); // WHERE codigo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $codigo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function filterByCodigo($codigo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($codigo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $codigo)) {
				$codigo = str_replace('*', '%', $codigo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MesaPeer::CODIGO, $codigo, $comparison);
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
	 * @return    MesaQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MesaPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Grupo object
	 *
	 * @param     Grupo $grupo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function filterByGrupo($grupo, $comparison = null)
	{
		if ($grupo instanceof Grupo) {
			return $this
				->addUsingAlias(MesaPeer::ID_MESA, $grupo->getIdMesa(), $comparison);
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
	 * @return    MesaQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Mesa $mesa Object to remove from the list of results
	 *
	 * @return    MesaQuery The current query, for fluid interface
	 */
	public function prune($mesa = null)
	{
		if ($mesa) {
			$this->addUsingAlias(MesaPeer::ID_MESA, $mesa->getIdMesa(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMesaQuery
