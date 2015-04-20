<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsTransportista extends ClsConexion {
# CONSTRUCT
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

# Método Eliminar(Actualizar Estado)
    public function get_transportita_by_estado($bean_transportista)
    {
        $estado = $bean_transportista->getEstado();

        $this->query = "CALL usp_get_transportita_by_estado('$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }


    public function get_transportita_by_estado1()
    {

        $this->query = "CALL usp_get_transportita_by_estado('1')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_transportista_by_idtransp($bean_transportista)
    {
        $idtransp = $bean_transportista->getIdTtransp();

        $this->query = "CALL usp_get_transportista_by_idtransp('$idtransp')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }

}

/*$objTransportista =  new ClsTransportista() ;
$data = $objTransportista->get_transportita_by_estado1();
  var_dump($data) ;*/