<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class UsuarioController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_usuario()
    {
        try
        {
            $objUsuario  = new ClsUsuario();

            $data = $objUsuario->get_usuario() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_usuario($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objUsuario  = new ClsUsuario($this->cnx);
            $bean_usuario = new BeanUsuario();
            
            $bean_usuario->setIdUsuario($idusuario);
            $bean_usuario->setNombres($nombres);
            $bean_usuario->setNomUsuario($nom_usuario);
            $bean_usuario->setPassUsuario($pass_usuario);
            $bean_usuario->setTelefono1($telefono1);
            $bean_usuario->setTelefono2($telefono2);
            $bean_usuario->setTelefono3($telefono3);
            $bean_usuario->setEmail($email);
            $bean_usuario->setUbigeo($ubigeo);
            $bean_usuario->setFechaReg($fechareg);
            $bean_usuario->setIdCliente($idcliente);
            $bean_usuario->setEstado($estado);
            $bean_usuario->setSuperUsuario($superusuario);
            
            $data = $objUsuario->set_usuario($bean_usuario) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_usuario_by_id($id)
    {
        try
        {
            $objUsuario  = new ClsUsuario();
            $bean_usuario = new BeanUsuario();

            $bean_usuario->setId($id);
            $data = $objUsuario->get_usuario() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_usuario($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objUsuario  = new ClsUsuario($this->cnx);
            $bean_usuario = new BeanUsuario();
            
            $bean_usuario->setIdUsuario($idusuario);
            $bean_usuario->setNombres($nombres);
            $bean_usuario->setNomUsuario($nom_usuario);
            $bean_usuario->setPassUsuario($pass_usuario);
            $bean_usuario->setTelefono1($telefono1);
            $bean_usuario->setTelefono2($telefono2);
            $bean_usuario->setTelefono3($telefono3);
            $bean_usuario->setEmail($email);
            $bean_usuario->setUbigeo($ubigeo);
            $bean_usuario->setFechaReg($fechareg);
            $bean_usuario->setIdCliente($idcliente);
            $bean_usuario->setEstado($estado);
            $bean_usuario->setSuperUsuario($superusuario);
            
            $data = $objUsuario->upd_usuario($bean_usuario) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
