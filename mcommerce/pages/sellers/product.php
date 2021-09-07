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

    </div>
    <article class="card">
        <div class="card-body">
            <header class="app-header bg-primary">
                <button class="btn btn-primary btn-block" type="button" data-target="#modal_simple"
                    data-toggle="modal">Register New Product <span class="fa fa-plus"> </span></button>
            </header>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="<?php echo BASE_URL.'/images/items/1.jpg'?>">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">Hot sale unisex New Design Shirt for sport polo shirts
                                latest design</a>
                            <div class="price-wrap mb-3">
                                <span class="price">$32.00-$40.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary" data-target="#edit"
                    data-toggle="modal"> <i class="fa fa-pen"></i> Edit </a>
                            <a href="#" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> Delete </a>

                            <hr>
                            <a href="#" class="btn btn-success btn-block"> Promote </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-4">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="<?php echo BASE_URL.'/images/items/2.jpg'?>">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">High Quality Winter PU Rain Jacket with Padding for Men's
                                outdoor</a>
                            <div class="price-wrap mb-3">
                                <span class="price">$41.00-$50.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary" data-target="#edit"
                    data-toggle="modal"> <i class="fa fa-pen"></i> Edit </a>
                    <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a>

                            <hr>
                            <a href="#" class="btn btn-success btn-block"> Promote </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-4">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="<?php echo BASE_URL.'/images/items/1.jpg'?>">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for
                                Men</a>
                            <div class="price-wrap mb-3">
                                <span class="price">$32.00-$40.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary" data-target="#edit"
                    data-toggle="modal"> <i class="fa fa-pen"></i> Edit </a>
                    <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a>
                            <hr>
                            <a href="#" class="btn btn-success btn-block"> Promote </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-4">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="<?php echo BASE_URL.'/images/items/4.jpg'?>">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for
                                Men</a>
                            <div class="price-wrap mb-3">
                                <span class="price">$32.00-$40.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary" data-target="#edit"
                    data-toggle="modal"> <i class="fa fa-pen"></i> Edit </a>
                    <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a>
                            <hr>
                            <a href="#" class="btn btn-success btn-block"> Promote </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-4">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="<?php echo BASE_URL.'/images/items/5.jpg'?>">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for
                                Men</a>
                            <div class="price-wrap mb-3">
                                <span class="price">$32.00-$40.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <a href="#" class="btn btn-outline-primary" data-target="#edit"
                    data-toggle="modal"> <i class="fa fa-pen"></i> Edit </a>
                    <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a>
                            <hr>
                            <a href="#" class="btn btn-success btn-block"> Promote </a>
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

            </div> <!-- row .//  -->

        </div> <!-- card-body.// -->
    </article>


    </main> <!-- col.// -->



    <nav class="nav-bottom">
        <a href="<?php echo sHome ?>" class="nav-link  ">
            <i class="icon fa fa-home"></i><span class="text">Home</span>
        </a>

        <a href="<?php echo Sproduct ?>" class="nav-link active">
            <i class="icon fas fa-cash-register"></i><span class="text">Products</span>
        </a>
        <a href="<?php echo Sorder ?>" class="nav-link">
            <i class="icon fa fa-shopping-bag"></i><span class="text">Orders</span>
        </a>

        <a href="<?php echo sProfile ?>" class="nav-link">
            <i class="icon fa fa-user"></i><span class="text">Profile</span>
        </a>
    </nav>


    <div id="modal_simple" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Product Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                    <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <img id="companyLogo" alt="Select Product image" src="1.jpg" data-type="editable"
                                    height="150px" width="150px" />
                                <hr>
                                <h5>Product image</h5>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Product Name <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Product Name"
                                                name="pname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pwd">Product Price <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Product price in TSH"
                                                name="pwd" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="lname">Product Category <span class="kv-reqd text-danger">*</span></label>
                                        <select class='form-control' name='gender' required>
                                            <option value="" disabled selected hidden>---Category---</option>
                                            <option value="Men Fashions">Men Fashions</option>
                                            <option value="Women Fashions">Women Fashions</option>
                                            <option value="Child Fashions">Child Fashions</option>
                                            <option value="Official Fashions">Official Fashions</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lname">Ammount of Product Available <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter number of product available in your store"
                                                id="country_code" name="country_code" pattern="[0-9]{4}"
                                                title="Number of Product Available eg 10" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="lname">Product Description  <span class="kv-reqd text-danger">*</span></label>
                                        <textarea id="w3review" class="form-control" name="w3review"
                                            placeholder="Enter prouct descrpition here" rows="5" cols="75">
                                            </textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="add" data-dismiss="modal">Add </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div> <!-- modal-bialog .// -->
    </div> <!-- modal.// -->

    <!-- edit modal-->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Product Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                    <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <h6>Click on product Image to change it</h6>
                                <img id="companyLogo" alt="Select Product image" src="<?php echo items.'1.jpg'?>" data-type="editable"
                                    height="150px" width="150px" />
                                <hr>
                                <h5>Product image</h5>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Product Name <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Hot sale unisex New Design Shirt for sport polo shirts
                                latest design" placeholder="Enter Product Name"
                                                name="pname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pwd">Product Price <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Tsh 20000/=" placeholder="Product price in TSH"
                                                name="pwd" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="lname">Product Category <span class="kv-reqd text-danger">*</span></label>
                                        <select class='form-control' name='gender' required>
                                            <option value="" disabled  hidden>---Category---</option>
                                            <option value="Men Fashions">Men Fashions</option>
                                            <option value="Women Fashions" selected>Women Fashions</option>
                                            <option value="Child Fashions">Child Fashions</option>
                                            <option value="Official Fashions">Official Fashions</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lname">Ammount of Product Available <span class="kv-reqd text-danger">*</span></label>
                                            <input type="text" value="20" class="form-control"
                                                placeholder="Enter number of product available in your store"
                                                id="country_code" name="country_code" pattern="[0-9]{4}"
                                                title="Number of Product Available eg 10" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="lname">Product Description  <span class="kv-reqd text-danger">*</span></label>
                                        <textarea id="w3review" class="form-control" name="w3review"
                                            placeholder="Enter prouct descrpition here"  rows="5" cols="75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus fugiat placeat fuga assumenda architecto ex dolores ullam libero quos? A voluptates minima illo perspiciatis perferendis obcaecati ipsum ab nisi?    
                                        </textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div> <!-- modal-bialog .// -->

  </div> <!-- modal.// -->
  <script>
