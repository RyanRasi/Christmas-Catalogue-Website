<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Product List - Chrimbo Catalogue</title>
<meta charset="utf-8">
<meta name="keywords" content="angels, bells, candles, cards, celebrate, craft, elf, festival, family reunion, Frosty ,greetings, holiday, jubilee, merry ,Noel ,ornaments ,parades, party, red/green, Scrooge, season, spirit, stocking stuffers, stockings, tidings, tradition, traffic, trips, vacation, wassail, wassailing, Xmas, yule, yuletide, chimney ,elves, fairies ,jolly, North Pole, reindeer, Rudolph, sled, sleigh, sleigh bells, St. Nick, toys"/>
<meta name="description" content="Product list for finding christmas products and many decorations for the festive season" />
<!--These meta tags above define the description and keywords for SEO-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="tablescript.js"></script>

  <link rel="stylesheet" href="style.css">
<!--Imports libraries-->
</head>
  
<body>
 
<div class="container-fluid">

<div class="header">
  <h1>Chrimbo Catalogue</h1>
</div>

  <div class="topnav">
  <a href="homepage.php">Homepage</a>
  <a class="activated" href="productlist.php">Product List</a>
  <a href="about.php">About</a>
  
  	 <?php include 'notloggedin.php';
?> 
  
  </div>
   <div class="row"> 

	  	 <?php include 'loggedin.php';
?>  </div>



  <div class="row">
    <div class="col-sm-12" style="">
    <div class="card">
	
 <div class="table-responsive">
    <h1 align="center">Product List</h1>
    <br>
    <div align="center">
     <button type="button" name="load_data" id="load_data" class="btn btn-info">Load/Refresh Data</button>
    </div>
    <br>
	<h6 align="center">Click on product pictures to view expanded page</h6>
    <div id="product_table">
    </div>
   </div>
  </div>
	<!--Can click on product to view expanded page-->




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