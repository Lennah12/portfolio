<?php
include'connect.php'; 

if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    $query = "SELECT * FROM signup WHERE username ='$username' AND password ='$password'";
    $result = mysqli_query($conn,$query);
    $count =mysqli_num_rows($result);
    if($count>0){
        echo"successfully login";
        header('location:recipedisplay.php ');
    }
    else{
        //die(mysqli_error($conn));
        echo "wrong details";
    }
}

 ?>
<html>
<head>
<button><a href="Homepage.php"target="blank">FOOD VIBES</a></button>
<button><a href ="Login form.php"target="blank">LOGIN HERE</a></button>
<button><a href="Sign up form.php"target="blank">Signup HERE</a></button>
<button><a href="RECIPE.php"target="blank">RECIPES</a></button>
<button><a href="Author.php"target="blank">AUTHORS</a></button>
<button><a href="contact us.php"target="blank">Contact us</a></button><br><br>
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
input 
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
Input [type=button]
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
 <div class = "background">
<div class = "shape"></div>
</div>
<form method="POST">
<h1><center>AUTHOR'S FORM</center></h1>
<label for = "aname"><br>Author name:</br></label>
<input type ="text" placeholder= "Enter Authors name"name="username"><br</br>
<label for ="aID"><br>Author Password:<br></label>

<Input type ="text"placeholder ="Authors password"name="password"><br></br>
<button type ="submit"name="submit">SUBMIT</button>
<p>dont have an account<button type =""><a href="Sign up form.php">Create one</a></button></p>


