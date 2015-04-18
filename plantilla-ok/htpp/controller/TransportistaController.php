<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class TransportistaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
# usp_get_transportita_by_estado
    public function ctrl_get_transportita_by_estado($estado)
    {
        try
        {
            $objTransportista   = new ClsTransportista();
            $bean_transportista = new BeanTransportista();

            $bean_transportista->setEstado($estado);

            $data = $objTransportista->get_transportita_by_estado( $bean_transportista) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception("Error: ".$e->getMessage());
        }
    }

}


