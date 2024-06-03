document.addEventListener('DOMContentLoaded', function() {
    // Vérifiez si le fichier actuel est index.php
    var isIndexPHP = window.location.pathname.endsWith('index.php');
    
    // Sélectionnez tous les éléments avec la classe anime2
    var elementsAnime2 = document.querySelectorAll('.anime2');
    
    // Si c'est index.php, ajoutez un délai de 10 secondes avant de retirer la classe anime2
    if (isIndexPHP) {
        setTimeout(function() {
            elementsAnime2.forEach(function(element) {
                element.classList.remove('anime2');
            });
        }, 10000); // 10000 millisecondes = 10 secondes
    } else {
        // Sinon, retirez immédiatement la classe anime2
        elementsAnime2.forEach(function(element) {
            element.classList.remove('anime2');
        });
    }

    // Sélectionnez tous les éléments avec la classe anime
    var elementsAnime = document.querySelectorAll('.anime');
    
    // Retirez immédiatement la classe anime
    elementsAnime.forEach(function(element) {
        element.classList.remove('anime');
    });
});