<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>About us</title>
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

                        <!--<li><a href="contact.html">Contact Us</a></li>-->
                    </ul>
    </nav>
</header>
<!-- //header -->
       
    </div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo site_url('Index1_controller/index');?>">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">About us<span></span></h3>
			<div class="inner_sec_info_wthree_agile mt-md-5 pt-3">
				<div class="row help_full">
					<div class="col-lg-6 banner_bottom_grid help">
						<img src="<?php echo base_url(),"Matrimonial/";?>images/g1.jpg" alt=" " class="img-fluid">
					</div>
					<div class="col-lg-6 banner_bottom_left1">
						<!--<h4>Lorem Ipsum convallis diam</h4>-->
						<p><a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> is a web based marriage introduction service. The target audience are men and women living in India and others looking to marry from these countries. Specific care is taken not to expose the contact information of the members to prevent unwanted communication and maintain privacy.</p> 

                        <p>Starting in end 2019 <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> has begun requiring identity confirmation of all members including free members. This is one of the ways <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> is working to give its clients a safer and better experience. By preventing free searches by non members, <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> is further securing the privacy of its members and insuring that only people interested in marriage contact the members.</p>
                        <p>Payments for membership can be made through our secure payment gateway or by check to the agent closest to you. We accept Visa, Master Card, Discover, American Express and most debit cards. The management of <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> is dedicated to continuing investmenents in technology to stay at the cutting edge and provide its members with a safe and productive experience.</p>

                        <p>A lot of effort is put into answering member queries. However the large amount of mail being presently received prevents instant response. Our current backlog is at 24 to 48 hours.</p>

						</div>
				</div>
			</div>
		</div>
	</section>

	<!-- choose -->
	<section class="choose py-5">
		<div class="container py-md-4 mt-md-3"> 
			<div class="row inner_w3l_agile_grids-1 ">
				<div class="col-lg-6 w3layouts_choose_left_grid1">
					<div class="choose_top">
						<h4 class="mb-3 mt-3 text-white">Feel Free to Contact us Directly</h4>
						<p class="text-white">SAGAI.COM is a web based marriage introduction service. The target audience are men and women living in India and others looking to marry from these countries. Specific care is taken not to expose the contact information of the members to prevent unwanted communication and maintain privacy. </p>
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
	<!-- team -->
	<section class="team py-md-5 py-4">
        <div class="container py-lg-5">
            <h2 class="heading-agileinfo text-center  mb-4">Wedding Planners</h2>
			<div class="row inner-sec-w3layouts-agileinfo pt-md-5">
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-left">
					<img src="<?php echo base_url(),"Matrimonial/";?>images/t4.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>John Doe</h4>
							<h6>Lorem
								</h6><h6>
						</h6></div>
						<div class="social-icons-section">
							<a class="fac" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-facebook"></span>
							</a>
							<a class="twitter" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-twitter"></span>
							</a>
							<a class="pinterest" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-pinterest"></span>
							</a>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-right">
					<img src="<?php echo base_url(),"Matrimonial/";?>images/t2.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Alina Smith</h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-facebook"></span>
							</a>
							<a class="twitter" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-twitter"></span>
							</a>
							<a class="pinterest" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-pinterest"></span>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-left">
					<img src="<?php echo base_url(),"Matrimonial/";?>images/t3.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Adam Lobster</h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-facebook"></span>
							</a>
							<a class="twitter" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-twitter"></span>
							</a>
							<a class="pinterest" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-pinterest"></span>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-right">
					<img src="<?php echo base_url(),"Matrimonial/";?>images/t1.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Chris Woakes </h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-facebook"></span>
							</a>
							<a class="twitter" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-twitter"></span>
							</a>
							<a class="pinterest" href="<?php echo base_url(),"Matrimonial/";?>#">
								<span class="fa fa-pinterest"></span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //team -->

<!--/newsletter-->
    <footer class="newsletter_right pymd-5 py-4" id="footer">
        <div class="container">
            <div class="inner-sec py-md-5 py-3">
                <div class="row mb-md-4 mb-md-3">
					<div class="col-lg-3 col-md-6 social-info text-left">
                       <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
						<p>A.P Market Complex, Link road Badambadi, Cuttack</p>
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