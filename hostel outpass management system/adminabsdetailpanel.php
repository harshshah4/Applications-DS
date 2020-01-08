<?php
session_start();
if (!isset($_SESSION['adminuser']))
{
header('location:adminindex1.php');
}
?>

<html>
<head>
<script>
function myFunction()
{
    alert("Outpass approved by Admin!");
	window.location.assign("adminapprove.php");
	alert("Outpass approved by Admin!");
}

function disapprovefunction() 
{
    alert("Outpass approved..!");
	window.location.assign("admindisapprove.php");
	alert("Outpass approved..!");
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
$formadminuser=$_COOKIE["adminuser"];
?>
<?php

?>
<hr>
<center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center>
<hr>
</div>
</center>
<table align="right" id="header"><tr><td><?php echo "Hi $formadminuser"; ?></td><td><a id="header" href="adminlogout.php">Logout!</a></td></tr></table>

<br><br>
<hr>
<center><font><b>ADMIN PANEL</b></font></center><br>

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("hel");

$checkname=$_REQUEST["hello"];

$opaformresult=mysql_query("select * from opform Where name='$checkname';");

$count=mysql_num_rows($opaformresult);

$row=mysql_fetch_array($opaformresult);
$checkname=$row["name"];
$checkdate=$row["leaveout"];


setcookie("ccheckname",$checkname);
setcookie("ccheckdate",$checkdate);
?>
<?php
if( empty($checkname) and empty($checkdate) )
{
header('location: adminhome.php');
}

?>
<table border="5px" align="center" id="fsize">

<tr>
<td>Name</td>
<td><?php echo $row["name"]; ?></td>
</tr>

<tr>
<td>Register No</td>
<td><?php echo $row["regno"]; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo $row["gender"]; ?></td>
</tr>

<tr>
<td>Department</td>
<td><?php echo $row["dept"]; ?></td>
</tr>

<tr>
<td>Course</td>
<td><?php echo $row["course"]; ?></td>
</tr>

<tr>
<td>Block no</td>
<td><?php echo $row["blockno"]; ?></td>
</tr>

<tr>
<td>Room no</td>
<td><?php echo $row["roomno"]; ?></td>
</tr>

<tr>
<td>Apply Date</td>
<td><?php echo $row["applydate"]; ?></td>
</tr>

<tr>
<td>Place of visit</td>
<td><?php echo $row["place"]; ?></td>
</tr>

<tr>
<td>Address</td>
<td><?php echo $row["addr"]; ?></td>
</tr>

<tr>
<td>No of days proposed to stay</td>
<td><?php echo $row["days"]; ?></td>
</tr>

<tr>
<td>Date of Leave Out</td>
<td><?php echo $row["leaveout"]; ?></td>
</tr>

<tr>
<td>Out Time</td>
<td><?php echo $row["outtime"]; ?></td>
</tr>

<tr>
<td>Date of Return</td>
<td><?php echo $row["returnsss"]; ?></td>
</tr>

<tr>
<td>In Time</td>
<td><?php echo $row["intime"]; ?></td>
</tr>

<tr>
<td>Mobile No</td>
<td><?php echo $row["mobile"]; ?></td>
</tr>

<tr>
<td>Email Address</td>
<td><?php echo $row["mail"]; ?></td>
</tr>

<tr>
<td>Parent's or Guardian's Name</td>
<td><?php echo $row["parents"]; ?></td>
</tr>

<tr>
<td>Parent's or Guardian Mobile No</td>
<td><?php echo $row["parentsno"]; ?></td>
</tr>

<tr>
<td>Status</td>
<td><?php echo $row["status"]; ?></td>
</tr>
</table	>
<p align="center"><input type="button" value="Back" 
    onclick="window.location='adminhome.php';" /></p>
	
	
	