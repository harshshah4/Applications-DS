<html>
<head>
<script>
function myFunction() 
{
    alert("I am an alert box!");
}

</script>
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
<title>Login Form</title>
</head>
<body id="bodyy">
<div id="header">
<hr><center><h1>HOSTEL OUTPASS MANAGEMENT SYSTEM </h1></center><hr></div>
</center><br>
<form method="post" action="studentreg.php" enctype="multipart/form-data" >
<table cellpadding="2" width="20%" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><h3><p style="font-family:Chiller">SignUp Here!</p></h3></center>
</td>
</tr>

<tr>
<td>Name</td>
<td><input type=text name="name" id="name" size="30"></td>
</tr>

<tr>
<td>Father Name</td>
<td><input type="text" name="fathername" id="fathername" size="30" ></td>
</tr>

<tr>
<td>Reg No</td>
<td><input type="text" name="regno" id="regno" size="30" ></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass" size="30"></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" name="cpass"
id="cpass" size="30"></td>
</tr>

<tr>
<td>Sex</td>
<td><input type="radio" name="sex" value="male" size="10" id="">Male
<input type="radio" name="sex" value="Female" size="10" id="">Female</td>
</tr>


<tr>
<td>Course</td>
<td><select name="Course" id="course">
<option value="-1" selected>select..</option>
<option value="B.E/B.TECH">B.E/B.TECH</option>
<option value="M.E/M.TECH">M.E/M.TECH</option>
<option value="MCA">MCA</option>
<option value="M.B.B.S">M.B.B.S</option>
</select></td>
</tr>

<tr>
<td>State</td>
<td><select Name="State">
<option value="-1" selected>select..</option>
<option value="TAMIL NADU">TAMIL NADU</option>
<option value="KERALA">KERALA</option>
<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
<option value="DELHI">DELHI</option>
<option value="MUMBAI">MUMBAI</option>
</select></td>
</tr>

<tr>
<td>District</td>
<td><select name="District">
<option value="-1" selected>select..</option>
<option value="CHENNAI">CHENNAI</option>
<option value="NAMAKKAL">NAMAKKAL</option>
<option value="SALEM">SALEM</option>
<option value="TRICHY">TRICHY</option>
<option value="THRISSUR">THRISSUR</option>
</select></td>
</tr>

<tr>
<td>City</td>
<td><select name="City">
<option value="-1" selected>select..</option>
<option value="CHENNAI">CHENNAI</option>
<option value="NAMAKKAL">NAMAKKAL</option>
<option value="THRISSUR">Trichy</option>
</select></td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30" ></td>
</tr>

<tr>
<td>EmailId</td>
<td><input type="email" name="emailid" id="emailid" size="30"></td>
</tr>

<tr>
<td>DOB</td>
<td><input type="date" name="dob" id="dob" size="30">(yyyy-mm-dd)</td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobileno" id="mobileno" size="30"></td>
</tr>

<tr>
<td>Upload your Photo:</td>
<td><input type="file" name="photos" id="photos" size="60"></td>
</tr>

</table>
<br>
<center>
<tr>
<td><input type="reset"></td>
<td><input type="submit" value="Submit" ></td>

	<td><p align="center"><input type="button" value="Back" 
    onclick="window.location='index1.php';" /></p></td>
</tr></center>
</form>
</div>
</body>
</html>