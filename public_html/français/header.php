<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8" />

<meta content="width=device-width, initial-scale=1.0" name="viewport" />

<?php 

$page = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if ($page == "/" || $page == "/fran%C3%A7ais/index.php")

{

?>

<title>Lavage de Vitres Jacks Inc.</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}
else if ($page == "/fran%C3%A7ais/services.php")
{
?>

<title>Services</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}
else if ($page == "/fran%C3%A7ais/about-us.php")
{
?>

<title>À propos</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}

else if ($page == "/fran%C3%A7ais/contact-us.php")
{
?>

<title>Nous Contacter</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}

else if ($page == "/fran%C3%A7ais/already-client.php")

{

?>

<title>Déjà client ?</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}

else if ($page == "/fran%C3%A7ais/online-appointment.php")

{

?>

<title>Nouveau Client ?</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php

}
else 
{ 
?>

<title>Lavage de Vitres Jacks Inc.</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link rel="canonical" href="" />

<?php 

}
?>

<!-- Favicon -->

<link href="../img/favicon.ico" rel="icon" />

<!-- Google Web Fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />  

<!-- Icon Font Stylesheet -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

<!-- Libraries Stylesheet -->

<link href="../lib/animate/animate.min.css" rel="stylesheet" />

<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

<link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->

<link href="../css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->

<link href="../css/style.css" rel="stylesheet" />

<link href="../form/submit.css" rel="stylesheet" />

</head>

<body>

<!-- Spinner Start -->

<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">

<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>

</div>

<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid text-black d-none d-lg-flex head">
<div class="container ">
<div class="d-flex align-items-center">
<a href="/index.php">
<h2 class="text-black fw-bold m-1"> <img src="../img/home-cleaning.png" alt="Lavage de Vitres Jacks Inc." title="Lavage de Vitres Jacks Inc." /> </h2>
</a>
<div class="ms-auto d-flex align-items-center">
<small class="ms-4"><i class="fa fa-phone-alt me-3"></i>QC 514-464-6206 |  ON 343-201-9119</small>
<small class="ms-4"><i class="fa fa-envelope me-3"></i> Lavagedevitre@outlook.com</small>
<div class="ms-3 d-flex">
<a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.facebook.com/LavageDeVitresJacks" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.linkedin.com/company/les-lavage-de-vitres-jacks-inc" target="_blank"><i class="fab fa-linkedin-in"></i></a>
<a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/lavagedevitresjacks/" target="_blank"> <i class="fab fa-instagram"></i></a>
</div>
</div>
</div>
</div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->

<div class="container-fluid bg-white sticky-top">

<div class="container">

<nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">

<a href="/fran%C3%A7ais/index.php" class="navbar-brand d-lg-none">

<img  src="../img/home-cleaning.png" alt="Lavage de Vitres Jacks Inc." title="Lavage de Vitres Jacks Inc." />

</a>

<button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarCollapse">

<div class="navbar-nav">

<a href="/fran%C3%A7ais/index.php" class="nav-item nav-link active">Accueil</a>

<a href="/fran%C3%A7ais/services.php" class="nav-item nav-link">Services</a>

<a href="/fran%C3%A7ais/contact-us.php" class="nav-item nav-link">Nous Contacter</a>

<a href="/fran%C3%A7ais/about-us.php" class="nav-item nav-link">A Propos</a>      




<a href="/index.php" class="nav-item nav-link">Anglais</a>

</div>

<div class="ms-auto d-none d-lg-block">

<a href="/fran%C3%A7ais/appointment.php" class="btn btn-primary rounded-pill py-2 px-3">Obtenir un devis</a>

</div>

</div>

</nav>

</div>

</div>

<!-- Navbar End -->

<!-- Middle Area Starts -->