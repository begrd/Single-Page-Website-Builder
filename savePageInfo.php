<?php

$vartotojoID = $_POST['vartotojoID'];
$sablonoID = $_POST['sablonoID'];
$pavadinimas = $_POST['pavadinimas'];

require 'db.php';

$post = "INSERT INTO puslapiuInfo (puslapioPavadinimas, sablonas, vartotojas) VALUES ('$pavadinimas','$sablonoID','$vartotojoID')";
$sql = mysqli_query($conn,$post); 

?>