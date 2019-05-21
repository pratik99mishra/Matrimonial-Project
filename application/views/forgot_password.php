<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login Form</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url(),"Matrimonial/";?>css/Login-Page.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url(),"Matrimonial/";?>css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="<?php echo base_url(),"Matrimonial/";?>//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1></h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<!--<img src="images/user.jpg" alt="" />-->
					<i class="fa fa-user" style="font-size: 75px" aria-hidden="true"></i>
				</div>
				<form method="post" id="login" name="login" action="">
					<p class="legend">Forgot Password<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="email" placeholder="Email" name="email" id="email" required="required">
						<span class="fa fa-envelope"></span>
					</div>

					<div class="input">
						<input type="password" placeholder="New Password" name="newPassword" id="newPassword" required="required">
						<span class="fa fa-unlock"></span>
					</div>

					<div class="input">
						<input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required="required">
						<span class="fa fa-unlock"></span>
					</div>

					<button type="submit" class="btn submit" name="btnpwd" id="btnpwd">
						<span  class="fa fa-sign-in"></span>
					</button>
				</form>
				<a href="" class="bottom-text-w3ls">Forgot Password?</a>
				<br>
				<a href="<?php echo site_url('Page_1_controller/index');?>" class="bottom-text-w3ls">Register Now.</a>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('Matrimonial/assets/js/Pratik.js');?>"></script>
</body>
</html>