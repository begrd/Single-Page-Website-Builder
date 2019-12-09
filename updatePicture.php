
<?php

$vartotojasID = $_POST['vartotojasID'];
$nuotraukosKintamasis = $_POST['nuotraukosKintamasis'];
$elID = $_POST['elID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';

$post = "UPDATE nuotraukos SET nuotrauka='$nuotraukosKintamasis' WHERE nuotraukosID='$elID' AND vartotojas='$vartotojasID' AND puslapioPavadinimas = '$puslapioPav' AND sablonas = '$sablonoPav'";
$sql = mysqli_query($conn,$post); 

?>
