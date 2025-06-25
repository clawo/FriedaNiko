// Warten bis DOM geladen ist
document.addEventListener('DOMContentLoaded', () => {
  // === BURGER-MENÜ ===
  const toggleButton = document.querySelector('.menu-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (toggleButton && navMenu) {
    toggleButton.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
  }

  // === ACCORDION ===
  const buttons = document.querySelectorAll('.accordion-button');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const isOpen = button.classList.contains('active');

      // Alle schließen
      buttons.forEach(btn => {
        btn.classList.remove('active');
        btn.nextElementSibling.style.maxHeight = null;
        btn.nextElementSibling.classList.remove('open');
      });

      // Falls nicht offen, diesen öffnen
      if (!isOpen) {
        button.classList.add('active');
        content.classList.add('open');
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });

  // === SMOOTH SCROLL FÜR NAV-LINKS ===
  document.querySelectorAll('#nav-menu a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetID = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetID);
      if (targetSection) {
        targetSection.scrollIntoView({
          behavior: 'smooth'
        });
      }

      // Menü nach Klick automatisch schließen (mobil)
      navMenu.classList.remove('active');
    });
  });

  // === "NACH OBEN"-BUTTON ===
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  if (scrollToTopBtn) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        scrollToTopBtn.classList.add("show");
      } else {
        scrollToTopBtn.classList.remove("show");
      }
    });

    scrollToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  }
});
