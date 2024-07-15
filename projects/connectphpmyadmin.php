<?php
$servername="localhost:3307";
$username="root";
$password ="";
$database="recipe database";
$conn = mysqli_connect($servername,$username,$password,$database);

if($conn ===false){
    die("error ".mysqli_connect_error());
}
echo "success";
?>
