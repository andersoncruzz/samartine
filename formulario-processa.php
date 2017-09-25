<?php
//print "aqui";
session_start();
include("database.php");

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

//print (var_dump($_POST));

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
$MAEO104 = $_POST["MAE-O1-04"];
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

$query = "INSERT INTO formulario (fk_email_user, MAEP101, MAEP102, MAEP103, MAEP104, MAEP105, MAEP201, MAEP202, MAEP203, MAEP204, MAEP205, MAEO101, MAEO102, MAEO103, MAEO104, MAEO105, MAEO201, MAEO202, MAEO203, MAEO204, MAEO205, MAEO301, MAEO302, MAEO303, MAEO304, MAEO305, MAEO401, MAEO402, MAEO403, MAEO404, MAEO405, MAEO501, MAEO502, MAEO503, MAEO504, MAEO505, MAED101, MAED102, MAED103, MAED104, MAED105, MAED201, MAED202, MAED203, MAED204, MAED205, MAED301, MAED302, MAED303, MAED304, MAED305, MAEC101, MAEC102, MAEC103, MAEC104, MAEC105, MAEC201, MAEC202, MAEC203, MAEC204, MAEC205) VALUES (:fk_email_user, :MAEP101, :MAEP102, :MAEP103, :MAEP104, :MAEP105, :MAEP201, :MAEP202, :MAEP203, :MAEP204, :MAEP205, :MAEO101, :MAEO102, :MAEO103, :MAEO104, :MAEO105, :MAEO201, :MAEO202, :MAEO203, :MAEO204, :MAEO205, :MAEO301, :MAEO302, :MAEO303, :MAEO304, :MAEO305, :MAEO401, :MAEO402, :MAEO403, :MAEO404, :MAEO405, :MAEO501, :MAEO502, :MAEO503, :MAEO504, :MAEO505, :MAED101, :MAED102, :MAED103, :MAED104, :MAED105, :MAED201, :MAED202, :MAED203, :MAED204, :MAED205, :MAED301, :MAED302, :MAED303, :MAED304, :MAED305, :MAEC101, :MAEC102, :MAEC103, :MAEC104, :MAEC105, :MAEC201, :MAEC202, :MAEC203, :MAEC204, :MAEC205);";
			
$statement = $pdo->prepare($query);
$statement->bindValue(":fk_email_user",$_SESSION["email"]);

$statement->bindValue(":MAEP101", $MAEP101);
$statement->bindValue(":MAEP102", $MAEP102);
$statement->bindValue(":MAEP103", $MAEP103);
$statement->bindValue(":MAEP104", $MAEP104);
$statement->bindValue(":MAEP105", $MAEP105);

$statement->bindValue(":MAEP201", $MAEP201);
$statement->bindValue(":MAEP202", $MAEP202);
$statement->bindValue(":MAEP203", $MAEP203);
$statement->bindValue(":MAEP204", $MAEP204);
$statement->bindValue(":MAEP205", $MAEP205);
 
$statement->bindValue(":MAEO101", $MAEO101);
$statement->bindValue(":MAEO102", $MAEO102);
$statement->bindValue(":MAEO103", $MAEO103);
$statement->bindValue(":MAEO104", $MAEO104);
$statement->bindValue(":MAEO105", $MAEO105);

$statement->bindValue(":MAEO201", $MAEO201);
$statement->bindValue(":MAEO202", $MAEO202);
$statement->bindValue(":MAEO203", $MAEO203);
$statement->bindValue(":MAEO204", $MAEO204);
$statement->bindValue(":MAEO205", $MAEO205);

$statement->bindValue(":MAEO301", $MAEO301);
$statement->bindValue(":MAEO302", $MAEO302);
$statement->bindValue(":MAEO303", $MAEO303);
$statement->bindValue(":MAEO304", $MAEO304);
$statement->bindValue(":MAEO305", $MAEO305);

$statement->bindValue(":MAEO401", $MAEO401);
$statement->bindValue(":MAEO402", $MAEO402);
$statement->bindValue(":MAEO403", $MAEO403);
$statement->bindValue(":MAEO404", $MAEO404);
$statement->bindValue(":MAEO405", $MAEO405);

$statement->bindValue(":MAEO501", $MAEO501);
$statement->bindValue(":MAEO502", $MAEO502);
$statement->bindValue(":MAEO503", $MAEO503);
$statement->bindValue(":MAEO504", $MAEO504);
$statement->bindValue(":MAEO505", $MAEO505);

$statement->bindValue(":MAED101", $MAED101);
$statement->bindValue(":MAED102", $MAED102);
$statement->bindValue(":MAED103", $MAED103);
$statement->bindValue(":MAED104", $MAED104);
$statement->bindValue(":MAED105", $MAED105);

$statement->bindValue(":MAED201", $MAED201);
$statement->bindValue(":MAED202", $MAED202);
$statement->bindValue(":MAED203", $MAED203);
$statement->bindValue(":MAED204", $MAED204);
$statement->bindValue(":MAED205", $MAED205);

$statement->bindValue(":MAED301", $MAED301);
$statement->bindValue(":MAED302", $MAED302);
$statement->bindValue(":MAED303", $MAED303);
$statement->bindValue(":MAED304", $MAED304);
$statement->bindValue(":MAED305", $MAED305);

$statement->bindValue(":MAEC101", $MAEC101);
$statement->bindValue(":MAEC102", $MAEC102);
$statement->bindValue(":MAEC103", $MAEC103);
$statement->bindValue(":MAEC104", $MAEC104);
$statement->bindValue(":MAEC105", $MAEC105);

$statement->bindValue(":MAEC201", $MAEC201);
$statement->bindValue(":MAEC202", $MAEC202);
$statement->bindValue(":MAEC203", $MAEC203);
$statement->bindValue(":MAEC204", $MAEC204);
$statement->bindValue(":MAEC205", $MAEC205);


if ($statement->execute()) {
	header("location:feedback.php");
} else {
	header("location:home-falha.php");
}

}
?>