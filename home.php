<?php

session_start();
include("database.php");
//echo var_dump($_SESSION);

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {
    //echo $_SESSION["username"];
	$pdo = new PDO($database_conexao, $database_username, $database_senha);
	$query = "SELECT * FROM formulario WHERE FK_EMAIL_USER=:user";
 
	$statement = $pdo->prepare($query);
	$statement->bindValue(":user", $_SESSION["email"]);
	$statement->execute();


	if ($form = $statement->fetch(\PDO::FETCH_ASSOC)) {    
		header("location:home-sucesso.php");
    } else {
    	$html_string = file_get_contents("pages/blank.html");
    	$html = str_replace('<a href="logout.php">logout</a>', '<a href="logout.php">logout ('.$_SESSION["username"].')</a>', $html_string);
    	echo $html;
    }

} else {
    header("location:login.php");
}

?>