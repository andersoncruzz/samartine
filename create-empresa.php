<?php
include("database.php");

$nome = $_POST["nome"];

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "INSERT INTO empresa (nome) VALUES (:nome);";
			
$statement = $pdo->prepare($query);
$statement->bindValue(":nome",$nome);

if ($statement->execute()) {
	header("location:usuario.php");
} else {
	header("location:empresa.php");
}

?>