<?php include('../includes/header.php');?>
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
		<img src="../asset/images/avatars/1.jpg" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome To UDOX Mall!</h6>
	</div>
	<nav class="nav-sidebar">
		<a href="index.html"> <i class="fa fa-home"></i> Home</a>
		<a href="index.html"> <i class="fa fa-th"></i>About us</a>
		<a href="index.html">  <i class="fa fa-info-circle"></i>Our services</a>
		<a href="index.html">  <i class="fa fa-building"></i>Team portifolio</a>
		<a href="index.html">  <i class="fa fa-cog"></i>Terms and Condition</a>
		<a href="index.html"> <i class="fa fa-home"></i>Refund policy</a>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-phone"></i> +255754576387</a>
		<a href="#"> <i class="fa fa-envelope"></i> udoxdodoma@gmail.com</a>
		<a href="#"> <i class="fa fa-map-marker"></i>Dodoma city centre Tanzania</a>
	</nav>
	<hr class="divider">
	<nav class="nav-sidebar">
	<a href="#" class="border text-center bg-primary mx-5 mr-0  text text-white"> LOGOUT</a>
</nav>
</aside>



   <h5 class="title-header">UDOX SHOPPING MALL </h5>
    


	
	<div class="header-right"> 
	<a href="#" class="btn-header"> <i class="fa fa-bell"></i></a> 

                 </div>
</header>
  <!-- header section end.// -->
<main class="app-content">
<div class="bg-primary padding-x padding-bottom">
    <h6 class="title-page text-white">Settings</h6>
</div>
<section>
<h6 class="title-sm padding-x">Personal</h6>
<nav class="nav-list">
	<a class="btn-list" href="#">
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Username</span>
		<small class="title">@francis mboya</small>
	</a>
	<a class="btn-list" href="#">
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Phone</span>
		<small class="title">+255754576387</small>
	</a>
	<a class="btn-list" href="#"> 
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Email</span>
		<small class="title">francismboya3@gmail.com</small>
	</a>
	<a class="btn-list" href="#">
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Password</span>
		<small class="title">******</small>
	</a>
</nav>
</section> 

<hr class="divider"> 

<section>
<h6 class="title-sm padding-x">Application</h6>
<nav class="nav-list">
	<a class="btn-list" href="#">
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Notifications</span>
		<small class="title">Deals and offer information</small>
	</a>
	<a class="btn-list" href="#">
		<i class="icon-action fa fa-pen"></i>
		<span class="text">Settings</span>
		<small class="title">Account control, app style</small>
	</a>
	<div class="btn-list" href="#">
		<div class="float-right custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="select_darkmode">
			<label class="custom-control-label" for="select_darkmode"></label>
		</div>
		<span class="text">Dark mode</span>
	</div>
</nav>
</section>

<p class="text-center my-4">
    <a href="javascript:history.go(-1)" class="btn btn-light"> <i class="icon fa fa-arrow-left"></i>  <span class="text">Back</span> </a>
</p>
<br>
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

</nav> <!-- nav-bottom -->

</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>