<?php include('../includes/header.php')?>
<body>

<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">

<header class="app-header bg-primary">
  <a href="javascript:history.go(-1)" class="btn-header"><i class="fa fa-arrow-left"></i></a>
    <h5 class="title-header ml-2">Ecommerce shop </h5>
    <div class="header-right">  <a href="#" class="btn-header"> <i class="fa fa-shopping-cart"></i> </a> </div>
</header> <!-- section-header.// -->


<main class="app-content">
	
<section class="gallery-wrap">
    <a href="<?php echo items.'item-detail.jpg'?>" data-fancybox="gallery" class="img-big-wrap"><img src="<?php echo items.'item-detail.jpg'?>"></a>
</section>

<section class="padding-around">


    <p class="title-detail">Product name goes here</p>	
    <div class="price-wrap mb-3">
        <span class="h5 price">$129.95</span> 
    </div> <!-- price-wrap.// -->
    <hr>
    <div class="rating-wrap mb-3">
        <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </li>
            <li>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </li>
        </ul>
        <span class="label-rating text-muted">7/10</span> 
        <span class="label-rating text-muted">&#8226;  34 sold</span>
    </div> <!-- rating-wrap.// -->
    

    <dl class="dlist-align">
      <dt class="text-muted">Condition</dt>
      <dd><a href="#">Brand new</a></dd>
    </dl>
    <dl class="dlist-align">
      <dt class="text-muted">Color</dt>
      <dd>Orange</dd>
    </dl>
    <dl class="dlist-align">
      <dt class="text-muted">Size</dt>
      <dd>120sm x 300sm</dd>
    </dl>
    <dl class="dlist-align">
      <dt class="text-muted">Material</dt>
      <dd>Cotton</dd>
    </dl>
    
    <article class="mt-3">
    <p>
      Tovar xarakteristikasi uchun tekst tekst shunchaki... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna <br> <a href="#" class="btn-link"> + Read more </a>
      </p>
    </article>


</section>

<hr class="divider my-3">

<h5 class="title-section padding-x">Reviews (3)</h5>
<section class="padding-x">

   <article>
    <div class="icontext mb-2">
        <span class="icon"> <img src="images/avatars/1.jpg" class="icon-sm rounded-circle" alt=""> </span>
        <div><p>Michael John <span class="text-muted">- Purchased</span></p>
            <span class="text-warning">Good!</span>
        </div>
    </div>
    <p class="text-muted">Good! Tello Edu drone is an ideal companion for anyone engaged  Lorem ipsum dolor sit amet 
       <a href="#">...Read more</a></p>
   </article>
    <hr>
    <article>
        <div class="icontext mb-2">
            <span class="icon"> <img src="images/avatars/2.jpg" class="icon-sm rounded-circle" alt=""> </span>
            <div><p>Alexandra K. <span class="text-muted">- Purchased</span></p>
                <span class="text-warning">Best!</span>
            </div>
        </div>
        <p class="text-muted">I liked this Tello Edu drone is an ideal companion for anyone engaged  Lorem ipsum dolor sit amet 
           <a href="#">...Read more</a></p>
       </article>
</section> 

<br>
<p class="text-center my-4"><a hre="<?php echo Home?>" >
                <a href="javascript:history.go(-1)" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i>
                    <span class="text">Back</span>
                </a>
<br>
</main>

<nav class="bar-bottom">
  <div>
    <div class="input-group input-spinner">
      <div class="input-group-prepend">
        <button class="btn btn-light" type="button"> <i class="fa fa-minus"></i> </button>
      </div>
      <input type="text" class="form-control" value="1">
      <div class="input-group-append">
        <button class="btn btn-light" type="button"> <i class="fa fa-plus"></i> </button>
      </div>
    </div>
  </div>
	<div class="flex-grow-1"><a href="#" class="btn  w-100 btn-primary">Add to cart</a></div>
</nav> <!-- nav-bottom -->


</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>