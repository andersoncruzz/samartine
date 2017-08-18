<?php
include("database.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$genero = $_POST["genero"];
$nivel_academico = $_POST["nivel_academico"];
$organizacao = $_POST["organizacao"];
$tempo_organizacao = $_POST["tempo_organizacao"];
$atuacao = $_POST["atuacao"];
$tempo_experiencia = $_POST["tempo_experiencia"];



$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "INSERT INTO user (nome, email, password, genero, nivel_academico, organizacao, tempo_organizacao, atuacao, tempo_experiencia) VALUES (:nome, :email, :password, :genero, :nivel_academico, :organizacao, :tempo_organizacao, :atuacao, :tempo_experiencia);";
			
$statement = $pdo->prepare($query);
$statement->bindValue(":nome",$nome);
$statement->bindValue(":email",$email);
$statement->bindValue(":password",$password);
$statement->bindValue(":genero",$genero);
$statement->bindValue(":nivel_academico",$nivel_academico);
$statement->bindValue(":organizacao",$organizacao);
$statement->bindValue(":tempo_organizacao",$tempo_organizacao);
$statement->bindValue(":atuacao",$atuacao);
$statement->bindValue(":tempo_experiencia",$tempo_experiencia);

if ($statement->execute()) {
	session_start();
	$_SESSION["email"] = $email;
	$_SESSION["nome"] = $nome;
	//$_SESSION['expire'] = $_SESSION['start'] + (24 * 60 * 60);
	header("location:formulario.php");
	//echo $_SESSION["email"] . " user " . $_SESSION["username"] . " ". var_dump($_SESSION);
} else {
	header("location:login.php");
}

?>