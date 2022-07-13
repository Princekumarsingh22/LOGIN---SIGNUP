<html>
<head>
<title>LOGIN WINDOW</title>
<SCRIPT>
function validate()
{
 var unm,pnm;
 unm=document.getElementById("u").value;
 pnm=document.getElementById("p").value;
 if(unm=="")
 {
  alert("user name is blank");
  document.getElementById("u").focus();
  return false;
 }
 
 if(pnm=="")
 {
  alert("Password is blank");
  document.getElementById("p").focus();
  return false;
 }
 
}
</SCRIPT>
</head>
<body>
<center>
<form method="POST" action="login.php" onsubmit="return validate();">
<h2 STYLE="color:red"><a href="signup.php">NEW USER REGISTRATION</A>&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_user_profile.php">CHANGE USER PROFILE</A></H2>
<table>

<tr><td>USER NAME</TD><TD><input type="text" name="unm" id="u"></td><td><a href="forgot_user.php">Forget user</a></tr>
<tr><td>PASSWORD</TD><TD><input type="text" name="pnm" id="p"></td><td><a href="forgot_password.php">Forget Password</a></tr>
<tr><td><input type="Submit" value="LOGIN" name="login"></td><td><input type="reset" value="RESET"></td></tr>
</table>
</form>
</center>
</body>
</html>

<?php

include("connection.php");
if(isset($_POST["login"]))
{
 $uname=$_POST["unm"];
$pname=$_POST["pnm"];
$sql="select * from user_profile where userid= '".$uname."'";
$rs=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($rs))
 {
 	if(base64_decode($row["password"])==$pname)
 	{
 		echo"<script>alert('Login success')</script>";
 	}
 	else
 		echo"<script>alert('Invalid password')</script>";

 }
 else
 	echo"<script>alert('Invalid user id')</script>";
 mysqli_close($con);

}

?>
</center>
</body>
</html>