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
                                
                                <button class="btn btn-warning" href="#" data-toggle="modal" data-target="#add_position" style = "float:right; width:150px; border-radius: 10px;"> Add New Position <span class = "fa fa-plus-circle fa-lg"></span></button> 
                           <h4 style="font-size: 1vw 2vh;">POSITIONS</h4>
                         <div class="input-group col-xs-3" >   
                            <span class="input-group-addon" style="background-color: white;">&nbsp; <i class="fa fa-search"></i></span>
                            <input  type="text" class="form-control light-table-filter form-control" data-table="filter-pos" placeholder="Search Here...">
                        </div>
                       </div>
                          
                            <div class = "scroll">
                            <div class="body">
                                <table class = "display nowrap table table-striped table-xs filter-pos" cellspacing = "0" >
                                <thead>
                                  
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Position Name</td>
                                        <td width = "200px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                                        <td class="hidden"><?php echo $row['pos_id']; ?></td>
                                        <td><?php echo $row['pos_name']; ?></td>
                                        <td>
                                            <?php include("edit_position.php") ?>
                                           
                                        </td>
                                    </tr>                                     
                                     <?php 
                                     }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

