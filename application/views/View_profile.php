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

    <title>view/Profile</title>

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
               <!-- <li class="">
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
                    <a class="navbar-brand" href="#">View Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Matches</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <p class="hidden-lg hidden-md">Messages</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                                <h4 class="title">view Profile</h4>
                                 <table class="table">
                            </div>
                            <div class="content">
                                
                                    <?php foreach ($matchs as $item) 
                                    { 
                                    ?>
                                    <tr>
                                        <td>
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="header">
                                                            <img height="100%" width="100%" src="<?php echo base_url('./Matrimonial/assets/ttdocs/'.$item->Upload_pic);?>" alt="..."/>
                                                        </div>
                                                        <div class="text-center">
                                                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="table">
                    <h4>
                        <b>
                            <?php echo $item->First_Name?>
                        </b> 
                        <b>
                            <?php echo $item->Last_Name?>
                        </b>
                    </h4><br>
                    <h5>
                        <tr><td width="35%">DOB : </td><td><?php echo $item->Birthdate?><br></td></tr>
                        <tr><td>Religion : </td><td><?php echo $item->Religion?><br></td></tr>
                        <tr><td>Mother Tongue : </td><td><?php echo $item->Mother_Tongue?><br></td></tr>
                        <tr><td>Martial Status : </td><td><?php echo $item->Martial_Status?><br></td></tr>
                        <tr><td>Height From : </td><td><?php echo $item->Height_from?><br></td></tr>
                        <tr><td>Height To : </td><td><?php echo $item->Height_To?><br></td></tr>
                        <tr><td>Body Type : </td><td><?php echo $item->Body_type?><br></td></tr>
                        <tr><td>Skin Zone : </td><td><?php echo $item->Skin_jone?><br></td></tr>
                        <tr><td>Smoke : </td><td><?php echo $item->Smoke?><br></td></tr>
                        <tr><td>Drink : </td><td><?php echo $item->Drink?><br></td></tr>
                        <tr><td>Diet : </td><td><?php echo $item->Diet?><br></td></tr>
                        <tr><td>Country : </td><td><?php echo $item->Country?><br></td></tr>
                        <tr><td>State : </td><td><?php echo $item->State?><br></td></tr>
                        <tr><td>Nakshtra : </td><td><?php echo $item->Nakshtra?><br></td></tr>
                        <tr><td>Education Field : </td><td><?php echo $item->Education_field?><br></td></tr>
                        <tr><td>Education Level : </td><td><?php echo $item->Education_level?><br></td></tr>
                        <tr><td>Desigination : </td><td><?php echo $item->desigination?><br></td></tr>
                        <tr><td>Physical Disability : </td><td><?php echo $item->Physical_disability?><br></td></tr>
                        <tr><td>Annual Income : </td><td><?php echo $item->Annual_income?><br></td></tr>
                        <tr><td>Currently working : </td><td><?php echo $item->Currently_Working_With ?><br></td></tr>
                        <tr><td>UG College Name : </td><td><?php echo $item->Graduation_clg_name?><br></td></tr>
                        <tr><td>PG College Name : </td><td><?php echo $item->pg_clg_name?><br></td></tr>
                        <tr><td>About : </td><td><?php echo $item->About_yourself?><br></td></tr>
                        <tr><td>Email : </td><td><?php echo $item->Email?><br></td></tr>



                    </h5></table>
                 <a href="<?php echo site_url('Matches_controller/index/');?>">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Back</button>
                        </a>
                    </div>

                                            </div>
                                        </td></tr></div></table>
                                    <?php  
                                    } 
                                    ?>
                               
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
