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

  </script>
</html>
</html>