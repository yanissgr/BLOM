const checkbox = document.querySelector('.checkbox')

const panneau = document.querySelector('.panneau')

const menuBurger = document.querySelector('.menu_burger')

const promo1 = document.querySelector('.promo1')

const promo2 = document.querySelector('.promo2')

function toggleClass() {
    if (checkbox.checked) {
        menuBurger.classList.add('ouvert');
        menuBurger.classList.remove('ferme');
        panneau.classList.add('ouvert');
        promo1.classList.add('ouvert');
        promo2.classList.add('ouvert');
    } else {
        menuBurger.classList.remove('ouvert');
        panneau.classList.remove('ouvert');
        promo1.classList.remove('ouvert');
        promo2.classList.remove('ouvert');


        setTimeout(() => {
            menuBurger.classList.add('ferme');
        }, 200); // Délai de 5 secondes (5000 millisecondes)

    }
}

checkbox.addEventListener('change', toggleClass);