<?php
include'connectphpmyadmin.php';
if(isset($_POST['submit'])){
	$password = $_POST['password'];
	$username = $_POST['username'];
	//Performing insert query execution
	$sql="INSERT INTO lens1 (password,username)
	 VALUES('$password','$username')";
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo"success";
		header('location:Loginform1.php');
	}
	else{
		die(mysqli_error($conn));
	}
	 //Close connection
	 mysqli_close($conn);   
	}
	 ?>	