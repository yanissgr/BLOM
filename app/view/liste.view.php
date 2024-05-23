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

            <figure class="photo"><img src="public/images/bouteilles/<?= $photo ?>" alt="photo de <?= $produit['Nom'] ?>">
                <div class="infos">
                    <p class="nom">
                        <?= $produit['Nom'] ?>
                    </p>
                    <p class="groupe"><?= $produit['Description'] ?></p>
                </div>
        </div>
    <?php endforeach ?>
</main>