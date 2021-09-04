<?php
include('../includes/header.php');
?>

<!-- ========================= SECTION PAGETOP ========================= -->
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
<?php include('../includes/footer.php')?>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>