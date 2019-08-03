<section>
    <div class="modal fade" id="add_folder" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add File</h4>
                    </div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="modal-body"></div>
                            </head>
                                <body>
                                    <div class="ui-widget">
                                    <select class="form-control" name="per_name" required="">
                                         <option></option>
                                    <?php
                                        include("connect.php"); 
                                        $personnel = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id");
                                        $personnel->execute();
                                        while($row = $personnel->fetch()) {
                                            $per_id = $row['per_id'];
                                            $per_firstname = $row['per_firstname'];
                                            $per_lastname = $row['per_lastname'];
                                    ?>

                                    <option value="<?php echo $per_id ?>"><?php echo $per_firstname." ".$per_lastname; ?></option>
                                     
                                    <?php } ?>
                                    </select>
                                        <br>
                                        <br>
                                        <div class="form-line">
                                            <input class="form-control" name="per_file" type="file" id="ufile[]" size="50" multiple>

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
<?php
include('connect.php');
if(isset($_POST['upload'])) {
    $per_id = $_POST['per_name'];
    $target_dir = "uploads/";
    $target_file = $target_dir. basename($_FILES["per_file"]["name"]);
    $uploadOk = 1;
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $doctype = $_POST['doctype'];
    if (move_uploaded_file($_FILES["per_file"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $file = $target_file; // used to store the filename in a variable
    $add_file = $con->prepare("INSERT INTO tbl_files (file_name, per_id , filetype , file_repo, date_uploaded) VALUES (?, ? , ?, ? , NOW())");
    $add_file->execute(array($file, $per_id , $FileType, $doctype ));
echo  "<script>
  setTimeout(function() {
  Swal.fire({
  type: 'success',
  title: 'Done',
  text: 'Successfully Added',
  confirmButtonText: 'OK'
            }).then(() => {
                window.location = 'file_table.php';
            }, 1000);
        })</script>";
    }
?>