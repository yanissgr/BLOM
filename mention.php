<?php
//1 Données
$title = "Mentions Légales";
$css = "cookies.css";

//2 Générer Vue
$currentPage = 'mention';
ob_start();
include 'app/view/mention.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';