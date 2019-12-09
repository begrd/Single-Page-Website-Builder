<?php
session_start();

?>


<html>
<head>

    <link rel="stylesheet" type="text/css" href="extrastyle.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
</head>
<body>
    <div class="centerContent2">
        <h1 class="antrastePavadinimas">Portfis</h1>
      
        <p class="tekstas">Kurk. Dalinkis. Atrask. </p>
        <button class="regLogMygtukas2" onclick = "myFunction()">Pradėti</button><br>
  <?php
if(isset($_SESSION['vartotojoID'])){
    echo '<div class="tiesus"><p class="tekstas">Prisijungta kaip, 
    </p> <p class="tekstas" id="vartotojas">'.''.$_SESSION['vartotojas'].'</p>
    <i class="fa fa-bullseye ikona"></i></div>';
}
  ?>
  
  <div class="tiesus">
      <h3>Sukurti puslapiai:</h3>
     
<?php

require 'db.php';

$sql = "SELECT * FROM puslapiuInfo WHERE vartotojas='$_SESSION[vartotojas]'";
$result = $conn->query($sql);         //query
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
        echo "<br>Pavadinimas:<p id=\"pavadinimas\">".$row["puslapioPavadinimas"]."</p> Šablonas: 
        <p id=\"sablonas\">".$row["sablonas"]."</p> <div class=\"tiesus2\">
         <form method=\"get\" action=\"index.php\"><input type=\"hidden\" name=\"sablonas\" value=".$row["sablonas"].">
         <input type=\"hidden\" name=\"puslapioPav\" value=".$row["puslapioPavadinimas"].">
         <input type=\"submit\" class=\"regLogMygtukas2\" value=\"Peržiūrėti\"></form> 
         <form method=\"get\" action=\"editBuilder.php\">
         <input type=\"hidden\" name=\"sablonas\" value=".$row["sablonas"].">
         <input type=\"hidden\" name=\"puslapioPav\" value=".$row["puslapioPavadinimas"].">
         <input type=\"submit\" class=\"regLogMygtukas2\" value=\"Redaguoti\"></form>
         <input class=\"regLogMygtukas2\" onclick=\"trintiDuom('".$row["sablonas"]."','".$row["vartotojas"]."','".$row["puslapioPavadinimas"]."')\" value=\"Trinti\"> 
         </div><br><br>";}
} else {
    echo "Puslapių dar neturi.";
}

?>
     
</div>
</div>   
<br>
<div class="tiesus2">
<form action="logout_process.php" method="post" class="tiesinsim">
<button class="regLogMygtukas" type="submit" name="logout-submit">Atsijungti</button>
</form>
    </div>

</body>
<script>
    function myFunction() {
        location.href = "pasirinkti_sablona.php";
    }



    function trintiDuom(sablonas,name,pavadinimas){
console.log(sablonas,pavadinimas,name);

        $.ajax({         
  type:'post',                          
  url: 'deletePage.php',                  //the script to call to get data          
  data: {name:name,sablonas:sablonas,pavadinimas:pavadinimas},                           //for example "id=5&parent=6"
   //data format      
  success: function(data)          //on recieve of reply
  {
alert(data);
}});

    }
    
    </script>

</html>