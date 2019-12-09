
<?php
/*
$array1 = array('sveikas'=>3,'tu'=>5);
$array2 = array('sveikas'=>"kaveiki?",'tu'=>5);
//$array = array($array1,$array2);
$array = array($array1,$array2);
echo json_encode($array);


*/
require 'db.php';

$name = $_POST['name'];
$puslapioPav = $_POST['puslapioPav'];
$sql = "SELECT * FROM nuotraukos WHERE vartotojas='$name' AND puslapioPavadinimas ='$puslapioPav' ";
$result = $conn->query($sql);        
if ($result->num_rows>0)
 {
    
    $masyvas2 = array();
    while($row=mysqli_fetch_assoc($result)) {
         
     $masyvas2[] = array(
       'nuotraukosID'=>$row['nuotraukosID'],
       'nuotrauka'=>$row['nuotrauka'],
       'h1Spalva'=>$row['h1Spalva'],
       'h1Lygiavimas'=>$row['h1Lygiavimas'],
       'h1TekstoDydis'=>$row['h1TekstoDydis'],
       'h1TekstoTurinys'=>$row['h1TekstoTurinys'],
       'h1Sriftas'=>$row['h1Sriftas'],
       'tekstoSpalva'=>$row['tekstoSpalva'],
       'tekstoLygiavimas'=>$row['tekstoLygiavimas'],
       'tekstoDydis'=>$row['tekstoDydis'],
       'tekstoSriftas'=>$row['tekstoSriftas'],
       'tekstoTurinys'=>$row['tekstoTurinys'],
       'segmentoID'=>$row['segmentoID'],
    );
    }
    
  echo json_encode($masyvas2);
    
} else {
    echo "0 results";
}

?>
