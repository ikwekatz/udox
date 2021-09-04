<?php
define("BASE_URL2", "/udox/dcommerce/asset");
?>
<head>
<link href="<?php echo BASE_URL2.'/images/favicon.ico';?>" rel="shortcut icon" type="image/x-icon">
</head>

<div style="display: none;">
<?php
include('../includes/header.php');

?>
</div>

<body>


<header class="section-header">
<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-2 col-lg-3 col-md-12">
				<a href="<?php echo INDEX.'/index.php';?>" class="brand-wrap">
					<img class="logo" src="<?php echo BASE_URL.'/images/logo.jpg';?>">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-6 col-lg-5 col-md-6">
				<form action="#" class="search-header">
					<div class="input-group w-100">
						<select class="custom-select border-right"  name="category_name">
								<option value="">All type</option><option value="codex">Special</option>
								<option value="comments">Only best</option>
								<option value="content">Latest</option>
						</select>
					    <input type="text" class="form-control" placeholder="Search">
					    
					    <div class="input-group-append">
					      <button class="btn btn-primary" type="submit">
					        <i class="fa fa-search"></i> Search
					      </button>
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-12">
		<div class="widgets-wrap float-lg-right">
			<div class="widget-header  mr-3">
				<a href="<?php echo PAGES.'/shoppingcart.php';?>" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted">Welcome!</span>
					<div> 
						<a href="<?php echo login ?>">Sign in</a> |  
						<a href="<?php echo register ?>"> Register</a>
					</div>
				</div>
			</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  All category</strong></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo scategory ?>">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 1</a>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 2</a>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo scategory ?>">Furnitures</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo scategory ?>">Foods and Drink</a>
            <a class="dropdown-item" href="<?php echo scategory ?>">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 1</a>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 2</a>
            <a class="dropdown-item" href="<?php echo scategory ?>">Category 3</a>
          </div>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>


</header> <!-- section-header.// -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		
<div class="card">
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Product type</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
			<div class="card-body">
				<form class="pb-3">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search">
				  <div class="input-group-append">
				    <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>
				
				<ul class="list-menu">
				<li><a href="#">People  </a></li>
				<li><a href="#">Watches </a></li>
				<li><a href="#">Cinema  </a></li>
				<li><a href="#">Clothes  </a></li>
				<li><a href="#">Home items </a></li>
				<li><a href="#">Animals</a></li>
				<li><a href="#">People </a></li>
				</ul>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Brands </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_2" style="">
			<div class="card-body">
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" checked="" class="custom-control-input">
				  <div class="custom-control-label">Mercedes  
				  	<b class="badge badge-pill badge-light float-right">120</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" checked="" class="custom-control-input">
				  <div class="custom-control-label">Toyota 
				  	<b class="badge badge-pill badge-light float-right">15</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" checked="" class="custom-control-input">
				  <div class="custom-control-label">Mitsubishi 
				  	<b class="badge badge-pill badge-light float-right">35</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" checked="" class="custom-control-input">
				  <div class="custom-control-label">Nissan 
				  	<b class="badge badge-pill badge-light float-right">89</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <div class="custom-control-label">Honda 
				  	<b class="badge badge-pill badge-light float-right">30</b>  </div>
				</label>
	</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Price range </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_3" style="">
			<div class="card-body">
				<input type="range" class="custom-range" min="0" max="100" name="">
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label>Min</label>
				  <input class="form-control" placeholder="$0" type="number">
				</div>
				<div class="form-group text-right col-md-6">
				  <label>Max</label>
				  <input class="form-control" placeholder="$1,0000" type="number">
				</div>
				</div> <!-- form-row.// -->
				<button class="btn btn-block btn-primary">Apply</button>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Sizes </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_4" style="">
			<div class="card-body">
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> XS </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> SM </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> LG </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> XXL </span>
			  </label>
		</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">More filter </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_5" style="">
			<div class="card-body">
				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
				  <div class="custom-control-label">Any condition</div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Brand new </div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Used items</div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Very old</div>
				</label>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">32 Items found </span>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Trending</option>
				<option>Most Popular</option>
				<option>Cheapest</option>
			</select>
			<div class="btn-group">
				<a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view"> 
					<i class="fa fa-bars"></i></a>
				<a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view"> 
					<i class="fa fa-th"></i></a>
			</div>
		</div>
</header><!-- sect-heading -->

<div class="row">
	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo BASE_URL.'/images/items/1.jpg';?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great item name goes here</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
						<del class="price-old">$1980</del>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/2.jpg'?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/3.jpg';?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/4.jpg';?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/5.jpg';?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/6.jpg'?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/7.jpg'?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="<?php echo BASE_URL.'/images/items/1.jpg';?>">
				<a class="btn-overlay" href="<?php echo PAGES.'/pDetail.php'?>"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="<?php echo Cart ?>" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->
</div> <!-- row end.// -->


<nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<?php 
require('../includes/footer.php');
?>
</body>
</html>