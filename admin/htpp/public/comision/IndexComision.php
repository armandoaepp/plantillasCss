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
            $comisionCtrl = new ComisionController() ; 
            $data = $comisionCtrl->ctrl_get_comision() ;
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
        
            $comisionCtrl = new ComisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcomision = $inputs->IdComision;
            $gc = $inputs->Gc;
            $gcurg = $inputs->GcUrg;
            $tra = $inputs->Tra;
            $igv = $inputs->Igv;
        
            $params = array(
               $idcomision,
               $gc,
               $gcurg,
               $tra,
               $igv,
            ) ; 
        
            $data = $comisionCtrl->ctrl_set_comision($params) ;
        
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
            $comisionCtrl = new ComisionController() ; 
            $data = $comisionCtrl->ctrl_get_comision_idcomision( $id) ;
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
        
            $comisionCtrl = new ComisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcomision = $inputs->IdComision;
            $gc = $inputs->Gc;
            $gcurg = $inputs->GcUrg;
            $tra = $inputs->Tra;
            $igv = $inputs->Igv;
        
            $params = array(
               $idcomision,
               $gc,
               $gcurg,
               $tra,
               $igv,
            ) ; 
        
            $data = $comisionCtrl->ctrl_upd_comision($params) ;
        
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
