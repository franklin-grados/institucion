<?php

include("../conexion/conexion.php");

class ProfileStaff extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function getUser($user_id){
        $consulta = "SELECT * FROM users WHERE user_id=? ";
        $result = $this->select_fetch($consulta, [$user_id]);
        return $result;
    }

    public function getStudent($guardian_id){
        $consulta = "SELECT * FROM guardians WHERE guardian_id=? ";
        $result = $this->select_fetch($consulta, [$guardian_id]);
        $this->cerrarConexion();
        return $result;
    }

}

?>