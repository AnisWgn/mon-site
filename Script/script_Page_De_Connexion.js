document.addEventListener("DOMContentLoaded", function () {
    const modeBtn = document.getElementById("mode-btn");
    const themes = ["light", "dark", "orange"]; // List of available themes
    let currentThemeIndex = parseInt(localStorage.getItem('themeIndex')) || 0; // Default to the first theme

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
            orange: "😼"
        };
        modeBtn.textContent = `Mode ${themeIcons[theme]}`;
    }

<<<<<<< HEAD
    // Existing event listeners for navigation
    const home = document.getElementById("home-btn");
    home.addEventListener("click", () => {
        window.location.href = "home.html";
    });

    const hub = document.getElementById("hub-btn");
    hub.addEventListener("click", () => {
        window.location.href = "index.html";
    });

    const faq = document.getElementById("faq-btn");
    faq.addEventListener("click", () => {
        window.location.href = "question_fréquente.html";
    });

    const contact = document.getElementById("contact-btn");
    contact.addEventListener("click", () => {
        window.location.href = "contact.html";
    });

    const connexion = document.getElementById("connexion-btn");
    connexion.addEventListener("click", () => {
        window.location.href = "Page_De_Connexion.html";
    });

    const inscription = document.getElementById("inscription-btn");
    inscription.addEventListener("click", () => {
        window.location.href = "Page_De_Inscription.html";
    });
});

const motdepasse = document.getElementById("forgot-password");
motdepasse.addEventListener("click", () => {
    window.location.href = "Mot_De_Passe_Oublié.html";
});
=======
    // Navigation event listeners
    const navigationButtons = [
        { id: "home-btn", url: "index.html" },
        { id: "hub-btn", url: "Hub.html" },
        { id: "faq-btn", url: "FAQ.html" },
        { id: "contact-btn", url: "Contact.html" },
        { id: "connexion-btn", url: "Page_De_Connexion.html" },
        { id: "inscription-btn", url: "Page_Inscription.html" },
        { id: "forgot-password", url: "Mot_de_Passe_oublié.html" }
    ];

    navigationButtons.forEach(({ id, url }) => {
        const element = document.getElementById(id);
        if (element) {
            element.addEventListener("click", () => window.location.href = url);
        }
    });
});
>>>>>>> 16b8a6ba89f35640ca665557a34af7c671f60fd2
