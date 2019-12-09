
<?php

require 'db.php';
$vartotojas = $_POST['vartotojas'];
$sql = "SELECT puslapioPavadinimas,sablonas FROM puslapiuInfo WHERE vartotojas='$vartotojas'";
$result = $conn->query($sql);         //query
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
     
       echo json_encode(array("puslapioPavadinimas"=>$row["puslapioPavadinimas"],"sablonas"=>$row["sablonas"]));
    }
} else {
    echo "0 results";
}

?>
