<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#3a5beb" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <title>Website title - bootstrap html template</title>

    <link href="../asset/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="../asset/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="../asset/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../asset/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="../asset/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="../asset/css/mobile.css" rel="stylesheet" type="text/css" />


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
		<a href="<?php echo Home ?>"> <i class="fa fa-home"></i> Home</a>
		<a href="#"> <i class="fa fa-th"></i>About us</a>
		<a href="#">  <i class="fa fa-info-circle"></i>Our services</a>
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
 

        <main class="app-content">

            <div class="bg-primary padding-x padding-bottom">
                <h5 class="title-page text-white">Sign in</h5>
            </div>

            <section class="padding-around">
                <form action="a5profile.php" class="p-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-block btn-primary">LOGIN</button>
                </form>

                <p class="text-center">
                    Don’t have account <br> <a href="#" class="btn-link"  data-target="#modal_simple" data-toggle="modal">Create account</a>
                </p>

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
</nav>
        <!-- nav-bottom -->


    </div>
    <!-- =============== screen-wrap end.// =============== -->



    <!--====================registration model================-->
    <div id="modal_simple" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">REGISTRATION PANEL</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		   <!-- ============================ COMPONENT REGISTER   ================================= -->
           <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
            <article class="card-body">
                <header class="mb-4">
                    <h4 class="card-title">Sign up</h4>
                </header>
                <form method="POST" action="a2code.php">
                    <div class="form-row">
                        <div class="col form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!-- form-group end.// -->

                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted"></small>
                    </div>
                    <!-- form-group end.// -->
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
					  <span class="custom-control-label"> Male </span>
					</label>
                        <label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" type="radio" name="gender" value="option2">
					  <span class="custom-control-label"> Female </span>
					</label>
                    </div>
                    <!-- form-group end.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>City</label>
                        
                            <select  class="form-control">
					    <option> Choose...</option>
					      <option>Arusha</option>
					      <option>Dar es salaam</option>
					      <option selected="">Dodoma</option>
					      <option>Mwanza</option>
					      <option>Tanga</option>
					  </select>
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Country</label>
                            <select id="inputState" class="form-control">
					    <option> Choose...</option>
					      <option>Uganda</option>
					      <option>Kenya</option>
					      <option selected="">Tanzania</option>
					      <option>Rwanda</option>
					      <option>Burundi</option>
					  </select>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <!-- form-row.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Create password</label>
                            <input class="form-control" type="password">
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Repeat password</label>
                            <input class="form-control" type="password">
                        </div>
                        <!-- form-group end.// -->
                    </div>
                     <!-- form-group// -->
                     <div class="form-group">
                        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a>  </div> </label>
                    </div>
                    <!-- form-group end.// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
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