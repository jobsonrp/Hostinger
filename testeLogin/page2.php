<?php
	session_start();
	if(!isset($_SESSION["login"]))
        header("location:login.php");
?>

    <h2>Welcome to SESSION validation for login Page 2</h2>
    <br />
     <a href="page1.php">Page 1</a> 
     <br />
      <a href="index.php">Home</a> 
     <br />
     <a href="logout.php">Logout</a>