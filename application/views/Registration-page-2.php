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
    <link href="<?php echo base_url(),"Matrimonial/";?>css/Registration-page-2.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Great! Now Some Basic Details</h2>
                    <form method="POST" id="page2" name="page2" action="<?php echo site_url('Page_2_controller/basic_details');?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="First Name" name="first_name" id="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Last Name" name="last_name" id="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="datepicker" placeholder="Birthdate" name="birthday" id="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" id="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Mother_tongue" id="Mother_tongue">
                                            <option disabled="disabled" selected="selected">Mother Tongue</option>
                                            <option value="Doesn't Matter" label="Doesn't Matter">Doesn't Matter</option>
                                            <option value="Assamese" label="Assamese">Assamese</option>
                                            <option value="Hindi" label="Hindi">Hindi</option>
                                            <option value="English" label="English">English</option>
                                            <option value="Gujarati" label="Gujarati">Gujarati</option>
                                            <option value="Bengali" label="Bengali">Bengali</option>
                                            <option value="Kannada" label="Kannada">Kannada</option>
                                            <option value="Konkani" label="Konkani">Konkani</option>
                                            <option value="Malayalam" label="Malayalam">Malayalam</option>
                                            <option value="Marathi" label="Marathi">Marathi</option>
                                            <option value="Marwari" label="Marwari">Marwari</option>
                                            <option value="Odia" label="Odia">Odia</option>
                                            <option value="Punjabi" label="Punjabi">Punjabi</option>
                                            <option value="Sindhi" label="Sindhi">Sindhi</option>
                                            <option value="Tamil" label="Tamil">Tamil</option>
                                            <option value="Telugu" label="Telugu">Telugu</option>
                                            <option value="Urdu" label="Urdu">Urdu</option>
                                            <option value="Aka" label="Aka">Aka</option>
                                            <option value="Arabic" label="Arabic">Arabic</option>
                                            <option value="Arunachali" label="Arunachali">Arunachali</option>
                                            <option value="Awadhi" label="Awadhi">Awadhi</option>
                                            <option value="Baluchi" label="Baluchi">Baluchi</option>
                                            <option value="Bhojpuri" label="Bhojpuri">Bhojpuri</option>
                                            <option value="Bhutia" label="Bhutia">Bhutia</option>
                                            <option value="Brahui" label="Brahui">Brahui</option>
                                            <option value="Brij" label="Brij">Brij</option>
                                            <option value="Burmese" label="Burmese">Burmese</option>
                                            <option value="Chattisgarhi" label="Chattisgarhi">Chattisgarhi</option>
                                            <option value="Chinese" label="Chinese">Chinese</option>
                                            <option value="Coorgi" label="Coorgi">Coorgi</option>
                                            <option value="Dogri" label="Dogri">Dogri</option>
                                            <option value="French" label="French">French</option>
                                            <option value="Garhwali" label="Garhwali">Garhwali</option>
                                            <option value="Garo" label="Garo">Garo</option>
                                            <option value="Haryanavi" label="Haryanavi">Haryanavi</option>
                                            <option value="Himachali/Pahari" label="Himachali/Pahari">Himachali/Pahari</option>
                                            <option value="Hindko" label="Hindko">Hindko</option>
                                            <option value="Kakbarak" label="Kakbarak">Kakbarak</option>
                                            <option value="Kanauji" label="Kanauji">Kanauji</option>
                                            <option value="Kashmiri" label="Kashmiri">Kashmiri</option>
                                            <option value="Khandesi" label="Khandesi">Khandesi</option>
                                            <option value="Khasi" label="Khasi">Khasi</option>
                                            <option value="Koshali" label="Koshali">Koshali</option>
                                            <option value="Kumaoni" label="Kumaoni">Kumaoni</option>
                                            <option value="Kutchi" label="Kutchi">Kutchi</option>
                                            <option value="Ladakhi" label="Ladakhi">Ladakhi</option>
                                            <option value="Lepcha" label="Lepcha">Lepcha</option>
                                            <option value="Magahi" label="Magahi">Magahi</option>
                                            <option value="Maithili" label="Maithili">Maithili</option>
                                            <option value="Malay" label="Malay">Malay</option>
                                            <option value="Manipuri" label="Manipuri">Manipuri</option>
                                            <option value="Miji" label="Miji">Miji</option>
                                            <option value="Mizo" label="Mizo">Mizo</option>
                                            <option value="Monpa" label="Monpa">Monpa</option>
                                            <option value="Nepali" label="Nepali">Nepali</option>
                                            <option value="Pashto" label="Pashto">Pashto</option>
                                            <option value="Persian" label="Persian">Persian</option>
                                            <option value="Rajasthani" label="Rajasthani">Rajasthani</option>
                                            <option value="Russian" label="Russian">Russian</option>
                                            <option value="Sanskrit" label="Sanskrit">Sanskrit</option>
                                            <option value="Santhali" label="Santhali">Santhali</option>
                                            <option value="Seraiki" label="Seraiki">Seraiki</option>
                                            <option value="Sinhala" label="Sinhala">Sinhala</option>
                                            <option value="Sourashtra" label="Sourashtra">Sourashtra</option>
                                            <option value="Spanish" label="Spanish">Spanish</option>
                                            <option value="Swedish" label="Swedish">Swedish</option>
                                            <option value="Tagalog" label="Tagalog">Tagalog</option>
                                            <option value="Tulu" label="Tulu">Tulu</option>
                                            <option value="Other" label="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="looking_for" id="looking_for">
                                            <option disabled="disabled" selected="selected">Looking For</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url('Matrimonial/assets/js/Pratik.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(),"Matrimonial/";?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(),"Matrimonial/";?>js/global.js?version=1.1"></script>
</body>
</html>
