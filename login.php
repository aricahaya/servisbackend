<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>SERVISINI.com</title>
		
		<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
		
		<!--  jquery core -->
		<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

		<!-- Custom jquery scripts -->
		<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

		<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
		
		<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function(){
		$(document).pngFix( );
		});
		</script>
		
	</head>

	<body id="login-bg"> 
	 
		<!-- Start: login-holder -->
		<div id="login-holder">

			<!-- start logo -->
			<div id="logo-login">
				<a href="index.html"><img src="" width="156" height="40" alt="" /></a>
			</div>
			<!-- end logo -->
			
			<div class="clear"></div>
			
			<!--  start loginbox ................................................................................. -->
			<div id="loginbox">
			
			<!--  start login-inner -->
			<div id="login-inner">
			
			<?php		
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo '<h3>Username dan Password belum diisi!</h3>';
					} else if ($_GET['error'] == 2) {
						echo '<h3>Username belum diisi!</h3>';
					} else if ($_GET['error'] == 3) {
						echo '<h3>Password belum diisi!</h3>';
					} else if ($_GET['error'] == 4) {
						echo '<h3>Username dan Password tidak terdaftar!</h3>';
					}
				}
			?>
			
			<form action="actionlogin.php" method="POST">
				<table border="0" cellpadding="0" cellspacing="0">
				
					<tr>
						<th>Username</th>
						<td><input type="text"  class="login-inp" name="Username" /></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" class="login-inp" name="Password" /></td>
					</tr>
					<!--
					<tr>
						<th></th>
						<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
					</tr>
					-->
					<tr>
						<th></th>
						<td><input type="Submit" value='Login' /></td>
					</tr>
					
				</table>
			</form>
			
			</div>
			
			<!--  end login-inner -->
			<div class="clear"></div>
			<a href="" class="forgot-pwd">Forgot Password?</a>
		 </div>
		 <!--  end loginbox -->
		 
			<!--  start forgotbox ................................................................................... -->
			<div id="forgotbox">
				
				<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
				<!--  start forgot-inner -->
				
				<div id="forgot-inner">
					<table border="0" cellpadding="0" cellspacing="0">
					
					<tr>
						<th>Email address:</th>
						<td><input type="text" value="" class="login-inp" /></td>
					</tr>
					
					<tr>
						<th> </th>
						<td><input type="button" class="submit-login"  /></td>
					</tr>
					
					</table>
				</div>
				<!--  end forgot-inner -->
				<div class="clear"></div>
				<a href="" class="back-login">Back to login</a>
			</div>
			<!--  end forgotbox -->

		</div>
		<!-- End: login-holder -->
	</body>
</html>
