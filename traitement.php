<!DOCTYPE html>
<html lang="fr">
<head>
    <Title>Page de connexion</Title>
    <meta charset="UTF-8" data-theme="light">
    <script src="Script/script.js" defer></script>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <header>
        <button class="header-btn"><img src="image/logo.png" alt="Logo" class="logo" id ="hub-btn"></button>
        <button class="header-btn"><p class="header-page" id ="home-btn">Page d'accueil</p></button>
        <button class="header-btn"><p class="header-page" id ="faq-btn">Question fréquente</p></button>
        <button class="header-btn"><p class="header-page" id ="contact-btn">Contact</p></button>
        <button class="header-btn"><p class="header-main-page" id ="connexion-btn">Connexion</p></button>
        <dotlottie-player src="https://lottie.host/95785f1b-5a37-4ec5-945a-a00f85032478/TmPkyyjm2k.lottie" 
            background="transparent" speed="1" style="width: 70px; height: 70px" loop autoplay>
        </dotlottie-player>
        <button id ="mode-btn" class="mode" >Mode 🌚</button>
    </header>
    <main>
        <div class="traitement-container">
            <h1 class="login-title">Réinitialisation du mot de passe</h1>
            <p>Nouv vous avons envoyé un email afin de réinitialiser votre mot de passe</p>
            <p><a href="Page_De_Connexion.html" class="contact"> Retourner à la page de connexion </a></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 ADALG. Tous droits réservés.</p>
    </footer>
</body>