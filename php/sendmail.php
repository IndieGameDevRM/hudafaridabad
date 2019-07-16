<?php

// Please specify your Mail Server - Example: mail.yourdomain.com.
//ini_set("SMTP","mail.YourDomain.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

$to = "rishabhmatharoo11@gmail.com";
$subject = "Query from HudaFaridabad";

$txt = $_POST["message"];
$headers = "From:".$_POST["email"] . "\r\n" .
"CC: homeplanify@gmail.com";

if(mail($to,$subject,$txt,$headers)){
    echo "Mail send successfully";
    header("Location: /landingpage/index.html");
}else{
    echo "Can not send mail";
    header("Location: /landingpage/index.html");
}


?>