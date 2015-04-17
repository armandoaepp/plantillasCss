<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class ComisionController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_comision()
    {
        try
        {
            $objComision  = new ClsComision();

            $data = $objComision->get_comision() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_comision($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objComision  = new ClsComision($this->cnx);
            $bean_comision = new BeanComision();
            
            $bean_comision->setIdComision($idcomision);
            $bean_comision->setGc($gc);
            $bean_comision->setGcUrg($gc_urg);
            $bean_comision->setTra($tra);
            $bean_comision->setIgv($igv);
            
            $data = $objComision->set_comision($bean_comision) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_comision_by_id($id)
    {
        try
        {
            $objComision  = new ClsComision();
            $bean_comision = new BeanComision();

            $bean_comision->setId($id);
            $data = $objComision->get_comision() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_comision($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objComision  = new ClsComision($this->cnx);
            $bean_comision = new BeanComision();
            
            $bean_comision->setIdComision($idcomision);
            $bean_comision->setGc($gc);
            $bean_comision->setGcUrg($gc_urg);
            $bean_comision->setTra($tra);
            $bean_comision->setIgv($igv);
            
            $data = $objComision->upd_comision($bean_comision) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
