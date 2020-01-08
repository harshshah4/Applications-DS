<?php session_start(); 
ob_start();
?>

<?php
$gateuser=$_REQUEST["user"];
$gatepass=$_REQUEST["password"];



$con=mysql_connect('localhost','root','');
mysql_select_db("hel");

$gateuserqry=mysql_query("select * from admin where name='$gateuser' and password='$gatepass';");

$count=mysql_num_rows($gateuserqry);


$gateuserrow=mysql_fetch_array($gateuserqry);
$gateusername=$gateuserrow["name"];
setcookie("gateuser",$gateusername);


	 if ($count > 0)
		{ 
		$_SESSION['gateuser']=session_id();
		header('location:gatehome.php');
		}
		else
		{
		header('location:gateindex1.php');
		}
?>


