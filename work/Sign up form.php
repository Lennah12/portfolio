<?php
include'connect.php';
    if(isset($_POST['submit'])){
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
	$username=$_POST['username'];
    $Phonenumber=$_POST['Phonenumber'];
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO signup(Firstname,Lastname,username,Phonenumber,Email, password)
     VALUES('$Firstname','$Lastname','$username','$Phonenumber','$Email','$password')";
    $result = mysqli_query($conn,$sql);
    if($result)
{
    echo "1 record added";
    header('location:Authors.php');
}
else{
    die(mysqli_error($conn));
}

}

    mysqli_close($conn)
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
background-image:url("cook2.jpg");
background-position: center;
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
Firstname:<center></center><input type="text"name="Firstname"><br>
Lastname:<center></center><input type="text"name="Lastname"><br></br>
Username:<center></center><input type="text"name="username"><br></br>
Phone number:<center></center><input type="number"name="Phonenumber"><br></br>
Email:<center></center><input type="optional"name="Email"value="@gmail.com"><br></br>
<label for="passw"><br>password</label><center>
<input type ="password"placeholder="enter password"name="password"required></center><br></br>
<div class="clearfix">
	<button type ="button"class="cancelbtn">Cancel</button>
<button type="submit" name="submit">SIGN UP</button><br></br>
</div>
</center>
</form>
</html>