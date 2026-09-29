<?php include("header.php"); ?>
<!-- Inner Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container text-center py-5">
<h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb justify-content-center mb-0">
<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
<li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
</ol>
</nav>
</div>
</div>
<!-- Inner Page Header End -->
<!-- Contact Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<p class="fs-5 fw-medium text-primary">Contact Us</p>
<h1 class="display-5 mb-5">If You Have Any Questions, Please Contact Us</h1>
</div>
<div class="row g-5">
<!-- form starts -->
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<p class="mb-4">Please fill out this form. We will respond to you as soon as possible.</p>
<form id="FrmContact" method="post">
<div class="row g-3">
<div class="col-md-6">
<div class="form-floating">
<input type="text" class="form-control" id="name" name="name" placeholder="Your name" required /> <!-- chg. -->
<label for="name">Your name *</label> <!-- chg. -->
</div>
</div>
<div class="col-md-6">
<div class="form-floating">
<input type="email" class="form-control" id="email" name="email" placeholder="Your email" />
<label for="email">Your email</label>
</div>
</div>
<div class="col-12">
<div class="form-floating">
<input type="text" class="form-control" id="number" name="number" placeholder="Phone No. XXX-XXX-XXXX" required /> <!-- chg. -->
<label for="number">Phone No. XXX-XXX-XXXX *</label> <!-- chg. -->
</div>
</div>
<div class="col-sm-12">
<div class="form-floating">
<select class="form-select" id="service" name="service">
<option value="" selected>Service you need</option>
<option value="A">Exterior window washing + gutter cleaning (most popular option)</option>
<option value="B">Exterior window cleaning</option>
<option value="C">Washing interior and exterior windows</option>
<option value="D">Gutter cleaning</option>
</select>
<label for="service">Service you need</label>
</div>
</div>
<div class="col-12">
<div class="form-floating">
<textarea class="form-control" placeholder="Your message (if any) (max. length 300 characters)" 
id="message" name="message" style="height: 75px"></textarea> <!-- chg. -->
<label for="message">Your message (if any) (max. length 300 characters)</label> <!-- chg. -->
</div>
</div>
<div class="col-sm-3">
<div class="form-floating">
<img id="ImgCaptcha" src="/form/captcha.php" alt="Security Code" title="Security Code" 
name="ImgCaptcha" />  <a href="javascript:void(0);" title="Refresh" 
onclick="javascript:RefreshCaptcha();" style="text-decoration: none !important;"><img 
src="/form/reload.gif" alt="Refresh" /></a>
</div>
</div>
<div class="col-sm-6">
<div class="form-floating">
<input type="number" class="form-control" id="captcha" name="captcha" placeholder="Re-type security code" />
<label for="captcha">Re-type security code</label>
</div>
</div>
<div class="col-12">
<button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="BtnSubmit">SUBMIT NOW</button>
<input type="hidden" id="frompage" name="frompage" value="Contact Page" />
<input type="hidden" id="language" name="language" value="english" />
<input type="hidden" id="address" name="address" value="" />
<input type="hidden" id="city" name="city" value="" />
<input type="hidden" id="province" name="province" value="" />
<input type="hidden" id="country" name="country" value="" />
<input type="hidden" id="date" name="date" value="" />
</div>
<div class="col-12" id="DivMsg"></div>
</div>
</form>
</div>
<!-- form ends -->
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
<h3 class="mb-4">Contact Details</h3>
<div class="d-flex border-bottom pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-map-marker-alt text-white"></i>
</div>
<div class="ms-3">
<h6>Our Office</h6>
<span>5/3310, Mountainview Saint Hubert, Quebec J3Y5N5, Canada.</span>
</div>
</div>
<div class="d-flex border-bottom pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-phone-alt text-white"></i>
</div>
<div class="ms-3">
<h6>Call Us</h6>
<span>QC 514-464-6206</span>
<span> ON 343-201-9119</span>
</div>
</div>
<div class="d-flex border-bottom-0 pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-envelope text-white"></i>
</div>
<div class="ms-3">
<h6>Mail Us</h6>
<span>info@JacksWindowCleaning.ca</span>
</div>
</div>
<iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.9442475551086!2d-73.3763658!3d45.470926999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc90646ccc3be99%3A0xf00b42709df545b5!2s3310%20Bd%20Mountainview%20%235!5e0!3m2!1sen!2sin!4v1710568245969!5m2!1sen!2sin" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
</div>
</div>
<!-- Contact End -->
<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content rounded-0">
<div class="modal-header">
<h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<!-- 16:9 aspect ratio -->
<div class="ratio ratio-16x9">
<iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
allow="autoplay"></iframe>
</div>
</div>
</div>
</div>
</div>
<!-- Video Modal End -->
<?php include("footer.php"); ?>