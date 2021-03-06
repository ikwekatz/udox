<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="../js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="../fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="../css/mobile.css" rel="stylesheet" type="text/css"/>

<!-- custom javascript -->
<script src="../js/script.js" type="text/javascript"></script>


</head>
<body>

	
<i class="screen-overlay"></i>

<aside class="offcanvas" id="sidebar_left">
	<div class="card-body bg-primary">
		<button class="btn-close close text-white">&times;</button>
		<img src="images/avatars/1.jpg" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome User!</h6>
	</div>
	<nav class="nav-sidebar">
		<a href="index.html"> <i class="fa fa-home"></i> Home</a>
		<a href="index.html"> <i class="fa fa-th"></i>	Categories</a>
		<a href="index.html">  <i class="fa fa-info-circle"></i> About us</a>
		<a href="index.html">  <i class="fa fa-building"></i> Company</a>
		<a href="index.html">  <i class="fa fa-cog"></i> Settings</a>
		<a href="index.html"> <i class="fa fa-home"></i> All screens</a>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-file"></i> Terms and conditions</a>
		<a href="#"> <i class="fa fa-phone"></i> Our contacts</a>
		<a href="#"> <i class="fa fa-star"></i> Menu sample</a>
	</nav>
</aside>

<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">


<header class="app-header bg-primary">
	<a href="#" class="btn-header" onclick="history.back()"><i class="fa fa-arrow-left"></i></a>
    <h5 class="title-header"> Modal samples </h5>
    <div class="header-right">  <a href="#" class="btn-header"> <i class="fa fa-search"></i> </a> </div>
</header> <!-- section-header.// -->

<main class="app-content">

<section class="padding-around">
	<p class="text-center">Left offcanvas sidebar menu (Custom)</p>
	<button class="btn btn-success btn-block" type="button" data-trigger="#sidebar_left">Left drawer menu</button>

	<br>
	<p class="text-center">Modal windows (Bootstrap+custom)</p>
	<p class="text-center">
		<button class="btn btn-success btn-block" type="button" data-target="#modal_simple" data-toggle="modal">Basic modal</button>
		<button class="btn btn-success btn-block" type="button" data-target="#modal_aside_left" data-toggle="modal">Left modal</button>
		<button class="btn btn-success btn-block" type="button" data-target="#modal_aside_right" data-toggle="modal">Right modal</button>
	</p>

</section> <!-- section body .// -->


<p class="text-center my-4"><a href="../index.html" class="btn btn-light"> <i class="fa fa-arrow-left"></i> <span class="text">More pages</span></a></p>



</main>

</div> 
<!-- =============== screen-wrap end.// =============== -->







<div id="modal_simple" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Simple modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Modal body text goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save </button>
		</div>
	  </div>
	</div> <!-- modal-bialog .// -->
  </div> <!-- modal.// -->
  
  
  
  <div id="modal_aside_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-aside" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Right fixed sample</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Modal body text goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save </button>
		</div>
	  </div>
	</div> <!-- modal-bialog .// -->
  </div> <!-- modal.// -->
  
  
  
  <div id="modal_aside_left" class="modal fixed-left fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-aside" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Left fixed sample</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Modal body text goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save </button>
		</div>
	  </div>
	</div> <!-- modal-bialog .// -->
  </div> <!-- modal.// -->


</body>
</html>