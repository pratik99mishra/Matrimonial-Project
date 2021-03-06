<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>index</title>
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
    <div class="banner">
        <!-- header -->
        <header>	
	<nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li class="active"><a href="<?php echo site_url('Index1_controller/index');?>">Home</a></li>
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
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info">
                    <h3>FOREVER TOGETHER</h3>
                    <h2>WE FIND PURE SOULS...</h2>
					<a href="<?php echo site_url('About_controller/index');?>" class="banner-button btn mt-md-5 mt-4">Know More</a>
				</div>
            </div>
        </div>
    </div>
	 <!-- //banner-text -->
	 <!--banner form-->
	<section class="banner_form py-5">
		<div class="container py-lg-3">
			<div class="row ban_form">
				<div class="col-lg-7 fom-left">
					<div class="categories_sub cats1">
						<h2 class="heading-agileinfo">Our Weddings  Story</h2>
						<p class="vam">I have been searching on other matrimonial websites for months but had no success initially. As soon as I joined <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> I came upon my future wife's profile. We live in the same city and therefore it was easy to meet and get to know her. we got married recently.<br> 
						Thank you for the help <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a>. </p></div>
				</div>
				<div class="col-lg-5 reg-fom">
					<img src="<?php echo base_url(),"Matrimonial/";?>images/pee.jpg" class="img-fluid" alt="">
					
				</div>
			</div>
		</div>
	</section>
	<!--//banner form-->
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
	 <!-- /advantage -->
    <section class="banner-bottom py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec py-lg-5 py-3">
                 <h3 class="heading-agileinfo text-center">Our Best Matches</h3>
               <div class="row middle-grids mt-lg-5 pt-5">
                   <div class="col-lg-6 advantage-grid-info1">
                        <div class="advantage_left1 text-center">
                            <img src="<?php echo base_url(),"Matrimonial/";?>images/p1.jpg" class="img-fluid" alt="">
                        </div>
                    </div> 
					 <div class="col-lg-6 advantage-grid-info pt-md-5">
                        <div class="advantage_left">
							<!--<h4 class="mb-2">Integer porttitor mollisar</h4>-->
                            <h3>Nazia</h3>
							<p class="mt-2">I met my husband Rehan, after being on <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> for a few months. I first moticed his profile during my first week on the site. Intitially, I decided not to respond, but now I an glad that I did. We spoke on phone for a few weeks and then decided to meet in person. We clicked instatntly and got married this year.</p>
                        </div>
                    </div>
                </div>
				 <div class="row middle-grids pt-lg-5">
                    <div class="col-lg-6 advantage-grid-info pt-md-5 mt-md-5">
                        <div class="advantage_left">
							<!--<h4 class="mb-2">Integer porttitor mollisar</h4>-->
                            <h3>Tipu Malik</h3>
							<p class="mt-2">I met my lovely wife through <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a>. I had just graduated from McGill University in Montreal canada and began work in Toronto. I joined <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> as my life became busy and I had less time to go out to meet new people. The girl I was interested in lived in Dallas. She visitedme in Toronto and I sealed the deal. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 advantage-grid-info1">
                        <div class="advantage_left2 text-center">
                            <img src="<?php echo base_url(),"Matrimonial/";?>images/g1.jpg" class="img-fluid" alt="">
                        </div>
                    </div> 
                </div>
			</div>
        </div>
    </section>
    <!-- //advantage -->
	<!-- feedback -->
	<section class="news py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="heading-agileinfo text-white text-center">Recent FeedBack</h3>
			<div class="row mt-md-5 pt-4">
				<div class="col-md-4 item">
					<div class="feedback-info py-5 px-4">
						<!--<h4 class="mb-2">Tempor incididunt ut labore hytnm-->
						</h4>
						<p>I register my son <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a>. We wanted a professional and family oriented girl for our son then we register <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> and finally we got matches for my son and my son got married and we want to thank <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> for making this task easy for us keep up the good work!<br>
						Thank You.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="<?php echo base_url(),"Matrimonial/";?>images/te1.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Rahul Bhatiya</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 item-2">
					<div class="feedback-info py-5 px-4">
						<!--<h4 class="mb-2">Tempor incididunt ut labore hytnm-->
						</h4>
						<p>My first date went amazing, it was a casual meetup. I felt good in his company, he was the life partner that was worth searching. We had a lot in common and it seemed after few months that I have known his all my life. Our families were coperative and now we are happily married.<br>
						Thanks.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="<?php echo base_url(),"Matrimonial/";?>images/te3.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Seema Shah</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 item">
					<div class="feedback-info py-5 px-4">
						<!--<h4 class="mb-2">Tempor incididunt ut labore hytnm
						</h4>-->
						<p>Two years ago, I foundmyself as a single mother with a young son. Recently divorced, I moved to Mumbai to live with my family. I joined <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a> and met Amit. Our chemistry was electric, so we decided to make it official amd we got married last year<br>
						Thank You.</p>
						<div class="feedback-grids mt-4">
							<div class="feedback-img">
								<img src="<?php echo base_url(),"Matrimonial/";?>images/te2.jpg" class="img-fluid rounded-circle" alt="" />
							</div>
							<div class="feedback-img-info">
								<h5>Ria Mathur</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //feedback -->
	<!-- stats -->
	<!--<section class="stats py-5">
		<div class="container py-md-5">
			<h3 class="heading-agileinfo text-center">Our Achievements</h3>
			<span class="w3-line black"></span>	
			<div class="row inner_w3l_agile_grids-1 pt-md-5 mt-4">
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
					<span class="fa fa-users mb-2"></span>
					<p class="counter">250</p>
					<h3>Clients</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
					<span class="fa fa-gift mb-2"></span>
					<p class="counter">182</p>
					<h3>Weddings</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<span class="fa fa-glass mb-2"></span>
					<p class="counter">105</p>
					<h3>Bachelore Parties</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<span class="fa fa-music mb-2"></span>
					<p class="counter">150</p>
					<h3>Other Events</h3>
				</div>
			</div>
		</div>	
	</section>-->
<!-- //stats -->
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