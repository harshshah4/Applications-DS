<?php

?>

<?php
session_start();
if (!isset($_SESSION['gateuser']))
{
header('location: gateindex1.php');
}
?>

<html>
<head>
<script>
function myFunction() 
{
var suser=document.getElementById("searchname").value;
var sopdate=document.getElementById("opdate").value;
if(suser=="" || sopdate=="")
{
    alert("Please Enter correct details!");
	
}
else
{
document.getElementById("hi").submit();
}
}

</script>
<style>

#header 
{
    background-color:#08088A;
    color:white;
    text-align:center;
    padding:5px;
}
#bodyy 
{
background-color:#08088A;
color:white;
}
#fontt { font-family:"Comic Sans MS";}

</style>
<title>Login Form</title>
</head>
<body id="bodyy">
<div id="header">
<?php
$formgateuser=$_COOKIE["gateuser"];
?>
<hr>
<center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center>
<hr>
</div>
</center>
<table align="right" id="header"><tr><td><?php echo "Hi $formgateuser"; ?></td><td><a id="header" href="adminlogout.php">Logout!</a></td></tr></table>

<br><br>
<hr>
<center><font><b>GATE PANEL</b></font></center><br>

<table align="center">
<tr>
<td><input type="button" value="Find Status" 
    onclick="window.location='gatehome.php';" ></td>
	
<td><input type="button" value="Find Absence" 
    onclick="window.location='findabs.php';"></td>
</tr>
</table>

<p align="center">Enter Student Name and Outpass Application Date</p>
<center>

<form method="POST" action="adminpanel.php" name="hi" id="hi">
<table>
<tr><td>Enter Student Name:</td><td><input type="text" name="searchname" id="searchname"></td>
&nbsp;<td>Enter Student Leave out Date:</td><td><input type="date" name="opdate" id="opdate">(YYYY-MM-DD)</td></tr>
</table>
<br> 
<input type="button" value="Search" onclick="myFunction()">
</form>

</center> 

