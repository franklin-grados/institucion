<?php
session_start();
include_once("header.php");
?>
<div class="contenido">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Courses</h1>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <div class="container mt-5 py-3" style="background-color: #E2E2E2; border-radius: 10px;">
        <div class="row" id="cursos">


        </div>
    </div>
</div>


<?php   
include_once("modal/coursesModal.php");


include_once("footer.php");

?>
<script src="script/courses.js"></script>