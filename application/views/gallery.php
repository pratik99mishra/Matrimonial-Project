<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gallery</title>
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
        <li class="breadcrumb-item active">Gallery</li>
    </ol>
	<!--Gallery-->
		<div class="ga-top">
	<section class="gallery py-lg-5 editContent">
	<div class="container">
	<div class="title-section pt-5 text-center">
    
			  <h2 class="heading-agileinfo text-center  mb-4">Our Gallery</h2>
 </div>
	 </div>
	</section>
	 <div class="gal-content">
		<div class="container py-5">
            
			<div class="row agile_gallery_grids w3-agile demo">
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal1">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g1.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal2">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g2.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal3">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g3.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
				</div>
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal4">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g4.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal5">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g5.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal6">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g6.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
				</div>
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal7">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g7.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal8">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g8.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="<?php echo base_url(),"Matrimonial/";?>#gal9">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g9.jpg" alt=" " class="img-fluid" />
						
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	 
	
	
	 <!-- popup-->
        <div id="gal1" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g1.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->

        <!-- popup-->
        <div id="gal2" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g2.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g3.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g4.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal5" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g5.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal6" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g6.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
  <!-- popup-->
        <div id="gal7" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g7.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
		  <!-- popup-->
        <div id="gal8" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g8.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
		  <!-- popup-->
        <div id="gal9" class="pop-overlay animate">
            <div class="popup">
                <img src="<?php echo base_url(),"Matrimonial/";?>images/g9.jpg" alt="Popup Image" class="img-fluid" />
                <!--<p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>-->
                <a class="close" href="<?php echo base_url(),"Matrimonial/";?>#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
	<!--//Gallery-->
	</div>
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