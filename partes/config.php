<?php
/* Config */
$usuario_mail = 'email@site.com.br';
$senha_mail = 'senhaemail';
$smtp_server_mail = 'smtp@site.com.br';
$destinatario = 'dest@email.com';

$cliente = '99 Motéis';

$server = $_SERVER['SERVER_NAME']; 
$endereco = $_SERVER ['REQUEST_URI'];
$url = "http://". $server . $endereco;

if($server == 'localhost') {
	$baseURL = 'http://localhost/99moteis/';
} else {
	//$baseURL = 'http://site.com.br';
}

$descricao = "";
$keywords = "";



?>