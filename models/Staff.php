<?php
include("../conexion/conexion.php");

class Staff{
    public function __construct() {
        
    }

    public function listStaff($center_id, $department_id){
        $conexion = new Database();
        $consulta = "SELECT s.center_id, s.staff_id, s.staff_firstname, s.staff_lastname, s.staff_nric, s.staff_phone_home, s.staff_phone_office, s.staff_phone_mobile, s.staff_email, s.staff_status, d.department_name, c.center_name
        FROM staff s
        INNER JOIN departments d ON s.department_id = d.department_id
        INNER JOIN centers c ON s.center_id = c.center_id WHERE s.department_id=? AND s.center_id=?";
        $result = $conexion->consultarVariasFilas($consulta, [$center_id,$department_id]);
        // $unaFila = $conexion->listarUnaFila($consulta);
        $conexion->cerrarConexion();
        return $result;
    }

    public function listarSelect() {
        $conexion = new Database();
        $consulta_d="SELECT * FROM departments";
        $result_d = $conexion->consultarVariasFilas($consulta_d, []);
        $consulta_c="SELECT * FROM centers";
        $result_c = $conexion->consultarVariasFilas($consulta_c, []);
        return["result_d"=>$result_d,"result_c"=>$result_c];
    }
}









?>