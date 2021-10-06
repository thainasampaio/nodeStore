<?php
//Sessão
session_start();

// Conexão 

require_once 'bd_connect.php';

if (isset($_POST['btn-cadastro'])):
	$nome = mysqli_real_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$senha =mysqli_real_escape_string($connect, $_POST['senha']);
	$telefone = mysqli_real_escape_string($connect, $_POST['telefone']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, senha, telefone) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$telefone')";

	if (mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro feito com sucesso!";
		header('Location: ../index.php');

	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');

	endif;
endif;
