<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class GcController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_gc()
    {
        try
        {
            $objGc  = new ClsGc();

            $data = $objGc->get_gc() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_gc($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objGc  = new ClsGc($this->cnx);
            $bean_gc = new BeanGc();
            
            $bean_gc->setIdGc($idgc);
            $bean_gc->setRazonsocial($razonsocial);
            $bean_gc->setDireccion($direccion);
            $bean_gc->setTelefonos($telefonos);
            $bean_gc->setTelefono2($telefono2);
            $bean_gc->setTelefono3($telefono3);
            $bean_gc->setEmail($email);
            $bean_gc->setAvatar($avatar);
            $bean_gc->setTipoDoc($tipodoc);
            $bean_gc->setNumeroDoc($numerodoc);
            $bean_gc->setRepresentante($representante);
            $bean_gc->setTipo($tipo);
            $bean_gc->setLugar($lugar);
            $bean_gc->setFechaReg($fechareg);
            $bean_gc->setEstado($estado);
            $bean_gc->setRequisitos($requisitos);
            
            $data = $objGc->set_gc($bean_gc) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_gc_by_id($id)
    {
        try
        {
            $objGc  = new ClsGc();
            $bean_gc = new BeanGc();

            $bean_gc->setId($id);
            $data = $objGc->get_gc() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_gc($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objGc  = new ClsGc($this->cnx);
            $bean_gc = new BeanGc();
            
            $bean_gc->setIdGc($idgc);
            $bean_gc->setRazonsocial($razonsocial);
            $bean_gc->setDireccion($direccion);
            $bean_gc->setTelefonos($telefonos);
            $bean_gc->setTelefono2($telefono2);
            $bean_gc->setTelefono3($telefono3);
            $bean_gc->setEmail($email);
            $bean_gc->setAvatar($avatar);
            $bean_gc->setTipoDoc($tipodoc);
            $bean_gc->setNumeroDoc($numerodoc);
            $bean_gc->setRepresentante($representante);
            $bean_gc->setTipo($tipo);
            $bean_gc->setLugar($lugar);
            $bean_gc->setFechaReg($fechareg);
            $bean_gc->setEstado($estado);
            $bean_gc->setRequisitos($requisitos);
            
            $data = $objGc->upd_gc($bean_gc) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
