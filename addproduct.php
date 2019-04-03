<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product - Chrimbo Catalogue</title>
<meta charset="utf-8">
<meta name="keywords" content="angels, bells, candles, cards, celebrate, craft, elf, festival, family reunion, Frosty ,greetings, holiday, jubilee, merry ,Noel ,ornaments ,parades, party, red/green, Scrooge, season, spirit, stocking stuffers, stockings, tidings, tradition, traffic, trips, vacation, wassail, wassailing, Xmas, yule, yuletide, chimney ,elves, fairies ,jolly, North Pole, reindeer, Rudolph, sled, sleigh, sleigh bells, St. Nick, toys"/>
<meta name="description" content="add to the product list of christmas products" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<?php
// define variables and set to empty values
$titleErr = $descriptionErr = $priceErr = $pictureErr = "";
$title = $description = $price = $picture = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $titleErr = "<font color=\"red\">Title is required</font>";
  } else {
    $title = test_input($_POST["title"]);
    // check if title only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
      $titleErr = "<font color=\"red\">Only letters and whitespace allowed</font>";;
    }
  }

  if (empty($_POST["price"])) {
    $priceErr = "<font color=\"red\">Price is required</font>";;
  } else {
    $price = test_input($_POST["price"]);
    // check if price only contains numbers
    if (!preg_match("/^[0-9 ]*$/",$price)) {
      $priceErr = "<font color=\"red\">Only numbers are allowed</font>";
    }
  }

  if (empty($_POST["picture"])) {
    $picture = "";
  } else {
    $picture = test_input($_POST["picture"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$picture)) {
      $pictureErr = "<font color=\"red\">Invalid URL!</font>";
    }
  }

  if (empty($_POST["description"])) {
    $description = "";
  } else {
    $description = test_input($_POST["description"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3 align="center">Add products</h3>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <b>Title: </b><input type="text" name="title" autocomplete="on" placeholder="Title (e.g. Santa hat)" required value="<?php echo $title;?>">
  <span class="error">* <?php echo $titleErr;?></span>
  <br><br>
  <b>Price: </b><input type="text" name="price" autocomplete="on" placeholder="Price (e.g. £50)" required value="<?php echo $price;?>">
  <span class="error">* <?php echo $priceErr;?></span>
  <br><br>
  <b>Picture (URL): </b><input type="text" name="picture" autocomplete="off" placeholder="Picture URL (e.g. www.images.com/...)" required value="<?php echo $picture;?>">
  <span class="error"><?php echo $pictureErr;?></span>
  <br><br>
  <b>Description: </b><textarea name="description" placeholder="Description (e.g. Only the finest Santa hat in existence)" required rows="5" cols="40"><?php echo $description;?></textarea>
  <br><br>
<input type="submit" name="update_button" id="load_data" value="Update" />

<input type="submit" name="submit_button" value="Submit" />
</form>

<?php

echo '<script>

  $.ajax({
   url:"products.csv",
   dataType:"text",
   success:function(data)
   {
    var product_data = data.split(/\r?\n|\r/);
    for(var count = 0; count<product_data.length; count++)
    {
     var cell_data = product_data[count].split(",");

	var amount = cell_data.length;
    }

 	document.getElementById("myText").innerHTML = count;

   }
  });


</script>';// Counts amount of data already inputted so you know which product number will be next

$rows = count(file("products.csv"));
		if($rows > 1)
		{
			$rows = ($rows -1) +1;
		}

if (isset($_POST['update_button'])) {
echo "<h3>Your Input:</h3>";
echo '<b>Title: </b>' , $title;
echo "<br>";
echo '<b>Price: </b>' , $price;
echo "<br>";
echo '<b>Picture: </b>' , $picture;
echo "<br>";
echo "<img src=",$picture," style=\"width:100%\">";
echo "<br>";
echo '<b>Description: </b>' , $description;
echo "<br>";


} else if (isset($_POST['submit_button'])) {
    //write to file


$myfile = fopen("products.csv", "a") or die("Unable to open file!");
$txt = $rows .',<img class="myImages" id="myImg" src=' . $picture . ' alt="' . $title . ' -- ' . $description . ' -- ' . $price . '" width="45%" height="12.5%"> <div id="myModal" class="modal"> <span class="close">&times;</span> <img class="modal-content" id="img01"> <div id="caption"></div> </div> ,' . $title . ',' . $description . ',' . $price;
fwrite($myfile, "\n". $txt);
fclose($myfile);
} else {
    //no button pressed
}
?>
<br>



<b>Product ID will be:  <span id="myText"></span></b>
 	</div>
	</div>
	    <div class="col-sm-5" style="">
	
    <div class="card">
	
	<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A122274160%3Aplaylist%3A2M07SspHhAd4lwF3zbVUEf" width="auto" height="710" frameborder="0" allowtransparency="true"></iframe>
	
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
