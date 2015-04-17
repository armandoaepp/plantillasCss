<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class OperadorController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_operador()
    {
        try
        {
            $objOperador  = new ClsOperador();

            $data = $objOperador->get_operador() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_operador($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objOperador  = new ClsOperador($this->cnx);
            $bean_operador = new BeanOperador();
            
            $bean_operador->setIdOperador($idoperador);
            $bean_operador->setNombre($nombre);
            $bean_operador->setNomOperador($nom_operador);
            $bean_operador->setPassOperador($pass_operador);
            $bean_operador->setTelefono1($telefono1);
            $bean_operador->setTelefono2($telefono2);
            $bean_operador->setTelefono3($telefono3);
            $bean_operador->setCodUbigeo($codubigeo);
            $bean_operador->setFechaReg($fechareg);
            $bean_operador->setIdTransp($idtransp);
            $bean_operador->setEstado($estado);
            $bean_operador->setSuperUsuario($superusuario);
            
            $data = $objOperador->set_operador($bean_operador) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_operador_by_id($id)
    {
        try
        {
            $objOperador  = new ClsOperador();
            $bean_operador = new BeanOperador();

            $bean_operador->setId($id);
            $data = $objOperador->get_operador() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_operador($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objOperador  = new ClsOperador($this->cnx);
            $bean_operador = new BeanOperador();
            
            $bean_operador->setIdOperador($idoperador);
            $bean_operador->setNombre($nombre);
            $bean_operador->setNomOperador($nom_operador);
            $bean_operador->setPassOperador($pass_operador);
            $bean_operador->setTelefono1($telefono1);
            $bean_operador->setTelefono2($telefono2);
            $bean_operador->setTelefono3($telefono3);
            $bean_operador->setCodUbigeo($codubigeo);
            $bean_operador->setFechaReg($fechareg);
            $bean_operador->setIdTransp($idtransp);
            $bean_operador->setEstado($estado);
            $bean_operador->setSuperUsuario($superusuario);
            
            $data = $objOperador->upd_operador($bean_operador) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
