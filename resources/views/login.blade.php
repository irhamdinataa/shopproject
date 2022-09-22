<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="{{ asset('BahanStudy')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('BahanStudy')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('BahanStudy')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('BahanStudy')}}/css/price-range.css" rel="stylesheet">
    <link href="{{ asset('BahanStudy')}}/css/animate.css" rel="stylesheet">
	<link href="{{ asset('BahanStudy')}}/css/main.css" rel="stylesheet">
	<link href="{{ asset('BahanStudy')}}/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('BahanStudy')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('BahanStudy')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('BahanStudy')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('BahanStudy')}}/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="/"><img src="{{ asset('BahanStudy')}}/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="/signin" method="post">
                            <input type="email" placeholder="Email Address" name="email" />
							<input type="password" placeholder="Password" name="password" />
							<!-- <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span> -->
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="/daftar" method="post">
							<input type="text" placeholder="Name" name="name"/>
							<input type="email" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
  
    <script src="{{ asset('BahanStudy')}}/js/jquery.js"></script>
	<script src="{{ asset('BahanStudy')}}/js/price-range.js"></script>
    <script src="{{ asset('BahanStudy')}}/js/jquery.scrollUp.min.js"></script>
	<script src="{{ asset('BahanStudy')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('BahanStudy')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('BahanStudy')}}/js/main.js"></script>
</body>
</html>