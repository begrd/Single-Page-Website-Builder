

<?php
session_start();

$sablonas = $_GET['sablonas'];

$pavadinimas = $_GET['pavadinimas'];
?>
<html>

<head>
    <link rel="stylesheet"  media="all" type="text/css" href="style.css"/>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="primary-nav">
  <button href="#" class="hamburger open-panel nav-toggle">
  <span class="screen-reader-text">Menu</span>
  </button>    
  <nav role="navigation" class="menu">
  <a href="#" class="logotype">Portfis</span></a>    
  <div class="overflow-container">
<!--
  <div class="navigationTitle">
      <p>Pakeisti titulinį</p>  
      <input class="navigationInput">
      <button>Change Title</button>
      <a class="goBackNav">Go Back</a>
    </div>
-->
    <div class="navigationSection">
    
      <p class="navText">Pasirinkti stulpeliu skaičių:</p>
      <select id="list" style="margin-bottom:10px">
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
      </select>
      <br>
      <input type="range" min="50" max="800" value="500" class="slider" id="myRange">
      <p class="navText">Skyrelio aukštis: <span id="demo"></span> pikseliai</p>
      <hr>
      <p class="navText" style="margin-bottom:10px">Spalva:</p>
      <input class="r1 slider" type="range" id="spalvom1" max="255" value="255">
      <input class="g1 slider" type="range" id="spalvom1" max="255" value="255">
      <input class="b1 slider" type="range" id="spalvom1" max="255" value="255">
      <div class="color1"></div>
      <p class="value1 navText">rgb(255,255,255)</p>
      <form id="forma">
      <input type="text" style="display:none" value="new" id="testas">
      </form>
      <button onclick="whenClicked()" class="navButton">Pridėti</button>
      <a class="goBackNav">Atgal</a>
    </div>

<div class="navigationText" id="idNavText"> 
    <p class="navText" style="width:80%">Norint pridėti antraštę tempkite apačioje esantį elementą</p>
    <div class="dragMe" id="draggableBlock0" draggable="true">
    <i id="textEditor" class="fa fa-font"></i>
</div>
<a class="goBackNav">Atgal</a>
</div>


<div class="navigationParagraph">
   
<p class="navText" style="width:80%">Norint pridėti pastraipą tempkite apačioje esantį elementą</p>
    <div class="dragMe" id="para0" draggable="true" >
     
    <i id="textEditor" class="fa fa-paragraph"></i>
    
  </div>
    <a class="goBackNav">Atgal</a>
</div>

<div class="navigationImage">

   
<p class="navText" style="width:80%">Norint pridėti nuotrauką tempkite apačioje esantį elementą</p>
  <div class="dragMe" id="imgDrag0" draggable="true" >
   
  <i id="textEditor" class="fa fa-file-image-o"></i>
  
</div>
  <a class="goBackNav">Atgal</a>
</div>



<div class="navigationLinks">
<p class="navText" style="width:80%">Norint pridėti nuorodą tempkite apačioje esantį elementą</p>
  <div class="dragMe" id="linkDrag" draggable="true" >
  <i id="textEditor" class="fa fa-link"></i>
</div>
  <a class="goBackNav">Atgal</a>
</div>


<div class="editHeading">
<p>Antraštės koregavimas</p>
<p>Antraštės dydis:</p>

<p style="display:none" id="musuH1ID"></p>
<input type="range" min="20" max="70" value="50" class="slider" id="fontSize">
<p>Antraštės lygiavimas:</p>
<select id="alignText">
  <option value="left">Kairė</option>
  <option value="right">Dešinė</option>
  <option value="center">Centras</option>
  
</select>
<p>Pasirinkti šriftą</p>
<select id="selectFont">
  <option value="Arial">Arial</option>
  <option value="Verdana">Verdana</option>
  <option value="Montserrat">Montserrat</option>
</select>
<p>Spalva:</p>
<input class="r" type="range" id="spalvom" max="255" value="0">
<input class="g" type="range" id="spalvom" max="255" value="0">
<input class="b" type="range" id="spalvom" max="255" value="0">
<div class="color"></div>
<p class="value"></p>
<a class="goBackNav">Go Back</a>
<button id="saveEditedElement" class="navButton">Atnaujinti</button>
</div>


<div class="editText">
<p>Antraštės koregavimas</p>
<p>Antraštės dydis:</p>
<p style="display:none" id="musuElID"></p>
<input type="range" min="20" max="70" value="50" class="slider" id="fontSize2">
<p>Antraštės lygiavimas:</p>
<select id="alignText2">
  <option value="left">Kairė</option>
  <option value="right">Dešinė</option>
  <option value="center">Centras</option>
  
</select>
<p>Pasirinkti šriftą</p>
<select id="selectFont2">
  <option value="Arial">Arial</option>
  <option value="Verdana">Verdana</option>
  <option value="Montserrat">Montserrat</option>
</select>
<p>Spalva:</p>
<input class="r2" type="range" class="slider" id="spalvom2" max="255" value="0">
<input class="g2" type="range" class="slider" id="spalvom2" max="255" value="0">
<input class="b2" type="range" class="slider" id="spalvom2" max="255" value="0">
<div class="color2"></div>
<p class="value2"></p>
<a class="goBackNav">Go Back</a>
<button id="saveEditedElement2" class="navButton">Atnaujinti</button>
</div>

<div class="editImage">
<p class="navText">Nuotraukos koregavimas</p>

<p style="display:none" id="musuNuotraukosID"></p>
<p id="koreguotiAntraste" class="navText">Koreguoti antraštė</p>
<div class="antrastes">

<input type="text" value="Įvesti antraštę" id="popH1" class="navInput">
<input type="range" min="20" max="70" value="50" class="slider" id="fontSize4">
<p class="navText">Antraštės lygiavimas:</p>
<select id="alignText4">
  <option value="left">Kairė</option>
  <option value="right">Dešinė</option>
  <option value="center">Centras</option>
  
</select>
<p class="navText">Pasirinkti šriftą:</p>
<select id="selectFont4">
  <option value="Arial">Arial</option>
  <option value="Verdana">Verdana</option>
  <option value="Montserrat">Montserrat</option>
</select>
<p>Spalva:</p>
<input class="r4" type="range" class="slider" id="spalvom4" max="255" value="0">
<input class="g4" type="range" class="slider" id="spalvom4" max="255" value="0">
<input class="b4" type="range" class="slider" id="spalvom4" max="255" value="0">
<div class="color4"></div>
<p class="value4"></p>
</div>

<p id="koreguotiPastraipas" class="navText">Koreguoti pastraipą</p>
<div class="pastraipos">
<input type="range" min="20" max="70" value="50" class="slider" id="fontSize5">
<p class="navText">Antraštės lygiavimas:</p>
<select id="alignText5">
  <option value="left">Kairė</option>
  <option value="right">Dešinė</option>
  <option value="center">Centras</option>
  
</select>
<p class="navText">Pasirinkti šriftą:</p>
<select id="selectFont5">
  <option value="Arial">Arial</option>
  <option value="Verdana">Verdana</option>
  <option value="Montserrat">Montserrat</option>
</select>
<p>Spalva:</p>
<input class="r5" type="range" class="slider" id="spalvom5" max="255" value="0">
<input class="g5" type="range" class="slider" id="spalvom5" max="255" value="0">
<input class="b5" type="range" class="slider" id="spalvom5" max="255" value="0">
<div class="color5"></div>
<p class="value5"></p>
<textarea placeholder="Įvesti iššokančio elemento pastraipą" id="popText"></textarea>
</div>

<a class="goBackNav">Go Back</a>
<button id="saveEditedPicture" class="navButton">Atnaujinti</button>

</div>


<div class="editBio">

<p class="navText">Šablono aprašymo koregavimas</p>
<p class="navText">Teksto dydis:</p>
<input type="range" min="6" max="30" value="14" class="slider" id="fontSize3">
<p class="navText">Teksto lygiavimas:</p>
<select id="alignText3">
  <option value="left">Kairė</option>
  <option value="right">Dešinė</option>
  <option value="center">Centras</option>
</select>
<p class="navText">Pasirinkti šriftą</p>
<select id="selectFont3">
  <option value="Arial">Arial</option>
  <option value="Verdana">Verdana</option>
  <option value="Montserrat">Montserrat</option>
</select>
<p class="navText">Spalva:</p>
<input class="r3 slider" type="range" id="spalvom3" max="255" value="0">
<input class="g3 slider" type="range" id="spalvom3" max="255" value="0">
<input class="b3 slider" type="range" id="spalvom3" max="255" value="0">
<div class="color3"></div>
<p class="value3 navText"> rgb(255,255,255)</p>
<a class="goBackNav">Atgal</a>
<button id="saveEditedElement3" class="navButton">Atnaujinti</button>


</div>

<div class="editLinks">

<p style="display:none" id="musuLinkID"></p>
<p class="navText">Nuorodų koregavimas</p>
<label class="navText">Facebook:</label><input type="text" id="facebook" value="" placeholder="username">
<label class="navText">Instagram:</label><input type="text" id="instagram" value="" placeholder="username">
<label class="navText">Behance:</label><input type="text" id="behance" value = ""  placeholder="username">
<p class="navText">Ikonų dydis:</p>
<input type="range" min="10" max="120" value="20" class="slider" id="ikonuDydis">
<p class="navText">Spalva:</p>
<input class="r6 slider" type="range" id="spalvom6" max="255" value="0">
<input class="g6 slider" type="range" id="spalvom6" max="255" value="0">
<input class="b6 slider" type="range" id="spalvom6" max="255" value="0">
<div class="color6"></div>
<p class="value6 navText"></p>
<a class="goBackNav">Atgal</a>
<button id="saveEditedElement4" class="navButton">Atnaujinti</button>

</div>

<ul class="menu-dropdown">
                <li><a class="changeSection">Pridėti puslapio segmentą</a><span class="icon"><i class="fa fa-cube"></i></span></li>
                <li><a class="changeText">Pridėti antraštę</a><span class="icon"><i class="fa fa-font"></i></i></span></li>
                <li><a class="changeParagraph">Pridėt paragrafą</a><span class="icon"><i class="fa fa-paragraph"></i></i></span></li>
                <li><a class="changeImage">Pridėti nuotrauką</a><span class="icon"><i class="fa fa-file-image-o"></i></span></li> 
                <li><a class="changeLinks">Pridėti nuorodas</a><span class="icon"><i class="fa fa-link"></i></span></li>              
              <br>
                
</ul>
<button class="navButton" onclick="goToFinal()" id="issaugojimoMygtukas">Išsaugoti</button>
            </div>
        </nav>
    <p id="sablonoPav" style="display:none"><?php echo $sablonas;?></p>
    <p id="pslPav" style="display:none"><?php echo $pavadinimas;?></p>
    <p id="segmentoNr" style="display:none"></p>
    </div>
    
    </div>
    

    


<div id="message">
    <div class="alert alert-success" id="success-alert" style="z-index:1111!important"> Pridėjote segmentą</div>
        </div>
    <div class="box">
      <div class="topLayer"></div>
        <div class="picture-upload">
          <div class="picture-edit">
              <input type='file' class="image-upload" id="imgUp" accept=".png, .jpg, .jpeg" />
              <label for="imgUp"></label>
          </div>
    </div>
  </div>
  
    <div class="container informationSection">
        <div class="row">
        <div class="col-3">
          <div class="container">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                    </div>
                </div>
                
                <?php
if(isset($_SESSION['vartotojoID'])){

    echo '
    <h3 class="tekstasCenter" id="vartotojas">'.$_SESSION['vartotojas'].'</3>';
    
}
  ?>
            </div>
        </div>
        </div>
        <div class="col-6">
            
        <i class="fa fa-pencil editIkon" onclick="updateHeaderText(this.id)"></i>
            <p class="shortBio" id="shortBio">"Lorem ipsum dolor sit amet, consectetur adipiscing elit[...]" <i class="fas fa-pencil-alt editIcon"></i></p>
                   
        </div>
    </div>
    </div>

    
<div class="container" id="newContent">
</div>
</body>

<script>

var vartotojas = $("#vartotojas").text();
var sablonoPav = $("#sablonasPav").text();
var puslapioPav = $("#pslPav").text();
var nuotrauka = "";
var vieta = "headerioNuotrauka";
/*iskart ikeliame sablono nuotraukas*/
$.ajax({
    type: 'POST',
    url: 'addSablono.php',  
    datatype: 'json',             
    data: {nuotrauka:nuotrauka,sablonoPav:sablonoPav,puslapioPav:puslapioPav,vartotojas:vartotojas,vieta:vieta},
 success: function(data) {
 }  
})
var vartotojas = $("#vartotojas").text();
var sablonoPav = $("#sablonasPav").text();
var puslapioPav = $("#pslPav").text();
var nuotrauka = "";
var vieta = "profilioNuotrauka";
/*iskart ikeliame sablono nuotraukas*/
$.ajax({
    type: 'POST',
    url: 'addSablono.php',  
    datatype: 'json',             
    data: {nuotrauka:nuotrauka,sablonoPav:sablonoPav,puslapioPav:puslapioPav,vartotojas:vartotojas,vieta:vieta},
 success: function(data) {
 }  
})
var vartotojas = $("#vartotojas").text();
var sablonoPav = $("#sablonasPav").text();
var puslapioPav = $("#pslPav").text();
var elTekstoTurinys = $("#shortBio").text();
var elTekstoDydis = "14";
var elLygiavimas = "left";
var elSpalva = "rgb(195,195,195)";
var elSriftas = "Arial";
var vieta = "profilioAprasymas";
/*iskart ikeliame sablono aprasyma*/
$.ajax({
    type: 'POST',
    url: 'addSablonoTekstas.php',  
    datatype: 'json',             
    data: {elSriftas:elSriftas,elTekstoTurinys:elTekstoTurinys,elTekstoDydis:elTekstoDydis,
      elLygiavimas:elLygiavimas,elSpalva:elSpalva, sablonoPav:sablonoPav,
    puslapioPav:puslapioPav,vartotojas:vartotojas,vieta:vieta},
 success: function(data) {

 }  
})




