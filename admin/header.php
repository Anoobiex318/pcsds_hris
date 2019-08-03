<?php 
include('scripts.php');
session_start();
if(empty($_SESSION['id']))
{
header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Personnel Profiling</title>
    
 <!-- Favicon-->
    <link rel = "shortcut icon" href = "../images/logo1.png">
   
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <style type="text/css">
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        border-radius: 30%;
        margin-left: -178px;
        margin-top: 153px;
        width: 21%;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .navbar-right {
        margin-left: 850px;

    }
    .notif {
        padding-top: 15px;
        margin-left: 20px;
        margin-right: 20px;
        border: 1px solid;
        height: auto;
        text-align: center;
    }
    .notif i {
        border-bottom: 2px solid;

    }
    .celeb {
        text-align: left;
        margin: 10px;
    }
    a:hover {
    text-decoration: none;
    }
    .files {
        width: 100px;
        display: inline-flex;
        margin: 5px;
        text-align: center;
    }
    </style>
</head>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style="background-color: #056f00;">

  <div class="bars">
      
       <div class="navbar-header" >
              

                <a class="navbar-brand" href="home.php" style="color: #c3cfe2; font-size: 2vw; text-shadow: 2px 2px #2c3e50"><img src = "../images/logo1.png" style = "float:left; margin-top: -15px;" height = "45px" />&nbsp;&nbsp;&nbsp;PCSDS Human Resource Information System (HRIS)</a>
                
  </div>

           
            
    </nav>
    <br>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header" style="background-color: #3A4750; color: #fff;">DASHBOARD</li>
                    <li>
                        <a href="home.php">
                            <i class="fa fa-home fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Home</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           <i class="fa fa-list-alt fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Recruitement Selection & Placement</div>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_personnel.php" active><span><i class="fa fa-users fa-sm"aria-hidden="true" ></i> Personnel</a></span>
                            </li>
                            <li>
                                <a href="position_table.php"><span><i class="fa fa-id-badge fa-sm"aria-hidden="true" ></i> Position/Designation</a></span>
                            </li>
                            <!-- <li>
                                <a href="gass_rank_table.php">Position</a>
                            </li> -->
                            <!-- <li>
                                <a href="rank_table.php">Academic Rank</a>
                            </li> -->
                            <li>
                                <a href="department_table.php"><span><i class="fa fa-bank fa-sm"aria-hidden="true" ></i> Division</a></span>
                            </li>
                            <li>
                                <a href="file_table.php">
                                    <span><i class="fa fa-folder-open-o fa-sm"aria-hidden="true" ></i> Files
                                </a></span>
                            </li>
                        </ul> 
                    </li>                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="fa fa-bar-chart fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Performance Management</div>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="accomp.php"><span><i class="fa fa-clipboard "aria-hidden="true" ></i> Accomplishment Reports</a></span>
                            </li>
                            <li>
                                <a href="opcr.php"><span><i class="fa fa-clipboard"aria-hidden="true" ></i> OPCR</a></span>
                            </li>
                            <li>
                                <a href="dpcr.php"><span><i class="fa fa-clipboard"aria-hidden="true" ></i> DPCR</a></span>
                            </li>
                            <li>
                                <a href="ipcr.php"><span><i class="fa fa-clipboard"aria-hidden="true" ></i> IPCR</a></span>
                            </li>
                            <li>
                                <a href="forms.php"><span><i class="fa fa-files-o fa-sm"aria-hidden="true" ></i> OTHERS</a></span>

                            </li>
                             <!-- <li>
                                <a href="">EEED</a>
                            </li>
                             <li>
                                <a href="">DMO</a>
                            </li>
                             <li>
                                <a href="">EPRPD</a>
                            </li> -->
                        </ul>
                    </li>
                       <li>
                        <a  href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="fa fa-universal-access fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Learning & Development</div>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#"><span><i class="fa fa-file-text-o" aria-hidden="true"></i> Individual Reports</a></span>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-file-text-o" aria-hidden="true"></i> Training</a></span>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-file-text-o" aria-hidden="true"></i> BTOR/Training Reports</a></span>
                            </li>
                            <!-- <li>
                                <a href="educational_qualification.php">Educational Qualifications</a>
                            </li>
                            <li>
                                <a href="faculty_per_campus.php">Number of Staff </a>
                            </li> -->
                            <!-- <li>
                                <a href="Faculty_profile_by_degree.php">Faculty Profile by Degree</a>
                            </li> -->
                            <!-- <li>
                                <a href="faculty_profile_by_academic_rank.php">Faculty Profile by Academic Rank</a>
                            </li> -->
                            <!-- <li>
                                <a href="breakdown_of_faculty_profile.php">Breakdown Of Staff</a>
                            </li> -->
                            <!-- <li>
                                <a href="gass_profile_by_degree.php">Gass Profile By Degree</a>
                            </li> -->
                            <!-- <li>
                                <a href="gass_per_campus.php">Number of Regular per Division</a>
                            </li>
                            <li>
                                <a href="job_order_per_campus.php">Number of Job Order Personnel per Division</a>
                            </li> -->
                            <!-- <li>
                                <a href="gass_personnel.php">GASS Personnel with Completed Master's and Doctoral Degree</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="fa fa-trophy fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Rewards and Recognition</div>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#"><span><i class="fa fa-money" aria-hidden="true"></i> Step Increment</a></span>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-star" aria-hidden="true"></i> Loyalty</a></span>
                            </li>
                            <!-- <li>
                                <a href="faculty_profile.php">Faculty Profile by Unit</a>
                            </li> -->
                            <!-- <li>
                                <a href="educational_qualification.php">Educational Qualifications</a>
                            </li>
                            <li>
                                <a href="faculty_per_campus.php">Number of Faculty / Campus</a>
                            </li>
                            <li>
                                <a href="Faculty_profile_by_degree.php">Faculty Profile by Degree</a>
                            </li>
                            <li>
                                <a href="faculty_profile_by_academic_rank.php">Faculty Profile by Academic Rank</a>
                            </li>
                            <li>
                                <a href="breakdown_of_faculty_profile.php">Breakdown Of Faculty</a>
                            </li>
                            <li>
                                <a href="gass_profile_by_degree.php">Gass Profile By Degree</a>
                            </li>
                            <li>
                                <a href="gass_per_campus.php">Number of Gass Personnel per Campus</a>
                            </li>
                            <li>
                                <a href="job_order_per_campus.php">Number of Job Order Personnel per Campus</a>
                            </li>
                            <li>
                                <a href="gass_personnel.php">GASS Personnel with Completed Master's and Doctoral Degree</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="fa fa-bars fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Options</div>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                <a href=""><i class="fa fa-cog fa-spin fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Settings</div></a>
                            </li>
                        <li>
                        <a class = "me" style="color: #F44336;" href = "#" name="logout" id="logout"><i class="fa fa-sign-out fa-2x"aria-hidden="true" ></i><div style="padding: 5px;">Logout</div></a>
                             </li>
                        </ul>
                    </li>
                </ul><br><br><br>
                <div class="dtime">

                    <div class="alert alert-info" style="background-color: #056f00;">

                       <div style="font-size: 12px; color:#fff; margin-top: 8px; "><span id="tick2" >
          </span>&nbsp;|
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                        &nbsp;<i class="fa fa-calendar fa-xs"aria-hidden="true" ></i>
                    </div>

                 </div>


                <div class="notif">
                <span><i>TODAY'S BIRTHDAYS</i> <i class="fa fa-birthday-cake fa-lg"aria-hidden="true" ></i></i> </span><br><br>
                <div class="celeb">

                <?php
                  include("connect.php"); 
                    $date = date('-m-d');
                    $bquery = $con->prepare("SELECT * FROM tbl_personnel WHERE per_date_of_birth LIKE '%$date%' ");
                    $bquery->execute();
                    while($row = $bquery->fetch()) {
                        $bday = $row["per_date_of_birth"];
                        $date = new DateTime($bday);
                        $now = new DateTime();
                        $difference = $date->diff($now)->format('%y');
                        $gender = $row['per_gender'];


                    if ($gender == 'Male') { ?>
                    <center><td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
                          <?php if($row['per_img'] != ""): ?>
                           <img src="uploads/profile_img/<?php echo $row['per_img']; ?>" width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;">
                        <?php else: ?>
                        <img src="img/blank.jpg"  width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;"></a>
                          <?php endif; ?>
                              </td></center>

                             
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span">Name: <strong>Mr. <?php echo $row['per_firstname']. " " . $row['per_middlename']. ". " . $row['per_lastname']; ?></strong></span><br>
                        <span>Division: <?php echo $row['per_designation']; ?></span><br>
                        <span>Position: <?php echo $row['per_position']; ?></span><br><br> 
                   <?php } else { ?>
                    <center><td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
                          <?php if($row['per_img'] != ""): ?>
                           <img src="uploads/profile_img/<?php echo $row['per_img']; ?>" width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;">
                        <?php else: ?>
                        <img src="img/blank.jpg"  width="100px;" style=" border-radius: 50%; border:1.5px solid #4caf50; height: 100px;"></a>
                          <?php endif; ?>
                              </td></center>
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span>Name:<strong> Ms/Mrs. <?php echo $row['per_firstname']. " " . $row['per_middlename']. ". " . $row['per_lastname']; ?></strong></span><br>
                        <span>Division: <?php echo $row['per_designation']; ?></span><br>
                        <span>Position: <?php echo $row['per_position']; ?></span><br><br> 


                  <?php  }
                  }
                ?>
                    </div>
                </div>
            </div>

        </aside>
    </section>
 <?php include("add_position_modal.php"); ?>
            <?php include("add_rank_modal.php"); ?>
            <?php include("add_department_modal.php"); ?>
<script type="text/javascript">
$("#logout").on("click", function() {
    Swal.fire({
    title: 'Are you sure you want to Logout?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK'
   }).then((result) => { 
      if (result.value===true) { 
         window.location = 'logout.php';
      } 
   }) 
})   
   </script> 
   <script>
$( '#topheader .navbar-nav a' ).on( 'click', function () {
    $( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});
</script>       
</div></div></div></aside></section></body></html>

<script>
 
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
        
</script>