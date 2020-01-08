<html>
<head>
<style>
#header 
{
    background-color:#08088A;
    color:white;
    text-align:center;
    padding:5px;
}

#bodyy {
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
</center><br>

<?php
if ($_FILES["photos"]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["photos"]["error"] . "<br>";
	header('location:sinup.php');
  } 
  else
  {
    $tmpname=$_FILES["photos"]["tmp_name"];
	
      move_uploaded_file($tmpname,
     "hi/" . $_FILES["photos"]["name"]);
      echo "Stored in: " . "hi/" . $_FILES["photos"]["name"];
  }
$imagename=$_FILES["photos"]["name"];
$sname=$_REQUEST["name"];
$fname=$_REQUEST["fathername"];
$regnum=$_REQUEST["regno"];
$password=$_REQUEST["pass"];
$cpassword=$_REQUEST["cpass"];
$gender=$_REQUEST["sex"];
$course=$_REQUEST["Course"];
$state=$_REQUEST["State"];
$district=$_REQUEST["District"];
$city=$_REQUEST["City"];
$pincode=$_REQUEST["pincode"];
$email=$_REQUEST["emailid"];
$dob=$_REQUEST["dob"];
$mobileno=$_REQUEST["mobileno"];
echo $regnum;
$con=mysql_connect('localhost','root','');
mysql_select_db('hel');

if(!empty($sname) and !empty($password))
{
$insertqry="INSERT INTO sgnup (name,fathername,regnums,password,cpassword,sex,course,state,district,city,pin,emailid,dob,mobileno,imagename) VALUES('".$sname."','".$fname."','".$regnum."','".$password."','".$cpassword."','".$gender."','".$course."','".$state."','".$district."','".$city."','".$pincode."','".$email."','".$dob."','".$mobileno."','".$imagename."');";		
$insertqryy=mysql_query($insertqry);
}
else
{

header('location:sinup.php');
}
if($insertqryy)
{
echo "Registration successful...</br>";
echo $dob;

header('Location: index1.php');

?>
<a id="bodyy" href="index1.php">Go to Login page</a>

<?php
}
else
{
echo "Sorry! Unsuccesful Registration!!";
?>
<a id="bodyy" href="index1.php">Go to Login page</a>
<?php
}
?>