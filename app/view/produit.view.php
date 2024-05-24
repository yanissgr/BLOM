
<main>
    <?php
    $categories = array(
        0 => array('nom' => 'Nos offres','image' => 'reduction.png'),
        1 => array('nom' => 'Nos lots', 'image' => 'pack.png'),
        2 => array('nom' => 'Produits individuels', 'image' => 'unique.png'),
        3 => array('nom' => 'Points BLOM', 'image' => 'points.png')
    );
    for ($i = 0; $i < 4; $i++): ?>
        <div class=Categorie>
            <p><?=($categories[$i]['nom']) ?></p>
            <div class= images>
                <img src="public/images/produit/<?= $categories[$i]['image']?>" alt="<?= $categories[$i]['Prix']?>">
            </div>
        </div>
    <?php endfor ?>
    <p>feur</p>

</main>