<?php include('../includes/header.php');?>
<body>
<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">


<header class="app-header bg-primary">
	<a href="javascript:history.go(-1)" class="btn-header"><i class="fa fa-arrow-left"></i></a>
	<h5 class="title-header"> Your cart (3) </h5>
	<div class="header-right">  </div>
</header> <!-- section-header.// -->
	

<main class="app-content">
<section class="section-products padding-around">

<article class="item-cart">
	<figure class="itemside mb-3">
		<div class="aside"><img src="<?php echo items.'item.jpg'?>" class="rounded img-md"></div>
		<figcaption class="info">
			<a href="#" class="title text-truncate">Great product name</a>
			<small class="text-muted d-block mb-1">
				Color: red, Capacity: 32 GB <br>  
			</small>

			<div class="price-wrap mb-3">
				<small class="text-muted">$34.00 /per item</small><br>
				<strong class="price">$120.00</strong>
			</div>
		</figcaption>
	</figure>

	<a href="#" class="btn btn-icon btn-outline-danger"> <i class="fa fa-times"></i></a>
	<a href="#" class="btn btn-icon btn-light"> <i class="fa fa-heart"></i></a>
	<div class="input-group input-spinner float-right">
		<div class="input-group-prepend">
			<button class="btn btn-light" type="button"> <i class="fa fa-minus"></i> </button>
		</div>
		<input type="number" class="form-control" value="1">
		<div class="input-group-append">
			<button class="btn btn-light" type="button"> <i class="fa fa-plus"></i> </button>
		</div>
	</div>
</article> <!-- item-cart.// -->



<article class="item-cart">
	<figure class="itemside mb-3">
		<div class="aside"><img src="<?php echo items.'item.jpg'?>" class="rounded img-md"></div>
		<figcaption class="info">
			<a href="#" class="title text-truncate">Great product name</a>
			<small class="text-muted d-block mb-1">
				Color: red, Capacity: 32 GB <br>  
			</small>

			<div class="price-wrap mb-3">
				<small class="text-muted">$34.00 /per item</small><br>
				<strong class="price">$120.00</strong>
			</div>
		</figcaption>
	</figure>

	<a href="#" class="btn btn-icon btn-outline-danger"> <i class="fa fa-times"></i></a>
	<a href="#" class="btn btn-icon btn-light"> <i class="fa fa-heart"></i></a>
	<div class="input-group input-spinner float-right">
		<div class="input-group-prepend">
			<button class="btn btn-light" type="button"> <i class="fa fa-minus"></i> </button>
		</div>
		<input type="number" class="form-control" value="1">
		<div class="input-group-append">
			<button class="btn btn-light" type="button"> <i class="fa fa-plus"></i> </button>
		</div>
	</div>
</article> <!-- item-cart.// -->



<article class="item-cart">
	<figure class="itemside mb-3">
		<div class="aside"><img src="<?php echo items.'item.jpg'?>" class="rounded img-md"></div>
		<figcaption class="info">
			<a href="#" class="title text-truncate">Great product name</a>
			<small class="text-muted d-block mb-1">
				Color: red, Capacity: 32 GB <br>  
			</small>

			<div class="price-wrap mb-3">
				<small class="text-muted">$34.00 /per item</small><br>
				<strong class="price">$120.00</strong>
			</div>
		</figcaption>
	</figure>

	<a href="#" class="btn btn-icon btn-outline-danger"> <i class="fa fa-times"></i></a>
	<a href="#" class="btn btn-icon btn-light"> <i class="fa fa-heart"></i></a>
	<div class="input-group input-spinner float-right">
		<div class="input-group-prepend">
			<button class="btn btn-light" type="button"> <i class="fa fa-minus"></i> </button>
		</div>
		<input type="number" class="form-control" value="1">
		<div class="input-group-append">
			<button class="btn btn-light" type="button"> <i class="fa fa-plus"></i> </button>
		</div>
	</div>
</article> <!-- item-cart.// -->


</section> <!-- section-products  .// -->

<hr class="divider">

<section class="padding-around">
	<dl class="dlist-align text-muted">
		<dt>Total price:</dt>
		<dd class="text-right">$69.97</dd>
	</dl>
	<dl class="dlist-align text-muted">
		<dt>Shipping:</dt>
		<dd class="text-right">$10.00</dd>
	</dl>
	<dl class="dlist-align">
		<dt><strong>Total:</strong></dt>
		<dd class="text-right"><strong>$59.97</strong></dd>
	</dl>

	<a href="page-order-step1.html" class="btn btn-primary btn-block mt-3"> <span class="text"> Continue </span> <i class="fa fa-chevron-right"></i></a>

	<a href="index.html" class="btn btn-light btn-block"> <i class="fa fa-arrow-left"></i> <span class="text">More pages</span></a>


</section>

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
</nav>


</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>