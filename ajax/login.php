<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("../validation/loginValidation.php");
include("../models/Login.php");

$loginValidation = new LoginValidation();
$login = new Login();


try {
    
    $user_login = isset($_POST["email"]) ? $_POST["email"] :"";
    $user_password = isset($_POST["pass"]) ? $_POST["pass"] :"";

    $loginValidation->validarDatos($user_login, $user_password);
    $resul = $login->iniciarSession($user_login, $user_password);
    echo json_encode($resul);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

?>