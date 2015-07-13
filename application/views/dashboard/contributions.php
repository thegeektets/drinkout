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
                                <h3><a href='<?php echo base_url();?>' style="color:#fff">NOMA SANA</a></h3>

                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li >
                                    <a  class="tooltip-tip" href="<?php echo base_url('index.php/users/dashboard'); ?>" title="Dashboard">
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
           ?>
        </div>
    </div>
</div>
               
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Contributions
                    </li>
                   
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->
                <div class="row" style="margin-top:-20px">
                        <div id="message"></div>
                   
                       <div style="height:100%">
                           <?php for ($i=0; $i < count($queries) ; $i++) { 
                         ?>
                            <h4 value="<?php echo $queries[$i]['word'];?>" id="word"><?php echo $queries[$i]['word'];?></h4>
                            <p value="<?php echo $queries[$i]['definition'];?>" id="definition"> <?php echo $queries[$i]['definition'];?> </p>
                             <?php 
                                     if($this->session->userdata('status') == 1){
                            ?>
                            <span style="float:right">
                                 <button class="btn " onclick="approve('<?php echo $queries[$i]['_id']['$oid']; ?>')" style="background:#18453B; font-family: 'Josefin Sans' sans-serif ;"> Add to dictionary</button>
                                 <button class="btn " onclick="decline('<?php echo $queries[$i]['_id']['$oid']; ?>')" style="background:#e30613; font-family: 'Josefin Sans', sans-serif ; "> Decline</button>
                             </span>

                        <hr/>
                       <?php } } ?>

                    </div>


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
