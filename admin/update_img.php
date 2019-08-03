
<?php
require_once ('connect.php');

if(isset($_POST['update'])) {
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
            }, 100);
        })</script>";
	}
?>