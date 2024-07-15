<?php
include'connect.php'; 
?>
<html>
    <head>
    <button><a href="welcome.php"target="blank">POSTNATAL CARE CLINIC</a></button>
<button><a href ="Login.php"target="blank">ADMIN LOGIN</a></button>
<button><a href ="doctor.php"target="blank">DOCTOR'S PAGE</a><button>
<button><a href=" patient sign up.php"target="blank">PATIENT SIGN UP</a></button>
<button><a href="patient details.php"target="blank">PATIENT DETAIL</a></button>
<button><a href="MOTHER LOGIN.php"target="blank">MOTHER LOGIN</a></button>
<style>
    body
{
background-image:url("background 2.jpg");
background-position:center;
background-size:cover;
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
input[type=Longtext]
{
    width:59%;
    padding:50px;
    margin:7px 0;
    box-sizing:border-box
}
   }
</style>
	 <div class = "background">
<div class = "shape"></div>
<div class = "shape"></div>
</div>
<form method ="POST">
 <form name="FORM"><center>
    <h1><center>PAYMENT FORM</center></h1>
    <center>Mothername:</center>
    <input type="text"name="Mothername"required><br></br>
    <script>
       function pregnancynumber(pregnumb,1){
        if (pregnumb=1){
            return"give discount";
  }
  else{
    return"No discount";
  }
       } 
        </script>
   <center> Pregnancynumber:</center><input type="number"name="Pregnancynumber"required><br></br>
<a href="payment1.php">
<button type="submit">submit</a>