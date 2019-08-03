<?php include("header.php") ?>

<?php include ("connect.php");


$result=$con->prepare("SELECT * FROM tbl_personnel  WHERE per_id='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $per_id = $row['per_id'];
    $per_firstname = $row['per_firstname'];
    $per_img = $row['per_img'];
    $per_middlename = $row['per_middlename'];
    $per_lastname = $row['per_lastname'];
    $per_suffix = $row['per_suffix'];
    $per_gender = $row['per_gender'];
    $per_status = $row['per_status'];
    $per_civil_status= $row['per_civil_status'];
    $per_email = $row['per_email'];
    $per_date_of_last_appointment = $row['per_date_of_last_appointment'];
    $per_address = $row['per_address'];
    $per_position = $row['per_position'];
    $per_benefit = $row['per_benefit'];
    $per_eligibility = $row['per_eligibility'];
    $per_salary = $row['per_salary'];
    $per_designation = $row['per_designation'];
    $per_date_of_birth  = $row['per_date_of_birth'];
    $per_place_of_birth = $row['per_place_of_birth'];
    $per_tin_no = $row['per_tin_no'];
    $per_gsis_bp_no = $row['per_gsis_bp_no'];
    $per_pagibig_no = $row['per_pagibig_no'];
    $per_contact_no = $row['per_contact_no'];
    $per_plantilla_no = $row['per_plantilla_no'];
    $per_date_of_original_appointment = $row['per_date_of_original_appointment'];
    // $per_campus = $_POST['per_campus'];
    $per_bs_name = $row['bs_name'];
    $per_bs_year = $row['bs_year'];
    $per_bs_school = $row['bs_school'];
    $per_ms_name = $row['ms_name'];
    $per_ms_with_unit = $row['ms_with_unit'];
    $per_ms_year = $row['ms_year'];
    $per_ms_school = $row['ms_school'];
    $per_dr_name = $row['dr_name'];
    $per_dr_with_unit = $row['dr_with_unit'];
    $per_dr_year = $row['dr_year'];
    $per_dr_school = $row['dr_school'];
    $per_other_degree = $row['other_degree'];
    $per_other_year = $row['other_year'];
    $per_other_school = $row['other_school'];
    $per_step = $row['per_step'];

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
                                        <a href="all_personnel.php"><button class=" btn btn-danger" style ="float:right; z-index: 1; "><strong style="color: #ffffff">Cancel <i class="glyphicon glyphicon-remove"></i></strong></button></a>
                     <form action="#" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            
                                <h4>EDIT PERSONNEL INFORMATION</h4>
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
                                            
                                               <?php if($row['per_img'] != ""): ?>
                                     <img src="uploads/profile_img/<?php echo $row['per_img']; ?>" width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;">
                                         <?php else: ?>
                                    
                                                <div >
                                    <img src="img/blank.jpg"  width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;"></a>       
                                               <?php endif; ?>
                                      
                                   
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
                                                <input type="text" class="form-control" name="per_firstname" placeholder="First Name" value="<?php echo $row['per_firstname']; ?> " autofocus>
                                                <input type="hidden" class="form-control" name="per_id"  value="<?php echo $row['per_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                MiddleName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_middlename" placeholder="Middle Name" value="<?php echo $row['per_middlename']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                LastName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_lastname" placeholder="Last Name" value="<?php echo $row['per_lastname']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Suffix:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_suffix" placeholder="Sr/Jr" value="<?php echo $row['per_suffix']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Gender:
                                            </span>
                                            <select class="form-control show-tick" name="per_gender" value="<?php echo $row4['per_gender']; ?>" >
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
                                                <option><?php echo $row['per_civil_status']; ?></option>
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
                                            <textarea class="form-control" name="per_address" ><?php echo $row['per_address']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Place of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_place_of_birth" value="<?php echo $row['per_place_of_birth']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Date of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_birth" value="<?php echo $row['per_date_of_birth']; ?>">
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
                                            <textarea class="form-control" name="per_benefit" ><?php echo $row['per_benefit']; ?></textarea>
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
                                                    <option><?php echo $per_status; ?></option>
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
                                                    <input type="email" class="form-control" name="per_email" value="<?php echo $per_email; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Date of Appointment:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_original_appointment" value="<?php echo $per_date_of_original_appointment; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Date of last Appointment:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_last_appointment" value="<?php echo $per_date_of_last_appointment; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Mobile No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_contact_no" id="contact_no" maxlength="22" value="<?php echo $per_contact_no; ?>">
                                                </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Plantilla Number
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control " name="per_plantilla_no" value="<?php echo $per_plantilla_no; ?>" >
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Eligibility:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_eligibility" value="<?php echo $per_eligibility; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Salary Grade/Step Increment:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_step" value="<?php echo $per_step; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Basic Salary:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control"  name="per_salary" value="<?php echo $per_salary; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                TIN No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_tin_no" value="<?php echo $per_tin_no; ?>" id = "tin">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                GSIS BP No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_gsis_bp_no"  value="<?php echo $per_gsis_bp_no; ?>" id ="gsis">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                PAG-IBIG No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_pagibig_no" value="<?php echo $per_pagibig_no; ?>" id="pagibig">
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
                                                <input type="text" class="form-control" name="per_bs_name" value="<?php echo $per_bs_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_bs_year" value="<?php echo $per_bs_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_bs_school" value="<?php echo $per_bs_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Master's Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_name" value="<?php echo $per_ms_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_with_unit" value="<?php echo $per_ms_with_unit; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_year" value="<?php echo $per_ms_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_ms_school" value="<?php echo $per_ms_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Doctorate Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_name" value="<?php echo $per_dr_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_with_unit" value="<?php echo $per_dr_with_unit; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_year" value="<?php echo $per_dr_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_dr_school" value="<?php echo $per_dr_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Other Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_degree" value="<?php echo $per_other_degree; ?>">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_year" value="<?php echo $per_other_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_other_school" value="<?php echo $per_other_school; ?>">
                                            </div>
                                        </div>
                                    </div>                             
                                </div>  
                                    <strong style="color: #ffffff"><input type="submit" name="update" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;"> </strong>
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
</script><?php } ?>
<?php
include('connect.php');
if(isset($_POST['update'])) {
    
    $per_id = $_POST['per_id']; 
    // move_uploaded_file($_FILES["per_img"]["tmp_name"],"uploads/" . $_FILES["per_img"]["name"]);          
    // $location=$_FILES["per_img"]["name"];
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

    // $query = $con->prepare("INSERT INTO tbl_personnel_master_file SELECT * FROM tbl_personnel where per_id = $per_id");
    // $query->execute();


    $add_personnel = $con->prepare("UPDATE tbl_personnel SET per_firstname = ?, per_middlename = ?, per_lastname = ?, per_suffix = ?, per_gender = ?, per_email = ?, per_status = ?, per_salary = ?, per_address = ?, per_position = ?, per_designation = ?, per_benefit = ?, per_date_of_birth = ?, per_place_of_birth = ?, per_civil_status= ?, per_date_of_original_appointment = ?, per_date_of_last_appointment = ?, per_tin_no = ?, per_gsis_bp_no= ?, per_pagibig_no = ?, per_contact_no = ?, per_plantilla_no= ?, per_eligibility = ?, bs_name = ?, bs_year = ?, bs_school = ?, ms_name = ?, ms_with_unit = ?, ms_year = ?, ms_school = ?, dr_name = ?, dr_with_unit = ?, dr_year = ?, dr_school = ?, other_degree = ?, other_year = ?, other_school = ?, date_modified = NOW() WHERE per_id = ?");
    $add_personnel->execute(array($per_firstname, $per_middlename, $per_lastname, $per_suffix, $per_gender, $per_email, $per_status,$per_salary, $per_address, $per_position, $per_designation, $per_benefit, $per_date_of_birth, $per_place_of_birth, $per_civil_status, $per_date_of_original_appointment, $per_date_of_original_appointment, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact_no, $per_plantilla_no, $per_eligibility, $per_bs_name, $per_bs_year, $per_bs_school, $per_ms_name, $per_ms_with_unit, $per_ms_year, $per_ms_school, $per_dr_name, $per_dr_with_unit, $per_dr_year, $per_dr_school, $per_other_degree, $per_other_year, $per_other_school, $per_id));
    echo  "<script>
  setTimeout(function() {
  Swal.fire({
  type: 'success',
  title: 'Done',
  text: 'Account Successfully Updated',
  confirmButtonText: 'OK'
            }).then(() => {
                window.location = 'all_personnel.php';
            }, 100);
        })</script>";
}

?>