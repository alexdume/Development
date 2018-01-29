<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="top-bar" class="container">
			<div class="row">
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="{{ url('/login') }}">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-two"><!-- header -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="{{ url('/login') }}"><img src="{{ asset('img/logo.png') }}" alt="no logo"></a></h1>
				</div>	
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="products"><!-- content -->
			content
		</div>
		<div class="footer"><!-- footer -->
			footer
		</div>
    </body>
</html>
