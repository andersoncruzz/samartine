<?php
include("database.php");
//print (var_dump($_POST));

$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$genero = $_POST["genero"];
$nivel_academico = $_POST["nivel_academico"];
$tempo_organizacao = $_POST["tempo_organizacao"];
$atuacao = $_POST["atuacao"];
$tempo_experiencia = $_POST["tempo_experiencia"];
$empresa = $_POST["empresa"];
$subordinada = $_POST["subordinada"];
$cargo = $_POST["cargo"];

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "SELECT * FROM empresa WHERE nome=:empresa";
$statement = $pdo->prepare($query);
$statement->bindValue(":empresa", $empresa);
$statement->execute();
$empresaux = "";
$empresaux = $statement->fetch(\PDO::FETCH_ASSOC);

//echo var_dump($empresaux);

$query = "INSERT INTO user (nome, email, password, genero, nivel_academico, tempo_organizacao, atuacao, tempo_experiencia, code_fk, subordinada, cargo) VALUES (:nome, :email, :password, :genero, :nivel_academico, :tempo_organizacao, :atuacao, :tempo_experiencia, :code_fk, :subordinada, :cargo);";
			
$statement = $pdo->prepare($query);
$statement->bindValue(":nome",$nome);
$statement->bindValue(":email",$email);
$statement->bindValue(":password",$password);
$statement->bindValue(":genero",$genero);
$statement->bindValue(":nivel_academico",$nivel_academico);
$statement->bindValue(":tempo_organizacao",$tempo_organizacao);
$statement->bindValue(":atuacao",$atuacao);
$statement->bindValue(":tempo_experiencia",$tempo_experiencia);
$statement->bindValue(":code_fk",$empresaux["code"]);
$statement->bindValue(":subordinada",$subordinada);
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
	    $html_string = file_get_contents("pages/erro.html");
    	echo $html_string;

	//header("location:login.php");
	//echo var_dump($_POST);
}

?>