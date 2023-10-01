let lastScrollY = 0; // variabile per tenere traccia dell'ultima posizione dello scroll

window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    const currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY) {             // scrolling verso il basso, nascondi navbar
      navbar.classList.add('navbar-hidden');
      navbar.classList.remove('navbar-visible');
    } else {                                        // scrolling verso l'alto, mostra navbar
      navbar.classList.remove('navbar-hidden');
      navbar.classList.add('navbar-visible');
    }

    lastScrollY = currentScrollY; // aggiorna posizione dello scroll
});
