<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Wedding Planner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?php echo base_url(),"Matrimonial/";?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(),"Matrimonial/";?>css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="<?php echo base_url(),"Matrimonial/";?>css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
     <!-- online-fonts -->
	<link href="<?php echo base_url(),"Matrimonial/";?>//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="<?php echo base_url(),"Matrimonial/";?>//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
       <!-- header -->
        <header>	
	<nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li><a href="<?php echo site_url('Index1_controller/index');?>">Home</a></li>
                        <li><a href="<?php echo site_url('Page_login_controller/index');?>">Login</a></li>
                        <li><a href="<?php echo site_url('Page_1_controller/index');?>">Sign Up</a></li>
						<li class="active">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="<?php echo site_url('Index1_controller/index');?>">About</a>
                                </li>

                              <li><a href="<?php echo site_url('Gallery_controller/index');?>">Gallery</a>
                                </li>


                              <li><a href="<?php echo site_url('Services_controller/index');?>">Services</a>
                              </li>

                                 <li><a href="<?php echo site_url('Contact_controller/index');?>">Contact Us</a>
                                </li>
                            </ul>
                        </li>

                        <!--<li><a href="contact.html">Contact Us</a></li>-->
                    </ul>
    </nav>
</header>
<!-- //header -->
       
    </div>
	 <!-- //banner-text -->
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo site_url('Index1_controller/index');?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
    </ol>
    <!-- /services -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
               <h3 class="heading-agileinfo text-center">Find your Special Someone </h3>
                <div class="row middle-grids mt-md-5 pt-4">
                    <div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-sign-in mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">
                                 <a href="<?php echo site_url('Page_1_controller/index');?>">Sign Up</a></h5>
                                <p class="card-text">Register for free & put up your Profile
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in-w3ls middle-grid-info active text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-connectdevelop mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Connect</h5>
                                <p class="card-text">Select & Connect with Matches you like
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-comments mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Interact</h5>
                                <p class="card-text">Become a Premium Member & Start a Conversation
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
<!-- choose -->
	<section class="choose py-5">
		<div class="container py-md-4 mt-md-3"> 
			<div class="row inner_w3l_agile_grids-1 ">
				<div class="col-lg-6 w3layouts_choose_left_grid1">
					<div class="choose_top">
						<h4 class="mb-3 mt-3 text-white">Feel Free to Contact us Directly</h4>
						<p class="text-white">SAGAI.COM is a web based marriage introduction service. The target audience are men and women living in India and others looking to marry from these countries. Specific care is taken not to expose the contact information of the members to prevent unwanted communication and maintain privacy.</p>
						<a href="<?php echo site_url('Services_controller/index');?>" class="btn btn-primary mt-3">Read More</a>
					</div>
				</div>
				<div class="col-lg-6 w3layouts_choose_left_grid2">
					<div class="row">
						<div class="col-md-6 w3l_choose_bottom1 mt-3 pt-md-4">
							<div class="choose_bottom_top">
                                <span class="fa fa-gift mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Weddings</h5>
                                <p class="card-text">A wedding is a ceremony where two people are united in marriage.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom2">
							<div class="choose_bottom_top">
                                <span class="fa fa-cutlery mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Parties</h5>
                                <p class="card-text">Pleasant surprises are loved by everyone.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom3 mt-3 pt-md-4">
							<div class="choose_bottom_top">
                                <span class="fa fa-music mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Entertainment</h5>
                                <p class="card-text">Entertainment is important as it brings people together and is a good way for the entire family to bond.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom4">
							<div class="choose_bottom_top">
                                <span class="fa fa-glass mb-2"></span>
                                <h5 class="card-title text-uppercase my-3">Celebrations</h5>
                                <p class="card-text">A celebration is a special enjoyable event that people organize because something pleasant has happened or because it is someone's birthday or anniversary.
                                </p>
                            </div>
						</div>
					</div>
				</div>
			</div>
	</div>   
