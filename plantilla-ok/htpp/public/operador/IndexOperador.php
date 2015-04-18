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
            $operadorCtrl = new OperadorController() ; 
            $data = $operadorCtrl->ctrl_get_operador() ;
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
        
            $operadorCtrl = new OperadorController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idoperador = $inputs->IdOperador;
            $nombre = $inputs->Nombre;
            $nomoperador = $inputs->NomOperador;
            $passoperador = $inputs->PassOperador;
            $telefono1 = $inputs->Telefono1;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $codubigeo = $inputs->CodUbigeo;
            $fechareg = $inputs->FechaReg;
            $idtransp = $inputs->IdTransp;
            $estado = $inputs->Estado;
            $superusuario = $inputs->SuperUsuario;
        
            $params = array(
               $idoperador,
               $nombre,
               $nomoperador,
               $passoperador,
               $telefono1,
               $telefono2,
               $telefono3,
               $codubigeo,
               $fechareg,
               $idtransp,
               $estado,
               $superusuario,
            ) ; 
        
            $data = $operadorCtrl->ctrl_set_operador($params) ;
        
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
            $operadorCtrl = new OperadorController() ; 
            $data = $operadorCtrl->ctrl_get_operador_idoperador( $id) ;
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
        
            $operadorCtrl = new OperadorController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idoperador = $inputs->IdOperador;
            $nombre = $inputs->Nombre;
            $nomoperador = $inputs->NomOperador;
            $passoperador = $inputs->PassOperador;
            $telefono1 = $inputs->Telefono1;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $codubigeo = $inputs->CodUbigeo;
            $fechareg = $inputs->FechaReg;
            $idtransp = $inputs->IdTransp;
            $estado = $inputs->Estado;
            $superusuario = $inputs->SuperUsuario;
        
            $params = array(
               $idoperador,
               $nombre,
               $nomoperador,
               $passoperador,
               $telefono1,
               $telefono2,
               $telefono3,
               $codubigeo,
               $fechareg,
               $idtransp,
               $estado,
               $superusuario,
            ) ; 
        
            $data = $operadorCtrl->ctrl_upd_operador($params) ;
        
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
