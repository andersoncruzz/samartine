<?php

session_start();

//echo var_dump($_SESSION);

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {
    //echo $_SESSION["username"];
    $html_string = file_get_contents("pages/Gestao_TI.html");
    $html = str_replace('<a href="logout.php">logout</a>', '<a href="logout.php">logout ('.$_SESSION["email"].')</a>', $html_string);
    echo $html;
} else {
    header("location:login.php");
}

?>