<?php 
include'connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style type="text/css">
      body{
        background:;
      }
    </style>
</head>
<body>
	<div class = "container">
  <button><a href="patient sign up1.php">Add patient</a> 
		<button class="my-3"><a href="logout.php"class="">logout.php</a> 
        <button class="my-3"><a href ="patient details.php"class="">patient</a>
		</button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$sql = "SELECT * FROM signup";
  	$result = mysqli_query($conn,$sql);
  	if($result){
  		//$row = mysqli_fetch_assoc($result);
  		//echo $row['name'];
  		//echo $row['email'];
  		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
  			$Firstname =$row['Firstname'];
  			$Lastname=$row['Lastname'];
  			$username=$row['username'];
  			$Email=$row['Email'];
            $password=$row['password'];
  			echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$Firstname.'</td>
      <td>'.$Lastname.'</td>
      <td>'.$username.'</td>
      <td>'.$Email.'</td>
      <td>'.$password.'</td>
      <td>
      <button class="btn btn-primary"><a href="signupupdate.php?updateid=' . $id . '" class="text-light">Edit</a></button>
      <button class="btn btn-danger"><a href="signupdelete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
    </td>
    </tr>
    <tr>';

  		}
  		
  	}
  	?>
    
  </tbody>
</table>
	</div> 
</body>
</html>