//headerio nauju nuotrauku ikelimas i builderi ir duomenu baze

    var slider = document.getElementById("myRange"); //gauname sliderio dydi
    var output = document.getElementById("demo"); 
output.innerHTML = slider.value; //nustatome i teksta, kad matytume kokia reiksme

slider.oninput = function() {
  output.innerHTML = this.value;
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
          var vieta = "profilioNuotrauka";
            var nuotrauka = e.target.result;
         var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
var vartotojas = $("#vartotojas").text();
    $.ajax({
    type: 'POST',
    url: 'imageInsert.php',  
    datatype: 'json',          
    data: {nuotrauka:nuotrauka,vieta:vieta,puslapioPav:puslapioPav,sablonoPav:sablonoPav,vartotojas:vartotojas},
 success: function(data) {
alert(hey);
 }  
}) 
           
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});



//profilio(sablono) aprasymo koregavimas

function updateHeaderText(elementoID){

  $('li').hide();
  $('#perziurosMygtukas').hide();
  $('#issaugojimoMygtukas').hide();
  
  $('.editBio').show(500);
  
  var textElement = document.getElementById("shortBio");
  textElement.contentEditable = true;

  $("#saveEditedElement3").click(function(){
  
  var reiksme =  $( "#fontSize3" ).val();
  var reiksme2 = $("#alignText3").val();
  var reiksme3 = $("#selectFont3").val();
  var reiksme4 = $(".color3").css("background-color");
  
   var tekstoDydis = textElement.style.fontSize = reiksme;
   var tekstoLygiavimas = textElement.style.textAlign = reiksme2;
   var tekstoVidus = textElement.textContent;
   console.log(tekstoVidus);
   var tekstoSriftas = textElement.style.fontFamily = reiksme3;
   var tekstoSpalva = textElement.style.color= reiksme4;
    textElement.contentEditable = false;
  var elementoID = "profilioAprasymas";
console.log(fontSize, tekstoDydis);
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
var vartotojas = $("#vartotojas").text();
console.log(vartotojas);
    $.ajax({
type: 'POST',
url: 'sablonoKorekcija.php',  
datatype: 'json',             
data: {vartotojas:vartotojas,puslapioPav:puslapioPav,sablonoPav:sablonoPav,elementoID:elementoID,tekstoDydis:tekstoDydis,
tekstoLygiavimas:tekstoLygiavimas,tekstoVidus:tekstoVidus,tekstoSriftas:tekstoSriftas,
tekstoSpalva:tekstoSpalva},
success: function(data) {
 
  $("#success-alert").text('Pakeitet savo puslapio aprašymą');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
}  
}) 

  });
}

//kintamieji
var newElement;
var div;
var newElement2;
var section, section2, ikona;
var insideDropBoxContainer;


var paspaudimai = 1;
//puslapio daliu pridejimas(sections)
var draggables = document.querySelectorAll(".dragMe");
for(let i = 0; i < draggables.length; i++) {
  draggables[i].addEventListener("dragstart", function (ev) {
     ev.dataTransfer.setData("srcId", ev.target.id);
     console.log(ev.target.id);
  });
 
}


//segmento pridėjimo funkcija


    function whenClicked(){ //paspaudus mygtuka vykdoma funkcija
        function addElement(elementTag, elementId) {       
        newElement = document.createElement(elementTag);
        newElement.setAttribute('class', "row");
        newElement.setAttribute('id', elementId);
        slider = document.getElementById("myRange").value;
        newElement.style.height = ""+slider+"px";
        newElement.style.width = "100%";
        newElement.style.border = "2px solid grey";
        newElement.style.marginTop = "40px";
        newElement.style.position = "relative";
        var fonoSpalva = $(".color1").css("background-color");
        newElement.style.backgroundColor = fonoSpalva;
        div = document.getElementById("newContent");
        div.appendChild(newElement);

        var stSkaicius = $('#list').val();
        var aukstis = $('#myRange').val();
        var segmentoID = $("#testas").val()+paspaudimai;
        var vartotojoID = $("#vartotojas").text();
        var puslapioPav =   $("#pslPav").text();
        var sablonoPav = $("#sablonoPav").text();


        $.ajax({
            type: 'POST',
            url: 'insert.php',  
            datatype: 'json',             
            data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,
            stSkaicius:stSkaicius,aukstis:aukstis,segmentoID:segmentoID,
            fonoSpalva:fonoSpalva,vartotojoID:vartotojoID},
            success: function(data) {
              $("#success-alert").text('Pridėjote naują segmentą');
              $("#success-alert").show(1000);
              setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
                                    }  
              })       
                                      }


        addElement("div","new"+paspaudimai+"");      
        var value = document.getElementById("list").value;    
        console.log(value);
        var ilgis = document.getElementById("list").length;
        console.log(ilgis);
        for (var i = 0; i < value; i++){
            var unikalus = 12/value;
            var uni = unikalus.toString();
            newElement2 = document.createElement("div");
            section = document.getElementById("new"+paspaudimai+"");
            newElement2.setAttribute('class', "col-"+uni+" col-xs-12");
            newElement2.setAttribute("id","keistiGalima");
            newElement2.style.top = "15px";
            newElement2.style.height = "95%";
            section.appendChild(newElement2);
            mainSection = document.createElement("div");
            mainSection.setAttribute('class',"col-12");
            mainSection.setAttribute("id","irgi");
            newElement2.appendChild(mainSection);
            insideDropBoxContainer = document.createElement("div");
            insideDropBoxContainer.setAttribute('class', "canDrop");
            insideDropBoxContainer.setAttribute('id',paspaudimai);
            mainSection.appendChild(insideDropBoxContainer);
            mainSection.style.height = "100%";
            mainSection.style.width = "100%";
            mainSection.style.border = "4px dotted red";
            mainSection.style.paddingTop = "20px";
            mainSection.style.paddingBottom = "20px"; 
        }







         
        ikona = document.createElement("i");
        ikona.setAttribute('class', "fa fa-times trynimo-ikona");
        ikona.setAttribute('id',""+paspaudimai+"");
        ikona.setAttribute('onclick', "deleteSection(this.id)");
        section2 = document.getElementById("new"+paspaudimai+"");
        section2.appendChild(ikona);
        
       // function letItDrop(){
   // Drag Functions
    
 var dropTarget = section.querySelectorAll(".canDrop"); //stulpeliai galės priimti "metamus" elementus.

