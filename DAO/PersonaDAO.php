<?php
class PersonaDAO {
    private $conexion = null;
    
    public function __construct(){
        $this->conexion = Conexion::getConexion();
    }


    public function consultar($criterio){
       $sql = "select * from persona where estado=1";
        $array = array();
        if (!empty($criterio)){
            $sql = $sql." AND NOMBRE LIKE concat('%',?,'%')"; 
            $array = array($criterio);
        }
        $resultset= $this->conexion->ejecutarConsultaClase($sql,$array,'Persona');
        return $resultset;
    }
}