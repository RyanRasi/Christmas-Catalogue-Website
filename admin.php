<?php
session_start();
if(!isset($_SESSION['loggedin'])) header("Location: session.php");
if($_SESSION['loggedin']===FALSE) header("Location: session.php");
?>
<form action="adduser.php" method="POST">
Add additional user <br>
Login name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Admin Access: <input type="checkbox" name="admin" value="Admin"><br>
<input type="submit">
</form>