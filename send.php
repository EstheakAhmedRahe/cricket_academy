<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/src/PHPMailer.php';
   require 'phpmailer/src/SMTP.php';

   if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host= 'smtp.gmail.com';
    $mail->SMTPAuth= true;
    $mail->Username= 'osthirproject8158@gmail.com';
    $mail->Password=  'xxhmndlsdgndfgco'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('osthirproject8158@gmail.com');
    $mail-> addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject= $_POST["subject"];
    $mail->Body= $_POST["comment"];

    $mail->send();

    echo" 
    <script> 
    alert('Sent Successfull');
    </script>
    ";
    echo"<script>location.href='home.php'</script>";


   }
?>