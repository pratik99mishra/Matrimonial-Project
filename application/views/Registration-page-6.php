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
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(),"Matrimonial/";?>css/Registration-Page-6.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Describe Yourself</h2>
                                      <?php

    $data=array(
     'name'=>'frmcla',
     'id'=>'frmcla'

        );
     echo form_open_multipart('Page_6_controller/describe_yourself',$data);
     ?>
                       <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="physical_disability" id="physical_disability">
                                    <option disabled="disabled" selected="selected">Physical Disability</option>
                                    <option value="Yes">Yes</option>  
                                    <option value="No">No</option>     
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="textarea" placeholder="About Yourself" name="about" id="about">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="textarea" placeholder="Address" name="address" id="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Mobile Number With Country Code" name="mobile_no" id="mobile_no">
                        </div>
                        <div class="input-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="imageURL" id="imageURL" class="filestyle" data-icon="false" data-buttontext="Choose image">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Get Started</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url('Matrimonial/assets/js/Pratik.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>js/global.js"></script>
</body>
</html>
