<?php


/**
 * Base class that represents a query for the 'detalle_factura' table.
 *
 * 
 *
 * @method     DetalleFacturaQuery orderByIdDetalleFactura($order = Criteria::ASC) Order by the id_detalle_factura column
 * @method     DetalleFacturaQuery orderByIdProducto($order = Criteria::ASC) Order by the id_producto column
 * @method     DetalleFacturaQuery orderByIdFactura($order = Criteria::ASC) Order by the id_factura column
 * @method     DetalleFacturaQuery orderByPrecio($order = Criteria::ASC) Order by the precio column
 * @method     DetalleFacturaQuery orderByCosto($order = Criteria::ASC) Order by the costo column
 * @method     DetalleFacturaQuery orderByCantidad($order = Criteria::ASC) Order by the cantidad column
 *
 * @method     DetalleFacturaQuery groupByIdDetalleFactura() Group by the id_detalle_factura column
 * @method     DetalleFacturaQuery groupByIdProducto() Group by the id_producto column
 * @method     DetalleFacturaQuery groupByIdFactura() Group by the id_factura column
 * @method     DetalleFacturaQuery groupByPrecio() Group by the precio column
 * @method     DetalleFacturaQuery groupByCosto() Group by the costo column
 * @method     DetalleFacturaQuery groupByCantidad() Group by the cantidad column
 *
 * @method     DetalleFacturaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DetalleFacturaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DetalleFacturaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DetalleFacturaQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method     DetalleFacturaQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method     DetalleFacturaQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method     DetalleFacturaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method     DetalleFacturaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method     DetalleFacturaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method     DetalleFactura findOne(PropelPDO $con = null) Return the first DetalleFactura matching the query
 * @method     DetalleFactura findOneOrCreate(PropelPDO $con = null) Return the first DetalleFactura matching the query, or a new DetalleFactura object populated from the query conditions when no match is found
 *
 * @method     DetalleFactura findOneByIdDetalleFactura(int $id_detalle_factura) Return the first DetalleFactura filtered by the id_detalle_factura column
 * @method     DetalleFactura findOneByIdProducto(int $id_producto) Return the first DetalleFactura filtered by the id_producto column
 * @method     DetalleFactura findOneByIdFactura(int $id_factura) Return the first DetalleFactura filtered by the id_factura column
 * @method     DetalleFactura findOneByPrecio(string $precio) Return the first DetalleFactura filtered by the precio column
 * @method     DetalleFactura findOneByCosto(string $costo) Return the first DetalleFactura filtered by the costo column
 * @method     DetalleFactura findOneByCantidad(int $cantidad) Return the first DetalleFactura filtered by the cantidad column
 *
 * @method     array findByIdDetalleFactura(int $id_detalle_factura) Return DetalleFactura objects filtered by the id_detalle_factura column
 * @method     array findByIdProducto(int $id_producto) Return DetalleFactura objects filtered by the id_producto column
 * @method     array findByIdFactura(int $id_factura) Return DetalleFactura objects filtered by the id_factura column
 * @method     array findByPrecio(string $precio) Return DetalleFactura objects filtered by the precio column
 * @method     array findByCosto(string $costo) Return DetalleFactura objects filtered by the costo column
 * @method     array findByCantidad(int $cantidad) Return DetalleFactura objects filtered by the cantidad column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseDetalleFacturaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDetalleFacturaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'DetalleFactura', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DetalleFacturaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DetalleFacturaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DetalleFacturaQuery) {
			return $criteria;
		}
		$query = new DetalleFacturaQuery();
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
	 * @return    DetalleFactura|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DetalleFacturaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DetalleFacturaPeer::ID_DETALLE_FACTURA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DetalleFacturaPeer::ID_DETALLE_FACTURA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_detalle_factura column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdDetalleFactura(1234); // WHERE id_detalle_factura = 1234
	 * $query->filterByIdDetalleFactura(array(12, 34)); // WHERE id_detalle_factura IN (12, 34)
	 * $query->filterByIdDetalleFactura(array('min' => 12)); // WHERE id_detalle_factura > 12
	 * </code>
	 *
	 * @param     mixed $idDetalleFactura The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByIdDetalleFactura($idDetalleFactura = null, $comparison = null)
	{
		if (is_array($idDetalleFactura) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DetalleFacturaPeer::ID_DETALLE_FACTURA, $idDetalleFactura, $comparison);
	}

	/**
	 * Filter the query on the id_producto column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdProducto(1234); // WHERE id_producto = 1234
	 * $query->filterByIdProducto(array(12, 34)); // WHERE id_producto IN (12, 34)
	 * $query->filterByIdProducto(array('min' => 12)); // WHERE id_producto > 12
	 * </code>
	 *
	 * @see       filterByProducto()
	 *
	 * @param     mixed $idProducto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByIdProducto($idProducto = null, $comparison = null)
	{
		if (is_array($idProducto)) {
			$useMinMax = false;
			if (isset($idProducto['min'])) {
				$this->addUsingAlias(DetalleFacturaPeer::ID_PRODUCTO, $idProducto['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProducto['max'])) {
				$this->addUsingAlias(DetalleFacturaPeer::ID_PRODUCTO, $idProducto['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleFacturaPeer::ID_PRODUCTO, $idProducto, $comparison);
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
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByIdFactura($idFactura = null, $comparison = null)
	{
		if (is_array($idFactura)) {
			$useMinMax = false;
			if (isset($idFactura['min'])) {
				$this->addUsingAlias(DetalleFacturaPeer::ID_FACTURA, $idFactura['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idFactura['max'])) {
				$this->addUsingAlias(DetalleFacturaPeer::ID_FACTURA, $idFactura['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleFacturaPeer::ID_FACTURA, $idFactura, $comparison);
	}

	/**
	 * Filter the query on the precio column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPrecio(1234); // WHERE precio = 1234
	 * $query->filterByPrecio(array(12, 34)); // WHERE precio IN (12, 34)
	 * $query->filterByPrecio(array('min' => 12)); // WHERE precio > 12
	 * </code>
	 *
	 * @param     mixed $precio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByPrecio($precio = null, $comparison = null)
	{
		if (is_array($precio)) {
			$useMinMax = false;
			if (isset($precio['min'])) {
				$this->addUsingAlias(DetalleFacturaPeer::PRECIO, $precio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($precio['max'])) {
				$this->addUsingAlias(DetalleFacturaPeer::PRECIO, $precio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleFacturaPeer::PRECIO, $precio, $comparison);
	}

	/**
	 * Filter the query on the costo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCosto(1234); // WHERE costo = 1234
	 * $query->filterByCosto(array(12, 34)); // WHERE costo IN (12, 34)
	 * $query->filterByCosto(array('min' => 12)); // WHERE costo > 12
	 * </code>
	 *
	 * @param     mixed $costo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByCosto($costo = null, $comparison = null)
	{
		if (is_array($costo)) {
			$useMinMax = false;
			if (isset($costo['min'])) {
				$this->addUsingAlias(DetalleFacturaPeer::COSTO, $costo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($costo['max'])) {
				$this->addUsingAlias(DetalleFacturaPeer::COSTO, $costo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleFacturaPeer::COSTO, $costo, $comparison);
	}

	/**
	 * Filter the query on the cantidad column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCantidad(1234); // WHERE cantidad = 1234
	 * $query->filterByCantidad(array(12, 34)); // WHERE cantidad IN (12, 34)
	 * $query->filterByCantidad(array('min' => 12)); // WHERE cantidad > 12
	 * </code>
	 *
	 * @param     mixed $cantidad The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByCantidad($cantidad = null, $comparison = null)
	{
		if (is_array($cantidad)) {
			$useMinMax = false;
			if (isset($cantidad['min'])) {
				$this->addUsingAlias(DetalleFacturaPeer::CANTIDAD, $cantidad['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cantidad['max'])) {
				$this->addUsingAlias(DetalleFacturaPeer::CANTIDAD, $cantidad['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetalleFacturaPeer::CANTIDAD, $cantidad, $comparison);
	}

	/**
	 * Filter the query by a related Factura object
	 *
	 * @param     Factura|PropelCollection $factura The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByFactura($factura, $comparison = null)
	{
		if ($factura instanceof Factura) {
			return $this
				->addUsingAlias(DetalleFacturaPeer::ID_FACTURA, $factura->getIdFactura(), $comparison);
		} elseif ($factura instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetalleFacturaPeer::ID_FACTURA, $factura->toKeyValue('PrimaryKey', 'IdFactura'), $comparison);
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
	 * @return    DetalleFacturaQuery The current query, for fluid interface
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
	 * Filter the query by a related Producto object
	 *
	 * @param     Producto|PropelCollection $producto The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function filterByProducto($producto, $comparison = null)
	{
		if ($producto instanceof Producto) {
			return $this
				->addUsingAlias(DetalleFacturaPeer::ID_PRODUCTO, $producto->getIdProducto(), $comparison);
		} elseif ($producto instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetalleFacturaPeer::ID_PRODUCTO, $producto->toKeyValue('PrimaryKey', 'IdProducto'), $comparison);
		} else {
			throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Producto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Producto');
		
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
			$this->addJoinObject($join, 'Producto');
		}
		
		return $this;
	}

	/**
	 * Use the Producto relation Producto object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery A secondary query class using the current class as primary query
	 */
	public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProducto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DetalleFactura $detalleFactura Object to remove from the list of results
	 *
	 * @return    DetalleFacturaQuery The current query, for fluid interface
	 */
	public function prune($detalleFactura = null)
	{
		if ($detalleFactura) {
			$this->addUsingAlias(DetalleFacturaPeer::ID_DETALLE_FACTURA, $detalleFactura->getIdDetalleFactura(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDetalleFacturaQuery
