<?php


/**
 * Base class that represents a query for the 'localizacion' table.
 *
 * 
 *
 * @method     LocalizacionQuery orderByIdLocalizacion($order = Criteria::ASC) Order by the id_localizacion column
 * @method     LocalizacionQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     LocalizacionQuery orderByOutputDevice($order = Criteria::ASC) Order by the output_device column
 * @method     LocalizacionQuery orderByDireccionPrinter($order = Criteria::ASC) Order by the direccion_printer column
 * @method     LocalizacionQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 * @method     LocalizacionQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     LocalizacionQuery groupByIdLocalizacion() Group by the id_localizacion column
 * @method     LocalizacionQuery groupByNombre() Group by the nombre column
 * @method     LocalizacionQuery groupByOutputDevice() Group by the output_device column
 * @method     LocalizacionQuery groupByDireccionPrinter() Group by the direccion_printer column
 * @method     LocalizacionQuery groupByVisible() Group by the visible column
 * @method     LocalizacionQuery groupByEstado() Group by the estado column
 *
 * @method     LocalizacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LocalizacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LocalizacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LocalizacionQuery leftJoinMensaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mensaje relation
 * @method     LocalizacionQuery rightJoinMensaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mensaje relation
 * @method     LocalizacionQuery innerJoinMensaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Mensaje relation
 *
 * @method     LocalizacionQuery leftJoinPersonaLocalizacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaLocalizacion relation
 * @method     LocalizacionQuery rightJoinPersonaLocalizacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaLocalizacion relation
 * @method     LocalizacionQuery innerJoinPersonaLocalizacion($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaLocalizacion relation
 *
 * @method     Localizacion findOne(PropelPDO $con = null) Return the first Localizacion matching the query
 * @method     Localizacion findOneOrCreate(PropelPDO $con = null) Return the first Localizacion matching the query, or a new Localizacion object populated from the query conditions when no match is found
 *
 * @method     Localizacion findOneByIdLocalizacion(int $id_localizacion) Return the first Localizacion filtered by the id_localizacion column
 * @method     Localizacion findOneByNombre(string $nombre) Return the first Localizacion filtered by the nombre column
 * @method     Localizacion findOneByOutputDevice(string $output_device) Return the first Localizacion filtered by the output_device column
 * @method     Localizacion findOneByDireccionPrinter(string $direccion_printer) Return the first Localizacion filtered by the direccion_printer column
 * @method     Localizacion findOneByVisible(string $visible) Return the first Localizacion filtered by the visible column
 * @method     Localizacion findOneByEstado(string $estado) Return the first Localizacion filtered by the estado column
 *
 * @method     array findByIdLocalizacion(int $id_localizacion) Return Localizacion objects filtered by the id_localizacion column
 * @method     array findByNombre(string $nombre) Return Localizacion objects filtered by the nombre column
 * @method     array findByOutputDevice(string $output_device) Return Localizacion objects filtered by the output_device column
 * @method     array findByDireccionPrinter(string $direccion_printer) Return Localizacion objects filtered by the direccion_printer column
 * @method     array findByVisible(string $visible) Return Localizacion objects filtered by the visible column
 * @method     array findByEstado(string $estado) Return Localizacion objects filtered by the estado column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseLocalizacionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLocalizacionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'Localizacion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LocalizacionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LocalizacionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LocalizacionQuery) {
			return $criteria;
		}
		$query = new LocalizacionQuery();
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
	 * @return    Localizacion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LocalizacionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $keys, Criteria::IN);
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
	 * @param     mixed $idLocalizacion The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByIdLocalizacion($idLocalizacion = null, $comparison = null)
	{
		if (is_array($idLocalizacion) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $idLocalizacion, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
	 * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nombre The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocalizacionPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the output_device column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOutputDevice('fooValue');   // WHERE output_device = 'fooValue'
	 * $query->filterByOutputDevice('%fooValue%'); // WHERE output_device LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $outputDevice The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByOutputDevice($outputDevice = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($outputDevice)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $outputDevice)) {
				$outputDevice = str_replace('*', '%', $outputDevice);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocalizacionPeer::OUTPUT_DEVICE, $outputDevice, $comparison);
	}

	/**
	 * Filter the query on the direccion_printer column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDireccionPrinter('fooValue');   // WHERE direccion_printer = 'fooValue'
	 * $query->filterByDireccionPrinter('%fooValue%'); // WHERE direccion_printer LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $direccionPrinter The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByDireccionPrinter($direccionPrinter = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($direccionPrinter)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $direccionPrinter)) {
				$direccionPrinter = str_replace('*', '%', $direccionPrinter);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocalizacionPeer::DIRECCION_PRINTER, $direccionPrinter, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVisible('fooValue');   // WHERE visible = 'fooValue'
	 * $query->filterByVisible('%fooValue%'); // WHERE visible LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $visible The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($visible)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $visible)) {
				$visible = str_replace('*', '%', $visible);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocalizacionPeer::VISIBLE, $visible, $comparison);
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
	 * @return    LocalizacionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LocalizacionPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query by a related Mensaje object
	 *
	 * @param     Mensaje $mensaje  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByMensaje($mensaje, $comparison = null)
	{
		if ($mensaje instanceof Mensaje) {
			return $this
				->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $mensaje->getIdLocalizacion(), $comparison);
		} elseif ($mensaje instanceof PropelCollection) {
			return $this
				->useMensajeQuery()
					->filterByPrimaryKeys($mensaje->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByMensaje() only accepts arguments of type Mensaje or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Mensaje relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function joinMensaje($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Mensaje');
		
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
			$this->addJoinObject($join, 'Mensaje');
		}
		
		return $this;
	}

	/**
	 * Use the Mensaje relation Mensaje object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MensajeQuery A secondary query class using the current class as primary query
	 */
	public function useMensajeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMensaje($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Mensaje', 'MensajeQuery');
	}

	/**
	 * Filter the query by a related PersonaLocalizacion object
	 *
	 * @param     PersonaLocalizacion $personaLocalizacion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function filterByPersonaLocalizacion($personaLocalizacion, $comparison = null)
	{
		if ($personaLocalizacion instanceof PersonaLocalizacion) {
			return $this
				->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $personaLocalizacion->getIdLocalizacion(), $comparison);
		} elseif ($personaLocalizacion instanceof PropelCollection) {
			return $this
				->usePersonaLocalizacionQuery()
					->filterByPrimaryKeys($personaLocalizacion->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPersonaLocalizacion() only accepts arguments of type PersonaLocalizacion or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the PersonaLocalizacion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function joinPersonaLocalizacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PersonaLocalizacion');
		
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
			$this->addJoinObject($join, 'PersonaLocalizacion');
		}
		
		return $this;
	}

	/**
	 * Use the PersonaLocalizacion relation PersonaLocalizacion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonaLocalizacionQuery A secondary query class using the current class as primary query
	 */
	public function usePersonaLocalizacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersonaLocalizacion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PersonaLocalizacion', 'PersonaLocalizacionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Localizacion $localizacion Object to remove from the list of results
	 *
	 * @return    LocalizacionQuery The current query, for fluid interface
	 */
	public function prune($localizacion = null)
	{
		if ($localizacion) {
			$this->addUsingAlias(LocalizacionPeer::ID_LOCALIZACION, $localizacion->getIdLocalizacion(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLocalizacionQuery
