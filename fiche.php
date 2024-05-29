<?php
//1 Données
session_start();
include 'app/model/ConnexionBDD.php';
require_once 'app/model/liste.model.php';

$produitID = htmlspecialchars($_GET['id']);

$pdo = getDatabaseConnection();

$stmt= $pdo->prepare('SELECT distinct produit.* FROM produit WHERE produit.Reference= :id');
$stmt->bindParam(':id', $produitID, PDO::PARAM_INT);
$stmt->execute();
$produit=$stmt->fetch();


$title = $produit["Nom"];
$css = "fiche.css";

//2 Générer Vue
$currentPage = $produit["Nom"];
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';