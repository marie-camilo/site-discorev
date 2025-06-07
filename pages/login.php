<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Se connecter - Discorev</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/css/cta.css">
</head>

<body>
  <?php
  require_once '../includes/load_env.php';
  loadEnv();
  session_start();
  $csrf_token = bin2hex(random_bytes(32));
  $_SESSION['csrf_token'] = $csrf_token;
  ?>
  <div id="messagePopup" class="message-popup">
    <div class="message-content">
      <i class="fa fa-info-circle"></i>
      <span id="messageText"></span>
      <button id="closePopup">&times;</button>
    </div>
  </div>
  <section class="login-container">
    <!-- Box de Connexion -->
    <div class="login-box">
      <!-- Logo -->
      <div class="login-logo-container">
        <img src="../assets/img/logo-dark.png" alt="Logo Discorev" class="login-logo-img">
      </div>

      <!-- Titre -->
      <h2 class="title">Bienvenue !</h2>

      <!-- Connexion ou Inscription -->
      <div class="auth-options">
        <span class="auth-text active" id="login-btn">Se connecter</span>
        <span class="auth-text" id="signup-btn">S'inscrire</span>
      </div>

      <!-- Formulaire de Connexion -->
      <div class="required-fields-note">
        * Champs requis
      </div>
      <div class="form-container" id="login-form">
        <form action="" method="POST" id="loginForm">
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          </div>
          <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
            <a href="/site-vitrine/pages/forgot-password.html" class="forgot-password-link">Mot de passe oublié ?</a>
          </div>
          <div class="remember-me">
            <input type="checkbox" id="stay-logged">
            <label for="stay-logged">Rester connecté</label>
          </div>
          <button type="submit" class="cta-button-login">Se connecter</button>
        </form>

        <div class="social-login">
          <button class="social-btn google-btn">
            <i class="fa fa-google"></i> Se connecter avec Google
          </button>
          <button class="social-btn linkedin-btn">
            <i class="fa fa-linkedin"></i> Se connecter avec LinkedIn
          </button>
        </div>
      </div>

      <!-- Formulaire d'Inscription -->
      <div class="form-container" id="signup-form" style="display:none;">
        <form action="" method="POST" id="registerForm">
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
          <div class="input-group">
            <label for="firstName">Prénom</label>
            <input type="text" id="firstName" name="firstName" required>
          </div>
          <div class="input-group">
            <label for="lastName">Nom</label>
            <input type="text" id="lastName" name="lastName" required>
          </div>
          <div class="input-group">
            <label for="register-email">Email</label>
            <input type="text" id="register-email" name="email" required>
          </div>
          <div class="input-group">
            <label for="register-password">Mot de passe</label>
            <input type="password" id="register-password" name="password" required>
          </div>
          <div class="input-group">
            <label for="confirm-password">Confirmation du mot de passe</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
          </div>
          <div class="input-group">
            <label for="phoneNumber">Numéro de téléphone</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}">
          </div>
          <div class="input-group">
            <label for="profilePicture">Photo de profil</label>
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
          </div>
          <div class="input-group">
            <label for="accountType">Type de compte</label>
            <select id="accountType" name="accountType" required>
              <option value="">-- Choisir --</option>
              <option value="candidate">Candidat</option>
              <option value="recruiter">Recruteur</option>
            </select>
          </div>
          <div class="checkbox-group">
            <label>
              <input type="checkbox" name="newsletter" id="newsletter"> S'inscrire à la newsletter
            </label>
          </div>
          <div class="checkbox-group">
            <label>
              <input type="checkbox" name="accept-cgu" id="accept-cgu" required> J'accepte les <a href="#">CGU</a>
            </label>
          </div>
          <div>
            <label>
              <input type="checkbox" name="accept-confidentiality" id="accept-confidentiality" required> J'accepte la <a href="#">Politique de confidentialité</a>
            </label>
          </div>
          <button type="submit" class="cta-button-login">S'inscrire</button>
        </form>
      </div>
    </div>
  </section>

  <script>
    document.getElementById('login-btn').addEventListener('click', function() {
      document.getElementById('login-form').style.display = 'block';
      document.getElementById('signup-form').style.display = 'none';
      this.classList.add('active');
      document.getElementById('signup-btn').classList.remove('active');
    });

    document.getElementById('signup-btn').addEventListener('click', function() {
      document.getElementById('signup-form').style.display = 'block';
      document.getElementById('login-form').style.display = 'none';
      this.classList.add('active');
      document.getElementById('login-btn').classList.remove('active');
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Sélectionne tous les champs requis du formulaire
      const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');

      requiredFields.forEach(field => {
        // Récupère l'id de l'input pour trouver le label associé via for="..."
        const id = field.id;
        if (!id) return; // Ignore si l'input n'a pas d'id

        const label = document.querySelector(`label[for="${id}"]`);
        if (label && !label.innerHTML.includes('*')) {
          label.innerHTML += ' <span style="color: red;">*</span>';
        }
      });
    });
  </script>
  <script>
    const API_BASE_URL = "<?= getenv('API_BASE_URL') ?>";

    function showMessage(message, type = 'success') {
      const popup = document.getElementById('messagePopup');
      const messageText = document.getElementById('messageText');
      const messageContent = popup.querySelector('.message-content');
      
      // Supprimer les classes existantes
      messageContent.classList.remove('success', 'error');
      // Ajouter la nouvelle classe
      messageContent.classList.add(type);
      
      messageText.textContent = message;
      popup.style.display = 'block';
      
      // Fermer automatiquement après 5 secondes
      setTimeout(() => {
        messageContent.style.animation = 'slideOut 0.3s ease-out forwards';
        setTimeout(() => {
          popup.style.display = 'none';
          messageContent.style.animation = 'slideIn 0.3s ease-out';
        }, 300);
      }, 5000);
    }

    document.getElementById('closePopup').addEventListener('click', function() {
      const popup = document.getElementById('messagePopup');
      const messageContent = popup.querySelector('.message-content');
      
      messageContent.style.animation = 'slideOut 0.3s ease-out forwards';
      setTimeout(() => {
        popup.style.display = 'none';
        messageContent.style.animation = 'slideIn 0.3s ease-out';
      }, 300);
    });

    document.getElementById('registerForm').addEventListener('submit', async function(e) {
      e.preventDefault();

      const formData = new FormData(this);
      const password = formData.get('password');
      const confirmPassword = formData.get('confirm-password');

      // Validation des mots de passe
      if (password !== confirmPassword) {
        showMessage('Les mots de passe ne correspondent pas', 'error');
        return;
      }

      // Validation de la force du mot de passe
      if (password.length < 8) {
        showMessage('Le mot de passe doit contenir au moins 8 caractères', 'error');
        return;
      }

      try {
        const response = await fetch(`${API_BASE_URL}/auth/register`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(Object.fromEntries(formData))
        });

        const result = await response.json();

        if (response.ok) {
          showMessage('Inscription réussie ! Vous pouvez maintenant vous connecter.', 'success');
          // Basculer vers le formulaire de connexion
          document.getElementById('login-btn').click();
        } else {
          showMessage(result.message || 'Erreur lors de l\'inscription', 'error');
        }
      } catch (error) {
        console.error('Erreur:', error);
        showMessage('Une erreur est survenue lors de l\'inscription', 'error');
      }
    });

    document.getElementById('loginForm').addEventListener('submit', async function(e) {
      e.preventDefault();

      const formData = new FormData(this);
      const email = formData.get('email');
      const password = formData.get('password');

      // Validation basique
      if (!email || !password) {
        showMessage('Veuillez remplir tous les champs requis', 'error');
        return;
      }

      try {
        const response = await fetch(`${API_BASE_URL}/auth/login`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            email: email,
            password: password
          })
        });

        const result = await response.json();

        if (response.ok) {
          const { token, data } = result;
          
          // Stockage sécurisé
          localStorage.setItem('authToken', token);
          localStorage.setItem('user', JSON.stringify(data));

          showMessage('Connexion réussie ! Redirection...', 'success');
          
          // Redirection après un court délai
          // setTimeout(() => {
          //   window.location.href = '/';
          // }, 1500);
          console.log(localStorage);
        } else {
          showMessage(result.message || 'Erreur de connexion', 'error');
        }
      } catch (error) {
        console.error('Erreur:', error);
        showMessage('Une erreur est survenue lors de la connexion', 'error');
      }
    });
  </script>

</body>

</html>