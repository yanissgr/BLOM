<main>

    <div class="container">
        <img src="public/images/header/Logo_Blom.svg" alt="">
        <h2>Avez-vous plus de 18 ans ?</h2>
        <button id="OUI">OUI</button>
        <button id="NON">NON</button>
        <p id="message" style="color: red; display: none;">Vous devez avoir plus de 18 ans pour accéder à ce site.</p>
    </div>

</main>

<script>
 document.getElementById("OUI").addEventListener("click", function() {
        window.location.href = "index.php";
    });

    document.getElementById("NON").addEventListener("click", function() {
        document.getElementById("message").style.display = "block";
    });
</script>