<table border="1">
<tr>
       <th>id</th>
	   <th>name</th>
	   <th>add</th>
	   <th>action</th>
	   



</tr>
<?php
$conn=mysqli_connect("localhost","root","","database77");
$select=mysqli_query($conn,"select * from db21");
$num=mysqli_num_rows($select);
for($i=0;$i<$num;$i++)
{
	$data=mysqli_fetch_array($select);
	echo "<tr>";
	        echo "<td>" . $data[0]."</td>";
			echo "<td>" .$data[1]."</td>";
			echo "<td>" .$data[2]."</td>";
			echo "<td>" .'<a href="edit.php?id='.$data[0].'">edit</a>|<a href="delete.php?id='.$data[0].'">delete</a>'."</td>";
			 echo "</tr>";
		  
	
}

?>
</table>