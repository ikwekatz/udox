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
		<a href="#">  <i class="fa fa-info-circle"></i> About us</a>
		<a href="#">  <i class="fa fa-building"></i> Company</a>
		<a href="<?php echo Setting?>">  <i class="fa fa-cog"></i> Settings</a>
		<a href="#"> <i class="fa fa-home"></i> All screens</a>
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
    <h5 class="title-header ml-2">UDOX MALL </h5>
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
		<a href="productl.php" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'cpu.svg'?>" alt="">  </span>
			<small class="text text-center"> Electronics</small>
		</a>
	</li>
	<li class="col-4">
		<a href="productl.php" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'car.svg'?>" alt=""> </span>
			<small class="text text-center"> Motors </small>
		</a>
    </li>
    <li class="col-4">
		<a href="productl.php" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'ball.svg'?>" alt=""> </span>
			<small class="text text-center"> Sports</small>
		</a>
    </li>
    <li class="col-4">
		<a href="productl.php" class="btn-card-icontop btn">
			<span class="icon"> <img src="<?php echo iconsB.'homeitem.svg'?>" alt=""> </span>
			<small class="text text-center"> Devices</small>
		</a>
    </li>
    <li class="col-4">
		<a href="productl.php" class="btn-card-icontop btn">
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
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great item name</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
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
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great item name</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Headset for music</p>
				<div class="price">$27.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">TP link modem</p>
				<div class="price">$43.00</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
	<div class="item">
		<a href="productdt.php" class="product-sm">
			<div class="img-wrap"> <img src="<?php echo items.'item.jpg'?>"> </div>
			<div class="text-wrap">
				<p class="title text-truncate">Great product name</p>
				<div class="price">$98.50</div> <!-- price-wrap.// -->
			</div>
		</a>
	</div>
</section> 

<hr class="divider my-3">
<section class="section-content">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title">New arrived</h3>
        </header>
        <!-- sect-heading -->
           
        <div class="row">
            <!-- background div -->
        <div style="background-color: white; " class="border col-md-12 row " >
       <!-- content background div -->    
        <div class="mt-4 row col-md-12">
            <div class="col-md-3 ">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/5.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/6.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Some item name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$280.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php"class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/7.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Great product name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$56.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/9.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/5.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/6.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Some item name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$280.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/7.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Great product name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$56.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="productdt.php" class="card card-product-grid">
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/9.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            </div>
            </div>

<!-- background div end-->

            <div class="content-justify-center col-md-3 card mt-3" style="margin-right: 15%; margin-left:35%;" >
                <button class="btn btn-primary my-2 col-md-12" ></i>  <i class="fa fa-plus"></i> More</button>
            </div>
            
        </div>
        <!-- row.// -->
       

    </div>
    <!-- container .//  -->
</section>
<hr class="divider my-3">


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title">Popular products</h3>
        </header>
        <!-- sect-heading -->
        <!-- background div -->
        <div style="background-color: white; " class="border" >
 <!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
        <div class="slider-items-slick row m-4" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
           

	<div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
	<div > 
    <div class="col-md-12">
                <form name="product1" method="POST" action="productdt.php">
                 <div id="pd1">    
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/1.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                    <a href="productdt.php" class="title">Just another product name</a>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                
                                </li>
                                <li>
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star "></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                    <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->

                    </figcaption>
                </form>
                       
                </div>
            </div>

</div>
</figure>
</div> 

<div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
<div > 


<div class="col-md-12">
    <div href="#" >
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/2.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Some item name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$280.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>

            </div>
</figure>
</div> 


            <!-- col.// -->

            <div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
<div > 


<div class="col-md-12">
    <div href="#" >
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/3.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Great product name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$56.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>

            </div>
</figure>
</div> 

            <!-- col.// -->
            <div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
<div > 


<div class="col-md-12">
    <div href="#" >
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/4.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>

            </div>
</figure>
</div> 

            <!-- col.// -->



            <!-- col.// -->

            <div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
<div > 


<div class="col-md-12">
    <div href="#" >
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/3.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Great product name here</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$56.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>

            </div>
</figure>
</div> 

            <!-- col.// -->
            <div class="item-slide p-2">
<figure class="card card-product-grid mb-0">
<div > 


<div class="col-md-12">
    <div href="#" >
                    <a href="productdt.php" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/4.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="productdt.php" class="title">Just another product name</a>

                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>

            </div>
</figure>
</div> 

            <!-- col.// -->

        </div>
        <!-- row.// -->
        </div>
<!-- background div end-->
    </div>
    <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

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
</main>

<nav class="nav-bottom">
	<a href="<?php echo Home ?>" class="nav-link active">
		<i class="icon fa fa-home"></i><span class="text">Home</span>
	</a>

	<a href="<?php echo Search ?>" class="nav-link">
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