<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsLog extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_log($bean_log)
    {
        $idlog = $bean_log->getIdLog();
        $fecha = $bean_log->getFecha();
        $idusuario = $bean_log->getIdUsuario();
        $ocurrencia = $bean_log->getOcurrencia();

        $this->query = "CALL usp_set_log('$idlog','$fecha','$idusuario','$ocurrencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_log($bean_log)
    {
        $idlog = $bean_log->getIdLog();
        $fecha = $bean_log->getFecha();
        $idusuario = $bean_log->getIdUsuario();
        $ocurrencia = $bean_log->getOcurrencia();

        $this->query = "CALL usp_upd_log('$idlog','$fecha','$idusuario','$ocurrencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_log_estado($bean_log)
    {
        $idlog = $bean_log->getIdLog();
        $ocurrencia = $bean_log->getOcurrencia();

        $this->query = "CALL usp_upd_log_estado('$idlog','$ocurrencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_log_by_idlog($bean_log)
    {
        $idlog = $bean_log->getIdLog();

        $this->query = "CALL usp_get_log_by_idlog('$idlog')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_log()
    {
        $this->query = "CALL usp_get_log()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>