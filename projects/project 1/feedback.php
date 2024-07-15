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
<style>
      body
	  {
        background-image:url ("display.jpg");
		background-position:center;
        background-size:cover;
      }
	button{
		display:inline-block;
		background-color:pink;
		color:white;
		padding:10px;
		text-align:center;
		border-radius:4px;
	  }
    </style>
</head>
<body>
	<div class = "container">
		<button><a href="doctor.php">show details</a>
		<button class="my-3"><a href="logout.php"class="">logout.php</a> 
		</button>
		<button><a href="download.php?action">Download</a></button>
		<table class="table">
  <thead>
    <tr>
	<th scope="col">no</th>
      <th scope="col">Mothername</th>
      <th scope="col">symptoms</th>
    <th scope="col">diagnosis</th>
	<th scope="col">prescription</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$sql = "SELECT * FROM doctor";
  	$result = mysqli_query($conn,$sql);
  	if($result){
  		//$row = mysqli_fetch_assoc($result);
  		//echo $row['name'];
  		//echo $row['email'];
  		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
  			$Mothername =$row['Mothername'];
            $symptoms=$row['symptoms'];
  			$diagnosis=$row['diagnosis'];
		    $prescription=$row['prescription'];
  			echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$Mothername.'</td>
      <td>'.$symptoms.'</td>
      <td>'.$diagnosis.'</td>
	  <td>'.$prescription.'</td>

	  <td>
     <button class="btn btn-primary"><a href="feedback update.php?updateid=' . $id . '" class="text-light">Edit</a></button>
    <button class="btn btn-danger"><a href="feedback delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>

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