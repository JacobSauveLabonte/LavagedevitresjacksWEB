<?php include("header.php"); ?>
<!-- Inner Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container text-center py-5">
<h1 class="display-2 text-white mb-4 animated slideInDown">Nouveau Client ?</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb justify-content-center mb-0">
<li class="breadcrumb-item"><a href="/fran%C3%A7ais/index.php">Maison</a></li>
<li class="breadcrumb-item text-primary" aria-current="page">Nouveau Client ?</li>
</ol>
</nav>
</div>
</div>
<!-- Inner Page Header End -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h3 class="mb-4 fs-5 fw-medium text-primary">Nouveau Client ?</h3>
<p class="mb-4">Si vous êtes un nouveau client de Lavage de vitres Jacks, veuillez remplir le formulaire ci-dessous et joindre 4 photos de votre propriété (une par façade). Ces informations nous permettront de vous fournir une estimation rapide.
</br>
</br>
Nous conserverons les photos pour votre dossier afin de faciliter la prise de rendez-vous pour la saison et les années à venir. N'hésitez pas à nous contacter par téléphone au 514-464-6206 si nécessaire.
</br>
</br>              
Si vous envisagez Lavage de vitres Jacks pour la première fois, nous apprécierions que vous preniez un moment pour remplir le formulaire ci-dessous et joindre quatre photos, chacune présentant un côté différent de votre propriété. La fourniture de ces informations essentielles nous permettra de vous fournir rapidement une estimation personnalisée adaptée à vos besoins spécifiques.
</br></br>   
Rassurez-vous, les photos que vous fournirez seront conservées en toute sécurité dans votre dossier, ce qui nous permettra de planifier plus facilement des rendez-vous non seulement pour cette saison mais aussi pour les années à venir. Si vous avez besoin d'une assistance immédiate, n'hésitez pas à nous contacter directement au 514-464-6206. Merci d'avoir choisi Jack's Window Washing. Nous sommes impatients de vous offrir nos services de nettoyage exceptionnels !
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
<option value="" selected>Service dont vous avez besoin</option>
<option value="A">Lavage des vitres extérieures + nettoyage des gouttières (option la plus populaire)</option>
<option value="B">Nettoyage des vitres extérieures</option>
<option value="C">Lavage des vitres intérieures et extérieures</option>
<option value="D">Nettoyage de gouttières</option>
</select>
<label for="service">Service dont vous avez besoin</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required /> <!-- chg. -->
<label for="name">Votre nom *</label> 	<!-- chg. -->
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="email" class="form-control" id="email" name="email" placeholder="Votre email" />
<label for="email">Votre email</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="number" name="number" placeholder="Pas de téléphone. XXX-XXX-XXXX" required /> <!-- chg. -->
<label for="number">Exemple 514-444-4444 *</label> <!-- chg. -->
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="address" name="address" placeholder="Votre adresse" />
<label for="address">Votre adresse</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="city" name="city" placeholder="Ta ville" />
<label for="city">Ta ville</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="province" name="province" placeholder="Votre province" />
<label for="province">Votre province</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="text" class="form-control" id="country" name="country" placeholder="Votre pays" />
<label for="country">Votre pays</label>
</div>
</div>
<div class="col-md-4">
<div class="form-floating">
<input type="date" class="form-control" id="date" name="date" placeholder="Votre date souhaitée" />
<label for="date date">Votre date souhaitée</label>
</div>
</div>
<div class="col-md-6 ">
<div class="form-floating">
<textarea class="form-control" placeholder="Votre message (le cas échéant) (longueur maximale de 300 caractères)" 
id="message" name="message" style="height: 210px"></textarea> <!-- chg. -->
<label for="message">Votre message (le cas échéant) (longueur maximale de 300 caractères)</label> <!-- chg. -->
</div>
</div>
<div class="col-md-6 ">
<label class="mb-3"><strong>Une photo par façade de votre maison</strong>&nbsp;<small class="error">( .webp, .jpg, .jpeg, .png autorisés )</small></label>
<div>
<input type="file" id="photo1" name="photo1" class="form-control mb-3" />
<input type="file" id="photo2" name="photo2" class="form-control mb-3" />
<input type="file" id="photo3" name="photo3" class="form-control mb-3" />
<input type="file" id="photo4" name="photo4" class="form-control mb-3" />
</div>
</div>
<div class="col-sm-2">
<div class="form-floating">
<img id="ImgCaptcha" src="../form/captcha.php" alt="Code de sécurité" title="Code de sécurité" 
name="ImgCaptcha" />  <a href="javascript:void(0);" title="Rafraîchir" 
onclick="javascript:RefreshCaptcha();" style="text-decoration: none !important;"><img 
src="../form/reload.gif" alt="Rafraîchir" /></a>
</div>
</div>
<div class="col-sm-3">
<div class="form-floating">
<input type="number" class="form-control" id="captcha" name="captcha" placeholder="Retapez le code de sécurité" />
<label for="captcha">Retapez le code de sécurité</label>
</div>
</div>
<div class="col-12">
<button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="BtnSubmit">SOUMETTRE MAINTENANT</button>
<input type="hidden" id="frompage" name="frompage" value="New Client" />
<input type="hidden" id="language" name="language" value="french" />
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