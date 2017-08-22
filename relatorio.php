<?php

session_start();
include("database.php");

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$empresa = $_SESSION["empresa"];

if ($empresa != null){
	$query = "SELECT * FROM user WHERE CODE_FK=:empresa";
 
	$statement = $pdo->prepare($query);
	$statement->bindValue(":empresa",$empresa);
	$statement->execute();

	while ($user = $statement->fetch(\PDO::FETCH_ASSOC)) {
		$query = "SELECT * FROM formulario WHERE fk_email_user=:user";
		$smt = $pdo->prepare($query);
		$smt->bindValue(":user",$user["email"]);
	}
}

}

?>