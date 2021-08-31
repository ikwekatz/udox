<?php include('../includes/header.php');?>
    <style>
         :invalid {
            border-color: red
        }
        
         :valid {
            border-color: green
        }
    </style>

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
    <h6 class="title-page text-white">Profile edit</h6>
</div>
            <section class="padding-around">

                <form action="a5profile.php" name="profile_form" id="profile_form" class="block-register">

                    <div class="icontext">
                        <div class="icon">
                            <img src="../asset/images/avatars/1.jpg" class="rounded-circle shadow-sm img-md">
                        </div>
                        <div class="text">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_pasport" accept="" lang="en">
                                <label class="custom-file-label" for="file_pasport">Profile image</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" required class="form-control" value="Francis Mboya">
                    </div>

                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="tel" name="telefon" class="form-control" value="+255754576387" pattern="^[+][0-9]{12}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" autofocus autocomplete="on" class="form-control" value="francismboya3@gmail.com" readonly>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" list="city" name="city" class="form-control" placeholder="city name">
                        <datalist id="city">
      <option value="Dar es salaam">
      <option value="Tanga">
      <option value="Tanzania">
    </datalist>
                    </div>
                    <button class="btn btn-light btn-block"> <i class="fa fa-lock"></i> change password</button>
                </form>

                <button type="submit" class="btn btn-block btn-primary" form="profile_form"> Save  </button>



            </section>
            <!-- section body .// -->

            <hr class="divider my-3">
            <p class="text-center my-4">
  
            <section class="padding-around">
                <a href="javascript:history.go(-1)" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i>
                    <span class="text">Back</span>
                </a>
            </section>

        </main>
    </div>
    <!-- =============== screen-wrap end.// =============== -->





</body>

</html>