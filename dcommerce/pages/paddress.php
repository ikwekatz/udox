<?php
include('../includes/header.php');
?>

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-gray">
<div class="container">
	<h2 class="title-page">My account</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION PAGETOP END// ========================= -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
	<div class="container">
	
	<div class="row">
		<aside class="col-md-3">
			<nav class="list-group">
				<a class="list-group-item" href="<?php echo Profile ?>"> Account overview  </a>
				<a class="list-group-item active" href="<?php echo bill ?>"> My Address </a>
				<a class="list-group-item" href="<?php echo Order ?>"> My Orders </a>
				<a class="list-group-item" href="<?php echo Wishlist ?>"> My Wishlist </a>
				<a class="list-group-item" href="<?php echo Selling ?>"> My Selling Items </a>
				<a class="list-group-item" href="<?php echo Account ?>"> Settings </a>
				<a class="list-group-item" href=""> Log out </a>
			</nav>
		</aside> <!-- col.// -->
		<main class="col-md-9">

		<a href="#" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Add new address </a>

        <div class="row">
            <div class="col-md-6">
                <article class="box mb-4">
                    <h6>London, United Kingdom</h6>
                    <p>Building: Nestone <br> Floor: 22, Aprt: 12  </p>
                    <a href="#" class="btn btn-light disabled"> <i class="fa fa-check"></i> Default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                </article>
            </div>  <!-- col.// -->
            <div class="col-md-6">
                <article class="box mb-4">
                    <h6>Tashkent, Uzbekistan</h6>
                    <p>Building one <br> Floor: 2, Aprt: 32  </p>
                    <a href="#" class="btn btn-light">Make default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                </article>
            </div>  <!-- col.// -->
            <div class="col-md-6">
                <article class="box mb-4">
                    <h6>Moscow, Russia</h6>
                    <p>Lenin street <br> Building A, Floor: 3, Aprt: 32  </p>
                    <a href="#" class="btn btn-light">Make default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                </article>
            </div>  <!-- col.// -->
        </div> <!-- row.// -->

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