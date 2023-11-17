<?php   
include_once("header.php");
?>
<div class="contenido">

<i class="fas fa-heart"></i>
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-12 text-center">
            <p>List Staff</p>
        </div>
        <div class="col-3">
            <label for="center_id">Center</label>
            <select name="center_id" id="center_id" class="form-select form-select-sm" onchange="listarStalf()"></select>
        </div>
        <div class="col-3">
            <label for="department_id">Department</label>
            <select name="department_id" id="department_id" class="form-select form-select-sm" onchange="listarStalf()"></select>
        </div>
    </div>
    
    
    <div class="table-responsive">
        <table id="listStaff" class="table table-striped table-bordered table-condensed table-hover" style="width:99%">
            <thead>
                <tr>
                    <th></th>
                    <th>staff_firstname</th>
                    <th>staff_lastname</th>
                    <th>staff_email</th>
                    <th>staff_phone_mobile</th>
                    <th>staff_phone_office</th>
                    <th style="min-width: 55px !important" wihth></th>
                </tr>
            </thead>
        </table>
    </div>
</div>

</div>


<?php   
include_once("footer.php");
?>
<script src="script/staff.js"></script>