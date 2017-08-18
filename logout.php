<?php
session_unset($_SESSION["email"]);
session_unset($_SESSION["username"]);
session_destroy();
header("location:login.php");

?>