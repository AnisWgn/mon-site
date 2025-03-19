<!DOCTYPE html>
<html lang="fr">
<head>
    <Title>Page d'inscription</Title>
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
        <button class="account" id="account">
            <dotlottie-player src="https://lottie.host/72051f11-46f8-47cb-b094-3ea2924fcfa4/TwtZwgHEif.lottie" 
            background="transparent" speed="0.5" style="width: 50px; height: 50px"  loop autoplay>
            </dotlottie-player></button>
        <button id ="mode-btn" class="mode" >Mode 🌚</button>
    </header> 
    <main>
        <div class="login-container">
            <h1 class="login-title">Page d'inscription</h1>
            <form  action="" method="POST">
                
                <div class="input-group">
                    <select name="droits" id="droits">
                        <option>étudiant</option>
                        <option>enseignant</option>
                        <option>entreprise</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="username"><strong>Nom :</strong></label>
                    <input type="text" id="username" name="username" required placeholder="Nom">
                </div>

                <div class="input-group">
                    <label for="Gmail"><strong>Gmail</strong></label>
                    <input type="text" id="Gmail" name="Gmail" required placeholder="Gmail">
                </div>

                <div class="input-group">
                    <label for="password"><strong>Mot de passe :</strong></label>
                    <input type="password" id="password" name="password" required placeholder="Mot de passe"> 
                </div>

                <div class="input-group">
                    <label for="confirm-password"><strong>Confirmez le mot de passe :</strong></label>
                    <input type="password" id="password" name="confirm-password" required placeholder="Confirmez le mot de passe">
                </div>

                <div>
                    <input type="checkbox" id="confirmation" name="confirmation" checked />
                    <label for="confirmation" class="checkbox-label">En vous inscrivant vous acceptez notre <a href="Politique_D'utilisation.html" target="_blank"><strong>politique d'utilisation</strong></a>, notre <a href="Politique_de_confidentialité.html" target="_blank"><strong>politique de confidentialité</strong></a> ainsi que notre <a href="Charte_d'utilisation.html" target="_blank"><strong>charte d'utilisation</strong></a></label>
                </div>

                <button type="submit" class="login-btn">S'inscrire</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 ADALG. Tous droits réservés.</p>
    </footer>
</body>