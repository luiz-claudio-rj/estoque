<?php 

session_start();

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}
function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}
function verificaUsuario(){
	if (!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Voce nao tem acesso a essa funcionalidade!";
		header("Location: index.php");
		die();
	}
}
function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}
function logout(){
	session_destroy();
	session_start();
}