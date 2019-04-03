<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>About - Chrimbo Catalogue</title>
<meta charset="utf-8">
<meta name="keywords" content="angels, bells, candles, cards, celebrate, craft, elf, festival, family reunion, Frosty ,greetings, holiday, jubilee, merry ,Noel ,ornaments ,parades, party, red/green, Scrooge, season, spirit, stocking stuffers, stockings, tidings, tradition, traffic, trips, vacation, wassail, wassailing, Xmas, yule, yuletide, chimney ,elves, fairies ,jolly, North Pole, reindeer, Rudolph, sled, sleigh, sleigh bells, St. Nick, toys"/>

<meta name="description" content="About for finding christmas products" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">

</head>
  
<body>
 
<div class="container-fluid">

<div class="header">
  <h1>Chrimbo Catalogue</h1>
</div>

  <div class="topnav">
  <a href="homepage.php">Homepage</a>
  <a href="productlist.php">Product List</a>
  <a class="activated" href="about.php">About</a>
  
  	 <?php include 'notloggedin.php';
?> 
  
  </div>
   <div class="row"> 

  	 <?php include 'loggedin.php';
?>  </div>

  <div class="row">
	
      <div class="col-sm-3">
	  <div class="card">
	  <div class="text-center">
<img src="images/ryan_profile.jpg" alt="Picture of Ryan" style="width:50%;">
</div>
      </div>
	  </div>
      <div class="col-sm-9">
	  <div class="card">
	  	<h4><b>CEO and President</b></h4>
	<p>Ryan is the founder and creator of the Christmas product catalogue that has decimated sales records since it's induction into the mainstream market. He is an advanced programmer capable of creating advanced applications that look professional yet simple to navigate around for the average user.</p>
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