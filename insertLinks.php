<?php

$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$behance = $_POST['behance'];
$dydis = $_POST['dydis'];
$elementoID = $_POST['elementoID'];
$sectionID =$_POST['sectionID'];
$vartotojasID = $_POST['vartotojasID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
$spalva = $_POST['spalva'];
require 'db.php';

$post = "INSERT INTO links (facebook, instagram, behance,dydis,spalva,sectionID,puslapioPavadinimas,sablonas,vartotojas,elementoID)
 VALUES ('$facebook','$instagram','$behance','$dydis','$spalva','$sectionID','$puslapioPav','$sablonoPav','$vartotojasID','$elementoID')";
$sql = mysqli_query($conn,$post); 

?>
