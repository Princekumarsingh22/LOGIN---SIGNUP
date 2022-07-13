<!DOCTYPE html>
<html>
<head>
	<title>SBI ACCOUNT REGISTRATION FORM</title>
	<script type="text/javascript">
		function validate()
		{
          if(document.getElementById("aname").value=="")
          {
          	alert("Account holder's name is blank");
          	document.getElementById("aname").focus();
          	return false;
          }

          if(document.getElementById("fname").value=="")
          {
          	alert("father name is blank");
          	document.getElementById("fname").focus();
          	return false;
          }
		}
	</script>
</head>
<body bgcolor="greenyellow">
<CENTER>
	<FORM method="post" onsubmit="return validate();">
		<table>
			<tr><td>ACCOUNT'S HOLDER NAME</td><TD><INPUT TYPE="TEXT" name="aname" id="aname"></TD></tr>
			<tr><td>FATHER'S NAME</td><TD><INPUT TYPE="TEXT" name="fname" id="fname"></TD></tr>
			<tr><td>EMAIL</td><TD><INPUT TYPE="email" name="email"></TD></tr>
			<tr><td>MOBILE</td><TD><INPUT TYPE="TEXT" name="mobile"></TD></tr>
			<tr><td>ACCOUNT TYPE</td><TD><SELECT name="atype">
             <option>Saving a/c</option>
             <option>Trading a/c</option>
             <option>Current a/c</option>
             <option>FD a/c</option>
             <option>OD a/c</option>
         </SELECT></TD>
			</tr>
			<tr><td>ACCOUNT FACILITIES</td>
				<TD><input type="checkbox" name="acc[]" value="passbook">Passbook
					<input type="checkbox" name="acc[]" value="Cheque">Cheque
				    <input type="checkbox" name="acc[]" value="sms">SMS Alert
				    <input type="checkbox" name="acc[]" value="netbanking">Netbanking</TD>
				</tr>
				<tr><td>Opening balance</td><TD><INPUT TYPE="TEXT" name="balance"></TD></tr> 
				<tr><td>PERMANENT ADDRESS</td><TD><textarea rows="10" cols="15" name="paddress"></textarea></TD></tr> 
               <tr><td><input type="radio" name="add" id="same">Same<input type="radio" name="add" id="different">Different</td></tr>
				<tr><td>TEMPORARY ADDRESS</td><TD><textarea rows="10" cols="15" name="taddress"></textarea></TD></tr>   

				<tr><td>SELECT AT LEAST THREE BRANCH A/C TO PRIORITY LEVEL</td><TD><SELECT name="bname" multiple>
             <option>Boring road</option>
             <option>Raja Bajar</option>
             <option>Kankarbag</option>
             <option>Gandhi Maidan</option>
             <option>Saguna more</option>
         </select></td>
			</tr>
			<tr><td>SELECT ANY ID PROOF</td><TD><SELECT name="id">
             <option>Adhar card</option>
             <option>Driving license</option>
             <option>Pan card</option>
             <option>Passport</option>
             <option>Voter ID</option>
         </SELECT></TD>
			</tr>
			<tr><td><input type="file" name="idproof"></td></tr>
			<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
		</table>
	</FORM>
</CENTER>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	$aname=$_POST["aname"];
	$fname=$_POST["fname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$actype=$_POST["atype"];
	$afact="";
	foreach ($_POST["acc"] as $rs) 
	{
		$afact=$afact.$rs."<br>";
	}

	echo"<center><table border='1px'>";
	echo"<tr><td>Account holder's name</td><td>".$aname."</td></tr>";
	echo"<tr><td>Father's name</td><td>".$fname."</td></tr>";
	echo"<tr><td>Email</td><td>".$email."</td></tr>";
	echo"<tr><td>Mobile</td><td>".$mobile."</td></tr>";
	echo"<tr><td>Account type</td><td>".$actype."</td></tr>";
	echo"<tr><td>Account facilities</td><td>".$afact."</td></tr>";
echo"</center></table>";
}
?>






