document.addEventListener("DOMContentLoaded", function() {
    // Vérifiez si l'utilisateur a déjà passé la vérification de l'âge
    if (!localStorage.getItem("ageVerified")) {
        console.log("Redirection vers la page de vérification de l'âge.");
        // Redirigez vers la page de vérification de l'âge
        window.location.href = "verif.php";
    } else {
        console.log("Utilisateur déjà vérifié.");
    }
});


document.addEventListener("DOMContentLoaded", function() {
    const checkbox = document.querySelector('.checkbox');
    const panneau = document.querySelector('.panneau');
    const menuBurger = document.querySelector('.menu_burger');
    const promo1 = document.querySelector('.promo1');
    const promo2 = document.querySelector('.promo2');

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
            }, 200); // Délai de 200 millisecondes
        }
    }

    checkbox.addEventListener('change', toggleClass);
});



