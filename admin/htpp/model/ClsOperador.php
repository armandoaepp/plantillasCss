<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsOperador extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_operador($bean_operador)
    {
        $idoperador = $bean_operador->getIdOperador();
        $nombre = $bean_operador->getNombre();
        $nom_operador = $bean_operador->getNomOperador();
        $pass_operador = $bean_operador->getPassOperador();
        $telefono1 = $bean_operador->getTelefono1();
        $telefono2 = $bean_operador->getTelefono2();
        $telefono3 = $bean_operador->getTelefono3();
        $codubigeo = $bean_operador->getCodUbigeo();
        $fechareg = $bean_operador->getFechaReg();
        $idtransp = $bean_operador->getIdTransp();
        $estado = $bean_operador->getEstado();
        $superusuario = $bean_operador->getSuperUsuario();

        $this->query = "CALL usp_set_operador('$idoperador','$nombre','$nom_operador','$pass_operador','$telefono1','$telefono2','$telefono3','$codubigeo','$fechareg','$idtransp','$estado','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_operador($bean_operador)
    {
        $idoperador = $bean_operador->getIdOperador();
        $nombre = $bean_operador->getNombre();
        $nom_operador = $bean_operador->getNomOperador();
        $pass_operador = $bean_operador->getPassOperador();
        $telefono1 = $bean_operador->getTelefono1();
        $telefono2 = $bean_operador->getTelefono2();
        $telefono3 = $bean_operador->getTelefono3();
        $codubigeo = $bean_operador->getCodUbigeo();
        $fechareg = $bean_operador->getFechaReg();
        $idtransp = $bean_operador->getIdTransp();
        $estado = $bean_operador->getEstado();
        $superusuario = $bean_operador->getSuperUsuario();

        $this->query = "CALL usp_upd_operador('$idoperador','$nombre','$nom_operador','$pass_operador','$telefono1','$telefono2','$telefono3','$codubigeo','$fechareg','$idtransp','$estado','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_operador_estado($bean_operador)
    {
        $idoperador = $bean_operador->getIdOperador();
        $superusuario = $bean_operador->getSuperUsuario();

        $this->query = "CALL usp_upd_operador_estado('$idoperador','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_operador_by_idoperador($bean_operador)
    {
        $idoperador = $bean_operador->getIdOperador();

        $this->query = "CALL usp_get_operador_by_idoperador('$idoperador')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_operador()
    {
        $this->query = "CALL usp_get_operador()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>