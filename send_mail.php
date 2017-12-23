<?php
    $mailto = $_POST['email'];
    $mailName = $_POST['name'];
    $msilSub = "Hello, $mailName."
    $mailMsg = "<html><body><h1>We, Prashant and Kavitha, welcome you from the bottom of our heart. We are really excited to see you there.</h1><br/>
                <h3>Keep the dates in mind, hope to see you there.</h3><br/>
                <p>for any Queries contact- <b>Mr. P Raju : +919431300856</b></p></body></html>"
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587
   $mail ->IsHTML(true);
   $mail ->Username = "kavithawedsprashant@gmail.com";
   $mail ->Password = "08032018";
   $mail ->SetFrom("kavithawedsprashant@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
