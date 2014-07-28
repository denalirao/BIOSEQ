<?php
	  $name = $_POST['name'];

	  $phone = $_POST['phone'];

	  $email_from = 'xyz@gmail.com';
 
      $email_subject = "New Form submission";
 
      $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $phone".
 
	  $to = "denzig55@gmail.com";
 
	  $headers = "From: $email_from \r\n";
  
	  @mail($to,$email_subject,$email_body,$headers);
 
 ?>
 Thanks!
 