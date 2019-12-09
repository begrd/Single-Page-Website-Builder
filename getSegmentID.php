
<?php

require 'db.php';
$vartotojas = $_POST['vartotojas'];
$sql = "SELECT * FROM segmentai WHERE vartotojoID='$vartotojas'";
$result = $conn->query($sql);         //query
if ($result->num_rows > 0) {
    // output data of each row
    $masyvas = array();
    while($row=mysqli_fetch_assoc($result)) {
     
       $masyvas[] = array(
    'segmentoID'=>$row['segmentoID'],
       'aukstis'=>$row['aukstis'],
       'stulpeliuSK'=>$row['stulpeliuSK']);
    }
    echo json_encode($masyvas);
} else {
    echo "0 results";
}

?>
