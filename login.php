<?php
session_start();
if(isset($_SESSION['loggedin'])) header("Location: dashboard.php");
/* process login data */
if(!isset($_POST['username']) || !isset($_POST['password'])) {
header("Location: sessionfail.php");
}
/* Run through the CSV and pull in the data: */
if (($handle = fopen("users.csv", "r")) !== FALSE) {
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $users[$data[0]] = array("password"=>$data[1], "admin"=>$data[2]);
}
fclose($handle);
}
/* Get the data entered on the form: */
$u = $_POST['username']; $p = $_POST['password'];
/* Check it against our 'database': */
if(isset($users[$u]) && $users[$u]['password'] == $p ) {
 $_SESSION['loggedin']=TRUE;
 $_SESSION['username']=$u;
 $_SESSION['admin']=$users[$u]['admin'];
 header("Location: dashboard.php");
}
else{
 header("Location: sessionfail.php");
}
?>