<?php
include("database.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$empresa = $_POST["empresa"];


$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "SELECT * FROM empresa WHERE nome=:empresa";
$statement = $pdo->prepare($query);
$statement->bindValue(":empresa", $empresa);
$statement->execute();
$empresaux = "";
$empresaux = $statement->fetch(\PDO::FETCH_ASSOC);


$query = "INSERT INTO user (email, password, code_fk) VALUES (:email, :senha, :empresa);";
			
$statement = $pdo->prepare($query);
$statement->bindValue(":email",$email);
$statement->bindValue(":senha",$senha);
$statement->bindValue(":empresa",$empresaux["code"]);

if ($statement->execute()) {
	echo "<h1>Sucesso!</h1>";
} else {
	echo "<h1>Erro!</h1>";
}

?>