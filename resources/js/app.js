import './bootstrap';

// resources/js/app.js

console.log('JavaScript is working!');
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-link');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah perilaku default link

            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({
                behavior: 'smooth' // Mengaktifkan smooth scroll
            });
        });
    });
});
