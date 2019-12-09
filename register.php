
<?php
require 'db.php';

?>
<link rel="stylesheet"  media="all" type="text/css" href="extrastyle.css"/>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i|IBM+Plex+Sans+Condensed:400,400i|IBM+Plex+Sans:100,100i,400,400i,700,700i|IBM+Plex+Serif:400,400i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
<style>

    </style>
<div class="container-fluid">

<div class="row">

<div class="col-5 desinePuse">
<div class="centerContent">
<i class="fa fa-briefcase logo"></i>
<h1 class="pagrindinisH2">Sveiki!</h1>
<h1 class="pagrindinisH1">Ar esate pasiruoše prisijungti prie Portfio ?</h1>
<li class="tekstasRegPrisi">Susikurk savo "Portfi".</li>
<li class="tekstasRegPrisi">Redaguok savo puslapio išdėstymą.</li>
<li class="tekstasRegPrisi">Kelk savo darbus.</li>
</div>
</div>
<div class="col-7">

<div class="main2">
<form method="POST" action="register_process.php" class="registracijosForma">


<input placeholder="Vardas" name="vardas" class="ivestis_1"><br>
<input placeholder="Pavardė" name="pavarde" class="ivestis_1"><br>
<input placeholder="Slapyvardis" name="slapyvardis" class="ivestis_1"><br>
<input placeholder = "El.Paštas" type="email" name="email" class="ivestis_1"><br>
<input placeholder="Slaptažodis" type="password" name="password" class="ivestis_1"><br>
<button type="submit" name="registruotis" class="regLogMygtukas"> Registruotis</button><br>
<p class="tekstasRegPrisi_2">Jau esi narys? <a href="login.php">Spausk čia</a></p>
</div>





</form>
</div>
</div>
    </div>

