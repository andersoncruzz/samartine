<?php

session_start();
include("database.php");

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

$MAEP101 = $_POST["MAE-P1-01"];
$MAEP102 = $_POST["MAE-P1-02"];
$MAEP103 = $_POST["MAE-P1-03"];
$MAEP104 = $_POST["MAE-P1-04"];
$MAEP105 = $_POST["MAE-P1-05"];

$MAEP201 = $_POST["MAE-P2-01"];
$MAEP202 = $_POST["MAE-P2-02"];
$MAEP203 = $_POST["MAE-P2-03"];
$MAEP204 = $_POST["MAE-P2-04"];
$MAEP205 = $_POST["MAE-P2-05"];

$MAEO101 = $_POST["MAE-O1-01"];
$MAEO102 = $_POST["MAE-O1-02"];
$MAEO103 = $_POST["MAE-O1-03"];
$MAEO105 = $_POST["MAE-O1-05"];

$MAEO201 = $_POST["MAE-O2-01"];
$MAEO202 = $_POST["MAE-O2-02"];
$MAEO203 = $_POST["MAE-O2-03"];
$MAEO204 = $_POST["MAE-O2-04"];
$MAEO205 = $_POST["MAE-O2-05"];

$MAEO301 = $_POST["MAE-O3-01"];
$MAEO302 = $_POST["MAE-O3-02"];
$MAEO303 = $_POST["MAE-O3-03"];
$MAEO304 = $_POST["MAE-O3-04"];
$MAEO305 = $_POST["MAE-O3-05"];

$MAEO401 = $_POST["MAE-O4-01"];
$MAEO402 = $_POST["MAE-O4-02"];
$MAEO403 = $_POST["MAE-O4-03"];
$MAEO404 = $_POST["MAE-O4-04"];
$MAEO405 = $_POST["MAE-O4-05"];

$MAEO501 = $_POST["MAE-O5-01"];
$MAEO502 = $_POST["MAE-O5-02"];
$MAEO503 = $_POST["MAE-O5-03"];
$MAEO504 = $_POST["MAE-O5-04"];
$MAEO505 = $_POST["MAE-O5-05"];

$MAED101 = $_POST["MAE-D1-01"];
$MAED102 = $_POST["MAE-D1-02"];
$MAED103 = $_POST["MAE-D1-03"];
$MAED104 = $_POST["MAE-D1-04"];
$MAED105 = $_POST["MAE-D1-05"];

$MAED201 = $_POST["MAE-D2-01"];
$MAED202 = $_POST["MAE-D2-02"];
$MAED203 = $_POST["MAE-D2-03"];
$MAED204 = $_POST["MAE-D2-04"];
$MAED205 = $_POST["MAE-D2-05"];

$MAED301 = $_POST["MAE-D3-01"];
$MAED302 = $_POST["MAE-D3-02"];
$MAED303 = $_POST["MAE-D3-03"];
$MAED304 = $_POST["MAE-D3-04"];
$MAED305 = $_POST["MAE-D3-05"];

$MAEC101 = $_POST["MAE-C1-01"];
$MAEC102 = $_POST["MAE-C1-02"];
$MAEC103 = $_POST["MAE-C1-03"];
$MAEC104 = $_POST["MAE-C1-04"];
$MAEC105 = $_POST["MAE-C1-05"];

$MAEC201 = $_POST["MAE-C2-01"];
$MAEC202 = $_POST["MAE-C2-02"];
$MAEC203 = $_POST["MAE-C2-03"];
$MAEC204 = $_POST["MAE-C2-04"];
$MAEC205 = $_POST["MAE-C2-05"];


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
//echo var_dump($_SESSION);



} else {
    header("location:login.php");
}

?>