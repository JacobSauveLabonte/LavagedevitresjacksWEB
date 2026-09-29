<?php include("header.php"); ?>

<!-- Inner Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/français/index.php">Maison</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Inner Page Header End -->

<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Nos Services</h1>
        </div>

        <div class="row g-4">

            <?php
            $services = [
                [
                    "img" => "../img/img1.jpg",
                    "alt" => "Lavage de vitres",
                    "title" => "Lavage de vitres impeccable",
                    "bullets" => [
                        "Résultats sans traces",
                        "Techniques professionnelles",
                        "Expertise depuis 2019",
                        "Transparence et luminosité optimales"
                    ],
                    "link" => "/français/realisations.php"
                ],
                [
                    "img" => "../img/img2.jpg",
                    "alt" => "Nettoyage sous pression",
                    "title" => "Nettoyage sous pression",
                    "bullets" => [
                        "Élimination des saletés incrustées",
                        "Restauration de l’éclat des surfaces",
                        "Idéal pour patios, murs, allées",
                        "Nettoyage puissant et sécuritaire"
                    ],
                    "link" => "/français/realisationspressurewash.php"
                ],
                [
                    "img" => "../img/img3.jpg",
                    "alt" => "Entretien des gouttières",
                    "title" => "Entretien des gouttières",
                    "bullets" => [
                        "Prévention des blocages",
                        "Drainage optimal garanti",
                        "Protection contre les dommages d’eau",
                        "Service sécuritaire et efficace"
                    ],
                    "link" => "/français/realisationsgutter.php"
                ],
                [
                    "img" => "../img/Nett1.JPG",
                    "alt" => "Nettoyage commercial et industriel",
                    "title" => "Nettoyage Commercial & Industriel",
                    "bullets" => [
                        "Solutions fiables et professionnelles",
                        "Pour bureaux et grandes installations",
                        "Espaces propres et sécuritaires",
                        "Service adapté à vos besoins"
                    ],
                    "link" => "/français/realisationscleaning.php"
                ],
            ];

            foreach($services as $service):
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 wow fadeInUp">
                <div class="service-item h-100 d-flex flex-column position-relative">
                    <div class="service-text rounded flex-grow-1 d-flex flex-column">
                        <img src="<?= $service['img'] ?>" class="img-fluid rounded-top" alt="<?= $service['alt'] ?>">
                        <div class="p-5 flex-grow-1">
                            <h5 class="mb-3"><?= $service['title'] ?></h5>
                            <?php foreach($service['bullets'] as $bullet): ?>
                                <p class="mb-2">• <?= $bullet ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?= $service['link'] ?>">
                            Voir Nos Réalisations <i class="bi bi-chevron-double-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="mt-4">
            <p class="text-center">
                Nos services sont conçus pour offrir des résultats professionnels et durables.  
                Contactez-nous pour un entretien extérieur de qualité supérieure.
            </p>
        </div>

    </div>
</div>

<?php include("footer.php"); ?>
