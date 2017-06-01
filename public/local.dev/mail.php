<?php
// Recipient
$to  = 'joseangelbonfil@gmail.com';

// Subject
$subject = 'Test Email';

// Message
$message = '
<html>
<head>
  <title>Hello, World</title>
</head>
<body>
  <p>This is test.</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mailcatcher joseangelbonfil@gmail.com>' . "\r\n";
$headers .= 'From: Vagrant <joseangelbonfil@gmail.com>' . "\r\n";

// Mail it
$result = mail($to, $subject, $message, $headers);
