const checkbox = document.querySelector('.checkbox')

const panneau = document.querySelector('.panneau')

const menuBurger = document.querySelector('.menu_burger')

const promo = document.querySelector('.promo')

function toggleClass() {
    if (checkbox.checked) {
        menuBurger.classList.add('ouvert');
        menuBurger.classList.remove('ferme');
        panneau.classList.add('ouvert');
        promo.classList.add('ouvert');
    } else {
        menuBurger.classList.remove('ouvert');
        panneau.classList.remove('ouvert');
        promo.classList.remove('ouvert');

        setTimeout(() => {
            menuBurger.classList.add('ferme');
        }, 200); // Délai de 5 secondes (5000 millisecondes)

    }
}

checkbox.addEventListener('change', toggleClass);