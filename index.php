<?php
require_once "Livre.class.php";



ob_start() 
?>


<?php 
$content = ob_get_clean();
$titre = "Bibliothèque MGA";
require "template.php";
?>