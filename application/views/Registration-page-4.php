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
    <link href="<?php echo base_url(),"Matrimonial/";?>css/Registration-Page-4.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Education & Career Details</h2>
                    <form method="POST" id="page4" name="page4" action="<?php echo site_url('Page_4_controller/education_career_details');?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Education_Field" id="Education_Field">
                                            <option disabled="disabled" selected="selected">Education Field</option>
                                            <option value="Advertising/Marketing">Advertising/Marketing</option>
                                            <option value="Administrative Services">Administrative Services</option> 
                                            <option value="Architecture">Architecture</option> 
                                            <option value="Armed Forces">Armed Forces</option> 
                                            <option value="Arts">Arts</option> 
                                            <option value="Commerce">Commerce</option> 
                                            <option value="Computers/IT">Computers/IT</option> 
                                            <option value="Education">Education</option> 
                                            <option value="Engineering/Technologies">Engineering/Technologies</option> 
                                            <option value="Fashion">Fashion</option> 
                                            <option value="Finance">Finance</option> 
                                            <option value="Fine Arts">Fine Arts</option>
                                            <option value="Home Science">Home Science</option> 
                                            <option value="Law">Law</option> 
                                            <option value="Management">Management</option> 
                                            <option value="Medicine">Medicine</option> 
                                            <option value="Nursing/Health Science">Nursing/Health Science</option>
                                            <option value="Office Administration">Office Administration</option><option value="Science">Science</option> 
                                            <option value="Shipping">Shipping</option> 
                                            <option value="Travel & Tourism">Travel & Tourism</option>   
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="education_level" id="education_level">
                                            <option disabled="disabled" selected="selected">Education Level</option>
                                            <option value="Doctorate">Doctorate</option>
                                            <option value="Masters">Masters</option>
                                            <option value="Honours Degree">Honours Degree</option>
                                            <option value="Bachelors">Bachelors</option>
                                            <option value="Undergraduate">Undergraduate</option>
                                            <option value="Associates Degree">Associates Degree</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="High School">High School</option>
                                            <option value="Less than high school">Less than high school</option>
                                            <option value="Trade School">Trade School</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Graduation College Name" name="Graduation_College_Name" id="Graduation_College_Name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Post-Graduation College Name" name="Post_Graduation_College_Name" id="Post_Graduation_College_Name">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Currently_Working_With" id="Currently_Working_With">
                                            <option disabled="disabled" selected="selected">Currently Working With</option>
                                            <option value="Private Company">Private Company</option>
                                            <option value="Government/Public Sector">Government/Public Sector</option>
                                            <option value="Defense/Civil Services">Defense/Civil Services</option>
                                            <option value="Bussiness/Self Employed">Bussiness/Self Employed</option>
                                            <option value="Not Working">Not Working</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="designation" id="designation">
                                            <option disabled="disabled" selected="selected">Designation</option>
                                            <option value="Banking Professionals">Banking Professionals</option>
                                            <option value="Chartered Accountant">Chartered Accountant</option>
                                            <option value="Company Secratery">Company Secratery</option>
                                            <option value="Finance Professional">Finance Professional</option>
                                            <option value="Investment Professional">Investment Professional</option>
                                            <option value="Accounting Professional">Accounting Professional</option>
                                            <option value="Administrative Professional">Administrative Professional</option>
                                            <option value="Human Resourcr Professional">Human Resourcr Professional</option>
                                            <option value="Actor">Actor</option>
                                            <option value="Advertising Professional">Advertising Professional</option>
                                            <option value="Entertainment Professional">Entertainment Professional</option>
                                            <option value="Event Manager">Event Manager</option>
                                            <option value="Journalist">Journalist</option>
                                            <option value="Media Professional">Media Professional</option>
                                            <option value="Public Relations Professionals">Public Relations Professionals</option>
                                            <option value="Farming">Farming</option>
                                            <option value="Horticulturist">Horticulturist</option>
                                            <option value="Aggricultural Professional">Aggricultural Professional</option>
                                            <option value="Air Hostess/Flight Attendant">Air Hostess/Flight Attendant</option>
                                            <option value="Pilot/Co-Pilot">Pilot/Co-Pilot</option>
                                            <option value="Other Airline Professional">Other Airline Professional</option>
                                            <option value="Architect">Architect</option>
                                            <option value="Interior Designer">Interior Designer</option>
                                            <option value="Landscape Architect">Landscape Architect</option>
                                            <option value="Animator">Animator</option>
                                            <option value="Commercial Artist">Commercial Artist</option>
                                            <option value="Web/UX Designer">Web/UX Designer</option>
                                            <option value="Artist(Others)">Artist(Others)</option>
                                            <option value="Beautician">Beautician</option>
                                            <option value="Fashion Designer">Fashion Designer</option>
                                            <option value="Hair Stylist">Hair Stylist</option>
                                            <option value="Jewellery Designer">Jewellery Designer</option>
                                            <option value="Designer Others">Designer Others</option>
                                            <option value="Customer Support/BPO/KPO Professional">Customer Support/BPO/KPO Professional</option>
                                            <option value="IAS/IRS/IES/IFS">IAS/IRS/IES/IFS</option>
                                            <option value="Indian Police Service">Indian Police Service</option>
                                            <option value="Law Enforcement Employee(Others)">Law Enforcement Employee(Others)</option>
                                            <option value="Airforce">Airforce</option>
                                            <option value="Army">Army</option>
                                            <option value="Neavy">Neavy</option>
                                            <option value="Defense Services(Others)">Defense Services(Others)</option>
                                            <option value="Lecturer">Lecturer</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Research Assistant">Research Assistant</option>
                                            <option value="Research Scholar">Research Scholar</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Training Professional(Others)">Training Professional(Others)</option>
                                            <option value="Civil Engineer">Civil Engineer</option>
                                            <option value="Electronics/Telecom Engineer">Electronics/Telecom Engineer</option>
                                            <option value="Mechanical/Production Engineer">Mechanical/Production Engineer</option>
                                            <option value="Non IT Engineer(Others)">Non IT Engineer(Others)</option>
                                            <option value="Chef/Sommelier/Food Critic">Chef/Sommelier/Food Critic</option>
                                            <option value="Catering Professional">Catering Professional</option>
                                            <option value="Hotel & Hospitality Professional(Others)">Hotel & Hospitality Professional(Others)</option>
                                            <option value="Software Developer/Programmer">Software Developer/Programmer</option>
                                            <option value="Software Consultan">Software Consultant</option>
                                            <option value="Hardware & Networking Professional">Hardware & Networking Professional</option>
                                            <option value="Software Professional(Others)">Software Professional(Others)</option>
                                            <option value="Lawyer">Lawyer</option>
                                            <option value="Legal Assitant">Legal Assitant</option>
                                            <option value="Legal Professional(Others)">Legal Professional(Others)</option>
                                            <option value="Dentist">Dentist</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Physical Assistant">Physical Assistant</option>
                                            <option value="Physiotherapist/Occupational Therapist">Physiotherapist/Occupational Therapist</option>
                                            <option value="Psychologist">Psychologist</option>
                                            <option value="Surgeon">Surgeon</option>
                                            <option value="Veterinary Doctor">Veterinary Doctor</option>
                                            <option value="Therapist(Others)">Therapist(Others)</option>
                                            <option value="Medical/Healthcare Professional(Others)">Medical/Healthcare Professional(Others)</option>
                                            <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                                            <option value="Mariner">Mariner</option>
                                            <option value="Marketing Professional">Marketing Professional</option>
                                            <option value="Sales Professional">Sales Professional</option>
                                            <option value="Biologist/Botanist">Biologist/Botanist</option>
                                            <option value="Physicist">Physicist</option>
                                            <option value="Science Professional">Science Professional</option>
                                            <option value="CxO/Chairman/Director/President">CxO/Chairman/Director/President</option>
                                            <option value="VP/AVP/GM/DGM">VP/AVP/GM/DGM</option>
                                            <option value="Sr. Manager/Manager">Sr. Manager/Manager</option>
                                            <option value="Consultant/Supervisor/Team Lead">Consultant/Supervisor/Team Leads</option>
                                            <option value="Team Member/Staff">Team Member/Staff</option>
                                            <option value="Agent/Broker/Trader/Contactor">Agent/Broker/Trader/Contactor</option>
                                            <option value="Bussiness Owner/Enterpreneur">Bussiness Owner/Enterpreneur</option>
                                            <option value="Poltician">Poltician</option>
                                            <option value="Social Worker/Volunteer/NGO">Social Worker/Volunteer/NGO</option>
                                            <option value="Sportsman">Sportsman</option>
                                            <option value="Travel & Transport Professional">Travel & Transport Professional</option>
                                            <option value="Writer">Writer</option>
                                            <option value="Student">Student</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Not Working">Not Working</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Annual_Income" id="Annual_Income">
                                            <option disabled="disabled" selected="selected">Annual Income</option>
                                            <option value="Upto INR 1 Lac">Upto INR 1 Lac</option>
                                            <option value="INR 1 Lac to 2 Lac">INR 1 Lac to 2 Lac</option>
                                            <option value="INR 2 Lac to 4 Lac">INR 2 Lac to 4 Lac</option>
                                            <option value="INR 4 Lac to 7 Lac">INR 4 Lac to 7 Lac</option>
                                            <option value="INR 7 Lac to 10 Lac">INR 7 Lac to 10 Lac</option>
                                            <option value="INR 10 Lac to 15 Lac">INR 10 Lac to 15 Lac</option>
                                            <option value="INR 15 Lac to 20 Lac">INR 15 Lac to 20 Lac</option>
                                            <option value="INR 20 Lac to 30 Lac">INR 20 Lac to 30 Lac</option>
                                            <option value="INR 30 Lac to 50 Lac">INR 30 Lac to 50 Lac</option>
                                            <option value="INR 50 Lac to 75 Lac">INR 50 Lac to 75 Lac</option>
                                            <option value="INR 75 Lac to 1 Crore">INR 75 Lac to 1 Crore</option>
                                            <option value="INR 1 Crore & above">INR 1 Crore & above</option>
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
    <script src="<?php echo base_url(),"Matrimonial/";?>js/global.js"></script>
</body>
</html>
