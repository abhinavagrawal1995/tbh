<?php
$to = "abhinavagrawal1995@gmail.com";  
$subject = "Test mail";  
$message = "Hello! This is a simple email message.";  
$from = "admin@google.com";  
$headers = "From: $from";  
mail($to,$subject,$message,$headers);  
echo "Mail Sent.";  
  
?>
