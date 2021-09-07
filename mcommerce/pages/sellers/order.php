<?php include('../../includes/header.php')?>

<body>


    <i class="screen-overlay"></i>

    <aside class="offcanvas" id="sidebar_left">
        <div class="card-body bg-primary">
            <button class="btn-close close text-white">&times;</button>
            <img src="<?php echo BASE_URL.'/images/avatars/1.jpg'?>" class="img-sm rounded-circle" alt="">
            <h6 class="text-white mt-3 mb-0">Sellers | Home</h6>
        </div>
        <nav class="nav-sidebar list-group">
            <a class="list-group-item mb-2" href="page-profile-main.html"> Account overview </a>
            <a class="list-group-item mb-2" href="page-profile-address.html"> My Address </a>
            <a class="list-group-item mb-2" href="page-profile-orders.html"> My Orders </a>
            <a class="list-group-item mb-2" href="page-profile-wishlist.html"> My wishlist </a>
            <a class="list-group-item mb-2" href="page-profile-seller.html"> My Selling Items </a>
            <a class="list-group-item mb-2" href="page-profile-setting.html"> Settings </a>
            <a class="list-group-item" href="page-index-1.html"> Log out </a>
        </nav>
        <hr>
        <nav class="nav-sidebar">
            <a href="#"> <i class="fa fa-phone"></i> +99812345678</a>
            <a href="#"> <i class="fa fa-envelope"></i> info@somename.uz</a>
            <a href="#"> <i class="fa fa-map-marker"></i> Tashkent city</a>
        </nav>
    </aside>

    <!-- =============== screen-wrap =============== -->
    <div class="screen-wrap">

        <header class="app-header bg-primary">
            <button class="btn-header" type="button" data-trigger="#sidebar_left"><i class="fa fa-bars"></i></button>
            <h5 class="title-header ml-2">UDOX MALL </h5>
            <div class="header-right"> <a href="#" class="btn-header"> <i class="fa fa-bell"></i> </a> </div>
        </header> <!-- section-header.// -->
        <main class="col-md-9 ml-2 mt-2">

            <article class="card mb-4">
                <header class="card-header">
                    <a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>
                    <strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
                    <span>Order Date: 16 December 2018</span>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="text-muted">Delivery to</h6>
                            <p>Michael Jackson <br>
                                Phone +1234567890 Email: myname@gmail.com <br>
                                Location: Home number, Building name, Street 123, <br>
                                P.O. Box: 100123
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Payment</h6>
                            <span class="text-success">
                                <i class="fab fa-lg fa-cc-visa"></i>
                                Visa **** 4216
                            </span>
                            <p>Subtotal: $356 <br>
                                Shipping fee: $56 <br>
                                <span class="b">Total: $456 </span>
                            </p>
                        </div>
                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
                <div class="row">
                    <div class="col">
                        <img src="<?php echo items.'1.jpg'?>" class="img-md">
                    </div>
                    <div class="col" style="margin-left:5%;">
                        <p class="title mb-0">Product name goes here </p>
                        <var class="price text-muted">USD 145</var>
						<hr>
                    </div>
                </div>
                
            </article> <!-- card order-item .// -->

        </main> <!-- col.// -->




        <nav class="nav-bottom">
            <a href="<?php echo sHome ?>" class="nav-link  ">
                <i class="icon fa fa-home"></i><span class="text">Home</span>
            </a>

            <a href="<?php echo Sproduct ?>" class="nav-link">
                <i class="icon fas fa-cash-register"></i><span class="text">Products</span>
            </a>
            <a href="<?php echo Sorder ?>" class="nav-link active">
                <i class="icon fa fa-shopping-bag"></i><span class="text">Orders</span>
            </a>

            <a href="<?php echo sProfile ?>" class="nav-link">
                <i class="icon fa fa-user"></i><span class="text">Profile</span>
            </a>
        </nav>
        <!-