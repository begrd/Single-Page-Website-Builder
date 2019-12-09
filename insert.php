
<?php

$stSkaicius = $_POST['stSkaicius'];
$aukstis = $_POST['aukstis'];
$segmentoID = $_POST['segmentoID'];
$fonoSpalva = $_POST['fonoSpalva'];
$vartotojoID = $_POST['vartotojoID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';

$post = "INSERT INTO segmentai (segmentoID, aukstis, stulpeliuSK, fonoSpalva,vartotojoID,sablonas,puslapioPavadinimas) VALUES ('$segmentoID','$aukstis','$stSkaicius','$fonoSpalva','$vartotojoID','$sablonoPav','$puslapioPav')";
$sql = mysqli_query($conn,$post); 

?>
