<link rel="stylesheet" type="text/css" href="css/style1.css">
<center>
    <div class="backk" style="float: left; margin-left: 120px;">
        <button><a href="all_personnel.php">Back</a></button>
    </div>
    <div class="filterss" style="float: right; margin-right: 120px;" onload="refresh();">
        <button onclick="printContent('print')" id = "hit" style="float: right;">Print Report</button>
        <input id="btnExport" type="button" value="Export to Excel" style="float: right; margin-top: 30px; margin-right: -86px;">
        
    </div>
    <div ng-app="myApp" ng-controller="myCtrl">
        <div class="prepared-form" style="border: 1px solid; width: 30%; margin-right: 480px;">
            <i>Note: Please Fill up this form.</i>
      
            <table>
            <tr>
                <td>Prepared by :</td>
                <td><input ng-model="firstname" placeholder="Name" class="form-control"></td>
            </tr>
            <tr>
                <td>Position :</td>
                <td><input ng-model="position" placeholder="Position" class="form-control"></td>
            </tr>
            <!-- <tr>
                <td>Certified Correct :</td>
                <td><input ng-model="certified" placeholder="Name" class="form-control"></td>
            </tr>
            <tr>
                <td>Position :</td>
                <td><input ng-model="position1" placeholder="Position" class="form-control"></td>
            </tr> -->
           </table>
        </div>
    <br>
    <div id="print" style="border: 1px solid; width: 100%; height: auto;">
        <div class="report-title" style = "margin:20px; margin-top: 25px;"><br/>
      <div class="print-logo">
        <img src="../images/logo.png" width="120px" height="120px" style=" float: left;">
      </div>
      
      <div class="print-logo">
        <img src="../images/biosphere.png" width="120px" height="120px" style=" float: right;">
      </div>
      <center>Republic of the Philippines</center>
      <center><strong>Palawan Council For Sustainable Development Staff</strong></center>
      <center>PCSD Building Sports Complex Road Sta. Monica Heights, Puerto Princesa City, Palawan</center>
      <center>P.O. Box 45 PPC 5300 Palawan, Philippines
	Telephone No: (048) 434-4235 | Telefax: 434-4234</center>
      <br />
      <center><strong>SUMMARY OF STAFF</strong></center>
      <center><strong>As of <?php echo date('F Y'); ?></strong></center>
    </div>
       
        
   <style>
	table {
			width: 70%;
			text-align: center;
		}
		td {
			padding:5px;
		}
	</style>


	<?php
	include ("connect.php");
	$result=$con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id WHERE per_id='{$_GET['per_id']}'");
	$result->execute();
	$fetch = $result->fetchall(); 

	foreach ($fetch as $key => $row) {
		$per_id = $row['per_id'];
		$pos_id = $row['pos_id'];
		$dept_id = $row['dept_id'];
		$dept_name = $row['dept_name'];

	 $bday = $row["per_date_of_birth"];
	 $date = new DateTime($bday);
	 $now = new DateTime();
	 $difference = $date->diff($now)->format('%y');
	?>





     <center> <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
             
		<td colspan = "5" class = "page-header"> I. Personal Information</td>	
		</tr>
		<tr>
			<td>
			<label><u><?php echo $row['per_lastname']; ?></u></label>
			<br>
			Last Name		
			</td>
			<td><label><u><?php echo $row['per_firstname']; ?></u></label>
			<br>
			First Name
			</td>
			<td><label><u><?php echo $row['per_middlename']; ?></u></label>
			<br>
			Middle Name
			</td>
			<td><label><u><?php echo $row['per_suffix']; ?></u></label>
			<br>
			Name Extension
			</td>
		</tr>
			<tr>
			<td colspan="2"><label><u><?php echo $row['per_date_of_birth']; ?></u></label>
			<br>
			Date of Birth		
			</td>
			<td colspan = "3">
			<label><u><?php echo $row['per_address']; ?></u></label>
			<br>
			Address
			</td>
		</tr>
		<tr>
			<td colspan = "3">
			<label><u><?php echo $row['per_place_of_birth']; ?></u></label>
			<br>
			Place of Birth
			</td>
			<td><label><u><?php echo $row['per_contact_no']; ?></u></label>
			<br>
			Contact No.		
			</td>
		</tr>
		<tr>
			<td><label><u><?php echo $row['per_gender']; ?></u></label>
			<br>
			Gender	
			</td>
			<td><label><u><?php echo $row['per_status']; ?></u></label>
			<br>
			Civil Status		
			</td>
			<td colspan="2"><label><u><?php echo $row['per_date_of_original_appointment']; ?></u></label>
			<br>
			Date of Appointment		
			</td>
		</tr>
		<tr>
			<td><label><u><?php echo $row['per_pagibig_no']; ?></u></label>
			<br>
			Pag-ibig No.		
			</td>
			<td colspan="2"><label><u><?php echo $row['per_gsis_bp_no']; ?></u></label>
			<br>
			GSIS No.		
			</td>
			<td><label><u><?php echo $row['per_tin_no']; ?></u></label>
			<br>
			TIN No.		
			</td>
		</tr>
		
		<tr>
			<td><label><u><?php echo $row['per_plantilla_no']; ?></u></label>
			<br>
			Plantilla No.		
			</td>
			<td>
			<?php
			$result1=$con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id = tbl_position.pos_id WHERE per_id='{$_GET['per_id']}'");
	$result1->execute();
	$fetch1 = $result1->fetchall();
	foreach($fetch1 as $key => $row1) { 
	?>
			<label><u><?php echo $row1['pos_name']; ?></u></label>
	<?php } ?>	
			<br>
			Position
		
			</td>
			<td>
			
			<br>
			Employee Status	
			</td>
			<td>
			 <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id =tbl_position.pos_id LEFT JOIN tbl_gass_rank ON tbl_personnel.gass_id = tbl_gass_rank.gass_id LEFT JOIN tbl_academic_rank ON tbl_personnel.rank_id = tbl_academic_rank.rank_id LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $pos_id = $row['pos_id'];
                                        $gass_id = $row['gass_id'];
                                        $rank_id = $row['rank_id'];
                                        $bday = $row["per_date_of_birth"];
                                        $dooa = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date1->diff($now)->format('%y');


                                  ?>
	<label><u><?php echo $row['dept_name']; ?></u></label>
	<?php } ?>	
			<br>
			Division
		
			</td>
		</tr>
		<tr>
			
		</tr>
		
		<tr>
			<td colspan = "4" class = "page-header">Educational Background</label>
		</tr>
		<tr>
			<td><label><u><?php echo $row['bs_name']; ?></u></label>
			<br>
			Bachelor's Degree	
			</td>
			<td><label><u><?php echo $row['bs_year']; ?></u></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><label><u><?php echo $row['bs_school']; ?></u></label>
			<br>
			School	
			</td>
		</tr>
		<tr>
			<td><label><u><?php echo $row['ms_name']; ?></u></label>
			<br>
			Master's Degree	
			</td>
			<td><label><u><?php echo $row['ms_year']; ?></u></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><label><u><?php echo $row['ms_school']; ?></u></label>
			<br>
			School	
			</td>
		</tr>
		<tr>
			<td><label><u><?php echo $row['dr_name']; ?></u></label>
			<br>
			Doctoral Degree		
			</td>
			<td><label><u><?php echo $row['dr_year']; ?></u></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><label><u><?php echo $row['dr_school']; ?></u></label>
			<br>
			School	
			</td>
		</tr>
	</table></center>
	<?php } ?>
          <br><br>
                <div class="noted" style="display: inline-block;">
                    <label>Prepared by:</label>
                    
                    <label style="text-transform: uppercase;"><strong>{{firstname}}, {{position}}</strong></label>
                  
                    
            <!--  <br><br>
                    <label style="float: right;">Certified Correct:</label>
                   <span>
                    <label style="text-transform: uppercase;"><strong>{{certified}}</strong></label>
                  
                    <label style="text-transform: capitalize; float: right;">{{position1}}</label> -->
               <br>
                </div>
            </div>
        </div>
    </center>
    </form>
<script src="plugins/js/jquery-1.js"></script>
<script type="text/javascript">
$("#btnExport").click(function (e) {
    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var table_html = $('#print')[0].outerHTML;
//    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');
    
    var css_html = '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
//    css_html = css_html.replace(/ /g, '%20');
    
    a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html + '</body></html>');
    
    //setting the file name
    a.download = 'Individual Report_' + postfix + '.xls';
    //triggering the function
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
});
</script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<script type="text/javascript">
    (function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
            Arr.forEach.call(tables, function(table) {
                Arr.forEach.call(table.tBodies, function(tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                });
            });
        }

        function _filter(row) {
            var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
            row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
            init: function() {
                var inputs = document.getElementsByClassName('light-table-filter');
                Arr.forEach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
            LightTableFilter.init();
        }
    });

})(document);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.name = " ";
});
app.filter('capitalize', function() {
    return function(input) {
      return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
    }
});
</script>
