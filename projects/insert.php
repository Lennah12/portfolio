<?php
include'connectphpmyadmin.php';
    if(isset($_POST['submit'])){
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
    $Phonenumber=$_POST['Phonenumber'];
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO signup(Firstname,Lastname,Phonenumber,Email, password)
     VALUES('$Firstname','$Lastname','$Phonenumber','$Email','$password')";
    $result = mysqli_query($conn,$sql);
    if($result)
{
    echo "1 record added";
    header("Location:../'Sign up form.php?signup=success'");
}
else{
    die(mysqli_error($conn));
}

}

    mysqli_close($conn)
    ?>