<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
    <link rel="shortcut icon" href="{{ asset('BahanStudy')}}/images/ico/favicon.ico">
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
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							@if($users == null)
								
								<li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
								@elseif($users != null)
								<li><a href="/confirm"><i class="fa fa-shopping-cart"></i> Confirm</a></li>
								<li><a href="/logout"><i class="fa fa-lock"></i> Logout</a></li>
        
         @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
												<!-- <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li><a href="contact-us.html">Contact</a></li>
								<li><a href="/confirm">Confirm</a></li>
							</ul>
						</div> -->

					</div>
					<div class="col-sm-3">
					<div class="search_box pull-right">
							<form class="form" method="get" action="{{ route('searchcart') }}">
							<input type="search" name="search" placeholder="Search"/>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Product Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $carts)
						<tr>
							<td class="cart_product">
								<img width="200" height="200" src="/file_data/{{$carts->picture}}" alt="">
							</td>
							<td class="cart_description">
								<h4>{{$carts->product_name}}</h4>
							</td>
							<td class="cart_price">
								<h4>Rp {{$carts->price}}</h4>
							</td>
							<td class="cart_quantity">
								<h4>{{$carts->total}}</h4>
						</td>
							<td class="cart_total">
								<h4 style="color:#fe980f;">Rp {{$carts->price * $carts->total}}</h4>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<div style= "float:right;padding: 5px 0px">
			{{ $cart->links() }}
			</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>{{$fix_total}}</span></li>
						</ul>
						<a class="btn btn-default check_out" style="margin:0px 40px" href="/checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	

	<footer id="footer"><!--Footer-->
	
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="{{ asset('BahanStudy')}}/js/jquery.js"></script>
	<script src="{{ asset('BahanStudy')}}/js/bootstrap.min.js"></script>
	<script src="{{ asset('BahanStudy')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('BahanStudy')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('BahanStudy')}}/js/main.js"></script>
</body>
</html>