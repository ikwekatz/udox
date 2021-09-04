<?php
require('./includes/header.php');
?>
<!-- ==================================container_body======================-->
<div style="background-color: #f8f8f8;">


<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
    <div class="container">
        <!-- ================ COMPONENT SLIDER  BOOTSTRAP FADE ====================  -->
<div id="carousel2_indicator" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

        <div class="intro-banner-wrap">
            <img src="<?php echo BASE_URL.'/images/banners/1.jpg';?>" class="img-fluid rounded d-block w-100">
        </div>
    </div>


    <div class="carousel-item">

        <div class="intro-banner-wrap">
            <img src="<?php echo BASE_URL.'/images/banners/3.jpg';?>" class="img-fluid rounded d-block w-100">
        </div>
    </div>



    <div class="carousel-item">

        <div class="intro-banner-wrap">
            <img src="<?php echo BASE_URL.'/images/banners/4.jpg';?>" class="img-fluid rounded d-block w-100">
        </div>
    </div>


    <div class="carousel-item">

        <div class="intro-banner-wrap">
            <img src="<?php echo BASE_URL.'/images/banners/5.jpg';?>" class="img-fluid rounded d-block w-100">
        </div>
    </div>
  </div>
</div>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
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
                <form name="product1" method="POST" action="<?php echo PAGES.'/pDetail.php'?>">
                 <div id="pd1">    
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/1.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>
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
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/2.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Some item name here</a>

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
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/3.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great product name here</a>

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
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/4.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>

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
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/3.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great product name here</a>

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
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/4.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>

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
<!-- ========================= SECTION CONTENT ========================= -->
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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/5.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just another product name</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/6.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Some item name here</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/7.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great product name here</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/9.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/5.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/6.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Some item name here</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/7.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great product name here</a>

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
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/9.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>

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
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-bottom-sm">
    <div class="container">

        <header class="section-heading">
            
            <h3 class="section-title">Recommended</h3>
        </header>
        <!-- sect-heading -->
           <!-- background div -->
           <div style="background-color: white; " class="border col-md-12 " >
      
        <div class="row m-4">
            <div class="col-md-3">
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/1.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/2.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Some item name here</a>
                        <div class="price mt-1">$280.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/3.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Great product name here</a>
                        <div class="price mt-1">$56.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                <div href="<?php echo PAGES.'/pDetail.php'?>" class="card card-product-grid">
                    <a href="<?php echo PAGES.'/pDetail.php'?>" class="img-wrap"> <img src="<?php echo BASE_URL.'/images/items/4.jpg';?>"> </a>
                    <figcaption class="info-wrap">
                        <a href="<?php echo PAGES.'/pDetail.php'?>" class="title">Just another product name</a>
                        <div class="price mt-1">$179.00</div>
                        <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            <!-- col.// -->
        </div>
        <!-- row.// -->
        </div>
           

    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</div>
<!-- ==================================container_body end======================-->
<?php require('./includes/footer.php');
?>