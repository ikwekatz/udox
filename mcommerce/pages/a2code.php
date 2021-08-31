<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="theme-color" content="#3a5beb" />
<title>Website title - bootstrap html template</title>

<link href="../asset/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="../asset/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="../asset/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="../asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="../asset/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="../asset/css/mobile.css" rel="stylesheet" type="text/css"/>


<!-- custom javascript -->
<script src="../asset/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script
// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
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
		<a href="<?php echo Home?>"> <i class="fa fa-home"></i> Home</a>
		<a href="#"> <i class="fa fa-th"></i>About us</a>
		<a href="#l">  <i class="fa fa-info-circle"></i>Our services</a>
		<a href="#">  <i class="fa fa-building"></i>Team portifolio</a>
		<a href="#">  <i class="fa fa-cog"></i>Terms and Condition</a>
		<a href="#"> <i class="fa fa-home"></i>Refund policy</a>
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
    <h6 class="title-page text-white">EMAIL VERIFICATION CODE</h6>
</div>

<section class="padding-around">

<div class="text-center">
    <span class="icon bg-white icon-lg rounded-circle rotate"><i class="fa text-warning fa-envelope"></i></span>
</div>
<p class="text-center">
We sent email verification code to <br>
<strong>francismboya3@gmail.com</strong> <a class="btn-link"  data-target="#modal_simple" data-toggle="modal" href="">Change</a>
</p>
<form action="a3activations.php" class="px-5 mb-5">
    <div class="form-group">
        <input type="text" autofocus required maxlength="6" pattern = "^[0-9]{6}$" class="form-control text-center" placeholder="* * * * * *">
    </div>
    <button class="btn btn-block btn-primary">activate</button>
</form>

<p class="text-center"> <a href="#" class="btn-link"> <i class="fa fa-redo"></i> Send again</a>
</p>
<p class="text-center my-4">
    <a href="javascript:history.go(-1)" class="btn btn-light"> <i class="icon fa fa-arrow-left"></i>  <span class="text">Back</span> </a>
</p>
</section>

</main>

</div> 
<!-- =============== screen-wrap end.// =============== -->
 <!--====================registration model================-->
 <div id="modal_simple" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Change Email</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		   <!-- ============================ COMPONENT REGISTER   ================================= -->
           <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
            <article class="card-body">
                <form method="POST" action="a2code.php">
                    
                   
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="" value="francismboya3@gmail.com">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!-- form-group end.// -->

                    
                
                    <!-- form-group end.// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Change  </button>
                    </div>
                   
                </form>
            </article>
            <!-- card-body.// -->
        </div>
        <!-- card .// -->
        <!-- ============================ COMPONENT REGISTER  END.// ================================= -->

		</div>
	  </div>
	</div> <!-- modal-bialog .// -->
  </div> <!-- modal.// -->
    <!--===================registration model end//=============-->



</body>
</html>