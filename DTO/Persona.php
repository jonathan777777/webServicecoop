<?php

    class Persona{
        private $id_perosna;
        private $nombres;
        private $apellidos;
        private $saldo;
    }
    function __construct() {
        
    }
    

    function getIdpersona() {
        return $this->id_persona;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setIdperosna($id_perosna) {
        $this->id = $id_perosna;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

?>