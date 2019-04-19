<?php 
	try{
    $ToEmail = 'sshivam212@gmail.com'; 
	
    $EmailSubject = 'BGM Contact Form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "First Name: ".$_POST["firstName"].""; 
    $MESSAGE_BODY .= "Last Name: ".$_POST["lastName"].""; 
    $MESSAGE_BODY .= "Email:".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment:".nl2br($_POST["message"]).""; 
    
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
    echo "message is sent"; 	
	}catch(Exception $e)
	{
		echo "ERROR : ".$e->getMessage();
	}
 ?>