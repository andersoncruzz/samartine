<?php
include("database.php");

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$query = "SELECT * FROM empresa ORDER BY nome ASC";
$statement = $pdo->prepare($query);
$statement->execute();
$option = "";
while ($empresa = $statement->fetch(\PDO::FETCH_ASSOC)) {
	$option = $option."\n"."<option>".$empresa["nome"]."</option>";
}

$html_string = file_get_contents("pages/criar-usuario.html");
$html = str_replace("<option>1</option>", $option, $html_string);

echo $html;

?>