<?php

$elementoID = $_POST['elementoID'];
$elementoTipas = $_POST['elementoTipas'];
$elementoTekstoTurinys = $_POST['elementoTekstoTurinys'];
$elementoLygiavimas = $_POST['elementoLygiavimas'];
$elementoSriftas = $_POST['elementoSriftas'];
$elementoTekstoDydis = $_POST['elementoTekstoDydis'];
$elementoSpalva = $_POST['elementoSpalva'];
$sectionID =$_POST['sectionID'];
$vartotojoID = $_POST['vartotojoID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';

$post = "INSERT INTO elementai (elSpalva, elLygiavimas, elSriftas,elTekstoDydis,
elTekstoTurinys, elTipas,elUnikalusID,sectionID,vartotojoID,puslapioPavadinimas,sablonas) VALUES 
('$elementoSpalva','$elementoLygiavimas','$elementoSriftas','$elementoTekstoDydis','$elementoTekstoTurinys',
'$elementoTipas','$elementoID','$sectionID','$vartotojoID','$puslapioPav','$sablonoPav')";
$sql = mysqli_query($conn,$post); 

?>
