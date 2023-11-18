<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include("../models/Profile.php");

$profile =new Profile();
$user_id = $_SESSION['user_id'];
$student_id = $_SESSION['student_id'];
$center_id = $_SESSION['center_id'];
try {


switch ($_GET["op"]){
        case 'getProfile':
            $user = $profile->getUser($user_id);
            $student = $profile->getStudent($student_id);
            echo json_encode(["status" => true,"user"=>$user, "student"=>$student]);
        break;
}

} catch (Exception $e) {
    echo (["status" => false, "error" => $e->getMessage()]);
}

?>
