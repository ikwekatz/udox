<?php include('../includes/header.php') ?>
<body>


<!-- =============== screen-wrap =============== -->
<div class="screen-wrap">


<header class="app-header bg-primary">
	<a href="javascript:history.go(-1)" class="btn-header"><i class="fa fa-arrow-left"></i></a>
    <h5 class="title-header"> Order </h5>
   <div class="header-right">  </div>
</header> <!-- section-header.// -->


<main class="app-content">
<section class="padding-around">


 <div class="steps-wizard clearfix mb-3">
    <div class="step done" data-step-num="1">
        <div class="step-icon"> 1 </div>
        <span class="step-title">Shipping</span>
    </div>
    <div class="step current" data-step-num="2">
        <div class="step-icon"> 2 </div>
        <span class="step-title">Payment</span>
    </div>
    <div class="step" data-step-num="3">
        <div class="step-icon"> 3 </div>
        <span class="step-title">Confirm</span>
    </div>
</div>


<article class="box mb-3 bg-light">
    <dl class="dlist-align text-muted">
        <dt>Total price:</dt>
        <dd class="text-right">$69.97</dd>
    </dl>
    <dl class="dlist-align text-muted">
        <dt>Shipping:</dt>
        <dd class="text-right">$10.00</dd>
    </dl>
    <dl class="dlist-align">
        <dt><strong>Total:</strong></dt>
        <dd class="text-right"><strong>$79.97</strong></dd>
    </dl>
</article>

<div class="box-selection active">
    <label class="custom-control custom-radio">
        <input type="radio" name="pay_option" checked="" class="custom-control-input">
        <div class="custom-control-label">Cash pay </div>
    </label>
</div>

<div class="box-selection">
    <label class="custom-control custom-radio">
        <input type="radio" name="pay_option" class="custom-control-input">
        <div class="custom-control-label">Cart visa -xxxx </div>
    </label>
</div>

<div class="box-selection">
<label class="custom-control custom-radio">
    <input type="radio" name="pay_option" class="custom-control-input">
    <div class="custom-control-label">PayPal </div>
</label>
</div>
<br>

<button type="submit" class="btn btn-primary btn-block"> Continue </button>

<br><br>

</section> <!-- section-products  .// -->

</main>
</div> 
<!-- =============== screen-wrap end.// =============== -->


</body>
</html>