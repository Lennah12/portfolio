<?php
include'connect.php';
$id =$_GET['updateid'];
$sql = "SELECT * FROM details WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$Mothername =$row['Mothername'];
$Phonenumber=$row['Phonenumber'];
$symptoms=$row['symptoms'];
$pregnumb=$row['pregnumb'];
if(isset($_POST['submit'])){
  $Mothername =$_POST['Mothername'];
  $Phonenumber =$_POST['Phonenumber'];
  $symptoms=$_POST['symptoms'];
  $pregnumb=$_POST['pregnumb'];
  $sql = "UPDATE details SET
   Mothername ='$Mothername',
   Phonenumber ='$Phonenumber',
   symptoms= '$symptoms',
   pregnumb='$pregnumb',
  where id = $id";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo"updated successfully";
   
    header('location:Details.php');
  }else{
    die(mysqli_error($conn));
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
<style>body
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
}
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
</head>
<form action="#" method="POST">
<form name="FORM"><center>
Mothername:<center></center><input type="text"name="Mothername" value="<?php echo $Mothername ?>"><br></br>
Phonenumber:<center></center><input type="text"name="Phonenumber"value="<?php echo $Phonenumber?>"><br></br>
symptoms:<center></center><input type="text"name="symptoms"value="<?php echo $symptoms ?>"><br></br>
Pregnancynumber:<center></center><input type="number"name="pregnancynumber"value="<?php echo $pregnumb?>"><br></br>
<button type ="submit"name="submit">Update</button>
<br>
</form>  