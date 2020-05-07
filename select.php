<html>
<center>
		<h1>Registration From</h1>
		<table border="1">
			<form method="post">
				<tr>
					<th>Name : </th>
					<td><input type="text" name="txtname" required="required"/ >
				</tr>
				<tr>
					<th>Father Name : </th>
					<td><input type="text" name="txtfname" required="required"/ >
				</tr>
				<tr>
					<th>Address : </th>
					<td><input type="text" name="txtadd" required="required"/ >
				</tr>
				<tr>
					<th> : </th>
					<td><input type="submit" name="btn_inset" value="Add record"/ >
				</tr>
			</form>
		</table>
	</center>



</html>
<html>
       <center>
	         <h1>delete data</h1>  
			 <form method="post">
			      <table border="1">
				        <tr>
					<th>Id : </th>
					<td><input type="number" name="txtid" required="required"/ >
				</tr>
				<tr>
					<th> : </th>
					<td><input type="submit" name="btn_delete" value="Delete  record"/ >
				</tr> 
					   
					
				  
				  
				  </table>
			 
			 
			 
			 
			 </form>
	   
	   
	   </center>
 
</html>
<html>
	<center>
		<h1>Update Data</h1>
		<table border="1">
			<form method="post">
			<tr>
					<th>Id : </th>
					<td><input type="text" name="txtid" required="required"/ >
				</tr>
				<tr>
					<th>Name : </th>
					<td><input type="text" name="txtname" required="required"/ >
				</tr>
				<tr>
					<th>Father Name : </th>
					<td><input type="text" name="txtfname" required="required"/ >
				</tr>
				<tr>
					<th>Address : </th>
					<td><input type="text" name="txtadd" required="required"/ >
				</tr>
				<tr>
					<th> : </th>
					<td><input type="submit" name="btn_update" value="Update record"/ >
				</tr>
			</form>
		</table>
	</center>
	
</html>
<?php 

	$conn=mysqli_connect("localhost","root","","database77");
	if(isset($_POST['btn_inset']))
	{
		$id="";
		$name=$_POST['txtname'];
		$fname=$_POST['txtfname'];
		$add=$_POST['txtadd'];
		$insert=mysqli_query($conn,"insert into paints values('".$id."','".$name."','".$fname."','".$add."')");
		if($insert)
		{
			echo "<script> alert('Data Save'); </script>";
		}
		else
		{
			echo "Something went wrong";
		}
	}
	else if(isset($_POST['btn_delete']))
	{
		$id=$_POST['txtid'];
		$delet=mysqli_query($conn,"Delete from paints where id='".$id."'");
		if($delet)
		{
			echo "<script> alert('Data Delete'); </script>";
		}
		
	}
	?>