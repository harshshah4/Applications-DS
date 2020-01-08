<?php
session_start();
if (!isset($_SESSION['gateuser']))
{
header('location:gateindex1.php');
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
$formgateuser=$_COOKIE["gateuser"];
?>
<hr>
<center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center>
<hr>
</div>
</center>
<table align="right" id="header"><tr><td><?php echo "Hi $formgateuser"; ?></td><td><a id="header" href="gatelogout.php">Logout!</a></td></tr></table>

<br><br>
<hr>
<center><font><b>GATE PANEL</b></font></center><br>

<!--<p align="center">Enter Student Name and Outpass Application Date</p> -->
<table align="center"><tr>
	<td style="padding:0 15px 0 18px;><p align="center"><input type="button" value="Find Status" 
    onclick="window.location='gatehome.php';" /></p></td>
	
	<td style="padding:0 15px 0 18px;><p align="center"><input type="button" value="Find Absence" 
    onclick="window.location='gateabs.php';" /></p></td>
</tr> 
</table><br>
<div align="center"><b>Find Absence List</b></div><br>
<center>
<form method="POST" action=" <?php $_SERVER['PHP_SELF']; ?>" name="hi" id="hi">
<table>

<!-- <tr><td>Enter Student Name:</td><td><input type="text" name="searchname" id="searchname"></td></tr> -->

<tr><td>Please Enter the Date:</td><td><input type="date" name="opdate" id="opdate">(YYYY-MM-DD)</td></tr>
</table>
<br> 
<input type="button" value="Search" onclick="myFunction()">
</form>
</center> 

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
$opaformresults=mysql_query("select * from opform Where returnsss='$getdat';");
//$count=mysql_num_rows($opaformresult);
//echo $count;
//$row=mysql_fetch_array($opaformresults);
//$checkname=$row["name"];

//echo $checkdate=$row["leaveout"];
?>

<p align="center">These Following Students are Committed to Return on above Search date</p>
<table border="1" cellpadding="10" align="center">
<!--<th>Stock</th><th>Price</th><th>Shares</th><th>Value</th><th>Sell Stock</th> -->

<th style="padding:0 15px 0 18px;"><em>Name</em></th> 
<th style="padding:0 15px 0 18px;"><em>Committed Return Date</em></th> 


<?php
$transactionss = mysql_query("select * from opform where returnsss='$getdat';");
while ($row = mysql_fetch_array($transactionss)) {
        $rowname=$row["name"];
		$rowapplydate=$row["applydate"];
		$rowleaveout=$row["leaveout"];
		$returndate=$row["returnsss"];
		$rowstatus=$row["status"];
?>
        <form name="sellStock" action="" method="get">
        <tr>
            <td id="bodyy"><a id="header" href="gateabsdetailpanel.php?hello=<?php echo $rowname?>"> <?php echo $rowname ?></a></td>
            
            <td><?php echo $returndate ?></td>
          
        </tr>
		
<?php
}
?>
</table>

<table align="center">

</script>
</table>
</form>