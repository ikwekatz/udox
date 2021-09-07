<?php include('../../includes/header.php');?>
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
		<img src="<?php echo BASE_URL.'/images/avatars/1.jpg'?>" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome To UDOX Mall!</h6>
	</div>
	<nav class="nav-sidebar list-group">
        <a class="list-group-item mb-2" href="page-profile-main.html"> Account overview  </a>
		<a class="list-group-item mb-2" href="page-profile-address.html"> My Address </a>
		<a class="list-group-item mb-2" href="page-profile-orders.html"> My Orders </a>
		<a class="list-group-item mb-2" href="page-profile-wishlist.html"> My wishlist </a>
		<a class="list-group-item mb-2" href="page-profile-seller.html"> My Selling Items </a>
		<a class="list-group-item mb-2" href="page-profile-setting.html"> Settings </a>
		<a class="list-group-item mb-2" href="page-profile-setting.html"> Switch to Buyer Acount </a>
		<a class="list-group-item" href="page-index-1.html"> Log out </a>
	</nav>
	<hr><hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-phone"></i> +99812345678</a>
		<a href="#"> <i class="fa fa-envelope"></i> info@somename.uz</a>
		<a href="#"> <i class="fa fa-map-marker"></i> Tashkent city</a>
	</nav>
</aside>



   <h5 class="title-header">UDOX SHOPPING MALL </h5>
    


	
	<div class="header-right"> 
	<a href="#" class="btn-header"> <i class="fa fa-bell"></i></a> 

                 </div>
</header>
 <!-- header section end.// -->

<main class="app-content">

<section class="padding-x pb-3 bg-primary text-white">
	<figure class="icontext align-items-center mr-4" style="max-width: 300px;">
		<img class="icon icon-md rounded-circle" src="<?php echo BASE_URL.'/images/avatars/1.jpg'?>">
		<figcaption class="text">
			<p class="h5 title">Francis Mboya</p>
			<p class="text-white-50">+255754576387</p>
		</figcaption>
	</figure>
</section>

<section class="padding-around">
	<ul class="row">
		<li class="col-4">
			<a href="<?php echo Wishlist ?>" class="btn-card-icontop btn">
				<span class="icon"> <i class="fa fa-heart"></i> </span>
				<small class="text text-center"> Wishlist </small>
			</a>
		</li>
		<li class="col-4">
			<a href="#" class="btn-card-icontop btn">
				<span class="icon"> <i class="fas fa-store"></i> </span>
				<small class="text text-center"> Following</small>
			
			</a>
		</li>
		<li class="col-4">
			<a href="<?php echo Mywalet ?>" class="btn-card-icontop btn">
				<span class="icon"> <i class="fa fa-wallet"></i> </span>
				<small class="text text-center"> Wallet</small>
			</a>
		</li>

		
	</ul>
</section>  

<hr class="divider">

<section class="padding-top">
<h5 class="title-section padding-x">Orders</h5>
<nav class="nav-list">
<a class="btn-list" href="#">
		<span class="float-right badge badge-warning">0</span>
		<span class="text">New Orders</span>
	</a>
	<a class="btn-list" href="#">
		<span class="float-right badge badge-warning">0</span>
		<span class="text">On proccess</span>
	</a>
	<a class="btn-list" href="#">
		<span class="float-right badge badge-success">0</span>
		<span class="text">Shipped</span>
	</a>
	<a class="btn-list" href="#"> 
		<span class="float-right badge badge-secondary">0</span>
		<small class="title"></small>
		<span class="text">Unpaid</span>
	</a>
	<a class="btn-list" href="#"> 
		<span class="float-right badge badge-danger">0</span>
		<small class="title"></small>
		<span class="text">Completed</span>
	</a>
	
</nav>
</section> 
<hr class="divider"> 
<section class="padding-top">
	<h5 class="title-section padding-x">Account</h5>
	<nav class="nav-list">
		<a class="btn-list" href="#">
			<i class="icon-control fa fa-chevron-right"></i>
			<span class="text">Notifications</span>
		</a>
		<a class="btn-list" href="a6profileset.php">
			<i class="icon-control fa fa-chevron-right"></i>
			<span class="text">Settings</span>
		</a>
		<a class="btn-list" href="#"> 
			<i class="icon-control fa fa-chevron-right"></i>
			<span class="text">Support</span>
		</a>
	</nav>
</section> 

<hr class="divider"> 
<section class="padding-top">
<h5 class="title-section padding-x">Personal</h5>
<nav class="nav-list">
	<a class="btn-list" href="a9profileed.php">
		<i class="icon-action fa fa-pen"></i>
		<small class="title">Username</small>
		<span class="text">@francis mboya</span>
	</a>
	<a class="btn-list" href="a9profileed.php"> 
		<i class="icon-action fa fa-pen"></i>
		<small class="title">Email</small>
		<span class="text">francismboya3@gmail.com</span>
	</a>
</nav>
</section>
<br>



</main>

<nav class="nav-bottom">
	<a href="<?php echo sHome ?>" class="nav-link ">
		<i class="icon fa fa-home"></i><span class="text">Home</span>
	</a>

	<a href="<?php echo Sproduct ?>" class="nav-link">
		<i class="icon fas fa-cash-register"></i><span class="text">Products</span>
	</a>
	<a href="<?php echo Sorder ?>" class="nav-link">
		<i class="icon fa fa-shopping-bag"></i><span class="text">Orders</span>
	</a>

	<a href="<?php echo sProfile ?>" class="nav-link active">
		<i class="icon fa fa-user"></i><span class="text">Profile</span>
	</a>
</nav> <!-- nav-bottom -->


</nav> <!-- nav-bottom -->

</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>