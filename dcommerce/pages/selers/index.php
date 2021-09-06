<?php include('../../includes/sheader.php');
?>
<div class="row ml-5 mt-3 mr-3">
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
			<div class="card-body">

		<div class="row">
				<div class="col-md-6">
					<figure class="itemside mb-4">
						<div class="aside"><img src="<?php echo image.'/1.jpg'?>"  class="border img-md"></div>
						<figcaption class="info">
							<a href="#" class="title">Great product name goes here</a>
							<p class="price mb-2">$80</p>
							<a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
							<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-6">
					<figure class="itemside mb-4">
						<div class="aside"><img src="<?php echo image.'/2.jpg'?>" class="border img-md"></div>
						<figcaption class="info">
							<a href="#" class="title">Men's Jackeet for Winter </a>
							<p class="price mb-2">$1280</p>
							<a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
							<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->

				<div class="col-md-6">
					<figure class="itemside mb-4">
						<div class="aside"><img src="<?php echo image.'/3.jpg'?>" class="border img-md"></div>
						<figcaption class="info">
							<a href="#" class="title">Another book of item goes here </a>
							<p class="price mb-2">$280</p>
							<a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
							<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
						</figcaption>
					</figure>
				</div> <!-- col.// -->
			</div> <!-- row .//  -->

			</div> <!-- card-body.// -->
		</article>


	</main> <!-- col.// -->
</div>

<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<?php include('../../includes/footer.php')?>;
<!-- ========================= FOOTER END // ========================= -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row col-sm-12">
            <h4 class="m-2 col-sm-4 font-weight-bold text-primary"><a href="#" data-toggle="modal"
                    data-target="#aModal"> Add New product to store <span class="fa fa-plus"></span></a></h4>
        </div>

    </div>


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
              <button type="submit" name="save" class="btn btn-primary">Save User</button>
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
</html>
</html>