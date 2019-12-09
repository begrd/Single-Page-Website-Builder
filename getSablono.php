
<?php

require 'db.php';
$vieta = $_POST['vieta1'];
$puslapioPav = $_POST['puslapioPav'];
$vartotojas = $_POST['vartotojas'];
$sql = "SELECT nuotrauka,elSpalva,elLygiavimas,elSriftas,elTekstoDydis,elTekstoTurinys FROM sablonas WHERE vieta='$vieta' AND puslapioPavadinimas='$puslapioPav' AND vartotojas='$vartotojas'";
$result = $conn->query($sql);         //query
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
       echo json_encode(array("nuotrauka"=>$row["nuotrauka"],"spalva"=>$row["elSpalva"],"lygiavimas"=>$row["elLygiavimas"],"sriftas"=>$row["elSriftas"],"tekstoDydis"=>$row["elTekstoDydis"],"tekstoTurinys"=>$row["elTekstoTurinys"]));
    }
} else {
    echo "0 results";
}

?>
