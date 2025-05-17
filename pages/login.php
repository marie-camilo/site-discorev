<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Se connecter - Discorev</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>

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
    <div class="form-container" id="login-form">
      <form action="#" method="POST">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
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
      <form action="#" method="POST">
        <div class="input-group">
          <label for="username">Nom d'utilisateur</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="email-signup">Email</label>
          <input type="email" id="email-signup" name="email-signup" required>
        </div>
        <div class="input-group">
          <label for="password-signup">Mot de passe</label>
          <input type="password" id="password-signup" name="password-signup" required>
        </div>
        <div class="input-group">
          <label for="password-confirm">Confirmer le mot de passe</label>
          <input type="password" id="password-confirm" name="password-confirm" required>
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
</body>
</html>
