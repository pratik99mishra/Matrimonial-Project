<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    if(count($prefrences_data) != 0)
    {
        $age_from_ = $prefrences_data->Age_from;
        $age_to_ = $prefrences_data->Age_to;
        $height_from_ = $prefrences_data->Height_from;
        $height_to_ = $prefrences_data->Height_To;
        $gender_ = $prefrences_data->Gender;
        $looking_for_ = $prefrences_data->Looking_For;
        $martial_status_ = $prefrences_data->Martial_Status;
        $religion_ = $prefrences_data->Religion;
        $tongues_ = $prefrences_data->Mother_Tongue;
       // $community_ = $prefrences_data=->Community;
    }  
    else 
    {
      $age_from_  = '';
      $age_to_ = '';
      $height_from_ = '';
      $height_to_ = '';
      $gender_ = '';
      $looking_for_ = '';
      $martial_status_ = '';
      $religion_ = '';
      $tongues_ = '';
      $community_ = ''; 
     }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Partner/prefrences</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(),"Matrimonial/";?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(),"Matrimonial/";?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(),"Matrimonial/";?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(),"Matrimonial/";?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="<?php echo base_url(),"Matrimonial/";?>assets/img/adult-attractive-beauty-265742.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    SAGAI.COM
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="<?php echo site_url('Matches_controller/index');?>">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <p>MATCHES</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('My_profile_controller/index');?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>MY PROFILE</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('Gallery_dashboard_controller/index');?>">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                        <p>GALLERY</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('Partner_prefrences_controller/index');?>">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        <p>PARTNER PREFRENCES</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('Inbox_controller/index');?>">
                        <i class="fa fa-inbox" aria-hidden="true"></i>
                        <p>Feedback</p>
                    </a>
                </li>
                <!--<li class="">
                    <a href="<?php //echo site_url('Notifications_controller/index');?>">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <p>NOTIFICATIONS</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php //echo site_url('Search_controller/index');?>">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>SEARCH</p>
                    </a>
                </li>-->
                <li class="">
                    <a href="<?php echo site_url('Settings_controller/index');?>">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <p>SETTINGS</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Partner Prefrences</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="<?php echo site_url('Matches_controller/index');?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Matches</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Notifications_controller/index');?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Notifications_controller/index');?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Messages</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Search_controller/index');?>" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Searches</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <i class="fa fa-rebel" aria-hidden="true"></i>
                               Premium
                            </a>
                        </li>
                        <li>
                           <a href="<?php echo site_url('Index1_controller/index');?>">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                               Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tell us what you are looking for in a life partner</h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="patner" name="partner" action="<?php echo site_url('partner_prefrences_controller/partner_prefrences');?>">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <select class="form-control" name="agefrom">
                                                    <option disabled="disabled" selected="selected">Age From</option>

                                                    <?php 
                                                        foreach ($agefrom as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($age_from_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                            
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><br></label>
                                                <select class="form-control" name="ageto">
                                                    <option disabled="disabled" selected="selected">Age To</option>

                                                    <?php 
                                                        foreach ($ageto as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($age_to_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Height</label>
                                                <select class="form-control" name="heightfrom">
                                                    <option disabled="disabled" selected="selected">Height From</option>

                                                     <?php 
                                                        foreach ($heightfrom as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($height_from_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><br></label>
                                                <select class="form-control" name="heightto">
                                                    <option disabled="disabled" selected="selected">Height To</option>

                                                    <?php 
                                                        foreach ($heightto as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($height_to_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option disabled="disabled" selected="selected">Gender</option>

                                                    <?php 
                                                        foreach ($lookingfor_ as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($looking_for_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Looking For</label>
                                                <select class="form-control" name="lookingfor">
                                                    <option disabled="disabled" selected="selected">Looking For</option>
                                                    
                                                    <?php 
                                                        foreach ($lookingfor_ as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($looking_for_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Martial Status</label>
                                                <select class="form-control" name="martialstatus">
                                                    <option disabled="disabled" selected="selected">Martial Status</option>


                                                     <?php 
                                                        foreach ($martialstatus as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($martial_status_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <select class="form-control" name="religion">
                                                    <option disabled="disabled" selected="selected">Religion</option>

                                                    <?php 
                                                        foreach ($allreligion as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($religion_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mother Tongue</label>
                                                <select class="form-control" name="mothertongue">
                                                    <option disabled="disabled" selected="selected">Mother Tongue</option>

                                                    <?php 
                                                        foreach ($alltongue as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($tongues_ == $item->Name)
                                                        { 
                                                    ?>
                                                        <option value="<?php echo $item->Name;?>" selected="selected"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    else 
                                                    { 
                                                    ?>   
                                                        <option value="<?php echo $item->Name;?>"><?php echo $item->Name;?></option>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    <?php 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Community</label>
                                                <select class="form-control" name="community">
                                                    <option disabled="disabled" selected="selected">Community</option>
                                                    <option value="Budhism">Budhism</option>
                                                    <option value="Brahmin">Brahmin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save & Continue</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><center>Advertisement</center></h4>
                                <img height="50%" width="100%" src="<?php echo base_url(),"Matrimonial/";?>assets/img/adult-attractive-beauty-265742.jpg"><br>
                            </div>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                   © 2019 <a href="<?php echo site_url('Index1_controller/index');?>">SAGAI.COM</a>. All Rights Reserved.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(),"Matrimonial/";?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"Matrimonial/";?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(),"Matrimonial/";?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(),"Matrimonial/";?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(),"Matrimonial/";?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(),"Matrimonial/";?>assets/js/demo.js"></script>


</html>
