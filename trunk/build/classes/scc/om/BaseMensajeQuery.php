<?php


/**
 * Base class that represents a query for the 'mensaje' table.
 *
 * 
 *
 * @method     MensajeQuery orderByIdMensaje($order = Criteria::ASC) Order by the id_mensaje column
 * @method     MensajeQuery orderByIdLocalizacion($order = Criteria::ASC) Order by the id_localizacion column
 * @method     MensajeQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     MensajeQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     MensajeQuery groupByIdMensaje() Group by the id_mensaje column
 * @method     MensajeQuery groupByIdLocalizacion() Group by the id_localizacion column
 * @method     MensajeQuery groupByDescripcion() Group by the descripcion column
 * @method     MensajeQuery groupByEstado() Group by the estado column
 *
 * @method     MensajeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MensajeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MensajeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MensajeQuery leftJoinLocalizacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localizacion relation
 * @method     MensajeQuery rightJoinLocalizacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localizacion relation
 * @method     MensajeQuery innerJoinLocalizacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Localizacion relation
 *
 * @method     Mensaje findOne(PropelPDO $con = null) Return the first Mensaje matching the query
 * @method     Mensaje findOneOrCreate(PropelPDO $con = null) Return the first Mensaje matching the query, or a new Mensaje object populated from the query conditions when no match is found
 *
 * @method     Mensaje findOneByIdMensaje(int $id_mensaje) Return the first Mensaje filtered by the id_mensaje column
 * @method     Mensaje findOneByIdLocalizacion(int $id_localizacion) Return the first Mensaje filtered by the id_localizacion column
 * @method     Mensaje findOneByDescripcion(string $descripcion) Return the first Mensaje filtered by the descripcion column
 * @method     Mensaje findOneByEstado(string $estado) Return the first Mensaje filtered by the estado column
 *
 * @method     array findByIdMensaje(int $id_mensaje) Return Mensaje objects filtered by the id_mensaje column
 * @method     array findByIdLocalizacion(int $id_localizacion) Return Mensaje objects filtered by the id_localizacion column
 * @method     array findByDescripcion(string $descripcion) Return Mensaje objects filtered by the descripcion column
 * @method     array findByEstado(string $estado) Return Mensaje objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseMensajeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMensajeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'Mensaje', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MensajeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MensajeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MensajeQuery) {
			return $criteria;
		}
		$query = new MensajeQuery();
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
	 * @return    Mensaje|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MensajePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MensajePeer::ID_MENSAJE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MensajePeer::ID_MENSAJE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_mensaje column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdMensaje(1234); // WHERE id_mensaje = 1234
	 * $query->filterByIdMensaje(array(12, 34)); // WHERE id_mensaje IN (12, 34)
	 * $query->filterByIdMensaje(array('min' => 12)); // WHERE id_mensaje > 12
	 * </code>
	 *
	 * @param     mixed $idMensaje The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function filterByIdMensaje($idMensaje = null, $comparison = null)
	{
		if (is_array($idMensaje) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MensajePeer::ID_MENSAJE, $idMensaje, $comparison);
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
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function filterByIdLocalizacion($idLocalizacion = null, $comparison = null)
	{
		if (is_array($idLocalizacion)) {
			$useMinMax = false;
			if (isset($idLocalizacion['min'])) {
				$this->addUsingAlias(MensajePeer::ID_LOCALIZACION, $idLocalizacion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLocalizacion['max'])) {
				$this->addUsingAlias(MensajePeer::ID_LOCALIZACION, $idLocalizacion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MensajePeer::ID_LOCALIZACION, $idLocalizacion, $comparison);
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
	 * @return    MensajeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MensajePeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    MensajeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MensajePeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Localizacion object
	 *
	 * @param     Localizacion|PropelCollection $localizacion The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function filterByLocalizacion($localizacion, $comparison = null)
	{
		if ($localizacion instanceof Localizacion) {
			return $this
				->addUsingAlias(MensajePeer::ID_LOCALIZACION, $localizacion->getIdLocalizacion(), $comparison);
		} elseif ($localizacion instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MensajePeer::ID_LOCALIZACION, $localizacion->toKeyValue('PrimaryKey', 'IdLocalizacion'), $comparison);
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
	 * @return    MensajeQuery The current query, for fluid interface
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
	 * @param     Mensaje $mensaje Object to remove from the list of results
	 *
	 * @return    MensajeQuery The current query, for fluid interface
	 */
	public function prune($mensaje = null)
	{
		if ($mensaje) {
			$this->addUsingAlias(MensajePeer::ID_MENSAJE, $mensaje->getIdMensaje(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMensajeQuery
