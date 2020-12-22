<?php 
//Conexao banco
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "base";

$connect = new mysqli($servername, $username, $password, $db_name);

    if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
	}

?>