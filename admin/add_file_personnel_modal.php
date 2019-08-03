<a class="btn btn-success" style="border-radius: 5px; margin-top: 30px; margin-bottom: 10px;" href="#files<?php echo $per_file_id;?>" data-toggle="modal">Add Files  <span class = "fa fa-plus-circle fa-lg"></span> 
</a> 
<!-- Modal -->
<div class="modal fade"  id="files<?php echo $per_file_id;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Add file for <?php echo $per_name;?> </h3>
                    </div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="modal-body"></div>
                            </head>
                                <body>
                                    <div class="ui-widget">
                                    <input type="hidden" name="per_name" value="<?php echo $per_file_id ?>">
                                    <?php
                                        include("connect.php"); 
                                        $personnel = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id");
                                        $personnel->execute();
                                        
                                    ?>

                                
                                        <br>
                                        <div class="form-line">
                                            <input class="form-control" name="per_file" type="file" id="ufile[]" size="50" multiple required="">

                                        </div>
                                       
                                       
                                    </div>
                                     <div class="form-line">
                                            <h4>Document type:</h4>
                                            <span>
                                                <select class="form-control show-tick" name="doctype" required="">
                                                    <option></option>
                                                    <option>Accomplishment Report</option>
                                                    <option>OPCR</option>
                                                    <option>DPCR</option>
                                                    <option>IPCR</option>
                                                    <option>Others</option>
                                                </select>
                                            </span>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name ="upload">Save</button>
                                    </div>
                                </body>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
