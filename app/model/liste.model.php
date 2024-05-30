<?php

function getProducts(PDO $pdo, $search){
    $stmt = $pdo->prepare('SELECT distinct produit.* FROM produit  Join associer on produit.reference=associer.reference join mot_clé on associer.Mot_clé=mot_clé.mot_clé WHERE mot_clé.mot_clé LIKE :search order by produit.prix desc, produit.nom;');
    $toSearch = '%' . $search . '%'; 
    $stmt->bindParam(':search', $toSearch, PDO::PARAM_STR);
    $stmt->execute();
    $produits=$stmt->fetchAll();
    return $produits;
}
function GetProdPoint(PDO $pdo)
{
    $stmt = $pdo->prepare('SELECT distinct * FROM produit WHERE produit.AchetablePoint= 1');
    $stmt->execute();
    $produits = $stmt->fetchAll();
    return $produits;
}

function GetProdSolo(PDO $pdo)
{
    $stmt = $pdo->prepare('SELECT distinct produit.* FROM produit  Join associer on produit.reference=associer.reference join mot_clé on associer.Mot_clé=mot_clé.mot_clé WHERE mot_clé.mot_clé = "simple" order by produit.prix desc, produit.nom;');
    $stmt->execute();
    $produits=$stmt->fetchAll();
    return $produits;
}
function GetProdPack(PDO $pdo)
{
    $stmt = $pdo->prepare('SELECT distinct produit.* FROM produit  Join associer on produit.reference=associer.reference join mot_clé on associer.Mot_clé=mot_clé.mot_clé WHERE mot_clé.mot_clé = "Pack" order by produit.prix desc, produit.nom;');
    $stmt->execute();
    $produits=$stmt->fetchAll();
    return $produits;
}

