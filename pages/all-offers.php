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
    <button data-filter="remote"><i class="fa-solid fa-house-laptop"></i> Télétravail</button>
    <button data-filter="profession"><i class="fa-solid fa-users"></i> Professions</button>
    <button data-filter="sector"><i class="fa-solid fa-building"></i> Secteur</button>
    <button class="black" data-filter="all"><i class="fa-solid fa-sliders"></i> Tous les filtres</button>
    </div>

</section>

<section class="cta-banner">
    <img src="https://img.icons8.com/ios/100/calendar--v1.png" alt="Illustration">
    <div class="cta-content">
        <h2>Ne cherchez plus. Créez votre profil et recevez chaque jour notre sélection de jobs faits pour vous.</h2>
        <button class="cta-button">Créer mon profil</button>
    </div>
</section>

<section id="offers-list-container" class="offers-list-container">
  <div class="container">
    <div id="offers-list" class="offers-list">
      
  <!-- Les offres seront ajoutées ici dynamiquement -->
    </div>
  </div>
</section>


<script>
  const offersContainer = document.getElementById("offers-list");

  let currentFilters = {
    keyword: "",
    location: "",
    type: "",
    custom: "" // pour "Télétravail", "Secteur", etc.
  };

  function renderOffers(data) {
    offersContainer.innerHTML = "";

    if (!data.length) {
      offersContainer.innerHTML = "<p>Aucune offre trouvée.</p>";
      return;
    }

    data.forEach(offer => {
        const card = document.createElement("div");
        card.className = "offer-card";

        const companyName = offer.company?.companyName || "Entreprise inconnue";
        const location = offer.location?.replace(/^_/, "") || "Non spécifiée";
        const employmentType = offer.employment_type?.toUpperCase() || "Non spécifié";
        const salary = offer.salary_range || "Non indiqué";
        const remote = offer.remote ? "Télétravail possible" : "";
        const publicationDate = new Date(offer.publication_date).toLocaleDateString();
        const description = offer.description?.replace(/^_/, "") || "";
        const requirements = offer.requirements ? offer.requirements.split("-").filter(r => r.trim()).map(r => `<li>${r.trim()}</li>`).join("") : "";

        card.innerHTML = `
        <div class="offer-title">${offer.title}</div>
        <div class="offer-meta">
            <strong>${companyName}</strong> — ${location} | ${employmentType}
        </div>
        <div class="offer-extra">
            <span>${salary}</span> ${remote ? "• " + remote : ""} • Publié le ${publicationDate}
        </div>
        <p>${description}</p>
        ${requirements ? `<ul class="requirements">${requirements}</ul>` : ""}
        `;


      offersContainer.appendChild(card);
    });
  }

  function buildQueryURL() {
    const params = new URLSearchParams();

    if (currentFilters.keyword) params.append("keyword", currentFilters.keyword);
    if (currentFilters.location) params.append("location", currentFilters.location);
    if (currentFilters.type && currentFilters.type !== "Type de job") params.append("type", currentFilters.type);
    if (currentFilters.custom) params.append("filter", currentFilters.custom);

    const base = (params.toString().length > 0) ? "http://localhost:3000/job_offers/filter" : "http://localhost:3000/job_offers";
    return `${base}?${params.toString()}`;
  }

  function fetchJobs() {
    fetch(buildQueryURL())
      .then(res => res.json())
      .then(res => {
        console.log(res.data);
        renderOffers(res.data);})
      .catch(err => {
        offersContainer.innerHTML = "<p>Erreur lors du chargement des offres.</p>";
        console.error(err);
      });
  }

  // Initial load
  window.addEventListener("DOMContentLoaded", () => {
    fetchJobs();
  });

  // Input listeners
  document.querySelectorAll('.input-wrapper input')[0].addEventListener("input", e => {
    currentFilters.keyword = e.target.value;
    fetchJobs();
  });

  document.querySelectorAll('.input-wrapper input')[1].addEventListener("input", e => {
    currentFilters.location = e.target.value;
    fetchJobs();
  });

  document.querySelector('select').addEventListener("change", e => {
    currentFilters.type = e.target.value;
    fetchJobs();
  });

  // Filter button click listeners
  document.querySelectorAll(".filters button").forEach(btn => {
    btn.addEventListener("click", () => {
      const filterValue = btn.getAttribute("data-filter");

      // Toggle filter logic
      currentFilters.custom = (currentFilters.custom === filterValue) ? "" : filterValue;

      // Optionnel : changer visuellement le bouton actif
      document.querySelectorAll(".filters button").forEach(b => b.classList.remove("active"));
      if (currentFilters.custom) {
        btn.classList.add("active");
      }

      fetchJobs();
    });
  });
</script>

<?php include('../includes/footer.php'); ?>

</body>
</html>
