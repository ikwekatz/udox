<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>UDOX || WEBSITE</title>
<?php
define("BASE_URL", "/udox/dcommerce/asset");
define("INDEX" ,'/udox/dcommerce');
define('PAGES','/udox/dcommerce/pages');
define('login','/udox/dcommerce/pages/login.php');
define('register','/udox/dcommerce/pages/register.php');
define('myaccount', '/udox/dcommerce/pages/myaccount.php')
?>
<link href="<?php echo BASE_URL.'/images/favicon.ico';?>" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" href="<?php echo BASE_URL.'/css/main.css';?>">
<!-- jQuery -->
<script src="<?php echo BASE_URL.'/js/jquery-2.0.0.min.js';?>" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="<?php echo BASE_URL.'/js/bootstrap.bundle.min.js'; ?>" type="text/javascript"></script>
<link href="<?php echo BASE_URL.'/css/bootstrap.css';?>" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="<?php echo BASE_URL.'/fonts/fontawesome/css/all.min.css';?>" type="text/css" rel="stylesheet">

<!-- plugin: slickslider -->
<link href="<?php echo BASE_URL.'/plugins/slickslider/slick.css';?>" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL.'/plugins/slickslider/slick-theme.css';?>" rel="stylesheet" type="text/css" />
<script src="<?php echo BASE_URL.'/plugins/slickslider/slick.min.js';?>"></script>

<!-- plugin: owl carousel  -->
<link href="<?php echo BASE_URL.'/plugins/owlcarousel/assets/owl.carousel.css';?>" rel="stylesheet">
<link href="<?php echo BASE_URL.'/plugins/owlcarousel/assets/owl.theme.default.css';?>" rel="stylesheet">
<script src="<?php echo BASE_URL.'/plugins/owlcarousel/owl.carousel.min.js';?>"></script>
<!-- custom style -->
<link href="<?php echo BASE_URL.'/css/ui.css';?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo BASE_URL.'/css/responsive.css';?>" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="<?php echo BASE_URL.'/js/script.js';?>" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

    /////////////////  items slider. /plugins/slickslider/
    if ($('.slider-items-slick').length > 0) { // check if element exists
        $('.slider-items-slick').slick({
            infinite: true,
            swipeToSlide: true,
            slidesToShow: 4,
            dots: false,
            slidesToScroll: 2,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
           	nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    } // end if
}); 
// jquery end
</script>

</head>
<div>
<body >
<header  class="section-header">
<?php
if(isset($_POST["MBWEHE"])){


?>
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container" >
    <ul class="navbar-nav d-none d-md-flex mr-auto" >
		<li class="nav-item"><a class="nav-link" href="<?php echo INDEX.'/index.php';?>">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo PAGES.'/deliver.php';?>">Delivery</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo PAGES.'/payment.php';?>">Payment</a></li>
    </ul>
    <ul class="navbar-nav">
		<li  class="nav-item"><a href="#" class="nav-link"> Call: +99812345678 </a></li>
		<li class="nav-item dropdown">
		 	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
		   <!-- <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
				<li><a class="dropdown-item" href="#">Arabic</a></li>
				<li><a class="dropdown-item" href="#">Russian </a></li>
		    </ul>-->
		</li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
<?php
}else{
  include('bheader.php');
}
?>
<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-6">
		<a href="<?php echo INDEX.'/index.php';?>" class="brand-wrap">
			<img class="logo" src="<?php echo BASE_URL.'/images/logo.jpg';?>">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-12 col-sm-12">
		<form action="<?php echo PAGES.'/search.php';?>" class="search">
			<div class="input-group w-100">
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
</header> <!-- section-header.// -->


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
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->

</body>
</div>
