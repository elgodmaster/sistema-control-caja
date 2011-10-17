<?php


/**
 * Base class that represents a query for the 'factura' table.
 *
 * 
 *
 * @method     FacturaQuery orderByIdFactura($order = Criteria::ASC) Order by the id_factura column
 * @method     FacturaQuery orderByIdOrden($order = Criteria::ASC) Order by the id_orden column
 * @method     FacturaQuery orderByIdCliente($order = Criteria::ASC) Order by the id_cliente column
 * @method     FacturaQuery orderByNoFactura($order = Criteria::ASC) Order by the no_factura column
 * @method     FacturaQuery orderByFechaHora($order = Criteria::ASC) Order by the fecha_hora column
 * @method     FacturaQuery orderBySubTotal($order = Criteria::ASC) Order by the sub_total column
 * @method     FacturaQuery orderByIvaPorcentaje($order = Criteria::ASC) Order by the iva_porcentaje column
 * @method     FacturaQuery orderByBaseIva($order = Criteria::ASC) Order by the base_iva column
 * @method     FacturaQuery orderByBaseIva($order = Criteria::ASC) Order by the base_iva_0 column
 * @method     FacturaQuery orderByIvaTotal($order = Criteria::ASC) Order by the iva_total column
 * @method     FacturaQuery orderByDescuento($order = Criteria::ASC) Order by the descuento column
 * @method     FacturaQuery orderByValorTotal($order = Criteria::ASC) Order by the valor_total column
 *
 * @method     FacturaQuery groupByIdFactura() Group by the id_factura column
 * @method     FacturaQuery groupByIdOrden() Group by the id_orden column
 * @method     FacturaQuery groupByIdCliente() Group by the id_cliente column
 * @method     FacturaQuery groupByNoFactura() Group by the no_factura column
 * @method     FacturaQuery groupByFechaHora() Group by the fecha_hora column
 * @method     FacturaQuery groupBySubTotal() Group by the sub_total column
 * @method     FacturaQuery groupByIvaPorcentaje() Group by the iva_porcentaje column
 * @method     FacturaQuery groupByBaseIva() Group by the base_iva column
 * @method     FacturaQuery groupByBaseIva() Group by the base_iva_0 column
 * @method     FacturaQuery groupByIvaTotal() Group by the iva_total column
 * @method     FacturaQuery groupByDescuento() Group by the descuento column
 * @method     FacturaQuery groupByValorTotal() Group by the valor_total column
 *
 * @method     FacturaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FacturaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FacturaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FacturaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     FacturaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     FacturaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     FacturaQuery leftJoinOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Orden relation
 * @method     FacturaQuery rightJoinOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Orden relation
 * @method     FacturaQuery innerJoinOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the Orden relation
 *
 * @method     FacturaQuery leftJoinDetalleFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetalleFactura relation
 * @method     FacturaQuery rightJoinDetalleFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetalleFactura relation
 * @method     FacturaQuery innerJoinDetalleFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the DetalleFactura relation
 *
 * @method     FacturaQuery leftJoinPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pago relation
 * @method     FacturaQuery rightJoinPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pago relation
 * @method     FacturaQuery innerJoinPago($relationAlias = null) Adds a INNER JOIN clause to the query using the Pago relation
 *
 * @method     Factura findOne(PropelPDO $con = null) Return the first Factura matching the query
 * @method     Factura findOneOrCreate(PropelPDO $con = null) Return the first Factura matching the query, or a new Factura object populated from the query conditions when no match is found
 *
 * @method     Factura findOneByIdFactura(int $id_factura) Return the first Factura filtered by the id_factura column
 * @method     Factura findOneByIdOrden(int $id_orden) Return the first Factura filtered by the id_orden column
 * @method     Factura findOneByIdCliente(int $id_cliente) Return the first Factura filtered by the id_cliente column
 * @method     Factura findOneByNoFactura(string $no_factura) Return the first Factura filtered by the no_factura column
 * @method     Factura findOneByFechaHora(string $fecha_hora) Return the first Factura filtered by the fecha_hora column
 * @method     Factura findOneBySubTotal(string $sub_total) Return the first Factura filtered by the sub_total column
 * @method     Factura findOneByIvaPorcentaje(string $iva_porcentaje) Return the first Factura filtered by the iva_porcentaje column
 * @method     Factura findOneByBaseIva(string $base_iva) Return the first Factura filtered by the base_iva column
 * @method     Factura findOneByBaseIva(string $base_iva_0) Return the first Factura filtered by the base_iva_0 column
 * @method     Factura findOneByIvaTotal(string $iva_total) Return the first Factura filtered by the iva_total column
 * @method     Factura findOneByDescuento(string $descuento) Return the first Factura filtered by the descuento column
 * @method     Factura findOneByValorTotal(string $valor_total) Return the first Factura filtered by the valor_total column
 *
 * @method     array findByIdFactura(int $id_factura) Return Factura objects filtered by the id_factura column
 * @method     array findByIdOrden(int $id_orden) Return Factura objects filtered by the id_orden column
 * @method     array findByIdCliente(int $id_cliente) Return Factura objects filtered by the id_cliente column
 * @method     array findByNoFactura(string $no_factura) Return Factura objects filtered by the no_factura column
 * @method     array findByFechaHora(string $fecha_hora) Return Factura objects filtered by the fecha_hora column
 * @method     array findBySubTotal(string $sub_total) Return Factura objects filtered by the sub_total column
 * @method     array findByIvaPorcentaje(string $iva_porcentaje) Return Factura objects filtered by the iva_porcentaje column
 * @method     array findByBaseIva(string $base_iva) Return Factura objects filtered by the base_iva column
 * @method     array findByBaseIva(string $base_iva_0) Return Factura objects filtered by the base_iva_0 column
 * @method     array findByIvaTotal(string $iva_total) Return Factura objects filtered by the iva_total column
 * @method     array findByDescuento(string $descuento) Return Factura objects filtered by the descuento column
 * @method     array findByValorTotal(string $valor_total) Return Factura objects filtered by the valor_total column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseFacturaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseFacturaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'Factura', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new FacturaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    FacturaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof FacturaQuery) {
			return $criteria;
		}
		$query = new FacturaQuery();
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
	 * @return    Factura|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = FacturaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(FacturaPeer::ID_FACTURA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(FacturaPeer::ID_FACTURA, $keys, Criteria::IN);
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
	 * @param     mixed $idFactura The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByIdFactura($idFactura = null, $comparison = null)
	{
		if (is_array($idFactura) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(FacturaPeer::ID_FACTURA, $idFactura, $comparison);
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
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByIdOrden($idOrden = null, $comparison = null)
	{
		if (is_array($idOrden)) {
			$useMinMax = false;
			if (isset($idOrden['min'])) {
				$this->addUsingAlias(FacturaPeer::ID_ORDEN, $idOrden['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrden['max'])) {
				$this->addUsingAlias(FacturaPeer::ID_ORDEN, $idOrden['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::ID_ORDEN, $idOrden, $comparison);
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
	 * @see       filterByCliente()
	 *
	 * @param     mixed $idCliente The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByIdCliente($idCliente = null, $comparison = null)
	{
		if (is_array($idCliente)) {
			$useMinMax = false;
			if (isset($idCliente['min'])) {
				$this->addUsingAlias(FacturaPeer::ID_CLIENTE, $idCliente['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCliente['max'])) {
				$this->addUsingAlias(FacturaPeer::ID_CLIENTE, $idCliente['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::ID_CLIENTE, $idCliente, $comparison);
	}

	/**
	 * Filter the query on the no_factura column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNoFactura('fooValue');   // WHERE no_factura = 'fooValue'
	 * $query->filterByNoFactura('%fooValue%'); // WHERE no_factura LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $noFactura The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByNoFactura($noFactura = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($noFactura)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $noFactura)) {
				$noFactura = str_replace('*', '%', $noFactura);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(FacturaPeer::NO_FACTURA, $noFactura, $comparison);
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
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByFechaHora($fechaHora = null, $comparison = null)
	{
		if (is_array($fechaHora)) {
			$useMinMax = false;
			if (isset($fechaHora['min'])) {
				$this->addUsingAlias(FacturaPeer::FECHA_HORA, $fechaHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaHora['max'])) {
				$this->addUsingAlias(FacturaPeer::FECHA_HORA, $fechaHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::FECHA_HORA, $fechaHora, $comparison);
	}

	/**
	 * Filter the query on the sub_total column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySubTotal(1234); // WHERE sub_total = 1234
	 * $query->filterBySubTotal(array(12, 34)); // WHERE sub_total IN (12, 34)
	 * $query->filterBySubTotal(array('min' => 12)); // WHERE sub_total > 12
	 * </code>
	 *
	 * @param     mixed $subTotal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterBySubTotal($subTotal = null, $comparison = null)
	{
		if (is_array($subTotal)) {
			$useMinMax = false;
			if (isset($subTotal['min'])) {
				$this->addUsingAlias(FacturaPeer::SUB_TOTAL, $subTotal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subTotal['max'])) {
				$this->addUsingAlias(FacturaPeer::SUB_TOTAL, $subTotal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::SUB_TOTAL, $subTotal, $comparison);
	}

	/**
	 * Filter the query on the iva_porcentaje column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIvaPorcentaje(1234); // WHERE iva_porcentaje = 1234
	 * $query->filterByIvaPorcentaje(array(12, 34)); // WHERE iva_porcentaje IN (12, 34)
	 * $query->filterByIvaPorcentaje(array('min' => 12)); // WHERE iva_porcentaje > 12
	 * </code>
	 *
	 * @param     mixed $ivaPorcentaje The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByIvaPorcentaje($ivaPorcentaje = null, $comparison = null)
	{
		if (is_array($ivaPorcentaje)) {
			$useMinMax = false;
			if (isset($ivaPorcentaje['min'])) {
				$this->addUsingAlias(FacturaPeer::IVA_PORCENTAJE, $ivaPorcentaje['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ivaPorcentaje['max'])) {
				$this->addUsingAlias(FacturaPeer::IVA_PORCENTAJE, $ivaPorcentaje['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::IVA_PORCENTAJE, $ivaPorcentaje, $comparison);
	}

	/**
	 * Filter the query on the base_iva column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBaseIva(1234); // WHERE base_iva = 1234
	 * $query->filterByBaseIva(array(12, 34)); // WHERE base_iva IN (12, 34)
	 * $query->filterByBaseIva(array('min' => 12)); // WHERE base_iva > 12
	 * </code>
	 *
	 * @param     mixed $baseIva The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByBaseIva($baseIva = null, $comparison = null)
	{
		if (is_array($baseIva)) {
			$useMinMax = false;
			if (isset($baseIva['min'])) {
				$this->addUsingAlias(FacturaPeer::BASE_IVA, $baseIva['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($baseIva['max'])) {
				$this->addUsingAlias(FacturaPeer::BASE_IVA, $baseIva['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::BASE_IVA, $baseIva, $comparison);
	}

	/**
	 * Filter the query on the base_iva_0 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBaseIva(1234); // WHERE base_iva_0 = 1234
	 * $query->filterByBaseIva(array(12, 34)); // WHERE base_iva_0 IN (12, 34)
	 * $query->filterByBaseIva(array('min' => 12)); // WHERE base_iva_0 > 12
	 * </code>
	 *
	 * @param     mixed $baseIva The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByBaseIva($baseIva = null, $comparison = null)
	{
		if (is_array($baseIva)) {
			$useMinMax = false;
			if (isset($baseIva['min'])) {
				$this->addUsingAlias(FacturaPeer::BASE_IVA_0, $baseIva['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($baseIva['max'])) {
				$this->addUsingAlias(FacturaPeer::BASE_IVA_0, $baseIva['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::BASE_IVA_0, $baseIva, $comparison);
	}

	/**
	 * Filter the query on the iva_total column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIvaTotal(1234); // WHERE iva_total = 1234
	 * $query->filterByIvaTotal(array(12, 34)); // WHERE iva_total IN (12, 34)
	 * $query->filterByIvaTotal(array('min' => 12)); // WHERE iva_total > 12
	 * </code>
	 *
	 * @param     mixed $ivaTotal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByIvaTotal($ivaTotal = null, $comparison = null)
	{
		if (is_array($ivaTotal)) {
			$useMinMax = false;
			if (isset($ivaTotal['min'])) {
				$this->addUsingAlias(FacturaPeer::IVA_TOTAL, $ivaTotal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ivaTotal['max'])) {
				$this->addUsingAlias(FacturaPeer::IVA_TOTAL, $ivaTotal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::IVA_TOTAL, $ivaTotal, $comparison);
	}

	/**
	 * Filter the query on the descuento column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescuento(1234); // WHERE descuento = 1234
	 * $query->filterByDescuento(array(12, 34)); // WHERE descuento IN (12, 34)
	 * $query->filterByDescuento(array('min' => 12)); // WHERE descuento > 12
	 * </code>
	 *
	 * @param     mixed $descuento The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByDescuento($descuento = null, $comparison = null)
	{
		if (is_array($descuento)) {
			$useMinMax = false;
			if (isset($descuento['min'])) {
				$this->addUsingAlias(FacturaPeer::DESCUENTO, $descuento['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($descuento['max'])) {
				$this->addUsingAlias(FacturaPeer::DESCUENTO, $descuento['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::DESCUENTO, $descuento, $comparison);
	}

	/**
	 * Filter the query on the valor_total column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValorTotal(1234); // WHERE valor_total = 1234
	 * $query->filterByValorTotal(array(12, 34)); // WHERE valor_total IN (12, 34)
	 * $query->filterByValorTotal(array('min' => 12)); // WHERE valor_total > 12
	 * </code>
	 *
	 * @param     mixed $valorTotal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByValorTotal($valorTotal = null, $comparison = null)
	{
		if (is_array($valorTotal)) {
			$useMinMax = false;
			if (isset($valorTotal['min'])) {
				$this->addUsingAlias(FacturaPeer::VALOR_TOTAL, $valorTotal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valorTotal['max'])) {
				$this->addUsingAlias(FacturaPeer::VALOR_TOTAL, $valorTotal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FacturaPeer::VALOR_TOTAL, $valorTotal, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(FacturaPeer::ID_CLIENTE, $cliente->getIdCliente(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(FacturaPeer::ID_CLIENTE, $cliente->toKeyValue('PrimaryKey', 'IdCliente'), $comparison);
		} else {
			throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Cliente relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Cliente');
		
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
			$this->addJoinObject($join, 'Cliente');
		}
		
		return $this;
	}

	/**
	 * Use the Cliente relation Cliente object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
	}

	/**
	 * Filter the query by a related Orden object
	 *
	 * @param     Orden|PropelCollection $orden The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByOrden($orden, $comparison = null)
	{
		if ($orden instanceof Orden) {
			return $this
				->addUsingAlias(FacturaPeer::ID_ORDEN, $orden->getIdOrden(), $comparison);
		} elseif ($orden instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(FacturaPeer::ID_ORDEN, $orden->toKeyValue('PrimaryKey', 'IdOrden'), $comparison);
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
	 * @return    FacturaQuery The current query, for fluid interface
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
	 * Filter the query by a related DetalleFactura object
	 *
	 * @param     DetalleFactura $detalleFactura  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByDetalleFactura($detalleFactura, $comparison = null)
	{
		if ($detalleFactura instanceof DetalleFactura) {
			return $this
				->addUsingAlias(FacturaPeer::ID_FACTURA, $detalleFactura->getIdFactura(), $comparison);
		} elseif ($detalleFactura instanceof PropelCollection) {
			return $this
				->useDetalleFacturaQuery()
					->filterByPrimaryKeys($detalleFactura->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByDetalleFactura() only accepts arguments of type DetalleFactura or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the DetalleFactura relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function joinDetalleFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DetalleFactura');
		
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
			$this->addJoinObject($join, 'DetalleFactura');
		}
		
		return $this;
	}

	/**
	 * Use the DetalleFactura relation DetalleFactura object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetalleFacturaQuery A secondary query class using the current class as primary query
	 */
	public function useDetalleFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDetalleFactura($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DetalleFactura', 'DetalleFacturaQuery');
	}

	/**
	 * Filter the query by a related Pago object
	 *
	 * @param     Pago $pago  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function filterByPago($pago, $comparison = null)
	{
		if ($pago instanceof Pago) {
			return $this
				->addUsingAlias(FacturaPeer::ID_FACTURA, $pago->getIdFactura(), $comparison);
		} elseif ($pago instanceof PropelCollection) {
			return $this
				->usePagoQuery()
					->filterByPrimaryKeys($pago->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPago() only accepts arguments of type Pago or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Pago relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function joinPago($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Pago');
		
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
			$this->addJoinObject($join, 'Pago');
		}
		
		return $this;
	}

	/**
	 * Use the Pago relation Pago object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PagoQuery A secondary query class using the current class as primary query
	 */
	public function usePagoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPago($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Pago', 'PagoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Factura $factura Object to remove from the list of results
	 *
	 * @return    FacturaQuery The current query, for fluid interface
	 */
	public function prune($factura = null)
	{
		if ($factura) {
			$this->addUsingAlias(FacturaPeer::ID_FACTURA, $factura->getIdFactura(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseFacturaQuery
