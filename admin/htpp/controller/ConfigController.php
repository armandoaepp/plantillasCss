<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class ConfigController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_config()
    {
        try
        {
            $objConfig  = new ClsConfig();

            $data = $objConfig->get_config() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_config($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objConfig  = new ClsConfig($this->cnx);
            $bean_config = new BeanConfig();
            
            $bean_config->setIdconfig($idconfig);
            $bean_config->setidTipoEntidad($idtipoentidad);
            $bean_config->setIdValor($idvalor);
            $bean_config->setValor($valor);
            $bean_config->setReferencia($referencia);
            $bean_config->setEstado($estado);
            
            $data = $objConfig->set_config($bean_config) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_config_by_id($id)
    {
        try
        {
            $objConfig  = new ClsConfig();
            $bean_config = new BeanConfig();

            $bean_config->setId($id);
            $data = $objConfig->get_config() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_config($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objConfig  = new ClsConfig($this->cnx);
            $bean_config = new BeanConfig();
            
            $bean_config->setIdconfig($idconfig);
            $bean_config->setidTipoEntidad($idtipoentidad);
            $bean_config->setIdValor($idvalor);
            $bean_config->setValor($valor);
            $bean_config->setReferencia($referencia);
            $bean_config->setEstado($estado);
            
            $data = $objConfig->upd_config($bean_config) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
