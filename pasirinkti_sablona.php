<?php
session_start();

?>
<html>
<head>
<link rel="stylesheet"  media="all" type="text/css" href="extrastyle.css"/>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<?php

  ?>
    <div class="centerContent suAtitraukimu">
        <h1 class="antrastesPavadinimas">Pasirink savo portfolio išdėstymo stilių:</h1><br><br>
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-4">
                    <h2 class="antrastesPavadinimas">Pirmas</h2>
                    <i class="fa fa-files-o ikona2"></i>
                    <form method="get" action="puslapio_pavadinimas.php">
                    <input type="hidden" name="varname" value="pirmas">
                    <input type="submit" value="Pasirinkti" class="regLogMygtukas">
                        </form></div>
                    <div class="col-4"><h2>Pirmas</h2></div>
                    <div class="col-4"><h2>Pirmas</h2></div>
                </div>
                
            </div>
    </div>    
<script>
</script>
</body>
</html>