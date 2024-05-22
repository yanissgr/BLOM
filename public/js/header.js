const checkbox = document.querySelector('.checkbox')

const panneau = document.querySelector('.panneau')

const menuBurger = document.querySelector('.menu_burger')

function toggleClass() {
    if (checkbox.checked) {
        menuBurger.classList.add('ouvert');
        panneau.classList.add('ouvert');
    } else {
        menuBurger.classList.remove('ouvert');
        panneau.classList.remove('ouvert');

    }
}

checkbox.addEventListener('change', toggleClass);