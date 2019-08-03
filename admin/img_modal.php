
<a title="Change Image" class="btn btn-success" style="border-radius: 5px;" href="#edit<?php echo $row['per_id']?>" data-toggle="modal">
    <span class = "glyphicon glyphicon-picture" ></span>
</a> 
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['per_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
        <div class="modal-content">
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>UPDATE PICTURE</h4>
                </div>
            </div>
            <div class="modal-body">          
                <form action="#" method="POST" enctype="multipart/form-data">
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon">
                    Upload Picture:
                    </span>
                    <div class="form-line">
                        <input type="hidden" class="form-control" name="per_id" value="<?php echo $row['per_id']?>">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-lg" name = "update_pic">Update</button>
            </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
require_once ('connect.php');

if(isset($_POST['update_pic'])) {
$id = $_POST['per_id']; 
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/profile_img/" . $_FILES["image"]["name"]);         
$location1=$_FILES["image"]["name"];


    $update_img = $con->prepare("UPDATE tbl_personnel SET per_img = ? WHERE per_id = ?");
    $update_img->execute(array($location1, $id));
    

echo  "<script>
  setTimeout(function() {
  Swal.fire({
  type: 'success',
  title: 'Done',
  text: 'Image Successfully Updated',
  confirmButtonText: 'OK'
            }).then(() => {
                window.location = 'all_personnel.php';
            }, 1000);
        })</script>";
    }
?>

