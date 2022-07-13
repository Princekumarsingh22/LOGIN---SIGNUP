<html>
<head>
<title>USER PROFILE CHANGE</TITLE>

</head>
<body bgcolor="cyan"><center>
<form method="post"  >
<table>

<tr>
<td>USER NAME</td><td><input type="text" name="unm" ></td><TD><input type="SUBMIT" name="search" value="FIND" ></td>
</tr>
</table>
<?php
 if(isset($_POST["search"]))
 {
	  include("connection.php");
	 $unm=$_POST["unm"];
	 $sql="select * from user_profile where userid= '".$unm."'";
     $rs=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($rs))
 {
	 ?>
	<table>
<tr>
<td>User ID</td><td><input type="text" name="unm" value='<?php echo $row['userid'];?>' readonly></td>
</tr>	
	<tr><td>PASSWORD</td><td><input type='text' name='pnm' value='<?php echo base64_decode($row['password']);?>'></td></tr>
	<tr><td>Your selected security question</td> <td><select id="question1" name="sq" >
	   <option>Choose Security Question</option>
				
				<?php
				if($row['squestion']=="Your Favourite Color")
				{
				echo '<option value="Your Favourite Color" selected>Your Favourite Color</option>';
			    echo '<option>Your Favourite Digit</option>';
			   echo '<option>Your Favourite book</option>';
			   echo '<option>Your Favourite Dish</option>';
			}
				else if($row['squestion']=="Your Favourite Digit")
				{
				echo '<option value="Your Favourite Digit" selected>Your Favourite Digit</option>';
				echo '<option>Your Favourite Color</option>';
			   echo '<option>Your Favourite book</option>';
			   echo '<option>Your Favourite Dish</option>';
			   }
				else if($row['squestion']=="Your Favourite book")
				{
				echo '<option value="Your Favourite book" selected>Your Favourite book</option>';
				echo '<option>Your Favourite Color</option>';
			   echo '<option>Your Favourite Digit </option>';
			   echo '<option>Your Favourite Dish</option>';
			}
			else if($row['squestion']=="Your Favourite Dish")
				{
				echo '<option value="Your Favourite Dish" selected>Your Favourite Dish</option>';
				echo '<option>Your Favourite Color</option>';
			   echo '<option>Your Favourite Digit </option>';
			   echo '<option>Your Favourite Book</option>';
			}
			
			?>
			</select></td><td>
	<tr>
<td>Answer</td><td><input type="text" name="ans" value='<?php echo $row['answer'];?>'></td>
</tr>
<tr>
<td>Email</td><td><input type="email" name="email" value='<?php echo $row['email'];?>'></td>
</tr>
<tr>
<td>Mobile</td><td><input type="text" name="mob" value='<?php echo $row['mobile'];?>'></td>
</tr>
<tr><td><input type="submit" name="update" value="UPDATE"></td>
<td><input type="reset" value="clear"></td>
<td><input type="button" value="Exit" onclick="window.close();">
</tr>
	</table>
	
	
	<?php
 }
 else
 echo"<script>alert('User id does not exist')</script>";
mysqli_close($con);
 }
 
 if(isset($_POST["update"]))
 {
	 include("connection.php");
$unm=$_POST["unm"];
$pname=$_POST["pnm"];
$email=$_POST["email"];
$squestion=$_POST["sq"];
$answer=$_POST["ans"];
$mobile=$_POST["mob"];
$sql="update user_profile set password='".$pname."',email='".$email."',squestion='".$squestion."',answer='".$answer."',mobile='".$mobile."' where userid= '".$unm."'";
mysqli_query($con,$sql);
echo"<script>alert('Updated successfully')</script>";
 }
?>


</form>
</center>
</body>
</html>