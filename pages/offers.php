<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offres d'emploi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/offers.css">
    <link rel="stylesheet" href="../assets/css/cta.css">
</head>

<?php include('../includes/header.php'); ?>

<!-- Bandeau Entreprise -->
<div class="company-banner">
    <img src="../assets/img/lpj-banner.jpg" alt="Bandeau entreprise">
    <div class="overlay"></div>

    <div class="company-header">
        <div class="company-logo">
            <a href="https://lepetitjean-grenoble.com/" target="_blank">
                <img style="background-color: white" src="../assets/img/petit-jean.png" alt="Logo de l'entreprise">
            </a>
        </div>
        <div class="company-info">
            <h1>Le Petit Jean</h1>
            <p><i class="fa-solid fa-briefcase"></i> Secteur : Services d'aide à domicile</p>
            <p><i class="fa-solid fa-map-pin"></i> Localisation : Grenoble, France</p>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <main class="main-content">
        <nav class="company-nav">
            <ul>
                <li><a class="hover-underline-animation left" href="lpj.php">L'entreprise</a></li>
                <li><a class="hover-underline-animation left" href="lpj.php">L'équipe</a></li>
                <li><a class="hover-underline-animation left" href="lpj.php">Médias</a></li>
                <li><a class="hover-underline-animation left" href="offers.php">Les offres <span class="job-count">54</span></a></li>
            </ul>
        </nav>

        <div class="search-filter">
            <label>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Rechercher une offre..." class="search-input">
            </label>
            <label>
                <i class="fa-solid fa-filter"></i>
                <select class="filter-select">
                    <option value="">Toutes les catégories</option>
                    <option value="CDI">Temps plein</option>
                    <option value="CDI">Temps partiel</option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="Stage">Stage</option>
                </select>
            </label>
            <button class="cta-button">Rechercher</button>
        </div>

        <h2 style="margin-bottom: 1.5rem">Jobs <span class="job-count">54</span></h2>

        <div class="job-list">
            <div class="job-card">
                <h4>Auxiliaire de vie sociale (AVS) F/H</h4>
                <p>Temps partiel - Temps plein</p>
                <button class="cta-button">Postuler</button>
            </div>

            <div class="job-card">
                <h4>Jardinier(ère)-paysagiste</h4>
                <p>Temps partiel</p>
                <button class="cta-button">Postuler</button>
            </div>

            <div class="job-card">
                <h4>Homme/Femme Toutes Mains</h4>
                <p>Temps partiel</p>
                <button class="cta-button">Postuler</button>
            </div>
        </div>
    </main>
    <aside class="sidebar-container">
        <div class="sidebar-upload">
            <h3>Déposez votre CV</h3>
            <p>Ajoutez votre CV pour être contacté par les recruteurs.</p>
            <button class="cta-button">Ajouter mon CV</button>
        </div>
    </aside>
</div>

<?php include('../includes/footer.php'); ?>
