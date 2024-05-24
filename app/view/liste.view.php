<main>
    <?php
    foreach ($produits as $produit) : ?>
        <div class="boite">
            <a href="fiche.php?id=<?= $produit['Reference'] ?>"></a>

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
                    <p class="groupe"><?= $produit['Prix'] ?>€</p>
                </div>
        </div>
    <?php endforeach ?>
</main>