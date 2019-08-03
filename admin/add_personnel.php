<?php 
include("header.php");

 ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                            <!-- Input Group -->
                                  <a href="all_personnel.php">  <button class=" btn btn-danger" style ="float:right; z-index: 1; "><strong style="color: #ffffff">Cancel <i class="glyphicon glyphicon-remove"></i></strong></button></a>
                     <form action="#" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            
                                <h4>ADD PERSONNEL INFORMATION</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                 
                                 <div class="col-md-12">
                                        <div class="input-group">
                                    <center>  
                                         <div style="margin-top: 15px; ">
                                            
                                           
                                               <img src="img/blank.jpg" width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;">
                                                
                                                <div >
                                               <input  type="file" name="per_img">
                                                <b>Attach Image</b>
                                            
                                           </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                   </center>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                FirstName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_firstname" placeholder="First Name" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                MiddleName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_middlename" placeholder="Middle Name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                LastName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_lastname" placeholder="Last Name" required="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Suffix:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_suffix" placeholder="Sr/Jr" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Gender:
                                            </span>
                                            <select class="form-control show-tick" name="per_gender"  >
                                                <option><?php echo $row['per_gender']; ?></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Status:
                                            </span>
                                            <select class="form-control show-tick" name="per_civil_status">
                                                <option></option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Separated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Address:
                                            </span>
                                            <div class="form-line">
                                            <textarea class="form-control" name="per_address" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Place of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_place_of_birth" >
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Date of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_birth">
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Division:
                                            </span>
                                                <select class="form-control show-tick" name="per_designation">
                                                <option value="<?php echo $row['per_designation']; ?> "><?php echo $row['per_designation']; ?></option>
                                                <?php
                                                include("connect.php"); 
                                               
                                                $department = $con->prepare("SELECT * FROM tbl_department ORDER BY dept_id");
                                                $department->execute();
                                                while($row4 = $department->fetch()) {
                                                ?>                  

                                                    <option><?php echo $row4['dept_name']; ?></option>
                                                <?php }  ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                               Beneficiaries:
                                            </span>
                                            <div class="form-line">
                                            <textarea class="form-control" name="per_benefit" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Position/Designation:
                                            </span>
                                                <select class="form-control show-tick" name="per_position">
                                                    <option value="<?php echo $row['per_position'] ?>"><?php echo $row['per_position']; ?></option>
                                                <?php
                                                include("connect.php"); 
                                               
                                                $gass1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id ");
                                                $gass1->execute();
                                                while($row9 = $gass1->fetch()) {
                                                ?>                  

                                                    <option><?php echo $row9['pos_name']; ?></option>
                                                <?php }  ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Employee Status:
                                            </span>
                                                <select class="form-control show-tick main" name="per_status" value="<?php echo $row['per_status'];?>">
                                                    <option></option>
                                                    <option value='Permanent'>Permanent</option>
                                                   <!--  <option value='GASS'>GASS</option> -->
                                                   <!--  <option value='Part Time'>Part Time</option> -->
                                                    <option value='Job Order'>Job Order</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Email Address:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="email" class="form-control" name="per_email">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Date of Appointment:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_original_appointment"  required="">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Date of last Appointment:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_last_appointment"  required="">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Mobile No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_contact_no" id="contact_no" maxlength="22"  required="">
                                                </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Plantilla Number
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control " name="per_plantilla_no" >
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Eligibility:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_eligibility" placeholder="Eligibility">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Salary Grade/Step Increment:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_step" placeholder="SG/Step Increment">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Basic Salary:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_salary" placeholder="Salary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                TIN No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_tin_no" id="tin" placeholder="Ex: XXX-XXX-XXX">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                GSIS BP No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_gsis_bp_no" id="gsis" placeholder="Ex: XXX-XXX-XXX">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                PAG-IBIG No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_pagibig_no" id="pagibig" maxlength="22" placeholder="e.g. XXX-XXX-XXX">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="page-header">Educational Attainment</h3> 
                                    </div>                
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Bachelor's Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_bs_name" placeholder="Degree"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_bs_year" placeholder="YYYY"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_bs_school" placeholder="School"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Master's Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_name" placeholder=" Degree"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_with_unit" placeholder="with_Units"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_year" placeholder="YYYY"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_school" placeholder="School"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Doctorate Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_name" placeholder="Degree"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_with_unit" placeholder="with Units"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_year" placeholder="YYYY"  required="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_school" placeholder="School"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Other Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_degree" placeholder="Other Degree">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_year" placeholder="YYYY">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_school" placeholder="School">
                                            </div>
                                        </div>
                                    </div>                             
                                </div>  
                                    <input type="submit" name="save" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -10px;">                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

        </form>
            <!-- #END# Input Group -->           
        </div>
    </section>


   
