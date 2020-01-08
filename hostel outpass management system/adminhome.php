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

//var suser=document.getElementById("searchname").value;
var sopdate=document.getElementById("opdate").value;
if(sopdate=="")
{
    alert("Please Fill the date!");
	
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
$formadminuser=$_COOKIE["adminuser"];
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

<!--<p align="center">Enter Student Name and Outpass Application Date</p> -->
<table align="center"><tr>
	<td style="padding:0 15px 0 18px;><p align="center"><input type="button" value="Find Status" 
    onclick="window.location='adminhome.php';" /></p></td>
	
	<td style="padding:0 15px 0 18px;><p align="center"><input type="button" value="Find Absence" 
    onclick="window.location='findabs.php';" /></p></td>
</tr> 
</table><br>
<div align="center"><b>Find Students List</b></div><br>
<center>
<form method="POST" action="" name="hi" id="hi">
<table>

<!-- <tr><td>Enter Student Name:</td><td><input type="text" name="searchname" id="searchname"></td></tr> -->

<tr><td>Please Enter the Date:</td><td><input type="date" name="opdate" id="opdate">(YYYY-MM-DD)</td></tr>
</table>
<br> 
<input type="button" value="Search" onclick="myFunction()">
</form>
</center> 
<br>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("hel");
$ddt=date("Y-m-d");

if(!isset($_POST["opdate"]))
{
$getdat=$ddt;
}
else
{
$getdat=$_POST["opdate"];
}
$opaformresult=mysql_query("select * from opform Where applydate='$getdat';");
$count=mysql_num_rows($opaformresult);
//echo $count;
$row=mysql_fetch_array($opaformresult);
$checkname=$row["name"];

//echo $checkdate=$row["leaveout"];
?>

<table border="1" cellpadding="10" align="center">
<!--<th>Stock</th><th>Price</th><th>Shares</th><th>Value</th><th>Sell Stock</th> -->

<th style="padding:0 15px 0 18px;"><em>Name</em></th> 
<th style="padding:0 15px 0 18px;"><em>Applied Date</em></th> 
<th style="padding:0 15px 0 18px;"><em>Leave out Date</em></th> 
<!-- <th style="padding:0 15px 0 18px;"><em>Return Date</em></th> -->
<th style="padding:0 15px 0 18px;"><em>Status</em></th> 


<?php
$transactions = mysql_query("select * from opform Where applydate='$getdat';");
while ($row = mysql_fetch_assoc($transactions)) 
{
        $rowname=$row["name"];
		$rowapplydate=$row["applydate"];
		$rowleaveout=$row["leaveout"];
		//$returndate=$row["return"];
		$rowstatus=$row["status"];	
?>

        <form name="sellStock" action="" method="get">
        <tr>
            <td id="bodyy"><a id="header" href="adminpanel.php?hello=<?php echo $rowname?>"> <?php echo $rowname ?></a></td>
            <td><?php echo $rowapplydate ?></td>
            <td><?php echo $rowleaveout ?></td>
            <!--<td><?php //echo $returndate ?></td> -->
            <td><?php echo $rowstatus ?></td>
        </tr>
		
<?php
}
?>
</table>

<table align="center">

</script>
</table>
</form>
