<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include("../models/ProfileStaff.php");

$profile_staff =new ProfileStaff();
$user_id = $_SESSION['user_id'];
$guardian_id = $_SESSION['guardian_id'];
try {


switch ($_GET["op"]){
        case 'getProfile':
            $user = $profile_staff->getUser($user_id);
            $student = $profile_staff->getStudent($guardian_id);
            echo json_encode(["status" => true,"user"=>$user, "student"=>$student]);
        break;
}

} catch (Exception $e) {
    echo (["status" => false, "error" => $e->getMessage()]);
}

?>
