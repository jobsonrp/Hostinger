<?php
	session_start();
	if(!isset($_SESSION["login"]))
        header("location:login.php");
?>

    <h2>Welcome to SESSION validation for login</h2>
     <br />
     <br />
     <a href="page1.php">Page 1</a> 
     <br />
      <a href="page2.php">Page 2</a> 
     <br />
     <a href="logout.php">Logout</a> 
