<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toutes les offres</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/all-offers.css">
    <link rel="stylesheet" href="../assets/css/cta.css">
</head>

<?php include('../includes/header.php'); ?>

<body>
<section class="search-section">
    <h1>Vous aussi, trouvez le <span class="highlight">job idéal</span></h1>

    <div class="search-bar">
        <div class="input-wrapper">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Recherchez par job, mot-clé ou entreprise">
        </div>

        <div class="input-wrapper">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="France">
        </div>

        <select>
            <option selected disabled>Type de job</option>
            <option>CDI</option>
            <option>CDD</option>
            <option>Stage</option>
        </select>
    </div>

    <div class="filters">
        <button><i class="fa-solid fa-house-laptop"></i> Télétravail</button>
        <button><i class="fa-solid fa-users"></i> Professions</button>
        <button><i class="fa-solid fa-building"></i> Secteur</button>
        <button class="black"><i class="fa-solid fa-sliders"></i> Tous les filtres</button>
    </div>
</section>

<section class="cta-banner">
    <img src="https://img.icons8.com/ios/100/calendar--v1.png" alt="Illustration">
    <div class="cta-content">
        <h2>Ne cherchez plus. Créez votre profil et recevez chaque jour notre sélection de jobs faits pour vous.</h2>
        <button class="cta-button">Créer mon profil</button>
    </div>
</section>

<?php include('../includes/footer.php'); ?>

</body>
</html>
