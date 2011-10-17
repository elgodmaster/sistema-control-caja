<?php


/**
 * Base class that represents a query for the 'log' table.
 *
 * 
 *
 * @method     LogQuery orderByIdLog($order = Criteria::ASC) Order by the id_log column
 * @method     LogQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     LogQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     LogQuery orderByModulo($order = Criteria::ASC) Order by the modulo column
 * @method     LogQuery orderByDetalle($order = Criteria::ASC) Order by the detalle column
 * @method     LogQuery orderByAccion($order = Criteria::ASC) Order by the accion column
 *
 * @method     LogQuery groupByIdLog() Group by the id_log column
 * @method     LogQuery groupByIdPersona() Group by the id_persona column
 * @method     LogQuery groupByFechaHora() Group by the fecha_hora column
 * @method     LogQuery groupByModulo() Group by the modulo column
 * @method     LogQuery groupByDetalle() Group by the detalle column
 * @method     LogQuery groupByAccion() Group by the accion column
 *
 * @method     LogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LogQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     LogQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     LogQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     Log findOne(PropelPDO $con = null) Return the first Log matching the query
 * @method     Log findOneOrCreate(PropelPDO $con = null) Return the first Log matching the query, or a new Log object populated from the query conditions when no match is found
 *
 * @method     Log findOneByIdLog(int $id_log) Return the first Log filtered by the id_log column
 * @method     Log findOneByIdPersona(int $id_persona) Return the first Log filtered by the id_persona column
 * @method     Log findOneByFechaHora(string $fecha_hora) Return the first Log filtered by the fecha_hora column
 * @method     Log findOneByModulo(string $modulo) Return the first Log filtered by the modulo column
 * @method     Log findOneByDetalle(string $detalle) Return the first Log filtered by the detalle column
 * @method     Log findOneByAccion(string $accion) Return the first Log filtered by the accion column
 *
 * @method     array findByIdLog(int $id_log) Return Log objects filtered by the id_log column
 * @method     array findByIdPersona(int $id_persona) Return Log objects filtered by the id_persona column
 * @method     array findByFechaHora(string $fecha_hora) Return Log objects filtered by the fecha_hora column
 * @method     array findByModulo(string $modulo) Return Log objects filtered by the modulo column
 * @method     array findByDetalle(string $detalle) Return Log objects filtered by the detalle column
 * @method     array findByAccion(string $accion) Return Log objects filtered by the accion column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseLogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Log', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LogQuery) {
			return $criteria;
		}
		$query = new LogQuery();
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
	 * @return    Log|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LogPeer::ID_LOG, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LogPeer::ID_LOG, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_log column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdLog(1234); // WHERE id_log = 1234
	 * $query->filterByIdLog(array(12, 34)); // WHERE id_log IN (12, 34)
	 * $query->filterByIdLog(array('min' => 12)); // WHERE id_log > 12
	 * </code>
	 *
	 * @param     mixed $idLog The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByIdLog($idLog = null, $comparison = null)
	{
		if (is_array($idLog) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LogPeer::ID_LOG, $idLog, $comparison);
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
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByIdPersona($idPersona = null, $comparison = null)
	{
		if (is_array($idPersona)) {
			$useMinMax = false;
			if (isset($idPersona['min'])) {
				$this->addUsingAlias(LogPeer::ID_PERSONA, $idPersona['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPersona['max'])) {
				$this->addUsingAlias(LogPeer::ID_PERSONA, $idPersona['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LogPeer::ID_PERSONA, $idPersona, $comparison);
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
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(LogPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(LogPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LogPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query on the modulo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByModulo('fooValue');   // WHERE modulo = 'fooValue'
	 * $query->filterByModulo('%fooValue%'); // WHERE modulo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $modulo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByModulo($modulo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($modulo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $modulo)) {
				$modulo = str_replace('*', '%', $modulo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LogPeer::MODULO, $modulo, $comparison);
	}

	/**
	 * Filter the query on the detalle column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDetalle('fooValue');   // WHERE detalle = 'fooValue'
	 * $query->filterByDetalle('%fooValue%'); // WHERE detalle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $detalle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByDetalle($detalle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($detalle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $detalle)) {
				$detalle = str_replace('*', '%', $detalle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LogPeer::DETALLE, $detalle, $comparison);
	}

	/**
	 * Filter the query on the accion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAccion('fooValue');   // WHERE accion = 'fooValue'
	 * $query->filterByAccion('%fooValue%'); // WHERE accion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $accion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByAccion($accion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($accion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $accion)) {
				$accion = str_replace('*', '%', $accion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LogPeer::ACCION, $accion, $comparison);
	}

	/**
	 * Filter the query by a related Persona object
	 *
	 * @param     Persona|PropelCollection $persona The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByPersona($persona, $comparison = null)
	{
		if ($persona instanceof Persona) {
			return $this
				->addUsingAlias(LogPeer::ID_PERSONA, $persona->getIdPersona(), $comparison);
		} elseif ($persona instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LogPeer::ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
	 * @return    LogQuery The current query, for fluid interface
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
	 * @param     Log $log Object to remove from the list of results
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function prune($log = null)
	{
		if ($log) {
			$this->addUsingAlias(LogPeer::ID_LOG, $log->getIdLog(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLogQuery
