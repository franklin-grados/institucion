<?php
session_start();
include_once("header.php");
?>
<div class="contenido">
    <div class="start pb-5">
        <img src="../librari/images/StanfordUniversity.jpg" class="img-profile" alt="">
        
        <div class="img-user-profile">
            <img src="../librari/images/perfil.jpg" class="img-profile-foto" alt="">
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center py-3">
                <div id="name" class="student"></div>
                <div id="user" class="user"></div>
            </div>
            <div class="col-6 text-center">
                <h3 class="info-basic">Basic Information</h3>
                
                <div class="row mt-2">
                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Firstname: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_firstname" id="student_firstname" class="input-profile">
                        <input type="hidden" name="student_id" id="student_id">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Firstname: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_lastname" id="student_lastname" class="input-profile">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Dob: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="date" name="student_dob" id="student_dob" class="input-profile">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Nric: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_nric" id="student_nric" class="input-profile">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Bc: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_bc" id="student_bc" class="input-profile">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Gender: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_gender" id="student_gender" class="input-profile">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Remarks: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="student_remarks" id="student_remarks" class="input-profile">
                    </div>

                    <div class="col-12 text-center py-3">
                        <button type="button" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>

            <div class="col-6 text-center">
                <h3 class="info-basic">System configuration</h3>
                <div class="row mt-2">
                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Student Firstname: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="user_login" id="user_login" class="input-profile">
                        <input type="hidden" name="user_id" id="user_id">
                    </div>

                    <div class="col-5 text-start mt-2">
                        <label class="data-info"> Password: </label>
                    </div>
                    <div class="col-7 mt-2">
                        <input type="text" name="user_password" id="user_password" class="input-profile" placeholder="********">
                    </div>

                    <div class="col-12 text-center py-3">
                        <button type="button" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>

        </div>
        
        
    </div>
</div>


<?php   
include_once("footer.php");
?>
<script src="script/profile.js"></script>