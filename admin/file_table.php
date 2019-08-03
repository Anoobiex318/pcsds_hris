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
                                    <button class="btn btn-warning" href="#" data-toggle="modal" data-target="#add_folder" style = "float:right; width:150px; border-radius: 10px;"> Create New Folder <span class = "fa fa-plus-circle fa-lg"></span></button>                             
                            <h4 style="font-size: 1vw 2vh;">201 FILES (Active Staffs/Personnels)</h4>
                         <div class="input-group col-xs-3" >   
                            <span class="input-group-addon" style="background-color: white;">&nbsp; <i class="fa fa-search"></i></span>
                            <input  type="text" class="form-control light-table-filter form-control" data-table="filter-active" placeholder="Search Here...">
                        </div>
                       </div>
                         <?php include("add_folder.php"); ?>
                         <div id="print">
                            <div class = "scroll">
                        <div class="body">

                            <table  data-responsive="table"  id = "example" class = "filter-active display nowrap table table-striped table-xs"  cellspacing = "0" >

                                <thead>
                                  
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Personnel Name</td>
                                        <td><center>Actions</center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                               <?php 
                                    include('connect.php');

                                    $stmt=$con->prepare("SELECT * FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id where tbl_personnel.per_stats = 0 group by tbl_files.per_id DESC");
                                        $stmt->execute();
                                        $fetch = $stmt->fetchAll(); 
                                        foreach($fetch as $key => $row) { 
                                        $per_id = $row['per_id'];
                                        $per_file_id = $row['per_id']; 
                                        $per_name = $row['per_firstname']." ".$row['per_lastname'];

                                ?>
                              <td class="hidden"><?php echo $row['dept_id']; ?></td>
                                        <td>


                                            <i class="fa fa-folder-o fa-5x"aria-hidden="true" style="color: #FFE000"></i><div style="text-align: justify;"><?php echo $per_name; ?></div>

                                        <td><center>
                                          <?php include("show_file_modal.php") ?>
                                          <?php include("add_file_personnel_modal.php") ?></center>

                                       </td>
                                    </tr>                                      
                                    <?php }   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>


   



<!--Inactive-->
<section class="content" style="margin-top: -10px;">
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
                        <div class = "panel panel-danger">
                            <div class = "panel-heading">
                                      <button class="btn btn-warning" href="#" data-toggle="modal" data-target="#add_folder" style = "float:right; width:150px; border-radius: 10px;"><span class = "fa fa-folder-open fa-lg"></span> Add Folder <span class = "fa fa-plus-circle fa-lg"></span></button>                         
                            <h4 style="font-size: 1vw 2vh;">201 FILES (Inactive Staffs/Personnels)</h4>
                            <div class="input-group col-xs-3" >   
                            <span class="input-group-addon" style="background-color: white;">&nbsp; <i class="fa fa-search"></i></span>
                            <input  type="text" class="form-control light-table-filter form-control " data-table="filter-inactive" placeholder="Search Here...">
                        </div>
                       </div>
                         <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "resultTable" class = "filter-inactive display nowrap table table-striped table-xs" cellspacing = "0" >
                                <thead>
                                  
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Personel Name</td>
                                        <td><center>Actions</center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                               <?php 
                                    include('connect.php');

                                    $stmt=$con->prepare("SELECT * FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id where tbl_personnel.per_stats = 1 group by tbl_files.per_id DESC");
                                     $stmt->execute();
                                    $fetch = $stmt->fetchAll(); 
                                    foreach($fetch as $key => $row) { 
                                        $per_id = $row['per_id']; 
                                         $per_file_id = $row['per_id']; 
                                        $per_name = $row['per_firstname']." ".$row['per_lastname'];
                                ?>
                              <td class="hidden"><?php echo $row['dept_id']; ?></td>
                                        <td>


                                            <i class="fa fa-folder-o fa-5x"aria-hidden="true" style="color: #FFE000"></i><div style="text-align: justify;"><?php echo $per_name; ?></div>

                                        <td><center>
                                          <?php include("show_file_modal.php") ?>
                                          <?php include("add_file_personnel_modal.php") ?></center>
                                       </td>
                                    </tr>                                      
                                    <?php }   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
  
  