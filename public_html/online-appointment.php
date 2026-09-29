<?php include("header.php"); ?>
<!-- Inner Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container text-center py-5">
<h1 class="display-2 text-white mb-4 animated slideInDown">New Client ?</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb justify-content-center mb-0">
<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
<li class="breadcrumb-item text-primary" aria-current="page">New Client ?</li>
</ol>
</nav>
</div>
</div>
<!-- Inner Page Header End -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h3 class="mb-4 fs-5 fw-medium text-primary">New Client ?</h3>
<p class="mb-4">If you are a new client of Jacks Window Cleaning Service, please complete the form below and attach 4 photos of your property (one per facade). This information will allow us to provide you with a quick estimate.
</br>
</br>
We will keep the photos for your file to make it easier to make appointments for the season and years to come. Do not hesitate to contact us by telephone at 514-464-6206 if necessary.
</br>
</br>              
If you're considering Jack's Window Washing for the first time, we'd appreciate it if you could take a moment to complete the form below and attach four photos, each showcasing a different side of your property. Providing this essential information will allow us to promptly deliver a customized estimate tailored to your specific requirements.
</br></br>   
Rest assured, the photos you provide will be securely stored in your file, making it easier for us to schedule appointments not only for this season but also for the future. Should you need immediate assistance, please don't hesitate to contact us directly at 514-464-6206. Thank you for choosing Jack's Window Washing—we're eager to provide you with our exceptional cleaning services!
</p>
</div>
<!-- form starts -->
<div class="row g-5">
<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<form id="FrmNewClient" method="post">
<div class="row g-3">
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
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="name" name="name" placeholder="Your name" required /> <!-- chg. -->
<label for="name">Your name *</label> <!-- chg. -->
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="email" class="form-control" id="email" name="email" placeholder="Your email" />
<label for="email">Your email</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="number" name="number" placeholder="Phone No. XXX-XXX-XXXX" required /> <!-- chg. -->
<label for="number">Phone No. XXX-XXX-XXXX *</label> <!-- chg. -->
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="address" name="address" placeholder="Your address" />
<label for="address">Your address</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="city" name="city" placeholder="Your city" />
<label for="city">Your city</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="province" name="province" placeholder="Your province" />
<label for="province">Your province</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="country" name="country" placeholder="Your country" />
<label for="country">Your country</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="date" class="form-control" id="date" name="date" placeholder="Your desired date" />
<label for="date date">Your desired date</label>
</div>
</div>
<div class="col-md-6 ">
<div class="form-floating">
<textarea class="form-control" placeholder="Your message (if any) (max. length 300 characters)" 
id="message" name="message" style="height: 210px"></textarea> <!-- chg. -->
<label for="message">Your message (if any) (max. length 300 characters)</label> <!-- chg. -->
</div>
</div>
<div class="col-md-6 ">
<label class="mb-3"><strong>A photo per facade of your house</strong>&nbsp;<small class="error">( .webp, .jpg, .jpeg, .png allowed )</small></label>
<div>
<input type="file" id="photo1" name="photo1" class="form-control mb-3" />
<input type="file" id="photo2" name="photo2" class="form-control mb-3" />
<input type="file" id="photo3" name="photo3" class="form-control mb-3" />
<input type="file" id="photo4" name="photo4" class="form-control mb-3" />
</div>
</div>
<div class="col-sm-2">
<div class="form-floating">
<img id="ImgCaptcha" src="/form/captcha.php" alt="Security Code" title="Security Code" 
name="ImgCaptcha" />  <a href="javascript:void(0);" title="Refresh" 
onclick="javascript:RefreshCaptcha();" style="text-decoration: none !important;"><img 
src="form/reload.gif" alt="Refresh" /></a>
</div>
</div>
<div class="col-sm-3">
<div class="form-floating">
<input type="number" class="form-control" id="captcha" name="captcha" placeholder="Re-type security code" />
<label for="captcha">Re-type security code</label>
</div>
</div>
<div class="col-12">
<button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="BtnSubmit">SUBMIT NOW</button>
<input type="hidden" id="frompage" name="frompage" value="New Client" />
<input type="hidden" id="language" name="language" value="english" />
</div>
<div class="col-12" id="DivMsg"></div>
</div>
</form>
</div>
</div>
<!-- form ends -->
</div>
</div>
<?php include("footer.php"); ?>