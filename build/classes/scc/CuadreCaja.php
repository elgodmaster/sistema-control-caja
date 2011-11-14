<?php



/**
 * Skeleton subclass for representing a row from the 'cuadre_caja' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class CuadreCaja extends BaseCuadreCaja {
    
    public function aperturarCuadreCaja($id_caja,$id_persona) {
        $fechaHora = date("Y-m-d H:i:s");
        try {
            $existe_caja = CuadreCajaQuery::create()
                            ->where('CuadreCaja.Estado = ?','A')
                            ->find();
            if(!$existe_caja->count()) {
                $ultimo_cuadre = CuadreCajaQuery::create()
                                ->orderByIdCuadreCaja('desc')
                                ->findOne();
                $datos_caja = CajaQuery::create()
                            ->where('Caja.IdCaja = ?',$id_caja)
                            ->findOne();
                $base_efectivo = $datos_caja->getBaseEfectivo();
                if(!$ultimo_cuadre) {
                    $this->setIdCaja($id_caja);
                    $this->setIdPersona($id_persona);
                    $this->setFechaHoraI($fechaHora);
                    $this->setFechaHoraF($fechaHora);
                    $this->setBaseEfectivo($base_efectivo);
                    $this->setEfectivoInicial($base_efectivo);
                    $this->setEfectivoFinal(0);
                    $this->setEstado('A');
                    $this->setAjuste(0);
                    $this->setComentario('Ninguno');
                }
                else {
                    $this->setIdCaja($id_caja);
                    $this->setIdPersona($id_persona);
                    $this->setFechaHoraI($fechaHora);
                    $this->setFechaHoraF($fechaHora);
                    $this->setBaseEfectivo($base_efectivo);
                    $this->setEfectivoInicial($ultimo_cuadre->getEfectivoFinal());
                    $this->setEfectivoFinal(0);
                    $this->setEstado('A');
                    $this->setAjuste(0);
                    $this->setComentario('Ninguno');
                }
                $this->save();
                $resultado = $this->getIdCuadreCaja();
            }
            else
                $resultado = 0;
        }
        catch(Exception $e) {
            Log::logError($e);
            $resultado = 0;
        }
        return $resultado;
    }

} // CuadreCaja
