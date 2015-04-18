<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class OperacionController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_operacion()
    {
        try
        {
            $objOperacion  = new ClsOperacion();

            $data = $objOperacion->get_operacion() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_operacion($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objOperacion  = new ClsOperacion($this->cnx);
            $bean_operacion = new BeanOperacion();
            
            $bean_operacion->setIdOperacion($idoperacion);
            $bean_operacion->setFecha($fecha);
            $bean_operacion->setFechaTransCli($fecha_transcli);
            $bean_operacion->setTipoMov($tipomov);
            $bean_operacion->setMontoOperacion($monto_operacion);
            $bean_operacion->setIdCuenta($idcuenta);
            $bean_operacion->setIdTipoOperacion($idtipo_operacion);
            $bean_operacion->setEstadoRecarga($estado_recarga);
            $bean_operacion->setIdSolicitud($idsolicitud);
            $bean_operacion->setIdVehiculo($idvehiculo);
            $bean_operacion->setIdUser($iduser);
            $bean_operacion->setNumOrden($numorden);
            $bean_operacion->setNumTransacSp($numtransac_sp);
            $bean_operacion->setMoneda($moneda);
            $bean_operacion->setResulTransac($resul_transac);
            $bean_operacion->setCodAccion($cod_accion);
            $bean_operacion->setDatoComercio($dato_comercio);
            $bean_operacion->setMedioPago($mediopago);
            $bean_operacion->setTipoResp($tiporesp);
            $bean_operacion->setCodAutoriz($cod_autoriz);
            $bean_operacion->setNumRefer($numrefer);
            $bean_operacion->setHash($hash);
            $bean_operacion->setTipoProdSp($tipoprod_sp);
            $bean_operacion->setnTarjeta($ntarjeta);
            $bean_operacion->setTarjetaHabVisa($tarjetahab_visa);
            $bean_operacion->setIpCompra($ipcompra);
            
            $data = $objOperacion->set_operacion($bean_operacion) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_operacion_by_id($id)
    {
        try
        {
            $objOperacion  = new ClsOperacion();
            $bean_operacion = new BeanOperacion();

            $bean_operacion->setId($id);
            $data = $objOperacion->get_operacion() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_operacion($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objOperacion  = new ClsOperacion($this->cnx);
            $bean_operacion = new BeanOperacion();
            
            $bean_operacion->setIdOperacion($idoperacion);
            $bean_operacion->setFecha($fecha);
            $bean_operacion->setFechaTransCli($fecha_transcli);
            $bean_operacion->setTipoMov($tipomov);
            $bean_operacion->setMontoOperacion($monto_operacion);
            $bean_operacion->setIdCuenta($idcuenta);
            $bean_operacion->setIdTipoOperacion($idtipo_operacion);
            $bean_operacion->setEstadoRecarga($estado_recarga);
            $bean_operacion->setIdSolicitud($idsolicitud);
            $bean_operacion->setIdVehiculo($idvehiculo);
            $bean_operacion->setIdUser($iduser);
            $bean_operacion->setNumOrden($numorden);
            $bean_operacion->setNumTransacSp($numtransac_sp);
            $bean_operacion->setMoneda($moneda);
            $bean_operacion->setResulTransac($resul_transac);
            $bean_operacion->setCodAccion($cod_accion);
            $bean_operacion->setDatoComercio($dato_comercio);
            $bean_operacion->setMedioPago($mediopago);
            $bean_operacion->setTipoResp($tiporesp);
            $bean_operacion->setCodAutoriz($cod_autoriz);
            $bean_operacion->setNumRefer($numrefer);
            $bean_operacion->setHash($hash);
            $bean_operacion->setTipoProdSp($tipoprod_sp);
            $bean_operacion->setnTarjeta($ntarjeta);
            $bean_operacion->setTarjetaHabVisa($tarjetahab_visa);
            $bean_operacion->setIpCompra($ipcompra);
            
            $data = $objOperacion->upd_operacion($bean_operacion) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
