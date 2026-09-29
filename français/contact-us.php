<?php include("header.php"); ?>
<!-- Inner Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container text-center py-5">
<h1 class="display-2 text-white mb-4 animated slideInDown">Contactez-nous</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb justify-content-center mb-0">
<li class="breadcrumb-item"><a href="/fran%C3%A7ais/index.php">Maison</a></li>
<li class="breadcrumb-item text-primary" aria-current="page">Contactez-nous</li>
</ol>
</nav>
</div>
</div>
<!-- Inner Page Header End -->
<!-- Contact Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<p class="fs-5 fw-medium text-primary">Contactez-nous</p>
<h1 class="display-5 mb-5">Si vous avez des questions, veuillez nous contacter</h1>
</div>
<div class="row g-5">
<!-- form starts -->
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h3 class="mb-4">Besoin d'un formulaire de contact fonctionnel?</h3>
<p class="mb-4">S'il vous plait remplissez le formulaire. Nous vous répondrons dans les plus brefs délais.</p>
<form id="FrmContact" method="post">
<div class="row g-3">
<div class="col-md-6">
<div class="form-floating">
<input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required /> <!-- chg. -->
<label for="name">Votre nom *</label> 	<!-- chg. -->
</div>
</div>
<div class="col-md-6">
<div class="form-floating">
<input type="email" class="form-control" id="email" name="email" placeholder="Votre email" />
<label for="email">Votre email</label>
</div>
</div>
<div class="col-12">
<div class="form-floating">
<input type="text" class="form-control" id="number" name="number" placeholder="Pas de téléphone. XXX-XXX-XXXX" required /> <!-- chg. -->
<label for="number">Exemple 514-444-4444 *</label> <!-- chg. -->
</div>
</div>
<div class="col-sm-12">
<div class="form-floating">
<select class="form-select" id="service" name="service">
<option value="" selected>Service dont vous avez besoin</option>
<option value="A">Lavage des vitres extérieures + nettoyage des gouttières (option la plus populaire)</option>
<option value="B">Nettoyage des vitres extérieures</option>
<option value="C">Lavage des vitres intérieures et extérieures</option>
<option value="D">Nettoyage de gouttières</option>
</select>
<label for="service">Service dont vous avez besoin</label>
</div>
</div>
<div class="col-12">
<div class="form-floating">
<textarea class="form-control" placeholder="Votre message (le cas échéant) (longueur maximale de 300 caractères)" 
id="message" name="message" style="height: 75px"></textarea> <!-- chg. -->
<label for="message">Votre message (le cas échéant) (longueur maximale de 300 caractères)</label> <!-- chg. -->
</div>
</div>
<div class="col-sm-3">
<div class="form-floating">
<img id="ImgCaptcha" src="../form/captcha.php" alt="Code de sécurité" title="Code de sécurité" 
name="ImgCaptcha" />  <a href="javascript:void(0);" title="Rafraîchir" 
onclick="javascript:RefreshCaptcha();" style="text-decoration: none !important;"><img 
src="../form/reload.gif" alt="Rafraîchir" /></a>
</div>
</div>
<div class="col-sm-6">
<div class="form-floating">
<input type="number" class="form-control" id="captcha" name="captcha" placeholder="Retapez le code de sécurité" />
<label for="captcha">Retapez le code de sécurité</label>
</div>
</div>
<div class="col-12">
<button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="BtnSubmit">SOUMETTRE MAINTENANT</button>
<input type="hidden" id="frompage" name="frompage" value="Contact Page" />
<input type="hidden" id="language" name="language" value="french" />
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
<h3 class="mb-4">Détails du contact</h3>
<div class="d-flex border-bottom pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-map-marker-alt text-white"></i>
</div>
<div class="ms-3">
<h6>Notre bureau</h6>
<span>5/3310, Mountainview Saint Hubert, Québec J3Y5N5, Canada.</span>
</div>
</div>
<div class="d-flex border-bottom pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-phone-alt text-white"></i>
</div>
<div class="ms-3">
<h6>Appelez-nous</h6>
<span>QC 514-464-6206</span>
<span> ON 343-201-9119</span>

</div>
</div>
<div class="d-flex border-bottom-0 pb-3 mb-3">
<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
<i class="fa fa-envelope text-white"></i>
</div>
<div class="ms-3">
<h6>Envoyez-nous un mail</h6>
<span>info@LavageDeVitresJacks.com</span>
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
<h3 class="modal-title" id="exampleModalLabel">Vidéo Youtube</h3>
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