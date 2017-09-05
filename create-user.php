<?php
include("database.php");
//print (var_dump($_POST));

$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$regiao = $_POST["regiao"];
$genero = $_POST["genero"];
$nivel_academico = $_POST["nivel_academico"];
$organizacao = $_POST["organizacao"];
$tempo_organizacao = $_POST["tempo_organizacao"];
$atuacao = $_POST["atuacao"];
$tempo_experiencia = $_POST["tempo_experiencia"];
$empresa = $_POST["empresa"];
$atividade = $_POST["atividade"];
$cargo = $_POST["cargo"];

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "SELECT * FROM empresa WHERE nome=:empresa";
$statement = $pdo->prepare($query);
$statement->bindValue(":empresa", $empresa);
$statement->execute();
$empresaux = "";
$empresaux = $statement->fetch(\PDO::FETCH_ASSOC);

//echo var_dump($empresaux);

$query = "INSERT INTO user (nome, email, password, genero, nivel_academico, organizacao, tempo_organizacao, atuacao, tempo_experiencia, code_fk, regiao, atividade, cargo) VALUES (:nome, :email, :password, :genero, :nivel_academico, :organizacao, :tempo_organizacao, :atuacao, :tempo_experiencia, :code_fk, :regiao, :atividade, :cargo);";
			
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
$statement->bindValue(":code_fk",$empresaux["code"]);
$statement->bindValue(":regiao",$regiao);
$statement->bindValue(":atividade",$atividade);
$statement->bindValue(":cargo",$cargo);
//echo var_dump($_POST);

if ($statement->execute()) {
	session_start();
	$_SESSION["email"] = $email;
	$_SESSION["username"] = $nome;
	//$_SESSION['expire'] = $_SESSION['start'] + (24 * 60 * 60);
	header("location:formulario.php");
	//echo $_SESSION["email"] . " user " . $_SESSION["username"] . " ". var_dump($_SESSION);
} else {
	header("location:login.php");
}

?>