<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     header("Location: registration.php");
}else{
     header("Location: index.php");
     exit();
}
 ?>