<main>
    <?php
    $categories = array(
        0 => array('nom' => 'Nos offres', 'image' => 'reduction.png', 'lien' =>'liste.php?barre_recherche=Reduction'),
        1 => array('nom' => 'Nos lots', 'image' => 'pack.png', 'lien' =>'liste.php?barre_recherche=Pack'),
        2 => array('nom' => 'Produits individuels', 'image' => 'unique.png', 'lien' =>'liste.php?barre_recherche=Simple'),
        3 => array('nom' => 'Points BLOM', 'image' => 'points.png', 'lien' =>'liste.php?barre_recherche=Point')
    );
    for ($i = 0; $i < 4; $i++) : ?>
        <a href="<?= ($categories[$i]['lien']) ?>">
            <div class=Categorie>
                <p><?= ($categories[$i]['nom']) ?></p>
                <div class=images>
                    <img src="public/images/produit/<?= $categories[$i]['image'] ?>" alt="<?= $categories[$i]['nom'] ?>">
                </div>
            </div>
        </a>
    <?php endfor ?>

</main>