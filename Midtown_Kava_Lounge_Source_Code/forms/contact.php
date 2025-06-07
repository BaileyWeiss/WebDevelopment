<?php
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = "Email: " .$_POST["email"];
    $message = $_POST["message"];
    
    $mailTo = "info@midtownkavalounge.com";
    $txt = "This email has been relayed via the contact form on www.MidtownKavaLounge.com \n\n".$message;
    $sent_subject = $subject. " From: ".$name;
    
  if(isset($_POST["submit"])) {  
     mail($mailTo, $sent_subject, $txt, $mailFrom);
     
      if(@mail($mailTo, $sent_subject, $txt, $mailFrom) == true){
          echo "Mail Sent Successfully";
        }else{
          echo "Mail Not Sent";
        }
  }

?>
