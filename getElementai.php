
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
$puslapioPav=$_POST['puslapioPav'];
$sql = "SELECT * FROM elementai WHERE vartotojoID='$name' AND puslapioPavadinimas='$puslapioPav'";
$result = $conn->query($sql);        
if ($result->num_rows>0)
 {
    
    $masyvas2 = array();
    while($row=mysqli_fetch_assoc($result)) {
         
     $masyvas2[] = array(
       'elSpalva'=>$row['elSpalva'],
       'elLygiavimas'=>$row['elLygiavimas'],
       'elSriftas'=>$row['elSriftas'],
       'elTekstoDydis'=>$row['elTekstoDydis'],
       'elTekstoTurinys'=>$row['elTekstoTurinys'],
       'elTipas'=>$row['elTipas'],
       'elUnikalusID'=>$row['elUnikalusID'],
       'segmentoID'=>$row['sectionID'],
    );
    }
    
  echo json_encode($masyvas2);
    
} else {
    echo "0 results";
}

?>
