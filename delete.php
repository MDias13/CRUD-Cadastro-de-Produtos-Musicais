<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//conexao
require_once "db_conect.php";
    
    $id = $connect->real_escape_string($_GET['id']);

	$sql = "DELETE FROM teclados WHERE id ='$id'";
	
	if ($connect->query($sql) === TRUE) {
    header('Location: cadastro.php?DeletadoComSucesso');
} else {
	
    header('Location: cadastro.php?ErroAoDeletar');
}

$connect->close();


?>