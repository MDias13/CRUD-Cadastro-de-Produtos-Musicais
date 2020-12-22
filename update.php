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
    
    $id = $connect->real_escape_string($_POST['id']);

	$sql = "UPDATE teclados SET nome = '$nome', fabricante = '$fabricante', peso = '$peso',
    valor = '$valor' WHERE id ='$id'";
	
	if ($connect->query($sql) === TRUE) {
    header('Location: cadastro.php?AtualizadoComSucesso');
} else {
	
    header('Location: cadastro.php?erro');
}

$connect->close();


?>