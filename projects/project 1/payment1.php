
<!DOCTYPE html>
<html>
    <head>
    <div class="header">
    <div class="header-right">
<a href="welcome.php"target="blank">HOME</a>
<a href="MOTHER LOGIN.php"target="blank">LOGIN</a>
<a href=" patient sign up1.php"target="blank">SIGN UP</a>
<a href="patient details.php"target="blank">PATIENTDETAILS</a>
<a href ="doctor.php"target="blank">DOCTOR'S PAGE</a>
<a href="contact us.php"target="blank">Contact</a>
<a href="payment1.php"target="blank">PAYMENT</a>
<a href ="Login.php"target="blank">ADMIN LOGIN</a></button>
</div>
</div>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
       <style>
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
</style>
    </head>
    <body>
        <div>
            
            <br>
            <div class="container">
                <form action="mpesa_push.php" method="POST" autocomplete="off">
                    <h1>MPESA Payment</h1>
                    <hr>
                    
    <head>
  
<style>
    body
{
background-image:url("background 6.jpg");
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
 <form name="FORM" action="mpesa_push.php"><center>
    <h1><center>PAYMENT FORM</center></h1>
    <center>Phone number:</center>
    <input type="text"name="phone_number"required><br></br>
    
   <center> Amount:</center><input type="number"name="amount"required><br></br>

                    <input type="submit" value="PAY" name="submit" class="btn btn-primary">
                </form>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
