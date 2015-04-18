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
            $ubigeoCtrl = new UbigeoController() ; 
            $data = $ubigeoCtrl->ctrl_get_ubigeo() ;
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
        
            $ubigeoCtrl = new UbigeoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $codubigeo = $inputs->CodUbigeo;
            $lugar = $inputs->Lugar;
            $longitud = $inputs->Longitud;
            $latitud = $inputs->Latitud;
        
            $params = array(
               $codubigeo,
               $lugar,
               $longitud,
               $latitud,
            ) ; 
        
            $data = $ubigeoCtrl->ctrl_set_ubigeo($params) ;
        
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
            $ubigeoCtrl = new UbigeoController() ; 
            $data = $ubigeoCtrl->ctrl_get_ubigeo_idubigeo( $id) ;
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
        
            $ubigeoCtrl = new UbigeoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $codubigeo = $inputs->CodUbigeo;
            $lugar = $inputs->Lugar;
            $longitud = $inputs->Longitud;
            $latitud = $inputs->Latitud;
        
            $params = array(
               $codubigeo,
               $lugar,
               $longitud,
               $latitud,
            ) ; 
        
            $data = $ubigeoCtrl->ctrl_upd_ubigeo($params) ;
        
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
