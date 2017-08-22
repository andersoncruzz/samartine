<?php

session_start();

//echo var_dump($_SESSION);

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {
    //echo $_SESSION["username"];
    $html_string = file_get_contents("pages/blank.html");
    $html = str_replace('Menu - Samartine', 'Houve um erro! Entre em contato com administrador ou tente novamente!', $html_string);
    echo $html;
} else {
    header("location:login.php");
}

?>