<?php
include('connect.php');
if(isset($_POST['save'])) {
    move_uploaded_file($_FILES["per_img"]["tmp_name"],"uploads/profile_img/" . $_FILES["per_img"]["name"]);         
    $location=$_FILES["per_img"]["name"];
    $per_firstname = $_POST['per_firstname'];
    $per_middlename = $_POST['per_middlename'];
    $per_lastname = $_POST['per_lastname'];
    $per_suffix = $_POST['per_suffix'];
    $per_gender = $_POST['per_gender'];
    $per_status = $_POST['per_status'];
    $per_email = $_POST['per_email'];
    $per_date_of_last_appointment = $_POST['per_date_of_last_appointment'];
    $per_civil_status= $_POST['per_civil_status'];
    $per_address = $_POST['per_address'];
    $per_position = $_POST['per_position'];
    $per_benefit = $_POST['per_benefit'];
    $per_eligibility = $_POST['per_eligibility'];
    $per_salary = $_POST['per_salary'];
    $per_designation = $_POST['per_designation'];
    $per_date_of_birth  = $_POST['per_date_of_birth'];
    $per_place_of_birth = $_POST['per_place_of_birth'];
    $per_tin_no = $_POST['per_tin_no'];
    $per_gsis_bp_no = $_POST['per_gsis_bp_no'];
    $per_pagibig_no = $_POST['per_pagibig_no'];
    $per_contact_no = $_POST['per_contact_no'];
    $per_plantilla_no = $_POST['per_plantilla_no'];
    $per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];
    $per_bs_name = $_POST['per_bs_name'];
    $per_bs_year = $_POST['per_bs_year'];
    $per_bs_school = $_POST['per_bs_school'];
    $per_ms_name = $_POST['per_ms_name'];
    $per_ms_with_unit = $_POST['per_ms_with_unit'];
    $per_ms_year = $_POST['per_ms_year'];
    $per_ms_school = $_POST['per_ms_school'];
    $per_dr_name = $_POST['per_dr_name'];
    $per_dr_with_unit = $_POST['per_dr_with_unit'];
    $per_dr_year = $_POST['per_dr_year'];
    $per_dr_school = $_POST['per_dr_school'];
    $per_other_degree = $_POST['per_other_degree'];
    $per_other_year = $_POST['per_other_year'];
    $per_other_school = $_POST['per_other_school'];
    $per_step = $_POST['per_step'];


    $add_personnel = $con->prepare("INSERT INTO tbl_personnel (per_img, per_firstname, per_middlename, per_lastname,per_suffix, per_gender, per_civil_status, per_email, per_status, per_address, per_designation, per_date_of_birth, per_place_of_birth, per_position, per_benefit, per_step, per_salary , per_date_of_original_appointment,per_date_of_last_appointment,per_eligibility, per_tin_no, per_gsis_bp_no, per_pagibig_no, per_contact_no, per_plantilla_no, bs_name, bs_year, bs_school, ms_name, ms_with_unit, ms_year, ms_school, dr_name, dr_with_unit, dr_year, dr_school, other_degree, other_year, other_school, date_modified ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $add_personnel->execute(array($location, $per_firstname,$per_middlename, $per_lastname,$per_suffix, $per_gender, $per_civil_status, $per_email, $per_status, $per_address, $per_designation, $per_date_of_birth,$per_place_of_birth, $per_position, $per_benefit, $per_step, $per_salary , $per_date_of_original_appointment, $per_date_of_last_appointment, $per_eligibility, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact_no, $per_plantilla_no, $per_bs_name, $per_bs_year, $per_bs_school, $per_ms_name, $per_ms_with_unit, $per_ms_year, $per_ms_school, $per_dr_name, $per_dr_with_unit, $per_dr_year, $per_dr_school, $per_other_degree, $per_other_year, $per_other_school));

 echo  "<script>
  setTimeout(function() {
  Swal.fire({
  type: 'success',
  title: 'Done',
  text: 'Account Successfully Added',
  confirmButtonText: 'OK'
            }).then(() => {
                window.location = 'all_personnel.php';
            }, 100);
        })</script>";   
}
?>
 <script>
    var contanct_no = new Formatter (document.getElementById('contact_no'), {
  'pattern': '+639 {{999}}-{{999}}-{{999}}',
  'persistent': true
  });
    var pagibig = new Formatter (document.getElementById('pagibig'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
  });
     var tin = new Formatter (document.getElementById('tin'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
     var gsis = new Formatter (document.getElementById('gsis'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
</script>
    <!-- <script>
        function showImage(src,target) {
          var fr=new FileReader();
          // when image is loaded, set the src of the image where you want to display it
          fr.onload = function(e) { target.src = this.result; };
          src.addEventListener("change",function() {
            // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
          });
        }

        var src = document.getElementById("src");
        var target = document.getElementById("target");
        showImage(src,target);
    </script>
     -->
<script type="">
    $(function(){
  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
<script type="">
    var Privileges = jQuery('#privileges');
    var select = this.value;
    Privileges.change(function () {
        if ($(this).val() == '') {
            $('.resources').show();
        }
        else $('.resources').hide();
    });
</script>