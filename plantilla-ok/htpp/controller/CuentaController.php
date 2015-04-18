<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class CuentaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_cuenta()
    {
        try
        {
            $objCuenta  = new ClsCuenta();

            $data = $objCuenta->get_cuenta() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_cuenta($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objCuenta  = new ClsCuenta($this->cnx);
            $bean_cuenta = new BeanCuenta();
            
            $bean_cuenta->setIdCuenta($idcuenta);
            $bean_cuenta->setTipoCli($tipocli);
            $bean_cuenta->setIdCli($idcli);
            $bean_cuenta->setSaldo($saldo);
            
            $data = $objCuenta->set_cuenta($bean_cuenta) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_cuenta_by_id($id)
    {
        try
        {
            $objCuenta  = new ClsCuenta();
            $bean_cuenta = new BeanCuenta();

            $bean_cuenta->setId($id);
            $data = $objCuenta->get_cuenta() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_cuenta($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objCuenta  = new ClsCuenta($this->cnx);
            $bean_cuenta = new BeanCuenta();
            
            $bean_cuenta->setIdCuenta($idcuenta);
            $bean_cuenta->setTipoCli($tipocli);
            $bean_cuenta->setIdCli($idcli);
            $bean_cuenta->setSaldo($saldo);
            
            $data = $objCuenta->upd_cuenta($bean_cuenta) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
