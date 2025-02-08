<?php

include 'connection.php';

$name=$_POST['name'];
$number=$_POST['num'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql= "INSERT INTO `user` (`id`, `user_name`, `user_number`, `user_email`, `user_password`, `user_amount`) VALUES (NULL, '$name', '$number', '$email', '$password', '50')";

if(mysqli_query($conn, $sql)){
    header('location:home.php');

}
else

{
 echo "Task add failed";
}

?>