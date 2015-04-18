<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsTipoOperacion extends ClsConexion {
# CONSTRUCT
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_tipo_operacion($bean_tipo_operacion)
    {
        $idtipo_operacion = $bean_tipo_operacion->getIdTipoOperacion();
        $descripcion = $bean_tipo_operacion->getDescripcion();

        $this->query = "CALL usp_set_tipo_operacion('$idtipo_operacion','$descripcion')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_tipo_operacion($bean_tipo_operacion)
    {
        $idtipo_operacion = $bean_tipo_operacion->getIdTipoOperacion();
        $descripcion = $bean_tipo_operacion->getDescripcion();

        $this->query = "CALL usp_upd_tipo_operacion('$idtipo_operacion','$descripcion')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_tipo_operacion_estado($bean_tipo_operacion)
    {
        $idtipo_operacion = $bean_tipo_operacion->getIdTipoOperacion();
        $descripcion = $bean_tipo_operacion->getDescripcion();

        $this->query = "CALL usp_upd_tipo_operacion_estado('$idtipo_operacion','$descripcion')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_tipo_operacion_by_idtipo_operacion($bean_tipo_operacion)
    {
        $idtipo_operacion = $bean_tipo_operacion->getIdTipoOperacion();

        $this->query = "CALL usp_get_tipo_operacion_by_idtipo_operacion('$idtipo_operacion')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos
    public function get_tipo_operacion()
    {
        $this->query = "CALL usp_get_tipo_operacion()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>