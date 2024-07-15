<?php
$conn = mysqli_connect('localhost:3307','root','','recipe database');

if(!$conn){
    die("error ".mysqli_connect_error());
}
echo "success";
?>
