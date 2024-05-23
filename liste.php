<?php
session_start();
include 'app/model/ConnexionBDD.php';
require_once 'app/model/liste.model.php';

$search = htmlspecialchars($_GET['barre_recherche']);


$title = "produit";
$css = "liste.css";

$currentPage = 'produit';

$pdo = getDatabaseConnection();
$produits= getProducts($pdo, $search);


ob_start();
include 'app/view/liste.view.php';
$content = ob_get_clean();

// Génération de la page HTML à partir du Layout
include 'app/view/common/layout.php';