<?php
	session_start();
	if(!isset($_SESSION["status"])){
          echo"<script language='javascript' type='text/javascript'>alert('Please! Make the Login.');window.location.href='index.php';</script>";
        }
        else{
        $login = $_SESSION['inputEmail'];
        }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html  xml:lang="pt" lang="pt">
 
<head>

	<title>Tela Inicial</title>
	<style type="text/css">
	<!--
		body {
                        font-family:Verdana, Arial, Helvetica; 
                        font-size:14px;
                        line-height:20px;
                        margin:0px;
                        margin-bottom:0px;
                        padding:0px;
		}
                #area_geral{
                        width:1050px;
                        height:auto;
                        margin:auto;
                }
		#menu ul {
			padding:0px;
			margin:0px;
			float: left;
			width: 100%;
			background-color:#e8e8e8;
			list-style:none;
			font:100% Tahoma;
		}
 
		#menu ul li { display: inline; }
 
		#menu ul li a {
			background-color:#e0e0e8;
			color: #333000;
			text-decoration: none;
			border-bottom:3px solid #e8e8e8;
			padding: 3px 34px;
            font:90% Arial;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#fff;
			color: #000;
			border-bottom:0px solid #DAA520;
		}
  form fieldset {
  margin: 10px auto 10px auto;
  width: 40%;
  border: solid black 1px;
  padding: 3%;
}

form legend {
  padding: 6px;
  margin: 0px;
  border: solid black 1px;
  font-size: 40%;
  font-weight: bold;
  background-color: #e8e8e8;
}

form label {
  display: block;
  font-size: 1px;
}

form input {
  width: 50%;
  border: solid #ccc 1px;
  font-size: 16px;
  margin-bottom: 18px;
  padding: 0.5%;
}

form input.botao {
	display: block;
	width: auto;
	float: right;
	background-color: #9CF;
}
body,td,th {
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
}
textos {
	color: #FFF;
	font-size: 18px;
}
body {
	background-color: #fff;
}

      
-->
</style>
</head>
 
<body bgcolor="#eeeeff">
  
  <div id=area_geral>
  	<div id="menu">
		<ul>
			<li><a href="index.html">Login</a></li>
			<li><a href="inicial.html">Home</a></li>
			<li><a href="">Energy</a></li>
			<li><a href="">Water</a></li>
			<li><a href="">Alerts</a></li>
			<li><a href="">Energy History</a></li>
			<li><a href="">Water History</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<table width="1050" border="0" bgcolor="#000033"
                cellspacing="0" cellpadding="0">
 <tr><td>&nbsp;</td></tr>
 <tr>
  <td><font size="4" color="#FFFFFF"><strong>&nbsp;&nbsp; 
                     IoEnergyWater


</strong></font></td>

<td align='right' 'Username'><font size="4" color="#FFFFFF"><strong>&nbsp;&nbsp; 
<?php

echo "Username : $login";

?> &nbsp;&nbsp;  
</strong></font></td>

 </tr>
 <tr><td>&nbsp;</td></tr>
</table>


<table width="1050" border="0" bgcolor="#4499FF" 
                cellpadding="0" cellspacing="0">
 <tr><td>&nbsp;</td></tr> <tr><td>&nbsp;</td></tr>
 <tr>
  <td width="125">&nbsp;</td>	
  <td width="538" height="255" valign="top">
 <table width="90%" border="0" bgcolor="#DADDFE"
     cellpadding="0" cellspacing="0" rules="cols">
 <tr><td colspan="4" align="center">
         <h3>Log in Success!! Welcome to IoEnergyWater</h3></td></tr>
   
   <tr><td>&nbsp;</td></tr>
<!-- --------------------- Submenu alunos ----------------------------- -->	
  <td width="22%" height="253" valign="top">
 <table width="100%" border="0" bgcolor="#DADDFE"
                  cellpadding="0" cellspacing="0">

  <tr><td align="center">
    

<form class="form-horizontal">
  
  <h5>New to IoEnergyWater? Create an account.</h5>


  <tr><td align="center">	
      <input type="button" value=" &nbsp;Sign Up&nbsp;&nbsp; " 
             onclick="window.location='inc_aluno.php'"></td></tr>
  <tr><td>&nbsp;</td></tr>

  </table> </td>
 
    </table></td>
       <td width="63">&nbsp;</td></tr> 
       <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
  </table>

</form>
  
</body>
</html>		
