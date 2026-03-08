<?php

  session_start();
if (!isset($_SESSION['user_number']))
{
    header('location: login.php');
}

  include 'connection.php';

  $sess_num = $_SESSION['user_number'];
  $amount = $_POST['cut_amount'];

  $sql= "SELECT * FROM user WHERE user_number='$sess_num'";
  $result=mysqli_query($conn,$sql) or die("Query failed");
  $row= mysqli_fetch_array($result);

  $get_amount = $row['user_amount'];

  if($get_amount >= $amount){
     $final_amount = $get_amount - $amount;
     echo 0;

     $sql2 = "UPDATE user SET user_amount='$final_amount' WHERE user_number='$sess_num'";
     $result2=mysqli_query($conn,$sql2) or die("Query failed");
  }else{
      echo 1;
  }

  