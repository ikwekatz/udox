<?php

include('../includes/header.php');
?>
	

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		<nav class="list-group">
			<a class="list-group-item" href="page-profile-main.html"> Account overview  </a>
			<a class="list-group-item" href="page-profile-address.html"> My Address </a>
			<a class="list-group-item active" href="page-profile-orders.html"> My Orders </a>
			<a class="list-group-item" href="page-profile-wishlist.html"> My wishlist </a>
			<a class="list-group-item" href="page-profile-seller.html"> My Selling Items </a>
			<a class="list-group-item" href="page-profile-setting.html"> Settings </a>
			<a class="list-group-item" href="page-index-1.html"> Log out </a>
		</nav>
	</aside> <!-- col.// -->
	<main class="col-md-9">

		<article class="card mb-4">
		<header class="card-header">
			<a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>
			<strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
			<span>Order Date: 16 December 2018</span>
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-8">
					<h6 class="text-muted">Delivery to</h6>
					<p>Michael Jackson <br>  
					Phone +1234567890 Email: myname@gmail.com <br>
			    	Location: Home number, Building name, Street 123, <br> 
			    	P.O. Box: 100123
			 		</p>
				</div>
				<div class="col-md-4">
					<h6 class="text-muted">Payment</h6>
					<span class="text-success">
						<i class="fab fa-lg fa-cc-visa"></i>
					    Visa  **** 4216  
					</span>
					<p>Subtotal: $356 <br>
					 Shipping fee:  $56 <br> 
					 <span class="b">Total:  $456 </span>
					</p>
				</div>
			</div> <!-- row.// -->
		</div> <!-- card-body .// -->
		<div class="table-responsive">
		<table class="table table-hover">
			<tbody><tr>
				<td width="65">
					<img src="images/items/1.jpg" class="img-xs border">
				</td>
				<td> 
					<p class="title mb-0">Product name goes here </p>
					<var class="price text-muted">USD 145</var>
				</td>
				<td> Seller <br> Nike clothing </td>
				<td width="250"> <a href="#" class="btn btn-outline-primary">Track order</a> 
					<div class="dropdown d-inline-block">
						 <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
						 <div class="dropdown-menu dropdown-menu-right">
						 	<a href="#" class="dropdown-item">Return</a>
						 	<a href="#"  class="dropdown-item">Cancel order</a>
						 </div>
					</div> <!-- dropdown.// -->
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/items/2.jpg" class="img-xs border">
				</td>
				<td> 
					<p class="title mb-0">Another name goes here </p>
					<var class="price text-muted">USD 15</var>
				</td>
				<td> Seller <br> ABC shop </td>
				<td> 
					<a href="#" class="btn btn-outline-primary">Track order</a>
					<div class="dropdown d-inline-block">
						 <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
						 <div class="dropdown-menu dropdown-menu-right">
						 	<a href="#" class="dropdown-item">Return</a>
						 	<a href="#"  class="dropdown-item">Cancel order</a>
						 </div>
					</div> <!-- dropdown.// -->
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/items/3.jpg" class="img-xs border">
				</td>
				<td> 
					<p class="title mb-0">The name of the product  goes here </p>
					<var class="price text-muted">USD 145</var>
				</td>
				<td> Seller <br> Wallmart </td>
				<td> <a href="#" class="btn btn-outline-primary">Track order</a> 
					<div class="dropdown d-inline-block">
						 <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
						 <div class="dropdown-menu dropdown-menu-right">
						 	<a href="#" class="dropdown-item">Return</a>
						 	<a href="#"  class="dropdown-item">Cancel order</a>
						 </div>
					</div> <!-- dropdown.// -->
				</td>
			</tr>
		</tbody></table>
		</div> <!-- table-responsive .end// -->
		</article> <!-- card order-item .// -->


		<article class="card order-item mb-4">
		<header class="card-header">
			<a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>
			<strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
			<span>Order Date: 16 December 2018</span>
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-8">
					<h6 class="text-muted">Delivery to</h6>
					<p>Michael Jackson <br>  
					Phone +1234567890 Email: myname@pixsellz.com <br>
			    	Location: Home number, Building name, Street 123,  Tashkent, UZB <br> 
			    	P.O. Box: 100123
			 		</p>
				</div>
				<div class="col-md-4">
					<h6 class="text-muted">Payment</h6>
					<span class="text-success">
						<i class="fab fa-lg fa-cc-visa"></i>
					    Visa  **** 4216  
					</span>
					<p>Subtotal: $356 <br>
					 Shipping fee:  $56 <br> 
					 <span class="b">Total:  $456 </span>
					</p>
				</div>
			</div> <!-- row.// -->
		</div> <!-- card-body .// -->
		<div class="table-responsive">
		<table class="table table-hover">
			<tbody><tr>
				<td width="65">
					<img src="images/items/1.jpg" class="img-xs border">
				</td>
				<td> 
					<p class="title mb-0">Product name goes here </p>
					<var class="price text-muted">USD 145</var>
				</td>
				<td> Seller <br> Nike clothing </td>
				<td width="250"> <a href="#" class="btn btn-outline-primary">Track order</a>  
					<div class="dropdown d-inline-block">
						 <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
						 <div class="dropdown-menu dropdown-menu-right">
						 	<a href="#" class="dropdown-item">Return</a>
						 	<a href="#"  class="dropdown-item">Cancel order</a>
						 </div>
					</div> <!-- dropdown.// -->
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/items/2.jpg" class="img-xs border">
				</td>
				<td> 
					<p class="title mb-0">Another name goes here </p>
					<var class="price text-muted">USD 15</var>
				</td>
				<td> Seller <br> ABC shop </td>
				<td> <a href="#" class="btn btn-outline-primary">Track order</a>  
					<div class="dropdown d-inline-block">
						 <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
						 <div class="dropdown-menu dropdown-menu-right">
						 	<a href="#" class="dropdown-item">Return</a>
						 	<a href="#"  class="dropdown-item">Cancel order</a>
						 </div>
					</div> <!-- dropdown.// -->
				</td>
			</tr>
		</tbody></table>
		</div> <!-- table-responsive .end// -->
		</article> <!-- card order-item .// -->


	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-secondary">
	<div class="container">
		<section class="footer-top padding-y-lg text-white">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom text-center">
		
				<p class="text-white">Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>
				<p class="text-muted"> &copy 2019 Company name, All rights reserved </p>
				<br>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>