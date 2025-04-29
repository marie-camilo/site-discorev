<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discorev</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/companies.css">
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

<!-- Conteneur principal -->
<div class="content-wrapper">
    <div class="main-content">
        <nav class="company-nav">
            <ul>
                <li><a class="hover-underline-animation left" href="#company">L'entreprise</a></li>
                <li><a class="hover-underline-animation left" href="#equipe">L'équipe</a></li>
                <li><a class="hover-underline-animation left" href="#medias">Médias</a></li>
                <li><a class="hover-underline-animation left" href="offers.php">Les offres <span class="job-count">54</span></a></li>
            </ul>
        </nav>

        <section id="company">
            <h2>L'entreprise</h2>
            <p>Le Petit Jean assure <span class="highlight-blue">un service d’aide à domicile à Grenoble</span> et dans les agglomérations situées dans un rayon de 20 km environ. Créée à l’initiative d’une personne dont l’épouse a été atteinte de la maladie d’Alzheimer, notre société a conservé son caractère familial. Ses intervenants sont sélectionnés pour leurs <span class="highlight-blue">qualités humaines</span> autant que pour leur professionnalisme et leur sens des responsabilités. Tous font preuve d’empathie envers les personnes qu’ils assistent et de rigueur dans l’exercice de leur métier.</p>

            <div class="two-columns">
                <div class="column">
                    <h3>Les valeurs qui nous définissent</h3>
                    <ul>
                        <li>✓ Le respect de nos clients comme de nos salariés</li>
                        <li>✓ L’excellence de nos prestations</li>
                        <li>✓ Le professionnalisme de notre personnel</li>
                        <li>✓ La transparence et l’honnêteté</li>
                    </ul>
                </div>
                <div class="column">
                    <h3>Nos engagements</h3>
                    <ul>
                        <li>✓ Vous écouter pour définir ensemble les prestations</li>
                        <li>✓ Choisir le bon personnel qui saura répondre précisément à vos attentes</li>
                        <li>✓ Vous fournir un contrat clair, sans surprise</li>
                        <li>✓ Garantir votre satisfaction à travers un suivi qualité permanent.</li>
                    </ul>
                </div>
            </div>

            <div class="image-grid">
                <img src="../assets/img/menage.jpg" alt="Photo entreprise 1">
                <img src="../assets/img/repas.jpg" alt="Photo entreprise 2">
                <img src="../assets/img/nourriture.jpg" alt="Photo entreprise 3">
            </div>

            <h2>Les services</h2>
            <p>Les services rendus par Le Petit Jean se sont étendus depuis sa création, et couvrent désormais le champ intégral des services d’aide à domicile : <strong style="color: var(--orangish)">Ménage-Repassage</strong>, <strong style="color: var(--orangish)">Aide aux Seniors</strong> et aux personnes dépendantes et <strong style="color: var(--orangish)">Jardinage</strong>.</p>
        </section>

        <section id="equipe">
            <h2>L'équipe</h2>
            <p>Les <strong>fondateurs</strong> de la société sont des <strong>enfants de personnes âgées et dépendantes</strong>, impliqués dans des vies professionnelle et familiale. Ils connaissent bien les besoins de chaque famille à tout âge de la vie en matière de services d'aide à domicile : <strong>soin aux seniors, ménage, repassage, jardinage</strong>.</p>
            <div class="team-grid">
                <!-- Membre 1 -->
                <div class="team-member">
                    <img src="../assets/img/emilie-dupont.jpg" alt="Émilie Dupont">
                    <h3>Émilie Dupont</h3>
                    <p><strong>Directrice Générale</strong></p>
                    <p>Visionnaire et passionnée, Émilie dirige Azaé avec ambition depuis 10 ans.</p>
                </div>

                <!-- Membre 2 -->
                <div class="team-member">
                    <img src="../assets/img/thomas-leroy.jpg" alt="Thomas Leroy">
                    <h3>Thomas Leroy</h3>
                    <p><strong>Responsable des Opérations</strong></p>
                    <p>Thomas orchestre avec brio l’ensemble des services pour garantir un accompagnement optimal.</p>
                </div>

                <!-- Membre 3 -->
                <div class="team-member">
                    <img src="../assets/img/sophie-martin.jpg" alt="Sophie Martin">
                    <h3>Sophie Martin</h3>
                    <p><strong>Chargée de Relations Clients</strong></p>
                    <p>Proche des bénéficiaires, Sophie veille à leur satisfaction et au bien-être des intervenants.</p>
                </div>
            </div>

            <div class="team-video">
                <h3>Découvrez notre équipe en action :</h3>
                <video controls>
                    <source src="../assets/img/lpj/team-video.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture des vidéos.
                </video>
            </div>
        </section>

        <!-- Section "Pourquoi nous rejoindre ?" -->
        <section id="rejoindre">
            <h2>Pourquoi nous rejoindre ?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <h3>🌱 Formation continue</h3>
                    <p>Développez vos compétences grâce à des formations adaptées.</p>
                </div>
                <div class="benefit-card">
                    <h3>💼 Évolution de carrière</h3>
                    <p>Nous offrons des opportunités de croissance au sein de l'entreprise.</p>
                </div>
                <div class="benefit-card">
                    <h3>❤️ Esprit d'équipe</h3>
                    <p>Un environnement de travail collaboratif et bienveillant.</p>
                </div>
            </div>
        </section>

        <section id="medias">
            <h2>Médias</h2>
            <p>Découvrez en images l’univers et l’énergie chez <strong>Le Petit Jean</strong>.</p>

            <div class="photo-collage">
                <div class="collage-item"><img src="../assets/img/lpj/badiss-lucette-balancelle.jpg" alt="Image 1"></div>
                <div class="collage-item"><img src="../assets/img/lpj/remi-badiss-fauteuil.jpg" alt="Image 2"></div>
                <div class="collage-item"><img src="../assets/img/lpj/pierre-badiss.jpg" alt="Image 3"></div>
                <div class="collage-item"><img src="../assets/img/lpj/pierre-orange.jpg" alt="Image 4"></div>
                <div class="collage-item large"><img src="../assets/img/lpj/lucette-ely-marie.jpg" alt="Image 5"></div>
                <div class="collage-item"><img src="../assets/img/lpj/pierre-badiss-biblio.jpg" alt="Image 6"></div>
            </div>
        </section>
    </div>

    <div class="sidebar-container">
        <aside class="sidebar-infos">
            <h3>A propos</h3>
            <ul>
                <li><i class="fas fa-phone"></i>    09 83 09 35 74</li>
                <li><i class="fas fa-envelope"></i>    contact@lepetitjean-grenoble.com</li>
                <li><i class="fas fa-house"></i>    5 avenue Albert 1er de Belgique,
                        38000 Grenoble</li>
            </ul>
            <a href="#" class="cta-button-transparent">📩 Contacter l'entreprise</a>
        </aside>

        <aside class="sidebar-offers">
            <h3>Dernières offres Le Petit Jean</h3>
            <ul class="job-list">
                    <li>
                        <h4>Auxiliaire de vie sociale (AVS) F/H</h4>
                        <p><i class="fa-solid fa-location-dot"></i> <strong>Localisation :</strong> Grenoble</p>
                        <p><i class="fas fa-tools"></i> <strong>Compétences :</strong> Expérience souhaitée</p>
                        <p><i class="fa-solid fa-file-contract"></i> <strong>Contrat :</strong> Temps partiel - Temps plein</p>
                        <a href="https://lepetitjean-grenoble.com/index.php/recrutement-aide-a-la-personne/" class="apply-btn">Postuler</a>
                    </li>

                    <li>
                        <h4>Jardinier(ère)-paysagiste</h4>
                        <p><i class="fa-solid fa-location-dot"></i> <strong>Localisation :</strong> Grenoble</p>
                        <p><i class="fas fa-tools"></i> <strong>Compétences :</strong> Horticulture et paysage</p>
                        <p><i class="fa-solid fa-file-contract"></i> <strong>Contrat :</strong> Temps partiel</p>
                        <a href="https://lepetitjean-grenoble.com/index.php/recrutement-aide-a-la-personne/" class="apply-btn">Postuler</a>
                    </li>

                    <li>
                        <h4>Homme/Femme Toutes Mains</h4>
                        <p><i class="fa-solid fa-location-dot"></i> <strong>Localisation :</strong> Grenoble</p>
                        <p><i class="fas fa-tools"></i> <strong>Compétences :</strong> Connaissances techniques variées</p>
                        <p><i class="fa-solid fa-file-contract"></i> <strong>Contrat :</strong> Temps partiel</p>
                        <a href="https://lepetitjean-grenoble.com/index.php/recrutement-aide-a-la-personne/" class="apply-btn">Postuler</a>
                    </li>
            </ul>
            <a href="offers.php" class="cta-button-transparent"><i class="fa-solid fa-arrow-right"></i> Voir toutes les offres</a>
        </aside>
    </div>

</div>

<?php include('../includes/footer.php'); ?>
