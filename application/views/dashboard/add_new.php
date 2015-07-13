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
                    <li> Add New Spot
                    </li>
                   
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->
                <div class="row" style="margin-top:-20px">
                   
                                 <div class="row">
                            
                                    <div class="large-9 columns">
                                    <div id="addmessage"></div>
                                        <form data-abide id="new-spot" name="new-spot" onsubmit="return add_new();" enctype ='multipart/form-data'>
                                            <div class="name-field">
                                                <label>Club Name <small>required</small>
                                                    <input type="text" required pattern="[a-zA-Z]+" name="spot" id="spot">
                                                </label>
                                                <small class="error"> A name is required and must be a string.</small>
                                            </div>
                                            
                                            <div class="name-field">
                                                <label>Club Image <small>required</small>
                                                    <input type="file" required name="image" id="image">
                                                </label>
                                                <small class="error"> An image is required and must be a string.</small>
                                            </div>
                                            
                                            <div class="location-field">
                                                <label>Location <small>required</small>
                                                    <input type="text" required pattern="[a-zA-Z]+" name="location" id="location">
                                                </label>
                                                <small class="error"> A location is required and must be a string.</small>
                                            </div>
                                            
                                            <div class="price-field">
                                                <label>Price Range per Drink <small>required</small>
                                                    <input type="text" required  name="price" id="price">
                                                </label>
                                                <small class="error"> A range is required and must be a string.</small>
                                            </div>

                                           <div class="music-field">
                                                <label>Music     <small>required</small>
                                                      <input id="livebands" type="checkbox"><label for="livebands">Live Bands</label>
                                                      <input id="djmusic" type="checkbox"><label for="djmusic">Good Dj Music</label>
                                                      <input id="ambientmusic" type="checkbox"><label for="ambientmusic">Ambient Music</label>

                                                </label>
                                                <small class="error"> A Word is required and must be a string.</small>
                                            </div>



                                            <div class="7-field">
                                                <label>Description <small>required</small>
                                                    <textarea type="text" required name="description" id="description">
                                                    </textarea>
                                                </label>
                                                <small class="error">An definition is required.</small>
                                            </div>
                                           
                                            <button style="background:#18453B"  type="submit" class="tiny">Submit</button>
                                        </form>




                                    </div>
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
