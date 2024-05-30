<?php
//1 Données
$title = "verif";
$css = "verif.css";

//2 Générer Vue
$currentPage = 'verif';
ob_start();
include 'app/view/verif.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';