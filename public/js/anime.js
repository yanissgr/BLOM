document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez tous les éléments avec la classe initiale
    var elements = document.querySelectorAll('.anime');
    
    // Itérez sur chaque élément et ajoutez des classes
    elements.forEach(function(element) {
        element.classList.remove('anime');
    });
});