/*
What to Drag - ondragstart and setData()
Then, specify what should happen when the element is dragged.

In the example above, the ondragstart attribute calls a function, 
drag(event), that specifies what data to be dragged.

The dataTransfer.setData() method sets the data type and the 
value of the dragged data:
*/


for(let i = 0; i < dropTarget.length; i++) {
  dropTarget[i].addEventListener("dragover", function (ev) {
     this.class += ' dragAndDropUzejimas';

  });
}
/*
Where to Drop - ondragover
The ondragover event specifies where the dragged data can be dropped.

By default, data/elements cannot be dropped in other elements. 
To allow a drop, we must prevent the default handling of the element.

This is done by calling the event.preventDefault() method for 
the ondragover event:
*/

for(let i = 0; i < dropTarget.length; i++) {
  dropTarget[i].addEventListener("dragover", function (ev) {
    ev.preventDefault();
  });
}
    
for(let i = 0; i < dropTarget.length; i++) {
  
  dropTarget[i].addEventListener('drop', function(ev) {
  ev.preventDefault();
  let target = ev.target; // parodo stulpelį kuriame bus įkeltas elementas.
  let kintamasis = ev.target.id;//cia nustatom row segmentu skaiciu
  console.log(target, kintamasis);
  let droppable  = target.classList.contains('canDrop'); //ar egzistuoja elemento priemimas
  let srcId = ev.dataTransfer.getData("srcId"); // tempiamo elemento identifikatorius gavimas
  console.log(srcId);
  if(srcId === "draggableBlock0"){
        var newDiv = document.createElement("div");
        newDiv.setAttribute("class","dragMe2");
        newDiv.setAttribute("id", "draggableBlock"+i+kintamasis+"");
        newDiv.setAttribute("draggable", "true");
        var newI = document.createElement("i");
        var newTrinti = document.createElement("i");
        newTrinti.setAttribute("class","fa fa-times trynimo-ikona2");
        newTrinti.setAttribute("id",""+i+kintamasis+"");
        newTrinti.setAttribute("onclick","deleteElement1(this.id)");
        newI.setAttribute("class","fa fa-pencil");
        newI.setAttribute("id", "updateH1"+i+kintamasis+"");
        newI.setAttribute("onclick", "updateH1(this.id)");
        var newH1 = document.createElement("h1");
        newH1.setAttribute("id","h1Editor"+i+kintamasis+"");
        newH1.textContent = "Drag Me";
        newH1.style.textAlign = "left";
        newH1.style.fontFamily = "Arial";
        newH1.style.fontSize = "60px";
        newH1.style.color = "rgb(244, 149, 66)";
        newDiv.appendChild(newI);
        newDiv.appendChild(newTrinti);
        newDiv.appendChild(newH1);
        console.log(newDiv);
        var elementoID = newH1.id;
        var elementoTipas = newH1.tagName;
        var elementoTekstoTurinys = newH1.textContent;
        var elementoLygiavimas = newH1.style.textAlign;
        var elementoSriftas = newH1.style.fontFamily;
        var elementoTekstoDydis = newH1.style.fontSize;
        var elementoSpalva = newH1.style.color;
        var vartotojoID  = $("#vartotojas").text();
        var sectionID= "new"+kintamasis;
        var puslapioPav =   $("#pslPav").text();
        var sablonoPav = $("#sablonoPav").text();
      //  console.log(vartotojoID,sectionID);
   $.ajax({
    type: 'POST',
    url: 'insert2.php',               
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,vartotojoID:vartotojoID,
    sectionID:sectionID,elementoID:elementoID,elementoTipas:elementoTipas,elementoLygiavimas:elementoLygiavimas,
    elementoSriftas:elementoSriftas,elementoTekstoDydis:elementoTekstoDydis,elementoTekstoTurinys:elementoTekstoTurinys,
    elementoSpalva:elementoSpalva},
 success: function(data) {

  $("#success-alert").text('Pridėjote naują antraštę');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

}
else if(srcId==="para0"){
  var klonas = document.getElementById(srcId);
console.log(klonas);
var newDiv = document.createElement("div");
newDiv.setAttribute("class","dragMe2");
newDiv.setAttribute("id", "para"+i+kintamasis+"");
newDiv.setAttribute("draggable", "true");
var newI = document.createElement("i");
var newTrinti = document.createElement("i");
newTrinti.setAttribute("class","fa fa-times trynimo-ikona2");
newTrinti.setAttribute("id",""+i+kintamasis+"");
newTrinti.setAttribute("onclick","deleteElement2(this.id)");
newI.setAttribute("class","fa fa-pencil");
newI.setAttribute("id", "updateText"+i+kintamasis+"");
newI.setAttribute("onclick", "updateText(this.id)");
var newParagraph = document.createElement("p");
newParagraph.setAttribute("id","txEditor"+i+kintamasis+""); 
newParagraph.style.fontSize = "12px";
newParagraph.textContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
newParagraph.style.color = "rgba(0,0,0)";
newParagraph.style.fontFamily = "Arial";
newParagraph.style.textAlign = "left";
newDiv.appendChild(newI);
newDiv.appendChild(newTrinti);
newDiv.appendChild(newParagraph);

var vartotojoID = $("#vartotojas").text();


var elementoID = newParagraph.id;
var elementoTipas = newParagraph.tagName;
var elementoTekstoTurinys = newParagraph.textContent;
var elementoLygiavimas = newParagraph.style.textAlign;
var elementoSriftas = newParagraph.style.fontFamily;
var elementoTekstoDydis = newParagraph.style.fontSize;
var elementoSpalva = newParagraph.style.color;
var sectionID= "new"+kintamasis;
console.log(vartotojoID,kintamasis);
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
$.ajax({
    type: 'POST',
    url: 'insert2.php',               
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,sectionID:sectionID,vartotojoID:vartotojoID,
    elementoID:elementoID,elementoTipas:elementoTipas,elementoLygiavimas:elementoLygiavimas,elementoSriftas:elementoSriftas,
    elementoTekstoDydis:elementoTekstoDydis,elementoTekstoTurinys:elementoTekstoTurinys,elementoSpalva:elementoSpalva},
 success: function(data) {

  $("#success-alert").text('Pridėjote naują pastraipą');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})



}
else if(srcId === "imgDrag0"){

  var klonas = document.getElementById(srcId);
console.log(klonas);
var newDiv = document.createElement("div");
newDiv.setAttribute("class","dragMe2");
newDiv.setAttribute("id", "image"+i+kintamasis+"");
newDiv.setAttribute("draggable", "true");
var anotherNew = document.createElement("div");
anotherNew.setAttribute("class", "js--image-preview");
anotherNew.setAttribute("id","imagePreview"+i+kintamasis+"");
anotherNew.setAttribute("data-toggle", "modal");
anotherNew.setAttribute("data-target","#mymodal"+i+kintamasis+"");
var anotherNew1 = document.createElement("div");
anotherNew1.setAttribute("class", "upload-options");
var newI = document.createElement("i");
newI.setAttribute("id", "updateImage"+i+kintamasis+"");
newI.setAttribute("onclick", "updateImageInfo(this.id)");
newI.setAttribute("class","fa fa-pencil imageUpdateIcon");
var newInput = document.createElement("input");
newInput.setAttribute("type","file");
newInput.setAttribute("onclick","nuotraukos(this.id)")
newInput.setAttribute("id","nuotraukosElID"+i+kintamasis+"");
newInput.setAttribute("class","image-upload");
newInput.setAttribute("accept","image/*");
var newLabel = document.createElement("label");
newLabel.setAttribute("class","ikonaPridet")
var NewDezute = document.createElement("div");
NewDezute.setAttribute("class","dezute");
var newTrinti = document.createElement("i");
newTrinti.setAttribute("class","fa fa-times trynimo-ikona3");
newTrinti.setAttribute("id",""+i+kintamasis+"");
newTrinti.setAttribute("onclick","deleteElement3(this.id)");

newLabel.appendChild(newInput);
anotherNew1.appendChild(newLabel);
NewDezute.appendChild(anotherNew);
NewDezute.appendChild(anotherNew1);
newDiv.appendChild(newI);
newDiv.appendChild(newTrinti);
newDiv.appendChild(NewDezute);

console.log(i);
/*pridet pop up langa*/
var vienas = document.createElement("div");
vienas.setAttribute("class", "modal fade"+i+kintamasis+"");
vienas.setAttribute("id", "mymodal"+i+kintamasis+"");
var du= document.createElement("div");
du.setAttribute("class", "modal-dialog");
var trys = document.createElement("div");
trys.setAttribute("class", "modal-content");
var keturi = document.createElement("div");
keturi.setAttribute("class", "modal-header");
var header = document.createElement("h3");
header.setAttribute("class","antrasteNuotraukos"+i+kintamasis+"");
console.log(i);
header.textContent = "Nuotraukos nustatymuose pakeiskite mane!";
var penki = document.createElement("div");
penki.setAttribute("class", "modal-body");
var modalTekstas = document.createElement("p");
modalTekstas.setAttribute("class", "tekstasNuotraukos"+i+kintamasis+"");
modalTekstas.textContent = "Nuotraukos nustatymuose pakeiskite mane! Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!";
penki.appendChild(modalTekstas);
keturi.appendChild(header);
trys.appendChild(keturi);
trys.appendChild(penki);
du.appendChild(trys);
vienas.appendChild(du);
newDiv.appendChild(vienas);

console.log(newDiv);
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
var nuotraukosKintamasis= "";
var vartotojasID = $("#vartotojas").text();
    var nuotraukosID = newInput.id;
    var segmentas = "new"+kintamasis;
    var antrasteNuotraukos = "Nuotraukos nustatymuose pakeiskite mane!";
    var antrastesSpalva = "rgb(255,255,255)";
    var antrastesLygiavimas = "left";
    var antrastesSriftas = "Arial";
    var antrastesDydis = "40px";
    var tekstasNuotraukos = "Nuotraukos nustatymuose pakeiskite mane! Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!Nuotraukos nustatymuose pakeiskite mane!" ;
    var tekstoSpalvva = "rgb(255,255,255)";
    var tekstoLygiavimas = "center";
    var tekstoSriftas = "Arial";
    var tekstoDydis = "20px";
    $.ajax({
    type: 'POST',
    url: 'insertPicture.php',  
    datatype: 'json',             
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,nuotraukosKintamasis:nuotraukosKintamasis,
    segmentas:segmentas,nuotraukosID:nuotraukosID,vartotojasID:vartotojasID,
    antrasteNuotraukos:antrasteNuotraukos,antrastesSpalva:antrastesSpalva,
      antrastesLygiavimas:antrastesLygiavimas,antrastesSriftas:antrastesSriftas,
      antrastesDydis:antrastesDydis,tekstasNuotraukos:tekstasNuotraukos,
      tekstoSpalvva:tekstoSpalvva,tekstoLygiavimas:tekstoLygiavimas,
      tekstoSriftas:tekstoSriftas,tekstoDydis:tekstoDydis},
 success: function(data) {

  $("#success-alert").text('Pridėjote naują nuotrauką');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 

    }


    else if(srcId === "linkDrag"){

var klonas = document.getElementById(srcId);
console.log(klonas);
var newDiv = document.createElement("div");
newDiv.setAttribute("id","nuoroda"+i+kintamasis+"");
var insideDiv = document.createElement("div");
insideDiv.setAttribute("class","dragMe2");
insideDiv.setAttribute("id", "link"+i+kintamasis+"");
insideDiv.setAttribute("draggable", "true");
insideDiv.style.textAlign = "center";
insideDiv.style.fontSize = "60px";

var newLink1 = document.createElement("a");
newLink1.setAttribute("href","#");
newLink1.setAttribute("id", "facebook"+i+kintamasis+"");
var newIcon1 = document.createElement("i");
newIcon1.setAttribute("class","fa fa-facebook");
newIcon1.style.padding = "20px";
newLink1.appendChild(newIcon1);

var newLink2 = document.createElement("a");
newLink2.setAttribute("href","#");
newLink2.setAttribute("id", "instagram"+i+kintamasis+"");
var newIcon2 = document.createElement("i");
newIcon2.setAttribute("class","fa fa-instagram");
newIcon2.style.padding = "20px";
newLink2.appendChild(newIcon2);


var newLink3 = document.createElement("a");
newLink3.setAttribute("href","#");
newLink3.setAttribute("id", "behance"+i+kintamasis+"");
var newIcon3 = document.createElement("i");
newIcon3.setAttribute("class","fa fa-behance");
newIcon3.style.padding = "20px";
newLink3.appendChild(newIcon3);

var newI = document.createElement("i");
newI.setAttribute("id", "updateLink"+i+kintamasis+"");
newI.setAttribute("onclick", "updateLink(this.id)");
newI.setAttribute("class","fa fa-pencil");



var newTrinti = document.createElement("i");
newTrinti.setAttribute("class","fa fa-times trynimo-ikona2");
newTrinti.setAttribute("id",""+i+kintamasis+"");
newTrinti.setAttribute("onclick","deleteElement4(this.id)");

newDiv.appendChild(newI);
newDiv.appendChild(newTrinti);
insideDiv.appendChild(newLink1);
insideDiv.appendChild(newLink2);
insideDiv.appendChild(newLink3);
newDiv.appendChild(insideDiv);

var facebook = newLink1.getAttribute("href");
var instagram = newLink2.getAttribute("href");
var behance = newLink3.getAttribute("href");
var dydis = insideDiv.style.fontSize;
var elementoID = insideDiv.getAttribute("id");
console.log(elementoID);
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
var sectionID= "new"+kintamasis;
var vartotojasID = $("#vartotojas").text();

var spalva = "rgb(150,150,150)";
$.ajax({
    type: 'POST',
    url: 'insertLinks.php',               
    data: {vartotojasID:vartotojasID,sablonoPav:sablonoPav,puslapioPav:puslapioPav,elementoID:elementoID,
      facebook:facebook,instagram:instagram,behance:behance,dydis:dydis,sectionID:sectionID,spalva:spalva},
 success: function(data) {

  $("#success-alert").text('Pridėjote naują nuorodą');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

  }

    
  if (droppable) {
    
    ev.target.appendChild(newDiv); //patikriname ar droppable yra tiesa, tai reiskia stulpelis egzistuoja ir pridame jam naują elementą.

     
  }
  
});









}

paspaudimai+=1;
    }

   




   
   

    //ištrinti section
    function deleteSection(paspaustasID){
        var div = document.getElementById("newContent");
        console.log(paspaustasID);
        var section = document.getElementById("new"+paspaustasID+"");
        var sectionID = "new"+paspaustasID;
        console.log(section);
        div.removeChild(section);
        var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
        $.ajax({
    type: 'POST',
    url: 'delete1.php',               
    data: {sectionID:sectionID,puslapioPav:puslapioPav,sablonoPav:sablonoPav},
 success: function(data) {

  $("#success-alert").text('Segmentas sėkmingai ištrintas');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

    }


    function deleteElement1(paspaustasID){
 
        var elementas = document.getElementById("draggableBlock"+paspaustasID+"");
        var elementoID = "h1Editor"+paspaustasID;
        $(elementas).remove();
        var puslapioPav =   $("#pslPav").text();
        var sablonoPav = $("#sablonoPav").text();
    $.ajax({
    type: 'POST',
    url: 'deleteElement.php',               
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,elementoID:elementoID},
 success: function(data) {

  $("#success-alert").text('Antraštė sėkmingai ištrinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

    }



    function deleteElement2(paspaustasID){
  console.log(paspaustasID);
 
        var kitasElementas = document.getElementById("para"+paspaustasID+"");
        var kitoElementoID = "txEditor"+paspaustasID;
       
        $(kitasElementas).remove();

        var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
      

    $.ajax({
    type: 'POST',
    url: 'deleteElement.php',               
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,kitoElementoID:kitoElementoID},
 success: function(data) {

  $("#success-alert").text('Pastraipa sėkmingai ištrinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

    }


    function deleteElement3(paspaustasID){
  console.log(paspaustasID);
     
        var treciasElementas = document.getElementById("image"+paspaustasID+"");
       var trecioElID = "nuotraukosElID"+paspaustasID;
      
      
        $(treciasElementas).remove();
    
        var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
    

    $.ajax({
    type: 'POST',
    url: 'deleteElement.php',               
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,trecioElID:trecioElID},
 success: function(data) {

  $("#success-alert").text('Nuotrauka sėkmingai ištrinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

    }


    function deleteElement4(paspaustasID){
  console.log(paspaustasID);
       
       var ketvirtasElementas = document.getElementById("nuoroda"+paspaustasID+"");
       var ketvirtoElID = "link"+paspaustasID;
    
        $(ketvirtasElementas).remove();
        var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
   

    $.ajax({
    type: 'POST',
    url: 'deleteElement.php',               
    data: {ketvirtoElID:ketvirtoElID,puslapioPav:puslapioPav,sablonoPav:sablonoPav},
 success: function(data) {

  $("#success-alert").text('Nuoroda sėkmingai ištrinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
})

    }


















function goToFinal(){

  location.href = "pagrindinis.php";


}


    $(document).ready(function() {
     
  $('input[id="spalvom"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R').val(),
      G = $('.G').val(),
      B = $('.B').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value').text("rgb(" + rgb + ");");

  });

  
});
$('input[id="spalvom1"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R1').val(),
      G = $('.G1').val(),
      B = $('.B1').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color1').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value1').text("rgb(" + rgb + ");");

  });

  
});


$('input[id="spalvom2"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R2').val(),
      G = $('.G2').val(),
      B = $('.B2').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color2').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value2').text("rgb(" + rgb + ");");

  });

  
});

$('input[id="spalvom3"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R3').val(),
      G = $('.G3').val(),
      B = $('.B3').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color3').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value3').text("rgb(" + rgb + ");");

  });

  
});
$('input[id="spalvom4"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R4').val(),
      G = $('.G4').val(),
      B = $('.B4').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color4').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value4').text("rgb(" + rgb + ");");

  });

  
});
$('input[id="spalvom5"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R5').val(),
      G = $('.G5').val(),
      B = $('.B5').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color5').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value5').text("rgb(" + rgb + ");");

  });

  
});

