<?php session_start(); 
ob_start();
?>

<?php


$adminuser=$_REQUEST["user"];
$adminpass=$_REQUEST["password"];

echo $adminuser;
echo $adminpass;

$con=mysql_connect('localhost','root','');
mysql_select_db("hel");

$adminuserqry=mysql_query("select * from admin where name='$adminuser' and password='$adminpass';");

$count=mysql_num_rows($adminuserqry);


$adminuserrow=mysql_fetch_array($adminuserqry);
$adminusername=$adminuserrow["name"];
setcookie("adminuser",$adminusername);


	 if ($count > 0)
		{ 
		$_SESSION['adminuser']=session_id();
		header('location:adminhome.php');
		}
		else
		{
		header('location:adminindex1.php');
		}
?>


