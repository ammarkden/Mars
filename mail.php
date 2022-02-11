<?php
    include('Mail.php');

    $recipients = 'contact@ammarabutalip.com';

    $headers['From']    = 'ammarrrrrrrr@gmail.com';
    $headers['To']      = 'contact@ammarabutalip.com';
    $headers['Subject'] = 'Test message';

    $body = 'Test message';

    $smtpinfo["host"] = "smtp.server.com";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "ammarrrrrrrr@gmail.com";
    $smtpinfo["password"] = "ammaruk2090";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);
?> 