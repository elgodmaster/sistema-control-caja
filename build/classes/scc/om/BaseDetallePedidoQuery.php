<?php


/**
 * Base class that represents a query for the 'detalle_pedido' table.
 *
 * 
 *
 * @method     DetallePedidoQuery orderByIdDetallePedido($order = Criteria::ASC) Order by the id_detalle_pedido column
 * @method     DetallePedidoQuery orderByIdProducto($order = Criteria::ASC) Order by the id_producto column
 * @method     DetallePedidoQuery orderByIdDetalleOrden($order = Criteria::ASC) Order by the id_detalle_orden column
 * @method     DetallePedidoQuery orderByCantidad($order = Criteria::ASC) Order by the cantidad column
 *
 * @method     DetallePedidoQuery groupByIdDetallePedido() Group by the id_detalle_pedido column
 * @method     DetallePedidoQuery groupByIdProducto() Group by the id_producto column
 * @method     DetallePedidoQuery groupByIdDetalleOrden() Group by the id_detalle_orden column
 * @method     DetallePedidoQuery groupByCantidad() Group by the cantidad column
 *
 * @method     DetallePedidoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DetallePedidoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DetallePedidoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DetallePedidoQuery leftJoinDetalleOrden($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetalleOrden relation
 * @method     DetallePedidoQuery rightJoinDetalleOrden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetalleOrden relation
 * @method     DetallePedidoQuery innerJoinDetalleOrden($relationAlias = null) Adds a INNER JOIN clause to the query using the DetalleOrden relation
 *
 * @method     DetallePedidoQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method     DetallePedidoQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method     DetallePedidoQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method     DetallePedido findOne(PropelPDO $con = null) Return the first DetallePedido matching the query
 * @method     DetallePedido findOneOrCreate(PropelPDO $con = null) Return the first DetallePedido matching the query, or a new DetallePedido object populated from the query conditions when no match is found
 *
 * @method     DetallePedido findOneByIdDetallePedido(int $id_detalle_pedido) Return the first DetallePedido filtered by the id_detalle_pedido column
 * @method     DetallePedido findOneByIdProducto(int $id_producto) Return the first DetallePedido filtered by the id_producto column
 * @method     DetallePedido findOneByIdDetalleOrden(int $id_detalle_orden) Return the first DetallePedido filtered by the id_detalle_orden column
 * @method     DetallePedido findOneByCantidad(int $cantidad) Return the first DetallePedido filtered by the cantidad column
 *
 * @method     array findByIdDetallePedido(int $id_detalle_pedido) Return DetallePedido objects filtered by the id_detalle_pedido column
 * @method     array findByIdProducto(int $id_producto) Return DetallePedido objects filtered by the id_producto column
 * @method     array findByIdDetalleOrden(int $id_detalle_orden) Return DetallePedido objects filtered by the id_detalle_orden column
 * @method     array findByCantidad(int $cantidad) Return DetallePedido objects filtered by the cantidad column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseDetallePedidoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDetallePedidoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'scc', $modelName = 'DetallePedido', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DetallePedidoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DetallePedidoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DetallePedidoQuery) {
			return $criteria;
		}
		$query = new DetallePedidoQuery();
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
	 * @return    DetallePedido|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DetallePedidoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_PEDIDO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_PEDIDO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_detalle_pedido column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdDetallePedido(1234); // WHERE id_detalle_pedido = 1234
	 * $query->filterByIdDetallePedido(array(12, 34)); // WHERE id_detalle_pedido IN (12, 34)
	 * $query->filterByIdDetallePedido(array('min' => 12)); // WHERE id_detalle_pedido > 12
	 * </code>
	 *
	 * @param     mixed $idDetallePedido The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByIdDetallePedido($idDetallePedido = null, $comparison = null)
	{
		if (is_array($idDetallePedido) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_PEDIDO, $idDetallePedido, $comparison);
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
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByIdProducto($idProducto = null, $comparison = null)
	{
		if (is_array($idProducto)) {
			$useMinMax = false;
			if (isset($idProducto['min'])) {
				$this->addUsingAlias(DetallePedidoPeer::ID_PRODUCTO, $idProducto['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProducto['max'])) {
				$this->addUsingAlias(DetallePedidoPeer::ID_PRODUCTO, $idProducto['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetallePedidoPeer::ID_PRODUCTO, $idProducto, $comparison);
	}

	/**
	 * Filter the query on the id_detalle_orden column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIdDetalleOrden(1234); // WHERE id_detalle_orden = 1234
	 * $query->filterByIdDetalleOrden(array(12, 34)); // WHERE id_detalle_orden IN (12, 34)
	 * $query->filterByIdDetalleOrden(array('min' => 12)); // WHERE id_detalle_orden > 12
	 * </code>
	 *
	 * @see       filterByDetalleOrden()
	 *
	 * @param     mixed $idDetalleOrden The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByIdDetalleOrden($idDetalleOrden = null, $comparison = null)
	{
		if (is_array($idDetalleOrden)) {
			$useMinMax = false;
			if (isset($idDetalleOrden['min'])) {
				$this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_ORDEN, $idDetalleOrden['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDetalleOrden['max'])) {
				$this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_ORDEN, $idDetalleOrden['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_ORDEN, $idDetalleOrden, $comparison);
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
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByCantidad($cantidad = null, $comparison = null)
	{
		if (is_array($cantidad)) {
			$useMinMax = false;
			if (isset($cantidad['min'])) {
				$this->addUsingAlias(DetallePedidoPeer::CANTIDAD, $cantidad['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cantidad['max'])) {
				$this->addUsingAlias(DetallePedidoPeer::CANTIDAD, $cantidad['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DetallePedidoPeer::CANTIDAD, $cantidad, $comparison);
	}

	/**
	 * Filter the query by a related DetalleOrden object
	 *
	 * @param     DetalleOrden|PropelCollection $detalleOrden The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByDetalleOrden($detalleOrden, $comparison = null)
	{
		if ($detalleOrden instanceof DetalleOrden) {
			return $this
				->addUsingAlias(DetallePedidoPeer::ID_DETALLE_ORDEN, $detalleOrden->getIdDetalleOrden(), $comparison);
		} elseif ($detalleOrden instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetallePedidoPeer::ID_DETALLE_ORDEN, $detalleOrden->toKeyValue('PrimaryKey', 'IdDetalleOrden'), $comparison);
		} else {
			throw new PropelException('filterByDetalleOrden() only accepts arguments of type DetalleOrden or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the DetalleOrden relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function joinDetalleOrden($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DetalleOrden');
		
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
			$this->addJoinObject($join, 'DetalleOrden');
		}
		
		return $this;
	}

	/**
	 * Use the DetalleOrden relation DetalleOrden object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetalleOrdenQuery A secondary query class using the current class as primary query
	 */
	public function useDetalleOrdenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDetalleOrden($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DetalleOrden', 'DetalleOrdenQuery');
	}

	/**
	 * Filter the query by a related Producto object
	 *
	 * @param     Producto|PropelCollection $producto The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function filterByProducto($producto, $comparison = null)
	{
		if ($producto instanceof Producto) {
			return $this
				->addUsingAlias(DetallePedidoPeer::ID_PRODUCTO, $producto->getIdProducto(), $comparison);
		} elseif ($producto instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(DetallePedidoPeer::ID_PRODUCTO, $producto->toKeyValue('PrimaryKey', 'IdProducto'), $comparison);
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
	 * @return    DetallePedidoQuery The current query, for fluid interface
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
	 * @param     DetallePedido $detallePedido Object to remove from the list of results
	 *
	 * @return    DetallePedidoQuery The current query, for fluid interface
	 */
	public function prune($detallePedido = null)
	{
		if ($detallePedido) {
			$this->addUsingAlias(DetallePedidoPeer::ID_DETALLE_PEDIDO, $detallePedido->getIdDetallePedido(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDetallePedidoQuery
