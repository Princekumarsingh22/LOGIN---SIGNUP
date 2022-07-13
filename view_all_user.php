<html>
<head>
<title>USER'S INFORMATION</title>
</head>
<body>
<center>
<form method="post">
<input type="submit" value='VIEW ALL USERS' name="view">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST["view"]))
{
	include("connection.php");
	$sql="select * from user_profile";
	$rs=mysqli_query($con,$sql);
	echo"<center><table border='1px'>";
	while($row=mysqli_fetch_array($rs))
	{
		echo"<tr>";
		echo"<td>".$row['userid']."</td><td>".$row['password']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['squestion']."</td><td>".$row['answer']."</td><td>".$row['gender']."</td></tr>";
	}
	echo"</table></center>";
	mysqli_close($con);
}
?>