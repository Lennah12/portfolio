<?php
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $Mothername = $_POST['Mothername'];
        $Phonenumber = $_POST['Phonenumber'];
        $symptoms = $_POST['symptoms'];
        $sql = "INSERT INTO details (Mothername, Phonenumber, symptoms) VALUES ('$Mothername', '$Phonenumber', '$symptoms')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Entered successfully";
            if ($symptoms == "panic attack" || $symptoms == "anxiety") {
                // Send email to doctor
                $to = "doctorm@gmail.com"; // Replace with doctor's email
                $subject = "Urgent: Patient Needs Attention";
                $message = "Patient Name: $Mothername\nPhone Number: $Phonenumber\nSymptom: $symptoms\nPlease contact the patient immediately.";
                $headers = "From: noreply@yourdomain.com"; // Replace with appropriate sender email

                if (mail($to, $subject, $message, $headers)) {
                    echo "<script>alert('Email sent to doctor');</script>";
                } else {
                    echo "<script>alert('Failed to send email');</script>";
                }
            }
            header('location:Details.php');
         } else {
            die(mysqli_error($conn));
        }
    
    mysqli_close($conn); // Close database connection
    }
    ?>
<html>
<head>
<div class="header">
<div class="header-right"> 
<a href="welcome.php"target="blank">HOME</a>
<a href="MOTHER LOGIN.php"target="blank">LOGIN</a>
<a href=" patient sign up1.php"target="blank">SIGN UP</a>
<a href="patient details.php"target="blank">DETAILS</a>
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
form{	
width :59%;
height: 480px;
position:absolute;
transform:translate(-50%,-50%);
left:50%;
top :50%;
}
background - image shape
{
height:200px;
width :200px;
position:absolute;
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
}
input [type=button]
{
display:inline-block;
height :40px;
width:100%;
border-radius:8px;
padding:0 10px;
margin-top:8px;
font-size : 14px;
font-weight:300;
}
#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}
content{
    height:100%;
}
        footer {
            height: 40px;
        }
        #footer-content {
            background-color: black;
            color: white;
            text-align: center;
            padding: 8px;
        }
        #page-container {
  position: relative;
  min-height: 100vh;
}
    
</style>
</head>
<div class = "background">
<div class = "shape"></div>
<div class = "shape"></div>
</div>

     <!-- HTML form for user input -->
<body>
     <div id="page-container">
   <div id="content-wrap">
<form method= "POST" action="Details.php">
<form name="FORM"><center>  
Mothername:<center></center><input type="text"name="Mothername"placeholder ="Mothername"required><br></br>
Phonenumber:<center></center> <input type="tel" name="Phonenumber" placeholder="Enter phonenumber" minlength="10" maxlength="10" required><br><br>
<label for ="symptoms">symptoms:<center></center></label>
<select name="symptoms" id="symptoms">
<option value="anxiety">anxiety</option>
<option value="feeling tired">feeling tired</option>
<option value="severe mood swings">severe mood swings</option>
<option value="weight loss or gain">weight loss or gain</option>
<option value="severe sadness">severe sadness</option>
</select><br></br>
Pregnancynumber:<center></center> <input type="number" name="times" placeholder="Enter pregnumb" min="1" max="10" required><br><br>
<div class="clearfix">
<button type ="button"class="cancelbtn">Cancel</button>
<button type="submit" name="submit">SUBMIT</button><br></br>
</div>
</form>
</body>
</html>
<footer id="wrapper">
    <div id ="footer-content">Contacts:pnc@gmail.com 2024</div>
</footer>  
