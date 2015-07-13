

<body>

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                                  <h3><a href='<?php echo base_url();?>' style="color:#fff">DRINK OUT</a></h3>


                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li class="active">
                                    <a id="menu-select" class="tooltip-tip" href="<?php echo base_url('index.php/users/dashboard'); ?>" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Dashboard</span>

                                    </a>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#">
                                        <i class=" icon-window"></i>
                                        <span>NIGHTLIFE</span>

                                    </a>
                                    <ul>
      <?php 
                                     if($this->session->userdata('status') == 1){

                                        ?>
                                        <li>
                                            <a href="<?php echo base_url('index.php/spots/add_new'); ?>">ADD SPOT</a>
                                        </li>

                                        <?php } ?>
                                        <li>
                                             <a href="<?php echo base_url('index.php/spots/list'); ?>">CLUBS AND SPOTS</a>
                              
                                        </li>
                                        <li>
                                                <a href="<?php echo base_url('index.php/spots/events'); ?>">EVENTS</a>
                             
                                        </li>  
                                     
                        
                                    </ul>
                                </li>

                              

                              
                             
                            </ul>
                        </div>
                                        
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
     <div id="header">
            <div class="header-wrap row">
                <div class="large-12 columns">
               
               <section class="top-bar-section ">
                           
                       
           

                            <ul class="right" style="margin-top:10px;list-style:none;line-height: 38px;">
                                <li class="bg-green has-dropdown" style="background:#18453B;color:#fff">
                                    <a class="bg-green" href="#"><i class="fi-torsos-all"></i> <span style="font-family:'Josefin Sans', sans-serif;
 ">Hi, <?php echo $this->session->userdata('username')?> </span>
                                    </a>

                                    <ul style="background:#18453B;color:#fff" class=" dropdown dropdown-nest profile-dropdown">

                                        <li  style="background:#18453B;color:#fff">
                                            <i class="icon-user"></i>
                                            <a  class="bg-green" href="#">
                                                <h4>Profile<span class="text-aqua fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                       
                                        <li style="background:#18453B;color:#fff">
                                            <i class="icon-upload"></i>
                                           <a class="bg-green" href="<?php echo base_url('index.php/users/logout') ?>">
                                                <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>

                                     
                                    </ul>
                                </li>
                               
                            </ul>
                        </section>


            <?php 
             if($this->session->userdata('logged_in') == "TRUE") {
                ?>

           
            <div class="dashboard" ><a  style="padding: 14px 20px;" href="<?php echo base_url('index.php/users/dashboard') ?>"><i class="fi-torsos-all"></i> Dashboard </a></div>
            
                <?php 
             }
             else{

                ?>
                <?php }?>

        </div>
    </div>
</div>
               
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Dashboard
                    </li>
                   
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->
                <div class="row">
                              <div class="large-12 columns">

                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-graph-pie"></i>
                                    <span>SUMMARY</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                                <div style="margin:0" class="row">
                   

                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h4 class="text-left"><span class="counter-up"> <?php echo date("d"); ?></span>/<span class="counter-up"><?php echo date("m"); ?></span>/<span class="counter-up"><?php echo date("Y"); ?></span></h4>
                                            <p class="text-left">Today</p>
                                        </div>

                                    </div>


                                </div>

                                <div style="margin:0" class="row summary-border-top">
                                    <div class="large-6 columns">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up"><?php echo $words;?></span><small></small></h2>
                                            <p>Sheng Words</p>
                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up"><?php echo $contributions;?></span><small></small></h2>
                                            <p>Member Contributions</p>
                                        </div>
                                    </div>
                                </div>

                        

                                <div style="margin:0" class="row summary-border-bottom">
                                    <div class="large-12 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black "><span class="counter-up"><?php echo $users;?></span><small>   </small></h2>
                                            <p>Members</p>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- /.box-body -->
                    </div>


                    <!-- /.box -->
                </div>
                <!-- End of Widget  -->



                <footer>
                    <div id="footer">Copyright &copy; 2015 <a href="<?php echo base_url(); ?>">NOMA SANA</a></div>

                </footer>
            </div>

            <!-- End of Container Begin -->








          
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



</body>

</html>
