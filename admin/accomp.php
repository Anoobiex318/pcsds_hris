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
                              
                                   <!-- 
                                    <button class="btn btn-warning" href="#" data-toggle="modal" data-target="#add_folder" style = "float:right; width:150px; border-radius: 10px;"><span class = "fa fa-folder-open fa-lg"></span> Add Folder <span class = "fa fa-plus-circle fa-lg"></span></button>                          
                                -->
                                 
                            <h4 style="font-size: 1vw 2vh;">Accomplishment Reports</h4>
                         <div class="input-group col-xs-3" >   
                            <span class="input-group-addon" style="background-color: white;">&nbsp; <i class="fa fa-search"></i></span>
                            <input  type="text" class="form-control light-table-filter form-control" data-table="filter-active" placeholder="Search Here...">
                        </div>
                       </div>
                         <?php include("add_folder.php"); ?>
                         <div id="print">
                            <div class = "scroll">
                        <div class="body ">

                                <table  data-responsive="table"  id = "example" class = "filter-active display nowrap table table-striped table-xs"  cellspacing = "0" >

                                <thead>
                                  
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Personel Name</td>
                                        <td width = "200px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                               <?php
                                if (isset($_GET['per_id'])){
                                $stmt=$con->prepare("SELECT * FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id where tbl_personnel.per_id = '{$_GET['per_id']}' && file_repo ='Accomplishment Report'");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                              <td class="hidden"><?php echo $row['dept_id']; ?></td>
                                        <td>


                                            <i class="fa fa-folder-o fa-5x"aria-hidden="true" style="color: #FFE000"></i><div style="text-align: justify;"><?php echo $per_firstname . " " . $per_lastname; ?></div>

                                        <td>
                                         <?php include("add_file_modal.php") ?>
                                        </td>
                                    </tr>                                      
                                     <?php 
                                     } } }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
