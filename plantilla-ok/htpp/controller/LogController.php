<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class LogController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_log()
    {
        try
        {
            $objLog  = new ClsLog();

            $data = $objLog->get_log() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_log($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objLog  = new ClsLog($this->cnx);
            $bean_log = new BeanLog();
            
            $bean_log->setIdLog($idlog);
            $bean_log->setFecha($fecha);
            $bean_log->setIdUsuario($idusuario);
            $bean_log->setOcurrencia($ocurrencia);
            
            $data = $objLog->set_log($bean_log) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_log_by_id($id)
    {
        try
        {
            $objLog  = new ClsLog();
            $bean_log = new BeanLog();

            $bean_log->setId($id);
            $data = $objLog->get_log() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_log($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objLog  = new ClsLog($this->cnx);
            $bean_log = new BeanLog();
            
            $bean_log->setIdLog($idlog);
            $bean_log->setFecha($fecha);
            $bean_log->setIdUsuario($idusuario);
            $bean_log->setOcurrencia($ocurrencia);
            
            $data = $objLog->upd_log($bean_log) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
