<?php

  include 'connection.php';
  
  
       //$bet_id = $_POST['bet_number'];

        $sql= "SELECT * FROM bet_count WHERE code= '9898'";
       $result=mysqli_query($conn,$sql) or die("Query failed");
       $row= mysqli_fetch_array($result);
       
       $all_data = "<h1 class='gam-history' style='font-size: 17px;'>Bet ID: <span class='bet-id'>{$row['id']}</span></h1>";
                   
                
                echo $all_data;


       
?> 