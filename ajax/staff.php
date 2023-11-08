<?php

include("../models/Staff.php");

$staff =new Staff();

try {


switch ($_GET["op"]){
        case 'generar_baja':

            $id=isset($_POST["id"])? $_POST["id"]:"";
            $dia=isset($_POST["fecha"])? $_POST["fecha"]:"";
            if (!is_numeric($id)) {
                throw new Exception("Error inesperado recargue la pagina para continuar");
            }

        break;

        case 'listarStalf':
            $center_id=isset($_GET['center_id'])? $_GET['center_id']:1;
            $department_id=isset($_GET['department_id'])? $_GET['department_id']:1;

            if (!is_numeric($center_id)) {
                throw new Exception("EL DATO DE ENTRADA TIENE QUE SEWR NUMERICO");
            }
            if (!is_numeric($department_id)) {
                throw new Exception("EL DATO DE ENTRADA TIENE QUE SEWR NUMERICO");
            }

            $resul = $staff->listStaff($center_id, $department_id);

            $respuesta = ["data" => $resul];

            echo json_encode($respuesta);
        break;

        case 'listarSelect':
            $resul = $staff->listarSelect();
            echo json_encode($resul);
            break;
}

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

?>
