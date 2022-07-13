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
			
			<tr><td>Email</td><td><input type="email" name="email"></td></tr>
			
			<tr><td>Select Security question</td><td><select name="sq">
<option>Your Favourite Color</option>
<option>Your Favourite Digit</option>
<option>Your Favourite book</option>
<option>Your Favourite Dish</option>
</select>
			</td></tr>
			<tr><td>Answer</td><td><input type="text" name="ans"></td></tr>
			
			<tr><td><input type="submit" value="FORGOT PASSWORD" name="forget_password"></td></tr>
		</table>
	</FORM>
	
</CENTER>

</body>
</html>
<?php
include("connection.php");
if(isset($_POST["forget_password"]))
{
$uname=$_POST["unm"];
$email=$_POST["email"];
$squestion=$_POST["sq"];
$answer=$_POST["ans"];
$sql="select * from user_profile where userid= '".$uname."'";
$rs=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($rs))
 {
 	if($row["email"]==$email)
 	{
	  if($row["squestion"]==$squestion)
 	  {	
        if($row["answer"]==$answer)
		{
			echo"<p>Your password :-".$row['password']."</p>";
		}
		else
			echo"<script>alert('Invalid Answer')</script>"; 
      }
	  else
		echo"<script>alert('Invalid security question')</script>";  
	}
	else
		echo"<script>alert('Invalid emailid')</script>";
 }
 else
echo"<script>alert('Invalid user name')</script>";	 
mysqli_close($con);		
}		
		
?>		
		
		