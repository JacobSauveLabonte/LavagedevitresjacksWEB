<!-- Middle Area Ends -->
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
<div class="row g-5">
<div class="col-lg-4 col-md-7">
<h4 class="text-white mb-4">Connect with us</h4>
<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>QC 514-464-6206 |  ON 343-201-9119</p>
<p class="mb-2"><i class="fa fa-envelope me-3"></i>lavagedevitre@outlook.com</p>
<div class="d-flex pt-3">
<a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/LavageDeVitresJacks" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/lavagedevitresjacks/" target="_blank"><i class="fab fa-instagram"></i></a>
<a class="btn btn-square btn-light rounded-circle me-2" href="https://www.linkedin.com/company/les-lavage-de-vitres-jacks-inc"><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-5">
<h4 class="text-white mb-4">Navigation</h4>
<a class="btn btn-link" href="/about-us.php">About </a>
<a class="btn btn-link" href="/services.php">Services</a>
<a class="btn btn-link" href="/contact-us.php">Contact</a>
<a class="btn btn-link" href="/français/index.php">Français</a>
</div>
<div class="col-lg-4 col-md-6">
<h4 class="text-white mb-4">Services</h4>
<a class="btn btn-link" href="/services.php" title="Window Washing Service">Window Washing Service</a>
<a class="btn btn-link" href="/services.php" title="Gutter cleaning Service">Gutter cleaning Service</a>
<a class="btn btn-link" href="/services.php" title="Pressure Washing Service">Pressure Washing Service</a>

</div>
<div class="col-lg-2 col-md-6">
<h4 class="text-white mb-4">Business Hours</h4>
<h6 class="text-light">9:00 am - 7 pm (All days)</h6>

</div>
</div>
</div>
</div>
<!-- Footer End -->
<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
<div class="container">
<div class="row">
<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
&copy; <a class="fw-medium text-light" href="/index.php">Jacks Window Cleaning Inc.
</a> All rights reserved.
</div>
</div>
</div>
</div>
<!-- Copyright End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="form/submit.js?ver=2.3"></script>
<script>
var phoneInput = document.getElementById('number');
phoneInput.addEventListener('input', function (e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
  e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
});
phoneInput.value = phoneInput.value.replace(/\D/g, '');
</script>
</body>
</html>