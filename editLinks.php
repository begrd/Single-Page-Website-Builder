
<?php

$vartotojasID = $_POST['vartotojasID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav =$_POST['sablonoPav'];
$nuoroduDydis =$_POST['nuoroduDydis'];
$facebookLink =$_POST['facebookLink'];
$instagramLink = $_POST['instagramLink'];
$behanceLink =$_POST['behanceLink'];
$elementoID = $_POST['elementoID'];

$ikonuSpalva = $_POST['ikonuSpalva'];

require 'db.php';
$post = "UPDATE links SET facebook = '$facebookLink',instagram='$instagramLink',
behance='$behanceLink',dydis='$nuoroduDydis', spalva='$ikonuSpalva' WHERE elementoID='$elementoID'
 AND puslapioPavadinimas = '$puslapioPav' AND sablonas='$sablonoPav' AND vartotojas = '$vartotojasID'";
$sql = mysqli_query($conn,$post); 

?>