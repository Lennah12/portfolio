<?php
include'connect.php';
$id =$_GET['updateid'];
$sql = "SELECT * FROM recipe WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$recipename =$row['recipename'];
$ingredients =$row['ingredients'];
$preptime =$row['preptime'];
$procedures =$row['procedures'];
if(isset($_POST['submit'])){
  $recipename =$_POST['recipename'];
  $ingredients =$_POST['ingredients'];
  $preptime=$_POST['preptime'];
  $procedures=$_POST['procedures'];
  $sql = "UPDATE recipe set id = $id,recipename ='$recipename',ingredients ='$ingredients',preptime= '$preptime',procedures ='$procedures'
  where id = $id";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo"updated successfully";
   
    header('location: recipedisplay.php');
  }else{
    die(mysqli_error($conn));
  }
}
?>
<html>
<head>
<button><a href="Homepage.php"target="blank">FOOD VIBES</a></button>
<button><a href ="Login form.php"target="blank">LOGIN HERE</a></button>
<button><a href="Sign up form.php"target="blank">Signup HERE</a></button>
<button><a href="RECIPE.php"target="blank">RECIPES</a></button>
<button><a href="Authors.php"target="blank">AUTHORS</a></button>
<button><a href="contact us.php"target="blank">Contact us</a></button><br><br>
<style>
body
{
background-image:url("cook.jpg");
}
background-image
 {
width :59%;
height: 480px;
position:absolute
transform:translate(-50%,-50%);
left:50%;
top :50%;
}
background - image shape
{
height:200px;
width :200px;
position:center;
border-radius: 50%;
}
shape:first-child{
background :linear-gradient
left:-80px;
top:-80px;
}
form{
height:520px;
width :400px;
background-color:grey;
position:absolute;
transform:translate(-50% , -50%)
top:50%;
left:50%;
border-radius : 10px;
backdrop-filter : blur(10px)
border :2px solid;
box-shadow :0 0 40px
padding:50px 35px;}
}
input[type=text]
{
    width:59%;
	padding:10px 10px;
	margin:7px 0;
	display:inline -block ;
	border:1px solid;
	box-sizing:border-box;
}

input [type=button]
{
background-color:white
padding : 14px 20px;
margin:8px 0;
border:1px solid;
cursor:pointer;
width:59%;
}
button:hover{
opacity:0.8;
}
</style>
</head>
<div class = "background">
<div class = "shape"></div>
</div>
<form method="post">
<h1><center>RECIPES </center><h1>
<form><center>
Recipe name:<center></center><input type="text"name="recipename" value="<?php echo $recipename ?>"><br></br>
ingredients:<center></center><input type="text"name="ingredients"value="<?php echo $ingredients?>"><br></br>
prep time:<center></center><input type="number"name="preptime"value="<?php echo $preptime ?>"><br></br>
procedure:<center></center><input type="text"name="procedures"value="<?php echo $procedures ?>"><br></br>
<button type ="submit"name="submit">Update</button>
<br>
</form>
</html>
