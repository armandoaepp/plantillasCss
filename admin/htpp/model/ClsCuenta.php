<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsCuenta extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_cuenta($bean_cuenta)
    {
        $idcuenta = $bean_cuenta->getIdCuenta();
        $tipocli = $bean_cuenta->getTipoCli();
        $idcli = $bean_cuenta->getIdCli();
        $saldo = $bean_cuenta->getSaldo();

        $this->query = "CALL usp_set_cuenta('$idcuenta','$tipocli','$idcli','$saldo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_cuenta($bean_cuenta)
    {
        $idcuenta = $bean_cuenta->getIdCuenta();
        $tipocli = $bean_cuenta->getTipoCli();
        $idcli = $bean_cuenta->getIdCli();
        $saldo = $bean_cuenta->getSaldo();

        $this->query = "CALL usp_upd_cuenta('$idcuenta','$tipocli','$idcli','$saldo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_cuenta_estado($bean_cuenta)
    {
        $idcuenta = $bean_cuenta->getIdCuenta();
        $saldo = $bean_cuenta->getSaldo();

        $this->query = "CALL usp_upd_cuenta_estado('$idcuenta','$saldo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_cuenta_by_idcuenta($bean_cuenta)
    {
        $idcuenta = $bean_cuenta->getIdCuenta();

        $this->query = "CALL usp_get_cuenta_by_idcuenta('$idcuenta')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_cuenta()
    {
        $this->query = "CALL usp_get_cuenta()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>