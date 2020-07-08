<?php
require_once("config.php");


$sql = new Sql();

$neto = new Usuario();

$neto->loadById(3);

echo $neto;
 
?>