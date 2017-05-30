<?php 
session_start();

$nome		= $_POST["nome"];
$email		= $_POST["email"];
$assunto	= $_POST["assunto"];
$mensagem	= $_POST["mensagem"];
$para 		= "contato.luizdevs@gmail.com";



mail($para, $assunto, $mensagem);
/*
require_once ("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = 'smtp.hostinger.com.br';
$mail -> Port = 587;
$mail -> SMTPSecure = 'tls';
$mail -> SMTPAuth = true;
$mail -> Username = "contato.luizdevs@gmail.com";
$mail -> Password = "senhadoluiz";

$mail -> setFrom("{$email}","Email de contato da loja - PHP ALURA");
$mail -> addAddress("contato.luizdevs@gmail.com");
$mail -> Subject = "{$assunto}";
$mail -> msgHTML("<html>de: {$nome} <br>email: {$email} <br> Mensagem: {$mensagem}</html>");
$mail ->AltBody = "de: {$nome}\n email: {$email}\n Mensagem: {$mensagem}";

if ($mail->send()) {
	$_SESSION["success"] = "Mensagem enviada com sucesso!";
	header("Location: index.php");
}else {
	$_SESSION["danger"] = "Erro ao enviar a mensagem.";
	header("Location: contato.php");
}
*/
?>