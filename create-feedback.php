<?php
include("database.php");
//print (var_dump($_POST));
session_start();

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

	$q1 = $_POST["q1"];
	$comentarioQ1 = $_POST["comentarioQ1"];
	$q2 = $_POST["q2"];
	$comentarioQ2 = $_POST["comentarioQ2"];
	$q3 = $_POST["q3"];
	$comentarioQ3 = $_POST["comentarioQ3"];
	$q4 = $_POST["q4"];
	$comentarioQ4 = $_POST["comentarioQ4"];
	$q5 = $_POST["q5"];
	$comentarioQ5 = $_POST["comentarioQ5"];
	$q6 = $_POST["q6"];
	$comentarioQ6 = $_POST["comentarioQ6"];
	$q7 = $_POST["q7"];
	$comentarioQ7 = $_POST["comentarioQ7"];
	$q8 = $_POST["q8"];
	$q9 = $_POST["q9"];
	$q10 = $_POST["q10"];
	//$email = $_POST["email"];
	$email = $_SESSION["email"];

	$pdo = new PDO($database_conexao, $database_username, $database_senha);

	//echo var_dump($empresaux);

	$query = "INSERT INTO feedback (q1, comentarioQ1, q2, comentarioQ2, q3, comentarioQ3, q4, comentarioQ4, q5, comentarioQ5, q6, comentarioQ6, q7, comentarioQ7, q8, q9, q10, fk_email) VALUES (:q1, :comentarioQ1, :q2, :comentarioQ2, :q3, :comentarioQ3, :q4, :comentarioQ4, :q5, :comentarioQ5, :q6, :comentarioQ6, :q7, :comentarioQ7, :q8, :q9, :q10, :fk_email);";
				
	$statement = $pdo->prepare($query);
	$statement->bindValue(":q1",$q1);
	$statement->bindValue(":comentarioQ1",$comentarioQ1);
	$statement->bindValue(":q2",$q2);
	$statement->bindValue(":comentarioQ2",$comentarioQ2);
	$statement->bindValue(":q3",$q3);
	$statement->bindValue(":comentarioQ3",$comentarioQ3);
	$statement->bindValue(":q4",$q4);
	$statement->bindValue(":comentarioQ4",$comentarioQ4);
	$statement->bindValue(":q5",$q5);
	$statement->bindValue(":comentarioQ5",$comentarioQ5);
	$statement->bindValue(":q6",$q6);
	$statement->bindValue(":comentarioQ6",$comentarioQ6);
	$statement->bindValue(":q7",$q7);
	$statement->bindValue(":comentarioQ7",$comentarioQ7);
	$statement->bindValue(":q8",$q8);
	$statement->bindValue(":q9",$q9);
	$statement->bindValue(":q10",$q10);
	$statement->bindValue(":fk_email",$email);
	//echo var_dump($_POST);

	if ($statement->execute()) {
		header("location:home-sucesso.php");
		//echo $_SESSION["email"] . " user " . $_SESSION["username"] . " ". var_dump($_SESSION);
	} else {
		    $html_string = file_get_contents("pages/erro-feedback.html");
	    	echo $html_string;

		//header("location:login.php");
		//echo var_dump($_POST);
	}
} else {
    header("location:login.php");
}

?>