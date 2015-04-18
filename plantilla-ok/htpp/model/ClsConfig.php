<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsConfig extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_config($bean_config)
    {
        $idconfig = $bean_config->getIdconfig();
        $idtipoentidad = $bean_config->getIdTipoEntidad();
        $idvalor = $bean_config->getIdValor();
        $valor = $bean_config->getValor();
        $referencia = $bean_config->getReferencia();
        $estado = $bean_config->getEstado();

        $this->query = "CALL usp_set_config('$idconfig','$idtipoentidad','$idvalor','$valor','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_config($bean_config)
    {
        $idconfig = $bean_config->getIdconfig();
        $idtipoentidad = $bean_config->getIdTipoEntidad();
        $idvalor = $bean_config->getIdValor();
        $valor = $bean_config->getValor();
        $referencia = $bean_config->getReferencia();
        $estado = $bean_config->getEstado();

        $this->query = "CALL usp_upd_config('$idconfig','$idtipoentidad','$idvalor','$valor','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_config_estado($bean_config)
    {
        $idconfig = $bean_config->getIdconfig();
        $estado = $bean_config->getEstado();

        $this->query = "CALL usp_upd_config_estado('$idconfig','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_config_by_idconfig($bean_config)
    {
        $idconfig = $bean_config->getIdconfig();

        $this->query = "CALL usp_get_config_by_idconfig('$idconfig')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_config()
    {
        $this->query = "CALL usp_get_config()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>