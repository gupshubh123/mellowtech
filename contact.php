<?php
	$toEmail = "info@mellowtech.in";
	
	$userName= $_POST['fullname'];
	$userEmail= $_POST['email'];
	$userSubject= $_POST['subject'];
	$userMessage= $_POST['message'];
	
	
	$mailHeaders = "From: " . $userName . "<". $_POST["email"] .">\r\n";
	
    if(mail($toEmail, "Contacted Via MellowTech Website", "<p> Name= ".$userName."</p> <p>Contact= ".$userSubject."</p><p>Message= ".$userMessage."</p>", $mailHeaders)) {
        print "<p class='successEmail'>Thank you. We will get back to you shortly. </p>";
    } else {
        print "<p class='errorEmail'>Something went wrong. Please contact us over the provided address</p>";
    }
?>