<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 * 
 *
 * @method     ProductoQuery orderByIdProducto($order = Criteria::ASC) Order by the id_producto column
 * @method     ProductoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     ProductoQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     ProductoQuery orderByStockHandler($order = Criteria::ASC) Order by the stock_handler column
 * @method     ProductoQuery orderByStock($order = Criteria::ASC) Order by the stock column
 * @method     ProductoQuery orderByCosto($order = Criteria::ASC) Order by the costo column
 * @method     ProductoQuery orderByPrecio($order = Criteria::ASC) Order by the precio column
 * @method     ProductoQuery orderByFechaIngreso($order = Criteria::ASC) Order by the fecha_ingreso column
 * @method     ProductoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method     ProductoQuery orderByEspecificaciones($order = Criteria::ASC) Order by the especificaciones column
 * @method     ProductoQuery orderByImagen($order = Criteria::ASC) Order by the imagen column
 * @method     ProductoQuery orderByPagaIva($order = Criteria::ASC) Order by the paga_iva column
 *
 * @method     ProductoQuery groupByIdProducto() Group by the id_producto column
 * @method     ProductoQuery groupByDescripcion() Group by the descripcion column
 * @method     ProductoQuery groupByTipo() Group by the tipo column
 * @method     ProductoQuery groupByStockHandler() Group by the stock_handler column
 * @method     ProductoQuery groupByStock() Group by the stock column
 * @method     ProductoQuery groupByCosto() Group by the costo column
 * @method     ProductoQuery groupByPrecio() Group by the precio column
 * @method     ProductoQuery groupByFechaIngreso() Group by the fecha_ingreso column
 * @method     ProductoQuery groupByEstado() Group by the estado column
 * @method     ProductoQuery groupByEspecificaciones() Group by the especificaciones column
 * @method     ProductoQuery groupByImagen() Group by the imagen column
 * @method     ProductoQuery groupByPagaIva() Group by the paga_iva column
 *
 * @method     ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProductoQuery leftJoinDetalleFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetalleFactura relation
 * @method     ProductoQuery rightJoinDetalleFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetalleFactura relation
 * @method     ProductoQuery innerJoinDetalleFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the DetalleFactura relation
 *
 * @method     ProductoQuery leftJoinDetallePedido($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetallePedido relation
 * @method     ProductoQuery rightJoinDetallePedido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetallePedido relation
 * @method     ProductoQuery innerJoinDetallePedido($relationAlias = null) Adds a INNER JOIN clause to the query using the DetallePedido relation
 *
 * @method     Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method     Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method     Producto findOneByIdProducto(int $id_producto) Return the first Producto filtered by the id_producto column
 * @method     Producto findOneByDescripcion(string $descripcion) Return the first Producto filtered by the descripcion column
 * @method     Producto findOneByTipo(string $tipo) Return the first Producto filtered by the tipo column
 * @method     Producto findOneByStockHandler(string $stock_handler) Return the first Producto filtered by the stock_handler column
 * @method     Producto findOneByStock(string $stock) Return the first Producto filtered by the stock column
 * @method     Producto findOneByCosto(string $costo) Return the first Producto filtered by the costo column
 * @method     Producto findOneByPrecio(string $precio) Return the first Producto filtered by the precio column
 * @method     Producto findOneByFechaIngreso(string $fecha_ingreso) Return the first Producto filtered by the fecha_ingreso column
 * @method     Producto findOneByEstado(string $estado) Return the first Producto filtered by the estado column
 * @method     Producto findOneByEspecificaciones(string $especificaciones) Return the first Producto filtered by the especificaciones column
 * @method     Producto findOneByImagen(string $imagen) Return the first Producto filtered by the imagen column
 * @method     Producto findOneByPagaIva(string $paga_iva) Return the first Producto filtered by the paga_iva column
 *
 * @method     array findByIdProducto(int $id_producto) Return Producto objects filtered by the id_producto column
 * @method     array findByDescripcion(string $descripcion) Return Producto objects filtered by the descripcion column
 * @method     array findByTipo(string $tipo) Return Producto objects filtered by the tipo column
 * @method     array findByStockHandler(string $stock_handler) Return Producto objects filtered by the stock_handler column
 * @method     array findByStock(string $stock) Return Producto objects filtered by the stock column
 * @method     array findByCosto(string $costo) Return Producto objects filtered by the costo column
 * @method     array findByPrecio(string $precio) Return Producto objects filtered by the precio column
 * @method     array findByFechaIngreso(string $fecha_ingreso) Return Producto objects filtered by the fecha_ingreso column
 * @method     array findByEstado(string $estado) Return Producto objects filtered by the estado column
 * @method     array findByEspecificaciones(string $especificaciones) Return Producto objects filtered by the especificaciones column
 * @method     array findByImagen(string $imagen) Return Producto objects filtered by the imagen column
 * @method     array findByPagaIva(string $paga_iva) Return Producto objects filtered by the paga_iva column
 *
 * @package    propel.generator.scc.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseProductoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'taberna_colonial', $modelName = 'Producto', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProductoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProductoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProductoQuery) {
			return $criteria;
		}
		$query = new ProductoQuery();
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
	 * @return    Producto|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProductoPeer::ID_PRODUCTO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProductoPeer::ID_PRODUCTO, $keys, Criteria::IN);
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
	 * @param     mixed $idProducto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByIdProducto($idProducto = null, $comparison = null)
	{
		if (is_array($idProducto) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProductoPeer::ID_PRODUCTO, $idProducto, $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProductoPeer::DESCRIPCION, $descripcion, $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProductoPeer::TIPO, $tipo, $comparison);
	}

	/**
	 * Filter the query on the stock_handler column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStockHandler('fooValue');   // WHERE stock_handler = 'fooValue'
	 * $query->filterByStockHandler('%fooValue%'); // WHERE stock_handler LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $stockHandler The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByStockHandler($stockHandler = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stockHandler)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stockHandler)) {
				$stockHandler = str_replace('*', '%', $stockHandler);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProductoPeer::STOCK_HANDLER, $stockHandler, $comparison);
	}

	/**
	 * Filter the query on the stock column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStock(1234); // WHERE stock = 1234
	 * $query->filterByStock(array(12, 34)); // WHERE stock IN (12, 34)
	 * $query->filterByStock(array('min' => 12)); // WHERE stock > 12
	 * </code>
	 *
	 * @param     mixed $stock The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByStock($stock = null, $comparison = null)
	{
		if (is_array($stock)) {
			$useMinMax = false;
			if (isset($stock['min'])) {
				$this->addUsingAlias(ProductoPeer::STOCK, $stock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stock['max'])) {
				$this->addUsingAlias(ProductoPeer::STOCK, $stock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::STOCK, $stock, $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByCosto($costo = null, $comparison = null)
	{
		if (is_array($costo)) {
			$useMinMax = false;
			if (isset($costo['min'])) {
				$this->addUsingAlias(ProductoPeer::COSTO, $costo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($costo['max'])) {
				$this->addUsingAlias(ProductoPeer::COSTO, $costo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::COSTO, $costo, $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrecio($precio = null, $comparison = null)
	{
		if (is_array($precio)) {
			$useMinMax = false;
			if (isset($precio['min'])) {
				$this->addUsingAlias(ProductoPeer::PRECIO, $precio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($precio['max'])) {
				$this->addUsingAlias(ProductoPeer::PRECIO, $precio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::PRECIO, $precio, $comparison);
	}

	/**
	 * Filter the query on the fecha_ingreso column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFechaIngreso('2011-03-14'); // WHERE fecha_ingreso = '2011-03-14'
	 * $query->filterByFechaIngreso('now'); // WHERE fecha_ingreso = '2011-03-14'
	 * $query->filterByFechaIngreso(array('max' => 'yesterday')); // WHERE fecha_ingreso > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $fechaIngreso The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByFechaIngreso($fechaIngreso = null, $comparison = null)
	{
		if (is_array($fechaIngreso)) {
			$useMinMax = false;
			if (isset($fechaIngreso['min'])) {
				$this->addUsingAlias(ProductoPeer::FECHA_INGRESO, $fechaIngreso['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaIngreso['max'])) {
				$this->addUsingAlias(ProductoPeer::FECHA_INGRESO, $fechaIngreso['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::FECHA_INGRESO, $fechaIngreso, $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProductoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query on the especificaciones column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEspecificaciones('fooValue');   // WHERE especificaciones = 'fooValue'
	 * $query->filterByEspecificaciones('%fooValue%'); // WHERE especificaciones LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $especificaciones The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByEspecificaciones($especificaciones = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($especificaciones)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $especificaciones)) {
				$especificaciones = str_replace('*', '%', $especificaciones);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProductoPeer::ESPECIFICACIONES, $especificaciones, $comparison);
	}

	/**
	 * Filter the query on the imagen column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByImagen('fooValue');   // WHERE imagen = 'fooValue'
	 * $query->filterByImagen('%fooValue%'); // WHERE imagen LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $imagen The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByImagen($imagen = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($imagen)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $imagen)) {
				$imagen = str_replace('*', '%', $imagen);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProductoPeer::IMAGEN, $imagen, $comparison);
	}

	/**
	 * Filter the query on the paga_iva column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPagaIva('fooValue');   // WHERE paga_iva = 'fooValue'
	 * $query->filterByPagaIva('%fooValue%'); // WHERE paga_iva LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pagaIva The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPagaIva($pagaIva = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pagaIva)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pagaIva)) {
				$pagaIva = str_replace('*', '%', $pagaIva);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProductoPeer::PAGA_IVA, $pagaIva, $comparison);
	}

	/**
	 * Filter the query by a related DetalleFactura object
	 *
	 * @param     DetalleFactura $detalleFactura  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByDetalleFactura($detalleFactura, $comparison = null)
	{
		if ($detalleFactura instanceof DetalleFactura) {
			return $this
				->addUsingAlias(ProductoPeer::ID_PRODUCTO, $detalleFactura->getIdProducto(), $comparison);
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
	 * @return    ProductoQuery The current query, for fluid interface
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
	 * Filter the query by a related DetallePedido object
	 *
	 * @param     DetallePedido $detallePedido  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByDetallePedido($detallePedido, $comparison = null)
	{
		if ($detallePedido instanceof DetallePedido) {
			return $this
				->addUsingAlias(ProductoPeer::ID_PRODUCTO, $detallePedido->getIdProducto(), $comparison);
		} elseif ($detallePedido instanceof PropelCollection) {
			return $this
				->useDetallePedidoQuery()
					->filterByPrimaryKeys($detallePedido->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByDetallePedido() only accepts arguments of type DetallePedido or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the DetallePedido relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function joinDetallePedido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DetallePedido');
		
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
			$this->addJoinObject($join, 'DetallePedido');
		}
		
		return $this;
	}

	/**
	 * Use the DetallePedido relation DetallePedido object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DetallePedidoQuery A secondary query class using the current class as primary query
	 */
	public function useDetallePedidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDetallePedido($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DetallePedido', 'DetallePedidoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Producto $producto Object to remove from the list of results
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function prune($producto = null)
	{
		if ($producto) {
			$this->addUsingAlias(ProductoPeer::ID_PRODUCTO, $producto->getIdProducto(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseProductoQuery
