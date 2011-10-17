<?php


/**
 * Base class that represents a query for the 'ingreso_egreso' table.
 *
 * 
 *
 * @method     IngresoEgresoQuery orderByIdIngresoEgreso($order = Criteria::ASC) Order by the id_ingreso_egreso column
 * @method     IngresoEgresoQuery orderByIdCuadreCaja($order = Criteria::ASC) Order by the id_cuadre_caja column
 * @method     IngresoEgresoQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     IngresoEgresoQuery orderByValor($order = Criteria::ASC) Order by the valor column
 * @method     IngresoEgresoQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     IngresoEgresoQuery orderByComentario($order = Criteria::ASC) Order by the comentario column
 * @method     IngresoEgresoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     IngresoEgresoQuery groupByIdIngresoEgreso() Group by the id_ingreso_egreso column
 * @method     IngresoEgresoQuery groupByIdCuadreCaja() Group by the id_cuadre_caja column
 * @method     IngresoEgresoQuery groupByFechaHora() Group by the fecha_hora column
 * @method     IngresoEgresoQuery groupByValor() Group by the valor column
 * @method     IngresoEgresoQuery groupByTipo() Group by the tipo column
 * @method     IngresoEgresoQuery groupByComentario() Group by the comentario column
 * @method     IngresoEgresoQuery groupByEstado() Group by the estado column
 *
 * @method     IngresoEgresoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     IngresoEgresoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     IngresoEgresoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     IngresoEgresoQuery leftJoinCuadreCaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuadreCaja relation
 * @method     IngresoEgresoQuery rightJoinCuadreCaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuadreCaja relation
 * @method     IngresoEgresoQuery innerJoinCuadreCaja($relationAlias = null) Adds a INNER JOIN clause to the query using the CuadreCaja relation
 *
 * @method     IngresoEgreso findOne(PropelPDO $con = null) Return the first IngresoEgreso matching the query
 * @method     IngresoEgreso findOneOrCreate(PropelPDO $con = null) Return the first IngresoEgreso matching the query, or a new IngresoEgreso object populated from the query conditions when no match is found
 *
 * @method     IngresoEgreso findOneByIdIngresoEgreso(int $id_ingreso_egreso) Return the first IngresoEgreso filtered by the id_ingreso_egreso column
 * @method     IngresoEgreso findOneByIdCuadreCaja(int $id_cuadre_caja) Return the first IngresoEgreso filtered by the id_cuadre_caja column
 * @method     IngresoEgreso findOneByFechaHora(string $fecha_hora) Return the first IngresoEgreso filtered by the fecha_hora column
 * @method     IngresoEgreso findOneByValor(string $valor) Return the first IngresoEgreso filtered by the valor column
 * @method     IngresoEgreso findOneByTipo(string $tipo) Return the first IngresoEgreso filtered by the tipo column
 * @method     IngresoEgreso findOneByComentario(string $comentario) Return the first IngresoEgreso filtered by the comentario column
 * @method     IngresoEgreso findOneByEstado(string $estado) Return the first IngresoEgreso filtered by the estado column
 *
 * @method     array findByIdIngresoEgreso(int $id_ingreso_egreso) Return IngresoEgreso objects filtered by the id_ingreso_egreso column
 * @method     array findByIdCuadreCaja(int $id_cuadre_caja) Return IngresoEgreso objects filtered by the id_cuadre_caja column
 * @method     array findByFechaHora(string $fecha_hora) Return IngresoEgreso objects filtered by the fecha_hora column
 * @method     array findByValor(string $valor) Return IngresoEgreso objects filtered by the valor column
 * @method     array findByTipo(string $tipo) Return IngresoEgreso objects filtered by the tipo column
 * @method     array findByComentario(string $comentario) Return IngresoEgreso objects filtered by the comentario column
 * @method     array findByEstado(string $estado) Return IngresoEgreso objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseIngresoEgresoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseIngresoEgresoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'IngresoEgreso', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new IngresoEgresoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    IngresoEgresoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof IngresoEgresoQuery) {
			return $criteria;
		}
		$query = new IngresoEgresoQuery();
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
	 * @return    IngresoEgreso|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = IngresoEgresoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(IngresoEgresoPeer::ID_INGRESO_EGRESO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(IngresoEgresoPeer::ID_INGRESO_EGRESO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_ingreso_egreso column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdIngresoEgreso(1234); // WHERE id_ingreso_egreso = 1234
	 * $query->filterByIdIngresoEgreso(array(12, 34)); // WHERE id_ingreso_egreso IN (12, 34)
	 * $query->filterByIdIngresoEgreso(array('min' => 12)); // WHERE id_ingreso_egreso > 12
	 * </code>
	 *
	 * @param     mixed $idIngresoEgreso The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByIdIngresoEgreso($idIngresoEgreso = null, $comparison = null)
	{
		if (is_array($idIngresoEgreso) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(IngresoEgresoPeer::ID_INGRESO_EGRESO, $idIngresoEgreso, $comparison);
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByIdCuadreCaja($idCuadreCaja = null, $comparison = null)
	{
		if (is_array($idCuadreCaja)) {
			$useMinMax = false;
			if (isset($idCuadreCaja['min'])) {
				$this->addUsingAlias(IngresoEgresoPeer::ID_CUADRE_CAJA, $idCuadreCaja['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCuadreCaja['max'])) {
				$this->addUsingAlias(IngresoEgresoPeer::ID_CUADRE_CAJA, $idCuadreCaja['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(IngresoEgresoPeer::ID_CUADRE_CAJA, $idCuadreCaja, $comparison);
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(IngresoEgresoPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(IngresoEgresoPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(IngresoEgresoPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query on the valor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValor(1234); // WHERE valor = 1234
	 * $query->filterByValor(array(12, 34)); // WHERE valor IN (12, 34)
	 * $query->filterByValor(array('min' => 12)); // WHERE valor > 12
	 * </code>
	 *
	 * @param     mixed $valor The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByValor($valor = null, $comparison = null)
	{
		if (is_array($valor)) {
			$useMinMax = false;
			if (isset($valor['min'])) {
				$this->addUsingAlias(IngresoEgresoPeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valor['max'])) {
				$this->addUsingAlias(IngresoEgresoPeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(IngresoEgresoPeer::VALOR, $valor, $comparison);
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(IngresoEgresoPeer::TIPO, $tipo, $comparison);
	}

	/**
	 * Filter the query on the comentario column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByComentario('fooValue');   // WHERE comentario = 'fooValue'
	 * $query->filterByComentario('%fooValue%'); // WHERE comentario LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $comentario The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comentario)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comentario)) {
				$comentario = str_replace('*', '%', $comentario);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(IngresoEgresoPeer::COMENTARIO, $comentario, $comparison);
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(IngresoEgresoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related CuadreCaja object
	 *
	 * @param     CuadreCaja|PropelCollection $cuadreCaja The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function filterByCuadreCaja($cuadreCaja, $comparison = null)
	{
		if ($cuadreCaja instanceof CuadreCaja) {
			return $this
				->addUsingAlias(IngresoEgresoPeer::ID_CUADRE_CAJA, $cuadreCaja->getIdCuadreCaja(), $comparison);
		} elseif ($cuadreCaja instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(IngresoEgresoPeer::ID_CUADRE_CAJA, $cuadreCaja->toKeyValue('PrimaryKey', 'IdCuadreCaja'), $comparison);
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
	 * @return    IngresoEgresoQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     IngresoEgreso $ingresoEgreso Object to remove from the list of results
	 *
	 * @return    IngresoEgresoQuery The current query, for fluid interface
	 */
	public function prune($ingresoEgreso = null)
	{
		if ($ingresoEgreso) {
			$this->addUsingAlias(IngresoEgresoPeer::ID_INGRESO_EGRESO, $ingresoEgreso->getIdIngresoEgreso(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseIngresoEgresoQuery
