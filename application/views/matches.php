<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Matches</h4>
                                <table class="table">
                                  <?php foreach ($match as $item) 
                                  { 
                                    ?>
                                      <tr>
                                        <td><div class="row">
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

                        <h4><b><?php echo $item->First_Name?></b> <b><?php echo $item->Last_Name?></b></h4><br>

                        <h5>DOB : <?php echo $item->Birthdate?><br>

                            Currently working : <?php echo $item->Currently_Working_With ?><br>

                            Email : <?php echo $item->Email?>
                        </h5>
                </div>

                        <a href="<?php echo site_url('View_profile_controller/index/'.$item->Username);?>">
                            <button type="submit" class="btn btn-info btn-fill pull-right">View Profile</button>
                        </a>
                                            
                                        </td>
                                        </div>
                                      </tr> 
                                    <?php  
                                  } 
                                    ?>
                                </table>
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
