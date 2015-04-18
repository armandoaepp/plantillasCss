<?php 
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento)
{
    case "list":
        try
        {
            $operacionCtrl = new OperacionController() ; 
            $data = $operacionCtrl->ctrl_get_operacion() ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $operacionCtrl = new OperacionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idoperacion = $inputs->IdOperacion;
            $fecha = $inputs->Fecha;
            $fechatranscli = $inputs->FechaTransCli;
            $tipomov = $inputs->TipoMov;
            $montooperacion = $inputs->MontoOperacion;
            $idcuenta = $inputs->IdCuenta;
            $idtipooperacion = $inputs->IdTipoOperacion;
            $estadorecarga = $inputs->EstadoRecarga;
            $idsolicitud = $inputs->IdSolicitud;
            $idvehiculo = $inputs->IdVehiculo;
            $iduser = $inputs->IdUser;
            $numorden = $inputs->NumOrden;
            $numtransacsp = $inputs->NumTransacSp;
            $moneda = $inputs->Moneda;
            $resultransac = $inputs->ResulTransac;
            $codaccion = $inputs->CodAccion;
            $datocomercio = $inputs->DatoComercio;
            $mediopago = $inputs->MedioPago;
            $tiporesp = $inputs->TipoResp;
            $codautoriz = $inputs->CodAutoriz;
            $numrefer = $inputs->NumRefer;
            $hash = $inputs->Hash;
            $tipoprodsp = $inputs->TipoProdSp;
            $ntarjeta = $inputs->NTarjeta;
            $tarjetahabvisa = $inputs->TarjetaHabVisa;
            $ipcompra = $inputs->IpCompra;
        
            $params = array(
               $idoperacion,
               $fecha,
               $fechatranscli,
               $tipomov,
               $montooperacion,
               $idcuenta,
               $idtipooperacion,
               $estadorecarga,
               $idsolicitud,
               $idvehiculo,
               $iduser,
               $numorden,
               $numtransacsp,
               $moneda,
               $resultransac,
               $codaccion,
               $datocomercio,
               $mediopago,
               $tiporesp,
               $codautoriz,
               $numrefer,
               $hash,
               $tipoprodsp,
               $ntarjeta,
               $tarjetahabvisa,
               $ipcompra,
            ) ; 
        
            $data = $operacionCtrl->ctrl_set_operacion($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        try
        {
            $id = $_GET["id"] ;
            $operacionCtrl = new OperacionController() ; 
            $data = $operacionCtrl->ctrl_get_operacion_idoperacion( $id) ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $operacionCtrl = new OperacionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idoperacion = $inputs->IdOperacion;
            $fecha = $inputs->Fecha;
            $fechatranscli = $inputs->FechaTransCli;
            $tipomov = $inputs->TipoMov;
            $montooperacion = $inputs->MontoOperacion;
            $idcuenta = $inputs->IdCuenta;
            $idtipooperacion = $inputs->IdTipoOperacion;
            $estadorecarga = $inputs->EstadoRecarga;
            $idsolicitud = $inputs->IdSolicitud;
            $idvehiculo = $inputs->IdVehiculo;
            $iduser = $inputs->IdUser;
            $numorden = $inputs->NumOrden;
            $numtransacsp = $inputs->NumTransacSp;
            $moneda = $inputs->Moneda;
            $resultransac = $inputs->ResulTransac;
            $codaccion = $inputs->CodAccion;
            $datocomercio = $inputs->DatoComercio;
            $mediopago = $inputs->MedioPago;
            $tiporesp = $inputs->TipoResp;
            $codautoriz = $inputs->CodAutoriz;
            $numrefer = $inputs->NumRefer;
            $hash = $inputs->Hash;
            $tipoprodsp = $inputs->TipoProdSp;
            $ntarjeta = $inputs->NTarjeta;
            $tarjetahabvisa = $inputs->TarjetaHabVisa;
            $ipcompra = $inputs->IpCompra;
        
            $params = array(
               $idoperacion,
               $fecha,
               $fechatranscli,
               $tipomov,
               $montooperacion,
               $idcuenta,
               $idtipooperacion,
               $estadorecarga,
               $idsolicitud,
               $idvehiculo,
               $iduser,
               $numorden,
               $numtransacsp,
               $moneda,
               $resultransac,
               $codaccion,
               $datocomercio,
               $mediopago,
               $tiporesp,
               $codautoriz,
               $numrefer,
               $hash,
               $tipoprodsp,
               $ntarjeta,
               $tarjetahabvisa,
               $ipcompra,
            ) ; 
        
            $data = $operacionCtrl->ctrl_upd_operacion($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
