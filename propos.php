<?php
//1 Données
$title = "propos";
$css = "propos.css";

//2 Générer Vue
$currentPage = 'propos';
ob_start();
include 'app/view/propos.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';