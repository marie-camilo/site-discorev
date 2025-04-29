<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discorev</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cta.css">
</head>
<body>
<?php include('includes/header.php'); ?>

<section class="hero">
    <div class="hero-left">
        <h1>L'emploi social, <br>à portée de main.</h1>
        <h2>
            Construisez votre carrière dans le <span class="highlight-blue">social</span>
            et accédez à des offres d’emploi <span class="highlight-orange">proche</span>
            de chez vous avec ou sans expérience.
        </h2>

        <div class="search-bar">
            <div class="search-input-container">
                <i class="fa fa-search"></i>
                <label>
                    <input type="text" placeholder="Job, secteur, mots-clés ...">
                </label>
                <span class="separator"></span>
                <i class="fa fa-map-marker"></i>
                <label>
                    <input class="location" type="text" placeholder="Lieu">
                </label>
            </div>
            <button class="search-btn">Rechercher</button>
        </div>
    </div>

    <div class="hero-right">
        <img src="assets/img/accueil.png" alt="Illustration bureau">
    </div>
</section>

<section class="explore-companies">
    <h2>Explorer les entreprises</h2>
    <h4>Découvrez des entreprises qui recrutent activement dans le secteur social.</h4>

    <div class="company-grid">
        <div class="company-card">
            <img src="assets/img/petit-jean.jpg" alt="Entreprise 1">
            <h3>Le Petit Jean</h3>
            <p>Une équipe engagée pour un impact social fort.</p>
            <a class="cta-link" href="pages/lpj.php">+18 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/azae.jpg" alt="Entreprise 2">
            <h3>Azaé</h3>
            <p>Découvrez leurs opportunités et valeurs.</p>
            <a class="cta-link" href="pages/azae.php">+54 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/peit-fils.jpg" alt="Entreprise 3">
            <h3>Petit Fils</h3>
            <p>Rejoignez une entreprise qui partage vos valeurs.</p>
            <a class="cta-link" href="#">+32 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/senior-compagnie.png" alt="Entreprise 3">
            <h3>Senior Compagnie</h3>
            <p>Rejoignez une entreprise qui partage vos valeurs.</p>
            <a class="cta-link" href="#">+142 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/azae.jpg" alt="Entreprise 1">
            <h3>Azaé</h3>
            <p>Découvrez leurs opportunités et valeurs.</p>
            <a class="cta-link" href="#">+54 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/petit-jean.jpg" alt="Entreprise 2">
            <h3>Le Petit Jean</h3>
            <p>Une équipe engagée pour un impact social fort.</p>
            <a class="cta-link" href="#">+18 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/peit-fils.jpg" alt="Entreprise 3">
            <h3>Petit Fils</h3>
            <p>Rejoignez une entreprise qui partage vos valeurs.</p>
            <a class="cta-link" href="#">+32 offres</a>
        </div>

        <div class="company-card">
            <img src="assets/img/senior-compagnie.png" alt="Entreprise 3">
            <h3>Senior Compagnie</h3>
            <p>Rejoignez une entreprise qui partage vos valeurs.</p>
            <a class="cta-link" href="#">+142 offres</a>
        </div>
    </div>
    <a href="#" class="cta-button">Voir plus d'entreprises</a>
</section>

<section class="find-job">
    <h2>Trouvez votre job en toute simplicité</h2>
    <h4>Avec Discorev, tout devient plus clair.</h4>

    <div class="find-job-row">
        <div class="find-job-image">
            <img src="assets/img/bureau.jpg" alt="Suivi des candidatures">
        </div>
        <div class="find-job-text">
            <h2>Suivez votre candidature en temps réel</h2>
            <p>Ne restez plus dans le flou ! Postulez et suivez l’avancée de vos candidatures à chaque étape. Vous êtes informé dès qu’il y a du nouveau.</p>
            <a href="#" class="cta-button-transparent">Explorer les offres</a>
        </div>
    </div>

    <div class="find-job-row">
        <div class="find-job-text">
            <h2>Des offres d’emploi sans surprise</h2>
            <p>Fini les annonces vagues ! Salaire, conditions de travail, avantages… Vous avez toutes les infos pour choisir en toute confiance.</p>
            <a href="#" class="cta-button-transparent">Chercher un job</a>
        </div>
        <div class="find-job-image">
            <img src="assets/img/bureau.jpg" alt="Offres transparentes">
        </div>
    </div>

    <div class="find-job-row">
        <div class="find-job-image">
            <img src="assets/img/bureau.jpg" alt="Recruteurs transparents">
        </div>
        <div class="find-job-text">
            <h2>Des recruteurs à votre écoute</h2>
            <p>Découvrez des entreprises qui recrutent activement et qui partagent leurs valeurs, leurs processus et leurs opportunités en toute transparence.</p>
            <a href="#" class="cta-button-transparent">Découvrir les entreprises</a>
        </div>
    </div>
</section>

<section class="user-choice">
    <h2>Que vous soyez recruteur ou candidat, notre plateforme vous accompagne.</h2>

    <div class="choice-container">
        <!-- Carte Employeur -->
        <a href="pages/employeurs.html" class="choice-card employer">
            <i class="fa fa-briefcase"></i>
            <h3>Je suis employeur</h3>
            <p>Publiez des offres et recrutez les meilleurs talents facilement.</p>
            <span class="cta-button">Accéder au service</span>
        </a>

        <!-- Carte Candidat -->
        <a href="pages/candidats.html" class="choice-card candidate">
            <i class="fa fa-user"></i>
            <h3>Je suis candidat</h3>
            <p>Recherchez un emploi et déposez votre CV en quelques clics.</p>
            <span class="cta-button">Trouver un job</span>
        </a>
    </div>
</section>

<section class="competences">
    <h2>Trouver un job facilement avec Discorev</h2>
    <p>Notre plateforme vous aide à décrocher l'emploi qui correspond à votre profil, avec des outils et un accompagnement dédié.</p>

    <div class="features-grid">
        <div class="feature feature-offset-top">
            <i class="fa fa-search"></i>
            <h3>Accès à des offres ciblées</h3>
            <p>Des opportunités adaptées à votre expérience et votre localisation.</p>
        </div>

        <div class="feature">
            <i class="fa fa-bolt"></i>
            <h3>Candidature simplifiée</h3>
            <p>Postulez en un clic, avec ou sans CV.</p>
        </div>

        <div class="feature">
            <i class="fa fa-check-circle"></i>
            <h3>Employeurs de confiance</h3>
            <p>Des entreprises engagées et vérifiées dans le secteur social.</p>
        </div>

        <div class="feature feature-offset-bottom">
            <i class="fa fa-users"></i>
            <h3>Communauté engagée</h3>
            <p>Échangez avec des professionnels du secteur et partagez votre expérience.</p>
        </div>
    </div>

    <a href="#" class="cta-button">Explorer les offres</a>
</section>


<section class="download-app">
    <div class="app-mockup">
        <img src="assets/img/mockup-app.png" alt="Aperçu de l'application Discorev">
    </div>

    <div class="app-infos">
        <h1>Votre carrière, toujours à portée de main</h1>
        <p>Accédez aux meilleures offres d'emploi où que vous soyez et postulez en un clic.</p>
        <div class="app-buttons">
            <a href="#" class="cta-button">
                <i class="fa-brands fa-google-play"></i> Google Play
            </a>
            <a href="#" class="cta-button">
                <i class="fa-brands fa-app-store-ios"></i> App Store
            </a>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
</body>
</html>