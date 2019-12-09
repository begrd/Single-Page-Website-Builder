
<?php

$section = $_POST['sectionID'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];

require 'db.php';

$post = "DELETE FROM segmentai WHERE segmentoID='$section' AND puslapioPavadinimas='$puslapioPav'";
$sql = mysqli_query($conn,$post); 

?>