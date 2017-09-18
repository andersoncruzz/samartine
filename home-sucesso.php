<?php

session_start();

//echo var_dump($_SESSION);

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {
    //echo $_SESSION["username"];
    $html_string = file_get_contents("pages/sucesso.html");
    echo $html_string;
} else {
    header("location:login.php");
}

?>