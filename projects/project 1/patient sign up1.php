<?php
    // PHP code for handling form submission and password validation
    include 'connect.php'; // Include the file for database connection
    if (isset($_POST['submit'])) { // Check if the form is submitted
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $username = $_POST['username'];
        $Phonenumber = $_POST['Phonenumber'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        // Password validation
        if (strlen($password) < 8) {
            echo "<script>alert('Password must be at least 8 characters long');</script>";
        } elseif (!preg_match("#[0-9]+#", $password)) {
            echo "<script>alert('Password must contain at least one number');</script>";
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            echo "<script>alert('Password must contain at least one uppercase letter');</script>";
        } else {
            // Perform SQL insertion securely
            $sql = "INSERT INTO signup (Firstname, Lastname, username, Phonenumber, Email, password)
                VALUES ('$Firstname', '$Lastname', '$username', '$Phonenumber', '$Email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "1 record added";
                header('Location: MOTHER LOGIN.php'); // Redirect after successful submission
                exit; // Stop further execution
            } else {
                die(mysqli_error($conn)); // Display error message
            }
        }
    }

    mysqli_close($conn); // Close database connection
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
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
        /* Your CSS styles here */
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
search{
    float:right;
    margin:7px;
}
search button{
    background-color:#0074D9;
    float:right;
    padding:5px 10px;
    margin-right:16px;
    font-size:12px;
    border:none;
    cursor:pointer;
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
<body>
    
    <!-- HTML form for user input -->
    <div class = "background">
<div class = "shape"></div>
</div>
    <form method="POST">
        <form name="FORM"><center>
        <h1><center>SIGN UP HERE</center></h1>
        Firstname:<center></center> <input type="text" name="Firstname" minlength="3" placeholder="Firstname" required pattern="[A-Za-z\s]+" title="Please enter text only (no numbers or special characters)"><br><br>
        Lastname:<center></center> <input type="text" name="Lastname" placeholder="Lastname" required pattern="[A-Za-z\s]+" title="Please enter text only (no numbers or special characters)"><br><br>
        Username: <center></center><input type="text" minlength="3" name="username" required pattern="[A-Za-z\s]+" title="Please enter text only (no numbers or special characters)"><br><br>
        Phonenumber:<center></center> <input type="tel" name="Phonenumber" placeholder="Enter phonenumber" minlength="10" maxlength="10" required><br><br>
        Email:<center></center> <input type="email" name="Email" value="@gmail.com"><br><br>
        Password: <center></center><input type="text" minlength="8" placeholder="Enter password" name="password" required><br><br>
        <button type="submit" name="submit">SIGN UP</button>
    </form>

    <!-- Footer section -->
    <footer>
        <div id="footer-content">Contacts: pnc@gmail.com 2024</div>
    </footer>
</body>

</html>
