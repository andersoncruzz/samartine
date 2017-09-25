<?php
include("database.php");

session_start();

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

	$html_string = file_get_contents("pages/criar-usuario.html");
	echo $html_string;

} else {
	header("location:login.php");
}
?>