<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Contact</title>
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
						<li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                              <li><a href="<?php echo site_url('About_controller/index');?>">About</a>
                              </li>

                              <li><a href="<?php echo site_url('Gallery_controller/index');?>">Gallery</a>
                                </li>


                              <li><a href="<?php echo site_url('Services_controller/index');?>">Services</a>
                              </li>
                               
                                <li><a href="<?php echo site_url('Contact_controller/index');?>">Contact Us</a>
                                </li>
                            </ul>
                        </li>

                        <!--<li class="active"><a href="contact.html">Contact Us</a></li>-->
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
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- contact -->
    <section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
			<h2 class="heading-agileinfo text-center  mb-4">Get In Touch</h2>
			<div class="container pt-sm-5">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <span class="fa fa-map"></span>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> Cuttack, India

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>Email :
                                    <a href="<?php echo base_url(),"Matrimonial/";?>mailto:example@email.com"> pratik99kumar@gmail.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <span class="fa fa-mobile"></span>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+91-8404941098</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact">
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder=""></textarea>
                                </div>
                                <div class="input-group1">
                                    <button class="form-control" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
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