</section>
<!-- //choose -->
  <!--services-->
    <div class="agileits-services py-md-5 py-4">
        <div class="container py-lg-5">
            <h2 class="heading-agileinfo text-center  mb-4">Services Overview</h2>
            <div class="agileits-services-row row mt-lg-5">
                <div class="col-lg-4 col-md-6">
                    <div class="agileits-services-grids">
                        <span class="fa fa-fast-backward"></span>
						<h4 class="my-2">Service-1
                            <span></span>
                        </h4>
                        <p>We may enter into strategic marketing alliances or partnerships with third parties who may be given access to personal information including your name, address, telephone number and email for the purpose of providing you information regarding products and services that we think will be of interest to you. In connection with strategic marketing alliances or partnerships, we will retain all ownership rights to the information, and we will not share information regarding your social security number or other personal financial data.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="agileits-services-grids mt-md-0 mt-5">
                        <span class="fa fa-share-square"></span>
						<h4 class="my-2">Service-2
                            <span></span>
                        </h4>
                        <p>Information Security. We utilize encryption/security software to safeguard the confidentiality of personal information we collect from unauthorized access or disclosure and accidental loss, alteration or destruction. Evaluation of Information Protection Practices. Periodically, our operations and business practices are reviewed for compliance with corporate policies and procedures governing the security, confidentiality and quality of our information. Employee Access, Training and Expectations. Our corporate values, ethical standards, policies and practices are committed to the protection of customer information. In general, our business practices limit employee access to confidential information, and limit the use and disclosure of such information to authorized persons, processes and transactions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="agileits-services-grids mt-lg-0 mt-5 ">
                        <span class="fa fa-star"></span>
						<h4 class="my-2">Service-3
                            <span></span>
                        </h4>
                        <p>We use Evalon Inc as our payment gateway. We do not collect any credit card information other than that provided to us through Evalon Inc letting us know who successfully used their credit card on our site. Other email that you may send to us may not be secure unless we advise you that security measures will be in place prior to your transmitting the information. For that reason, we ask that you do not send confidential information such as Social Security or account numbers to us through an unsecured email.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services-->

<!--/newsletter-->
    <footer class="newsletter_right pymd-5 py-4" id="footer">
        <div class="container">
            <div class="inner-sec py-md-5 py-3">
                <div class="row mb-md-4 mb-md-3">
					<div class="col-lg-3 col-md-6 social-info text-left">
                       <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
						<p>A.P Market Complex, Link road Badambadi, Cuttack </p>
						<p class="my-2"> Cuttack, India</p>
						<p class="phone">Mobile: +91-8404941098</p>
						<p class="phone my-2">Fax: +91-8400866618</p>
						<p class="phone">Mail:
							<a href="<?php echo base_url(),"Matrimonial/";?>mailto:pratik99kumar@gmail.com">pratik99kumar@gmail.com</a>
						</p>

                    </div>
					<div class="col-lg-3 col-md-6 social-info text-left">
					 <h3 class="tittle1 foot mb-md-5 mb-4 text-white">About Us</h3>
                       <p><a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> is a leader when it comes to matchmaking services online. This fact is evident from our track record over the years. Join our friendly website and browse through the millions of profiles of different religion, state, countries and community. We take immense pride in serving our valuable members and have never disappointed.</p>

                    </div>
                    <div class="col-lg-6 col-md-12 n-right tex-left">
                        <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Subscribe us</h3>
                        <form action="#" method="post">
                            <div class="form-group d-flex">
                                <input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
                                 <button class="form-control submit text-uppercase" type="submit ">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<div class="copyright py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">      
					<p class="copy-right mt-2">© <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a>. All Rights Reserved.
						<!--<a href="http://w3layouts.com/"> W3layouts </a>-->
					</p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons scial justify-content-end">
						<li class="mr-1"><a href="<?php echo base_url(),"Matrimonial/";?>#"><span class="fa fa-facebook"></span></a></li>
						<li class="mx-1"><a href="<?php echo base_url(),"Matrimonial/";?>#"><span class="fa fa-twitter"></span></a></li>
						<li class="mx-1"><a href="<?php echo base_url(),"Matrimonial/";?>#"><span class="fa fa-google-plus"></span></a></li>
						<li class="mx-1"><a href="<?php echo base_url(),"Matrimonial/";?>#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!--//newsletter-->

</body>
</html>