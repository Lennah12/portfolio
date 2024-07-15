
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
		
      <button><a href="recipedisplay.php">Recipe</a> 
		<button class="my-3"><a href="logout.php"class="">logout.php</a> 

		</button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Recipe Name</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Preptime</th>
      <th scope="col">Procedure</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$sql = "SELECT * FROM recipe";
  	$result = mysqli_query($conn,$sql);
  	if($result){
  		//$row = mysqli_fetch_assoc($result);
  		//echo $row['name'];
  		//echo $row['email'];
  		while ($row = mysqli_fetch_assoc($result)) {
  			$id = $row['id'];
  			$recipename =$row['recipename'];
  			$ingredients=$row['ingredients'];
  			$preptime=$row['procedures'];
  			$procedures=$row['procedures'];
  			echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$recipename.'</td>
      <td>'.$ingredients.'</td>
      <td>'.$preptime.'</td>
      <td>'.$procedures.'</td>
      <td>
    	<button><a href="recipeupdate.php?
    	updateid='.$id.'">Edit</a></button>
    	<button><a href="recipedelete.php?
    	deleteid='.$id.'">delete</a></button>
    	
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