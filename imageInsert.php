
<?php

$nuotrauka = $_POST['nuotrauka'];
$vieta = $_POST['vieta'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
$vartotojas = $_POST['vartotojas'];
require 'db.php';

$post = "UPDATE sablonas SET nuotrauka='$nuotrauka' WHERE vieta='$vieta' AND vartotojas='$vartotojas' AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post); 
echo $post;
?>
