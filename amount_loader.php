<?php

  include 'connection.php';
  
  
       //$bet_id = $_POST['bet_number'];

        $sql= "SELECT * FROM bet_count WHERE code= '9898'";
       $result=mysqli_query($conn,$sql) or die("Query failed");
       $row= mysqli_fetch_array($result);
       
       $all_data = "<center><h1 style='color: white; font-size: 23px; margin-top: 5px;'>RED</h1>
                   <p style='color: white; font-size: 11px;'>Total bets ₹<span class='red-total'>{$row['red_amount']}</span></p></center>";
      
                   
                
                echo $all_data;


       
?>  
