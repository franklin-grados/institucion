<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include("../models/Courses.php");

$courses =new Courses();
$user_id = $_SESSION['user_id'];
$student_id = $_SESSION['student_id'];
$center_id = $_SESSION['center_id'];
try {


switch ($_GET["op"]){
        case 'getClases':
            $clases = $courses->getClases($student_id);
            echo json_encode(["status" => true,"clases"=>$clases]);
        break;

        case 'getHorarios':
        $class_id =isset($_POST['class_id'])? $_POST['class_id']:"";
        if (!is_numeric($class_id)) {
            throw new Exception("El dato de entrada debe ser numerico");
        }
        $horarios = $courses->getHorarios($class_id);
        echo json_encode(["status" => true,"horarios"=>$horarios]);
        break;
}

} catch (Exception $e) {
    echo (["status" => false, "error" => $e->getMessage()]);
}

?>
