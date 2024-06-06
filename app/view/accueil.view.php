<main>

    <h1 class="titre anime">Découvrez nos dernières créations !</h1>


    <input id="checkbox1" type="checkbox" name="slides" onclick="toggleCheckboxes(this, 'checkbox2')">
    <img class="slide-img" src="public/images/accueil/doree.svg">
    <a class="bouton anime" href="produit.php">Commander dès maintenant</a>


    <input id="checkbox2" type="checkbox" name="slides" onclick="toggleCheckboxes(this, 'checkbox1')" checked>
    <video class="slide-img" autoplay loop muted playsinline>
        <source src="public/images/accueil/pub.mp4" type="video/mp4">
    </video>


    <script src="public/js/accueil.js"></script>

</main>