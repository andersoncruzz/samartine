<?php
include("database.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

//$database = new database();
//$pdo = $databas.connect();

$pdo = new PDO($database_conexao, $database_username, $database_senha);
$query = "SELECT * FROM user WHERE EMAIL=:email AND PASSWORD=:senha";
 
$statement = $pdo->prepare($query);
$statement->bindValue(":email",$email);
$statement->bindValue(":senha",$senha);
$statement->execute();
$user = $statement->fetch(\PDO::FETCH_ASSOC);

//echo var_dump($user);

if ($user) {
	session_start();
	$_SESSION["email"] = $user["email"];
	$_SESSION["username"] = $user["email"];
	$_SESSION["empresa"] = $user["code_fk"];
	
	//header("location:home.php");
	$query = "SELECT * FROM participante WHERE EMAIL=:email";
 
	$statement = $pdo->prepare($query);
	$statement->bindValue(":email", $_SESSION["email"]);
	$statement->execute();


	if ($participante = $statement->fetch(\PDO::FETCH_ASSOC)) {    
		header("location:home.php");
    } else {
    	header("location:usuario.php");
    }
	
} else {
	header("location:login.php");
}

//session_start();
//$_SESSION["email"] = $email;
//echo "username: " . $username . " senha: " . $senha;


?>