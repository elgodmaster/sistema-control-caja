<?php


/**
 * Base class that represents a query for the 'pago' table.
 *
 * 
 *
 * @method     PagoQuery orderByIdPago($order = Criteria::ASC) Order by the id_pago column
 * @method     PagoQuery orderByIdTarjetaCredito($order = Criteria::ASC) Order by the id_tarjeta_credito column
 * @method     PagoQuery orderByIdBanco($order = Criteria::ASC) Order by the id_banco column
 * @method     PagoQuery orderByIdFormaPago($order = Criteria::ASC) Order by the id_forma_pago column
 * @method     PagoQuery orderByIdFactura($order = Criteria::ASC) Order by the id_factura column
 * @method     PagoQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     PagoQuery orderByValor($order = Criteria::ASC) Order by the valor column
 * @method     PagoQuery orderByComisionTarjeta($order = Criteria::ASC) Order by the comision_tarjeta column
 * @method     PagoQuery orderByNumeroChq($order = Criteria::ASC) Order by the numero_chq column
 *
 * @method     PagoQuery groupByIdPago() Group by the id_pago column
 * @method     PagoQuery groupByIdTarjetaCredito() Group by the id_tarjeta_credito column
 * @method     PagoQuery groupByIdBanco() Group by the id_banco column
 * @method     PagoQuery groupByIdFormaPago() Group by the id_forma_pago column
 * @method     PagoQuery groupByIdFactura() Group by the id_factura column
 * @method     PagoQuery groupByFechaHora() Group by the fecha_hora column
 * @method     PagoQuery groupByValor() Group by the valor column
 * @method     PagoQuery groupByComisionTarjeta() Group by the comision_tarjeta column
 * @method     PagoQuery groupByNumeroChq() Group by the numero_chq column
 *
 * @method     PagoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PagoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PagoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PagoQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method     PagoQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method     PagoQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method     PagoQuery leftJoinFormaPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the FormaPago relation
 * @method     PagoQuery rightJoinFormaPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FormaPago relation
 * @method     PagoQuery innerJoinFormaPago($relationAlias = null) Adds a INNER JOIN clause to the query using the FormaPago relation
 *
 * @method     PagoQuery leftJoinBanco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Banco relation
 * @method     PagoQuery rightJoinBanco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Banco relation
 * @method     PagoQuery innerJoinBanco($relationAlias = null) Adds a INNER JOIN clause to the query using the Banco relation
 *
 * @method     PagoQuery leftJoinTarjetaCredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the TarjetaCredito relation
 * @method     PagoQuery rightJoinTarjetaCredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TarjetaCredito relation
 * @method     PagoQuery innerJoinTarjetaCredito($relationAlias = null) Adds a INNER JOIN clause to the query using the TarjetaCredito relation
 *
 * @method     Pago findOne(PropelPDO $con = null) Return the first Pago matching the query
 * @method     Pago findOneOrCreate(PropelPDO $con = null) Return the first Pago matching the query, or a new Pago object populated from the query conditions when no match is found
 *
 * @method     Pago findOneByIdPago(int $id_pago) Return the first Pago filtered by the id_pago column
 * @method     Pago findOneByIdTarjetaCredito(int $id_tarjeta_credito) Return the first Pago filtered by the id_tarjeta_credito column
 * @method     Pago findOneByIdBanco(int $id_banco) Return the first Pago filtered by the id_banco column
 * @method     Pago findOneByIdFormaPago(int $id_forma_pago) Return the first Pago filtered by the id_forma_pago column
 * @method     Pago findOneByIdFactura(int $id_factura) Return the first Pago filtered by the id_factura column
 * @method     Pago findOneByFechaHora(string $fecha_hora) Return the first Pago filtered by the fecha_hora column
 * @method     Pago findOneByValor(string $valor) Return the first Pago filtered by the valor column
 * @method     Pago findOneByComisionTarjeta(string $comision_tarjeta) Return the first Pago filtered by the comision_tarjeta column
 * @method     Pago findOneByNumeroChq(string $numero_chq) Return the first Pago filtered by the numero_chq column
 *
 * @method     array findByIdPago(int $id_pago) Return Pago objects filtered by the id_pago column
 * @method     array findByIdTarjetaCredito(int $id_tarjeta_credito) Return Pago objects filtered by the id_tarjeta_credito column
 * @method     array findByIdBanco(int $id_banco) Return Pago objects filtered by the id_banco column
 * @method     array findByIdFormaPago(int $id_forma_pago) Return Pago objects filtered by the id_forma_pago column
 * @method     array findByIdFactura(int $id_factura) Return Pago objects filtered by the id_factura column
 * @method     array findByFechaHora(string $fecha_hora) Return Pago objects filtered by the fecha_hora column
 * @method     array findByValor(string $valor) Return Pago objects filtered by the valor column
 * @method     array findByComisionTarjeta(string $comision_tarjeta) Return Pago objects filtered by the comision_tarjeta column
 * @method     array findByNumeroChq(string $numero_chq) Return Pago objects filtered by the numero_chq column
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePagoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePagoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Pago', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PagoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PagoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PagoQuery) {
			return $criteria;
		}
		$query = new PagoQuery();
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
	 * @return    Pago|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PagoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PagoPeer::ID_PAGO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PagoPeer::ID_PAGO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_pago column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdPago(1234); // WHERE id_pago = 1234
	 * $query->filterByIdPago(array(12, 34)); // WHERE id_pago IN (12, 34)
	 * $query->filterByIdPago(array('min' => 12)); // WHERE id_pago > 12
	 * </code>
	 *
	 * @param     mixed $idPago The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByIdPago($idPago = null, $comparison = null)
	{
		if (is_array($idPago) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PagoPeer::ID_PAGO, $idPago, $comparison);
	}

	/**
	 * Filter the query on the id_tarjeta_credito column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdTarjetaCredito(1234); // WHERE id_tarjeta_credito = 1234
	 * $query->filterByIdTarjetaCredito(array(12, 34)); // WHERE id_tarjeta_credito IN (12, 34)
	 * $query->filterByIdTarjetaCredito(array('min' => 12)); // WHERE id_tarjeta_credito > 12
	 * </code>
	 *
	 * @see       filterByTarjetaCredito()
	 *
	 * @param     mixed $idTarjetaCredito The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByIdTarjetaCredito($idTarjetaCredito = null, $comparison = null)
	{
		if (is_array($idTarjetaCredito)) {
			$useMinMax = false;
			if (isset($idTarjetaCredito['min'])) {
				$this->addUsingAlias(PagoPeer::ID_TARJETA_CREDITO, $idTarjetaCredito['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTarjetaCredito['max'])) {
				$this->addUsingAlias(PagoPeer::ID_TARJETA_CREDITO, $idTarjetaCredito['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::ID_TARJETA_CREDITO, $idTarjetaCredito, $comparison);
	}

	/**
	 * Filter the query on the id_banco column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdBanco(1234); // WHERE id_banco = 1234
	 * $query->filterByIdBanco(array(12, 34)); // WHERE id_banco IN (12, 34)
	 * $query->filterByIdBanco(array('min' => 12)); // WHERE id_banco > 12
	 * </code>
	 *
	 * @see       filterByBanco()
	 *
	 * @param     mixed $idBanco The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByIdBanco($idBanco = null, $comparison = null)
	{
		if (is_array($idBanco)) {
			$useMinMax = false;
			if (isset($idBanco['min'])) {
				$this->addUsingAlias(PagoPeer::ID_BANCO, $idBanco['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idBanco['max'])) {
				$this->addUsingAlias(PagoPeer::ID_BANCO, $idBanco['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::ID_BANCO, $idBanco, $comparison);
	}

	/**
	 * Filter the query on the id_forma_pago column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdFormaPago(1234); // WHERE id_forma_pago = 1234
	 * $query->filterByIdFormaPago(array(12, 34)); // WHERE id_forma_pago IN (12, 34)
	 * $query->filterByIdFormaPago(array('min' => 12)); // WHERE id_forma_pago > 12
	 * </code>
	 *
	 * @see       filterByFormaPago()
	 *
	 * @param     mixed $idFormaPago The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByIdFormaPago($idFormaPago = null, $comparison = null)
	{
		if (is_array($idFormaPago)) {
			$useMinMax = false;
			if (isset($idFormaPago['min'])) {
				$this->addUsingAlias(PagoPeer::ID_FORMA_PAGO, $idFormaPago['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idFormaPago['max'])) {
				$this->addUsingAlias(PagoPeer::ID_FORMA_PAGO, $idFormaPago['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::ID_FORMA_PAGO, $idFormaPago, $comparison);
	}

	/**
	 * Filter the query on the id_factura column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdFactura(1234); // WHERE id_factura = 1234
	 * $query->filterByIdFactura(array(12, 34)); // WHERE id_factura IN (12, 34)
	 * $query->filterByIdFactura(array('min' => 12)); // WHERE id_factura > 12
	 * </code>
	 *
	 * @see       filterByFactura()
	 *
	 * @param     mixed $idFactura The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByIdFactura($idFactura = null, $comparison = null)
	{
		if (is_array($idFactura)) {
			$useMinMax = false;
			if (isset($idFactura['min'])) {
				$this->addUsingAlias(PagoPeer::ID_FACTURA, $idFactura['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idFactura['max'])) {
				$this->addUsingAlias(PagoPeer::ID_FACTURA, $idFactura['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::ID_FACTURA, $idFactura, $comparison);
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
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(PagoPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(PagoPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::FECHA_HORA, $fechaHora, $comparison);
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
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByValor($valor = null, $comparison = null)
	{
		if (is_array($valor)) {
			$useMinMax = false;
			if (isset($valor['min'])) {
				$this->addUsingAlias(PagoPeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valor['max'])) {
				$this->addUsingAlias(PagoPeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::VALOR, $valor, $comparison);
	}

	/**
	 * Filter the query on the comision_tarjeta column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByComisionTarjeta(1234); // WHERE comision_tarjeta = 1234
	 * $query->filterByComisionTarjeta(array(12, 34)); // WHERE comision_tarjeta IN (12, 34)
	 * $query->filterByComisionTarjeta(array('min' => 12)); // WHERE comision_tarjeta > 12
	 * </code>
	 *
	 * @param     mixed $comisionTarjeta The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByComisionTarjeta($comisionTarjeta = null, $comparison = null)
	{
		if (is_array($comisionTarjeta)) {
			$useMinMax = false;
			if (isset($comisionTarjeta['min'])) {
				$this->addUsingAlias(PagoPeer::COMISION_TARJETA, $comisionTarjeta['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($comisionTarjeta['max'])) {
				$this->addUsingAlias(PagoPeer::COMISION_TARJETA, $comisionTarjeta['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PagoPeer::COMISION_TARJETA, $comisionTarjeta, $comparison);
	}

	/**
	 * Filter the query on the numero_chq column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNumeroChq('fooValue');   // WHERE numero_chq = 'fooValue'
	 * $query->filterByNumeroChq('%fooValue%'); // WHERE numero_chq LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $numeroChq The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByNumeroChq($numeroChq = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($numeroChq)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $numeroChq)) {
				$numeroChq = str_replace('*', '%', $numeroChq);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PagoPeer::NUMERO_CHQ, $numeroChq, $comparison);
	}

	/**
	 * Filter the query by a related Factura object
	 *
	 * @param     Factura|PropelCollection $factura The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByFactura($factura, $comparison = null)
	{
		if ($factura instanceof Factura) {
			return $this
				->addUsingAlias(PagoPeer::ID_FACTURA, $factura->getIdFactura(), $comparison);
		} elseif ($factura instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoPeer::ID_FACTURA, $factura->toKeyValue('PrimaryKey', 'IdFactura'), $comparison);
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
	 * @return    PagoQuery The current query, for fluid interface
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
	 * Filter the query by a related FormaPago object
	 *
	 * @param     FormaPago|PropelCollection $formaPago The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByFormaPago($formaPago, $comparison = null)
	{
		if ($formaPago instanceof FormaPago) {
			return $this
				->addUsingAlias(PagoPeer::ID_FORMA_PAGO, $formaPago->getIdFormaPago(), $comparison);
		} elseif ($formaPago instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoPeer::ID_FORMA_PAGO, $formaPago->toKeyValue('PrimaryKey', 'IdFormaPago'), $comparison);
		} else {
			throw new PropelException('filterByFormaPago() only accepts arguments of type FormaPago or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FormaPago relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function joinFormaPago($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FormaPago');
		
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
			$this->addJoinObject($join, 'FormaPago');
		}
		
		return $this;
	}

	/**
	 * Use the FormaPago relation FormaPago object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FormaPagoQuery A secondary query class using the current class as primary query
	 */
	public function useFormaPagoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFormaPago($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FormaPago', 'FormaPagoQuery');
	}

	/**
	 * Filter the query by a related Banco object
	 *
	 * @param     Banco|PropelCollection $banco The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByBanco($banco, $comparison = null)
	{
		if ($banco instanceof Banco) {
			return $this
				->addUsingAlias(PagoPeer::ID_BANCO, $banco->getIdBanco(), $comparison);
		} elseif ($banco instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoPeer::ID_BANCO, $banco->toKeyValue('PrimaryKey', 'IdBanco'), $comparison);
		} else {
			throw new PropelException('filterByBanco() only accepts arguments of type Banco or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Banco relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function joinBanco($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Banco');
		
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
			$this->addJoinObject($join, 'Banco');
		}
		
		return $this;
	}

	/**
	 * Use the Banco relation Banco object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BancoQuery A secondary query class using the current class as primary query
	 */
	public function useBancoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinBanco($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Banco', 'BancoQuery');
	}

	/**
	 * Filter the query by a related TarjetaCredito object
	 *
	 * @param     TarjetaCredito|PropelCollection $tarjetaCredito The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function filterByTarjetaCredito($tarjetaCredito, $comparison = null)
	{
		if ($tarjetaCredito instanceof TarjetaCredito) {
			return $this
				->addUsingAlias(PagoPeer::ID_TARJETA_CREDITO, $tarjetaCredito->getIdTarjetaCredito(), $comparison);
		} elseif ($tarjetaCredito instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PagoPeer::ID_TARJETA_CREDITO, $tarjetaCredito->toKeyValue('PrimaryKey', 'IdTarjetaCredito'), $comparison);
		} else {
			throw new PropelException('filterByTarjetaCredito() only accepts arguments of type TarjetaCredito or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TarjetaCredito relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function joinTarjetaCredito($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TarjetaCredito');
		
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
			$this->addJoinObject($join, 'TarjetaCredito');
		}
		
		return $this;
	}

	/**
	 * Use the TarjetaCredito relation TarjetaCredito object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TarjetaCreditoQuery A secondary query class using the current class as primary query
	 */
	public function useTarjetaCreditoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTarjetaCredito($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TarjetaCredito', 'TarjetaCreditoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Pago $pago Object to remove from the list of results
	 *
	 * @return    PagoQuery The current query, for fluid interface
	 */
	public function prune($pago = null)
	{
		if ($pago) {
			$this->addUsingAlias(PagoPeer::ID_PAGO, $pago->getIdPago(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePagoQuery
