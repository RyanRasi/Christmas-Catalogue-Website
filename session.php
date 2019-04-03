<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Login - Chrimbo Catalogue</title>
<meta charset="utf-8">
<meta name="keywords" content="angels, bells, candles, cards, celebrate, craft, elf, festival, family reunion, Frosty ,greetings, holiday, jubilee, merry ,Noel ,ornaments ,parades, party, red/green, Scrooge, season, spirit, stocking stuffers, stockings, tidings, tradition, traffic, trips, vacation, wassail, wassailing, Xmas, yule, yuletide, chimney ,elves, fairies ,jolly, North Pole, reindeer, Rudolph, sled, sleigh, sleigh bells, St. Nick, toys"/>
<meta name="description" content="Login for finding christmas products" />
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
  <a href="about.php">About</a>
  
  	 <?php include 'notloggedin.php';
?> 
  
  </div>
   <div class="row"> 

	   	 <?php include 'loggedin.php';
?>  </div>

  <div class="row">
    <div class="col-sm-5" style="">

    <div class="card">
	
<form action="login.php" method="POST">

<b>Login name:</b> <input type="text" placeholder="Enter Username" name="username" required><br>

<b>Password:</b> <input type="password" placeholder="Enter Password" name="password" required><br>


<button type="submit">Login</button>
	
	
</form>
    </div>
	
	</div>
	
    <div class="col-sm-7" style="">
	
    <div class="card">
	
	<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A122274160%3Aplaylist%3A2M07SspHhAd4lwF3zbVUEf" width="auto" height="380" frameborder="0" allowtransparency="true"></iframe>
	
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
  </div>

</body>
</html>