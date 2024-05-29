<?php
//1 Données
$title = "contact";
$css = "contact.css";

//2 Générer Vue
$currentPage = 'contact';
ob_start();
include 'app/view/contact.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';