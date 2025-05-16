//Header
const toggleButton = document.querySelector('.menu-toggle');
const navMenu = document.getElementById('nav-menu');

toggleButton.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});

//accordion
document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.accordion-button');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const isOpen = button.classList.contains('active');

      buttons.forEach(btn => {
        btn.classList.remove('active');
        btn.nextElementSibling.style.maxHeight = null;
        btn.nextElementSibling.classList.remove('open');
      });

      if (!isOpen) {
        button.classList.add('active');
        content.classList.add('open');
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });
});


