
<?php

$vieta = $_POST['vieta'];
$puslapioPav = $_POST['puslapioPav'];
$sablonoPav = $_POST['sablonoPav'];
$vartotojas = $_POST['vartotojas'];

$elTekstoDydis = $_POST['elTekstoDydis'];
$elLygiavimas =$_POST['elLygiavimas'];
$elSriftas =$_POST['elSriftas'];
$elSpalva =$_POST['elSpalva'];
$elTekstoTurinys = $_POST['elTekstoTurinys'];

require 'db.php';

echo $vieta, $elSpalva, $elTekstoTurinys, $elLygiavimas, $elTekstoDydis;

$sql = "SELECT * FROM sablonas WHERE vartotojas='$vartotojas' AND puslapioPavadinimas='$puslapioPav' AND vieta='$vieta'";
$result = $conn->query($sql);        
if ($result->num_rows>0)
 {
     
    }
    
 else {
     
    $post = "INSERT INTO sablonas (vieta,elSpalva,elLygiavimas,elSriftas,
    elTekstoDydis,elTekstoTurinys,sablonas,puslapioPavadinimas,vartotojas) VALUES
    ('$vieta','$elSpalva','$elLygiavimas','$elSriftas','$elTekstoDydis',
    '$elTekstoTurinys','$sablonoPav','$puslapioPav','$vartotojas')";
$sql = mysqli_query($conn,$post); 
echo $post;
}

?>
