<!DOCTYPE html>
<html lang="fr">
<head>
    <Title>Page d'inscription</Title>
    <meta charset="UTF-8" data-theme="light">
    <script src="Script/script.js" defer></script>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <header>
        <button class="header-btn"><img src="image/logo.png" alt="Logo" class="logo" id ="hub-btn"></button>
        <button class="header-btn"><p class="header-page" id ="home-btn">Page d'accueil</p></button>
        <button class="header-btn"><p class="header-page" id ="faq-btn">Question fréquente</p></button>
        <button class="header-btn"><p class="header-page" id ="contact-btn">Contact</p></button>
        <button class="header-btn"><p class="header-main-page" id ="connexion-btn">Connexion</p></button>
        <button id ="mode-btn" class="mode" >Mode 🌚</button>
    </header>
    <main>
        <div class="login-container">
            <h1 class="login-title">Page d'inscription</h1>
            <form  action="register.php" method="POST">
                <div class="input-group">
                    <label for="username"><strong>Nom :</strong></label>
                    <input type="text" id="username" name="username" placeholder="Nom"required>
                </div>

                <div class="input-group">
                    <label for="email"><strong>email</strong></label>
                    <input type="email" id="Gmail" name="email" placeholder="email"required>
                </div>

                <div class="input-group">
                    <label for="password"><strong>Mot de passe :</strong></label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe"required>
                </div>

                <div class="input-group">
                    <label for="confirm-password"><strong>Confirmez le mot de passe :</strong></label>
                    <input type="password" id="password" name="confirm-password" placeholder="Confirmez le mot de passe">
                </div>

                <button type="submit" class="login-btn">S'inscrire</button>
            </form>
        </div>
    </main>
    <!--<script>
        let mail=document.getElementById("Gmail");
        console.log(mail.value)
        if(mail.value.includes("@gmail.com")) {
        }
        else {
            alert("Veuillez entrer un Gmail valide");
        }
    </script>-->
    <footer>
        <p>&copy; 2025 ADALG. Tous droits réservés.</p>
    </footer>
</body>