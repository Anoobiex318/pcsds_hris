<?php
session_start();
include('admin/connect.php');
include('admin/scripts.php');

if(isset($_POST['login'])){
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT id FROM admin WHERE admin_user = ? AND admin_pass = ? ");
$fetch->execute(array($admin_user, $admin_pass));
$count = $fetch->rowcount();
$row = $fetch->fetch();

if($count > 0) {

	$_SESSION['id']=$row['id'];
	echo "<script>
	window.location = 'admin/home.php';
</script>";
} else {

echo  "<script>
  setTimeout(function() {
  Swal.fire({
  type: 'error',
  title: 'Invalid Credentials',
  text: 'Please try again!',
  confirmButtonText: 'OK'
            }).then(() => {
                window.location = 'index.php';
            }, 100);
        })</script>";
	}

}
?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>PCSDS HRIS</title>
		<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "shortcut icon" href = "images/logo1.png">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
				<div style="margin-top: -70px;" class="login100-pic js-tilt" data-tilt >
					<center><img src="images/logo.png" alt="IMG" ></center>
					<span><h2 style="text-align: center; font-size: 25px;">PCSDS Human Resource Information System (HRIS)</h2></span>
				</div>
				<form style="margin-top: -80px;" class="login100-form validate-form"  enctype = "multipart/form-data" action = "index.php" role = "form" method = "POST">
					<span class="login100-form-title">
						LOGIN USER &nbsp; <i class="fa fa-user" aria-hidden="true"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required" >
						<input class="input100" type="text" name = "admin_user" placeholder="Username/Employee #">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name = "admin_pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name = "login">
							Login
						</button>
					</div>

					 <div class="row-fluid">
        <div class="col-md-14">
        <center><div style="color:black; margin-top: 8px; text-shadow: 2px 2px #fff;"><span id="tick2" >
          </span>&nbsp;| 
          
          
        
<script>
  // <!--/. tells about the time  -->
        function show2(){
        if (!document.all&&!document.getElementById)
        return
        thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
        var Digital=new Date()
        var hours=Digital.getHours()
        var minutes=Digital.getMinutes()
        var seconds=Digital.getSeconds()
        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12
        if (minutes<=9)
        minutes="0"+minutes
        if (seconds<=9)
        seconds="0"+seconds
        var ctime=hours+":"+minutes+":"+seconds+" "+dn
        thelement.innerHTML=ctime
        setTimeout("show2()",1000)
        }
        window.onload=show2
        //-->
        
</script> <!--/. Script where the format of the interface time,month,day and year relies -->

            <?php
               date_default_timezone_set('Asia/Manila');
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                    
            ?>
            <h4>
            </div></center>
          </div>
      
      </div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/sweetalert2.js"></script>

</body>

	
</html>