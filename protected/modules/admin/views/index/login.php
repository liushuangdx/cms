<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="Administry - Admin Template" />
<meta name="keywords" content="Admin,Template" />
<!-- Favicons --> 
<link rel="shortcut icon" type="image/png" HREF="<?php echo ADMIN_IMG_URL; ?>/favicons/favicon.png"/>
<link rel="icon" type="image/png" HREF="<?php echo ADMIN_IMG_URL; ?>/favicons/favicon.png"/>
<link rel="apple-touch-icon" HREF="<?php echo ADMIN_IMG_URL; ?>/favicons/apple.png" />
<!-- Main Stylesheet --> 
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>/style.css" type="text/css" />
<!-- Your Custom Stylesheet --> 
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>/custom.css" type="text/css" />
<!--swfobject - needed only if you require <video> tag support for older browsers -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/swfobject.js"></script>
<!-- jQuery with plugins -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery-1.4.2.min.js"></script>
<!-- Could be loaded remotely from Google CDN : <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.ui.core.min.js"></script>
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.ui.widget.min.js"></script>
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.ui.tabs.min.js"></script>
<!-- jQuery tooltips -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.tipTip.min.js"></script>
<!-- Superfish navigation -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.superfish.min.js"></script>
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.supersubs.min.js"></script>
<!-- jQuery form validation -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.validate_pack.js"></script>
<!-- jQuery popup box -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/jquery.nyroModal.pack.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	// validate signup form on keyup and submit
	var validator = $("#loginform").validate({
		rules: {
			username: "required",
			password: "required"
		},
		messages: {
			username: "Enter your username",
			password: "Provide your password"
		},
		// the errorPlacement has to take the layout into account
		errorPlacement: function(error, element) {
			error.insertAfter(element.parent().find('label:first'));
		},
		// set new class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("ok");
		}
	});

});
</script>
</head>
<body>
	<!-- Header -->
	<header id="top">
		<div class="wrapper-login">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="<?php echo ADMIN_IMG_URL; ?>/logo.png" alt="Administry" /><!--<span>Administry</span> demo--></div>
			<!-- Main navigation -->
			<nav id="menu">
				<ul class="sf-menu">
					<li class="current"><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			<aside><b>English</b> &middot; <a href="#">Spanish</a> &middot; <a href="#">German</a></aside>
			<!-- End of Aside links -->
		</div>
	</header>
	<!-- End of Header -->
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper-login"></div>
	</div>
	<!-- End of Page title -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper-login">
				<!-- Login form -->
				<section class="full">					
					
					<h3>Login www.865171.cn</h3>
					
					<div class="box box-info">Type anything to log in</div>

					<form id="loginform" method="post" action="dashboard.html">

						<p>
							<label class="required" for="username">Username:</label><br/>
							<input type="text" id="username" class="full" value="" name="username"/>
						</p>
						
						<p>
							<label class="required" for="password">Password:</label><br/>
							<input type="password" id="password" class="full" value="" name="password"/>
						</p>
						
						<p>
							<input type="checkbox" id="remember" class="" value="1" name="remember"/>
							<label class="choice" for="remember">Remember me?</label>
						</p>
						
						<p>
							<input type="submit" class="btn btn-green big" value="Login"/> &nbsp; <a href="javascript: //;" onClick="$('#emailform').slideDown(); return false;">Forgot password?</a> or <a href="#">Need help?</a>
						</p>
						<div class="clear">&nbsp;</div>

					</form>
					
					<form id="emailform" style="display:none" method="post" action="#">
						<div class="box">
							<p id="emailinput">
								<label for="email">Email:</label><br/>
								<input type="text" id="email" class="full" value="" name="email"/>
							</p>
							<p>
								<input type="submit" class="btn" value="Send"/>
							</p>
						</div>
					</form>
					
				</section>
				<!-- End of login form -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	
	<!-- Page footer -->
	<footer id="bottom">
		<div class="wrapper-login">
			<p>Copyright &copy; 2010 <b><a HREF="http://www.865171.cn" title="www.865171.cn">www.865171.cn</a></b> | Icons by <a HREF="http://www.865171.cn">865171.cn</a></p>
		</div>
	</footer>
	<!-- End of Page footer -->

<!-- User interface javascript load -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/administry.js"></script>
</body>
</html>