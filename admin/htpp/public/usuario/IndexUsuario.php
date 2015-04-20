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
            $usuarioCtrl = new UsuarioController() ;
            $data = $usuarioCtrl->ctrl_get_usuario() ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => array());
        }

        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    # sin implementar

    case "set":

        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();

            $usuarioCtrl = new UsuarioController($cnx) ;
            $objConexion->beginTransaction();

            $idusuario = $inputs->IdUsuario;
            $nombres = $inputs->Nombres;
            $nomusuario = $inputs->NomUsuario;
            $passusuario = $inputs->PassUsuario;
            $telefono1 = $inputs->Telefono1;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $email = $inputs->Email;
            $ubigeo = $inputs->Ubigeo;
            $fechareg = $inputs->FechaReg;
            $idcliente = $inputs->IdCliente;
            $estado = $inputs->Estado;
            $superusuario = $inputs->SuperUsuario;

            $params = array(
               $idusuario,
               $nombres,
               $nomusuario,
               $passusuario,
               $telefono1,
               $telefono2,
               $telefono3,
               $email,
               $ubigeo,
               $fechareg,
               $idcliente,
               $estado,
               $superusuario,
            ) ;

            $data = $usuarioCtrl->ctrl_set_usuario($params) ;

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
            $usuarioCtrl = new UsuarioController() ;
            $data = $usuarioCtrl->ctrl_get_usuario_idusuario( $id) ;
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

            $usuarioCtrl = new UsuarioController($cnx) ;
            $objConexion->beginTransaction();

            $idusuario = $inputs->IdUsuario;
            $nombres = $inputs->Nombres;
            $nomusuario = $inputs->NomUsuario;
            $passusuario = $inputs->PassUsuario;
            $telefono1 = $inputs->Telefono1;
            $telefono2 = $inputs->Telefono2;
            $telefono3 = $inputs->Telefono3;
            $email = $inputs->Email;
            $ubigeo = $inputs->Ubigeo;
            $fechareg = $inputs->FechaReg;
            $idcliente = $inputs->IdCliente;
            $estado = $inputs->Estado;
            $superusuario = $inputs->SuperUsuario;

            $params = array(
               $idusuario,
               $nombres,
               $nomusuario,
               $passusuario,
               $telefono1,
               $telefono2,
               $telefono3,
               $email,
               $ubigeo,
               $fechareg,
               $idcliente,
               $estado,
               $superusuario,
            ) ;

            $data = $usuarioCtrl->ctrl_upd_usuario($params) ;

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
