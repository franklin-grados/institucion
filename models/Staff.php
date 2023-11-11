<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("../conexion/conexion.php");

class Staff extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function listStaff($center_id, $department_id){
        $consulta = "SELECT s.center_id, s.staff_id, s.staff_firstname, s.staff_lastname, s.staff_nric, s.staff_phone_home, s.staff_phone_office, s.staff_phone_mobile, s.staff_email, s.staff_status, d.department_name, c.center_name
        FROM staff s
        INNER JOIN departments d ON s.department_id = d.department_id
        INNER JOIN centers c ON s.center_id = c.center_id WHERE s.department_id=? AND s.center_id=?";
        $result = $this->consultarVariasFilas($consulta, [$center_id,$department_id]);
        // $unaFila = $this->listarUnaFila($consulta);
        $this->cerrarConexion();
        return $result;
    }

    public function listarSelect() {
        $consulta_d="SELECT * FROM departments";
        $result_d = $this->consultarVariasFilas($consulta_d, []);
        $consulta_c="SELECT * FROM centers";
        $result_c = $this->consultarVariasFilas($consulta_c, []);
        $this->cerrarConexion();
        return["result_d"=>$result_d,"result_c"=>$result_c];
    }
}









?>