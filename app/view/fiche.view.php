<main>
    <?php
    if (isset($produit['image'])) {
        $photo = "2" . $produit['image'];
    } else {
        $photo = 'Default.png';
    }
    ?>

    <img src="public/images/bouteilles/<?= $photo ?>" alt="<?= ($produit["Nom"]) ?>" class="images anime">

    <div class="infos anime">

        <H1><?= $produit["Nom"] ?></H1>

        <div class="line"></div>

        <div class="middle">
            <H2 id=prix><?= $produit['Prix'] - ($produit['Prix'] * $produit['reduction'] / 100) ?> €</H2>

            <form>
                <button>Ajouter au panier</button>

                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </form>
        </div>
        <div class="line"></div>

        <p id=description><?= $produit["Description"] ?></p>


    </div>
</main>

<script src="public/js/anime.js"></script>