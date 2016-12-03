<?php

$email = "Primerka@";
$to = "dasflancer@gmail.com";

$sitename = "Primerka";
$pagetitle = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$hidden = trim($_POST["hidden"]);

$message = "
Имя: $name <br>
Телефон: $phone <br>
Сообщение: $hidden
";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($to, $pagetitle, $message, $headers);


