<?php

	$conn=mysqli_connect("localhost","root","","con_db");
	if(isset($_POST['btn_insert']))
	{
		$email=$_POST['txtemail'];
		$pass=$_POST['txtpass'];

		$selct=mysqli_query($conn,"Select * from reg where email='$email' AND pass='$pass'");
		$num=mysqli_num_rows($selct);
		if($num >0)
		{
			echo "<script> alert('Login Sucessfuly');</script>";
		}
		else
		{
			echo "<script> alert('Invalid username or password');</script>";
		}
	}
?>
<html>
	<form method="post">
		<table border="1">
				<tr>
				<th> Email : </th>
				<td><input type="text" name="txtemail" /></td>
			</tr>
				<tr>
				<th> Password : </th>
				<td><input type="text" name="txtpass" /></td>
			</tr>
			
				<tr>
				<th>  : </th>
				<td><input type="submit" name="btn_insert" value="Login"/></td>
			</tr>
		</table>
	</form>
</html>