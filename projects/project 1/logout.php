<?php 
session_start();
session_unset();
session_abort();
header('location:MOTHER LOGIN.php');
 ?>