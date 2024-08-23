<?php

$to = 'asmiglobalschool@gmail.com'; // note the comma

// Subject
$subject = 'Contact form mail test';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Message
$message = 'Name : '. $name.
'<br>Email : '.$email.
'<br>Phone : '.$phone.
'<br>Message : '.$message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '. $email . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

// Mail it
if (isset($_POST['submit'])) { 
// mail($to, $subject, $message, $headers);
// echo 'Mail Sent successfully...';
     // Multiple recipients
       if(mail($to, $subject, $message, $headers))
      {
    
      echo "<script>document.location.href='/contact?st=ok'</script>";
      }
      else
      {
 
            echo "<script>document.location.href='/contact?st=nk'</script>";
      }

}



?>