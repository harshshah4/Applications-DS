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

<title>Student Login!</title>
	

</head>
<body id="bodyy">
<div id="header">
<hr><center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center><hr></div>
<div><a href="index.php"><img src="home.jpg"></a></div>
<center><h3><p style="font-family:Chiller">Login Here!</p></h3></center>
<center><h3><p style="font-family:'Arial Black', Gadget, sans-serif">ADMIN Panel</p></h3></center>

<form method="post" action="adminretform.php">
<table align="center">
<tr>
<td>User Name</td> 
<td> <input type="text" name="user" id="user"></td>
</tr>

<tr><td>Password:</td><td> <input type="password" name="password" id="pas"></td>

<td><input type="submit" value="Login"></td></tr>
</table>
</form>

</body>
</html>