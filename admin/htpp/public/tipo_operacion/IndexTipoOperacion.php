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
            $tipo_operacionCtrl = new Tipo_operacionController() ; 
            $data = $tipo_operacionCtrl->ctrl_get_tipo_operacion() ;
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
        
            $tipo_operacionCtrl = new Tipo_operacionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idtipooperacion = $inputs->IdTipoOperacion;
            $descripcion = $inputs->Descripcion;
        
            $params = array(
               $idtipooperacion,
               $descripcion,
            ) ; 
        
            $data = $tipo_operacionCtrl->ctrl_set_tipo_operacion($params) ;
        
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
            $tipo_operacionCtrl = new Tipo_operacionController() ; 
            $data = $tipo_operacionCtrl->ctrl_get_tipo_operacion_idtipo_operacion( $id) ;
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
        
            $tipo_operacionCtrl = new Tipo_operacionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idtipooperacion = $inputs->IdTipoOperacion;
            $descripcion = $inputs->Descripcion;
        
            $params = array(
               $idtipooperacion,
               $descripcion,
            ) ; 
        
            $data = $tipo_operacionCtrl->ctrl_upd_tipo_operacion($params) ;
        
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
