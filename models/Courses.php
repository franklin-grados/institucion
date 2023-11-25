<?php

include("../conexion/conexion.php");

class Courses extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function getClases($student_id){
        $consulta = "SELECT cs.cs_id, cs.class_id, cs.student_id, c.class_name, c.schoolsession_id, c.image FROM classes_students cs
        INNER JOIN classes c ON c.class_id=cs.class_id
        WHERE student_id=?";
        $result = $this->select_fetch_all($consulta, [$student_id]);
        return $result;
    }

    public function getHorarios($class_id){
        $consulta = "SELECT * FROM classes c
        INNER JOIN schoolsessions s ON s.schoolsession_id=c.schoolsession_id
        WHERE class_id=?";
        $result = $this->select_fetch($consulta, [$class_id]);
        return $result;
    }

}


?>