$('#delete').click(function(){
Swal.fire({
  title: 'Are you sure to Delete This Product?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
    if (result.isConfirmed) {
    Swal.fire('Product Sucessful deleted!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Product Does not Deleted', '', 'info')
  }
})
});
$('#add').click(function(){
    Swal.fire({
  title: 'Product added Successful',
  icon: 'success',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
});

function init() {
    $("img[data-type=editable]").each(function(i, e) {
        var _inputFile = $('<input/>')
            .attr('type', 'file')
            .attr('hidden', 'hidden')
            .attr('onchange', 'readImage()')
            .attr('data-image-placeholder', e.id);

        $(e.parentElement).append(_inputFile);

        $(e).on("click", _inputFile, triggerClick);
    });
}

function triggerClick(e) {
    e.data.click();
}

Element.prototype.readImage = function() {
    var _inputFile = this;
    if (_inputFile && _inputFile.files && _inputFile.files[0]) {
        var _fileReader = new FileReader();
        _fileReader.onload = function(e) {
            var _imagePlaceholder = _inputFile.attributes.getNamedItem("data-image-placeholder").value;
            var _img = $("#" + _imagePlaceholder);
            _img.attr("src", e.target.result);
        };
        _fileReader.readAsDataURL(_inputFile.files[0]);
    }
};

// 
// IIFE - Immediately Invoked Function Expression
// https://stackoverflow.com/questions/18307078/jquery-best-practises-in-case-of-document-ready
(

    function(yourcode) {
        "use strict";
        // The global jQuery object is passed as a parameter
        yourcode(window.jQuery, window, document);
    }(

        function($, window, document) {
            "use strict";
            // The $ is now locally scoped 
            $(function() {
                // The DOM is ready!
                init();
            });

            // The rest of your code goes here!
        }));




</script>