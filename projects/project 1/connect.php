<?php
$conn = mysqli_connect('localhost:3307','root','','patient_database');

if(!$conn){
    die("error ".mysqli_connect_error());
}
//echo "success";
?>