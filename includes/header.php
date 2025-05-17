<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title></title>
</head>

<header>
    <nav class="navbar navbar-expand-lg px-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                <img src="../assets/img/logo-png.png" alt="logo Discorev" style="height: 40px"/>
                <span class="ms-2 fw-bold">Discorev</span>
            </a>

            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="../pages/all-offers.php"
                                id="offersDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                        >Emplois</a
                        >
                        <ul class="dropdown-menu" aria-labelledby="offersDropdown">
                            <li><a class="dropdown-item" href="#">Offres d'emplois</a></li>
                            <li><a class="dropdown-item" href="#">Intérim</a></li>
                            <li><a class="dropdown-item" href="#">Déposer mon CV</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="entreprisesDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                        >Entreprises</a
                        >
                        <ul class="dropdown-menu" aria-labelledby="entreprisesDropdown">
                            <li><a class="dropdown-item" href="#">Toutes les entreprises</a></li>
                            <li><a class="dropdown-item" href="#">Entreprises qui recrutent</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="recruteurDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                        >Accès recruteur</a
                        >
                        <ul class="dropdown-menu" aria-labelledby="recruteurDropdown">
                            <li><a class="dropdown-item" href="#">Diffuser ma première offre</a></li>
                            <li><a class="dropdown-item" href="#">Déjà membre</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="/pages/login.php">
                            Mon compte
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
</header>
