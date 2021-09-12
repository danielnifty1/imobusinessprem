<?php
// session_start();
// include("dataFile.php");

// require 'connection.php';


//   if(isset($_SESSION['auser'])){
        
        
//         $anumber=$_SESSION['auser'];


//         $getdetails="SELECT* from accounts where accountnumber = $anumber";
// $result= mysqli_query($conn,$getdetails);
// $retn=mysqli_num_rows($result);
// if($retn){
//   while($row=mysqli_fetch_assoc($result)){
//     $actbal=$row['balance'];
//     $acttype=$row['account_type'];
//     $currency=$row['currency'];
//     $email=$row['email'];
//     $id_passport=$row['id_passport'];
//     $passport=$row['passport'];
//     $username=$row['username'];
//     $phone=$row['phone'];
//     $lastseen=$row['lastseen'];
//     $fullname=$row['fname']." ".$row['mname']." ".$row['lname'];
//   }
// }
//           }else{
          	//$anumber="9988";
          // 	echo '<script>location.replace("index") </script>';
          // }




?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="satander financial bank, satander, finacial bank, bank" />
<link href="imgo/imbp.png" rel="shortcut icon"/>

    <title>IMO STATE BUSINESS</title>

    <link rel="stylesheet" type="text/css" href="font-awesome/fontawesome/css/v4-shims.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/fontawesome/css/all.css">

    <!-- Bootstrap -->
    <link href="Dashboard_files/bootstrap.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="history_files/font-awesome/css/font-awesome.css">
    <!-- NProgress -->
    <link href="Dashboard_files/nprogress.htm" rel="stylesheet">
    <!-- iCheck -->
    <link href="Dashboard_files/green.htm" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="Dashboard_files/bootstrap-progressbar-3.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Dashboard_files/jqvmap.htm" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="Dashboard_files/daterangepicker_002.htm" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Dashboard_files/custom.css" rel="stylesheet">
        <link href="animate.css" rel="stylesheet">

  </style>
  
 
<style type="text/css">
.mr-5{font-size: 25px;}
.mr-5 span{font-size: 20px;}

ol{list-style: none}
ol li::before {content: "\2022";display: inline-block;width: 10px;margin-left: -1em; color: black; font-weight: bold;font-size: 20px}
h4{
	color: #131517; font-weight: bold;
}


</style>
</head>

  <body class="nav-md">
    <div class="container body">
       <div class="main_container" style="background-color:#; ">
        <div class="col-md-3 left_col" style=" background-color:#;">
          <div class="left_col scroll-view">
           
         

            <!-- sidebar menu -->
