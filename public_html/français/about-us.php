<?php include("header.php"); ?>

<!-- HÉROS / EN-TÊTE DE PAGE -->
<div class="page-header position-relative d-flex align-items-center justify-content-center text-center">
  <div class="overlay"></div>
  <div class="container text-white py-5 wow fadeInDown" data-wow-delay="0.1s">
    <h1 class="display-2 fw-bold text-white mb-3 animated slideInDown">À propos de nous</h1>
    <nav aria-label="breadcrumb" class="animated fadeInUp">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="/index.php">Accueil</a></li>
        <li class="breadcrumb-item active text-primary" aria-current="page">À propos</li>
      </ol>
    </nav>
  </div>
</div>

<!-- SECTION À PROPOS -->
<section class="about-section container-xxl py-5">
  <div class="row align-items-center g-5">
    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
      <img src="/img/nacelle.jpg" class="img-fluid rounded-4 shadow-lg" alt="Équipe de Lavage de vitres Jacks">
    </div>
    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
      <p class="fs-5 fw-medium text-primary mb-2">À propos de nous</p>
      <h2 class="display-6 fw-bold mb-4">Nous offrons bien plus qu’un simple nettoyage — nous livrons l’excellence.</h2>
      <p class="lead mb-4">Chez <strong>Lavage de vitres Jacks inc.</strong>, nous allons au-delà du verre — nous sommes vos partenaires pour des espaces propres, lumineux et accueillants.</p>
      <p class="mb-4">Notre équipe qualifiée veille à ce que chaque détail brille, grâce à des outils modernes, des produits écologiques et un engagement envers la sécurité et la satisfaction.</p>
      <ul class="list-unstyled fs-5 mb-4">
        <li><i class="fas fa-shield-alt text-primary me-2"></i> <strong>Entièrement assurés</strong> pour une tranquillité d’esprit totale</li>
        <li><i class="fas fa-certificate text-primary me-2"></i> <strong>Opérateurs de nacelle certifiés</strong></li>
      </ul>
      <a href="/français/services.php" class="btn btn-gradient rounded-pill py-3 px-5 shadow-lg">Utiliser nos services</a>
    </div>
  </div>
</section>

<!-- SECTION ÉQUIPE -->
<div class="container-xxl py-5">
  <div class="container">

    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
      <p class="fs-5 fw-medium text-primary">Notre équipe</p>
      <h1 class="display-5 mb-5">Nos experts, prêts à vous aider</h1>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Membre 1 -->
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="/img/team-1.png" alt="William Sauvé">
          <h5>William Sauvé</h5>
          <span class="text-primary">Co-propriétaire</span>

          <!-- Réseaux sociaux -->
          <!--
          <ul class="team-social list-inline mt-3">
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="https://www.linkedin.com/in/william-sauv%C3%A9-50b70483/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
          -->

        </div>
      </div>

      <!-- Membre 2 -->
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item text-center rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="/img/team-2.png" alt="Jacob Sauvé-Labonté">
          <h5>Jacob Sauvé-Labonté</h5>
          <span class="text-primary">Co-propriétaire</span>

          <!-- Réseaux sociaux -->
          <!--
          <ul class="team-social list-inline mt-3">
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-square" href="https://www.linkedin.com/in/jacob-sauv%C3%A9-labont%C3%A9-05261827b/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
          -->

        </div>
      </div>

    </div>
  </div>
</div>

<?php include("footer.php"); ?>
