<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsComision extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_comision($bean_comision)
    {
        $idcomision = $bean_comision->getIdComision();
        $gc = $bean_comision->getGc();
        $gc_urg = $bean_comision->getGcUrg();
        $tra = $bean_comision->getTra();
        $igv = $bean_comision->getIgv();

        $this->query = "CALL usp_set_comision('$idcomision','$gc','$gc_urg','$tra','$igv')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_comision($bean_comision)
    {
        $idcomision = $bean_comision->getIdComision();
        $gc = $bean_comision->getGc();
        $gc_urg = $bean_comision->getGcUrg();
        $tra = $bean_comision->getTra();
        $igv = $bean_comision->getIgv();

        $this->query = "CALL usp_upd_comision('$idcomision','$gc','$gc_urg','$tra','$igv')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_comision_estado($bean_comision)
    {
        $idcomision = $bean_comision->getIdComision();
        $igv = $bean_comision->getIgv();

        $this->query = "CALL usp_upd_comision_estado('$idcomision','$igv')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_comision_by_idcomision($bean_comision)
    {
        $idcomision = $bean_comision->getIdComision();

        $this->query = "CALL usp_get_comision_by_idcomision('$idcomision')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_comision()
    {
        $this->query = "CALL usp_get_comision()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>