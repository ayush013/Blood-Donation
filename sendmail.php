<?php
  function send_mail($email,$subject,$message)
  {      
    require_once('PHPmailer/class.phpmailer.php');
    require 'PHPmailer/PHPMailerAutoload.php'; 
    $mail = new PHPMailer();
    $mail->IsSMTP(); 
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "tls";                 
    $mail->Host       = "smtp.zoho.com";      
    $mail->Port       = 587;     
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);        
    $mail->AddAddress($email,'');
    $mail->Username="bdc18@silive.in";  
    $mail->Password="Blood2018mayur";            
    $mail->SetFrom('bdc18@silive.in','');
    $mail->AddReplyTo("bdc18@silive.in","");
    $mail->Subject    = $subject;  
    $mail->Body = "hello this is my message"; 
    $mail->MsgHTML($message);
    $bool = $mail->send();
    //return $bool;
    if(!$bool) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
   }
  } 

?>