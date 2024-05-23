// Fonction pour désactiver tous les inputs pendant un délai
function desactiverInputsTemporairement() {
    var inputs = document.querySelectorAll('.input');
    inputs.forEach(function(input) {
        input.disabled = true;
    });
    setTimeout(function() {
        inputs.forEach(function(input) {
            input.disabled = false;
        });
    }, 4000); // Délai de 4 secondes
}


// Fonction pour changer le input checked
function changerSlide() {
    // Réinitialise l'intervalle
    clearInterval(interval);
    
    // Désactive tous les inputs
    desactiverInputsTemporairement();
    
    // Sélectionne tous les input avec la classe "input"
    var inputs = document.querySelectorAll('.input');
    
    // Recherche l'input qui est actuellement checked
    var checkedInputIndex = -1;
    inputs.forEach(function(input, index) {
        if (input.checked) {
            checkedInputIndex = index;
        }
    });
    
    // Désélectionne l'input actuel
    inputs[checkedInputIndex].checked = false;
    
    // Calcule l'index du prochain input à sélectionner
    var nextIndex = (checkedInputIndex + 1) % inputs.length;
    
    // Sélectionne le prochain input
    inputs[nextIndex].checked = true;
    
    // Redémarre l'intervalle
    interval = setInterval(changerSlide, 6000);
}

// Appelle la fonction changerSlide toutes les 6 secondes en boucle
var interval = setInterval(changerSlide, 6000);

// Écoute les événements de clic sur les inputs
var inputs = document.querySelectorAll('.input');
inputs.forEach(function(input) {
    input.addEventListener('click', function() {
        // Désactive tous les inputs
        desactiverInputsTemporairement();
        
        // Réinitialise l'intervalle
        clearInterval(interval);
        
        // Redémarre l'intervalle
        interval = setInterval(changerSlide, 6000);
    });
});
