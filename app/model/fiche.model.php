<?php

function GetProdByRef(PDO $pdo, $produitID)
{
    $stmt = $pdo->prepare('SELECT distinct produit.* FROM produit WHERE produit.Reference= :id');
    $stmt->bindParam(':id', $produitID, PDO::PARAM_INT);
    $stmt->execute();
    $produit = $stmt->fetch();
    return $produit;
}