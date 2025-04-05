const nav = document.getElementById('nav');
const button = document.getElementById('toggleButton');
const boxShadow = document.getElementById('box_shadow');

function openMenu() {
    nav.classList.remove('max-md:-translate-x-full');
    boxShadow.classList.remove('hidden');
}

function closeMenu() {
    nav.classList.add('max-md:-translate-x-full');
    boxShadow.classList.add('hidden');
}

function toggleMenu() {
    if (nav.classList.contains('max-md:-translate-x-full')) {
        openMenu();
    } else {
        closeMenu();
    }
}

button.addEventListener('click', toggleMenu);

// Cerrar menú al hacer clic fuera
boxShadow.addEventListener('click', closeMenu);

// Asegurar que el menú se cierre correctamente en pantallas grandes
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        nav.classList.remove('max-md:-translate-x-full');
        boxShadow.classList.add('hidden');
    } else {
        closeMenu();
    }
});
