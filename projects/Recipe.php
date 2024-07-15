<?php
include'connect.php';
if(isset($_POST['submit'])){
	$recipename= $_POST['recipename'];
	$ingredients= $_POST['ingredients'];
	$preptime= $_POST['preptime'];
	$procedures= $_POST['procedures'];
	$sql =" INSERT INTO recipe(recipename,ingredients,preptime,procedures)
	VALUES('$recipename','$ingredients','$preptime','$procedures')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "entered successfully";
		header('location:recipedisplay.php ');
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
background-image:url("cook2.jpg");
background-position:center;
background-size:contain;
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
Recipe name:<center></center><input type="text"name="recipename"><br></br>
ingredients:<center></center><input type="text"name="ingredients"><br></br>
prep time:<center></center><input type="number"name="preptime"><br></br>
procedure:<center></center><input type="text"name="procedures"><br></br>
<button type ="submit"name="submit">CREATE</button>
<br>
</form>
</html>