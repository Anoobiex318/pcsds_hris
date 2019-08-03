
<a class="btn btn-info" style="  border-radius: 5px; margin-top: 30px; margin-bottom: 10px;" href="#file<?php echo $per_id;?>" data-toggle="modal">View Files  <span class = "fa fa-search fa-lg"></span> 
</a> 
<!-- Modal -->
<div class="modal fade" id="file<?php echo $per_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
        <div class="modal-content">
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="display: inline-block;"><?php echo $per_name; ?> Files <span class="fa fa-folder-open fa-lg"></span></h3>
                   
                </div>

            </div>
           
            <div class="modal-body" style="overflow-y: auto;">          
               <table class = " table table-striped table-lg"  cellspacing="0">
                                     <thead>
                                        <tr>
                                            <th>File Name</th>
                                            <th nowrap="">Document Type</th>
                                            <th nowrap="">Date Uploaded</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                        <tbody>


                                        <?php
                                $id =$row['per_id'];
                                $stmt=$con->prepare("SELECT *  FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id where tbl_personnel.per_id = '$id' ");
                                    $stmt->execute();
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                            
                                ?>
                                            <tr>
                                            <td><?php echo $file_name; ?></td>
                                            <td><?php echo $file_repo ?></td>
                                            <td><?php echo $date_uploaded; ?></td> 
                                            <td><a class="btn btn-success btn-sm" href="download.php?download_file=<?php echo $file_name ;?>">Download File <span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td>
                                            </tr>

                                        </tbody>
                                 <?php } ?>
                 </table>
             </div>
            </div>
        </div>
    </div>
</div>
