<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="Administry - Admin Template" />
<meta name="keywords" content="Admin,Template" />
<!-- We need to emulate IE7 only when we are to use excanvas -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<![endif]-->
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
<!-- jQuery graph plugins -->
<!--[if IE]><script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>/flot/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/flot/jquery.flot.min.js"></script>
<!-- Admin template javascript load -->
<script type="text/javascript" SRC="<?php echo ADMIN_JS_URL; ?>/administry.js"></script>
</head>
<body>
	<!-- Header -->
	<header id="top">
		<div class="wrapper">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="<?php echo ADMIN_IMG_URL; ?>/logo.png" alt="Administry" /><!--<span>Administry</span> demo--></div>
			<!-- Top navigation -->
			<div id="topnav">
				<a href="#"><img class="avatar" SRC="<?php echo ADMIN_IMG_URL; ?>/user_32.png" alt="" /></a>
				Logged in as <b>Admin</b>
				<span>|</span> <a href="#">Settings</a>
				<span>|</span> <a href="#">Logout</a><br />
				<small>You have <a href="#" class="high"><b>1</b> new message!</a></small>
			</div>
			<!-- End of Top navigation -->
			<!-- Main navigation -->
			<nav id="menu">
				<ul class="sf-menu">
					<li class="current"><a HREF="dashboard.html">Dashboard</a></li>
					<li>
						<a HREF="styles.html">Styles</a>
						<ul>
							<li>
								<a HREF="styles.html">Basic Styles</a>
							</li>
							<li>
								<a href="#">Sample Pages...</a>
								<ul>
									<li><a HREF="samples-files.html">Files</a></li>
									<li><a HREF="samples-products.html">Products</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a HREF="tables.html">Tables</a></li>
					<li><a HREF="forms.html">Forms</a></li>	
					<li><a HREF="graphs.html">Graphs</a></li>	
				</ul>
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			<aside><b>English</b> &middot; <a href="#">Spanish</a> &middot; <a href="#">German</a></aside>
			<!-- End of Aside links -->
		</div>
	</header>
	<!-- End of Header -->


    <?php echo $content; ?>
   
   
	<!-- Page footer -->
	<footer id="bottom">
		<div class="wrapper">
			<nav>
				<a href="#">Dashboard</a> &middot;
				<a href="#">Content</a> &middot;
				<a href="#">Reports</a> &middot;
				<a href="#">Users</a> &middot;
				<a href="#">Media</a> &middot;
				<a href="#">Events</a> &middot;
				<a href="#">Newsletter</a> &middot;
				<a href="#">Settings</a>
			</nav>
			<p>Copyright &copy; 2010 <b><a HREF="http://www.865171.cn" title="www.865171.cn">www.865171.cn</a></b> | Icons by <a HREF="http://www.865171.cn">865171.cn</a></p>
		</div>
	</footer>
	<!-- End of Page footer -->
	
	<!-- Animated footer -->
	<footer id="animated">
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Content</a></li>
			<li><a href="#">Reports</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Media</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Newsletter</a></li>
			<li><a href="#">Settings</a></li>
		</ul>
	</footer>
	<!-- End of Animated footer -->
	
	<!-- Scroll to top link -->
	<a href="#" id="totop">^ scroll to top</a>

</body>
</html>