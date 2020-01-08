<?php
session_start();
if (!isset($_SESSION['adminuser']))
{
header('location:adminindex1.php');
}
?>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("hel");
$checkname=$_COOKIE["ccheckname"];
$checkdate=$_COOKIE["ccheckdate"];
echo $checkname;
echo $checkdate;

$con=mysql_connect('localhost','root','');
mysql_select_db('hel');

$Appstatus="Approved";
$notappstatus="Approval Pending";

$aqry=mysql_query("select * from opform where name='$checkname' and leaveout='$checkdate';");

$brows=mysql_num_rows($aqry);


$updateqry="UPDATE opform SET status='$Appstatus' WHERE name='$checkname' AND leaveout='$checkdate';";
$adminapproved=mysql_query($updateqry);

header('location:adminpanel.php');

?>