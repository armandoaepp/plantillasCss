<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class TipoOperacionController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }

    public function ctrl_get_tipo_operacion()
    {
        try
        {
            $objTipo_operacion  = new ClsTipo_operacion();

            $data = $objTipo_operacion->get_tipo_operacion() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_tipo_operacion($params = array() )
    {
        try
        {

            extract($params) ;

            $objTipo_operacion  = new ClsTipo_operacion($this->cnx);
            $bean_tipo_operacion = new BeanTipo_operacion();

            $bean_tipo_operacion->setIdTipoOperacion($idtipo_operacion);
            $bean_tipo_operacion->setDescripcion($descripcion);

            $data = $objTipo_operacion->set_tipo_operacion($bean_tipo_operacion) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_tipo_operacion_by_id($id)
    {
        try
        {
            $objTipo_operacion  = new ClsTipo_operacion();
            $bean_tipo_operacion = new BeanTipo_operacion();

            $bean_tipo_operacion->setId($id);
            $data = $objTipo_operacion->get_tipo_operacion() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_tipo_operacion($params = array())
    {
        try
        {

            extract($params) ;

            $objTipo_operacion  = new ClsTipo_operacion($this->cnx);
            $bean_tipo_operacion = new BeanTipo_operacion();

            $bean_tipo_operacion->setIdTipoOperacion($idtipo_operacion);
            $bean_tipo_operacion->setDescripcion($descripcion);

            $data = $objTipo_operacion->upd_tipo_operacion($bean_tipo_operacion) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
