<?php 
require "connection.php";

if(isset($_GET['verify'])){

	$emailid=$_GET['verify'];

	$check="SELECT* FROM account where eid='$emailid'";
	$result=mysqli_query($conn,$check);
	$return=mysqli_num_rows($result);

	if($return){
		$msg="email verified successfully";

	}else{
	$msg="email verification failed";
	}


	// code...
}else{
	$return="";
	$msg="";
}
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Official Corporate Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Official Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!--//web font-->

</head>

<body style="background-image: url(imsu/pback.jpeg);background-size: cover;";>

<?php require "header.php" ?>

<div class="contact py-sm-5 py-4" id="contact" style="color:white">
	<div class="container py-lg-3">
		<center><h3 class="heading mb-4" style="color: #fff">Welcome Back</h3>
		<div class="w3-contact-left" style="color:white">
					<h4 class="about-left-agile mb-4">Sign to Your Account   </h4>
					<p class="mb-4">Imo State Business Premises Registration Made Easy</p>
					
				</div>
		</center>
		<div class="row pt-lg-4">
			<div class="col-lg-5">
				


			</div>





			<div class="col-lg-7" >
				<!-- register form grid -->
				<div class="register-top1" >
					<form action="#" method="post" class="register-wthree">
						<?php

						if ($return==1) { ?>
							<h4 class="wow tada" style="color:green"><?php echo $msg ?></h4>

					<?php }else{?>

						<h4 class="wow tada" style="color:green"><?php echo $msg ?></h4>
					<?php } ?>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<input class="form-control" type="text" placeholder="Enter Email" name="name" required="">
								</div>
								
							</div>

							<br>

							<div class="row">
								<div class="col-md-8">
									<input class="form-control" type="text" placeholder="Enter Password" name="name" required="">
								</div>
								
							</div>
						</div>
					



					
						<div class="row">
							<div class="col-md-12">
								<button style="box-shadow: 2px 3px  2px black;" id="loginbtn" class="btn btn-lg btn-info ">Login</button>
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-md-6">
								<span class="fa fa-key"></span> <a href="register.php">Don't have account? Register</a>
								
							</div>
						</div>
					</form>
				</div>
				<!--  //register form grid ends here -->
			</div>
		</div>
	</div>
</div>
<!-- //contact-->
<!-- map -->
<!-- <div class="w3l-map p-2">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848295.9861393345!2d150.37152490226384!3d-33.846975938661174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1515557909959"></iframe>
</div> -->
<!-- //map -->

	
<!-- brands -->

<!-- brands -->

<!-- footer -->
<!--  -->
<!-- //footer -->

</body>
</html>