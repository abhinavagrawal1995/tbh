<?php
$con=mysqli_connect("localhost","tbh","Bookhub!","tbh");
// Check connection
if (mysqli_connect_errno()) {
  echo "This is embarassing. Looks like we ran into some problems. Please try again later. " . mysqli_connect_error();
}
?>