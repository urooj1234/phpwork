<?php

	$conn=mysqli_connect("localhost","root","","con_db");
	if(isset($_POST['btn_insert']))
	{
		$id="";
		$name=$_POST['txtname'];
		$email=$_POST['txtemail'];
		$pass=$_POST['txtpass'];
		$cpass=$_POST['txtcpass'];
		if($pass == $cpass)
		{
		$insert=mysqli_query($conn,"insert into reg values('$id','$name','$email',$pass);");
		if($insert)
		{
			echo "<script> alert('Account Hase been Created');</script>";
			echo "<script> window.location.assign('login.php');</script>";
		}
		}
		else
		{
			echo "<script> alert('PAssword did not match');</script>";
		}
	}
?>
<html>
	<form method="post">
		<table border="1">
			<tr>
				<th> Name : </th>
				<td><input type="text" name="txtname" /></td>
			</tr>
				<tr>
				<th> Email : </th>
				<td><input type="text" name="txtemail" /></td>
			</tr>
				<tr>
				<th> Password : </th>
				<td><input type="text" name="txtpass" /></td>
			</tr>
			<tr>
				<th> Cnfrm Password : </th>
				<td><input type="text" name="txtcpass" /></td>
			</tr>
				<tr>
				<th>  : </th>
				<td><input type="submit" name="btn_insert" value="Register"/></td>
			</tr>
		</table>
	</form>
</html>