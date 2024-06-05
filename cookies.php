<?php
//1 Données
$title = "cookies";
$css = "cookies.css";

//2 Générer Vue
$currentPage = 'cookies';
ob_start();
include 'app/view/cookies.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';