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
            $gcCtrl = new GcController() ; 
            $data = $gcCtrl->ctrl_get_gc() ;
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
        
            $gcCtrl = new GcController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idgc = $inputs->IdGc;
            $razonsocial = $inputs->Razonsocial;
            $direccion = $inputs->Direccion;
            $telefonos = $inputs->Telefonos;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $email = $inputs->Email;
            $avatar = $inputs->Avatar;
            $tipodoc = $inputs->TipoDoc;
            $numerodoc = $inputs->NumeroDoc;
            $representante = $inputs->Representante;
            $tipo = $inputs->Tipo;
            $lugar = $inputs->Lugar;
            $fechareg = $inputs->FechaReg;
            $estado = $inputs->Estado;
            $requisitos = $inputs->Requisitos;
        
            $params = array(
               $idgc,
               $razonsocial,
               $direccion,
               $telefonos,
               $telefono2,
               $telefono3,
               $email,
               $avatar,
               $tipodoc,
               $numerodoc,
               $representante,
               $tipo,
               $lugar,
               $fechareg,
               $estado,
               $requisitos,
            ) ; 
        
            $data = $gcCtrl->ctrl_set_gc($params) ;
        
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
            $gcCtrl = new GcController() ; 
            $data = $gcCtrl->ctrl_get_gc_idgc( $id) ;
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
        
            $gcCtrl = new GcController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idgc = $inputs->IdGc;
            $razonsocial = $inputs->Razonsocial;
            $direccion = $inputs->Direccion;
            $telefonos = $inputs->Telefonos;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $email = $inputs->Email;
            $avatar = $inputs->Avatar;
            $tipodoc = $inputs->TipoDoc;
            $numerodoc = $inputs->NumeroDoc;
            $representante = $inputs->Representante;
            $tipo = $inputs->Tipo;
            $lugar = $inputs->Lugar;
            $fechareg = $inputs->FechaReg;
            $estado = $inputs->Estado;
            $requisitos = $inputs->Requisitos;
        
            $params = array(
               $idgc,
               $razonsocial,
               $direccion,
               $telefonos,
               $telefono2,
               $telefono3,
               $email,
               $avatar,
               $tipodoc,
               $numerodoc,
               $representante,
               $tipo,
               $lugar,
               $fechareg,
               $estado,
               $requisitos,
            ) ; 
        
            $data = $gcCtrl->ctrl_upd_gc($params) ;
        
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
