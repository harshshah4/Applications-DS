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
$formuser=$_COOKIE["cuser"];

$regnumber=$_COOKIE["reg"];
?>
<table align="right" id="header"><tr><td><?php echo "Hi $formuser"; ?></td><td><a id="header" href="logout.php">Logout!</a></td></tr></table>
<br><br><hr>
<center><font><b>Student Outpass Form</b></font></center><br>
<?php
//$name=$_REQUEST["opname"];
//$regno=$_REQUEST["opregno"];
$gender=$_REQUEST["sex"];
$department=$_REQUEST["opdept"];
$course=$_REQUEST["opcourse"];
$blockno=$_REQUEST["opblockno"];
$roomno=$_REQUEST["oproomno"];
$applydate=$_REQUEST["opapplydate"];
$place=$_REQUEST["opplace"];
$address=$_REQUEST["opaddress"];
$days=$_REQUEST["opdays"];
$date=$_REQUEST["opdate"];
$outtime=$_REQUEST["opouttime"];
$return=$_REQUEST["opreturn"];
$intime=$_REQUEST["opintime"];
$mobile=$_REQUEST["opmobile"];
$mail=$_REQUEST["opmail"];
$parentsname=$_REQUEST["opparentsname"];
$parentsno=$_REQUEST["opparentsno"];


$con=mysql_connect('localhost','root','');

mysql_select_db('hel');
if(!empty($applydate) and !empty($outtime) and !empty($intime) and !empty($return))
{
$sqll="INSERT INTO `opform`(`name`, `regno`, `gender`, `dept`, `course`, `blockno`, `roomno`, `applydate`, `place`, `addr`, `days`, `leaveout`, `outtime`, `returnsss`, `intime`, `mobile`, `mail`, `parents`, `parentsno`, `status`,`statusreturnsss`) VALUES ('".$formuser."','".$regnumber."','".$gender."','".$department."','".$course."','".$blockno."','".$roomno."','".$applydate."','".$place."','".$address."','".$days."','".$date."','".$outtime."','".$return."','".$intime."','".$mobile."','".$mail."','".$parentsname."','".$parentsno."','Approval Pending','Not Returned');";
mysql_query($sqll);	

setcookie("retname",$formuser);
setcookie("apdate",$applydate);
}
else
{
header('Location: opform.php');
}
?>

<?php
if($sqll)
{
echo "You are Successfully Requested for Outpass!<br>";
echo "<br><a id='header' href='opform.php'>Go Back and Retrieve Status..</a> ";
}
else
{
echo "Sorry! Request Failed";
}
?>



