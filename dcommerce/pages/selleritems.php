<?php include('../includes/header.php');?>
<!-- ========================= SECTION PAGETOP ========================= -->
<!-- ========================= SECTION PAGETOP END// ========================= -->
<style>
  .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
      margin: 0;
      padding: 0;
      border: none;
      box-shadow: none;
      text-align: center;
  }
  .kv-avatar {
      display: inline-block;
  }
  .kv-avatar .file-input {
      display: table-cell;
      width: 213px;
  }
  .kv-reqd {
      color: red;
      font-family: monospace;
      font-weight: normal;
  }
  </style>

<!-- Bootstrap4 files-->
<script src="<?php echo BASE_URL.'/js/bootstrap.bundle.min.js'; ?>" type="text/javascript"></script>
<link href="<?php echo BASE_URL.'/css/bootstrap.css';?>" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="<?php echo BASE_URL.'/fonts/fontawesome/css/all.min.css';?>" type="text/css" rel="stylesheet">

<!-- plugin: slickslider -->
<link href="<?php echo BASE_URL.'/plugins/slickslider/slick.css';?>" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL.'/plugins/slickslider/slick-theme.css';?>" rel="stylesheet" type="text/css" />
<script src="<?php echo BASE_URL.'/plugins/slickslider/slick.min.js';?>"></script>

<!-- plugin: owl carousel  -->
<link href="<?php echo BASE_URL.'/plugins/owlcarousel/assets/owl.carousel.css';?>" rel="stylesheet">
<link href="<?php echo BASE_URL.'/plugins/owlcarousel/assets/owl.theme.default.css';?>" rel="stylesheet">
<script src="<?php echo BASE_URL.'/plugins/owlcarousel/owl.carousel.min.js';?>"></script>
<!-- custom style -->
<link href="<?php echo BASE_URL.'/css/ui.css';?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo BASE_URL.'/css/responsive.css';?>" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="<?php echo BASE_URL.'/js/script.js';?>" type="text/javascript"></script>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		<nav class="list-group">
				<a class="list-group-item" href="<?php echo Profile ?>"> Account overview  </a>
				<a class="list-group-item active" href="<?php echo bill ?>"> My Address </a>
				<a class="list-group-item" href="<?php echo Order ?>"> My Orders </a>
				<a class="list-group-item" href="<?php echo Wishlist ?>"> My Wishlist </a>
				<a class="list-group-item" href="<?php echo Selling ?>"> My Selling Items </a>
				<a class="list-group-item" href="<?php echo Account ?>"> Settings </a>
				<a class="list-group-item" href=""> Log out </a>
		</nav>
	</aside> <!-- col.// -->
	<main class="col-md-9">

		<article class="card">
		<div class="row col-sm-12">
            <h6 class="m-2 col-sm-4 font-weight-bold text-primary"><a href="#" data-toggle="modal"
                    data-target="#aModal"> Add New product to store <span class="fa fa-plus"></span></a></h6>
        </div>
		<hr>
			<div class="card-body">
			

		<div class="row">
				<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
						<img src="<?php echo image.'/1.jpg'?>">
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
								<a href="#" class="title mb-2">Hot sale unisex New Design Shirt for sport polo shirts latest design</a>
								<div class="price-wrap mb-3">
									<span class="price">$32.00-$40.00</span> 
									<small class="text-muted">/per item</small>
								</div> <!-- price-wrap.// -->
								<a href="#" class="btn btn-outline-primary"> <i class="fa fa-pen"></i> Edit </a>
								<a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i> View  </a>
								
								<hr>
								<a href="#" class="btn btn-success btn-block">  Promote </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
						<img src="<?php echo image.'/3.jpg'?>">
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
								<a href="#" class="title mb-2">High Quality Winter PU Rain Jacket with Padding for Men's outdoor</a>
								<div class="price-wrap mb-3">
									<span class="price">$41.00-$50.00</span> 
									<small class="text-muted">/per item</small>
								</div> <!-- price-wrap.// -->
								<a href="#" class="btn btn-outline-primary"> <i class="fa fa-pen"></i> Edit </a>
								<a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i> View  </a>
								
								<hr>
								<a href="#" class="btn btn-success btn-block">  Promote </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
						<img src="<?php echo image.'/2.jpg'?>">
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
								<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
								<div class="price-wrap mb-3">
									<span class="price">$32.00-$40.00</span> 
									<small class="text-muted">/per item</small>
								</div> <!-- price-wrap.// -->
								<a href="#" class="btn btn-outline-primary"> <i class="fa fa-pen"></i> Edit </a>
								<a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i> View  </a>
								
								<hr>
								<a href="#" class="btn btn-success btn-block">  Promote </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
						<img src="<?php echo image.'/1.jpg'?>">
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
								<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
								<div class="price-wrap mb-3">
									<span class="price">$32.00-$40.00</span> 
									<small class="text-muted">/per item</small>
								</div> <!-- price-wrap.// -->
								<a href="#" class="btn btn-outline-primary"> <i class="fa fa-pen"></i> Edit </a>
								<a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i> View  </a>
								
								<hr>
								<a href="#" class="btn btn-success btn-block">  Promote </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
						<img src="<?php echo image.'/2.jpg'?>">
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
								<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
								<div class="price-wrap mb-3">
									<span class="price">$32.00-$40.00</span> 
									<small class="text-muted">/per item</small>
								</div> <!-- price-wrap.// -->
								<a href="#" class="btn btn-outline-primary"> <i class="fa fa-pen"></i> Edit </a>
								<a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i> View  </a>
								
								<hr>
								<a href="#" class="btn btn-success btn-block">  Promote </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

			</div> <!-- row .//  -->

			</div> <!-- card-body.// -->
		</article>


	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
 <!-- Customer Modal-->
 <div class="modal fade bd-example-modal-lg" id="aModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title fa fa-plus" id="exampleModalLabel">Add New Product</h5>

              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>

          </div>
          <div class="modal-body">
            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
            <!-- markup -->
  <!-- note: your server code `/site/avatar_upload/1` will receive `$_FILES['avatar-1']` on form submission -->
  <!-- the avatar markup -->
  <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
 <div class="row">
        <div class="col-sm-4 text-center">
          <img id="companyLogo" alt="Select Product image" src="1.jpg" data-type="editable" height="150px" width="150px" />
          <hr>
          <h5>Product image</h5>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Product Name<span class="kv-reqd">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pwd">Product Price<span class="kv-reqd">*</span></label>
                        <input type="text" class="form-control" placeholder="Product price in TSH" name="pwd" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                  <label for="lname">Product Category</label>
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
                        <label for="lname">Ammount of Product Available</label>
                        <input type="text" class="form-control" placeholder="Enter number of product available in your store" id="country_code" name="country_code"
                        pattern="[0-9]{4}" title="Number of Product Available eg 10" required>
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="form-group">
        <label for="lname">Product Description</label>
        <textarea id="w3review" class="form-control" name="w3review" placeholder="Enter prouct descrpition here" rows="5" cols="75">
        </textarea>
        </div>
    </div>
            <hr>
            <div class="form-group col-sm-8">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="save" id="btn" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </div>
  </form>


          </div>
      </div>
  </div>
