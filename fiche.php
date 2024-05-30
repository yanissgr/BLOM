<?php
//1 Données
session_start();
include 'app/model/ConnexionBDD.php';
require_once 'app/model/fiche.model.php';

$produitID = htmlspecialchars($_GET['id']);

$pdo = getDatabaseConnection();




$produit = GetProdByRef($pdo, $produitID);


$title = $produit["Nom"];
$css = "fiche.css";

//2 Générer Vue
$currentPage = $produit["Nom"];
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
