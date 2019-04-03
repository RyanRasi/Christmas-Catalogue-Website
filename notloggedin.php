  	 <?php if(!isset($_SESSION['loggedin'])) {echo
	 '<a href="session.php" style="float:right">Login</a>';	        
	 } else {
	 echo
	 '<a href="dashboard.php" style="float:right">Dashboard</a>';
	 }
?> 