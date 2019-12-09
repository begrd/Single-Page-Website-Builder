
<?php

$vartotojasID = $_POST['vartotojasID'];
$nuotraukosKintamasis = $_POST['nuotraukosKintamasis'];
$nuotraukosID = $_POST['nuotraukosID'];
$segmentas = $_POST['segmentas'];
$antrasteNuotraukos = $_POST['antrasteNuotraukos'];
$antrastesSpalva = $_POST['antrastesSpalva'];
$antrastesLygiavimas = $_POST['antrastesLygiavimas'];
$antrastesSriftas = $_POST['antrastesSriftas'];
$antrastesDydis = $_POST['antrastesDydis'];
$tekstasNuotraukos = $_POST['tekstasNuotraukos'];
$tekstoSpalvva = $_POST['tekstoSpalvva'];
$tekstoLygiavimas = $_POST['tekstoLygiavimas'];
$tekstoSriftas = $_POST['tekstoSriftas'];
$tekstoDydis = $_POST['tekstoDydis'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];

require 'db.php';

$post = "INSERT INTO nuotraukos (vartotojas, 
nuotraukosID, nuotrauka, segmentoID,
h1Spalva,h1Lygiavimas,h1Sriftas,h1TekstoDydis,
h1TekstoTurinys,tekstoSpalva,tekstoLygiavimas,
tekstoSriftas,tekstoDydis,tekstoTurinys,puslapioPavadinimas,sablonas) VALUES ('$vartotojasID',
'$nuotraukosID','$nuotraukosKintamasis','$segmentas','$antrastesSpalva','$antrastesLygiavimas',
'$antrastesSriftas','$antrastesDydis','$antrasteNuotraukos',
'$tekstoSpalvva','$tekstoLygiavimas','$tekstoSriftas',
'$tekstoDydis','$tekstasNuotraukos','$puslapioPav','$sablonoPav')";
$sql = mysqli_query($conn,$post); 

?>
