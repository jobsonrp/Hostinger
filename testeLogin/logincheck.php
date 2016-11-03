<?php
	session_start();
	$Cser = mysqli_connect("localhost","root","","test") or die("Server connection failed : ".mysqli_error());
    $uname = $_REQUEST["jose"];
    $upassword = $_REQUEST["123"];
    
    $s = "select * from users where uname='".$uname."' and upassword='".$upassword."'";
    
    $result = mysqli_query($Cser,$s);
    
    $count = mysqli_num_rows($result);
    
    if($count>0)
    {
        $_SESSION["login"]="1";
        header("location:index.php");
    }
    else
    {
        header("location:login.php?err=1");
    }
?>