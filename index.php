<?php
session_start();

$sablonas = $_GET['sablonas'];
$puslapioPav = $_GET['puslapioPav'];
?>


<html>

<head>
    <link rel="stylesheet"  media="all" type="text/css" href="style.css"/>
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="FileSaver.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<style>

#vartotojas{
margin-top:10px;
text-align:center;
}

/*profilePic change*/

.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}



/*headerUpload*/

.box {
  display: block;
  width:100%;
  height: 300px;
  margin: 0px;
  background-color: white;

  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);

  overflow: hidden;
}





.topLayer {
  height: 300px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-image: url("");
  background-color: white;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}

.imagePreview {
  height: 300px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-image: url("");
  background-color: white;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}
.topLayer::after {
  content: "";

  position: relative;
  font-size: 4.5em;
  color: #e6e6e6;
  top: calc(50% - 3rem);
  left: calc(50% - 2.25rem);
  z-index: 0;
}

.topLayer.topLayerNera::after {
  display: none;
}
.topLayer:nth-child(2) {
  background-image: url("http://bastianandre.at/giphy.gif");
}

i.material-icons {
  transition: color 100ms ease-in-out;
  font-size: 2.25em;
  line-height: 55px;
  color: white;
  display: block;
}

.drop {
  display: block;
  position: absolute;
  background: rgba(95, 158, 160, 0.2);
  border-radius: 100%;
  -webkit-transform: scale(0);
          transform: scale(0);
}

.picture-upload {

  max-width:100%;
  margin: 50px auto;
}
.picture-upload .picture-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.picture-upload .picture-edit input {
  display: none;
}
.picture-upload .picture-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
 
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.picture-upload .picture-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.picture-upload .picture-edit input + label:after {
  content: "\f067";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}

.picture-upload .picture-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

div[id*='new']{
    margin-top:60px;
  }

  .shortBio{
    margin-top: 80px;
    margin-left: 50px;
  }
  #save{
    width:100%;
    height:60px;
    text-align:center;
    padding-top:5px;
    font-size:30px;
    
    transition:0.5s all;
  }
  #save:hover{
    background:#59bcea;
    color:#fff;
    cursor:pointer;
    transition:0.5s all;
  }
  #atgal{
    width:100%;
    height:60px;
    text-align:center;
    padding-top:5px;
    font-size:30px;
    
    transition:0.5s all;
  }
  #atgal:hover{
    background:#59bcea;
    color:#fff;
    cursor:pointer;
    transition:0.5s all;
  }
  </style>
<body>
    
<p id="save">Išsaugot puslapį</p>
<p id="atgal">Eiti atgal</p>
<p id="sablonas" style="display:none"><?php echo $sablonas; ?></p>
<p id="puslapioPav" style="display:none"><?php echo $puslapioPav;?></p>
    


    



    
    <div class="box">
      <div class="topLayer"></div>
 
     

    </div>
  </div>
  
    <div class="container informationSection">
        <div class="row">
        <div class="col-3">
          <div class="container">
            <div class="avatar-upload">
              
                <div class="avatar-preview">
                    <div id="imagePreview">
                    </div>
                </div>
                
<?php if(isset($_SESSION['vartotojoID'])){ echo'<h3 id="vartotojas">'.$_SESSION['vartotojas'].'</h3>';}?>
            </div>
        </div>
        </div>
        <div class="col-8">
            

            <p class="shortBio" id="shortBio">"Lorem ipsum dolor sit amet, consectetur adipiscing elit[...]" <i class="fas fa-pencil-alt editIcon"></i></p>
                   
        </div>
    </div>
    </div>

 
    <div class="container" id="newContent">

</div>
</body>

<script>
    


