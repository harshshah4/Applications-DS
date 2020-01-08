<?php session_start(); 
ob_start();
?>

<?php


$user=$_REQUEST["user"];
$pass=$_REQUEST["password"];


// if (empty($user) && empty($pass)) 
// {
    // header('location:index1.php');
// }

$con=mysql_connect('localhost','root','');
mysql_select_db("hel");


$result=mysql_query("select * from sgnup where name='$user' and password='$pass';");
$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
$imagename=$row["imagename"];
$dbuser=$row["name"];
$regno=$row["regnums"];

setcookie("reg", $regno);
setcookie("photo", $imagename);
setcookie("cuser", $dbuser);

		if (($count > 0) and (!empty($user) && !empty($pass)))
		{ 
		$_SESSION['id']=session_id();
		header('location:opform.php');
		}
		else
		{
		header('location:index1.php');
		}
?>


