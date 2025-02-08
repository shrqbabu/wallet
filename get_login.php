<?php
include 'connection.php';

$number=$_POST['num'];
$password=$_POST['password'];

$sql= "SELECT * FROM user WHERE user_number='$number' && user_password='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
$fetch=mysqli_fetch_array($query);
 
     if($row == 1){
     $sess_number=$fetch['user_number'];
     $sess_name=$fetch['user_name'];
    session_start();
    $_SESSION['user_number']=$sess_number;
    $_SESSION['user_name']=$sess_name;

    header('location: home.php');
 }else{
     echo "Check number and password";
 }
         
?>