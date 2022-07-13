<html>
<head>
<title>Table creater</title>
</head>
<body bgcolor="cyan">
<center>
<form method="post">
<table>
<tr><td>ENTER SQL COMMAND FOR CREATING TABLE</TD></TR>
<TR><TD><textarea rows="8" cols="40" name="cmd"></textarea>
<tr><td><input type="submit" value="CREATE TABLE" name="submit"></TD></TR>
</TABLE>
</form>
</center>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	
	$con=mysqli_connect("localhost","root","","batch2");//used to establish connection with mysql
	//$db=mysql_select_db("batch2");//used to select an existing database of mysql
	if($con)
	{
		echo"<script>alert('Connection ready')</script>";
		$sql=$_POST["cmd"];
	mysqli_query($con,$sql);//used to execute sql command
	mysqli_close($con);//used to close connection
	echo"<script>alert('SQL command executes  successfully')</script>";
	}
	else
		echo"<script>alert('Connection failed')</script>";
	
	
}
?>