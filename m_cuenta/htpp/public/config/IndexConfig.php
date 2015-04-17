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
            $configCtrl = new ConfigController() ; 
            $data = $configCtrl->ctrl_get_config() ;
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
        
            $configCtrl = new ConfigController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idconfig = $inputs->Idconfig;
            $idtipoentidad = $inputs->IdTipoEntidad;
            $idvalor = $inputs->IdValor;
            $valor = $inputs->Valor;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idconfig,
               $idtipoentidad,
               $idvalor,
               $valor,
               $referencia,
               $estado,
            ) ; 
        
            $data = $configCtrl->ctrl_set_config($params) ;
        
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
            $configCtrl = new ConfigController() ; 
            $data = $configCtrl->ctrl_get_config_idconfig( $id) ;
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
        
            $configCtrl = new ConfigController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idconfig = $inputs->Idconfig;
            $idtipoentidad = $inputs->IdTipoEntidad;
            $idvalor = $inputs->IdValor;
            $valor = $inputs->Valor;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idconfig,
               $idtipoentidad,
               $idvalor,
               $valor,
               $referencia,
               $estado,
            ) ; 
        
            $data = $configCtrl->ctrl_upd_config($params) ;
        
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
