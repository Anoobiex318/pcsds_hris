<?php 
include("header.php");

?>
 <section class="content">
<style type="text/css">
  thead{
    font-weight: bolder;
  }

</style>
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>LIST OF ALL STAFFS</h4>
                                  <div style="float: right; margin-top: -30px; margin-bottom: 15px;">
                                  <a class="btn btn-success" style="border-radius: 10px; " href="add_personnel.php">
                                      <span class = "fa fa-plus-circle fa-lg"></span> Add Personel
                                  </a> 
                                
                                <a class="btn btn-warning" style="border-radius: 10px;" href="print_all_campus.php">
                                      <span class = "fa fa-print fa-lg"></span> Print
                                  </a> 
                               </div>
                                 <div class="input-group col-md-8">
                                            <span class="input-group-addon" style="background-color: white;">&nbsp; <i class="fa fa-search"></i></span>
                            <input  type="text" class="form-control light-table-filter" data-table="filter" placeholder="Search Here...">
                                      
                                    </div>
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table class = " display  filter table table-striped table-xs" cellspacing="0" width="100%">
                                <thead >
                                    <tr>
                                      
                                        <td nowrap="">Information</td>
                                        <td nowrap="">Name</td>
                                        <!-- <td>GASS/Academic Rank</td> -->
                                        <td nowrap="">Position/Title</td>
                                        <td nowrap="">Division</td>
                                        <td nowrap="">Age</td>
                                        <td nowrap="">Gender</td>
                                        <td nowrap="">Email Address</td>
                                        <td nowrap="">Address</td>
                                        <td nowrap="">Birthdate</td>
                                       <!--  <td nowrap="">Birthplace</td>
                                        <td nowrap="">Contact Number</td>
                                        <td nowrap="">Date of Original Appointment</td>
                                        <td nowrap="">Bachelor's Degree</td>
                                        <td nowrap="">Master's Degree</td>
                                        <td nowrap="">Doctorate Degree</td>
                                        <td nowrap="">Others</td>
                                        <td nowrap="">No. of Years in PCSDS</td>
                                        <td nowrap="">Eligibility</td>
                                        <td nowrap="">Plantilla Number</td>
                                        <td nowrap="">Employee Status</td>
                                        <td nowrap="">Tin Number</td>
                                        <td nowrap="">Pag-ibig Number</td>
                                        <td nowrap="">GSIS Number</td> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $per_id = $row['per_id'];

                    
                                        // $gass_id = $row['gass_id'];
                                        // $rank_id = $row['rank_id'];
                                        $bday = $row["per_date_of_birth"];
                                        $dooa = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date1->diff($now)->format('%y');


                                  ?>
                                  <tr>
                                  <td hidden=""><?php echo $row['per_id']; ?></td>
                                 <td nowrap=""> <a title="View/Print Information"  href="print_personnel_report.php?per_id=<?php echo $row['per_id']?>">
                          <?php if($row['per_img'] != ""): ?>
                           
                          <center ><img src="uploads/profile_img/<?php echo $row['per_img']; ?>" width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;"></center><?php include("img_modal.php") ?>



                          <a title="Edit Information" class="btn btn-warning btn-sm" style="border-radius: 5px;" href="edit_personnel.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "fa fa-pencil-square-o fa-lg"  aria-hidden="true"></span>
                                    </a>   
                           <a title="View/Print Information" class="btn btn-info btn-sm" style="border-radius: 5px;" href="print_personnel_report.php?per_id=<?php echo $row['per_id']?>">
                                     <span class = "fa fa-eye fa-lg"></span>
                                    </a>  
                                    <a  title="Deactivate Account" class="btn btn-danger btn-sm" style="border-radius: 5px;" href="#">
                                     <span class = "fa fa-ban fa-lg"></span>
                                    </a>                                 
                        <?php else: ?>



                       <center> <img src="img/blank.jpg"  width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;"></center>



                       <?php include("img_modal.php") ?>
                       <a title="Edit Information" class="btn btn-warning btn-sm" style="border-radius: 5px;" href="edit_personnel.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "fa fa-pencil-square-o fa-lg"  aria-hidden="true"></span>
                                    </a>   
                           <a title="View/Print Information" class="btn btn-info btn-sm" style="border-radius: 5px;" href="print_personnel_report.php?per_id=<?php echo $row['per_id']?>">
                                     <span class = "fa fa-eye fa-lg"></span>
                                    </a>  
                                    <a  title="Deactivate Account" class="btn btn-danger btn-sm" style="border-radius: 5px;" href="#">
                                     <span class = "fa fa-ban fa-lg"></span>
                                    </a>  
                          <?php endif; ?>
                              </td>
                              <!-- Modal -->
                                  <td nowrap=""><a title="View/Print Info" href="print_personnel_report.php?per_id=<?php echo $row['per_id']?>"><?php echo $row['per_lastname'].", ".$row['per_firstname']." ".$row['per_middlename']; ?></a></td>
                              
                                  <td nowrap="nowrap"><?php echo $row['per_position']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_designation']; ?></td>
                                  <td nowrap="nowrap"><?php echo $difference;?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_gender']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_email']; ?></td>
                                  <td ><?php echo $row['per_address']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_date_of_birth']; ?></td>
                                  <!-- <td nowrap="nowrap"><?php echo $row['per_place_of_birth']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_contact_no']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_date_of_original_appointment']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['bs_name']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['ms_name']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['dr_name']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['other_degree']; ?></td>
                                  <td nowrap="nowrap"><?php echo $length?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_eligibility']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_plantilla_no']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_status']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_tin_no']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_pagibig_no']; ?></td>
                                  <td nowrap="nowrap"><?php echo $row['per_gsis_bp_no']; ?></td> -->
                                 
                              
                                
                                </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                            </table>
                           

                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
