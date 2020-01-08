<?php
$user=$_REQUEST["user"];
$pass=$_REQUEST["pas"];

$con=mysql_connect('localhost','root','');
mysql_select_db("hel");

$result=mysql_query("select * from sgnup where name='$user' and password='$pass'");

$row=mysql_fetch_array($result);
$row["password"];
?>
