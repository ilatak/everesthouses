﻿<?php 

    $to = "ivan.latak@gmail.com"; // this is your Email address
    $from = "test@gmail.com";
    $first_name = "testFirstName";
    $last_name = "TestLastName";
    $subject = "Form submission";
    $testMessage = "Test Message";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $testMessage;


    $headers = "From:" . $from;
    
   $result = mail($to,$subject,$message,$headers);
    
    echo "Mail Sent." . $result . " Thank you " . $first_name . ", we will contact you shortly.";

?>