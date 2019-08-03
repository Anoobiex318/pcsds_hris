
<?php 
include('header.php'); 

?>
<script type="text/javascript">
   let timerInterval
Swal.fire({
  title: 'Welcome Administrator!',
  html: 'Data Loading in <strong></strong> seconds.',
  timer: 1000,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      Swal.getContent().querySelector('strong')
        .textContent = Swal.getTimerLeft()
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.timer
  ) {
    // console.log('I was closed by the timer')
  }
})
</script>

<link rel="stylesheet" type="text/css" href="css/style2.css">
<div class="dashboard-top" style="align-self: center;">
  <div class="row clearfix" >
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">                        
                           <i class="fa fa-bank fa-2x"aria-hidden="true" ></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connect.php');
                                 $division = $con->prepare("SELECT COUNT(*) FROM tbl_department");
                                    $division->execute();
                                    $fetch1 = $division->fetchAll();

                                foreach($fetch1 as $key => $row1) { 
                                   $total1 = $row1['COUNT(*)'];

                              }?>
                            <div class="text">Divisions</div>
                            <div class="number count-to"><?php echo $total1; ?></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                              <?php
                                include('connect.php');
                                 $permanent = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_status = 'Permanent'");
                                    $permanent->execute();
                                    $fetch = $permanent->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];

                                }?>
                            <div class="text">PERMANENT</div>
                            <div class="number count-to"><?php echo $total; ?></div>
                        </div>
                    </div>
                </div>
               
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                       <div class="content">
                            <?php
                                include('connect.php');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_status = 'Job-Order'");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total3 = $row2['COUNT(*)'];

                              }?>
                      

                     
                            <div class="text">JOB ORDER</div>
                            <div class="number count-to"><?php echo $total3; ?></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                           <i class="fa fa-birthday-cake fa-2x"aria-hidden="true" ></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connect.php');
                               $date = date('-m-d');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_date_of_birth LIKE '%$date%' ");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                              }?>
                            <div class="text">Todays Birthday</div>
                            <div class="number count-to"><?php echo $total2; ?></div>
                        </div>
                    </div>
                </div>
            </div>
</div>
    <div class="pie-report" style="float: right;">
  
v>
    </div>
  