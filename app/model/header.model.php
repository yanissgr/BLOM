<?php

function GetReduc(PDO $pdo)
{
    //selectionne tous les produit en reduc
    $stmt = $pdo->prepare('SELECT distinct produit.* FROM produit WHERE produit.reduction>0  order by produit.reduction, produit.nom');
    $stmt->execute();
    $produit = $stmt->fetchAll();
    return $produit;
}
