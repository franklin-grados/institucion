<?php

include("../conexion/conexion.php");

class Profile extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function getUser($user_id){
        $consulta = "SELECT * FROM users WHERE user_id=? ";
        $result = $this->select_fetch($consulta, [$user_id]);
        return $result;
    }

    public function getStudent($student_id){
        $consulta = "SELECT * FROM students WHERE student_id=? ";
        $result = $this->select_fetch($consulta, [$student_id]);
        $this->cerrarConexion();
        return $result;
    }

}









?>