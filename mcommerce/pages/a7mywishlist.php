<?php include('../includes/header.php');?>
<body>


<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">
<!-- header section start--->
<header class="app-header bg-primary">
	
<button class="btn-header" type="button" data-trigger="#sidebar_left"><i class="fa fa-bars"></i></button>
    

	<i class="screen-overlay"></i>

<aside class="offcanvas" id="sidebar_left">
	<div class="card-body bg-primary">
		<button class="btn-close close text-white">&times;</button>
		<img src="../asset/images/avatars/1.jpg" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome To UDOX Mall!</h6>
	</div>
	<nav class="nav-sidebar">
		<a href="index.html"> <i class="fa fa-home"></i> Home</a>
		<a href="index.html"> <i class="fa fa-th"></i>About us</a>
		<a href="index.html">  <i class="fa fa-info-circle"></i>Our services</a>
		<a href="index.html">  <i class="fa fa-building"></i>Team portifolio</a>
		<a href="index.html">  <i class="fa fa-cog"></i>Terms and Condition</a>
		<a href="index.html"> <i class="fa fa-home"></i>Refund policy</a>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-phone"></i> +255754576387</a>
		<a href="#"> <i class="fa fa-envelope"></i> udoxdodoma@gmail.com</a>
		<a href="#"> <i class="fa fa-map-marker"></i>Dodoma city centre Tanzania</a>
	</nav>
	<hr class="divider">
	<nav class="nav-sidebar">
	<a href="#" class="border text-center bg-primary mx-5 mr-0  text text-white"> LOGOUT</a>
</nav>
</aside>



   <h5 class="title-header">UDOX SHOPPING MALL </h5>
    


	
	<div class="header-right"> 
	<a href="#" class="btn-header"> <i class="fa fa-bell"></i></a> 

                 </div>
</header>
  <!-- header section end.// -->


<main class="app-content">
<div class="bg-primary padding-x padding-bottom">
    <h6 class="title-page text-white">My wishlist</h6>
</div>

<!-- =========================  COMPONENT WISHLIST ========================= -->
<article class="card">
	<header class="card-header">  </header>
	<div class="card-body">

<div class="row">
		<div class="col-md-4 card mt-2">
			<figure class="itemside mb-4">
				<div class="aside mt-1"><img src="../asset/images/items/1.jpg" class="border img-md"></div>
				<figcaption class="info">
					<a href="#" class="title">Nice and attractive product fr sample </a>
					<p class="price mb-2">1280TSH</p>
					<a href="#" class="btn btn-primary btn-sm"> Add to cart </a>
					<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
				</figcaption>
			</figure>
		</div> <!-- col.// -->

		<div class="col-md-4 card mt-2">
			<figure class="itemside mb-4">
				<div class="aside mt-1"><img src="../asset/images/items/2.jpg" class="border img-md"></div>
				<figcaption class="info">
					<a href="#" class="title">Great product name should be here</a>
					<p class="price mb-2">1280TSH</p>
					<a href="#" class="btn btn-primary btn-sm"> Add to cart </a>
					<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
				</figcaption>
			</figure>
		</div> <!-- col.// -->

		<div class="col-md-4 card mt-2">
			<figure class="itemside mb-4">
				<div class="aside mt-1"><img src="../asset/images/items/3.jpg" class="border img-md"></div>
				<figcaption class="info">
					<a href="#" class="title">Another name of item goes here </a>
					<p class="price mb-2">1280TSH</p>
					<a href="#" class="btn btn-primary btn-sm"> Add to cart </a>
					<a href="#" class="btn btn-danger btn-sm"  data-toggle="tooltip" title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
	</div> <!-- row .//  -->

	</div> <!-- card-body.// -->
</article>
<!-- =========================  COMPONENT WISHLIST END.// ========================= -->
<p class="text-center my-4">
    <a href="javascript:history.go(-1)" class="btn btn-light"> <i class="icon fa fa-arrow-left"></i>  <span class="text">Back</span> </a>
</p>
<br>
</main>

<nav class="nav-bottom">
	<a href="<?php echo Home ?>" class="nav-link active">
		<i class="icon fa fa-home"></i><span class="text">Home</span>
	</a>

	<a href="page-search.html" class="nav-link">
		<i class="icon fa fa-search"></i><span class="text">Search</span>
	</a>

	<a href="<?php echo Cart ?>" class="nav-link">
		<i class="icon fa fa-shopping-cart"></i><span class="text">Cart</span>
	</a>

	<a href="<?php echo Profile ?>" class="nav-link">
		<i class="icon fa fa-user"></i><span class="text">Profile</span>
	</a>
</nav>> <!-- nav-bottom -->

</nav> <!-- nav-bottom -->

</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>