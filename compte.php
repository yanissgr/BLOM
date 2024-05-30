<?php
//1 Données
$title = "compte";
$css = "compte.css";

//2 Générer Vue
$currentPage = 'compte';
ob_start();
include 'app/view/compte.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';