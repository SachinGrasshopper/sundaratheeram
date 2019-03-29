<?php

$to = 'info@sagarahomes.com';
$subject = 'Golden Village - Call Back Enquiry';

$message ="
<html>
<body>
<table>
<tr><td><strong>Name:</strong> </td><td>" .$_POST['name']. "</td></tr>
<tr><td><strong>Contact Number:</strong> </td><td>" .$_POST['contact']. "</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Customer: ' .$_POST['contact']. "\r\n" ;


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