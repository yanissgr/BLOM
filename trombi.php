<?php
//1 Données
$title = "trombi";
$css = "trombi.css";

//2 Générer Vue
$currentPage = 'trombi';
ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';