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
        header('location:patient signupdisplay.php ');
    }
    else{
        //die(mysqli_error($conn));
        echo "wrong details";
    }
}

 ?>
<html>
<head>
<!--Navbar items -->
<div class="header">
<div class="header-right"> 
<a href="welcome.php"target="blank">HOME </a>
<a href="MOTHER LOGIN.php"target="blank">LOGIN</a>
<a href=" patient sign up1.php"target="blank">SIGN UP</a>
<a href="patient details.php"target="blank">PATIENTDETAILS</a>
<a href ="doctor.php"target="blank">DOCTOR'S PAGE</a>
<a href="contact us.php"target="blank">Contact</a>
<a href="payment1.php"target="blank">PAYMENT</a> 
<a href ="Login.php"target="blank">ADMIN LOGIN</a>
</div>
</div>
<style>
body
{
background-image:url("background 6.jpg");
background-position:center;
background-size:cover;
}
.header {
  overflow: hidden;
  padding: 20px 10px;
}
.header a.active {
  background-color: green;
  color: white;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
.header-right {
  float: right;
}
navlist {
background-color:powderblue;
position:absolute;
width:100%;
}
navlist {
    float:left;
    display:block;
    color:#f2f2f2;
    text-align:center;
    padding:12px;
    text-decoration:none;
    font-size:15px;
}
navlist-right{
    float-right;
}
navlist a:hover{
    background-color:#ddd;
    color:black;
}
search input[type=text]{
    width:300px;
    height:25px;
    border radius:25px;
    border:none;
}
.form{	
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
padding:50px 35px;}
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
</head>
<div class = "background">
<div class = "shape"></div>
</div>
<form method="POST">
<h1><center>MOTHER'S FORM</center></h1>
<label for = "aname"><br>MOTHER name:</br></label>
<input type ="text" placeholder= "Enter MOTHER name"name="username"required><br></br>
<label for ="aID"><br>MOTHER Password:<br></label>
<Input type ="text"placeholder ="Mothers password"name="password"required><br></br>
<div class="clearfix">
<button type ="button"class="cancelbtn">Cancel</button>
<button type="submit" name="submit">SUBMIT</button><br></br>
</div>
<p>dont have an account<button type =""><a href="patient sign up1.php">Create one</a></button></p>

<footer id="wrapper">
    <div id ="footer-content">Contacts:pnc@gmail.com 2022</div>
</footer>
</form>
