<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION FORM</title>
	
</head>
<body bgcolor="greenyellow">
<CENTER>
	<FORM method="post">
		<table>
			<tr><td>User name</td><td><input type="text" name="unm" id="uid"></td></tr>
			<tr><td>Password</td><td><input type="password" name="pnm"></td></tr>
			<tr><td>Email</td><td><input type="email" name="email"></td></tr>
			<tr><td>Mobile</td><td><input type="text" name="mob"></td></tr>
			<tr><td>Select Security question</td><td><select name="sq">
<option>Your Favourite Color</option>
<option>Your Favourite Digit</option>
<option>Your Favourite book</option>
<option>Your Favourite Dish</option>
</select>
			</td></tr>
			<tr><td>Answer</td><td><input type="text" name="ans"></td></tr>
			<tr><td>Gender</td><td><input type="radio" value='Male' name="gen">Male<input type="radio" value='Female' name="gen">Female</td></tr>
			<tr><td><input type="submit" value="Signup" name="signup"></td></tr>
		</table>
	</FORM>
	
</CENTER>

</body>
</html>

<?php
if(isset($_POST["signup"]))
{
$uname=$_POST["unm"];
$pname=$_POST["pnm"];
$email=$_POST["email"];
$mobile=$_POST["mob"];
$squestion=$_POST["sq"];
$answer=$_POST["ans"];
$gender=$_POST["gen"];
echo"<center><table border='1px'>";
echo"<tr><td>User name</td><td>".$uname."</td></tr>";
echo"<tr><td>Password</td><td>".$pname."</td></tr>";
echo"<tr><td>Email</td><td>".$email."</td></tr>";
echo"<tr><td>Mobile</td><td>".$mobile."</td></tr>";
echo"<tr><td>Security question</td><td>".$squestion."</td></tr>";
echo"<tr><td>Answer</td><td>".$answer."</td></tr>";
echo"<tr><td>Gender</td><td>".$gender."</td></tr>";
echo"</center></table>";

include("connection.php");
$sql="insert into user_profile(userid,password,squestion,answer,email,mobile,gender)values('".$uname."','".base64_encode($pname)."','".$squestion."','".$answer."','".$email."','".$mobile."','".$gender."')";
mysqli_query($con,$sql);
echo"<script>alert('User registration  successfully')</script>";
mysqli_close($con);
echo"<script>window.location='login.php'</script>";
}
?>








