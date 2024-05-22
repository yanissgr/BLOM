<?php
//1 Données
$title = "produit";
$css = "produit.css";

//2 Générer Vue
$currentPage = 'produit';
ob_start();
include 'app/view/produit.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';