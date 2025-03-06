document.addEventListener("DOMContentLoaded", function () {
    const modeBtn = document.getElementById("mode-btn");
    const themes = ["light", "dark", "orange"]; // List of available themes
    let currentThemeIndex = localStorage.getItem('themeIndex') || 0; // Default to the first theme

    // Set the initial theme
    setTheme(themes[currentThemeIndex]);

    modeBtn.addEventListener("click", () => {
        // Cycle to the next theme
        currentThemeIndex = (currentThemeIndex + 1) % themes.length;
        const newTheme = themes[currentThemeIndex];
        
        // Apply the new theme
        setTheme(newTheme);
        
        // Save the current theme index to localStorage
        localStorage.setItem('themeIndex', currentThemeIndex);
    });

    function setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        updateButtonText(theme);
    }

    function updateButtonText(theme) {
        // Update the button text based on the current theme
        const themeIcons = {
            light: "🌞",
            dark: "🌚",
            orange: "😼",
        };
        modeBtn.textContent = `Mode ${themeIcons[theme]}`;
    }

    // Existing event listeners for navigation
    const home = document.getElementById("home-btn");
    home.addEventListener("click", () => {
        window.location.href = "Home.html";
    });

    const hub = document.getElementById("hub-btn");
    hub.addEventListener("click", () => {
        window.location.href = "Hub.html";
    });

    const faq = document.getElementById("faq-btn");
    faq.addEventListener("click", () => {
        window.location.href = "FAQ.html";
    });

    const contact = document.getElementById("contact-btn");
    contact.addEventListener("click", () => {
        window.location.href = "Contact.html";
    });

    const connection = document.getElementById("connection-btn");
    connection.addEventListener("click", () => {
        const filePath = "file:///C:/Users/p2k77/OneDrive/Documents/App_Cv/Script/Page_De_Connection/Page_De_Connection.html";
        window.open(filePath, "_blank");
    });

    const inscription = document.getElementById("inscription-btn");
    inscription.addEventListener("click", () => {
        window.location.href = "file:///C:/Users/p2k77/OneDrive/Documents/App_Cv/Script/Page_De_Connexion";
        window.open("filepath", "_blank");
    });

    const motdepasse = document.getElementById("forgot-password");
    motdepasse.addEventListener("click", () => {
        window.location.href = "Mot_de_Passe_oublié.html";
    });

});