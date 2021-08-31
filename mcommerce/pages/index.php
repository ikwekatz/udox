<?php include('../includes/header.php')?>
<body>


<i class="screen-overlay"></i>

<aside class="offcanvas" id="sidebar_left">
	<div class="card-body bg-primary">
		<button class="btn-close close text-white">&times;</button>
		<img src="images/avatars/1.jpg" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome User!</h6>
	</div>
	<nav class="nav-sidebar">
		<a href="<?php echo Home?>"> <i class="fa fa-home"></i> Home</a>
		<a href="<?php echo Category?>"> <i class="fa fa-th"></i>	Categories</a>
		<a href="index.html">  <i class="fa fa-info-circle"></i> About us</a>
		<a href="index.html">  <i class="fa fa-building"></i> Company</a>
		<a href="<?php echo Setting?>">  <i class="fa fa-cog"></i> Settings</a>
		<a href="index.html"> <i class="fa fa-home"></i> All screens</a>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-phone"></i> +99812345678</a>
		<a href="#"> <i class="fa fa-envelope"></i> info@somename.uz</a>
		<a href="#"> <i class="fa fa-map-marker"></i> Tashkent city</a>
	</nav>
</aside>

<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">

<header class="app-header bg-primary">
    <button class="btn-header" type="button" data-trigger="#sidebar_left"><i class="fa fa-bars"></i></button>
    <h5 class="title-header ml-2">Ecommerce shop </h5>
    <div class="header-right">  <a href="#" class="btn-header"> <i class="fa fa-bell"></i> </a> </div>
</header> <!-- section-header.// -->


<main class="app-content">

<section class="mb-2 scroll-horizontal">
    <a href="#" class="item-slider card-banner">
        <div class="card-body bg-warning" style="height:220px; background-image: url('<?php echo banners."slide1.jpg"?>');"> </div>
        <div class="text-bottom"><h5 class="title">Super discount</h5></div>
    </a>
    <a href="#" class="item-slider card-banner">
        <div class="card-body bg-warning" style="height:220px; background-image: url('<?php echo banners."slide2.jpg"?>');"> </div>
        <div class="text-bottom"><h5 class="title">Get offers</h5></div>
    </a>
    <a href="#" class="item-slider card-banner">
        <div class="card-body bg-warning" style="height:220px; background-image: url('<?php echo banners."slide3.jpg"?>');"> </div>
        <div class="text-bottom"><h5 class="title">Best deals now</h5></div>
    </a>
</section>

<section class="padding-around">
    
<ul class="row">
	<li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'cpu.svg'?>" alt="">  </span>
			<small class="text text-center"> Electronics</small>
		</a>
	</li>
	<li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'car.svg'?>" alt=""> </span>
			<small class="text text-center"> Motors </small>
		</a>
    </li>
    <li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'ball.svg'?>" alt=""> </span>
			<small class="text text-center"> Sports</small>
		</a>
    </li>
    <li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'homeitem.svg'?>" alt=""> </span>
			<small class="text text-center"> Devices</small>
		</a>
    </li>
    <li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'book.svg'?>" alt=""> </span>
			<small class="text text-center"> Books</small>
		</a>
    </li>
    <li class="col-4">
		<a href="#" class="btn-card-icontop btn">
			<span class="icon"> <i class="fa fa-ellipsis-h"></i> </span>
			<small class="text text-center"> More </small>
		</a>
	</li>
</ul>
</section>

<hr class="divider mb-3">

<h5 class="title-section">Recently viewed</h5>

<section class="scroll-horizontal padding-x">
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great item name</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
</section>


<hr class="divider my-3">


<h5 class="title-section">Best deals</h5>
<section class="scroll-horizontal  padding-x">
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great item name</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
</section> 

<hr class="divider my-3">

<h5 class="title-section">Brands</h5>

<section class="padding-x">
    <ul class="row">
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> Adidas  </a>
        </li>
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> Puma </a>
        </li>
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> Reebok </a>
        </li>
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> Lacoste  </a>
        </li>
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> Brand name  </a>
        </li>
        <li class="col-6">
            <a href="#" class="btn btn-light text-muted btn-block"> More </a>
        </li>
    </ul>
</section>


<p class="text-center my-4"><a href="index.html" class="btn btn-light"> <i class="fa fa-arrow-left"></i> <span class="text">More pages</span></a></p>


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
</nav> <!-- nav-bottom -->


</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>