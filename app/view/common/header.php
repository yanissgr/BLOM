<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/<?= $css ?>" rel="stylesheet">
    <title><?php echo ($title) ?></title>

    <link href="public/css/header.css" rel="stylesheet">
    <link href="public/css/footer.css" rel="stylesheet">

    <!-------------------------------------------------POLICES--------------------------------------------------->

    <script>
        (function(d) {
            var config = {
                    kitId: 'ogb6cko',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!---Nom de la police : 
    
    font-family: "a-otf-ud-reimin-pr6n", sans-serif;

    font-family: "athena", sans-serif;----------->




    <!-------------------------------------------------POLICES FIN--------------------------------------------------->

</head>

<body>
    <header>

        <nav>
            <div>

                <input class="checkbox" type="checkbox" />

                <div class="menu">
                    <span class="line1"></span>
                    <span class="line2"></span>
                    <span class="line3"></span>
                </div>


            </div>

            <a class="logo" href="accueil.php"><img src="public/images/header/Logo_Blom.svg" alt="logo"></a>


            <ul>
                <li>

                    <form class="recherche" action="liste.php" method="get">
                        <input type="text" name="barre_recherche" value="" placeholder="Blonde, fruitée ...">
                        <button type="submit"><img src="public/images/header/loupe.svg" alt="Loop"></button>
                    </form>

                </li>

                <li class="panier">
                    <a href=""><img src="public/images/header/panier.svg" alt="panier"></a>
                </li>
            </ul>
        </nav>
        <!-------------------------------------------------Menu Burger--------------------------------------------------->


        <div class="menu_burger ferme">

            <ul class="panneau">

                <li>
                    <a href="accueil.php">Accueil</a>
                </li>

                <li>
                    <a href="produit.php">Produits</a>
                </li>

                <li>
                    <a href="propos.php">A Propos</a>
                </li>

                <li>
                    <a href="brasseries.php">Nos Brasseries</a>
                </li>

                <li>
                    <a href="contact.php">Nous Contacter</a>
                </li>

                <li>
                    <a href="compte.php">Votre Compte</a>
                </li>

            </ul>


            <div class="promo">
                <a class="promo1" href="">
                    <img src="public/images/accueil/4saisons.png">
                    <h2>Collection Saisonnière</h2>
                    <p><b>29.99€</b> -10%</p>
                </a>

                <a class="promo2" href="">
                    <img src="public/images/accueil/doree.svg">
                    <h2>BLOM Dorée</h2>
                    <p><b>8.25€</b> -25%</p>
                </a>
            </div>


        </div>





    </header>

    <script src="public/js/header.js"></script>