$('input[id="spalvom6"]').on('mousedown', function() {
  var input = $(this);
  $(document).on('mousemove', function() {
  var R = $('.R6').val(),
      G = $('.G6').val(),
      B = $('.B6').val(),
      rgb = R + ", " + G + ", " + B;

    $('.color6').css({
      'background-color': 'rgb(' + rgb + ')'
    });

    $('.value6').text("rgb(" + rgb + ");");

  });

  
});

    
    $('.nav-toggle').click(function(e) {
      
      e.preventDefault();
      $("html").toggleClass("openNav");
      $(".nav-toggle").toggleClass("active");
    
    });
   
    });
    /*funkcija, kur paspaudus mygtuka navigacijoje, navigacija pasikeicia i musu pasirinkima*/
    $(document).ready(function(){
      $(".pastraipos").hide();
        $(".antrastes").hide();


      $(".changeTitle").click(function(){
        $("li").hide();
        $(".navigationTitle").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeImage").click(function(){
        $("li").hide();
        $(".navigationImage").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeLinks").click(function(){
        $("li").hide();
        $(".navigationLinks").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeText").click(function(){
        $("li").hide();
        $(".navigationText").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeParagraph").click(function(){
        $("li").hide();
        $(".navigationParagraph").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeSection").click(function(){
        $("li").hide();
        $(".navigationSection").show();
        $("#perziurosMygtukas").hide();

      });
      $(".changeSection").click(function(){
        $("li").hide();
        $("#perziurosMygtukas").hide();
        $(".navigationSection").show();
      });
    
      
      $(".goBackNav").click(function(){
        $("li").show(500);
        $(".navButton").show(500);
        $("#perziurosMygtukas").show();
        $(".navigationParagraph").hide();
        $(".navigationText").hide();
        $(".navigationTitle").hide();
        $(".navigationSection").hide();
        $(".navigationImage").hide();
        $(".navigationLinks").hide();
        $(".editHeading").hide();
        $(".editText").hide();
        $(".editBio").hide(300);
        $(".editImage").hide(300);
        $(".editLinks").hide();
        
        
      });
      $("#koreguotiAntraste").click(function(){
        $('.antrastes').slideToggle("fast");
      
      });
      $("#koreguotiPastraipas").click(function(){
        $(".pastraipos").slideToggle("fast");
       
      });
    });
