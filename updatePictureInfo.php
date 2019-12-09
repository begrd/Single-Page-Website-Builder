
<?php

$vartotojasID = $_POST['vartotojasID'];
$elID = $_POST['elID'];
$h1Tekstas = $_POST['h1Tekstas'];
$h1Spalva = $_POST['h1Spalva'];
$h1Sriftas = $_POST['h1Sriftas'];
$h1Lygiavimas = $_POST['h1Lygiavimas'];
$h1Dydis = $_POST['h1Dydis'];
$textTekstas = $_POST['textTekstas'];
$textSpalva = $_POST['textSpalva'];
$textLygiavimas = $_POST['textLygiavimas'];
$textSriftas = $_POST['textSriftas'];
$textDydis = $_POST['textDydis'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';
echo $h1Tekstas;
$post = "UPDATE nuotraukos SET h1Spalva = '$h1Spalva',
h1Spalva = '$h1Spalva',
h1Lygiavimas = '$h1Lygiavimas',
h1Sriftas = '$h1Sriftas',
h1TekstoDydis = '$h1Dydis',
h1TekstoTurinys = '$h1Tekstas',
tekstoSpalva = '$textSpalva',
tekstoLygiavimas = '$textLygiavimas',
tekstoSriftas = '$textSriftas',
tekstoDydis = '$textDydis',
tekstoTurinys = '$textTekstas'
WHERE nuotraukosID='$elID' AND vartotojas='$vartotojasID'
AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post); 

?>
