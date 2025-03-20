<!DOCTYPE html>
<html lang="fr">
<head>
    <Title>Contact</Title>
    <meta charset="UTF-8" data-theme="light">
    <script src="Script/script.js" defer></script>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<style>
            .header-page1 {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 20px;
            padding-bottom: 20px;
            display: inline-block;
            transition: box-shadow 0.5s ease-in-out;
            opacity: 1; /* Empêche toute réduction d'opacité */
            color: var(--header-page-text-color);
            box-shadow:0px 2px 0px 0px var(--header-page-hover-box-shadow);
        }

            .header-main-page{
            box-shadow:none;
        }
</style>
    <header>
        <button class="header-btn"><img src="image/logo.png" alt="Logo" class="logo" id ="hub-btn"></button>
        <button class="header-btn"><p class="header-page" id ="home-btn">Page d'accueil</p></button>
        <button class="header-btn"><p class="header-page" id ="faq-btn">Question fréquente</p></button>
        <button class="header-btn"><p class="header-page1" id ="contact-btn">Contact</p></button>
        <button class="header-btn"><p class="header-main-page" id ="connexion-btn">Connexion</p></button>
        <button class="account" id="account">
            <dotlottie-player src="https://lottie.host/72051f11-46f8-47cb-b094-3ea2924fcfa4/TwtZwgHEif.lottie" 
            background="transparent" speed="0.5" style="width: 50px; height: 50px"  loop autoplay>
            </dotlottie-player></button>
        <button id ="mode-btn" class="mode" >Mode 🌚</button> 
    </header>
    
    <div class="create-container">
        
    </div>