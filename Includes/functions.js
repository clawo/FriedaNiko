//Header
const toggleButton = document.querySelector('.menu-toggle');
const navMenu = document.getElementById('nav-menu');

toggleButton.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});