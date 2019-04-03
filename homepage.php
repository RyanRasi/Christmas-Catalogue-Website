<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage - Chrimbo Catalogue</title>
<meta charset="utf-8">
<meta name="keywords" content="angels, bells, candles, cards, celebrate, craft, elf, festival, family reunion, Frosty ,greetings, holiday, jubilee, merry ,Noel ,ornaments ,parades, party, red/green, Scrooge, season, spirit, stocking stuffers, stockings, tidings, tradition, traffic, trips, vacation, wassail, wassailing, Xmas, yule, yuletide, chimney ,elves, fairies ,jolly, North Pole, reindeer, Rudolph, sled, sleigh, sleigh bells, St. Nick, toys"/>
<meta name="description" content="Homepage for finding christmas products" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="fontsize.js"></script>
<script src="currencyconverter.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
  
<body>
 
<div class="container-fluid">

<div class="header">
  <h1>Chrimbo Catalogue</h1>
</div>

  <div class="topnav">
  <a class="activated" href="homepage.php">Homepage</a>
  <a href="productlist.php">Product List</a>
  <a href="about.php">About</a>
  
  	 <?php include 'notloggedin.php';
?> 
  
  </div>


  
   <div class="row"> 
   

	   	 <?php include 'loggedin.php';
?>  </div>
	  

	  
	  
	  
	  

  <div class="row">
    <div class="col-sm-7" style="">
	
  
    <div class="card">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/christmas_1.png" style="width:100%">
  <div class="text">What are you putting under the tree?</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/christmas_2.png" style="width:100%">
  <div class="text">Buy some presents for those stockings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/christmas_3.png" style="width:100%">
  <div class="text">Get gifts of all variety this Christmas</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3500); // Change image every 2 seconds
}// Creates a fading transition that cycles through 3 images
</script>
	<!--Slideshow-->
    </div>
	</div>
	
    <div class="col-sm-5" style="">
	
	      <div class="card">
<script>
if (sessionStorage.pagecount) {
sessionStorage.pagecount = Number(sessionStorage.pagecount) + 1;
} else {
sessionStorage.pagecount = 1;
// Or: sessionStorage.setItem("pagecount", 1);
}
document.write("You have made " + sessionStorage.pagecount +
" visits to this page.");
</script>
    </div>
	
	
	
	<div class="card">   
<h3>Text Size</h3>

<button class="button button5"> <div id="sizeUp">Bigger Text</div> </button>

<button class="button button5"> <div id="normal">Normal Text</div> </button>

<button class="button button5"> <div id="sizeDown">Smaller Text</div> </button>
	<!--JQuery text size-->
	</div>
	
	
    <div class="card">
      <h3>Audio Widget</h3>
      <div>
	  <audio id="snd">
<source src="sound/amclassical_bon_sonata_in_g_minor_mvt_3.mp3" type="audio/mpeg"></audio>
<button id="stop">Stop</button> 
<button id="play">Play</button>
<script>
var player=document.getElementById("snd");
document.getElementById("stop").onclick=function(){
player.pause();};
document.getElementById("play").onclick=function(){
player.play();};
</script>
	  </div>
    </div>
		<!--Audio widget-->

	
	
    <div class="card">   

	<div id="box">

	<h3>Currency Converter</h3>
	<table>
		<tr>
			<td><input class="form-control form-control-sm" id="fromAmount"<type="text" size="15" value="1"/></td>
			<td>
				<select id="fromCurrency" onchange="convertCurrency();">
					<option value="GBP" selected>Great British Pound (GBP)</option>
					<option value="USD">United States Dollar (USD)</option>
					<option value="EUR">European Euro (EUR)</option>
					<option value="JPY">Japanese Yen (JPY)</option>
					<option value="CHF">Swiss Franc (CHF)</option>
					<option value="CAD">Canadian Dollar (CAD)</option>
					<option value="AUD">Australian Dollar (AUD)</option>
				</select>
			</td>
		</tr>
		<tr><td><input class="form-control form-control-sm" id="toAmount"<type="text" size="15" disabled/></td>
			<td>
				<select id="toCurrency" onchange="convertCurrency();">
					<option value="GBP">Great British Pound (GBP)</option>
					<option value="USD" selected>United States Dollar (USD)</option>
					<option value="EUR">European Euro (EUR)</option>
					<option value="JPY">Japanese Yen (JPY)</option>
					<option value="CHF">Swiss Franc (CHF)</option>
					<option value="CAD">Canadian Dollar (CAD)</option>
					<option value="AUD">Australian Dollar (AUD)</option>
				</select>
			</td></tr>
	</table>
	<br>
	<button onclick="convertCurrency()">Convert</button>
		<!--Currency converter drop down-->

	
	</div>
  </div>
  </div>
  </div>
     <div class="row">
	     <div class="col-sm-12" style="">
  <div class="footer">
  <h6>© Copyright Ryan Rasi</h6>
  </div>
</div>
</div>
  
</div>
  

</body>
</html>