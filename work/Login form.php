<?php
include'connect.php'; 

if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    $query = "SELECT * FROM admin WHERE username ='$username' AND password ='$password'";
    $result = mysqli_query($conn,$query);
    $count =mysqli_num_rows($result);
    if($count>0){
        echo"successfully login";
        header('location:signupdisplay.php ');
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
<button><a href="Sign up form.php"target=blank">Signup HERE</a></button>
<button><a href="RECIPE.php"target=""blank">RECIPES</a></button>
<button><a href="contact us.php"target="blank">Contact us</a></button><br><br>
<button><a href="Authors.php"target="blank">AUTHORS</a></button>
<style>
body{background-image:url("cook2.jpg");
background-position:center;
background-size:contain;
}
input[type=text],input[type=Password]
{
	width:59%;
	padding:10px 10px;
	margin:7px 0;
	display:inline -block ;
	border:1px solid;
	box-sizing:border-box;
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

Input[type=button]
{
background-color:white
color:white;
padding:11px 15px
margin:	5px 0;
border:1px solid;
Cursor:pointer;
width:39%
}
button: hover
{
	Opacity:0.8;
	}
	cancel button
	{
		width:auto;
		padding:10px 18px;
		background-color:white;
	}
	span:passw{
	float:right;
	padding-top:16px;
	}
	@media screen and (max-width:300px){span.passw{
	display:block;
	Float:none;
	}
	cancel button{
	width:29%;
	}
	    }
	</style>
</head>
<body>
<form action="" method="POST"><center>
<h2>ADMIN LOGIN FORM</h2>
<div class="container">
<label for="uname"><br>Username</br></label>
</div>
<input type ="text"placeholder="Enter username"name="username"required><br></br>
<label for="passw"><br>Password</br>
</Label>
<Input type ="Password"placeholder="Enter password"name="password"required><br></br>
<button type="submit"name="submit">login</button>
<Label><br></br>
<Input type="checkbox" checked="checked"name="remember">Remember me</label><br>
<div>
<button type="button"
class="cancel button">cancel</button>
<button type class ="button">Forgot password?</button>
</div><center>
</form>
</body>
</html>