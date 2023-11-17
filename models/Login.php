<?php
include("../conexion/conexion.php");

class Login extends Database{
    public function __construct() {
        parent::__construct();
    }

    function iniciarSession($user_login, $user_password) {
        $sql="SELECT * FROM users WHERE user_login=?";
        $resul = $this->select_fetch($sql, [$user_login]);
        if($resul) {
            // $hash = password_hash($user_password, PASSWORD_BCRYPT, ['cost' => 10]);
            if (password_verify($user_password, $resul['user_password'])) {
                session_start();
                $this->verifyTipUser($resul);
                $sql="SELECT * FROM users WHERE user_login=?";
                $datos=[];
                
                $datos=['ruta_inicio'=>$resul['user_salt']];
                $this->cerrarConexion();
                return $datos;
            }else{
                throw new Exception("La contraseña es incorrecta");
            }
        }else{
            throw new Exception("El correo no existe");
        }
    }

    function verifyTipUser($datos){
        if($datos['guardian_id']){
            $sql= "SELECT * FROM guardians WHERE guardian_id=?";
            $data = $this->select_fetch($sql, [$datos['guardian_id']]);
        }else if($datos['staff_id']){
            $sql= "SELECT * FROM guardians WHERE staff_id=?";
            $data = $this->select_fetch($sql, [$datos['staff_id']]);
        }else if($datos['student_id']){
            $sql= "SELECT * FROM students WHERE student_id=?";
            $data = $this->select_fetch($sql, [$datos['student_id']]);

            $_SESSION['user_id']=$datos['user_id'];
            $_SESSION['student_id']=$data['student_id'];
            $_SESSION['firstname']=$data['student_firstname'];
            $_SESSION['lastname']=$data['student_lastname'];
            $_SESSION['email'] = $datos['user_login'];
            $_SESSION['center_id']=$data['center_id'];
            
        }else{
            throw new Exception("No existe este tipo de Usuario");
        }
        // return $datos["user_salt"];
        return $data;
    }
    
}



?>