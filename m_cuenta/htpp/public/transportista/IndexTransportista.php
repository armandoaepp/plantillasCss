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
            $transportistaCtrl = new TransportistaController() ; 
            $data = $transportistaCtrl->ctrl_get_transportista() ;
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
        
            $transportistaCtrl = new TransportistaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idttransp = $inputs->IdTtransp;
            $razonsocial = $inputs->RazonSocial;
            $direccion = $inputs->Direccion;
            $telefonos = $inputs->Telefonos;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $tmail = $inputs->Tmail;
            $avatar = $inputs->Avatar;
            $ruc = $inputs->Ruc;
            $representante = $inputs->Representante;
            $puntuacion = $inputs->Puntuacion;
            $permisos = $inputs->Permisos;
            $web = $inputs->Web;
            $facebook = $inputs->Facebook;
            $twitter = $inputs->Twitter;
            $fechareg = $inputs->Fechareg;
            $estado = $inputs->Estado;
            $certificada = $inputs->Certificada;
            $ubigeo = $inputs->Ubigeo;
        
            $params = array(
               $idttransp,
               $razonsocial,
               $direccion,
               $telefonos,
               $telefono2,
               $telefono3,
               $tmail,
               $avatar,
               $ruc,
               $representante,
               $puntuacion,
               $permisos,
               $web,
               $facebook,
               $twitter,
               $fechareg,
               $estado,
               $certificada,
               $ubigeo,
            ) ; 
        
            $data = $transportistaCtrl->ctrl_set_transportista($params) ;
        
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
            $transportistaCtrl = new TransportistaController() ; 
            $data = $transportistaCtrl->ctrl_get_transportista_idtransportista( $id) ;
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
        
            $transportistaCtrl = new TransportistaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idttransp = $inputs->IdTtransp;
            $razonsocial = $inputs->RazonSocial;
            $direccion = $inputs->Direccion;
            $telefonos = $inputs->Telefonos;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $tmail = $inputs->Tmail;
            $avatar = $inputs->Avatar;
            $ruc = $inputs->Ruc;
            $representante = $inputs->Representante;
            $puntuacion = $inputs->Puntuacion;
            $permisos = $inputs->Permisos;
            $web = $inputs->Web;
            $facebook = $inputs->Facebook;
            $twitter = $inputs->Twitter;
            $fechareg = $inputs->Fechareg;
            $estado = $inputs->Estado;
            $certificada = $inputs->Certificada;
            $ubigeo = $inputs->Ubigeo;
        
            $params = array(
               $idttransp,
               $razonsocial,
               $direccion,
               $telefonos,
               $telefono2,
               $telefono3,
               $tmail,
               $avatar,
               $ruc,
               $representante,
               $puntuacion,
               $permisos,
               $web,
               $facebook,
               $twitter,
               $fechareg,
               $estado,
               $certificada,
               $ubigeo,
            ) ; 
        
            $data = $transportistaCtrl->ctrl_upd_transportista($params) ;
        
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
