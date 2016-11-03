<?php
	session_start();
	if(!isset($_SESSION["login"]))
        header("location:login.php");
?>

    <h2>Welcome to SESSION validation for login page 1</h2>
    <br />
     <a href="index.php">Home</a> 
     <br />
      <a href="page2.php">Page 2</a> 
     <br />
     <a href="logout.php">Logout</a>