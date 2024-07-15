<?php
include'connect.php';
$id =$_GET['updateid'];
$sql = "SELECT * FROM signup WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$Firstname =$row['Firstname'];
$Lastname =$row['Lastname'];
$username=$row['username'];
$Email =$row['Email'];
$password =$row['password'];
if(isset($_POST['submit'])){
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
	$username=$_POST['username'];
    $Phonenumber=$_POST['Phonenumber'];
    $Email=$_POST['Email'];
    $password=$_POST['password'];
  $sql = "UPDATE signup set id = $id,Firstname ='$Firstname',Lastname ='$Lastname',username= '$username',Phonenumber='$Phonenumber',Email='$Email',password='$password'
  where id = $id";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo"updated successfully";
   
    header('location: signupdisplay.php');
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
<head>
<style>
body{
background-image:url("cook.jpg");
}
background-image
 {
background-size:cover;	
width :59%;
height: 480px;
position:center;
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
padding:50px 35px;
input [type=button]
{
display:block;
height :50px;
width:100%;
border-radius:3px;
padding:0 10px;
margin-top:8px;
font-size : 14px;
font-weight:300;
}

</style>

	 <div class = "background">
<div class = "shape"></div>
<div class = "shape"></div>
</div>

<form method="POST">
<h1><center>SIGN UP HERE</center></h1>	 
	<form name="FORM"><center>
Firstname:<center></center><input type="text"name="Firstname"value="<?php echo $Firstname?>"><br>
Lastname:<center></center><input type="text"name="Lastname"value="<?php echo $Lastname?>"><br></br>
Username:<center></center><input type="text"name="username"value="<?php echo $username?>"><br></br>
Phone number:<center></center><input type="number"name="Phonenumber"value="<?php echo $Phonenumber?>"><br></br>
Email:<center></center><input type="optional"name="Email"value="@gmail.com"value="<?php echo $Email?>"><br></br>
<label for="passw"><br>password</label><center>
<input type ="password"placeholder="enter password"name="password"required value="<?php echo $password?>"></center><br></br>
<div class="clearfix">
	<button type ="button"class="cancelbtn">Cancel</button>
<button type="submit" name="submit">Update</button><br></br>
</div>
</center>
</form>
</html>