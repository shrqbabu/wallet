<?php 
 
 include 'connection.php';

 session_start();
$sess_number= $_SESSION['user_number'];
$sess_name= $_SESSION['user_name'];
$bet_id= $_POST['betID'];
$bet_amount= $_POST['bet_amount'];



$sql4= "INSERT INTO `bet_history` (`id`, `user_number`, `user_name`, `colour`, `amount`, `status`) VALUES ('$bet_id', '$sess_number', '$sess_name', 'RED', '$bet_amount', 'PENDING')";
     if($result4=mysqli_query($conn,$sql4) or die("Query failed")){
         echo 0;
     }else{
         echo 1;
     }


?>