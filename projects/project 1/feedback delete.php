<?php 
include'connect.php';
if(isset($_GET['deleteid'])){
	$id = $_GET['deleteid'];
	$sql = "DELETE FROM doctor WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo"deleted successfully";
		header('location: feedback.php');
		}
			die(mysqli_error($conn));
		}
 ?>