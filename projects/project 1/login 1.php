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
        header('location:patient detail.php ');
    }
    else{
        //die(mysqli_error($conn));
        echo "wrong details";
    }
}

 ?>
<html>
<head>
<button><a href="welcome.php"target="blank">POSTNATAL CARE CLINIC</a></button>
<button><a href ="Login.php"target="blank">ADMIN LOGIN</a></button>
<button><a href ="doctor.php"target="blank">DOCTOR'S PAGE</a><button>
<button><a href=" patient sign up.php"target="blank">PATIENT SIGN UP</a></button>
<button><a href="patient detail.php"target="blank">PATIENT DETAILS</a></button>
<button><a href="MOTHER LOGIN.php"target="blank">MOTHER LOGIN</a></button>
<button><a href="contact us.php"target="blank">Contact us</a></button>
<button><a href="payment1.php"target="blank">PAYMENT</a></button> 
<style>
body
{
background-image:url("background 2.jpg");
background-position:center;
background-size:cover;
}
form{	
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
wrapper{
    background-color:grey;
    min-height:100%;
    margin-bottom:-5opx;
}
wrapper:after{
    content:"";
    display:block;
    height:50px;
}
content{
    height:100%;
}
footer{
    height:50px;
}
footer-content{
    background-color:black;
    border:1px solid;
    height:32px;
    padding:8px;
}
</style>
<div class = "background">
<div class = "shape"></div>
</div>
<form method="POST"><center>
<h2> LOGIN FORM</h2>
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
</div></center>
</form>
</body>
</html>
