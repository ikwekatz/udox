<?php
require('../includes/header.php');
?>
<!-- ============================ COMPONENT CART ================================= -->
<div class="row mt-3" style="background-color:#f8f8f8;">
		<main class="col-md-9">
			<div class="card ml-5 mr-2">
			<article class=" card-body mb-3 ">
				<div class="row align-items-center">
					<div class="col-md-6">
						<figure class="itemside">
							<div class="aside"><img src="<?php echo BASE_URL.'/images/items/4.jpg';?>" class="border img-sm"></div>
							<figcaption class="info">
								<span class="text-muted">Wears</span>
								<a href="#" class="title">Jeans bag for hiking </a>
							</figcaption>
						</figure> 
					</div> <!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
					<div class="col">
						<div class="price h5"> $180.00 </div>
					</div>
					<div class="col flex-grow-0 text-right">
						<a href="#" class="btn btn-light"> <i class="fa fa-times"></i> </a>
					</div>
				</div> <!-- row.// -->
			</article> <!-- card .// -->

			<article class="card card-body">
				<div class="row align-items-center">
					<div class="col-md-6">
						<figure class="itemside">
							<div class="aside"><img src="<?php echo BASE_URL.'/images/items/5.jpg';?>" class="border img-sm"></div>
							<figcaption class="info">
								<span class="text-muted">Accessories</span>
								<a href="#" class="title">Leather wallet brown medium size</a>
							</figcaption>
						</figure> 
					</div> <!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
					<div class="col">
						<div class="price h5"> $239.00 </div>
					</div>
					<div class="col flex-grow-0 text-right">
						<a href="#" class="btn btn-light"> <i class="fa fa-times"></i> </a>
					</div>
				</div> <!-- row.// -->
			</article> <!-- card .// -->

			<article class="card card-body mb-3">
				<div class="row align-items-center">
					<div class="col-md-6">
						<figure class="itemside">
							<div class="aside"><img src="<?php echo BASE_URL.'/images/items/6.jpg';?>" class="border img-sm"></div>
							<figcaption class="info">
								<span class="text-muted">Interior items</span>
								<a href="#" class="title">Dark gray sofa for room </a>
							</figcaption>
						</figure> 
					</div> <!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
					<div class="col">
						<div class="price h5"> $187.00 </div>
					</div>
					<div class="col flex-grow-0 text-right">
						<a href="#" class="btn btn-light"> <i class="fa fa-times"></i> </a>
					</div>
				</div> <!-- row.// -->
			</article> <!-- card .// -->

		</main> <!-- col.// -->
		<aside class="col-md-3">
			<div class="card  mr-5">
			<div class="card-body">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="" placeholder="Promo code">
					<span class="input-group-append"> 
						<button class="btn btn-primary">Ok</button>
					</span>
				</div>
				<dl class="dlist-align">
				  <dt>Subtotal:</dt>
				  <dd class="text-right">$938.50</dd>
				</dl>
				<dl class="dlist-align">
				  <dt>Discount:</dt>
				  <dd class="text-right text-danger">10%</dd>
				</dl>
				<dl class="dlist-align">
				  <dt>Grand Total:</dt>
				  <dd class="text-right text-dark"><strong>$948.50</strong></dd>
				</dl>
				<hr>
				<a href="#" class="btn btn-primary btn-block"> Purchase </a>

				<p class="small my-3 text-muted">Some extra informative text  can be placed here as dummy text will be replaced</p>
				<a href="#" class="btn btn-outline-warning btn-block">Installment</a>
			</div> <!-- card-body.// -->
			</div> <!-- card.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
<!-- ============================ COMPONENT CART END .// ================================= -->
<div style="height:20px"></div>
<?php 
require('../includes/footer.php');
?>