
<?php

$sablonas = $_POST['sablonas'];
$pavadinimas = $_POST['pavadinimas'];

$vartotojoID = $_POST['name'];

require 'db.php';

$post = "DELETE FROM elementai WHERE vartotojoID = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas' AND sablonas='$sablonas'";

$sql = mysqli_query($conn,$post); 

$post2 = "DELETE FROM links WHERE vartotojas = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas' AND sablonas='$sablonas'";

$sql = mysqli_query($conn,$post2); 

$post3 = "DELETE FROM puslapiuInfo WHERE vartotojas = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas' AND sablonas='$sablonas'";

$sql = mysqli_query($conn,$post3); 

$post4 = "DELETE FROM nuotraukos WHERE vartotojas = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas' AND sablonas='$sablonas'";

$sql = mysqli_query($conn,$post4); 

$post5 = "DELETE FROM segmentai WHERE vartotojoID = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas' AND sablonas='$sablonas'";

$sql = mysqli_query($conn,$post5); 
$post6 = "DELETE FROM sablonas WHERE vartotojas = '$vartotojoID' AND puslapioPavadinimas='$pavadinimas'";

$sql = mysqli_query($conn,$post6); 
echo $post6;
?>
