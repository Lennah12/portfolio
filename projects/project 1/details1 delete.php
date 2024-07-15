<?php 
include'connect.php';
if(isset($_GET['deleteid'])){
	$id = $_GET['deleteid'];
	$sql = "DELETE FROM details WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo"deleted successfully";
		header('location: Details.php');
		}
			die(mysqli_error($conn));
		}
 ?>
 