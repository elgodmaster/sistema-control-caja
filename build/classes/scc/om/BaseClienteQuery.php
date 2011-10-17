<?php


/**
 * Base class that represents a query for the 'cliente' table.
 *
 * 
 *
 * @method     ClienteQuery orderByIdCliente($order = Criteria::ASC) Order by the id_cliente column
 * @method     ClienteQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     ClienteQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     ClienteQuery orderByRuc($order = Criteria::ASC) Order by the ruc column
 * @method     ClienteQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method     ClienteQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method     ClienteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ClienteQuery orderByContacto($order = Criteria::ASC) Order by the contacto column
 * @method     ClienteQuery orderByFechaNacimiento($order = Criteria::ASC) Order by the fecha_nacimiento column
 *
 * @method     ClienteQuery groupByIdCliente() Group by the id_cliente column
 * @method     ClienteQuery groupByNombre() Group by the nombre column
 * @method     ClienteQuery groupByApellido() Group by the apellido column
 * @method     ClienteQuery groupByRuc() Group by the ruc column
 * @method     ClienteQuery groupByTelefono() Group by the telefono column
 * @method     ClienteQuery groupByDireccion() Group by the direccion column
 * @method     ClienteQuery groupByEmail() Group by the email column
 * @method     ClienteQuery groupByContacto() Group by the contacto column
 * @method     ClienteQuery groupByFechaNacimiento() Group by the fecha_nacimiento column
 *
 * @method     ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ClienteQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method     ClienteQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method     ClienteQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method     Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method     Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method     Cliente findOneByIdCliente(int $id_cliente) Return the first Cliente filtered by the id_cliente column
 * @method     Cliente findOneByNombre(string $nombre) Return the first Cliente filtered by the nombre column
 * @method     Cliente findOneByApellido(string $apellido) Return the first Cliente filtered by the apellido column
 * @method     Cliente findOneByRuc(string $ruc) Return the first Cliente filtered by the ruc column
 * @method     Cliente findOneByTelefono(string $telefono) Return the first Cliente filtered by the telefono column
 * @method     Cliente findOneByDireccion(string $direccion) Return the first Cliente filtered by the direccion column
 * @method     Cliente findOneByEmail(string $email) Return the first Cliente filtered by the email column
 * @method     Cliente findOneByContacto(string $contacto) Return the first Cliente filtered by the contacto column
 * @method     Cliente findOneByFechaNacimiento(string $fecha_nacimiento) Return the first Cliente filtered by the fecha_nacimiento column
 *
 * @method     array findByIdCliente(int $id_cliente) Return Cliente objects filtered by the id_cliente column
 * @method     array findByNombre(string $nombre) Return Cliente objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Cliente objects filtered by the apellido column
 * @method     array findByRuc(string $ruc) Return Cliente objects filtered by the ruc column
 * @method     array findByTelefono(string $telefono) Return Cliente objects filtered by the telefono column
 * @method     array findByDireccion(string $direccion) Return Cliente objects filtered by the direccion column
 * @method     array findByEmail(string $email) Return Cliente objects filtered by the email column
 * @method     array findByContacto(string $contacto) Return Cliente objects filtered by the contacto column
 * @method     array findByFechaNacimiento(string $fecha_nacimiento) Return Cliente objects filtered by the fecha_nacimiento column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseClienteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseClienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'Cliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ClienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ClienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ClienteQuery) {
			return $criteria;
		}
		$query = new ClienteQuery();
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ClientePeer::ID_CLIENTE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ClientePeer::ID_CLIENTE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cliente column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdCliente(1234); // WHERE id_cliente = 1234
	 * $query->filterByIdCliente(array(12, 34)); // WHERE id_cliente IN (12, 34)
	 * $query->filterByIdCliente(array('min' => 12)); // WHERE id_cliente > 12
	 * </code>
	 *
	 * @param     mixed $idCliente The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByIdCliente($idCliente = null, $comparison = null)
	{
		if (is_array($idCliente) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ClientePeer::ID_CLIENTE, $idCliente, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the apellido column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
	 * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $apellido The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByApellido($apellido = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apellido)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apellido)) {
				$apellido = str_replace('*', '%', $apellido);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::APELLIDO, $apellido, $comparison);
	}

	/**
	 * Filter the query on the ruc column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRuc('fooValue');   // WHERE ruc = 'fooValue'
	 * $query->filterByRuc('%fooValue%'); // WHERE ruc LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ruc The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByRuc($ruc = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ruc)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ruc)) {
				$ruc = str_replace('*', '%', $ruc);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::RUC, $ruc, $comparison);
	}

	/**
	 * Filter the query on the telefono column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
	 * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $telefono The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTelefono($telefono = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefono)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefono)) {
				$telefono = str_replace('*', '%', $telefono);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::TELEFONO, $telefono, $comparison);
	}

	/**
	 * Filter the query on the direccion column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDireccion('fooValue');   // WHERE direccion = 'fooValue'
	 * $query->filterByDireccion('%fooValue%'); // WHERE direccion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $direccion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByDireccion($direccion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($direccion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $direccion)) {
				$direccion = str_replace('*', '%', $direccion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::DIRECCION, $direccion, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the contacto column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByContacto('fooValue');   // WHERE contacto = 'fooValue'
	 * $query->filterByContacto('%fooValue%'); // WHERE contacto LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $contacto The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByContacto($contacto = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($contacto)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $contacto)) {
				$contacto = str_replace('*', '%', $contacto);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::CONTACTO, $contacto, $comparison);
	}

	/**
	 * Filter the query on the fecha_nacimiento column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaNacimiento('2011-03-14'); // WHERE fecha_nacimiento = '2011-03-14'
	 * $query->filterByFechaNacimiento('now'); // WHERE fecha_nacimiento = '2011-03-14'
	 * $query->filterByFechaNacimiento(array('max' => 'yesterday')); // WHERE fecha_nacimiento > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaNacimiento The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByFechaNacimiento($fechaNacimiento = null, $comparison = null)
	{
		if (is_array($fechaNacimiento)) {
			$useMinMax = false;
			if (isset($fechaNacimiento['min'])) {
				$this->addUsingAlias(ClientePeer::FECHA_NACIMIENTO, $fechaNacimiento['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaNacimiento['max'])) {
				$this->addUsingAlias(ClientePeer::FECHA_NACIMIENTO, $fechaNacimiento['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ClientePeer::FECHA_NACIMIENTO, $fechaNacimiento, $comparison);
	}

	/**
	 * Filter the query by a related Factura object
	 *
	 * @param     Factura $factura  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByFactura($factura, $comparison = null)
	{
		if ($factura instanceof Factura) {
			return $this
				->addUsingAlias(ClientePeer::ID_CLIENTE, $factura->getIdCliente(), $comparison);
		} elseif ($factura instanceof PropelCollection) {
			return $this
				->useFacturaQuery()
					->filterByPrimaryKeys($factura->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Factura relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Factura');
		
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
			$this->addJoinObject($join, 'Factura');
		}
		
		return $this;
	}

	/**
	 * Use the Factura relation Factura object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FacturaQuery A secondary query class using the current class as primary query
	 */
	public function useFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFactura($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Cliente $cliente Object to remove from the list of results
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function prune($cliente = null)
	{
		if ($cliente) {
			$this->addUsingAlias(ClientePeer::ID_CLIENTE, $cliente->getIdCliente(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseClienteQuery
