<?php include('../includes/header.php') ?>
<body>


<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">

<header class="app-header bg-primary">
	<a href="javascript:history.go(-1)" class="btn-header"><i class="fa fa-arrow-left"></i></a>
    <div class="header-right">  </div>
</header> <!-- section-header.// -->
<main class="app-content">

<div class="bg-primary  text-center padding-x padding-bottom">
    <h3 class="title-page text-white">All Category</h3>
    <p class="text-white-50">321 products</p>
</div>

<section class="padding-around">

<ul class="row">
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/cpu.svg" alt=""> </span>
            <span class="text text-truncate"> Electronics </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/homeitem.svg" alt=""> </span>
            <span class="text text-truncate"> Home items </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/book.svg" alt=""> </span>
            <span class="text text-truncate"> Books </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/ball.svg" alt=""> </span>
            <span class="text text-truncate"> Sports </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/car.svg" alt=""> </span>
            <span class="text text-truncate"> Auto parts </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/shoe-lady.svg" alt=""> </span>
            <span class="text text-truncate"> Shoes </span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <img src="images/icons/category-blue/shirt.svg" alt=""> </span>
            <span class="text text-truncate"> Clothes</span>
        </a>
    </li>
    <li class="col-6">
        <a href="#" class="btn-icontop-lg">
            <span class="icon"> <i class="fa  fa-ellipsis-h"></i> </span>
            <span class="text text-truncate"> More </span>
        </a>
    </li>
</ul>



<p class="text-center my-4"><a hre="<?php echo Home?>" class="btn btn-light"> <i class="fa fa-arrow-left"></i> <span class="text">Back</span></a></p>


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
</nav> <!-- nav-bottom -->


</div> 
<!-- =============== screen-wrap end.// =============== -->



</body>
</html>