<?php

  include 'connection.php';


 $sql3 = "UPDATE game SET timer='70' WHERE id='86'";
     //$result3=mysqli_query($conn,$sql3) or die("Query failed");
    
       if($result3=mysqli_query($conn,$sql3)){
           echo 0;
       }else{
           echo 1;
       }


?>