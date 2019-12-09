
<?php

$elementas = $_POST['elementoID'];
$paragrafoElementas = $_POST['kitoElementoID'];
$trecioElID = $_POST['trecioElID'];
$ketvirtoElID = $_POST['ketvirtoElID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';

$post = "DELETE FROM elementai WHERE elUnikalusID='$elementas' OR elUnikalusID='$paragrafoElementas' AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post); 
$post2 = "DELETE FROM nuotraukos WHERE nuotraukosID='$trecioElID' AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post2);
$post3 = "DELETE FROM links WHERE elementoID='$ketvirtoElID' AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post3);
?>