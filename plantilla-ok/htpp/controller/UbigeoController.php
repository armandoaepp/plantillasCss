<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class UbigeoController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_ubigeo()
    {
        try
        {
            $objUbigeo  = new ClsUbigeo();

            $data = $objUbigeo->get_ubigeo() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_ubigeo($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objUbigeo  = new ClsUbigeo($this->cnx);
            $bean_ubigeo = new BeanUbigeo();
            
            $bean_ubigeo->setCodUbigeo($codubigeo);
            $bean_ubigeo->setLugar($lugar);
            $bean_ubigeo->setLongitud($longitud);
            $bean_ubigeo->setLatitud($latitud);
            
            $data = $objUbigeo->set_ubigeo($bean_ubigeo) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_ubigeo_by_id($id)
    {
        try
        {
            $objUbigeo  = new ClsUbigeo();
            $bean_ubigeo = new BeanUbigeo();

            $bean_ubigeo->setId($id);
            $data = $objUbigeo->get_ubigeo() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_ubigeo($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objUbigeo  = new ClsUbigeo($this->cnx);
            $bean_ubigeo = new BeanUbigeo();
            
            $bean_ubigeo->setCodUbigeo($codubigeo);
            $bean_ubigeo->setLugar($lugar);
            $bean_ubigeo->setLongitud($longitud);
            $bean_ubigeo->setLatitud($latitud);
            
            $data = $objUbigeo->upd_ubigeo($bean_ubigeo) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
