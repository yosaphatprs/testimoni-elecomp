document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');

    console.log('Navbar script loaded'); // Debugging log

    hamburger.addEventListener('click', () => {
        console.log('Hamburger clicked!'); // Debugging log
        menu.classList.toggle('active'); // Toggle 'active' class
    });
});
