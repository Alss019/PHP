<?php
$bdd = new PDO('mysql:host=localhost:3306;dbname=produits', 'admin','1234', 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>