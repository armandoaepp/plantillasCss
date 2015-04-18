<?php 
# Clase Bean Generada  - Creado por @armandoaepp 
class BeanCuenta{
# Constructor
    public function __construct(){}
# Atributos
    private $idcuenta;
    private $tipocli;
    private $idcli;
    private $saldo;
# METODOS
    public function setIdCuenta($idcuenta_){ $this->idcuenta=$idcuenta_;}
    public function getIdCuenta(){ return $this->idcuenta;}
    public function setTipoCli($tipocli_){ $this->tipocli=$tipocli_;}
    public function getTipoCli(){ return $this->tipocli;}
    public function setIdCli($idcli_){ $this->idcli=$idcli_;}
    public function getIdCli(){ return $this->idcli;}
    public function setSaldo($saldo_){ $this->saldo=$saldo_;}
    public function getSaldo(){ return $this->saldo;}
}
?>