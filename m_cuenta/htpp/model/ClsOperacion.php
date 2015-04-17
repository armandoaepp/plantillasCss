<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsOperacion extends ClsConexion {
# CONSTRUCT
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_operacion($bean_operacion)
    {
        $idoperacion      = $bean_operacion->getIdOperacion();
        $fecha            = $bean_operacion->getFecha();
        $fecha_transcli   = $bean_operacion->getFechaTransCli();
        $tipomov          = $bean_operacion->getTipoMov();
        $monto_operacion  = $bean_operacion->getMontoOperacion();
        $idcuenta         = $bean_operacion->getIdCuenta();
        $idtipo_operacion = $bean_operacion->getIdTipoOperacion();
        $estado_recarga   = $bean_operacion->getEstadoRecarga();
        $idsolicitud      = $bean_operacion->getIdSolicitud();
        $idvehiculo       = $bean_operacion->getIdVehiculo();
        $iduser           = $bean_operacion->getIdUser();
        $numorden         = $bean_operacion->getNumOrden();
        $numtransac_sp    = $bean_operacion->getNumTransacSp();
        $moneda           = $bean_operacion->getMoneda();
        $resul_transac    = $bean_operacion->getResulTransac();
        $cod_accion       = $bean_operacion->getCodAccion();
        $dato_comercio    = $bean_operacion->getDatoComercio();
        $mediopago        = $bean_operacion->getMedioPago();
        $tiporesp         = $bean_operacion->getTipoResp();
        $cod_autoriz      = $bean_operacion->getCodAutoriz();
        $numrefer         = $bean_operacion->getNumRefer();
        $hash             = $bean_operacion->getHash();
        $tipoprod_sp      = $bean_operacion->getTipoProdSp();
        $ntarjeta         = $bean_operacion->getNTarjeta();
        $tarjetahab_visa  = $bean_operacion->getTarjetaHabVisa();
        $ipcompra         = $bean_operacion->getIpCompra();

        $this->query = "CALL usp_set_operacion('$idoperacion','$fecha','$fecha_transcli','$tipomov','$monto_operacion','$idcuenta','$idtipo_operacion','$estado_recarga','$idsolicitud','$idvehiculo','$iduser','$numorden','$numtransac_sp','$moneda','$resul_transac','$cod_accion','$dato_comercio','$mediopago','$tiporesp','$cod_autoriz','$numrefer','$hash','$tipoprod_sp','$ntarjeta','$tarjetahab_visa','$ipcompra')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_operacion($bean_operacion)
    {
        $idoperacion      = $bean_operacion->getIdOperacion();
        $fecha            = $bean_operacion->getFecha();
        $fecha_transcli   = $bean_operacion->getFechaTransCli();
        $tipomov          = $bean_operacion->getTipoMov();
        $monto_operacion  = $bean_operacion->getMontoOperacion();
        $idcuenta         = $bean_operacion->getIdCuenta();
        $idtipo_operacion = $bean_operacion->getIdTipoOperacion();
        $estado_recarga   = $bean_operacion->getEstadoRecarga();
        $idsolicitud      = $bean_operacion->getIdSolicitud();
        $idvehiculo       = $bean_operacion->getIdVehiculo();
        $iduser           = $bean_operacion->getIdUser();
        $numorden         = $bean_operacion->getNumOrden();
        $numtransac_sp    = $bean_operacion->getNumTransacSp();
        $moneda           = $bean_operacion->getMoneda();
        $resul_transac    = $bean_operacion->getResulTransac();
        $cod_accion       = $bean_operacion->getCodAccion();
        $dato_comercio    = $bean_operacion->getDatoComercio();
        $mediopago        = $bean_operacion->getMedioPago();
        $tiporesp         = $bean_operacion->getTipoResp();
        $cod_autoriz      = $bean_operacion->getCodAutoriz();
        $numrefer         = $bean_operacion->getNumRefer();
        $hash             = $bean_operacion->getHash();
        $tipoprod_sp      = $bean_operacion->getTipoProdSp();
        $ntarjeta         = $bean_operacion->getNTarjeta();
        $tarjetahab_visa  = $bean_operacion->getTarjetaHabVisa();
        $ipcompra         = $bean_operacion->getIpCompra();

        $this->query = "CALL usp_upd_operacion('$idoperacion','$fecha','$fecha_transcli','$tipomov','$monto_operacion','$idcuenta','$idtipo_operacion','$estado_recarga','$idsolicitud','$idvehiculo','$iduser','$numorden','$numtransac_sp','$moneda','$resul_transac','$cod_accion','$dato_comercio','$mediopago','$tiporesp','$cod_autoriz','$numrefer','$hash','$tipoprod_sp','$ntarjeta','$tarjetahab_visa','$ipcompra')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_operacion_estado($bean_operacion)
    {
        $idoperacion = $bean_operacion->getIdOperacion();
        $ipcompra = $bean_operacion->getIpCompra();

        $this->query = "CALL usp_upd_operacion_estado('$idoperacion','$ipcompra')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_operacion_by_idoperacion($bean_operacion)
    {
        $idoperacion = $bean_operacion->getIdOperacion();

        $this->query = "CALL usp_get_operacion_by_idoperacion('$idoperacion')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos
    public function get_operacion()
    {
        $this->query = "CALL usp_get_operacion()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>