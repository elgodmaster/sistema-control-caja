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
    
    static public function obtenerEfectivoFinalCaja($id_caja) {
        $id_cuadre_caja = $_SESSION['caja_'.$id_caja];
        $cuadre_caja = CuadreCajaQuery::create()
                ->where('CuadreCaja.IdCuadreCaja = ?',$id_cuadre_caja)
                ->findOne();
        $gxml = '<data>';
        $gxml .= '<efectivo_final>'.$cuadre_caja->getEfectivoFinal().'</efectivo_final>';
        $gxml .= '</data>';
        return $gxml;
    }
    
    static public function actualizaEfectivoFinalCaja($id_caja,$idPersona) {
        $id_cuadre_caja = $_SESSION['caja_'.$id_caja];
        $valor = $_REQUEST[$_REQUEST['ids'].'_efectivo_final'];
        try {
            $con = Propel::getConnection(CuadreCajaPeer::DATABASE_NAME);
            $cuadre_caja = CuadreCajaQuery::create()
                        ->where('CuadreCaja.IdCuadreCaja = ?',$id_cuadre_caja)
                        ->findOne();
            $cuadre_caja->setEfectivoFinal($valor);
            $cuadre_caja->save($con);
            Log::registraLog($idPersona,'Cuadre Caja','Efectivo Final Registrado Cuadre Caja # '.$id_cuadre_caja.': '.$valor,'U',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$id_cuadre_caja.'" tid="'.$id_cuadre_caja.'"></action><action type="act_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible registrar Efectivo Final</action></data>';
        }
        return $gxml;
    }

} // CuadreCaja
