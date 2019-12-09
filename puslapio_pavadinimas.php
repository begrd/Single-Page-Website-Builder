<?php
session_start();
$var_value = $_GET['varname'];
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="extrastyle.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i|IBM+Plex+Sans+Condensed:400,400i|IBM+Plex+Sans:100,100i,400,400i,700,700i|IBM+Plex+Serif:400,400i" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
</head>
<body>
<?php
if(isset($_SESSION['vartotojoID'])){
    echo '<p style="display:none" class="tekstas" id="vartotojas">'.$_SESSION['vartotojas'].'</p>';
}
  ?>
  <?php
    echo '
    <p  style="display:none"  class="tekstas" id="sablonas">'.$var_value.'</p>';

  ?>
<div class="centerThis">
<h1 class="antraste">Įvesk naujo puslapio pavadinimą:</h1>
<form method="get" action="builder2.php">
<input type="text" id="pavadinimas" class="ivestis_1" name="pavadinimas" value="" placeholder="Pavadinimas"/>
<br>
<br>

    <input type="hidden" name="sablonas" value="pirmas">
    <input type="submit" class="regLogMygtukas2" onclick="getDuomenys()" value="Patvirtinti">
</form>
</div>
</body>
<script>

function getDuomenys(){
    
var vartotojoID = $("#vartotojas").text();
var sablonoID = $("#sablonas").text();
var pavadinimas = $("#pavadinimas").val();

    $.ajax({
    type: 'POST',
    url: 'savePageInfo.php',  
    datatype: 'json',             
    data: {vartotojoID:vartotojoID,sablonoID:sablonoID,pavadinimas:pavadinimas},
 success: function(data) {}  
          })  
}

</script>
</html>
