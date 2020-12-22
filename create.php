<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//conexao
require_once "db_conect.php";

	$nome = $connect->real_escape_string($_POST['nome']);
	$fabricante = $connect->real_escape_string($_POST['fabricante']);
	$peso = $connect->real_escape_string($_POST['peso']);
	$valor = $connect->real_escape_string($_POST['valor']);

	$sql = "INSERT INTO teclados (nome, fabricante, peso, valor) VALUES 
	('$nome','$fabricante','$peso','$valor')";
	
	if ($connect->query($sql) === TRUE) {
		$_SESSION['Mensagem'] = "Cadastrado com sucesso !";
    header('Location: cadastro.php?sucesso');
} else {
	$_SESSION['Mensagem'] = "Erro ao cadastrar !";
    header('Location: cadastro.php?erro');
}

$connect->close();


?>