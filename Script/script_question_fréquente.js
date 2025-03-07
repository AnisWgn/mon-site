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
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("home-btn")?.addEventListener("click", () => window.location.href = "home.html");
        document.getElementById("hub-btn")?.addEventListener("click", () => window.location.href = "index.html");
        document.getElementById("faq-btn")?.addEventListener("click", () => window.location.href = "question_fréquente.html");
        document.getElementById("contact-btn")?.addEventListener("click", () => window.location.href = "contact.html");
        document.getElementById("connexion-btn")?.addEventListener("click", () => window.location.href = "Page_De_Connexion.html");
        document.getElementById("inscription-btn")?.addEventListener("click", () => window.location.href = "Page_De_Inscription.html");
});
        document.getElementById("forgot-password")?.addEventListener("click", () => window.location.href = "Mot_De_Passe_Oublié.html");
});
