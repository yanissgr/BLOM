<?php
//1 Données
$title = "Charte de confidentialité";
$css = "cookies.css";

//2 Générer Vue
$currentPage = 'confi';
ob_start();
include 'app/view/confi.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';