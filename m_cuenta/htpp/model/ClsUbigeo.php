<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsUbigeo extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_ubigeo($bean_ubigeo)
    {
        $codubigeo = $bean_ubigeo->getCodUbigeo();
        $lugar = $bean_ubigeo->getLugar();
        $longitud = $bean_ubigeo->getLongitud();
        $latitud = $bean_ubigeo->getLatitud();

        $this->query = "CALL usp_set_ubigeo('$codubigeo','$lugar','$longitud','$latitud')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_ubigeo($bean_ubigeo)
    {
        $codubigeo = $bean_ubigeo->getCodUbigeo();
        $lugar = $bean_ubigeo->getLugar();
        $longitud = $bean_ubigeo->getLongitud();
        $latitud = $bean_ubigeo->getLatitud();

        $this->query = "CALL usp_upd_ubigeo('$codubigeo','$lugar','$longitud','$latitud')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_ubigeo_estado($bean_ubigeo)
    {
        $codubigeo = $bean_ubigeo->getCodUbigeo();
        $latitud = $bean_ubigeo->getLatitud();

        $this->query = "CALL usp_upd_ubigeo_estado('$codubigeo','$latitud')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_ubigeo_by_codubigeo($bean_ubigeo)
    {
        $codubigeo = $bean_ubigeo->getCodUbigeo();

        $this->query = "CALL usp_get_ubigeo_by_codubigeo('$codubigeo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_ubigeo()
    {
        $this->query = "CALL usp_get_ubigeo()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>