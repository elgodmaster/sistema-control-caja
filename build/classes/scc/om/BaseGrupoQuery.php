<?php


/**
 * Base class that represents a query for the 'grupo' table.
 *
 * 
 *
 * @method     GrupoQuery orderByIdGrupo($order = Criteria::ASC) Order by the id_grupo column
 * @method     GrupoQuery orderByIdOrden($order = Criteria::ASC) Order by the id_orden column
 * @method     GrupoQuery orderByIdMesa($order = Criteria::ASC) Order by the id_mesa column
 * @method     GrupoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     GrupoQuery orderByFechaCreacion($order = Criteria::ASC) Order by the fecha_creacion column
 * @method     GrupoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method     GrupoQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 *
 * @method     GrupoQuery groupByIdGrupo() Group by the id_grupo column
 * @method     GrupoQuery groupByIdOrden() Group by the id_orden column
 * @method     GrupoQuery groupByIdMesa() Group by the id_mesa column
 * @method     GrupoQuery groupByDescripcion() Group by the descripcion column
 * @method     GrupoQuery groupByFechaCreacion() Group by the fecha_creacion column
 * @method     GrupoQuery groupByEstado() Group by the estado column
 * @method     GrupoQuery groupByTipo() Group by the tipo column
 *
 * @method     GrupoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GrupoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GrupoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GrupoQuery leftJoinMesa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mesa relation
 * @method     GrupoQuery rightJoinMesa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mesa relation
 * @method     GrupoQuery innerJoinMesa($relationAlias = null) Adds a INNER JOIN clause to the query using the Mesa relation
 *
 * @method     GrupoQuery leftJoinOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orden relation
 * @method     GrupoQuery rightJoinOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orden relation
 * @method     GrupoQuery innerJoinOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the Orden relation
 *
 * @method     Grupo findOne(PropelPDO $con = null) Return the first Grupo matching the query
 * @method     Grupo findOneOrCreate(PropelPDO $con = null) Return the first Grupo matching the query, or a new Grupo object populated from the query conditions when no match is found
 *
 * @method     Grupo findOneByIdGrupo(int $id_grupo) Return the first Grupo filtered by the id_grupo column
 * @method     Grupo findOneByIdOrden(int $id_orden) Return the first Grupo filtered by the id_orden column
 * @method     Grupo findOneByIdMesa(int $id_mesa) Return the first Grupo filtered by the id_mesa column
 * @method     Grupo findOneByDescripcion(string $descripcion) Return the first Grupo filtered by the descripcion column
 * @method     Grupo findOneByFechaCreacion(string $fecha_creacion) Return the first Grupo filtered by the fecha_creacion column
 * @method     Grupo findOneByEstado(string $estado) Return the first Grupo filtered by the estado column
 * @method     Grupo findOneByTipo(string $tipo) Return the first Grupo filtered by the tipo column
 *
 * @method     array findByIdGrupo(int $id_grupo) Return Grupo objects filtered by the id_grupo column
 * @method     array findByIdOrden(int $id_orden) Return Grupo objects filtered by the id_orden column
 * @method     array findByIdMesa(int $id_mesa) Return Grupo objects filtered by the id_mesa column
 * @method     array findByDescripcion(string $descripcion) Return Grupo objects filtered by the descripcion column
 * @method     array findByFechaCreacion(string $fecha_creacion) Return Grupo objects filtered by the fecha_creacion column
 * @method     array findByEstado(string $estado) Return Grupo objects filtered by the estado column
 * @method     array findByTipo(string $tipo) Return Grupo objects filtered by the tipo column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseGrupoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGrupoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Grupo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GrupoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GrupoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GrupoQuery) {
			return $criteria;
		}
		$query = new GrupoQuery();
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
	 * @return    Grupo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GrupoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GrupoPeer::ID_GRUPO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GrupoPeer::ID_GRUPO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_grupo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdGrupo(1234); // WHERE id_grupo = 1234
	 * $query->filterByIdGrupo(array(12, 34)); // WHERE id_grupo IN (12, 34)
	 * $query->filterByIdGrupo(array('min' => 12)); // WHERE id_grupo > 12
	 * </code>
	 *
	 * @param     mixed $idGrupo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByIdGrupo($idGrupo = null, $comparison = null)
	{
		if (is_array($idGrupo) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GrupoPeer::ID_GRUPO, $idGrupo, $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByIdOrden($idOrden = null, $comparison = null)
	{
		if (is_array($idOrden)) {
			$useMinMax = false;
			if (isset($idOrden['min'])) {
				$this->addUsingAlias(GrupoPeer::ID_ORDEN, $idOrden['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrden['max'])) {
				$this->addUsingAlias(GrupoPeer::ID_ORDEN, $idOrden['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GrupoPeer::ID_ORDEN, $idOrden, $comparison);
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
	 * @see       filterByMesa()
	 *
	 * @param     mixed $idMesa The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByIdMesa($idMesa = null, $comparison = null)
	{
		if (is_array($idMesa)) {
			$useMinMax = false;
			if (isset($idMesa['min'])) {
				$this->addUsingAlias(GrupoPeer::ID_MESA, $idMesa['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idMesa['max'])) {
				$this->addUsingAlias(GrupoPeer::ID_MESA, $idMesa['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GrupoPeer::ID_MESA, $idMesa, $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GrupoPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query on the fecha_creacion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaCreacion('2011-03-14'); // WHERE fecha_creacion = '2011-03-14'
	 * $query->filterByFechaCreacion('now'); // WHERE fecha_creacion = '2011-03-14'
	 * $query->filterByFechaCreacion(array('max' => 'yesterday')); // WHERE fecha_creacion > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaCreacion The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByFechaCreacion($fechaCreacion = null, $comparison = null)
	{
		if (is_array($fechaCreacion)) {
			$useMinMax = false;
			if (isset($fechaCreacion['min'])) {
				$this->addUsingAlias(GrupoPeer::FECHA_CREACION, $fechaCreacion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaCreacion['max'])) {
				$this->addUsingAlias(GrupoPeer::FECHA_CREACION, $fechaCreacion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GrupoPeer::FECHA_CREACION, $fechaCreacion, $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GrupoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query on the tipo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTipo('fooValue');   // WHERE tipo = 'fooValue'
	 * $query->filterByTipo('%fooValue%'); // WHERE tipo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tipo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByTipo($tipo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tipo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tipo)) {
				$tipo = str_replace('*', '%', $tipo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GrupoPeer::TIPO, $tipo, $comparison);
	}

	/**
	 * Filter the query by a related Mesa object
	 *
	 * @param     Mesa|PropelCollection $mesa The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByMesa($mesa, $comparison = null)
	{
		if ($mesa instanceof Mesa) {
			return $this
				->addUsingAlias(GrupoPeer::ID_MESA, $mesa->getIdMesa(), $comparison);
		} elseif ($mesa instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GrupoPeer::ID_MESA, $mesa->toKeyValue('PrimaryKey', 'IdMesa'), $comparison);
		} else {
			throw new PropelException('filterByMesa() only accepts arguments of type Mesa or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Mesa relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function joinMesa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Mesa');
		
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
			$this->addJoinObject($join, 'Mesa');
		}
		
		return $this;
	}

	/**
	 * Use the Mesa relation Mesa object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MesaQuery A secondary query class using the current class as primary query
	 */
	public function useMesaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMesa($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Mesa', 'MesaQuery');
	}

	/**
	 * Filter the query by a related Orden object
	 *
	 * @param     Orden|PropelCollection $orden The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden, $comparison = null)
	{
		if ($orden instanceof Orden) {
			return $this
				->addUsingAlias(GrupoPeer::ID_ORDEN, $orden->getIdOrden(), $comparison);
		} elseif ($orden instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GrupoPeer::ID_ORDEN, $orden->toKeyValue('PrimaryKey', 'IdOrden'), $comparison);
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
	 * @return    GrupoQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Grupo $grupo Object to remove from the list of results
	 *
	 * @return    GrupoQuery The current query, for fluid interface
	 */
	public function prune($grupo = null)
	{
		if ($grupo) {
			$this->addUsingAlias(GrupoPeer::ID_GRUPO, $grupo->getIdGrupo(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGrupoQuery
