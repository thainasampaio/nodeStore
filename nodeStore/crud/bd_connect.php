<?php
 // Conexão com Banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud_php";
//$criptografada = md5($senha);
//echo $criptografada;

$connect = mysqli_connect($servername, $username, $password, $db_name);

// mysqli_set_charset = Para deixar o codigo organizado
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()):
	echo "Erro na Conexão: ".mysqli_connect_error();
endif;
