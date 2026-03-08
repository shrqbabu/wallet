<?php

  include 'connection.php';

 $update_amount= $_POST['update_amount'];
 //$bet_id= $_POST['bet_num'];


$sql= "SELECT * FROM bet_count WHERE code= '9898'";
       $result=mysqli_query($conn,$sql) or die("Query failed");
       $row= mysqli_fetch_array($result);

      $total = $row['red_amount'] + $update_amount;

 $sql3 = "UPDATE  bet_count SET red_amount='$total' WHERE code='9898'";
     //$result3=mysqli_query($conn,$sql3) or die("Query failed");
    
       if($result3=mysqli_query($conn,$sql3)){
           echo 0;
       }else{
           echo 1;
       }


?>