
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
$sql = "SELECT * FROM links WHERE vartotojas='$name' AND puslapioPavadinimas='$puslapioPav'";
$result = $conn->query($sql);        
if ($result->num_rows>0)
 {
    
    $masyvas2 = array();
    while($row=mysqli_fetch_assoc($result)) {
         
     $masyvas2[] = array(
       'facebook'=>$row['facebook'],
       'instagram'=>$row['instagram'],
       'behance'=>$row['behance'],
       'dydis'=>$row['dydis'],
       'spalva'=>$row['spalva'],
       'elementoID'=>$row['elementoID'],
       'segmentoID'=>$row['sectionID'],
    );
    }
    
  echo json_encode($masyvas2);
    
} else {
    echo "0 results";
}

?>
