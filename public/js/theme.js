// Funzione per settare il tema nel cookie
function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    document.cookie = `theme=${theme}; path=/; max-age=${60 * 60 * 24 * 365}`; // Salva il tema per un anno
}

// Funzione per leggere il tema dal cookie
function getThemeFromCookie() {
    const cookie = document.cookie.split('; ').find(row => row.startsWith('theme='));
    return cookie ? cookie.split('=')[1] : null;
}

// Funzione per determinare il tema preferito dal browser (default dark o light)
function getPreferredTheme() {
    if (window.matchMedia) {
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        return prefersDarkScheme.matches ? 'dark' : 'light';
    }
    return 'light';
}

// Leggi il tema dal cookie al caricamento della pagina
const savedTheme = getThemeFromCookie();
if (savedTheme) {
    setTheme(savedTheme);
} else {
    // Se non esiste un tema salvato nei cookie, imposta il tema in base alla preferenza del browser
    const browserTheme = getPreferredTheme();
    setTheme(browserTheme);
}

// Aggiungi l'evento per il cambio di tema dal dropdown
const themeRadios = document.querySelectorAll('.theme-controller');
themeRadios.forEach(radio => {
    radio.addEventListener('change', function () {
        const theme = radio.value;
        setTheme(theme);
    });
});

// Imposta il tema iniziale in base al valore selezionato nel dropdown
const initialTheme = getThemeFromCookie() || getPreferredTheme();
document.documentElement.setAttribute('data-theme', initialTheme);
