<?php
session_start();
if (!isset($_SESSION['id']))
{
header('location:index1.php');
}

?>


<html>
<head>

<script>
function myFunction() 
{
    alert("I am an alert box!");
}

</script>
<style>

#apDiv1 {
	position: absolute;
	width: 1333px;
	height: 152px;
	z-index: 1;
	left: 18px;
	top: 106px;
}
#apDiv2 {
	position: absolute;
	width: 139px;
	height: 139px;
	z-index: 2;
	left: 25px;
	top: 1px;
}
#apDiv3 {
	position: absolute;
	width: 129px;
	height: 43px;
	z-index: 2;
	left: 1360px;
	top: 94px;
}
#redd
{
color:red;
}
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
<hr><center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center><hr></div>
</center>
<?php
$con=mysql_connect("localhost","root","");
$formphoto="hi/".$_COOKIE["photo"];
$formuser=$_COOKIE["cuser"];
$regnumber=$_COOKIE["reg"];
?>

<div></div>
<br><br><br>
<div id="apDiv1">
  <div id="apDiv2" ><img src="<?php echo $formphoto; ?>" width="134" height="143"></div>
     <div id="apDiv3"><?php echo "Hi $formuser"?><a id="header" href="logout.php">Logout!</a> </div>
</div>
<br><br><br><br>
<hr>
<center><font><b>Student Outpass Form</b></font></center><br>

<form method="post" action="opformreg.php">
<table align="center">
<tr>

<td>Name</td>
<td><?php echo $formuser; ?></td>

</tr>

<tr>
<td>Register No </td>
<td><?php echo $regnumber; ?></td>
</tr>
</br>

<tr>
<td>Gender</td>
<td><input type="radio" name="sex" value="male" >Male
<input type="radio" name="sex" value="Female" >Female</td>
</tr>


<tr>
<td>Department</td>
<td><input type="text" name="opdept" ></td>
</tr>

<tr>
<td>Course</td>
<td><input type="text" name="opcourse"></td>
</tr>

<tr>
<td>Block no</td>
<td><input type="text" name="opblockno" ></td>
</tr>

<tr>
<td>Room no</td>
<td><input type="text" name="oproomno"></td>
</tr>

<tr>
<td>Apply Date </td>
<td><input type="date" name="opapplydate" > <b id="redd">*</b>(YYYY-MM-DD)</td>
</tr>

<tr>
<td>Place of visit</td>
<td><input type="text" name="opplace" ></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="opaddress"></td>
</tr>

<tr>
<td>No of days proposed to stay</td>
<td><input type="text" name="opdays"></td>
</tr>

<tr>
<td> Date of Leave Out </td>
<td><input type="date" name="opdate">(YYYY-MM-DD)</td>
</tr>

<tr>
<td>Out Time</td>
<td><input type="text" name="opouttime"><b id="redd">*</b>(HH:MM 24Hours)</td>
</tr>

<tr>
<td>Date of Return </td>
<td><input type="date" name="opreturn"> <b id="redd">*</b> (YYYY-MM-DD)</td>
</tr>

<tr>
<td>In Time</td>
<td><input type="text" name="opintime"> <b id="redd">*</b>(HH:MM 24Hours)</td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="opmobile" ></td>
</tr>

<tr>
<td>EmailId</td>
<td><input type="email" name="opmail" ></td>
</tr>

<tr>
<td>Parent's or Guardian's Name</td>
<td><input type="text" name="opparentsname"></td>
</tr>

<tr>
<td>Parent's or Guardian Mobile No</td>
<td><input type="text" name="opparentsno" ></td>
</tr>

</tr>
</table><br>
<center>

<tr>
<td><input type="reset"></td>
<td><input type="submit" value="Request for OP"></td>

	<td><p align="center"><input type="button" value="Retrieve Status!" 
    onclick="window.location='retform.php';" /></p></td>
</tr>

</center><br><br><br>

</form>
<center>
<?php
$error="0";
if($error=="1")
{ 
echo $error="error Occured! Please re-enter correct Details"; 
}
else
{
echo $error="";
}
?>
</center>