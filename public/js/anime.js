document.addEventListener('DOMContentLoaded', function () {
    // Vérifiez si le fichier actuel est index.php
    var isIndexPHP = window.location.pathname.endsWith('index.php');

    // Sélectionnez tous les éléments avec la classe anime2
    var elementsAnime2 = document.querySelectorAll('.anime2');

    if (isIndexPHP) {
        setTimeout(function () {
            elementsAnime2.forEach(function (element) {
                element.classList.remove('anime2');
            });
        }, 10000); // 10000 millisecondes = 10 secondes
    } else {
        elementsAnime2.forEach(function (element) {
            element.classList.remove('anime2');
        });
    }

    // Sélectionnez tous les éléments avec la classe anime
    var elementsAnime = document.querySelectorAll('.anime');

    // Fonction de rappel pour l'observateur
    function callback(entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.remove('anime');
                observer.unobserve(entry.target);
            }
        });
    }

    // Créez un nouvel observateur
    var observer = new IntersectionObserver(callback, {
        threshold: 0.1 // L'élément doit être au moins 10% visible pour déclencher le rappel
    });

    // Ajoutez tous les éléments .anime à l'observateur
    elementsAnime.forEach(function (element) {
        observer.observe(element);
    });
});
