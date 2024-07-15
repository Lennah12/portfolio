<?php
include'connect.php'; 
if(isset($_POST['submit'])){
	$Mothername= $_POST['Mothername'];
	$symptoms= $_POST['symptoms'];
	$diagnosis= $_POST['diagnosis'];
	$prescription= $_POST['prescription'];
	$sql =" INSERT INTO doctor(Mothername,symptoms,diagnosis,prescription)
	VALUES('$Mothername','$symptoms','$diagnosis','$prescription')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "entered successfully";
        header('location:feedback.php');
    }
        else{
            die(mysqli_error($conn));
            }   
	}
?>
<html>
<head>

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
height:480px;
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
   }
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
</style>
<head>
<div class="header">
<div class="header-right">
<a href="welcome.php"target="blank">HOME</a>
<a href ="Login.php"target="blank">LOGIN</a>
<a href ="doctor.php"target="blank">DOCTOR'S PAGE</a>
<a href=" patient sign up1.php"target="blank">SIGN UP</a>
<a href="patient details.php"target="blank">PATIENT DETAIL</a>
<a href="MOTHER LOGIN.php"target="blank">LOGIN</a>
<a href="contact us.php"target="blank">Contact</a>
<a href="payment1.php"target="blank">PAYMENT</a>
</div>
</div>
</head>
<body>
<div class="form">
<form method ="POST">
 <form name="FORM"><center>
    <h1><center>DOC FORM</center></h1>
    Mothername:<center></center><input type="text"name="Mothername"required><br></br>
    symptoms:<center></center><input type="text"name="symptoms"required><br></br>
    diagnosis:<center></center><input type="Longtext"name="diagnosis"required><br></br>
    Prescription:<center></center><input type="text"name="prescription"required><br></br>
    <div class="clearfix">
<button type ="button"class="cancelbtn">Cancel</button>
<button type="submit" name="submit">submit</button><br></br>
</div>
</form>
<footer id="wrapper">
    <div id ="footer-content">Contacts:pnc@gmail.com 2024</div>
</footer>
</html>