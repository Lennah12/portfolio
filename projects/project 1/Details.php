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
		<button><a href="patient details.php">show details</a></button>
		<button class="my-3"><a href="logout.php"class="">logout.php</a> 
		</button>
		<button><a href="feedback.php">feedback</a></button>
		<table class="table">
  <thead>
    <tr>
	<th scope="col">no</th>
      <th scope="col">Mothername</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">symptoms</th>

    </tr>
  </thead>
  <tbody>
  	<?php 
  	$sql = "SELECT * FROM details";
  	$result = mysqli_query($conn,$sql);
  	if($result){
  		//$row = mysqli_fetch_assoc($result);
  		//echo $row['name'];
  		//echo $row['email'];
  		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
  			$Mothername =$row['Mothername'];
  			$Phonenumber=$row['Phonenumber'];
  			$symptoms=$row['symptoms'];
		
  			echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$Mothername.'</td>
      <td>'.$Phonenumber.'</td>
      <td>'.$symptoms.'</td>
	

	  <td>
     <button class="btn btn-primary"><a href="details1 update.php?updateid=' . $id . '" class="text-light">Edit</a></button>
    <button class="btn btn-danger"><a href="details1 delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>

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