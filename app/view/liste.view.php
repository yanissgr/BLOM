<main>
    <?php
    foreach ($produits as $produit) : ?>
        <a href="fiche.php?id=<?= $produit['Reference'] ?>">
            <div class="boite">


                <?php
                if (isset($produit['image'])) {
                    $photo = $produit['image'];
                } else {
                    $photo = 'Default.png';
                }
                ?>

                <img src="public/images/bouteilles/<?= $photo ?>" alt="photo de <?= $produit['Nom'] ?>" class="images">
                <div class="infos">
                    <p class="nom">
                        <?= $produit['Nom'] ?>
                    </p>
                    <p class="groupe"><?= $produit['Prix']- ($produit['Prix']*$produit['reduction']/100)?> €</p>
                </div>
            </div>
        </a>
    <?php endforeach ?>
</main>