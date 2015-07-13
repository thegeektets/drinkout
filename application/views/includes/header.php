<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
<?php
$this->load->helper('url');


?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>DRINK OUT</title>
	
    <!-- This file is part of a site template for sale at ThemeForest.net.
         See: http://themeforest.net/user/dilipkumar/portfolio
         Copyright 2012 Dilip Kumar -->

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/reset.css")?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/foundation.css")?>" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/josefin.css")?>">         
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/style.css")?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/foundation-icons.css")?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/flexslider.css")?>" />
	
    <!-- FAVICON-->
	<link rel="shortcut icon" href="images/favicon.ico">

	<script type="text/javascript">
    function auth_popup(url, width, height){
	var left = (screen.width/2)-(width/2);
	var top = (screen.height/2)-(height/2);
	window.open (url,"auth","toolbar=no,location=no,directories=no,status=no,scrollbars=no,menubar=0,resizable=1,width="+width+",height="+height+',top='+top+',left='+left);
    }
	</script>

   

</head>
<body>

<!-- Modal Section -Login -->
<div id="loginform" class="reveal-modal">
	<h3>Members Login</h3>
	<p>Noma Sana Community</p>
	<div class="space20"></div>
	<div id='loginmessage'></div>

	<form name="login" id="login" onsubmit="return loginuser">
		<fieldset>
			<label><strong>Username</strong></label>
			<input type="text" name="user" />
			<label><strong>Password</strong></label>
			<input type="password" name="pass" />
			<div class="space10"></div>
			<button class="button success" onclick="return loginuser()" 
			 style="background-color:#18453B;font-family: &apos;Josefin Sans&apos;, sans-serif;">
			 Login</button>
			<div class="space10"></div>
			<p><a href="#">Forgot password?</a> Click here.</p>
				

				<a href="<?php echo base_url('index.php/hauth/login/Facebook') ?>" 
				title="connect with facebook">Connect with facebook</a> or
					
				<a href="<?php echo base_url('index.php/hauth/login/Google') ?>">
				Connect with Google</a>
				
			
</fieldset>
</form>

<a class="close-reveal-modal"><i class="fi-cross"></i>Close</a>
</div>
<!-- Modal Section -Login -->

<!-- Modal Section -Register -->
<div id="signupform" class="reveal-modal">
	<h3>Sign up</h3>
	<p>Noma Sana Community</p>
	<div class="space20"></div>
	<div id='signupmessage'></div>

	<form role='form' name="signup" id="signup" onsubmit="return signupuser()">
				<fieldset>
			<label><strong>Username</strong></label>
			<input type="text"  name="username" />
			<label><strong>Password</strong></label>
			<input type="password"  name="password" />
			<label><strong>Email</strong></label>
			<input type="email"  name="email" />
			
			<div class="space10"></div>
			<p>Check our <a href="#">terms and conditions</a> before sign up. If you familiar with our terms, go ahead click register me button.</p>
			<div class="space10"></div>
			
			<button onclick="return signupuser()" class="button success" style="background-color:#18453B;font-family: &apos;Josefin Sans&apos;, sans-serif;" href="#">
			Register me</button>
		</fieldset>
	</form>

<a class="close-reveal-modal"><i class="fi-cross"></i>Close</a>
</div>
<!-- Modal Section -Register -->

<!-- Header Section -->
<div id="header">
	<div class="header-wrap row">
		<div class="large-12 columns">
			<div class="logo">
				<h1><a href="<?php echo base_url(); ?>"> DRINK OUT </a></h1>
			</div>

			<?php 
			 if($this->session->userdata('logged_in') == "TRUE") {
			 	?>

			<div class="logout"><a href="<?php echo base_url('index.php/users/logout') ?>"><i class="fi-torsos-all"></i> Logout</a></div>
	
			<div class="dashboard"><a href="<?php echo base_url('index.php/users/dashboard') ?>"><i class="fi-torsos-all"></i> Dashboard : <?php echo $this->session->userdata('username')?></a></div>
			
			 	<?php 
			 }
			 else{

			 	?>
   	
			<div class="login"><a href="#" data-reveal-id="loginform"><i class="fi-torsos-all"></i> Login</a></div>
			<div class="register"><a href="#" data-reveal-id="signupform"><i class="fi-torsos-all"></i> Sign Up</a></div>
			<?php }?>

		
		</div>
	</div>
</div>
<!-- Header Section -->