</div>
  <script src="<?php echo BASE_URL.'/assets/js/jquery.min.js'?>"></script>
  <script src="<?php echo BASE_URL.'/assets/bootstrap/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo BASE_URL.'/assets/js/Button-modal-ecommerce.js'?>"></script>
</body>
<script>
$('#btn').click(function(){
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
    $("img[data-type=editable]").each(function (i, e) {
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

Element.prototype.readImage = function () {
    var _inputFile = this;
    if (_inputFile && _inputFile.files && _inputFile.files[0]) {
        var _fileReader = new FileReader();
        _fileReader.onload = function (e) {
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

function (yourcode) {
    "use strict";
    // The global jQuery object is passed as a parameter
    yourcode(window.jQuery, window, document);
}(

function ($, window, document) {
    "use strict";
    // The $ is now locally scoped 
    $(function () {
        // The DOM is ready!
        init();
    });

    // The rest of your code goes here!
}));



  var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
      'onclick="alert(\'Call your custom code here.\')">' +
      '<i class="bi-tag"></i>' +
      '</button>'; 
  $("#avatar-1").fileinput({
      overwriteInitial: true,
      maxFileSize: 1500,
      showClose: false,
      showCaption: false,
      browseLabel: '',
      removeLabel: '',
      browseIcon: '<i class="bi-folder2-open"></i>',
      removeIcon: '<i class="bi-x-lg"></i>',
      removeTitle: 'Cancel or reset changes',
      elErrorContainer: '#kv-avatar-errors-1',
      msgErrorClass: 'alert alert-block alert-danger',
      defaultPreviewContent: '<img src="/samples/default-avatar-male.png" alt="Your Avatar">',
      layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
      allowedFileExtensions: ["jpg", "png", "gif"]
  });
  </script>


<!-- ========================= FOOTER ========================= -->
<?php include('../includes/footer.php')?>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>