<?php require "dashheader.php" ?>
	
			<div class="row" style="">

		
				
				<div class="w3-col s12 m10 col-md-push-1 col-md-8">
					  <div class="w3-panel w3-card-2">

					  	<form>
					  		<h4 style="text-align: center;">PREMISES REGISTRATION</h4>

					  		<div class="w3-row-padding" style="border-radius: 50px;">
						
							  <div class="w3-full">
							    <label>Name of company</label>
							    <input class="w3-input w3-border" type="text" placeholder="name of company/firm/enterprise/partnership">
							  </div>
							</div>
							<br>

							<div class="w3-row-padding" style="border-radius: 50px;">
							  <div class="w3-half">
							    <label>company Type *</label>
							    <select class="w3-input w3-border" >
							    	<option>Select Type</option>
							    	<option>None Incorporated</option>
							    	<option>Business Name</option>
							    	<option>Limited Liability Company</option>
							    	<option>Public Liability Company</option>
							    </select>
							    <!-- <input " type="text" placeholder="Two"> -->
							  </div>
							  <div class="w3-half">
							  <br>
							    <label>Registraion Number* <span class="fa fa-check" style="color:green;"></span> </label>
							    <input class="w3-input w3-border" type="text" placeholder="RC NUMBER">
							  </div>
							</div>
							<br>

							<div class="w3-row-padding" style="border-radius: 50px;">
							  <div class="w3-half">
							    <label>Date of incorperation*</label>
							
							    <input class="w3-input w3-border" type="date" placeholder="date of incorperation/Registraion">
							  </div>
							  <div class="w3-half">

							  	<label>Sector*</label>
							    <select class="w3-input w3-border" >
							    	<option>Select Type</option>

							    	<optgroup label="Agriculture">
							    	<option>crop production</option>
							    	<option>livestock production</option>
							    	<option>forestry</option>							    		
							    	</optgroup>

							    	<optgroup label="Agriculture">
							    	<option>Mining and Quarrying</option>
							    	<option>Crude petroleumand Natural Gas</option>
							    	<option>Coal Mining</option>							    		
							    	</optgroup>

							    	
							    </select>
							  </div>
							</div>
							<br>


							<div class="w3-row-padding" style="border-radius: 50px;">
								  <div class="w3-half">
								   	
								    <label>Type of Business*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Nature of Business">
								    		<option>Select Nature of Business</option>
								    	</optgroup>
								    </select>
								    <!-- <input " type="text" placeholder="Two"> -->
								  </div>
								  <div class="w3-half">
								    
								    <label>Organisation size*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Organisation size">
								    		<option>Select Number of Employee</option>
								    	</optgroup>
								    </select>
								  </div>
							</div>
							<br>

							<div class="w3-row-padding" style="border-radius: 50px;">
								  <div class="w3-half">
								   	
								    <label>Business Premises*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Nature of Business">
								    		<option>Select Nature of Business</option>
								    	</optgroup>
								    </select>
								    <!-- <input " type="text" placeholder="Two"> -->
								  </div>
								  <div class="w3-half">
								    
								    <label>Assets size*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Organisation size">
								    		<option>Select Number of Employee</option>
								    	</optgroup>
								    </select>
								  </div>
							</div>
							<br>

								<div class="w3-row-padding" style="border-radius: 50px;">
								  <!-- <div class="w3-half">
								   	
								    <label>Business Premises*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Nature of Business">
								    		<option>Select Nature of Business</option>
								    	</optgroup>
								    </select>
								    <input " type="text" placeholder="Two"> -->
								  
								  <div class="w3-full">
								    
								    <label>Premises Address*</label>

								    <textarea class="w3-input w3-border" placeholder="address" value="you" style="resize: none;"></textarea>

								   
								       
								  </div>
							</div>
							<br>

							<div class="w3-row-padding" style="border-radius: 50px;">

								  <div class="w3-full">
								    
								    <label>IMSSIN* <span class="fa fa-check" style="color: green"></span></label>

								    <input class="w3-input w3-border"  type="text" placeholder="Imo State Social Security Identification Number">
								       
								  </div>
							</div>

								<br>

							<div class="w3-row-padding" style="border-radius: 50px;">
								  <div class="w3-half">
								   	
								    <label>LGA*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Nature of Business">
								    		<option>Select LGA</option>
								    	</optgroup>
								    </select>
								    <!-- <input " type="text" placeholder="Two"> -->
								  </div>
								  <div class="w3-half">
								    
								    <label>AREA*</label>
								       <select class="w3-input w3-border" >
								    	<optgroup label="Organisation size">
								    		<option>Select Area</option>
								    	</optgroup>
								    </select>
								  </div>
							</div>
							<br>
							<hr>
							<center>
							<label style="text-align:center;">Supporting documents</label>
							</center>
							<hr>
								

								<br>

							<div class="w3-row-padding" style="border-radius: 50px;">
								  <div class="w3-half">
								   	
								    <label>Tax Clearance certificate*</label>
								
								    <input  type="file" class="w3-input w3-border">
								  </div>
								  <div class="w3-half">
								    
								    <label>CAC Certificate*</label>
								        <input  type="file" accept=".jpg,.jpeg" class="w3-input w3-border">
								  </div>
							</div>
							<br>















							<!-- PROCCED BUTTON-->
							<center>
								
							<div class="w3-row-padding" style="border-radius: 50px;">
							 <br>
							<button class="w3-btn w3-blue">Procced</button>
							</div>
							</center>

					  	</form>

					  </div>
				</div>
			

				
				
				
			</div>
 



		<!-- 		<div class="row">
				<h4>Messages</h4>

				
			</div>

			<div class="row">
				<div class="col-md-9">
					<ol>
						
					<li style="text-align: justi; color:orangey;">Do contact us for any form of enquiries about how we operates. our strong customer service are ever ready to respond to you as fast as possible <a href="support" style="color: blue">Click Here</a></li>
					</ol>
				</div>
				
			</div>
 -->

		</div>
	</div>        
</div>
            
            
            
            
            
            
            
            
            

          <div><br><br>
          </div>
          <!-- /top tiles -->
   
     
          <!--get help starts here-->
        
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="Dashboard_files/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="Dashboard_files/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="Dashboard_files/fastclick.htm"></script>
    <!-- NProgress -->
    <script src="Dashboard_files/nprogress_002.htm"></script>
    <!-- Chart.js -->
    <script src="Dashboard_files/Chart.htm"></script>
    <!-- gauge.js -->
    <script src="Dashboard_files/gauge.htm"></script>
    <!-- bootstrap-progressbar -->
    <script src="Dashboard_files/bootstrap-progressbar.js"></script>
    <!-- iCheck -->
    <script src="Dashboard_files/icheck.htm"></script>
    <!-- Skycons -->
    <script src="Dashboard_files/skycons.htm"></script>
    <!-- Flot -->
    <script src="Dashboard_files/jquery_010.htm"></script>
    <script src="Dashboard_files/jquery_005.htm"></script>
    <script src="Dashboard_files/jquery_003.htm"></script>
    <script src="Dashboard_files/jquery_009.htm"></script>
    <script src="Dashboard_files/jquery_007.htm"></script>
    <!-- Flot plugins -->
    <script src="Dashboard_files/jquery_004.htm"></script>
    <script src="Dashboard_files/jquery_008.htm"></script>
    <script src="Dashboard_files/curvedLines.htm"></script>
    <!-- DateJS -->
    <script src="Dashboard_files/date.htm"></script>
    <!-- JQVMap -->
    <script src="Dashboard_files/jquery_006.htm"></script>
    <script src="Dashboard_files/jquery.htm"></script>
    <script src="Dashboard_files/jquery_002.htm"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Dashboard_files/moment.htm"></script>
    <script src="Dashboard_files/daterangepicker.htm"></script>

    <!-- Custom Theme Scripts -->
    <script src="Dashboard_files/custom.js"></script>
	<!-- /.modal -->

 

    <!-- /.modal -->
        <script type="text/javascript">
            function isNumberKey(evt){
        var charcode=(evt.which)?evt.which:event.keycode
        if(charcode>31 && (charcode<48 || charcode> 57))
            return false;
        return true;
    }
    </script>

   
  

</div></body></html>