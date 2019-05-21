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
    <link href="<?php echo base_url(),"Matrimonial/";?>css/Registration-Page-5.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Lifestyle Information</h2>
                    <form method="POST" id="page5" name="page5" action="<?php echo site_url('Page_5_controller/lifestyle_info');?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="age_from" id="age_from">
                                            <option disabled="disabled" selected="selected">Age From</option>
                                            <option value="18" label="18">18</option>
                                                    <option value="19" label="19">19</option>
                                                    <option value="20" label="20">20</option>
                                                    <option value="21" label="21">21</option>
                                                    <option value="22" label="22">22</option>
                                                    <option value="23" label="23">23</option>
                                                    <option value="24" label="24">24</option>
                                                    <option value="25" label="25">25</option>
                                                    <option value="26" label="26">26</option>
                                                    <option value="27" label="27">27</option>
                                                    <option value="28" label="28">28</option>
                                                    <option value="29" label="29">29</option>
                                                    <option value="30" label="30">30</option>
                                                    <option value="31" label="31">31</option>
                                                    <option value="32" label="32">32</option>
                                                    <option value="33" label="33">33</option>
                                                    <option value="34" label="34">34</option>
                                                    <option value="35" label="35">35</option>
                                                    <option value="36" label="36">36</option>
                                                    <option value="37" label="37">37</option>
                                                    <option value="38" label="38">38</option>
                                                    <option value="39" label="39">39</option>
                                                    <option value="40" label="40">40</option>
                                                    <option value="41" label="41">41</option>
                                                    <option value="42" label="42">42</option>
                                                    <option value="43" label="43">43</option>
                                                    <option value="44" label="44">44</option>
                                                    <option value="45" label="45">45</option>
                                                    <option value="46" label="46">46</option>
                                                    <option value="47" label="47">47</option>
                                                    <option value="48" label="48">48</option>
                                                    <option value="49" label="49">49</option>
                                                    <option value="50" label="50">50</option>
                                                    <option value="51" label="51">51</option>
                                                    <option value="52" label="52">52</option>
                                                    <option value="53" label="53">53</option>
                                                    <option value="54" label="54">54</option>
                                                    <option value="55" label="55">55</option>
                                                    <option value="56" label="56">56</option>
                                                    <option value="57" label="57">57</option>
                                                    <option value="58" label="58">58</option>
                                                    <option value="59" label="59">59</option>
                                                    <option value="60" label="60">60</option>
                                                    <option value="61" label="61">61</option>
                                                    <option value="62" label="62">62</option>
                                                    <option value="63" label="63">63</option>
                                                    <option value="64" label="64">64</option>
                                                    <option value="65" label="65">65</option>
                                                    <option value="66" label="66">66</option>
                                                    <option value="67" label="67">67</option>
                                                    <option value="68" label="68">68</option>
                                                    <option value="69" label="69">69</option>
                                                    <option value="70" label="70">70</option>
                                                    <option value="71" label="71">71</option>           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="age_to" id="age_to">
                                            <option disabled="disabled" selected="selected">Age To</option>
                                                    <option value="18" label="18">18</option>
                                                    <option value="19" label="19">19</option>
                                                    <option value="20" label="20">20</option>
                                                    <option value="21" label="21">21</option>
                                                    <option value="22" label="22">22</option>
                                                    <option value="23" label="23">23</option>
                                                    <option value="24" label="24">24</option>
                                                    <option value="25" label="25">25</option>
                                                    <option value="26" label="26">26</option>
                                                    <option value="27" label="27">27</option>
                                                    <option value="28" label="28">28</option>
                                                    <option value="29" label="29">29</option>
                                                    <option value="30" label="30">30</option>
                                                    <option value="31" label="31">31</option>
                                                    <option value="32" label="32">32</option>
                                                    <option value="33" label="33">33</option>
                                                    <option value="34" label="34">34</option>
                                                    <option value="35" label="35">35</option>
                                                    <option value="36" label="36">36</option>
                                                    <option value="37" label="37">37</option>
                                                    <option value="38" label="38">38</option>
                                                    <option value="39" label="39">39</option>
                                                    <option value="40" label="40">40</option>
                                                    <option value="41" label="41">41</option>
                                                    <option value="42" label="42">42</option>
                                                    <option value="43" label="43">43</option>
                                                    <option value="44" label="44">44</option>
                                                    <option value="45" label="45">45</option>
                                                    <option value="46" label="46">46</option>
                                                    <option value="47" label="47">47</option>
                                                    <option value="48" label="48">48</option>
                                                    <option value="49" label="49">49</option>
                                                    <option value="50" label="50">50</option>
                                                    <option value="51" label="51">51</option>
                                                    <option value="52" label="52">52</option>
                                                    <option value="53" label="53">53</option>
                                                    <option value="54" label="54">54</option>
                                                    <option value="55" label="55">55</option>
                                                    <option value="56" label="56">56</option>
                                                    <option value="57" label="57">57</option>
                                                    <option value="58" label="58">58</option>
                                                    <option value="59" label="59">59</option>
                                                    <option value="60" label="60">60</option>
                                                    <option value="61" label="61">61</option>
                                                    <option value="62" label="62">62</option>
                                                    <option value="63" label="63">63</option>
                                                    <option value="64" label="64">64</option>
                                                    <option value="65" label="65">65</option>
                                                    <option value="66" label="66">66</option>
                                                    <option value="67" label="67">67</option>
                                                    <option value="68" label="68">68</option>
                                                    <option value="69" label="69">69</option>
                                                    <option value="70" label="70">70</option>
                                                    <option value="71" label="71">71</option>
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
                                        <select name="Height_From" id="Height_From">
                                            <option disabled="disabled" selected="selected">Height From</option>
                                            <option value="4' 5'' - 134cm" label="4' 5'' - 134cm">4' 5'' - 134cm</option>
                                            <option value="4' 6'' - 137cm" label="4' 6'' - 137cm">4' 6'' - 137cm</option>
                                            <option value="4' 7'' - 139cm" label="4' 7'' - 139cm">4' 7'' - 139cm</option>
                                            <option value="4' 8'' - 142cm" label="4' 8'' - 142cm">4' 8'' - 142cm</option>
                                            <option value="4' 9'' - 144cm" label="4' 9'' - 144cm">4' 9'' - 144cm</option>
                                            <option value="4' 10'' - 147cm" label="4' 10'' - 147cm">4' 10'' - 147cm</option>
                                            <option value="4' 11'' - 149cm" label="4' 11'' - 149cm">4' 11'' - 149cm</option>
                                            <option value="5' - 152cm" label="5' - 152cm">5' - 152cm</option>
                                            <option value="5' 1'' - 154cm" label="5' 1'' - 154cm">5' 1'' - 154cm</option>
                                            <option value="5' 2'' - 157cm" label="5' 2'' - 157cm">5' 2'' - 157cm</option>
                                            <option value="5' 3'' - 160cm" label="5' 3'' - 160cm">5' 3'' - 160cm</option>
                                            <option value="5' 4'' - 162cm" label="5' 4'' - 162cm">5' 4'' - 162cm</option>
                                            <option value="5' 5'' - 165cm" label="5' 5'' - 165cm">5' 5'' - 165cm</option>
                                            <option value="5' 6'' - 167cm" label="5' 6'' - 167cm">5' 6'' - 167cm</option>
                                            <option value="5' 7'' - 170cm" label="5' 7'' - 170cm">5' 7'' - 170cm</option>
                                            <option value="5' 8'' - 172cm" label="5' 8'' - 172cm">5' 8'' - 172cm</option>
                                            <option value="5' 9'' - 175cm" label="5' 9'' - 175cm">5' 9'' - 175cm</option>
                                            <option value="5' 10'' - 177cm" label="5' 10'' - 177cm">5' 10'' - 177cm</option>
                                            <option value="5' 11'' - 180cm" label="5' 11'' - 180cm">5' 11'' - 180cm</option>
                                            <option value="6' - 182cm" label="6' - 182cm">6' - 182cm</option>
                                            <option value="6' 1'' - 185cm" label="6' 1'' - 185cm">6' 1'' - 185cm</option>
                                            <option value="6' 2'' - 187cm" label="6' 2'' - 187cm">6' 2'' - 187cm</option>
                                            <option value="6' 3'' - 190cm" label="6' 3'' - 190cm">6' 3'' - 190cm</option>
                                            <option value="6' 4'' - 193cm" label="6' 4'' - 193cm">6' 4'' - 193cm</option>
                                            <option value="6' 5'' - 195cm" label="6' 5'' - 195cm">6' 5'' - 195cm</option>
                                            <option value="6' 6'' - 198cm" label="6' 6'' - 198cm">6' 6'' - 198cm</option>
                                            <option value="6' 7'' - 200cm" label="6' 7'' - 200cm">6' 7'' - 200cm</option>
                                            <option value="6' 8'' - 203cm" label="6' 8'' - 203cm">6' 8'' - 203cm</option>
                                            <option value="6' 9'' - 205cm" label="6' 9'' - 205cm">6' 9'' - 205cm</option>
                                            <option value="6' 10'' - 208cm" label="6' 10'' - 208cm">6' 10'' - 208cm</option>
                                            <option value="6' 11'' - 210cm" label="6' 11'' - 210cm">6' 11'' - 210cm</option>
                                            <option value="7' - 213cm" label="7' - 213cm">7' - 213cm</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Height_To" id="Height_To">
                                            <option disabled="disabled" selected="selected">Height To</option>
                                            <option value="4' 5'' - 134cm" label="4' 5'' - 134cm">4' 5'' - 134cm</option>
                                            <option value="4' 6'' - 137cm" label="4' 6'' - 137cm">4' 6'' - 137cm</option>
                                            <option value="4' 7'' - 139cm" label="4' 7'' - 139cm">4' 7'' - 139cm</option>
                                            <option value="4' 8'' - 142cm" label="4' 8'' - 142cm">4' 8'' - 142cm</option>
                                            <option value="4' 9'' - 144cm" label="4' 9'' - 144cm">4' 9'' - 144cm</option>
                                            <option value="4' 10'' - 147cm" label="4' 10'' - 147cm">4' 10'' - 147cm</option>
                                            <option value="4' 11'' - 149cm" label="4' 11'' - 149cm">4' 11'' - 149cm</option>
                                            <option value="5' - 152cm" label="5' - 152cm">5' - 152cm</option>
                                            <option value="5' 1'' - 154cm" label="5' 1'' - 154cm">5' 1'' - 154cm</option>
                                            <option value="5' 2'' - 157cm" label="5' 2'' - 157cm">5' 2'' - 157cm</option>
                                            <option value="5' 3'' - 160cm" label="5' 3'' - 160cm">5' 3'' - 160cm</option>
                                            <option value="5' 4'' - 162cm" label="5' 4'' - 162cm">5' 4'' - 162cm</option>
                                            <option value="5' 5'' - 165cm" label="5' 5'' - 165cm">5' 5'' - 165cm</option>
                                            <option value="5' 6'' - 167cm" label="5' 6'' - 167cm">5' 6'' - 167cm</option>
                                            <option value="5' 7'' - 170cm" label="5' 7'' - 170cm">5' 7'' - 170cm</option>
                                            <option value="5' 8'' - 172c" label="5' 8'' - 172cm">5' 8'' - 172cm</option>
                                            <option value="5' 9'' - 175cm" label="5' 9'' - 175cm">5' 9'' - 175cm</option>
                                            <option value="5' 10'' - 177cm" label="5' 10'' - 177cm">5' 10'' - 177cm</option>
                                            <option value="5' 11'' - 180cm" label="5' 11'' - 180cm">5' 11'' - 180cm</option>
                                            <option value="6' - 182cm" label="6' - 182cm">6' - 182cm</option>
                                            <option value="6' 1'' - 185cm" label="6' 1'' - 185cm">6' 1'' - 185cm</option>
                                            <option value="6' 2'' - 187cm" label="6' 2'' - 187cm">6' 2'' - 187cm</option>
                                            <option value="6' 3'' - 190cm" label="6' 3'' - 190cm">6' 3'' - 190cm</option>
                                            <option value="6' 4'' - 193cm" label="6' 4'' - 193cm">6' 4'' - 193cm</option>
                                            <option value="6' 5'' - 195cm" label="6' 5'' - 195cm">6' 5'' - 195cm</option>
                                            <option value="6' 6'' - 198cm" label="6' 6'' - 198cm">6' 6'' - 198cm</option>
                                            <option value="6' 7'' - 200cm" label="6' 7'' - 200cm">6' 7'' - 200cm</option>
                                            <option value="6' 8'' - 203cm" label="6' 8'' - 203cm">6' 8'' - 203cm</option>
                                            <option value="6' 9'' - 205cm" label="6' 9'' - 205cm">6' 9'' - 205cm</option>
                                            <option value="6' 10'' - 208cm" label="6' 10'' - 208cm">6' 10'' - 208cm</option>
                                            <option value="6' 11'' - 210cm" label="6' 11'' - 210cm">6' 11'' - 210cm</option>
                                            <option value="7' - 213cm" label="7' - 213cm">7' - 213cm</option>
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
                                        <select name="Body_Type" id="Body_Type">
                                            <option disabled="disabled" selected="selected">Body Type</option>
                                            <option value="Slim">Slim</option>
                                            <option value="Athletic">Athletic</option>
                                            <option value="Average">Average</option>
                                            <option value="Heavy">Heavy</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="skin_zone" id="skin_zone">
                                            <option disabled="disabled" selected="selected">Skin Jone</option>
                                            <option value="Very Fair">Very Fair</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Tan">Tan</option>
                                            <option value="Dark">Dark</option>
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
                                        <select name="smoke" id="smoke">
                                            <option disabled="disabled" selected="selected">Smoke</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Regular</option>
                                            <option>Ocassionaly</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Drink" id="Drink">
                                            <option disabled="disabled" selected="selected">Drink</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Regular</option>
                                            <option>Ocassionaly</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Diet" id="Diet">
                                    <option disabled="disabled" selected="selected">Diet</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Non-Vegetarian">Non-Vegetarian</option>
                                    <option value="Ocassionally Non-Vegetarian">Ocassionally Non-Vegetarian</option>
                                    <option value="Eggetarian">Eggetarian</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Vegan">Vegan</option>
                                </select>
                                <div class="select-dropdown"></div>
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
