
<?php

$nuotrauka = $_POST['nuotrauka'];
$vieta = $_POST['vieta'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
$vartotojas = $_POST['vartotojas'];

require 'db.php';

echo $vieta;

$sql = "SELECT * FROM sablonas WHERE vartotojas='$vartotojas' AND puslapioPavadinimas='$puslapioPav' AND vieta='$vieta'";
$result = $conn->query($sql);        
if ($result->num_rows>0)
 {
    }
    
 else {
     
    $post = "INSERT INTO sablonas (nuotrauka,vieta,sablonas,puslapioPavadinimas,vartotojas) VALUES
    ('$nuotrauka','$vieta','$sablonoPav','$puslapioPav','$vartotojas')";
$sql = mysqli_query($conn,$post); 

}

?>
