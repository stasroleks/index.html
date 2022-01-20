<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$m_user = $_ENV['MAIL_USER'];
$m_pass = $_ENV['MAIL_PASS'];

$from = $_GET["username"]."@".$_GET["server"];
$msg = $_GET["message"];
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl')) //smtp.gmail.com
  ->setUsername($m_user)
  ->setPassword($m_pass);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('From: '.$from))
  ->setFrom('stasgro908@gmail.com')
  ->setTo('stasroleks551@gmail.com')
  ->setBody("Message from: ".$from." ".$msg);

// Send the message
$result = $mailer->send($message);
if($result){
    print("Success!");
};
?>