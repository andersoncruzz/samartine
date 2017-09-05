<?php

session_start();
include("database.php");

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {

$pdo = new PDO($database_conexao, $database_username, $database_senha);

$empresa = $_SESSION["empresa"];

if ($empresa != null){

$acuMAEP101 = array(0,0,0,0,0);
$acuMAEP102 = array(0,0,0,0,0);
$acuMAEP103 = array(0,0,0,0,0);
$acuMAEP104 = array(0,0,0,0,0);
$acuMAEP105 = array(0,0,0,0,0);

$acuMAEP201 = array(0,0,0,0,0);
$acuMAEP202 = array(0,0,0,0,0);
$acuMAEP203 = array(0,0,0,0,0);
$acuMAEP204 = array(0,0,0,0,0);
$acuMAEP205 = array(0,0,0,0,0);
 
$acuMAEO101 = array(0,0,0,0,0);
$acuMAEO102 = array(0,0,0,0,0);
$acuMAEO103 = array(0,0,0,0,0);
$acuMAEO104 = array(0,0,0,0,0);
$acuMAEO105 = array(0,0,0,0,0);

$acuMAEO201 = array(0,0,0,0,0);
$acuMAEO202 = array(0,0,0,0,0);
$acuMAEO203 = array(0,0,0,0,0);
$acuMAEO204 = array(0,0,0,0,0);
$acuMAEO205 = array(0,0,0,0,0);

$acuMAEO301 = array(0,0,0,0,0);
$acuMAEO302 = array(0,0,0,0,0);
$acuMAEO303 = array(0,0,0,0,0);
$acuMAEO304 = array(0,0,0,0,0);
$acuMAEO305 = array(0,0,0,0,0);

$acuMAEO401 = array(0,0,0,0,0);
$acuMAEO402 = array(0,0,0,0,0);
$acuMAEO403 = array(0,0,0,0,0);
$acuMAEO404 = array(0,0,0,0,0);
$acuMAEO405 = array(0,0,0,0,0);

$acuMAEO501 = array(0,0,0,0,0);
$acuMAEO502 = array(0,0,0,0,0);
$acuMAEO503 = array(0,0,0,0,0);
$acuMAEO504 = array(0,0,0,0,0);
$acuMAEO505 = array(0,0,0,0,0);

$acuMAED101 = array(0,0,0,0,0);
$acuMAED102 = array(0,0,0,0,0);
$acuMAED103 = array(0,0,0,0,0);
$acuMAED104 = array(0,0,0,0,0);
$acuMAED105 = array(0,0,0,0,0);

$acuMAED201 = array(0,0,0,0,0);
$acuMAED202 = array(0,0,0,0,0);
$acuMAED203 = array(0,0,0,0,0);
$acuMAED204 = array(0,0,0,0,0);
$acuMAED205 = array(0,0,0,0,0);

$acuMAED301 = array(0,0,0,0,0);
$acuMAED302 = array(0,0,0,0,0);
$acuMAED303 = array(0,0,0,0,0);
$acuMAED304 = array(0,0,0,0,0);
$acuMAED305 = array(0,0,0,0,0);

$acuMAEC101 = array(0,0,0,0,0);
$acuMAEC102 = array(0,0,0,0,0);
$acuMAEC103 = array(0,0,0,0,0);
$acuMAEC104 = array(0,0,0,0,0);
$acuMAEC105 = array(0,0,0,0,0);

$acuMAEC201 = array(0,0,0,0,0);
$acuMAEC202 = array(0,0,0,0,0);
$acuMAEC203 = array(0,0,0,0,0);
$acuMAEC204 = array(0,0,0,0,0);
$acuMAEC205 = array(0,0,0,0,0);

$cont = 0;

$acuNivel = array(0,0,0,0,0);

	$query = "SELECT * FROM user WHERE CODE_FK=:empresa";
 
	$statement = $pdo->prepare($query);
	$statement->bindValue(":empresa",$empresa);
	$statement->execute();

	while ($user = $statement->fetch(\PDO::FETCH_ASSOC)) {
		$query = "SELECT * FROM formulario WHERE fk_email_user=:user";
		$smt = $pdo->prepare($query);
		$smt->bindValue(":user",$user["email"]);
		$smt->execute();
		if ($form = $smt->fetch(\PDO::FETCH_ASSOC)){
			$cont += 1 ;
			
			if($form["MAEP101"] == 1) {
				$acuMAEP101[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuMAEP101[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuMAEP101[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuMAEP101[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuMAEP101[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuMAEP102[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuMAEP102[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuMAEP102[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuMAEP102[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuMAEP102[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuMAEP103[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuMAEP103[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuMAEP103[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuMAEP103[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuMAEP103[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuMAEP104[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuMAEP104[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuMAEP104[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuMAEP104[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuMAEP104[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuMAEP105[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuMAEP105[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuMAEP105[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuMAEP105[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuMAEP105[4] += 1; $acuNivel[4] += 1; }


#############################################################################
			if($form["MAEP201"] == 1) {
				$acuMAEP201[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuMAEP201[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuMAEP201[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuMAEP201[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuMAEP201[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuMAEP202[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuMAEP202[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuMAEP202[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuMAEP202[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuMAEP202[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuMAEP203[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuMAEP203[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuMAEP203[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuMAEP203[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuMAEP203[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuMAEP204[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuMAEP204[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuMAEP204[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuMAEP204[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuMAEP204[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuMAEP205[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuMAEP205[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuMAEP205[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuMAEP205[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuMAEP205[4] += 1; $acuNivel[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuMAEO101[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuMAEO101[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuMAEO101[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuMAEO101[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuMAEO101[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuMAEO102[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuMAEO102[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuMAEO102[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuMAEO102[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuMAEO102[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuMAEO103[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuMAEO103[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuMAEO103[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuMAEO103[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuMAEO103[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuMAEO104[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuMAEO104[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuMAEO104[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuMAEO104[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuMAEO104[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuMAEO105[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuMAEO105[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuMAEO105[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuMAEO105[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuMAEO105[4] += 1; $acuNivel[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuMAEO201[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuMAEO201[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuMAEO201[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuMAEO201[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuMAEO201[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuMAEO202[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuMAEO202[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuMAEO202[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuMAEO202[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuMAEO202[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuMAEO203[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuMAEO203[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuMAEO203[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuMAEO203[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuMAEO203[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuMAEO204[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuMAEO204[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuMAEO204[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuMAEO204[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuMAEO204[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuMAEO205[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuMAEO205[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuMAEO205[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuMAEO205[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuMAEO205[4] += 1; $acuNivel[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuMAEO301[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuMAEO301[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuMAEO301[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuMAEO301[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuMAEO301[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuMAEO302[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuMAEO302[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuMAEO302[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuMAEO302[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuMAEO302[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuMAEO303[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuMAEO303[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuMAEO303[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuMAEO303[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuMAEO303[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuMAEO304[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuMAEO304[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuMAEO304[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuMAEO304[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuMAEO304[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuMAEO305[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuMAEO305[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuMAEO305[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuMAEO305[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuMAEO305[4] += 1; $acuNivel[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuMAEO401[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuMAEO401[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuMAEO401[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuMAEO401[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuMAEO401[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuMAEO402[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuMAEO402[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuMAEO402[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuMAEO402[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuMAEO402[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuMAEO403[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuMAEO403[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuMAEO403[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuMAEO403[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuMAEO403[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuMAEO404[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuMAEO404[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuMAEO404[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuMAEO404[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuMAEO404[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuMAEO405[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuMAEO405[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuMAEO405[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuMAEO405[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuMAEO405[4] += 1; $acuNivel[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuMAEO501[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuMAEO501[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuMAEO501[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuMAEO501[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuMAEO501[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuMAEO502[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuMAEO502[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuMAEO502[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuMAEO502[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuMAEO502[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuMAEO503[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuMAEO503[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuMAEO503[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuMAEO503[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuMAEO503[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuMAEO504[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuMAEO504[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuMAEO504[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuMAEO504[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuMAEO504[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuMAEO505[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuMAEO505[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuMAEO505[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuMAEO505[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuMAEO505[4] += 1; $acuNivel[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuMAED101[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuMAED101[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuMAED101[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuMAED101[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuMAED101[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuMAED102[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuMAED102[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuMAED102[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuMAED102[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuMAED102[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuMAED103[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuMAED103[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuMAED103[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuMAED103[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuMAED103[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuMAED104[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuMAED104[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuMAED104[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuMAED104[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuMAED104[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuMAED105[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuMAED105[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuMAED105[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuMAED105[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuMAED105[4] += 1; $acuNivel[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuMAED201[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuMAED201[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuMAED201[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuMAED201[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuMAED201[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuMAED202[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuMAED202[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuMAED202[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuMAED202[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuMAED202[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuMAED203[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuMAED203[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuMAED203[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuMAED203[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuMAED203[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuMAED204[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuMAED204[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuMAED204[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuMAED204[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuMAED204[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuMAED205[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuMAED205[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuMAED205[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuMAED205[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuMAED205[4] += 1; $acuNivel[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuMAED301[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuMAED301[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuMAED301[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuMAED301[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuMAED301[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuMAED302[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuMAED302[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuMAED302[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuMAED302[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuMAED302[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuMAED303[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuMAED303[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuMAED303[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuMAED303[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuMAED303[4] += 1; $acuNivel[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuMAED304[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuMAED304[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuMAED304[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuMAED304[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuMAED304[4] += 1; $acuNivel[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuMAED305[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuMAED305[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuMAED305[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuMAED305[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuMAED305[4] += 1; $acuNivel[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuMAEC101[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuMAEC101[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuMAEC101[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuMAEC101[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuMAEC101[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuMAEC102[0] += 1; $acuNivel[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuMAEC102[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuMAEC102[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuMAEC102[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuMAEC102[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuMAEC103[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuMAEC103[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuMAEC103[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuMAEC103[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuMAEC103[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuMAEC104[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuMAEC104[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuMAEC104[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuMAEC104[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuMAEC104[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuMAEC105[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuMAEC105[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuMAEC105[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuMAEC105[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuMAEC105[4] += 1; $acuNivel[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuMAEC201[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuMAEC201[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuMAEC201[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuMAEC201[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuMAEC201[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuMAEC202[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuMAEC202[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuMAEC202[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuMAEC202[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuMAEC202[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuMAEC203[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuMAEC203[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuMAEC203[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuMAEC203[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuMAEC203[4] += 1; $acuNivel[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuMAEC204[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuMAEC204[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuMAEC204[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuMAEC204[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuMAEC204[4] += 1; $acuNivel[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuMAEC205[0] += 1; $acuNivel[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuMAEC205[1] += 1; $acuNivel[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuMAEC205[2] += 1; $acuNivel[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuMAEC205[3] += 1; $acuNivel[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuMAEC205[4] += 1; $acuNivel[4] += 1; }


print("total nivel 1: ". $acuNivel[0]."<br>");
print("total nivel 2: ". $acuNivel[1]."<br>");
print("total nivel 3: ". $acuNivel[2]."<br>");
print("total nivel 4: ". $acuNivel[3]."<br>");
print("total nivel 5: ". $acuNivel[4]."<br><br><br>");

#####################################################################################

		}
	}


#max (cont)

$pamMAEP101 = array(0,0,0,0,0);
$pamMAEP102 = array(0,0,0,0,0);
$pamMAEP103 = array(0,0,0,0,0);
$pamMAEP104 = array(0,0,0,0,0);
$pamMAEP105 = array(0,0,0,0,0);

$pamMAEP201 = array(0,0,0,0,0);
$pamMAEP202 = array(0,0,0,0,0);
$pamMAEP203 = array(0,0,0,0,0);
$pamMAEP204 = array(0,0,0,0,0);
$pamMAEP205 = array(0,0,0,0,0);
 
$pamMAEO101 = array(0,0,0,0,0);
$pamMAEO102 = array(0,0,0,0,0);
$pamMAEO103 = array(0,0,0,0,0);
$pamMAEO104 = array(0,0,0,0,0);
$pamMAEO105 = array(0,0,0,0,0);

$pamMAEO201 = array(0,0,0,0,0);
$pamMAEO202 = array(0,0,0,0,0);
$pamMAEO203 = array(0,0,0,0,0);
$pamMAEO204 = array(0,0,0,0,0);
$pamMAEO205 = array(0,0,0,0,0);

$pamMAEO301 = array(0,0,0,0,0);
$pamMAEO302 = array(0,0,0,0,0);
$pamMAEO303 = array(0,0,0,0,0);
$pamMAEO304 = array(0,0,0,0,0);
$pamMAEO305 = array(0,0,0,0,0);

$pamMAEO401 = array(0,0,0,0,0);
$pamMAEO402 = array(0,0,0,0,0);
$pamMAEO403 = array(0,0,0,0,0);
$pamMAEO404 = array(0,0,0,0,0);
$pamMAEO405 = array(0,0,0,0,0);

$pamMAEO501 = array(0,0,0,0,0);
$pamMAEO502 = array(0,0,0,0,0);
$pamMAEO503 = array(0,0,0,0,0);
$pamMAEO504 = array(0,0,0,0,0);
$pamMAEO505 = array(0,0,0,0,0);

$pamMAED101 = array(0,0,0,0,0);
$pamMAED102 = array(0,0,0,0,0);
$pamMAED103 = array(0,0,0,0,0);
$pamMAED104 = array(0,0,0,0,0);
$pamMAED105 = array(0,0,0,0,0);

$pamMAED201 = array(0,0,0,0,0);
$pamMAED202 = array(0,0,0,0,0);
$pamMAED203 = array(0,0,0,0,0);
$pamMAED204 = array(0,0,0,0,0);
$pamMAED205 = array(0,0,0,0,0);

$pamMAED301 = array(0,0,0,0,0);
$pamMAED302 = array(0,0,0,0,0);
$pamMAED303 = array(0,0,0,0,0);
$pamMAED304 = array(0,0,0,0,0);
$pamMAED305 = array(0,0,0,0,0);

$pamMAEC101 = array(0,0,0,0,0);
$pamMAEC102 = array(0,0,0,0,0);
$pamMAEC103 = array(0,0,0,0,0);
$pamMAEC104 = array(0,0,0,0,0);
$pamMAEC105 = array(0,0,0,0,0);

$pamMAEC201 = array(0,0,0,0,0);
$pamMAEC202 = array(0,0,0,0,0);
$pamMAEC203 = array(0,0,0,0,0);
$pamMAEC204 = array(0,0,0,0,0);
$pamMAEC205 = array(0,0,0,0,0);


##################################################

$pamMAEP101[0] = ($acuMAEP101[0] * 100)/$cont;
$pamMAEP101[1] = ($acuMAEP101[1] * 100)/$cont;
$pamMAEP101[2] = ($acuMAEP101[2] * 100)/$cont;
$pamMAEP101[3] = ($acuMAEP101[3] * 100)/$cont;
$pamMAEP101[4] = ($acuMAEP101[4] * 100)/$cont;

$pamMAEP102[0] = ($acuMAEP102[0] * 100)/$cont;
$pamMAEP102[1] = ($acuMAEP102[1] * 100)/$cont;
$pamMAEP102[2] = ($acuMAEP102[2] * 100)/$cont;
$pamMAEP102[3] = ($acuMAEP102[3] * 100)/$cont;
$pamMAEP102[4] = ($acuMAEP102[4] * 100)/$cont;

$pamMAEP103[0] = ($acuMAEP103[0] * 100)/$cont;
$pamMAEP103[1] = ($acuMAEP103[1] * 100)/$cont;
$pamMAEP103[2] = ($acuMAEP103[2] * 100)/$cont;
$pamMAEP103[3] = ($acuMAEP103[3] * 100)/$cont;
$pamMAEP103[4] = ($acuMAEP103[4] * 100)/$cont;

$pamMAEP104[0] = ($acuMAEP104[0] * 100)/$cont;
$pamMAEP104[1] = ($acuMAEP104[1] * 100)/$cont;
$pamMAEP104[2] = ($acuMAEP104[2] * 100)/$cont;
$pamMAEP104[3] = ($acuMAEP104[3] * 100)/$cont;
$pamMAEP104[4] = ($acuMAEP104[4] * 100)/$cont;

$pamMAEP105[0] = ($acuMAEP105[0] * 100)/$cont;
$pamMAEP105[1] = ($acuMAEP105[1] * 100)/$cont;
$pamMAEP105[2] = ($acuMAEP105[2] * 100)/$cont;
$pamMAEP105[3] = ($acuMAEP105[3] * 100)/$cont;
$pamMAEP105[4] = ($acuMAEP105[4] * 100)/$cont;

##################################################

$pamMAEP201[0] = ($acuMAEP201[0] * 100)/$cont;
$pamMAEP201[1] = ($acuMAEP201[1] * 100)/$cont;
$pamMAEP201[2] = ($acuMAEP201[2] * 100)/$cont;
$pamMAEP201[3] = ($acuMAEP201[3] * 100)/$cont;
$pamMAEP201[4] = ($acuMAEP201[4] * 100)/$cont;

$pamMAEP202[0] = ($acuMAEP202[0] * 100)/$cont;
$pamMAEP202[1] = ($acuMAEP202[1] * 100)/$cont;
$pamMAEP202[2] = ($acuMAEP202[2] * 100)/$cont;
$pamMAEP202[3] = ($acuMAEP202[3] * 100)/$cont;
$pamMAEP202[4] = ($acuMAEP202[4] * 100)/$cont;

$pamMAEP203[0] = ($acuMAEP203[0] * 100)/$cont;
$pamMAEP203[1] = ($acuMAEP203[1] * 100)/$cont;
$pamMAEP203[2] = ($acuMAEP203[2] * 100)/$cont;
$pamMAEP203[3] = ($acuMAEP203[3] * 100)/$cont;
$pamMAEP203[4] = ($acuMAEP203[4] * 100)/$cont;

$pamMAEP204[0] = ($acuMAEP204[0] * 100)/$cont;
$pamMAEP204[1] = ($acuMAEP204[1] * 100)/$cont;
$pamMAEP204[2] = ($acuMAEP204[2] * 100)/$cont;
$pamMAEP204[3] = ($acuMAEP204[3] * 100)/$cont;
$pamMAEP204[4] = ($acuMAEP204[4] * 100)/$cont;

$pamMAEP205[0] = ($acuMAEP205[0] * 100)/$cont;
$pamMAEP205[1] = ($acuMAEP205[1] * 100)/$cont;
$pamMAEP205[2] = ($acuMAEP205[2] * 100)/$cont;
$pamMAEP205[3] = ($acuMAEP205[3] * 100)/$cont;
$pamMAEP205[4] = ($acuMAEP205[4] * 100)/$cont;

###################################################

$pamMAEO101[0] = ($acuMAEO101[0] * 100)/$cont;
$pamMAEO101[1] = ($acuMAEO101[1] * 100)/$cont;
$pamMAEO101[2] = ($acuMAEO101[2] * 100)/$cont;
$pamMAEO101[3] = ($acuMAEO101[3] * 100)/$cont;
$pamMAEO101[4] = ($acuMAEO101[4] * 100)/$cont;

$pamMAEO102[0] = ($acuMAEO102[0] * 100)/$cont;
$pamMAEO102[1] = ($acuMAEO102[1] * 100)/$cont;
$pamMAEO102[2] = ($acuMAEO102[2] * 100)/$cont;
$pamMAEO102[3] = ($acuMAEO102[3] * 100)/$cont;
$pamMAEO102[4] = ($acuMAEO102[4] * 100)/$cont;

$pamMAEO103[0] = ($acuMAEO103[0] * 100)/$cont;
$pamMAEO103[1] = ($acuMAEO103[1] * 100)/$cont;
$pamMAEO103[2] = ($acuMAEO103[2] * 100)/$cont;
$pamMAEO103[3] = ($acuMAEO103[3] * 100)/$cont;
$pamMAEO103[4] = ($acuMAEO103[4] * 100)/$cont;

$pamMAEO104[0] = ($acuMAEO104[0] * 100)/$cont;
$pamMAEO104[1] = ($acuMAEO104[1] * 100)/$cont;
$pamMAEO104[2] = ($acuMAEO104[2] * 100)/$cont;
$pamMAEO104[3] = ($acuMAEO104[3] * 100)/$cont;
$pamMAEO104[4] = ($acuMAEO104[4] * 100)/$cont;

$pamMAEO105[0] = ($acuMAEO105[0] * 100)/$cont;
$pamMAEO105[1] = ($acuMAEO105[1] * 100)/$cont;
$pamMAEO105[2] = ($acuMAEO105[2] * 100)/$cont;
$pamMAEO105[3] = ($acuMAEO105[3] * 100)/$cont;
$pamMAEO105[4] = ($acuMAEO105[4] * 100)/$cont;

##################################################

$pamMAEO201[0] = ($acuMAEO201[0] * 100)/$cont;
$pamMAEO201[1] = ($acuMAEO201[1] * 100)/$cont;
$pamMAEO201[2] = ($acuMAEO201[2] * 100)/$cont;
$pamMAEO201[3] = ($acuMAEO201[3] * 100)/$cont;
$pamMAEO201[4] = ($acuMAEO201[4] * 100)/$cont;

$pamMAEO202[0] = ($acuMAEO202[0] * 100)/$cont;
$pamMAEO202[1] = ($acuMAEO202[1] * 100)/$cont;
$pamMAEO202[2] = ($acuMAEO202[2] * 100)/$cont;
$pamMAEO202[3] = ($acuMAEO202[3] * 100)/$cont;
$pamMAEO202[4] = ($acuMAEO202[4] * 100)/$cont;

$pamMAEO203[0] = ($acuMAEO203[0] * 100)/$cont;
$pamMAEO203[1] = ($acuMAEO203[1] * 100)/$cont;
$pamMAEO203[2] = ($acuMAEO203[2] * 100)/$cont;
$pamMAEO203[3] = ($acuMAEO203[3] * 100)/$cont;
$pamMAEO203[4] = ($acuMAEO203[4] * 100)/$cont;

$pamMAEO204[0] = ($acuMAEO204[0] * 100)/$cont;
$pamMAEO204[1] = ($acuMAEO204[1] * 100)/$cont;
$pamMAEO204[2] = ($acuMAEO204[2] * 100)/$cont;
$pamMAEO204[3] = ($acuMAEO204[3] * 100)/$cont;
$pamMAEO204[4] = ($acuMAEO204[4] * 100)/$cont;

$pamMAEO205[0] = ($acuMAEO205[0] * 100)/$cont;
$pamMAEO205[1] = ($acuMAEO205[1] * 100)/$cont;
$pamMAEO205[2] = ($acuMAEO205[2] * 100)/$cont;
$pamMAEO205[3] = ($acuMAEO205[3] * 100)/$cont;
$pamMAEO205[4] = ($acuMAEO205[4] * 100)/$cont;

##################################################

$pamMAEO301[0] = ($acuMAEO301[0] * 100)/$cont;
$pamMAEO301[1] = ($acuMAEO301[1] * 100)/$cont;
$pamMAEO301[2] = ($acuMAEO301[2] * 100)/$cont;
$pamMAEO301[3] = ($acuMAEO301[3] * 100)/$cont;
$pamMAEO301[4] = ($acuMAEO301[4] * 100)/$cont;

$pamMAEO302[0] = ($acuMAEO302[0] * 100)/$cont;
$pamMAEO302[1] = ($acuMAEO302[1] * 100)/$cont;
$pamMAEO302[2] = ($acuMAEO302[2] * 100)/$cont;
$pamMAEO302[3] = ($acuMAEO302[3] * 100)/$cont;
$pamMAEO302[4] = ($acuMAEO302[4] * 100)/$cont;

$pamMAEO303[0] = ($acuMAEO303[0] * 100)/$cont;
$pamMAEO303[1] = ($acuMAEO303[1] * 100)/$cont;
$pamMAEO303[2] = ($acuMAEO303[2] * 100)/$cont;
$pamMAEO303[3] = ($acuMAEO303[3] * 100)/$cont;
$pamMAEO303[4] = ($acuMAEO303[4] * 100)/$cont;

$pamMAEO304[0] = ($acuMAEO304[0] * 100)/$cont;
$pamMAEO304[1] = ($acuMAEO304[1] * 100)/$cont;
$pamMAEO304[2] = ($acuMAEO304[2] * 100)/$cont;
$pamMAEO304[3] = ($acuMAEO304[3] * 100)/$cont;
$pamMAEO304[4] = ($acuMAEO304[4] * 100)/$cont;

$pamMAEO305[0] = ($acuMAEO305[0] * 100)/$cont;
$pamMAEO305[1] = ($acuMAEO305[1] * 100)/$cont;
$pamMAEO305[2] = ($acuMAEO305[2] * 100)/$cont;
$pamMAEO305[3] = ($acuMAEO305[3] * 100)/$cont;
$pamMAEO305[4] = ($acuMAEO305[4] * 100)/$cont;

##################################################

$pamMAEO401[0] = ($acuMAEO401[0] * 100)/$cont;
$pamMAEO401[1] = ($acuMAEO401[1] * 100)/$cont;
$pamMAEO401[2] = ($acuMAEO401[2] * 100)/$cont;
$pamMAEO401[3] = ($acuMAEO401[3] * 100)/$cont;
$pamMAEO401[4] = ($acuMAEO401[4] * 100)/$cont;

$pamMAEO402[0] = ($acuMAEO402[0] * 100)/$cont;
$pamMAEO402[1] = ($acuMAEO402[1] * 100)/$cont;
$pamMAEO402[2] = ($acuMAEO402[2] * 100)/$cont;
$pamMAEO402[3] = ($acuMAEO402[3] * 100)/$cont;
$pamMAEO402[4] = ($acuMAEO402[4] * 100)/$cont;

$pamMAEO403[0] = ($acuMAEO403[0] * 100)/$cont;
$pamMAEO403[1] = ($acuMAEO403[1] * 100)/$cont;
$pamMAEO403[2] = ($acuMAEO403[2] * 100)/$cont;
$pamMAEO403[3] = ($acuMAEO403[3] * 100)/$cont;
$pamMAEO403[4] = ($acuMAEO403[4] * 100)/$cont;

$pamMAEO404[0] = ($acuMAEO404[0] * 100)/$cont;
$pamMAEO404[1] = ($acuMAEO404[1] * 100)/$cont;
$pamMAEO404[2] = ($acuMAEO404[2] * 100)/$cont;
$pamMAEO404[3] = ($acuMAEO404[3] * 100)/$cont;
$pamMAEO404[4] = ($acuMAEO404[4] * 100)/$cont;

$pamMAEO405[0] = ($acuMAEO405[0] * 100)/$cont;
$pamMAEO405[1] = ($acuMAEO405[1] * 100)/$cont;
$pamMAEO405[2] = ($acuMAEO405[2] * 100)/$cont;
$pamMAEO405[3] = ($acuMAEO405[3] * 100)/$cont;
$pamMAEO405[4] = ($acuMAEO405[4] * 100)/$cont;

##################################################

$pamMAEO501[0] = ($acuMAEO501[0] * 100)/$cont;
$pamMAEO501[1] = ($acuMAEO501[1] * 100)/$cont;
$pamMAEO501[2] = ($acuMAEO501[2] * 100)/$cont;
$pamMAEO501[3] = ($acuMAEO501[3] * 100)/$cont;
$pamMAEO501[4] = ($acuMAEO501[4] * 100)/$cont;

$pamMAEO502[0] = ($acuMAEO502[0] * 100)/$cont;
$pamMAEO502[1] = ($acuMAEO502[1] * 100)/$cont;
$pamMAEO502[2] = ($acuMAEO502[2] * 100)/$cont;
$pamMAEO502[3] = ($acuMAEO502[3] * 100)/$cont;
$pamMAEO502[4] = ($acuMAEO502[4] * 100)/$cont;

$pamMAEO503[0] = ($acuMAEO503[0] * 100)/$cont;
$pamMAEO503[1] = ($acuMAEO503[1] * 100)/$cont;
$pamMAEO503[2] = ($acuMAEO503[2] * 100)/$cont;
$pamMAEO503[3] = ($acuMAEO503[3] * 100)/$cont;
$pamMAEO503[4] = ($acuMAEO503[4] * 100)/$cont;

$pamMAEO504[0] = ($acuMAEO504[0] * 100)/$cont;
$pamMAEO504[1] = ($acuMAEO504[1] * 100)/$cont;
$pamMAEO504[2] = ($acuMAEO504[2] * 100)/$cont;
$pamMAEO504[3] = ($acuMAEO504[3] * 100)/$cont;
$pamMAEO504[4] = ($acuMAEO504[4] * 100)/$cont;

$pamMAEO505[0] = ($acuMAEO505[0] * 100)/$cont;
$pamMAEO505[1] = ($acuMAEO505[1] * 100)/$cont;
$pamMAEO505[2] = ($acuMAEO505[2] * 100)/$cont;
$pamMAEO505[3] = ($acuMAEO505[3] * 100)/$cont;
$pamMAEO505[4] = ($acuMAEO505[4] * 100)/$cont;

##################################################

$pamMAED101[0] = ($acuMAED101[0] * 100)/$cont;
$pamMAED101[1] = ($acuMAED101[1] * 100)/$cont;
$pamMAED101[2] = ($acuMAED101[2] * 100)/$cont;
$pamMAED101[3] = ($acuMAED101[3] * 100)/$cont;
$pamMAED101[4] = ($acuMAED101[4] * 100)/$cont;

$pamMAED102[0] = ($acuMAED102[0] * 100)/$cont;
$pamMAED102[1] = ($acuMAED102[1] * 100)/$cont;
$pamMAED102[2] = ($acuMAED102[2] * 100)/$cont;
$pamMAED102[3] = ($acuMAED102[3] * 100)/$cont;
$pamMAED102[4] = ($acuMAED102[4] * 100)/$cont;

$pamMAED103[0] = ($acuMAED103[0] * 100)/$cont;
$pamMAED103[1] = ($acuMAED103[1] * 100)/$cont;
$pamMAED103[2] = ($acuMAED103[2] * 100)/$cont;
$pamMAED103[3] = ($acuMAED103[3] * 100)/$cont;
$pamMAED103[4] = ($acuMAED103[4] * 100)/$cont;

$pamMAED104[0] = ($acuMAED104[0] * 100)/$cont;
$pamMAED104[1] = ($acuMAED104[1] * 100)/$cont;
$pamMAED104[2] = ($acuMAED104[2] * 100)/$cont;
$pamMAED104[3] = ($acuMAED104[3] * 100)/$cont;
$pamMAED104[4] = ($acuMAED104[4] * 100)/$cont;

$pamMAED105[0] = ($acuMAED105[0] * 100)/$cont;
$pamMAED105[1] = ($acuMAED105[1] * 100)/$cont;
$pamMAED105[2] = ($acuMAED105[2] * 100)/$cont;
$pamMAED105[3] = ($acuMAED105[3] * 100)/$cont;
$pamMAED105[4] = ($acuMAED105[4] * 100)/$cont;

##################################################

$pamMAED201[0] = ($acuMAED201[0] * 100)/$cont;
$pamMAED201[1] = ($acuMAED201[1] * 100)/$cont;
$pamMAED201[2] = ($acuMAED201[2] * 100)/$cont;
$pamMAED201[3] = ($acuMAED201[3] * 100)/$cont;
$pamMAED201[4] = ($acuMAED201[4] * 100)/$cont;

$pamMAED202[0] = ($acuMAED202[0] * 100)/$cont;
$pamMAED202[1] = ($acuMAED202[1] * 100)/$cont;
$pamMAED202[2] = ($acuMAED202[2] * 100)/$cont;
$pamMAED202[3] = ($acuMAED202[3] * 100)/$cont;
$pamMAED202[4] = ($acuMAED202[4] * 100)/$cont;

$pamMAED203[0] = ($acuMAED203[0] * 100)/$cont;
$pamMAED203[1] = ($acuMAED203[1] * 100)/$cont;
$pamMAED203[2] = ($acuMAED203[2] * 100)/$cont;
$pamMAED203[3] = ($acuMAED203[3] * 100)/$cont;
$pamMAED203[4] = ($acuMAED203[4] * 100)/$cont;

$pamMAED204[0] = ($acuMAED204[0] * 100)/$cont;
$pamMAED204[1] = ($acuMAED204[1] * 100)/$cont;
$pamMAED204[2] = ($acuMAED204[2] * 100)/$cont;
$pamMAED204[3] = ($acuMAED204[3] * 100)/$cont;
$pamMAED204[4] = ($acuMAED204[4] * 100)/$cont;

$pamMAED205[0] = ($acuMAED205[0] * 100)/$cont;
$pamMAED205[1] = ($acuMAED205[1] * 100)/$cont;
$pamMAED205[2] = ($acuMAED205[2] * 100)/$cont;
$pamMAED205[3] = ($acuMAED205[3] * 100)/$cont;
$pamMAED205[4] = ($acuMAED205[4] * 100)/$cont;

##################################################

$pamMAED301[0] = ($acuMAED301[0] * 100)/$cont;
$pamMAED301[1] = ($acuMAED301[1] * 100)/$cont;
$pamMAED301[2] = ($acuMAED301[2] * 100)/$cont;
$pamMAED301[3] = ($acuMAED301[3] * 100)/$cont;
$pamMAED301[4] = ($acuMAED301[4] * 100)/$cont;

$pamMAED302[0] = ($acuMAED302[0] * 100)/$cont;
$pamMAED302[1] = ($acuMAED302[1] * 100)/$cont;
$pamMAED302[2] = ($acuMAED302[2] * 100)/$cont;
$pamMAED302[3] = ($acuMAED302[3] * 100)/$cont;
$pamMAED302[4] = ($acuMAED302[4] * 100)/$cont;

$pamMAED303[0] = ($acuMAED303[0] * 100)/$cont;
$pamMAED303[1] = ($acuMAED303[1] * 100)/$cont;
$pamMAED303[2] = ($acuMAED303[2] * 100)/$cont;
$pamMAED303[3] = ($acuMAED303[3] * 100)/$cont;
$pamMAED303[4] = ($acuMAED303[4] * 100)/$cont;

$pamMAED304[0] = ($acuMAED304[0] * 100)/$cont;
$pamMAED304[1] = ($acuMAED304[1] * 100)/$cont;
$pamMAED304[2] = ($acuMAED304[2] * 100)/$cont;
$pamMAED304[3] = ($acuMAED304[3] * 100)/$cont;
$pamMAED304[4] = ($acuMAED304[4] * 100)/$cont;

$pamMAED305[0] = ($acuMAED305[0] * 100)/$cont;
$pamMAED305[1] = ($acuMAED305[1] * 100)/$cont;
$pamMAED305[2] = ($acuMAED305[2] * 100)/$cont;
$pamMAED305[3] = ($acuMAED305[3] * 100)/$cont;
$pamMAED305[4] = ($acuMAED305[4] * 100)/$cont;

##################################################

$pamMAEC101[0] = ($acuMAEC101[0] * 100)/$cont;
$pamMAEC101[1] = ($acuMAEC101[1] * 100)/$cont;
$pamMAEC101[2] = ($acuMAEC101[2] * 100)/$cont;
$pamMAEC101[3] = ($acuMAEC101[3] * 100)/$cont;
$pamMAEC101[4] = ($acuMAEC101[4] * 100)/$cont;

$pamMAEC102[0] = ($acuMAEC102[0] * 100)/$cont;
$pamMAEC102[1] = ($acuMAEC102[1] * 100)/$cont;
$pamMAEC102[2] = ($acuMAEC102[2] * 100)/$cont;
$pamMAEC102[3] = ($acuMAEC102[3] * 100)/$cont;
$pamMAEC102[4] = ($acuMAEC102[4] * 100)/$cont;

$pamMAEC103[0] = ($acuMAEC103[0] * 100)/$cont;
$pamMAEC103[1] = ($acuMAEC103[1] * 100)/$cont;
$pamMAEC103[2] = ($acuMAEC103[2] * 100)/$cont;
$pamMAEC103[3] = ($acuMAEC103[3] * 100)/$cont;
$pamMAEC103[4] = ($acuMAEC103[4] * 100)/$cont;

$pamMAEC104[0] = ($acuMAEC104[0] * 100)/$cont;
$pamMAEC104[1] = ($acuMAEC104[1] * 100)/$cont;
$pamMAEC104[2] = ($acuMAEC104[2] * 100)/$cont;
$pamMAEC104[3] = ($acuMAEC104[3] * 100)/$cont;
$pamMAEC104[4] = ($acuMAEC104[4] * 100)/$cont;

$pamMAEC105[0] = ($acuMAEC105[0] * 100)/$cont;
$pamMAEC105[1] = ($acuMAEC105[1] * 100)/$cont;
$pamMAEC105[2] = ($acuMAEC105[2] * 100)/$cont;
$pamMAEC105[3] = ($acuMAEC105[3] * 100)/$cont;
$pamMAEC105[4] = ($acuMAEC105[4] * 100)/$cont;

##################################################

$pamMAEC201[0] = ($acuMAEC201[0] * 100)/$cont;
$pamMAEC201[1] = ($acuMAEC201[1] * 100)/$cont;
$pamMAEC201[2] = ($acuMAEC201[2] * 100)/$cont;
$pamMAEC201[3] = ($acuMAEC201[3] * 100)/$cont;
$pamMAEC201[4] = ($acuMAEC201[4] * 100)/$cont;

$pamMAEC202[0] = ($acuMAEC202[0] * 100)/$cont;
$pamMAEC202[1] = ($acuMAEC202[1] * 100)/$cont;
$pamMAEC202[2] = ($acuMAEC202[2] * 100)/$cont;
$pamMAEC202[3] = ($acuMAEC202[3] * 100)/$cont;
$pamMAEC202[4] = ($acuMAEC202[4] * 100)/$cont;

$pamMAEC203[0] = ($acuMAEC203[0] * 100)/$cont;
$pamMAEC203[1] = ($acuMAEC203[1] * 100)/$cont;
$pamMAEC203[2] = ($acuMAEC203[2] * 100)/$cont;
$pamMAEC203[3] = ($acuMAEC203[3] * 100)/$cont;
$pamMAEC203[4] = ($acuMAEC203[4] * 100)/$cont;

$pamMAEC204[0] = ($acuMAEC204[0] * 100)/$cont;
$pamMAEC204[1] = ($acuMAEC204[1] * 100)/$cont;
$pamMAEC204[2] = ($acuMAEC204[2] * 100)/$cont;
$pamMAEC204[3] = ($acuMAEC204[3] * 100)/$cont;
$pamMAEC204[4] = ($acuMAEC204[4] * 100)/$cont;

$pamMAEC205[0] = ($acuMAEC205[0] * 100)/$cont;
$pamMAEC205[1] = ($acuMAEC205[1] * 100)/$cont;
$pamMAEC205[2] = ($acuMAEC205[2] * 100)/$cont;
$pamMAEC205[3] = ($acuMAEC205[3] * 100)/$cont;
$pamMAEC205[4] = ($acuMAEC205[4] * 100)/$cont;

##################################################


//AQUI OUTRO
/*
print ("cont: ".$cont."<br><br>");
print ("MAEP101: ".$acuMAEP101."<br>");
print ("MAEP102: ".$acuMAEP102."<br>");
print ("MAEP103: ".$acuMAEP103."<br>");
print ("MAEP104: ".$acuMAEP104."<br>");
print ("MAEP105: ".$acuMAEP105."<br><br>");

print ("MAEP201: ".$acuMAEP201."<br>");
print ("MAEP202: ".$acuMAEP202."<br>");
print ("MAEP203: ".$acuMAEP203."<br>");
print ("MAEP204: ".$acuMAEP204."<br>");
print ("MAEP205: ".$acuMAEP205."<br><br>");
 
print ("MAEO101: ".$acuMAEO101."<br>");
print ("MAEO102: ".$acuMAEO102."<br>");
print ("MAEO103: ".$acuMAEO103."<br>");
print ("MAEO104: ".$acuMAEO104."<br>");
print ("MAEO105: ".$acuMAEO105."<br><br>");

print ("MAEO201: ".$acuMAEO201."<br>");
print ("MAEO202: ".$acuMAEO202."<br>");
print ("MAEO203: ".$acuMAEO203."<br>");
print ("MAEO204: ".$acuMAEO204."<br>");
print ("MAEO205: ".$acuMAEO205."<br><br>");

print ("MAEO301: ".$acuMAEO301."<br>");
print ("MAEO302: ".$acuMAEO302."<br>");
print ("MAEO303: ".$acuMAEO303."<br>");
print ("MAEO304: ".$acuMAEO304."<br>");
print ("MAEO305: ".$acuMAEO305."<br><br>");

print ("MAEO401: ".$acuMAEO401."<br>");
print ("MAEO402: ".$acuMAEO402."<br>");
print ("MAEO403: ".$acuMAEO403."<br>");
print ("MAEO404: ".$acuMAEO404."<br>");
print ("MAEO405: ".$acuMAEO405."<br><br>");

print ("MAEO501: ".$acuMAEO501."<br>");
print ("MAEO502: ".$acuMAEO502."<br>");
print ("MAEO503: ".$acuMAEO503."<br>");
print ("MAEO504: ".$acuMAEO504."<br>");
print ("MAEO505: ".$acuMAEO505."<br><br>");

print ("MAED101: ".$acuMAED101."<br>");
print ("MAED102: ".$acuMAED102."<br>");
print ("MAED103: ".$acuMAED103."<br>");
print ("MAED104: ".$acuMAED104."<br>");
print ("MAED105: ".$acuMAED105."<br><br>");

print ("MAED201: ".$acuMAED201."<br>");
print ("MAED202: ".$acuMAED202."<br>");
print ("MAED203: ".$acuMAED203."<br>");
print ("MAED204: ".$acuMAED204."<br>");
print ("MAED205: ".$acuMAED205."<br><br>");

print ("MAED301: ".$acuMAED301."<br>");
print ("MAED302: ".$acuMAED302."<br>");
print ("MAED303: ".$acuMAED303."<br>");
print ("MAED304: ".$acuMAED304."<br>");
print ("MAED305: ".$acuMAED305."<br><br>");

print ("MAEC101: ".$acuMAEC101."<br>");
print ("MAEC102: ".$acuMAEC102."<br>");
print ("MAEC103: ".$acuMAEC103."<br>");
print ("MAEC104: ".$acuMAEC104."<br>");
print ("MAEC105: ".$acuMAEC105."<br><br>");

print ("MAEC201: ".$acuMAEC201."<br>");
print ("MAEC202: ".$acuMAEC202."<br>");
print ("MAEC203: ".$acuMAEC203."<br>");
print ("MAEC204: ".$acuMAEC204."<br>");
print ("MAEC205: ".$acuMAEC205."<br><br>");
*/

print("total: ".($cont*60)."<br>");
print("total nivel 1: ". $acuNivel[0]*100/($cont*60)."<br>");
print("total nivel 2: ". $acuNivel[1]*100/($cont*60)."<br>");
print("total nivel 3: ". $acuNivel[2]*100/($cont*60)."<br>");
print("total nivel 4: ". $acuNivel[3]*100/($cont*60)."<br>");
print("total nivel 5: ". $acuNivel[4]*100/($cont*60)."<br><br><br>");

}

}

?>