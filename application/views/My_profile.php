<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    if(count($profile_data) != 0)
    {
        $createdid = $profile_data->Username;
        $emailid = $profile_data->Email;
        $fname = $profile_data->First_Name;
        $lname = $profile_data->Last_Name;
        $dob = $profile_data->Birthdate;
        $tongues = $profile_data->Mother_Tongue;
        $gender = $profile_data->Gender;
        $lookingfor = $profile_data->Looking_For;
        $religion = $profile_data->Religion;
        $address = $profile_data->Address;
        $state = $profile_data->State;
        $country = $profile_data->Country;
        $educationlevel_ = $profile_data->Education_level;
        $about = $profile_data->About_yourself;
    }  
    else 
    {
        $createdid = '';
        $emailid = '';
        $fname = '';
        $lname = '';
        $dob = '';
        $tongues = '';
        $gender = '';
        $lookingfor = '';
        $religion = '';
        $address = '';
        $state = '';
        $country = '';
        $educationlevel_ = '';
        $about = '';
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>My/Profile</title>

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
    <div class="sidebar" data-color="red"  data-image="<?php echo base_url(),"Matrimonial/";?>assets/img/adult-attractive-beauty-265742.jpg">
         
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
                <li class="active">
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
                <li class="">
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
                    <a href="<?php ///echo site_url('Search_controller/index');?>">
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
                    <a class="navbar-brand" href="#">My Profile</a>
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
                            <a href="<?php echo site_url('Inbox_controller/index');?>" class="dropdown-toggle" data-toggle="dropdown">
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
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form  method="POST" id="page10" name="page10" action="<?php echo site_url('My_profile_controller/updateclass');?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Created ID</label>
                                                <input type="text" class="form-control" disabled placeholder="Your ID" value="<?php echo $createdid;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="txtemail" id="txtemail" class="form-control" placeholder="Email" value="<?php echo $emailid;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $lname;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Birthdate</label>
                                                <input type="date" class="form-control" placeholder="DOB" value="<?php echo $dob;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mother Tongue</label>

                                                <select class="form-control">
                                                    <option disabled="disabled" selected="selected">Mother Tongue</option>

                                                   <?php 
                                                        foreach ($alltongue as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($tongues == $item->Name)
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                 <select class="form-control" value="<?php echo $gender;?>">
                                                    <option disabled="disabled" selected="selected">Gender</option>
                                                    <?php 
                                                        $maleSelected=''; 
                                                        $femaleSelected='';
                                                    ?>
                                                    <?php 
                                                        if($gender == 'Male')
                                                        {
                                                            $maleSelected = " selected='selected'";
                                                            $femaleSelected = "";
                                                        } 
                                                        else if($gender == 'Female')
                                                        {
                                                            $maleSelected = "";
                                                            $femaleSelected = " selected='selected'";
                                                        } 
                                                    ?>
                                                    <option value="Male"<?php echo $maleSelected;?>>Male</option>
                                                    <option value="Female"<?php echo $femaleSelected;?>>Female</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Looking For</label>
                                                 <select class="form-control" value="<?php echo $lookingfor;?>">
                                                    <option disabled="disabled" selected="selected">Looking For</option>
                                                    <?php 
                                                        $maleSelected=''; 
                                                        $femaleSelected='';
                                                    ?>
                                                    <?php 
                                                        if($lookingfor == 'Male')
                                                        {
                                                            $maleSelected = " selected='selected'";
                                                            $femaleSelected = "";
                                                        } 
                                                        else if($lookingfor == 'Female')
                                                        {
                                                            $maleSelected = "";
                                                            $femaleSelected = " selected='selected'";
                                                        } 
                                                    ?>
                                                    <option value="Male"<?php echo $maleSelected;?>>Male</option>
                                                    <option value="Female"<?php echo $femaleSelected;?>>Female</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                 <select class="form-control" value="<?php echo $religion;?>">
                                                    <option disabled="disabled" selected="selected">Religion</option>
                                                    
                                                    <?php 
                                                        foreach ($allreligion as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($religion == $item->Name)
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home" value="<?php echo $address;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="State" value="<?php echo $state;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>

                                                <select class="form-control" value="<?php echo $country;?>">
                                                    <option disabled="disabled" selected="selected">Country</option>

                                                    <?php 
                                                        foreach ($countries as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($country == $item->Name)
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
                                                <label>Education Level</label>
                                                 <select class="form-control">
                                                    <option disabled="disabled" selected="selected">Education Level</option>

                                                    <?php 
                                                        foreach ($Levelofeducation as $item) 
                                                        { 
                                                    ?>
                                                    <?php 
                                                        if($educationlevel_ == $item->Name)
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" value="<?php echo $about;?>" placeholder="Here can be your description"><?php echo $about;?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>

                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <?php foreach ($img as $items) {?>
                                              <img class="avatar border-gray" src="<?php echo base_url('./Matrimonial/assets/ttdocs/'.$items->Upload_pic);?>" alt="..."/>

                                       <?php 
                                   }
                                   ?>
                                  
                                      <h4 class="title"><?php echo $fname;?> <?php echo $lname;?><br /> 
                                         <small><?php echo $emailid;?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"><?php echo $about;?></p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
