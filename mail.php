<?php

$to = 'info@sagarahomes.com';
$subject = 'Golden Village - Website Enquiry';

$message ="
<html>
<body>
<table>
<tr><td><strong>Name:</strong> </td><td>" .$_POST['first_name']. " ". $_POST['last_name']."</td></tr>
<tr><td><strong>Email:</strong> </td><td>" .$_POST['email']. "</td></tr>
<tr><td><strong>Subject:</strong> </td><td>" .$_POST['subject']. "</td></tr>
<tr><td><strong>Message:</strong> </td><td>" .$_POST['message']. "</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' .$_POST['email'] . "\r\n" ;


if (@mail($to, $subject, $message, $headers))
{
  
	echo "<script>
 			alert('Your message has been sent');
			window.location.href='contact.html';
		 </script>";
}
else
{
 
	echo "<script>
 			alert('Your message cannot be sent');
			window.location.href='contact.html';
		 </script>";
}
?>