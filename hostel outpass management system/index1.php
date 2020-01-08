<html>
<head>
<style>
#header {
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

<title>Sttudent Login!</title>
	

</head>
<body id="bodyy">
<div id="header">
<hr><center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center><hr></div>
<div><a href="index.php"><img src="home.jpg"></a></div>
<!--<marquee behavior="alternate"><h6>Student Login!</h6></marquee> -->
<center><h3><p style="font-family:Chiller">Login Here!</p></h3></center>
<center><h3><p style="font-family:Chiller">STUDENT PANEL</p></h3></center>

<form method="post" action="login.php">
<table align="center">
<tr>
<td>User Name</td> 
<td> <input type="text" name="user" id="user"></td>
</tr>

<tr><td>Password:</td><td> <input type="password" name="password" id="pas"></td>

<td><input type="submit" value="Login"></td></tr>
</table>
</form>


<center><a style="color:white;" href="sinup.php">New student Please Sign up! </a> </center>
</body>
</html>