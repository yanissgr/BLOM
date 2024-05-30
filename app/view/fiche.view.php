<main>
    <?php
    if (isset($produit['image'])) {
        $photo = $produit['image'];
    } else {
        $photo = 'Default.png';
    }
    ?>
    <H1><?= $produit["Nom"] ?></H1> <H2><?= $produit['Prix']- ($produit['Prix']*$produit['reduction']/100)?>€</H2>
    <img src="public/images/bouteilles/<?= $photo ?>" alt="<?= ($produit["Nom"]) ?>" class="images">
    
    <p id=description><?= $produit["Description"] ?></p>
    <button>Ajouter au panier</button>
</main>