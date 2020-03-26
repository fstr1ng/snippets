<?php 

require_once "Mail.php"; 

# Имя и ящик отправителя
$from = "Sandra Sender <sender@example.com>"; 

# Имя и ящик получателя
$to = "
Ramona Recipient <recipient@example.com>"; 

# Тема
$subject = "Test mail";

# Тело письма
$body = "Hello,\n\nThis is a simple e-mail message";

# SMTP хост
$host = "mail.example.com"; 

# SMTP логин
$username = "smtp_username"; 

# SMTL пароль
$password = "smtp_password"; 

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>
