document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById('themeToggle');
    const html = document.documentElement;
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    function setTheme(mode) {
        if (mode === 'dark') {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            iconSun.classList.remove('hidden');
            iconMoon.classList.add('hidden');
        } else {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            iconSun.classList.add('hidden');
            iconMoon.classList.remove('hidden');
        }
    }

    // Obtener la preferencia del usuario o la del sistema
    const storedTheme = localStorage.getItem('theme') ||
        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

    // Aplicar el tema al cargar la página
    setTheme(storedTheme);

    // Manejar cambio de tema al hacer clic
    themeToggle.addEventListener('click', () => {
        const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
        setTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });
});
