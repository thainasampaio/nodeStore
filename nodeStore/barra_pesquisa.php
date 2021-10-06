<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>NodeStore</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/fundo.jpg"> 
</head>

<?php 
require_once 'crud/bd_connect.php';

$pesquisar = $_POST['pesquisar'];

$sql = "SELECT * FROM pesquisa WHERE nomes LIKE '%$pesquisar%' LIMIT 5";
$result = mysqli_query($connect, $sql);

while($rows = mysqli_fetch_array($result)){
	echo "Resultado da pesquisa: "
	.$rows['nomes']."<br>";
}

?>