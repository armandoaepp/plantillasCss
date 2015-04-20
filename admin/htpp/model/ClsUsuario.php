<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsUsuario extends ClsConexion {

# CONSTRUCT
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_usuario($bean_usuario)
    {
        $idusuario    = $bean_usuario->getIdUsuario();
        $nombres      = $bean_usuario->getNombres();
        $nom_usuario  = $bean_usuario->getNomUsuario();
        $pass_usuario = $bean_usuario->getPassUsuario();
        $telefono1    = $bean_usuario->getTelefono1();
        $telefono2    = $bean_usuario->getTelefono2();
        $telefono3    = $bean_usuario->getTelefono3();
        $email        = $bean_usuario->getEmail();
        $ubigeo       = $bean_usuario->getUbigeo();
        $fechareg     = $bean_usuario->getFechaReg();
        $idcliente    = $bean_usuario->getIdCliente();
        $estado       = $bean_usuario->getEstado();
        $superusuario = $bean_usuario->getSuperUsuario();

        $this->query = "CALL usp_set_usuario('$idusuario','$nombres','$nom_usuario','$pass_usuario','$telefono1','$telefono2','$telefono3','$email','$ubigeo','$fechareg','$idcliente','$estado','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_usuario($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();
        $nombres = $bean_usuario->getNombres();
        $nom_usuario = $bean_usuario->getNomUsuario();
        $pass_usuario = $bean_usuario->getPassUsuario();
        $telefono1 = $bean_usuario->getTelefono1();
        $telefono2 = $bean_usuario->getTelefono2();
        $telefono3 = $bean_usuario->getTelefono3();
        $email = $bean_usuario->getEmail();
        $ubigeo = $bean_usuario->getUbigeo();
        $fechareg = $bean_usuario->getFechaReg();
        $idcliente = $bean_usuario->getIdCliente();
        $estado = $bean_usuario->getEstado();
        $superusuario = $bean_usuario->getSuperUsuario();

        $this->query = "CALL usp_upd_usuario('$idusuario','$nombres','$nom_usuario','$pass_usuario','$telefono1','$telefono2','$telefono3','$email','$ubigeo','$fechareg','$idcliente','$estado','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_usuario_estado($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();
        $superusuario = $bean_usuario->getSuperUsuario();

        $this->query = "CALL usp_upd_usuario_estado('$idusuario','$superusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_usuario_by_idusuario($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();

        $this->query = "CALL usp_get_usuario_by_idusuario('$idusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos
    public function get_usuario()
    {
        $this->query = "CALL usp_get_usuario()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>