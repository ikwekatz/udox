<?php include('../includes/header.php')?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">


<!-- ============================  FILTER TOP  ================================= -->
<div class="card mb-3">
	<div class="card-body">
<div class="row">
	<div class="col-md-2"> Your are here: </div> <!-- col.// -->
	<nav class="col-md-8"> 
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="#">Home</a></li>
	    <li class="breadcrumb-item"><a href="#">Category name</a></li>
	    <li class="breadcrumb-item"><a href="#">Sub category</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Items</li>
	</ol>  
	</nav> <!-- col.// -->
</div> <!-- row.// -->
<hr>
<div class="row">
	<div class="col-md-2">Filter by</div> <!-- col.// -->
	<div class="col-md-10"> 
		<ul class="list-inline">
		  <li class="list-inline-item mr-3 dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">   Supplier type </a>
            <div class="dropdown-menu p-3" style="max-width:400px;">	
		      <label class="form-check">
		      	 <input type="radio" name="myfilter" class="form-check-input"> Good supplier
		      </label>
		      <label class="form-check">	
		      	 <input type="radio" name="myfilter" class="form-check-input"> Best supplier
		      </label>
		      <label class="form-check">
		      	 <input type="radio" name="myfilter" class="form-check-input"> New supplier
		      </label>
            </div> <!-- dropdown-menu.// -->
	      </li>
	      <li class="list-inline-item mr-3 dropdown">
	      	<a href="#" class="dropdown-toggle" data-toggle="dropdown">  Country </a>
            <div class="dropdown-menu p-3">	
		      <label class="form-check"> 	 <input type="checkbox" class="form-check-input"> China    </label>
		      <label class="form-check">   	 <input type="checkbox" class="form-check-input"> Japan      </label>
		      <label class="form-check">    <input type="checkbox" class="form-check-input"> Uzbekistan  </label>
		      <label class="form-check">  <input type="checkbox" class="form-check-input"> Russia     </label>
            </div> <!-- dropdown-menu.// -->
	      </li>
		  <li class="list-inline-item mr-3 dropdown">
		  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Feature</a>
		  	<div class="dropdown-menu">
		  		<a href="" class="dropdown-item">Anti backterial</a>
		  		<a href="" class="dropdown-item">With buttons</a>
		  		<a href="" class="dropdown-item">Extra safety</a>
		  	</div>
		  </li>
		  <li class="list-inline-item mr-3"><a href="#">Color</a></li>
		  <li class="list-inline-item mr-3"><a href="#">Size</a></li>
		  <li class="list-inline-item mr-3">
		  	<div class="form-inline">
		  		<label class="mr-2">Price</label>
				<input class="form-control form-control-sm" placeholder="Min" type="number">
					<span class="px-2"> - </span>
				<input class="form-control form-control-sm" placeholder="Max" type="number">
				<button type="submit" class="btn btn-sm btn-light ml-2">Ok</button>
			</div>
		  </li>
		  <li class="list-inline-item mr-3">
		  	<label class="custom-control mt-1 custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <div class="custom-control-label">Ready to ship
			  </div>
			</label>
		  </li>
		</ul>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
<!-- ============================ FILTER TOP END.// ================================= -->

<header class="mb-3">
		<div class="form-inline">
			<strong class="mr-md-auto">32 Items found </strong>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Trending</option>
				<option>Most Popular</option>
				<option>Cheapest</option>
			</select>
			<div class="btn-group">
				<a href="page-listing-grid.html" class="btn btn-light active" data-toggle="tooltip" title="List view"> 
					<i class="fa fa-bars"></i></a>
				<a href="page-listing-large.html" class="btn btn-light" data-toggle="tooltip" title="Grid view"> 
					<i class="fa fa-th"></i></a>
			</div>
		</div>
</header><!-- sect-heading -->

<div class="row">
	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo image.'/1.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Hot sale unisex New Design Shirt for sport polo shirts latest design</a>
					<div class="price-wrap">
						<span class="price">$32.00-$40.00</span> 
						<small class="text-muted">/per item</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 2 Years </span> 
						<span class="tag"> 23 reviews </span>
						<span class="tag"> Japan </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/2.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">High Quality Winter PU Rain Jacket with Padding for Men's outdoor</a>
					<div class="price-wrap">
						<span class="price">$50.00-$75.00</span> 
						<small class="text-muted">/per item</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 4 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Great manufacturer Co ltd.</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 3 Years </span> 
						<span class="tag"> 70 reviews </span>
						<span class="tag"> Russia </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<<img src="<?php echo image.'/3.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$425.00-$490.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Best textile company Ltd.</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 7 Years </span> 
						<span class="tag"> 34 reviews </span>
						<span class="tag"> Russia </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/3.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/1.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/2.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/2.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Pro Electronic Ltd</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
			<img src="<?php echo image.'/3.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo image.'/1.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo image.'/1.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo image.'/2.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="<?php echo image.'/3.jpg'?>">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->
</div> <!-- row end.// -->


<nav class="mb-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>


<div class="box text-center">
	<p>Did you find what you were looking for？</p>
	<a href="" class="btn btn-light">Yes</a>
	<a href="" class="btn btn-light">No</a>
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION SUBSCRIBE  ========================= -->
<section class="padding-y-lg bg-light border-top">
<div class="container">

<p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox</p>

<div class="row justify-content-md-center">
	<div class="col-lg-4 col-sm-6">
<form class="form-row">
		<div class="col-8">
		<input class="form-control" placeholder="Your Email" type="email">
		</div> <!-- col.// -->
		<div class="col-4">
		<button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
		</div> <!-- col.// -->
</form>
<small class="form-text">We’ll never share your email address with a third-party. </small>
	</div> <!-- col-md-6.// -->
</div>
	

</div>
</section>
<!-- ========================= SECTION SUBSCRIBE END// ========================= -->


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