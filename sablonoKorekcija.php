
<?php

$elementas = $_POST['elementoID'];
$tekstoDydis = $_POST['tekstoDydis'];
$tekstoLygiavimas =$_POST['tekstoLygiavimas'];
$vartotojas=$_POST['vartotojas'];
$tekstoSriftas =$_POST['tekstoSriftas'];
$tekstoSpalva =$_POST['tekstoSpalva'];
$tekstoVidus = $_POST['tekstoVidus'];
$puslapioPav =$_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';
echo $tekstoVidus;
$post = "UPDATE sablonas SET elTekstoDydis='$tekstoDydis',elLygiavimas = '$tekstoLygiavimas',
elSriftas='$tekstoSriftas',elSpalva='$tekstoSpalva',elTekstoTurinys='$tekstoVidus' 
WHERE vieta='$elementas' AND puslapioPavadinimas='$puslapioPav' AND vartotojas='$vartotojas'";
$sql = mysqli_query($conn,$post); 

?>