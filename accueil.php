<?php
//1 Données
$title = "accueil";
$css = "accueil.css";

//2 Générer Vue
$currentPage = 'accueil';
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';