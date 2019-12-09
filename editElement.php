
<?php

$elementas = $_POST['elementoID'];
$tekstoDydis = $_POST['tekstoDydis'];
$tekstoLygiavimas =$_POST['tekstoLygiavimas'];
$tekstoSriftas =$_POST['tekstoSriftas'];
$tekstoSpalva =$_POST['tekstoSpalva'];
$tekstoVidus = $_POST['tekstoVidus'];
$puslapioPav =$_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
require 'db.php';
echo $tekstoVidus;
$post = "UPDATE elementai SET elTekstoDydis='$tekstoDydis',elLygiavimas = '$tekstoLygiavimas',
elSriftas='$tekstoSriftas',elSpalva='$tekstoSpalva', elTekstoTurinys='$tekstoVidus' WHERE 
elUnikalusID='$elementas' AND puslapioPavadinimas = '$puslapioPav'";
$sql = mysqli_query($conn,$post); 

?>