$( document ).ready(function() {
    var vieta1;
    vieta1 = "profilioNuotrauka";
    
    var vartotojas = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
$.ajax({         
      type:'post',                          
      url: 'getSablono.php',                  //the script to call to get data          
      data: {vieta1:vieta1,puslapioPav:puslapioPav,vartotojas:vartotojas},                           //for example "id=5&parent=6"
      dataType:'json',
      cache:false,      //data format      
      success: function(data)          //on recieve of reply
      {
          
        var nuotraukosName = data.nuotrauka;        //get id
        var vname = data.vieta;           //get name
  
        $('#imagePreview').css('background-image', 'url('+nuotraukosName+')');
       
    
   
      } 
    });

    vieta1 = "headerioNuotrauka";
    var vartotojas = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
    $.ajax({         
      type:'post',                          
      url: 'getSablono.php',                  //the script to call to get data          
      data: {vieta1:vieta1,puslapioPav:puslapioPav,vartotojas:vartotojas},                            //for example "id=5&parent=6"
      dataType:'json',
      cache:false,      //data format      
      success: function(data)          //on recieve of reply
      {
          
        var nuotraukosName = data.nuotrauka;        //get id
        var vname = data.vieta;           //get name
  
        $('.topLayer').css('background-image', 'url('+nuotraukosName+')');
       
     
   
      } 
    });
    vieta1 = "profilioAprasymas";
    var vartotojas = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
    $.ajax({         
      type:'post',                          
      url: 'getSablono.php',                  //the script to call to get data          
      data: {vieta1:vieta1,puslapioPav:puslapioPav,vartotojas:vartotojas},                               //for example "id=5&parent=6"
      dataType:'json',
      cache:false,      //data format      
      success: function(data)          //on recieve of reply
      {
          
        var nuotraukosName = data.nuotrauka;        //get id
        var spalva = data.spalva;           //get name
        var lygiavimas = data.lygiavimas;
              //get name
        var sriftas = data.sriftas;
        var tekstoDydis = data.tekstoDydis;           //get name
        var tekstoTurinys = data.tekstoTurinys;

        $('.shortbio').css('color', ''+spalva+'');
        $('.shortbio').css('font-size', ''+tekstoDydis+'');
        $('.shortbio').css('font-family', ''+sriftas+'');
        $('.shortbio').css('text-align', ''+lygiavimas+'');
        $('.shortbio').text(''+tekstoTurinys+'');
   
      } 
    });
    var vartotojas = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
    $.ajax({         
      type:'post',                          
      url: 'getSegmentai.php',                  //the script to call to get data          
      data: {vartotojas:vartotojas,puslapioPav:puslapioPav},                           //for example "id=5&parent=6"
      dataType:'json',
      cache:false,      //data format      
      success: function(data)          //on recieve of reply
      {
          for (var j=0;j<data.length;j++){
        var segmentoID = data[j].segmentoID;        //get id
        var aukstis = data[j].aukstis;           //get name
        var stulpeliuSK = data[j].stulpeliuSK;
     
        var stulpeliai = 12/stulpeliuSK;
        let pagrindinis = document.getElementById("newContent");
        var row = document.createElement("div");
        row.setAttribute("class","row main");
        row.setAttribute("id",segmentoID);
        row.style.height = aukstis +"px";
        pagrindinis.appendChild(row);
      
        for (var i=1;i<=stulpeliuSK;i++){
          var vidinisST = document.createElement("div");
          i-=1;
          vidinisST.setAttribute("id","stulpelis"+i+"");
         vidinisST.setAttribute("class","col-"+stulpeliai+" stSkaicius");
          row.appendChild(vidinisST);
        console.log(i,stulpeliai);
        i+=1; 
      }
    }
    
      } 
    });

/*ikelti elementus (paragrafai,antraste) */

var name = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
    $.ajax({         
      type:'post',                          
      url: 'getElementai.php',                  //the script to call to get data          
      data: {name:name,puslapioPav:puslapioPav},                           //for example "id=5&parent=6"
     dataType:'json',
      cache:false,     //data format      
      success: function(data)          //on recieve of reply
      {
      for (var i =0; i<data.length;i++){
        var elUnikalusID = data[i].elUnikalusID;
     
        var elSpalva = data[i].elSpalva;        //get id
        var elSriftas= data[i].elSriftas;           //get name
        var elTekstoDydis= data[i].elTekstoDydis;
        var elTekstoTurinys = data[i].elTekstoTurinys;        //get id
        var elTipas= data[i].elTipas; 
        var elLygiavimas= data[i].elLygiavimas; 
        var sectionID = data[i].segmentoID;          //get name
        console.log(elUnikalusID,elSpalva,elSriftas,
        elTekstoDydis,elTekstoTurinys,elTipas);
      
var elKintStulpeliui = elUnikalusID.substring(8,9);
var stulpelis=parseInt(elKintStulpeliui);
var stulpelis = stulpelis+1;
var elKintEilutei = elUnikalusID.substring(9,10);
var sekcija = document.getElementById("newContent");


/*
var sRow = sekcija.querySelector(""+sectionID+"");
console.log(sRow);
var sablonoRow = sRow.id;
var apkarpytas = sablonoRow.substring(3,4);
*/
var apkarpytas = sectionID.substring(3,4);
var apkarpytas1 = parseInt(apkarpytas);
console.log(apkarpytas1,stulpelis,elKintEilutei);
if(apkarpytas1 = stulpelis){
var sRow = document.getElementById(sectionID);
console.log(sRow);
  var gautiStulpeli = sRow.querySelector("#stulpelis"+elKintStulpeliui+"");
  console.log(gautiStulpeli);
  var bus = document.createElement(elTipas);
  bus.setAttribute("class","elementas"+elKintEilutei+"");
  bus.style.color = elSpalva;
  bus.style.fontSize = elTekstoDydis;
  bus.textContent = elTekstoTurinys;
  bus.style.fontFamily = ''+elSriftas+'';
  bus.style.textAlign = elLygiavimas;
  console.log(bus);
  gautiStulpeli.appendChild(bus);

}
else{
  var bus = document.createElement(elTipas);
  console.log(bus);
  sRow.appendChild(bus);
}
      }
   
    }
      
    });



/*ikelti nuorodas  */

var name = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
$.ajax({         
  type:'POST',                          
  url: 'getNuorodos.php',                   
  data: {name:name,puslapioPav:puslapioPav},                          
 dataType:'json',
  cache:false,        
  success: function(data)         
  {
    alert(data);
  for (var i =0; i<data.length;i++){
    var elUnikalusID = data[i].elementoID;
    var facebook = data[i].facebook;
    var instagram = data[i].instagram;
    var behance = data[i].behance;
    var spalva = data[i].spalva;
    var dydis = data[i].dydis;          
    var elSriftas= data[i].elSriftas;           
    var sectionID = data[i].segmentoID;          
   
  
var elKintStulpeliui = elUnikalusID.substring(4,5);
var stulpelis=parseInt(elKintStulpeliui);
var stulpelis = stulpelis+1;
var elKintEilutei = elUnikalusID.substring(5,6);
var sekcija = document.getElementById("newContent");


/*
var sRow = sekcija.querySelector(""+sectionID+"");
console.log(sRow);
var sablonoRow = sRow.id;
var apkarpytas = sablonoRow.substring(3,4);
*/
var apkarpytas = sectionID.substring(3,4);
var apkarpytas1 = parseInt(apkarpytas);
console.log(apkarpytas1,stulpelis,elKintEilutei);
if(apkarpytas1 = stulpelis){
var sRow = document.getElementById(sectionID);
console.log(sRow);
var gautiStulpeli = sRow.querySelector("#stulpelis"+elKintStulpeliui+"");
console.log(gautiStulpeli);
var bus = document.createElement("div");
bus.setAttribute("class","elementas"+elKintEilutei+"");
bus.style.textAlign = "center";
bus.style.fontSize = dydis;
var newLink1 = document.createElement("a");
newLink1.setAttribute("href",facebook);
var newIcon1 = document.createElement("i");
newIcon1.setAttribute("class","fa fa-facebook");
newIcon1.style.padding = "20px";
newIcon1.style.color = spalva;
newLink1.appendChild(newIcon1);

var newLink2 = document.createElement("a");
newLink2.setAttribute("href",instagram);
var newIcon2 = document.createElement("i");
newIcon2.setAttribute("class","fa fa-instagram");
newIcon2.style.padding = "20px";
newIcon2.style.color = spalva;
newLink2.appendChild(newIcon2);


var newLink3 = document.createElement("a");
newLink3.setAttribute("href",behance);
var newIcon3 = document.createElement("i");
newIcon3.setAttribute("class","fa fa-behance");
newIcon3.style.padding = "20px";
newIcon3.style.color = spalva;
newLink3.appendChild(newIcon3);

console.log(bus);


bus.appendChild(newLink1);
bus.appendChild(newLink2);
bus.appendChild(newLink3);
gautiStulpeli.appendChild(bus);


}
else{
var bus = document.createElement(elTipas);
console.log(bus);
sRow.appendChild(bus);
}
  }

}
  
});

var name = $("#vartotojas").text();
    var puslapioPav = $("#puslapioPav").text();
$.ajax({         
  type:'post',                          
  url: 'getNuotrauka.php',                  //the script to call to get data          
  data: {name:name,puslapioPav:puslapioPav},                           //for example "id=5&parent=6"
 dataType:'json',
  cache:false,     //data format      
  success: function(data)          //on recieve of reply
  {
  for (var i =0; i<data.length;i++){
   
    var nuotraukosID = data[i].nuotraukosID;        //get id
    var nuotrauka= data[i].nuotrauka;           //get name
    var h1Spalva= data[i].h1Spalva;
    var h1Lygiavimas = data[i].h1Lygiavimas;        //get id
    var h1TekstoDydis= data[i].h1TekstoDydis; 
    var h1TekstoTurinys= data[i].h1TekstoTurinys; 
    var h1Sriftas = data[i].h1Sriftas;
    var tekstoSpalva= data[i].tekstoSpalva; 
    var tekstoLygiavimas= data[i].tekstoLygiavimas; 
    var tekstoDydis= data[i].tekstoDydis; 
    var tekstoTurinys= data[i].tekstoTurinys; 
    var tekstoSriftas= data[i].tekstoSriftas; 
    
    var sectionID = data[i].segmentoID; 
             //get name
  
  
var elKintStulpeliui = nuotraukosID.substring(14,15);
var stulpelis=parseInt(elKintStulpeliui);
var stulpelis = stulpelis+1;
var elKintEilutei = nuotraukosID.substring(15,16);
var sekcija = document.getElementById("newContent");
var modalID = nuotraukosID.substring(14,16);

/*
var sRow = sekcija.querySelector(""+sectionID+"");
console.log(sRow);
var sablonoRow = sRow.id;
var apkarpytas = sablonoRow.substring(3,4);
*/
var apkarpytas = sectionID.substring(3,4);
var apkarpytas1 = parseInt(apkarpytas);
console.log(apkarpytas1,stulpelis,elKintEilutei);

if(apkarpytas1 = stulpelis){
var sRow = document.getElementById(sectionID);
console.log(sRow);
var gautiStulpeli = sRow.querySelector("#stulpelis"+elKintStulpeliui+"");
console.log(gautiStulpeli);
var naujasElementas = document.createElement("div");
naujasElementas.setAttribute("class","elementas"+elKintEilutei+"");
naujasElementas.style.height = "100%";
naujasElementas.style.width = "100%";
naujasElementas.style.backgroundImage = 'url('+nuotrauka+')';
naujasElementas.style.backgroundSize = 'cover';
naujasElementas.style.backgroundSize = 'no-repeat';
naujasElementas.style.backgroundPosition = 'center center';
naujasElementas.setAttribute("data-toggle", "modal");
naujasElementas.setAttribute("data-target","#mymodal"+modalID+"");
console.log(bus);
gautiStulpeli.appendChild(naujasElementas);


/*pridet pop up langa*/
var vienas = document.createElement("div");
vienas.setAttribute("class", "modal fade"+modalID+"");
vienas.setAttribute("id", "mymodal"+modalID+"");
var du= document.createElement("div");
du.setAttribute("class", "modal-dialog");
var trys = document.createElement("div");
trys.setAttribute("class", "modal-content");
var keturi = document.createElement("div");
keturi.setAttribute("class", "modal-header");
var header = document.createElement("h3");
header.setAttribute("class","antrasteNuotraukos"+modalID+"");

header.textContent = h1TekstoTurinys;
header.style.color = h1Spalva;
header.style.fontSize = h1TekstoDydis;
header.style.fontFamily = ''+h1Sriftas+'';
header.style.textAlign = h1Lygiavimas;
var penki = document.createElement("div");
penki.setAttribute("class", "modal-body");
var modalTekstas = document.createElement("p");
modalTekstas.setAttribute("class", "tekstasNuotraukos"+modalID+"");
modalTekstas.textContent = tekstoTurinys;
modalTekstas.style.color = tekstoSpalva;
modalTekstas.style.fontSize = tekstoDydis;
modalTekstas.style.fontFamily = ''+tekstoSriftas+'';
modalTekstas.style.textAlign = tekstoLygiavimas;


penki.appendChild(modalTekstas);
keturi.appendChild(header);
trys.appendChild(keturi);
trys.appendChild(penki);
du.appendChild(trys);
vienas.appendChild(du);
gautiStulpeli.appendChild(vienas);






}
else{
var bus = document.createElement(elTipas);
console.log(bus);
sRow.appendChild(bus);
}
  }

}
  
});

var html = $('html').clone();
var htmlString = html.html();

// use jQuery here to make alterations to the cloned html (parse it)
});
$("#save").click(function() {
  $("#save").hide();
  $("#atgal").hide();
    var blob = new Blob([$("html").html()], {
        type: "text/html;charset=utf-8"
    });
    saveAs(blob, "portfis_generated_page.html");
    $("#atgal").show();
    location.href = "pagrindinis.php";
});

$("#atgal").click(function() {
  location.href = "pagrindinis.php";
});


    </script>

</html>
