<html>
	<form method="post">
		<table border="1">
		
		<tr>
		<th>Enter The Base</th>
		<td><input type="number" name="tab"/></td>
		
			</tr>
			
				<tr>
		<th>Enter The Start Power</th>
		<td><input type="number" name="sta"/></td>
		
			</tr>
			

			<tr>
		<th> : </th>
		<td><input type="submit" name="btn_click"/></td>
		
			</tr>
		</table>


</form>

</html>


<?php


if (isset($_POST['btn_click']))
{
	$base=$_POST['tab'];
	$power=$_POST['sta'];

	
	
	for($res=1;$res<=$power;$res++)
	{
		echo $base."*";
		$res1=$res1*$base;
		
	}
	echo  "=" .$res1;
	
		
}





?>