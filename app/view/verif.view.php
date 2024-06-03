<main>

    <div class="container">
        <img src="public/images/header/Logo_Blom.svg" alt="">
        <h2>Avez-vous plus de 18 ans ?</h2>
        <button id="OUI">OUI</button>
        <button id="NON">NON</button>
    </div>

</main>

<script>
document.getElementById("OUI").addEventListener("click", function() {
            // Enregistrez l'état de vérification de l'âge
            localStorage.setItem("ageVerified", "true");
            // Redirigez l'utilisateur vers la page d'accueil ou la page précédente
            window.location.href = "accueil.php"; // Remplacez par la page souhaitée
        });

        document.getElementById("NON").addEventListener("click", function() {
            // Redirigez l'utilisateur vers une page d'information ou affichez un message
            alert("Vous devez avoir plus de 18 ans pour accéder à ce site.");
            window.location.href = "https://www.google.com"; // Redirige vers un autre site ou page
        });
</script>