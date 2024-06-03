<main>
    <?php
    $categories = array(
        0 => array('nom' => 'Nos offres', 'image' => 'reduc.svg', 'lien' => 'liste.php?barre_recherche=Reduction', 'id' => 'offres'),
        1 => array('nom' => 'Nos lots', 'image' => '4saisons.png', 'lien' => 'liste.php?barre_recherche=Pack', 'id' => 'lots'),
        2 => array('nom' => 'Catalogue', 'image' => 'unique.png', 'lien' => 'liste.php?barre_recherche=Simple', 'id' => 'unique'),
        3 => array('nom' => 'Points BLOM', 'image' => 'points.svg', 'lien' => 'liste.php?barre_recherche=Point', 'id' => 'points')
    );
    for ($i = 0; $i < 4; $i++) : ?>
        <a href="<?= ($categories[$i]['lien']) ?>">
            <div class="Categorie anime">
                <p><?= ($categories[$i]['nom']) ?></p>
                <div class="line anime"></div>
                <img id='<?= ($categories[$i]['id']) ?>' src="public/images/produit/<?= $categories[$i]['image'] ?>" alt="<?= $categories[$i]['nom'] ?>">

            </div>
        </a>
    <?php endfor ?>

</main>

<script src="public/js/anime.js"></script>