//


function nuotraukos(unikalus){

function nuotraukuIkelimas(dezute) {
let ikelimoLaukas = dezute.querySelector('.image-upload');

ikelimoLaukas.addEventListener('change', gautiFaila);

function gautiFaila(e){
  let failas = e.currentTarget.files[0];
  tikrinti(failas);
}

function perziuraIMG(failas){
  let thum= dezute.querySelector('.js--image-preview'),
      reader = new FileReader();

  reader.onload = function() {
    thum.style.backgroundImage = 'url(' + reader.result + ')';
    //surenkame nuotraukos kintamuosius kuriuos siusime i duomenu baze
    var nuotraukosKintamasis = reader.result;
var elID = unikalus;
console.log(unikalus);
var vartotojasID = $("#vartotojas").text();
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
    $.ajax({
    type: 'POST',
    url: 'updatePicture.php',  
    datatype: 'json',             
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,nuotraukosKintamasis:nuotraukosKintamasis,
    elID:elID,vartotojasID:vartotojasID},
 success: function(data) {

  $("#success-alert").text('Nuotrauka sėkmingai atnaujinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 
unikalus = 0;

  }
  reader.readAsDataURL(failas);
  thum.className += ' js--no-default';
}

function tikrinti(failas){
  let imgTipas = /image.*/;
  if (!failas.type.match(imgTipas)) {
    throw 'Datei ist kein Bild';
  } else if (!failas){
    throw 'Kein Bild gewählt';
  } else {
  
    perziuraIMG(failas);
  }
}

}
var dezutes = document.querySelectorAll('.dezute');
console.log(dezutes);
for (let i = 0; i < dezutes.length; i++) {
var dezute = dezutes[i];

nuotraukuIkelimas(dezute);
}

  
}


/*Žemiau esanti funkcija, pašalina visus builderio elementus ir vartotojas gali atlikti perziura*/
function remove(){

var istrinti = document.querySelectorAll(".col-12");
var istrinti2 = document.querySelectorAll(".row");
console.log(istrinti);
for(let i =0;i<istrinti.length;i++){
  istrinti[i].style.border = "0px solid red";
}

for(let i =0;i<istrinti2.length;i++){
  istrinti2[i].style.border = "0px solid red";
}

}


//antrasciu koregavimas



function updateH1(elementas){
  console.log(elementas);
  
  var res = elementas.substr(8, 3);
  console.log(res);

  $('#musuH1ID').text(res);
  var newSkaicius = $('#musuH1ID').text();
          console.log(newSkaicius);
          var textElement = document.getElementById("h1Editor"+newSkaicius);
  textElement.contentEditable = true;

        $("li").hide();
        $(".navigationText").hide();
        $(".editHeading").show();
        $(".editText").hide();
        $("#saveEditedElement").click(function(){
          var newSkaicius = $('#musuH1ID').text();
          console.log(newSkaicius);
          var textElement = document.getElementById("h1Editor"+newSkaicius);
          var reiksme =  $( "#fontSize" ).val();
          var reiksme2 = $("#alignText").val();
          var reiksme3 = $("#selectFont").val();
          var reiksme4 = $(".color").css("background-color");
           var tekstoDydis = textElement.style.fontSize = reiksme;
           var tekstoLygiavimas = textElement.style.textAlign = reiksme2;
           var tekstoVidus = textElement.textContent;
           var tekstoSriftas = textElement.style.fontFamily = reiksme3;
           var tekstoSpalva = textElement.style.color= reiksme4;
            textElement.contentEditable = false;
          var elementoID = "h1Editor"+newSkaicius;
console.log(tekstoVidus);
var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
            $.ajax({
    type: 'POST',
    url: 'editElement.php',  
    datatype: 'json',             
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,
    elementoID:elementoID,tekstoDydis:tekstoDydis,
    tekstoLygiavimas:tekstoLygiavimas,tekstoVidus:tekstoVidus,
    tekstoSriftas:tekstoSriftas,tekstoSpalva:tekstoSpalva},
 success: function(data) {

  $("#success-alert").text('Antraštė sėkmingai atnaujinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 

          });


       
}
/*atnaujina pastraipas*/

function updateText(elementas){
  console.log(elementas);
  
  var res = elementas.substr(10, 3);
  console.log(res);
  $('#musuElID').text(res);
  var newSkaicius = $('#musuElID').text();
          console.log(newSkaicius);
          var textElement = document.getElementById("txEditor"+newSkaicius);
  textElement.contentEditable = true;

        $("li").hide();
        $(".navigationText").hide();
        $(".navigationParagraph").hide();
        $(".editText").show();
        $(".editHeading").hide();

        $("#saveEditedElement2").click(function(){
          var newSkaicius = $('#musuElID').text();
          console.log(newSkaicius);
          var textElement = document.getElementById("txEditor"+newSkaicius);

          var reiksme =  $( "#fontSize2" ).val();
          var reiksme2 = $("#alignText2").val();
          var reiksme3 = $("#selectFont2").val();
          var reiksme4 = $(".color2").css("background-color");
           var tekstoDydis = textElement.style.fontSize = reiksme;
           var tekstoLygiavimas = textElement.style.textAlign = reiksme2;
           var tekstoSriftas = textElement.style.fontFamily = reiksme3;
           var tekstoVidus = textElement.textContent;
           var tekstoSpalva = textElement.style.color= reiksme4;
           textElement.contentEditable = false;
           var elementoID = "txEditor"+newSkaicius;
           var puslapioPav =   $("#pslPav").text();
           var sablonoPav = $("#sablonoPav").text();

            $.ajax({
    type: 'POST',
    url: 'editElement.php',  
    datatype: 'json',             
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,elementoID:elementoID,tekstoDydis:tekstoDydis,tekstoLygiavimas:tekstoLygiavimas,tekstoVidus:tekstoVidus,tekstoSriftas:tekstoSriftas,tekstoSpalva:tekstoSpalva},
 success: function(data) {

  $("#success-alert").text('Pastraipa sėkmingai atnaujinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 

          });


       
       
}

//atnaujina nuorodas
function updateLink(elementas){
  console.log(elementas);
  
  var res = elementas.substring(10, 12);
  $('#musuLinkID').text(res);
  var newSkaicius = $('#musuLinkID').text();
          console.log(newSkaicius);
  console.log(res);

     var  mainLinks = document.getElementById("link"+newSkaicius+"");
     var  facebook = document.getElementById("facebook"+newSkaicius+"");
     var  instagram = document.getElementById("instagram"+newSkaicius+"");
     var  behance = document.getElementById("behance"+newSkaicius+""); 
     console.log(facebook,instagram,behance);
        $("li").hide();
        $(".navigationText").hide();
        $(".navigationParagraph").hide();
        $(".navigationLinks").hide();
        $(".editLinks").show();
        $(".editHeading").hide();
        $("#saveEditedElement4").click(function(){

          var newSkaicius = $('#musuLinkID').text();
          console.log(newSkaicius);
          var textElement = document.getElementById("txEditor"+newSkaicius);

          var reiksme =  $( "#ikonuDydis" ).val();
          var reiksme2 = $("#facebook").val();
          var reiksme3 = $("#instagram").val();
          var reiksme4 = $("#behance").val();
          var reiksme5 = $(".color6").css("background-color");
           facebook.setAttribute("href","https://www.facebook.com/"+reiksme2);
           instagram.setAttribute("href","https://www.instagram.com/"+reiksme3);
           behance.setAttribute("href","https://www.behance.com/"+reiksme4);
          mainLinks.style.fontSize = reiksme;
          facebook.style.color = reiksme5;
          instagram.style.color = reiksme5;
          behance.style.color = reiksme5;
       var nuoroduDydis= mainLinks.style.fontSize;
       var facebookLink = facebook.getAttribute("href");
       var instagramLink = instagram.getAttribute("href");
       var behanceLink = behance.getAttribute("href");
          var elementoID = "link"+newSkaicius;
          
        
console.log(nuoroduDydis,facebookLink,instagramLink,behanceLink,elementoID,reiksme5);
          var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();

var vartotojasID = $("#vartotojas").text();
var ikonuSpalva = reiksme5;
            $.ajax({
    type: 'POST',
    url: 'editLinks.php',  
    datatype: 'json',             
    data: {vartotojasID:vartotojasID,puslapioPav:puslapioPav,sablonoPav:sablonoPav,nuoroduDydis:nuoroduDydis,
      facebookLink:facebookLink,instagramLink:instagramLink,behanceLink:behanceLink,
      elementoID:elementoID,ikonuSpalva:ikonuSpalva},
 success: function(data) {

  $("#success-alert").text('Nuoroda sėkmingai atnaujinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 

          });


       
}
/*nuotrauku atnaujinimas */
function updateImageInfo(nuotraukosID)
{
  var res = nuotraukosID.substr(11, 2);
  console.log(res,
          nuotraukosID);

          $('#musuNuotraukosID').text(res);
 
       
    
        $("li").hide();
        $(".navigationImage").hide();
        $(".editImage").show();
        $(".navigationLinks").hide();
        $("#saveEditedPicture").click(function(){
          var newSkaicius = $('#musuNuotraukosID').text();
          console.log(newSkaicius);
          var gautiH1 = $("#popH1").val();
          var h1Dydis = $("#fontSize4").val();
          var h1Sriftas = $("#selectFont4").val();
          var h1Lygiavimas = $("#alignText4").val();
          var h1Spalva = $(".color4").css("background-color");
          var gautiText = $.trim($("#popText").val());
          var textDydis = $("#fontSize5").val();;
          var textSriftas = $("#selectFont5").val();;
          var textLygiavimas = $("#alignText5").val();;
          var textSpalva = $(".color5").css("background-color");;
         
          var vietaH1 = $(".antrasteNuotraukos"+newSkaicius+"");
          vietaH1.text(gautiH1);
          vietaH1.css("color", ""+h1Spalva+"");
          vietaH1.css("text-align", h1Lygiavimas);
          vietaH1.css("font-family", h1Sriftas);
          vietaH1.css("font-size", ""+h1Dydis+"px");
         
          var vietaText = $(".tekstasNuotraukos"+newSkaicius+"");
          vietaText.text(gautiText);
          vietaText.css("color", ""+textSpalva+"");
          vietaText.css("text-align", textLygiavimas);
          vietaText.css("font-family", textSriftas);
          vietaText.css("font-size", ""+textDydis+"px");
        

        //atnaujinami duomenys duomenu bazeje
        var elID = "nuotraukosElID"+newSkaicius;
        var vartotojasID = $("#vartotojas").text();

        var h1Spalva = vietaH1.css("color");
        var h1Lygiavimas = vietaH1.css("text-align");
        var h1Sriftas = vietaH1.css("font-family");
        var h1Dydis = vietaH1.css("font-size");
        var h1Tekstas = vietaH1.text();

        var textSpalva = vietaText.css("color");
        var textLygiavimas = vietaText.css("text-align");
        var textSriftas = vietaText.css("font-family");
        var textDydis = vietaText.css("font-size");
        var textTekstas = vietaText.text();

        var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();

          $.ajax({
    type: 'POST',
    url: 'updatePictureInfo.php',  
    datatype: 'json',          
    data: {puslapioPav:puslapioPav,sablonoPav:sablonoPav,vartotojasID:vartotojasID, elID:elID,
      h1Tekstas:h1Tekstas,h1Spalva:h1Spalva,
      h1Sriftas:h1Sriftas,h1Dydis:h1Dydis, h1Lygiavimas:h1Lygiavimas,
      textTekstas:textTekstas,textSpalva:textSpalva,
      textLygiavimas:textLygiavimas,textSriftas:textSriftas,
      textDydis:textDydis},
 success: function(data) {

  $("#success-alert").text('Nuotraukos informacija sėkmingai atnaujinta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 

          });
          
}
window.onload=function(){
 

 
 
  /*headerio nuotraukos ikelimas*/

  function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.topLayer'),
        reader = new FileReader(); //generuoja nuotraukos turini

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
      var vieta = "headerioNuotrauka";
            var nuotrauka = reader.result;
            var puslapioPav =   $("#pslPav").text();
var sablonoPav = $("#sablonoPav").text();
var vartotojas = $("#vartotojas").text();
    $.ajax({
    type: 'POST',
    url: 'imageInsert.php',  
    datatype: 'json',          
    data: {nuotrauka:nuotrauka,vieta:vieta,puslapioPav:puslapioPav,sablonoPav:sablonoPav,vartotojas:vartotojas},
 success: function(data) {

  $("#success-alert").text('Šablono nuotrauka sėkmingai įkelta.');
  $("#success-alert").show(1000);
setTimeout(function() { $("#success-alert").hide(1000); }, 2000);
 }  
}) 
    }
    reader.readAsDataURL(file);
    thumb.className += ' topLayerNera';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initImageUpload(box);
}


/*headerPicture uplaod end*/


}
    </script>

</html>
