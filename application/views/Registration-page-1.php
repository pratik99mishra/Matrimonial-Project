<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Yourself</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?php echo base_url(),"Matrimonial/";?>https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(),"Matrimonial/";?>css/Registration-Page-1.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Register Yourself</h2>
                    <form method="POST" action="<?php echo site_url('Page_1_controller/register');?>">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="txtName">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Email" name="txtEmail">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="txtPwd">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>js/global.js"></script>
</body>
</html>
