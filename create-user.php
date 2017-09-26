<?php
include("database.php");
//print (var_dump($_POST));
session_start();

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

	//$nome = $_POST["nome"];
	$email = $_SESSION["email"];
	$genero = $_POST["genero"];
	$nivel_academico = $_POST["nivel_academico"];
	$tempo_organizacao = $_POST["tempo_organizacao"];
	$atuacao = $_POST["atuacao"];
	$tempo_experiencia = $_POST["tempo_experiencia"];
	$subordinada = $_POST["subordinada"];
	$cargo = $_POST["cargo"];

	$pdo = new PDO($database_conexao, $database_username, $database_senha);
	//echo var_dump($empresaux);

	$query = "INSERT INTO participante (email, genero, nivel_academico, tempo_organizacao, atuacao, tempo_experiencia, subordinada, cargo) VALUES (:email, :genero, :nivel_academico, :tempo_organizacao, :atuacao, :tempo_experiencia, :subordinada, :cargo);";
				
	$statement = $pdo->prepare($query);
	//$statement->bindValue(":nome",$nome);
	$statement->bindValue(":email",$email);
	$statement->bindValue(":genero",$genero);
	$statement->bindValue(":nivel_academico",$nivel_academico);
	$statement->bindValue(":tempo_organizacao",$tempo_organizacao);
	$statement->bindValue(":atuacao",$atuacao);
	$statement->bindValue(":tempo_experiencia",$tempo_experiencia);
	$statement->bindValue(":subordinada",$subordinada);
	$statement->bindValue(":cargo",$cargo);
	//echo var_dump($_POST);

	if ($statement->execute()) {
		header("location:formulario.php");
		//echo $_SESSION["email"] . " user " . $_SESSION["username"] . " ". var_dump($_SESSION);
	} else {
		    $html_string = file_get_contents("pages/erro.html");
	    	echo $html_string;

		//header("location:login.php");
		//echo var_dump($_POST);
	}
} else {
	header("location:login.php");
}
?>