<link href="{{ URL::asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('front/css/style.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('front/css/memenu.css') }}" rel="stylesheet" type="text/css" >

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<script type="text/javascript" src="{{ URL::asset('front/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<script type="text/javascript" src="{{ URL::asset('front/js/jquery.flexisel.js') }}"></script>

<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="#">Contact</a></li>|
					<li><a href="#">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">mail@example.com</a></li>|
					<li class="top_link"><a href="#">My Account</a></li>					
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">			
				<div class="logo">
					<a href="#"><h1>Wedding Store</h1></a>
				</div>
			 <!---->
		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="#">Home</a></li>
					<li class="grid"><a href="#">Wedding</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="#">New Arrivals</a></li>
										<li><a href="#">Men</a></li>
										<li><a href="#">Women</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Kids</a></li>
										<li><a href="#">login</a></li>
										<li><a href="#">Brands</a></li>
										<li><a href="#">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="#">Men</a></li>
										<li><a href="#">Women</a></li>
										<li><a href="#">Brands</a></li>
										<li><a href="#">Kids</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="#">Levis</a></li>
										<li><a href="#">Persol</a></li>
										<li><a href="#">Nike</a></li>
										<li><a href="#">Edwin</a></li>
										<li><a href="#">New Balance</a></li>
										<li><a href="#">Jack & Jones</a></li>
										<li><a href="#">Paul Smith</a></li>
										<li><a href="#">Ray-Ban</a></li>
										<li><a href="#">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Bride Style</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="#">New Arrivals</a></li>
										<li><a href="#">Men</a></li>
										<li><a href="#">Women</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Kids</a></li>
										<li><a href="#">login</a></li>
										<li><a href="#">Brands</a></li>
										<li><a href="#">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="#">Men</a></li>
										<li><a href="#">Women</a></li>
										<li><a href="#">Brands</a></li>
										<li><a href="#">Kids</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="#">Levis</a></li>
										<li><a href="#">Persol</a></li>
										<li><a href="#">Nike</a></li>
										<li><a href="#">Edwin</a></li>
										<li><a href="#">New Balance</a></li>
										<li><a href="#">Jack & Jones</a></li>
										<li><a href="#">Paul Smith</a></li>
										<li><a href="#">Ray-Ban</a></li>
										<li><a href="#">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Typo</a></li>
					<li class="grid"><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			 <div class="cart box_1">
				 <a href="#">
					<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
@yield('content')

<!--footer-->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="#">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Careers</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="#">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Wedding</a></li>
					 <li><a href="#">> Jewellerys</a></li>
					 <li><a href="#">> Shoes</a></li>
					 <li><a href="#">> Flowers</a></li>
					 <li><a href="#">> Cakes</a></li>
					 <li><a href="#">...More</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->	 
</body>
</html>