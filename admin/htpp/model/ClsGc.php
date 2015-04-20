<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsGc extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_gc($bean_gc)
    {
        $idgc = $bean_gc->getIdGc();
        $razonsocial = $bean_gc->getRazonsocial();
        $direccion = $bean_gc->getDireccion();
        $telefonos = $bean_gc->getTelefonos();
        $telefono2 = $bean_gc->getTelefono2();
        $telefono3 = $bean_gc->getTelefono3();
        $email = $bean_gc->getEmail();
        $avatar = $bean_gc->getAvatar();
        $tipodoc = $bean_gc->getTipoDoc();
        $numerodoc = $bean_gc->getNumeroDoc();
        $representante = $bean_gc->getRepresentante();
        $tipo = $bean_gc->getTipo();
        $lugar = $bean_gc->getLugar();
        $fechareg = $bean_gc->getFechaReg();
        $estado = $bean_gc->getEstado();
        $requisitos = $bean_gc->getRequisitos();

        $this->query = "CALL usp_set_gc('$idgc','$razonsocial','$direccion','$telefonos','$telefono2','$telefono3','$email','$avatar','$tipodoc','$numerodoc','$representante','$tipo','$lugar','$fechareg','$estado','$requisitos')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_gc($bean_gc)
    {
        $idgc = $bean_gc->getIdGc();
        $razonsocial = $bean_gc->getRazonsocial();
        $direccion = $bean_gc->getDireccion();
        $telefonos = $bean_gc->getTelefonos();
        $telefono2 = $bean_gc->getTelefono2();
        $telefono3 = $bean_gc->getTelefono3();
        $email = $bean_gc->getEmail();
        $avatar = $bean_gc->getAvatar();
        $tipodoc = $bean_gc->getTipoDoc();
        $numerodoc = $bean_gc->getNumeroDoc();
        $representante = $bean_gc->getRepresentante();
        $tipo = $bean_gc->getTipo();
        $lugar = $bean_gc->getLugar();
        $fechareg = $bean_gc->getFechaReg();
        $estado = $bean_gc->getEstado();
        $requisitos = $bean_gc->getRequisitos();

        $this->query = "CALL usp_upd_gc('$idgc','$razonsocial','$direccion','$telefonos','$telefono2','$telefono3','$email','$avatar','$tipodoc','$numerodoc','$representante','$tipo','$lugar','$fechareg','$estado','$requisitos')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_gc_estado($bean_gc)
    {
        $idgc = $bean_gc->getIdGc();
        $requisitos = $bean_gc->getRequisitos();

        $this->query = "CALL usp_upd_gc_estado('$idgc','$requisitos')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_gc_by_idgc($bean_gc)
    {
        $idgc = $bean_gc->getIdGc();

        $this->query = "CALL usp_get_gc_by_idgc('$idgc')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_gc()
    {
        $this->query = "CALL usp_get_gc()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>