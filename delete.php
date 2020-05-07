<?php
$conn=mysqli_connect("localhost","root","","database77");
$delete=mysqli_query($conn,"delete from db21 where id='$id'");
$id=$_GET['id'];
if($delete)
{
	echo"<script>  alert('data deleted')</script>";
	echo"<script> window.location.assign('showdata.php');</script>";
}
?>