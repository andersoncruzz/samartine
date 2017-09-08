<?php

session_start();
include("database.php");

if ( $_SESSION["email"] != null
    && $_SESSION["username"]!= null) {


$pdo = new PDO($database_conexao, $database_username, $database_senha);

$empresa = $_SESSION["empresa"];
if ($empresa != null && $_GET["tipo"] == 1){

	$cont = 0;

	$contTI = 0;
	$contNegocio = 0;
	$contOutros = 0;

	$acuNivel = array(0,0,0,0,0);
	$acuTI = array(0,0,0,0,0);
	$acuNegocio = array(0,0,0,0,0);

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
			
		if ($user["atuacao"] == 1){

			$contTI += 1;


			if($form["MAEP101"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuNivel[0] += 1; $acuTI[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuNivel[1] += 1; $acuTI[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuNivel[2] += 1; $acuTI[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuNivel[3] += 1; $acuTI[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuNivel[4] += 1; $acuTI[4] += 1; }		

		}
######################################################################################################
######################################################################################################		
######################################################################################################		
######################################################################################################		
######################################################################################################
######################################################################################################
		else if($user["atuacao"] == 2) {
			$contNegocio +=1;
	

			if($form["MAEP101"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuNivel[0] += 1; $acuNegocio[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuNivel[1] += 1; $acuNegocio[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuNivel[2] += 1; $acuNegocio[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuNivel[3] += 1; $acuNegocio[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuNivel[4] += 1; $acuNegocio[4] += 1; }
		}

######################################################################################################
######################################################################################################		
######################################################################################################		
######################################################################################################		
######################################################################################################
######################################################################################################

		else{
			$contOutros += 1;

			if($form["MAEP101"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuNivel[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuNivel[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuNivel[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuNivel[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuNivel[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuNivel[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuNivel[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuNivel[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuNivel[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuNivel[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuNivel[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuNivel[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuNivel[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuNivel[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuNivel[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuNivel[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuNivel[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuNivel[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuNivel[4] += 1; }			
		}

#################################################################################
#	print("total nivel 1: ". $acuNivel[0]."<br>");
#	print("total nivel 2: ". $acuNivel[1]."<br>");
#	print("total nivel 3: ". $acuNivel[2]."<br>");
#	print("total nivel 4: ". $acuNivel[3]."<br>");
#	print("total nivel 5: ". $acuNivel[4]."<br><br><br>");

#####################################################################################


		}
	}
#	print("<br><br>cont TOTAL: ". $cont."<br>");
#	print("total nivel 1: ". $acuNivel[0]."<br>");
#	print("total nivel 2: ". $acuNivel[1]."<br>");
#	print("total nivel 3: ". $acuNivel[2]."<br>");
#	print("total nivel 4: ". $acuNivel[3]."<br>");
#	print("total nivel 5: ". $acuNivel[4]."<br><br><br>");

#	print("<br><br>cont TI: ". $contTI."<br>");
#	print("total nivel 1: ". $acuTI[0]."<br>");
#	print("total nivel 2: ". $acuTI[1]."<br>");
#	print("total nivel 3: ". $acuTI[2]."<br>");
#	print("total nivel 4: ". $acuTI[3]."<br>");
#	print("total nivel 5: ". $acuTI[4]."<br><br><br>");

#	print("<br><br>cont TI: ". $contNegocio."<br>");
#	print("total nivel 1: ". $acuNegocio[0]."<br>");
#	print("total nivel 2: ". $acuNegocio[1]."<br>");
#	print("total nivel 3: ". $acuNegocio[2]."<br>");
#	print("total nivel 4: ". $acuNegocio[3]."<br>");
#	print("total nivel 5: ". $acuNegocio[4]."<br><br><br>");




	$pizza = "      
		google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

    	function drawChart() {

    		var data = google.visualization.arrayToDataTable([
       			['Quantidade de Respostas', 'Percentual'],
        		['Gerente de TI', ".$contTI ."],
        		['Gerente de Negócio', ".$contNegocio ."],
        		['Outros', ". $contOutros."],
        	]);

        	var options = {
        		title: 'Quantidade de Respostas: ".($contTI+$contNegocio+$contOutros)."'
        	};

        	var respostas = new google.visualization.PieChart(document.getElementById('qtdreposta'));
        	respostas.draw(data, options);

    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuNivel[0]*100)/($cont*60) ."],
        		['Alinhamento Fraco', ".($acuNivel[1]*100)/($cont*60) ."],
        		['Alinhamento Moderado', ". ($acuNivel[2]*100)/($cont*60)."],
        		['Alinhamento Forte', ".($acuNivel[3]*100)/($cont*60) ."],
        		['Alinhamento Total', ". ($acuNivel[4]*100)/($cont*60)."]
        	]);

        	var options = {
        		title: 'Opinião de Ambos'
        	};

        	var ambos = new google.visualization.PieChart(document.getElementById('ambos'));
        	ambos.draw(data, options);


    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuTI[0]*100)/($contTI*60) ."],
        		['Alinhamento Fraco', ".($acuTI[1]*100)/($contTI*60) ."],
        		['Alinhamento Moderado', ". ($acuTI[2]*100)/($contTI*60)."],
        		['Alinhamento Forte', ".($acuTI[3]*100)/($contTI*60) ."],
        		['Alinhamento Total', ". ($acuTI[4]*100)/($contTI*60)."]
        	]);

        	var options = {
        		title: 'Opinião dos Gerentes de TI'
        	};
        	
        	var TI = new google.visualization.PieChart(document.getElementById('TI'));
        	TI.draw(data, options);


    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuNegocio[0]*100)/($contNegocio*60) ."],
        		['Alinhamento Fraco', ".($acuNegocio[1]*100)/($contNegocio*60) ."],
        		['Alinhamento Moderado', ". ($acuNegocio[2]*100)/($contNegocio*60)."],
        		['Alinhamento Forte', ".($acuNegocio[3]*100)/($contNegocio*60) ."],
        		['Alinhamento Total', ". ($acuNegocio[4]*100)/($contNegocio*60)."]
        	]);

        	var options = {
        		title: 'Opinião dos Gerentes de Negocio'
        	};

        	var negocio = new google.visualization.PieChart(document.getElementById('negocio'));
        	negocio.draw(data, options);

      }

	";

    $html_string = file_get_contents("pages/relatorio-template-geral.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;

	//print("UMA VEZ total: ".($cont*60)."<br>");
	//print("total nivel 1: ". $acuNivel[0]*100/($cont*60)."<br>");
	//print("total nivel 2: ". $acuNivel[1]*100/($cont*60)."<br>");
	//print("total nivel 3: ". $acuNivel[2]*100/($cont*60)."<br>");
	//print("total nivel 4: ". $acuNivel[3]*100/($cont*60)."<br>");
	//print("total nivel 5: ". $acuNivel[4]*100/($cont*60)."<br><br><br>");


/*
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

$pamMAEP101[0] = ([0] * 100)/$cont;
$pamMAEP101[1] = ([1] * 100)/$cont;
$pamMAEP101[2] = ([2] * 100)/$cont;
$pamMAEP101[3] = ([3] * 100)/$cont;
$pamMAEP101[4] = ([4] * 100)/$cont;

$pamMAEP102[0] = ([0] * 100)/$cont;
$pamMAEP102[1] = ([1] * 100)/$cont;
$pamMAEP102[2] = ([2] * 100)/$cont;
$pamMAEP102[3] = ([3] * 100)/$cont;
$pamMAEP102[4] = ([4] * 100)/$cont;

$pamMAEP103[0] = ([0] * 100)/$cont;
$pamMAEP103[1] = ([1] * 100)/$cont;
$pamMAEP103[2] = ([2] * 100)/$cont;
$pamMAEP103[3] = ([3] * 100)/$cont;
$pamMAEP103[4] = ([4] * 100)/$cont;

$pamMAEP104[0] = ([0] * 100)/$cont;
$pamMAEP104[1] = ([1] * 100)/$cont;
$pamMAEP104[2] = ([2] * 100)/$cont;
$pamMAEP104[3] = ([3] * 100)/$cont;
$pamMAEP104[4] = ([4] * 100)/$cont;

$pamMAEP105[0] = ([0] * 100)/$cont;
$pamMAEP105[1] = ([1] * 100)/$cont;
$pamMAEP105[2] = ([2] * 100)/$cont;
$pamMAEP105[3] = ([3] * 100)/$cont;
$pamMAEP105[4] = ([4] * 100)/$cont;

##################################################

$pamMAEP201[0] = ([0] * 100)/$cont;
$pamMAEP201[1] = ([1] * 100)/$cont;
$pamMAEP201[2] = ([2] * 100)/$cont;
$pamMAEP201[3] = ([3] * 100)/$cont;
$pamMAEP201[4] = ([4] * 100)/$cont;

$pamMAEP202[0] = ([0] * 100)/$cont;
$pamMAEP202[1] = ([1] * 100)/$cont;
$pamMAEP202[2] = ([2] * 100)/$cont;
$pamMAEP202[3] = ([3] * 100)/$cont;
$pamMAEP202[4] = ([4] * 100)/$cont;

$pamMAEP203[0] = ([0] * 100)/$cont;
$pamMAEP203[1] = ([1] * 100)/$cont;
$pamMAEP203[2] = ([2] * 100)/$cont;
$pamMAEP203[3] = ([3] * 100)/$cont;
$pamMAEP203[4] = ([4] * 100)/$cont;

$pamMAEP204[0] = ([0] * 100)/$cont;
$pamMAEP204[1] = ([1] * 100)/$cont;
$pamMAEP204[2] = ([2] * 100)/$cont;
$pamMAEP204[3] = ([3] * 100)/$cont;
$pamMAEP204[4] = ([4] * 100)/$cont;

$pamMAEP205[0] = ([0] * 100)/$cont;
$pamMAEP205[1] = ([1] * 100)/$cont;
$pamMAEP205[2] = ([2] * 100)/$cont;
$pamMAEP205[3] = ([3] * 100)/$cont;
$pamMAEP205[4] = ([4] * 100)/$cont;

###################################################

$pamMAEO101[0] = ([0] * 100)/$cont;
$pamMAEO101[1] = ([1] * 100)/$cont;
$pamMAEO101[2] = ([2] * 100)/$cont;
$pamMAEO101[3] = ([3] * 100)/$cont;
$pamMAEO101[4] = ([4] * 100)/$cont;

$pamMAEO102[0] = ([0] * 100)/$cont;
$pamMAEO102[1] = ([1] * 100)/$cont;
$pamMAEO102[2] = ([2] * 100)/$cont;
$pamMAEO102[3] = ([3] * 100)/$cont;
$pamMAEO102[4] = ([4] * 100)/$cont;

$pamMAEO103[0] = ([0] * 100)/$cont;
$pamMAEO103[1] = ([1] * 100)/$cont;
$pamMAEO103[2] = ([2] * 100)/$cont;
$pamMAEO103[3] = ([3] * 100)/$cont;
$pamMAEO103[4] = ([4] * 100)/$cont;

$pamMAEO104[0] = ([0] * 100)/$cont;
$pamMAEO104[1] = ([1] * 100)/$cont;
$pamMAEO104[2] = ([2] * 100)/$cont;
$pamMAEO104[3] = ([3] * 100)/$cont;
$pamMAEO104[4] = ([4] * 100)/$cont;

$pamMAEO105[0] = ([0] * 100)/$cont;
$pamMAEO105[1] = ([1] * 100)/$cont;
$pamMAEO105[2] = ([2] * 100)/$cont;
$pamMAEO105[3] = ([3] * 100)/$cont;
$pamMAEO105[4] = ([4] * 100)/$cont;

##################################################

$pamMAEO201[0] = ([0] * 100)/$cont;
$pamMAEO201[1] = ([1] * 100)/$cont;
$pamMAEO201[2] = ([2] * 100)/$cont;
$pamMAEO201[3] = ([3] * 100)/$cont;
$pamMAEO201[4] = ([4] * 100)/$cont;

$pamMAEO202[0] = ([0] * 100)/$cont;
$pamMAEO202[1] = ([1] * 100)/$cont;
$pamMAEO202[2] = ([2] * 100)/$cont;
$pamMAEO202[3] = ([3] * 100)/$cont;
$pamMAEO202[4] = ([4] * 100)/$cont;

$pamMAEO203[0] = ([0] * 100)/$cont;
$pamMAEO203[1] = ([1] * 100)/$cont;
$pamMAEO203[2] = ([2] * 100)/$cont;
$pamMAEO203[3] = ([3] * 100)/$cont;
$pamMAEO203[4] = ([4] * 100)/$cont;

$pamMAEO204[0] = ([0] * 100)/$cont;
$pamMAEO204[1] = ([1] * 100)/$cont;
$pamMAEO204[2] = ([2] * 100)/$cont;
$pamMAEO204[3] = ([3] * 100)/$cont;
$pamMAEO204[4] = ([4] * 100)/$cont;

$pamMAEO205[0] = ([0] * 100)/$cont;
$pamMAEO205[1] = ([1] * 100)/$cont;
$pamMAEO205[2] = ([2] * 100)/$cont;
$pamMAEO205[3] = ([3] * 100)/$cont;
$pamMAEO205[4] = ([4] * 100)/$cont;

##################################################

$pamMAEO301[0] = ([0] * 100)/$cont;
$pamMAEO301[1] = ([1] * 100)/$cont;
$pamMAEO301[2] = ([2] * 100)/$cont;
$pamMAEO301[3] = ([3] * 100)/$cont;
$pamMAEO301[4] = ([4] * 100)/$cont;

$pamMAEO302[0] = ([0] * 100)/$cont;
$pamMAEO302[1] = ([1] * 100)/$cont;
$pamMAEO302[2] = ([2] * 100)/$cont;
$pamMAEO302[3] = ([3] * 100)/$cont;
$pamMAEO302[4] = ([4] * 100)/$cont;

$pamMAEO303[0] = ([0] * 100)/$cont;
$pamMAEO303[1] = ([1] * 100)/$cont;
$pamMAEO303[2] = ([2] * 100)/$cont;
$pamMAEO303[3] = ([3] * 100)/$cont;
$pamMAEO303[4] = ([4] * 100)/$cont;

$pamMAEO304[0] = ([0] * 100)/$cont;
$pamMAEO304[1] = ([1] * 100)/$cont;
$pamMAEO304[2] = ([2] * 100)/$cont;
$pamMAEO304[3] = ([3] * 100)/$cont;
$pamMAEO304[4] = ([4] * 100)/$cont;

$pamMAEO305[0] = ([0] * 100)/$cont;
$pamMAEO305[1] = ([1] * 100)/$cont;
$pamMAEO305[2] = ([2] * 100)/$cont;
$pamMAEO305[3] = ([3] * 100)/$cont;
$pamMAEO305[4] = ([4] * 100)/$cont;

##################################################

$pamMAEO401[0] = ([0] * 100)/$cont;
$pamMAEO401[1] = ([1] * 100)/$cont;
$pamMAEO401[2] = ([2] * 100)/$cont;
$pamMAEO401[3] = ([3] * 100)/$cont;
$pamMAEO401[4] = ([4] * 100)/$cont;

$pamMAEO402[0] = ([0] * 100)/$cont;
$pamMAEO402[1] = ([1] * 100)/$cont;
$pamMAEO402[2] = ([2] * 100)/$cont;
$pamMAEO402[3] = ([3] * 100)/$cont;
$pamMAEO402[4] = ([4] * 100)/$cont;

$pamMAEO403[0] = ([0] * 100)/$cont;
$pamMAEO403[1] = ([1] * 100)/$cont;
$pamMAEO403[2] = ([2] * 100)/$cont;
$pamMAEO403[3] = ([3] * 100)/$cont;
$pamMAEO403[4] = ([4] * 100)/$cont;

$pamMAEO404[0] = ([0] * 100)/$cont;
$pamMAEO404[1] = ([1] * 100)/$cont;
$pamMAEO404[2] = ([2] * 100)/$cont;
$pamMAEO404[3] = ([3] * 100)/$cont;
$pamMAEO404[4] = ([4] * 100)/$cont;

$pamMAEO405[0] = ([0] * 100)/$cont;
$pamMAEO405[1] = ([1] * 100)/$cont;
$pamMAEO405[2] = ([2] * 100)/$cont;
$pamMAEO405[3] = ([3] * 100)/$cont;
$pamMAEO405[4] = ([4] * 100)/$cont;

##################################################

$pamMAEO501[0] = ([0] * 100)/$cont;
$pamMAEO501[1] = ([1] * 100)/$cont;
$pamMAEO501[2] = ([2] * 100)/$cont;
$pamMAEO501[3] = ([3] * 100)/$cont;
$pamMAEO501[4] = ([4] * 100)/$cont;

$pamMAEO502[0] = ([0] * 100)/$cont;
$pamMAEO502[1] = ([1] * 100)/$cont;
$pamMAEO502[2] = ([2] * 100)/$cont;
$pamMAEO502[3] = ([3] * 100)/$cont;
$pamMAEO502[4] = ([4] * 100)/$cont;

$pamMAEO503[0] = ([0] * 100)/$cont;
$pamMAEO503[1] = ([1] * 100)/$cont;
$pamMAEO503[2] = ([2] * 100)/$cont;
$pamMAEO503[3] = ([3] * 100)/$cont;
$pamMAEO503[4] = ([4] * 100)/$cont;

$pamMAEO504[0] = ([0] * 100)/$cont;
$pamMAEO504[1] = ([1] * 100)/$cont;
$pamMAEO504[2] = ([2] * 100)/$cont;
$pamMAEO504[3] = ([3] * 100)/$cont;
$pamMAEO504[4] = ([4] * 100)/$cont;

$pamMAEO505[0] = ([0] * 100)/$cont;
$pamMAEO505[1] = ([1] * 100)/$cont;
$pamMAEO505[2] = ([2] * 100)/$cont;
$pamMAEO505[3] = ([3] * 100)/$cont;
$pamMAEO505[4] = ([4] * 100)/$cont;

##################################################

$pamMAED101[0] = ([0] * 100)/$cont;
$pamMAED101[1] = ([1] * 100)/$cont;
$pamMAED101[2] = ([2] * 100)/$cont;
$pamMAED101[3] = ([3] * 100)/$cont;
$pamMAED101[4] = ([4] * 100)/$cont;

$pamMAED102[0] = ([0] * 100)/$cont;
$pamMAED102[1] = ([1] * 100)/$cont;
$pamMAED102[2] = ([2] * 100)/$cont;
$pamMAED102[3] = ([3] * 100)/$cont;
$pamMAED102[4] = ([4] * 100)/$cont;

$pamMAED103[0] = ([0] * 100)/$cont;
$pamMAED103[1] = ([1] * 100)/$cont;
$pamMAED103[2] = ([2] * 100)/$cont;
$pamMAED103[3] = ([3] * 100)/$cont;
$pamMAED103[4] = ([4] * 100)/$cont;

$pamMAED104[0] = ([0] * 100)/$cont;
$pamMAED104[1] = ([1] * 100)/$cont;
$pamMAED104[2] = ([2] * 100)/$cont;
$pamMAED104[3] = ([3] * 100)/$cont;
$pamMAED104[4] = ([4] * 100)/$cont;

$pamMAED105[0] = ([0] * 100)/$cont;
$pamMAED105[1] = ([1] * 100)/$cont;
$pamMAED105[2] = ([2] * 100)/$cont;
$pamMAED105[3] = ([3] * 100)/$cont;
$pamMAED105[4] = ([4] * 100)/$cont;

##################################################

$pamMAED201[0] = ([0] * 100)/$cont;
$pamMAED201[1] = ([1] * 100)/$cont;
$pamMAED201[2] = ([2] * 100)/$cont;
$pamMAED201[3] = ([3] * 100)/$cont;
$pamMAED201[4] = ([4] * 100)/$cont;

$pamMAED202[0] = ([0] * 100)/$cont;
$pamMAED202[1] = ([1] * 100)/$cont;
$pamMAED202[2] = ([2] * 100)/$cont;
$pamMAED202[3] = ([3] * 100)/$cont;
$pamMAED202[4] = ([4] * 100)/$cont;

$pamMAED203[0] = ([0] * 100)/$cont;
$pamMAED203[1] = ([1] * 100)/$cont;
$pamMAED203[2] = ([2] * 100)/$cont;
$pamMAED203[3] = ([3] * 100)/$cont;
$pamMAED203[4] = ([4] * 100)/$cont;

$pamMAED204[0] = ([0] * 100)/$cont;
$pamMAED204[1] = ([1] * 100)/$cont;
$pamMAED204[2] = ([2] * 100)/$cont;
$pamMAED204[3] = ([3] * 100)/$cont;
$pamMAED204[4] = ([4] * 100)/$cont;

$pamMAED205[0] = ([0] * 100)/$cont;
$pamMAED205[1] = ([1] * 100)/$cont;
$pamMAED205[2] = ([2] * 100)/$cont;
$pamMAED205[3] = ([3] * 100)/$cont;
$pamMAED205[4] = ([4] * 100)/$cont;

##################################################

$pamMAED301[0] = ([0] * 100)/$cont;
$pamMAED301[1] = ([1] * 100)/$cont;
$pamMAED301[2] = ([2] * 100)/$cont;
$pamMAED301[3] = ([3] * 100)/$cont;
$pamMAED301[4] = ([4] * 100)/$cont;

$pamMAED302[0] = ([0] * 100)/$cont;
$pamMAED302[1] = ([1] * 100)/$cont;
$pamMAED302[2] = ([2] * 100)/$cont;
$pamMAED302[3] = ([3] * 100)/$cont;
$pamMAED302[4] = ([4] * 100)/$cont;

$pamMAED303[0] = ([0] * 100)/$cont;
$pamMAED303[1] = ([1] * 100)/$cont;
$pamMAED303[2] = ([2] * 100)/$cont;
$pamMAED303[3] = ([3] * 100)/$cont;
$pamMAED303[4] = ([4] * 100)/$cont;

$pamMAED304[0] = ([0] * 100)/$cont;
$pamMAED304[1] = ([1] * 100)/$cont;
$pamMAED304[2] = ([2] * 100)/$cont;
$pamMAED304[3] = ([3] * 100)/$cont;
$pamMAED304[4] = ([4] * 100)/$cont;

$pamMAED305[0] = ([0] * 100)/$cont;
$pamMAED305[1] = ([1] * 100)/$cont;
$pamMAED305[2] = ([2] * 100)/$cont;
$pamMAED305[3] = ([3] * 100)/$cont;
$pamMAED305[4] = ([4] * 100)/$cont;

##################################################

$pamMAEC101[0] = ([0] * 100)/$cont;
$pamMAEC101[1] = ([1] * 100)/$cont;
$pamMAEC101[2] = ([2] * 100)/$cont;
$pamMAEC101[3] = ([3] * 100)/$cont;
$pamMAEC101[4] = ([4] * 100)/$cont;

$pamMAEC102[0] = ([0] * 100)/$cont;
$pamMAEC102[1] = ([1] * 100)/$cont;
$pamMAEC102[2] = ([2] * 100)/$cont;
$pamMAEC102[3] = ([3] * 100)/$cont;
$pamMAEC102[4] = ([4] * 100)/$cont;

$pamMAEC103[0] = ([0] * 100)/$cont;
$pamMAEC103[1] = ([1] * 100)/$cont;
$pamMAEC103[2] = ([2] * 100)/$cont;
$pamMAEC103[3] = ([3] * 100)/$cont;
$pamMAEC103[4] = ([4] * 100)/$cont;

$pamMAEC104[0] = ([0] * 100)/$cont;
$pamMAEC104[1] = ([1] * 100)/$cont;
$pamMAEC104[2] = ([2] * 100)/$cont;
$pamMAEC104[3] = ([3] * 100)/$cont;
$pamMAEC104[4] = ([4] * 100)/$cont;

$pamMAEC105[0] = ([0] * 100)/$cont;
$pamMAEC105[1] = ([1] * 100)/$cont;
$pamMAEC105[2] = ([2] * 100)/$cont;
$pamMAEC105[3] = ([3] * 100)/$cont;
$pamMAEC105[4] = ([4] * 100)/$cont;

##################################################

$pamMAEC201[0] = ([0] * 100)/$cont;
$pamMAEC201[1] = ([1] * 100)/$cont;
$pamMAEC201[2] = ([2] * 100)/$cont;
$pamMAEC201[3] = ([3] * 100)/$cont;
$pamMAEC201[4] = ([4] * 100)/$cont;

$pamMAEC202[0] = ([0] * 100)/$cont;
$pamMAEC202[1] = ([1] * 100)/$cont;
$pamMAEC202[2] = ([2] * 100)/$cont;
$pamMAEC202[3] = ([3] * 100)/$cont;
$pamMAEC202[4] = ([4] * 100)/$cont;

$pamMAEC203[0] = ([0] * 100)/$cont;
$pamMAEC203[1] = ([1] * 100)/$cont;
$pamMAEC203[2] = ([2] * 100)/$cont;
$pamMAEC203[3] = ([3] * 100)/$cont;
$pamMAEC203[4] = ([4] * 100)/$cont;

$pamMAEC204[0] = ([0] * 100)/$cont;
$pamMAEC204[1] = ([1] * 100)/$cont;
$pamMAEC204[2] = ([2] * 100)/$cont;
$pamMAEC204[3] = ([3] * 100)/$cont;
$pamMAEC204[4] = ([4] * 100)/$cont;

$pamMAEC205[0] = ([0] * 100)/$cont;
$pamMAEC205[1] = ([1] * 100)/$cont;
$pamMAEC205[2] = ([2] * 100)/$cont;
$pamMAEC205[3] = ([3] * 100)/$cont;
$pamMAEC205[4] = ([4] * 100)/$cont;

##################################################
*/

//AQUI OUTRO
/*
print ("cont: ".$cont."<br><br>");
print ("MAEP101: ".."<br>");
print ("MAEP102: ".."<br>");
print ("MAEP103: ".."<br>");
print ("MAEP104: ".."<br>");
print ("MAEP105: ".."<br><br>");

print ("MAEP201: ".."<br>");
print ("MAEP202: ".."<br>");
print ("MAEP203: ".."<br>");
print ("MAEP204: ".."<br>");
print ("MAEP205: ".."<br><br>");
 
print ("MAEO101: ".."<br>");
print ("MAEO102: ".."<br>");
print ("MAEO103: ".."<br>");
print ("MAEO104: ".."<br>");
print ("MAEO105: ".."<br><br>");

print ("MAEO201: ".."<br>");
print ("MAEO202: ".."<br>");
print ("MAEO203: ".."<br>");
print ("MAEO204: ".."<br>");
print ("MAEO205: ".."<br><br>");

print ("MAEO301: ".."<br>");
print ("MAEO302: ".."<br>");
print ("MAEO303: ".."<br>");
print ("MAEO304: ".."<br>");
print ("MAEO305: ".."<br><br>");

print ("MAEO401: ".."<br>");
print ("MAEO402: ".."<br>");
print ("MAEO403: ".."<br>");
print ("MAEO404: ".."<br>");
print ("MAEO405: ".."<br><br>");

print ("MAEO501: ".."<br>");
print ("MAEO502: ".."<br>");
print ("MAEO503: ".."<br>");
print ("MAEO504: ".."<br>");
print ("MAEO505: ".."<br><br>");

print ("MAED101: ".."<br>");
print ("MAED102: ".."<br>");
print ("MAED103: ".."<br>");
print ("MAED104: ".."<br>");
print ("MAED105: ".."<br><br>");

print ("MAED201: ".."<br>");
print ("MAED202: ".."<br>");
print ("MAED203: ".."<br>");
print ("MAED204: ".."<br>");
print ("MAED205: ".."<br><br>");

print ("MAED301: ".."<br>");
print ("MAED302: ".."<br>");
print ("MAED303: ".."<br>");
print ("MAED304: ".."<br>");
print ("MAED305: ".."<br><br>");

print ("MAEC101: ".."<br>");
print ("MAEC102: ".."<br>");
print ("MAEC103: ".."<br>");
print ("MAEC104: ".."<br>");
print ("MAEC105: ".."<br><br>");

print ("MAEC201: ".."<br>");
print ("MAEC202: ".."<br>");
print ("MAEC203: ".."<br>");
print ("MAEC204: ".."<br>");
print ("MAEC205: ".."<br><br>");
*/

#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################

} else if ($empresa != null && $_GET["tipo"] == 2){

#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 3){

	$cont = 0;

	#$contCapacidade = 0;
	#$contCompromisso = 0;
	#$contOutros = 0;

	$acuCapacidade = array(0,0,0,0,0);
	$acuCompromisso = array(0,0,0,0,0);
	$acuConhecimento = array(0,0,0,0,0);
	$acuCooperacao = array(0,0,0,0,0);
	$acuCoerencia = array(0,0,0,0,0);


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
			$cont += 1;


			if($form["MAEP101"] == 1) {
				$acuCapacidade[0] += 1; }	
			else if($form["MAEP101"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuCompromisso[0] += 1; }	
			else if($form["MAEP102"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuCoerencia[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuCapacidade[0] += 1; }				
			else if($form["MAEP201"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuCoerencia[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuCoerencia[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuCoerencia[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuCoerencia[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuCoerencia[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuCoerencia[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuCoerencia[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuCoerencia[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuCoerencia[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEC102"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuCoerencia[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuCapacidade[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuCapacidade[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuCapacidade[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuCapacidade[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuCapacidade[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuCompromisso[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuCompromisso[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuCompromisso[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuCompromisso[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuCompromisso[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuConhecimento[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuConhecimento[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuConhecimento[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuConhecimento[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuConhecimento[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuCooperacao[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuCooperacao[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuCooperacao[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuCooperacao[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuCooperacao[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuCoerencia[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuCoerencia[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuCoerencia[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuCoerencia[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuCoerencia[4] += 1; }
		

		}
	#	echo $cont;
	#	echo "<br>";
	#	echo var_dump($acuCapacidade);
	#	echo "<br>";
	#	echo var_dump($acuCompromisso);
	#	echo "<br>";
	#	echo var_dump($acuConhecimento);
	#	echo "<br>";
	#	echo var_dump($acuCooperacao);
	#	echo "<br>";
	#	echo var_dump($acuCoerencia);
	#	echo "<br>";

	}

	$pizza = "      
		google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

    	function drawChart() {

    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuCapacidade[0]*100)/($cont*12) ."],
        		['Alinhamento Fraco', ".($acuCapacidade[1]*100)/($cont*12) ."],
        		['Alinhamento Moderado', ". ($acuCapacidade[2]*100)/($cont*12)."],
        		['Alinhamento Forte', ".($acuCapacidade[3]*100)/($cont*12) ."],
        		['Alinhamento Total', ". ($acuCapacidade[4]*100)/($cont*12)."]
        	]);

        	var options = {
        		title: 'Capacidade'
        	};

        	var capacidade = new google.visualization.PieChart(document.getElementById('capacidade'));
        	capacidade.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuCompromisso[0]*100)/($cont*12) ."],
        		['Alinhamento Fraco', ".($acuCompromisso[1]*100)/($cont*12) ."],
        		['Alinhamento Moderado', ". ($acuCompromisso[2]*100)/($cont*12)."],
        		['Alinhamento Forte', ".($acuCompromisso[3]*100)/($cont*12) ."],
        		['Alinhamento Total', ". ($acuCompromisso[4]*100)/($cont*12)."]
        	]);

        	var options = {
        		title: 'Compromisso'
        	};

        	var compromisso = new google.visualization.PieChart(document.getElementById('compromisso'));
        	compromisso.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuConhecimento[0]*100)/($cont*12) ."],
        		['Alinhamento Fraco', ".($acuConhecimento[1]*100)/($cont*12) ."],
        		['Alinhamento Moderado', ". ($acuConhecimento[2]*100)/($cont*12)."],
        		['Alinhamento Forte', ".($acuConhecimento[3]*100)/($cont*12) ."],
        		['Alinhamento Total', ". ($acuConhecimento[4]*100)/($cont*12)."]
        	]);

        	var options = {
        		title: 'Conhecimento'
        	};

        	var conhecimento = new google.visualization.PieChart(document.getElementById('conhecimento'));
        	conhecimento.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuCooperacao[0]*100)/($cont*12) ."],
        		['Alinhamento Fraco', ".($acuCooperacao[1]*100)/($cont*12) ."],
        		['Alinhamento Moderado', ". ($acuCooperacao[2]*100)/($cont*12)."],
        		['Alinhamento Forte', ".($acuCooperacao[3]*100)/($cont*12) ."],
        		['Alinhamento Total', ". ($acuCooperacao[4]*100)/($cont*12)."]
        	]);

        	var options = {
        		title: 'Cooperação'
        	};

        	var cooperacao = new google.visualization.PieChart(document.getElementById('cooperacao'));
        	cooperacao.draw(data, options);

   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuCoerencia[0]*100)/($cont*12) ."],
        		['Alinhamento Fraco', ".($acuCoerencia[1]*100)/($cont*12) ."],
        		['Alinhamento Moderado', ". ($acuCoerencia[2]*100)/($cont*12)."],
        		['Alinhamento Forte', ".($acuCoerencia[3]*100)/($cont*12) ."],
        		['Alinhamento Total', ". ($acuCoerencia[4]*100)/($cont*12)."]
        	]);

        	var options = {
        		title: 'Coerência'
        	};

        	var coerencia = new google.visualization.PieChart(document.getElementById('coerencia'));
        	coerencia.draw(data, options);
      }

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Critérios', 'Alinhamento Inexistente', 'Alinhamento Fraco', 'Alinhamento Moderado', 'Alinhamento Forte', 'Alinhamento Total'],
          ['Capacidade',".($acuCapacidade[0]*100)/($cont*12).",". ($acuCapacidade[1]*100)/($cont*12).",". ($acuCapacidade[2]*100)/($cont*12).",".($acuCapacidade[3]*100)/($cont*12) .",".($acuCapacidade[4]*100)/($cont*12) ."],
          ['Compromisso',".($acuCompromisso[0]*100)/($cont*12) .",".($acuCompromisso[1]*100)/($cont*12) .",". ($acuCompromisso[2]*100)/($cont*12).",". ($acuCompromisso[3]*100)/($cont*12).",". ($acuCompromisso[4]*100)/($cont*12)."],
          ['Conhecimento',".($acuConhecimento[0]*100)/($cont*12) .",".($acuConhecimento[1]*100)/($cont*12) .",".($acuConhecimento[2]*100)/($cont*12) .",". ($acuConhecimento[3]*100)/($cont*12).",". ($acuConhecimento[4]*100)/($cont*12)."],
          ['Cooperação',".($acuCooperacao[0]*100)/($cont*12) .",". ($acuCooperacao[1]*100)/($cont*12).",".($acuCooperacao[2]*100)/($cont*12) .",". ($acuCooperacao[3]*100)/($cont*12).",". ($acuCooperacao[4]*100)/($cont*12)."],
          ['Coerência',".($acuCoerencia[0]*100)/($cont*12) .",". ($acuCoerencia[1]*100)/($cont*12).",".($acuCoerencia[2]*100)/($cont*12) .",". ($acuCoerencia[3]*100)/($cont*12).",". ($acuCoerencia[4]*100)/($cont*12)."]
        ]);

        var options = {
          chart: {
            title: 'Alinhamento por Critérios em Percentual (%)',
            subtitle: 'Alinhamento Inexistente, Alinhamento Fraco, Alinhamento Moderado, Alinhamento Forte, Alinhamento Total',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var criterio = new google.charts.Bar(document.getElementById('graphbar'));

        criterio.draw(data, google.charts.Bar.convertOptions(options));
      }

	";

    $html_string = file_get_contents("pages/relatorio-template-criterios.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;

#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 4){
	$cont = 0;

	$acuPlanejamento = array(0,0,0,0,0);
	$acuOrganizacao = array(0,0,0,0,0);
	$acuDirecao = array(0,0,0,0,0);
	$acuControle = array(0,0,0,0,0);

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
			$cont += 1;


			if($form["MAEP101"] == 1) {
				$acuPlanejamento[0] += 1; }	
			else if($form["MAEP101"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuPlanejamento[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuPlanejamento[0] += 1; }	
			else if($form["MAEP102"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuPlanejamento[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuPlanejamento[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuPlanejamento[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuPlanejamento[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuPlanejamento[0] += 1; }				
			else if($form["MAEP201"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuPlanejamento[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuPlanejamento[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuPlanejamento[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuPlanejamento[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuPlanejamento[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuPlanejamento[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuPlanejamento[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuPlanejamento[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuPlanejamento[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuOrganizacao[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuOrganizacao[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuOrganizacao[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuOrganizacao[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuOrganizacao[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuOrganizacao[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuOrganizacao[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuOrganizacao[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuOrganizacao[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuOrganizacao[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuDirecao[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuDirecao[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuDirecao[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuDirecao[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuDirecao[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuDirecao[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuDirecao[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuDirecao[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuOrganizacao[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuDirecao[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuDirecao[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuDirecao[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuDirecao[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuDirecao[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuControle[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC102"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuControle[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuControle[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuControle[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuControle[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuControle[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuControle[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuControle[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuControle[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuControle[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuControle[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuControle[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuControle[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuControle[4] += 1; }
		

		}
	}

	$pizza = "      
		google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

    	function drawChart() {

    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuPlanejamento[0]*100)/($cont*10) ."],
        		['Alinhamento Fraco', ".($acuPlanejamento[1]*100)/($cont*10) ."],
        		['Alinhamento Moderado', ". ($acuPlanejamento[2]*100)/($cont*10)."],
        		['Alinhamento Forte', ".($acuPlanejamento[3]*100)/($cont*10) ."],
        		['Alinhamento Total', ". ($acuPlanejamento[4]*100)/($cont*10)."]
        	]);

        	var options = {
        		title: 'Planejamento'
        	};

        	var planejamento = new google.visualization.PieChart(document.getElementById('planejamento'));
        	planejamento.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuOrganizacao[0]*100)/($cont*25) ."],
        		['Alinhamento Fraco', ".($acuOrganizacao[1]*100)/($cont*25) ."],
        		['Alinhamento Moderado', ". ($acuOrganizacao[2]*100)/($cont*25)."],
        		['Alinhamento Forte', ".($acuOrganizacao[3]*100)/($cont*25) ."],
        		['Alinhamento Total', ". ($acuOrganizacao[4]*100)/($cont*25)."]
        	]);

        	var options = {
        		title: 'Organização'
        	};

        	var organizacao = new google.visualization.PieChart(document.getElementById('organizacao'));
        	organizacao.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuDirecao[0]*100)/($cont*15) ."],
        		['Alinhamento Fraco', ".($acuDirecao[1]*100)/($cont*15) ."],
        		['Alinhamento Moderado', ". ($acuDirecao[2]*100)/($cont*15)."],
        		['Alinhamento Forte', ".($acuDirecao[3]*100)/($cont*15) ."],
        		['Alinhamento Total', ". ($acuDirecao[4]*100)/($cont*15)."]
        	]);

        	var options = {
        		title: 'Direção'
        	};

        	var direcao = new google.visualization.PieChart(document.getElementById('direcao'));
        	direcao.draw(data, options);


   		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuControle[0]*100)/($cont*10) ."],
        		['Alinhamento Fraco', ".($acuControle[1]*100)/($cont*10) ."],
        		['Alinhamento Moderado', ". ($acuControle[2]*100)/($cont*10)."],
        		['Alinhamento Forte', ".($acuControle[3]*100)/($cont*10) ."],
        		['Alinhamento Total', ". ($acuControle[4]*100)/($cont*10)."]
        	]);

        	var options = {
        		title: 'Controle'
        	};

        	var controle = new google.visualization.PieChart(document.getElementById('controle'));
        	controle.draw(data, options);

      }

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Funções Administrativas', 'Alinhamento Inexistente', 'Alinhamento Fraco', 'Alinhamento Moderado', 'Alinhamento Forte', 'Alinhamento Total'],
          ['Planejamento',".($acuPlanejamento[0]*100)/($cont*10).",". ($acuPlanejamento[1]*100)/($cont*10).",". ($acuPlanejamento[2]*100)/($cont*10).",".($acuPlanejamento[3]*100)/($cont*10) .",".($acuPlanejamento[4]*100)/($cont*10) ."],
          ['Organização',".($acuOrganizacao[0]*100)/($cont*25) .",".($acuOrganizacao[1]*100)/($cont*25) .",". ($acuOrganizacao[2]*100)/($cont*25).",". ($acuOrganizacao[3]*100)/($cont*25).",". ($acuOrganizacao[4]*100)/($cont*25)."],
          ['Direção',".($acuDirecao[0]*100)/($cont*15) .",".($acuDirecao[1]*100)/($cont*15) .",".($acuDirecao[2]*100)/($cont*15) .",". ($acuDirecao[3]*100)/($cont*15).",". ($acuDirecao[4]*100)/($cont*15)."],
          ['Controle',".($acuControle[0]*100)/($cont*10) .",". ($acuControle[1]*100)/($cont*10).",".($acuControle[2]*100)/($cont*10) .",". ($acuControle[3]*100)/($cont*10).",". ($acuControle[4]*100)/($cont*10)."]
        ]);

        var options = {
          chart: {
            title: 'Alinhamento por Funções Administrativas em Percentual (%)',
            subtitle: 'Alinhamento Inexistente, Alinhamento Fraco, Alinhamento Moderado, Alinhamento Forte, Alinhamento Total',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var func = new google.charts.Bar(document.getElementById('graphbar'));

        func.draw(data, google.charts.Bar.convertOptions(options));
      }


	";

    $html_string = file_get_contents("pages/relatorio-template-funcadm.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;


#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 5){
	$cont = 0;

	$acuEstrategica = array(0,0,0,0,0);
	$acuCultural = array(0,0,0,0,0);
	$acuSocial = array(0,0,0,0,0);
	$acuEstrutural = array(0,0,0,0,0);

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
			$cont += 1;

			if($form["MAEP101"] == 1) {
				$acuEstrategica[0] += 1;
				$acuCultural[0] += 1;
			}
			else if($form["MAEP101"] == 2) {
				$acuEstrategica[1] += 1;  
				$acuCultural[1] += 1;
			}
			else if($form["MAEP101"] == 3) {
				$acuEstrategica[2] += 1;  
				$acuCultural[2] += 1;
			}
			else if($form["MAEP101"] == 4) {
				$acuEstrategica[3] += 1;
				$acuCultural[3] += 1;
			}
			else if($form["MAEP101"] == 5) {
				$acuEstrategica[4] += 1;  
				$acuCultural[4] += 1;	
			}


			if($form["MAEP102"] == 1) {
				$acuEstrategica[0] += 1;  
				$acuCultural[0] += 1;

			}
			else if($form["MAEP102"] == 2) {
				$acuEstrategica[1] += 1;  
				$acuCultural[1] += 1;
			}
			else if($form["MAEP102"] == 3) {
				$acuEstrategica[2] += 1;  
				$acuCultural[2] += 1;
			}
			else if($form["MAEP102"] == 4) {
				$acuEstrategica[3] += 1;  
				$acuCultural[3] += 1;
			}
			else if($form["MAEP102"] == 5) {
				$acuEstrategica[4] += 1;  
				$acuCultural[4] += 1;
			}

			if($form["MAEP103"] == 1) {
				$acuEstrategica[0] += 1;  
				$acuCultural[0] += 1;
			}
			else if($form["MAEP103"] == 2) {
				$acuEstrategica[1] += 1;  
				$acuCultural[1] += 1;
			}
			else if($form["MAEP103"] == 3) {
				$acuEstrategica[2] += 1;  
				$acuCultural[2] += 1;
			}
			else if($form["MAEP103"] == 4) {
				$acuEstrategica[3] += 1;  
				$acuCultural[3] += 1;
			}
			else if($form["MAEP103"] == 5) {
				$acuEstrategica[4] += 1;  
				$acuCultural[4] += 1;
			}


			if($form["MAEP104"] == 1) {
				$acuEstrategica[0] += 1;  
				$acuSocial[0] += 1;
			}
			else if($form["MAEP104"] == 2) {
				$acuEstrategica[1] += 1;  
				$acuSocial[1] += 1;
			}
			else if($form["MAEP104"] == 3) {
				$acuEstrategica[2] += 1;  
				$acuSocial[2] += 1;
			}
			else if($form["MAEP104"] == 4) {
				$acuEstrategica[3] += 1;  
				$acuSocial[3] += 1;
			}
			else if($form["MAEP104"] == 5) {
				$acuEstrategica[4] += 1;  
				$acuSocial[4] += 1;
			}

			if($form["MAEP105"] == 1) {
				$acuEstrategica[0] += 1;  
				#$acuCultural[0] += 1;
			}
			else if($form["MAEP105"] == 2) {
				$acuEstrategica[1] += 1;  
				#$acuCultural[1] += 1;
			}
			else if($form["MAEP105"] == 3) {
				$acuEstrategica[2] += 1;  
				#$acuCultural[2] += 1;
			}
			else if($form["MAEP105"] == 4) {
				$acuEstrategica[3] += 1;  
				#$acuCultural[3] += 1;
			}
			else if($form["MAEP105"] == 5) {
				$acuEstrategica[4] += 1;  
				#$acuCultural[4] += 1;
			}


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuEstrategica[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEP201"] == 2) {
				$acuEstrategica[1] += 1;  $acuCultural[1] += 1;}
			else if($form["MAEP201"] == 3) {
				$acuEstrategica[2] += 1; $acuCultural[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuEstrategica[3] += 1; $acuCultural[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuEstrategica[4] += 1; $acuCultural[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuEstrategica[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEP202"] == 2) {
				$acuEstrategica[1] += 1; $acuCultural[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuEstrategica[2] += 1; $acuCultural[2] += 1;}
			else if($form["MAEP202"] == 4) {
				$acuEstrategica[3] += 1; $acuCultural[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuEstrategica[4] += 1; $acuCultural[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuEstrategica[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEP203"] == 2) {
				$acuEstrategica[1] += 1; $acuCultural[1] += 1;}
			else if($form["MAEP203"] == 3) {
				$acuEstrategica[2] += 1; $acuCultural[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuEstrategica[3] += 1; $acuCultural[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuEstrategica[4] += 1; $acuCultural[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuEstrategica[0] += 1; $acuSocial[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuEstrategica[1] += 1; $acuSocial[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuEstrategica[2] += 1; $acuSocial[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuEstrategica[3] += 1; $acuSocial[3] += 1;}
			else if($form["MAEP204"] == 5) {
				$acuEstrategica[4] += 1; $acuSocial[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuEstrategica[0] += 1;  }
			else if($form["MAEP205"] == 2) {
				$acuEstrategica[1] += 1;  }
			else if($form["MAEP205"] == 3) {
				$acuEstrategica[2] += 1;  }
			else if($form["MAEP205"] == 4) {
				$acuEstrategica[3] += 1;  }
			else if($form["MAEP205"] == 5) {
				$acuEstrategica[4] += 1;  }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO101"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO101"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO101"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO101"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO102"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO102"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO102"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO102"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO102"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEO103"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO103"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO103"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO103"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO103"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO104"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEO104"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEO104"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEO104"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEO104"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEO105"] == 1) {
				$acuEstrutural[0] += 1;  }
			else if($form["MAEO105"] == 2) {
				$acuEstrutural[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuEstrutural[2] += 1;  }
			else if($form["MAEO105"] == 4) {
				$acuEstrutural[3] += 1;  }
			else if($form["MAEO105"] == 5) {
				$acuEstrutural[4] += 1;  }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO201"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO201"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO201"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO201"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO202"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO202"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO202"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO202"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO202"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEO203"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO203"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO203"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO203"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO203"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO204"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEO204"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEO204"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEO204"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEO204"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEO205"] == 1) {
				$acuEstrutural[0] += 1;  }
			else if($form["MAEO205"] == 2) {
				$acuEstrutural[1] += 1;  }
			else if($form["MAEO205"] == 3) {
				$acuEstrutural[2] += 1;  }
			else if($form["MAEO205"] == 4) {
				$acuEstrutural[3] += 1;  }
			else if($form["MAEO205"] == 5) {
				$acuEstrutural[4] += 1;  }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO301"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO301"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO301"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO301"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO302"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO302"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO302"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO302"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO302"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEO303"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO303"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO303"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO303"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO303"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO304"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEO304"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEO304"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEO304"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEO304"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEO305"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO305"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO305"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO305"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO305"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1; $acuCultural[4] += 1;  }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO401"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO401"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO401"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO401"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO402"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO402"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO402"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO402"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO402"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEO403"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO403"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO403"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO403"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO403"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO404"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEO404"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEO404"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEO404"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEO404"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEO405"] == 1) {
				$acuEstrutural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAEO405"] == 2) {
				$acuEstrutural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAEO405"] == 3) {
				$acuEstrutural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAEO405"] == 4) {
				$acuEstrutural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAEO405"] == 5) {
				$acuEstrutural[4] += 1; $acuEstrategica[4] += 1;  }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO501"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO501"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO501"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO501"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO502"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO502"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO502"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO502"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO502"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEO503"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEO503"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEO503"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEO503"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEO503"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEO504"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEO504"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEO504"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEO504"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEO504"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEO505"] == 1) {
				$acuEstrutural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAEO505"] == 2) {
				$acuEstrutural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAEO505"] == 3) {
				$acuEstrutural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAEO505"] == 4) {
				$acuEstrutural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAEO505"] == 5) {
				$acuEstrutural[4] += 1; $acuEstrategica[4] += 1;  }



################################################################################

			if($form["MAED101"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED101"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED101"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED101"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED101"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAED102"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED102"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED102"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED102"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED102"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAED103"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED103"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED103"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED103"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED103"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAED104"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED104"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED104"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED104"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED104"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAED105"] == 1) {
				$acuEstrutural[0] += 1;  }
			else if($form["MAED105"] == 2) {
				$acuEstrutural[1] += 1;  }
			else if($form["MAED105"] == 3) {
				$acuEstrutural[2] += 1;  }
			else if($form["MAED105"] == 4) {
				$acuEstrutural[3] += 1;  }
			else if($form["MAED105"] == 5) {
				$acuEstrutural[4] += 1;  }



################################################################################

			if($form["MAED201"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED201"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED201"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED201"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED201"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAED202"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED202"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED202"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED202"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED202"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAED203"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED203"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED203"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED203"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED203"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAED204"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAED204"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAED204"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAED204"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAED204"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAED205"] == 1) {
				$acuEstrutural[0] += 1;  }
			else if($form["MAED205"] == 2) {
				$acuEstrutural[1] += 1;  }
			else if($form["MAED205"] == 3) {
				$acuEstrutural[2] += 1;  }
			else if($form["MAED205"] == 4) {
				$acuEstrutural[3] += 1;  }
			else if($form["MAED205"] == 5) {
				$acuEstrutural[4] += 1;  }



################################################################################

			if($form["MAED301"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAED301"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAED301"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAED301"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAED301"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1; $acuEstrategica[4] += 1;  }


			if($form["MAED302"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAED302"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAED302"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAED302"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAED302"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1; $acuEstrategica[4] += 1;  }

			if($form["MAED303"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAED303"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAED303"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAED303"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAED303"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1; $acuEstrategica[4] += 1;  }


			if($form["MAED304"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1; $acuEstrategica[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAED304"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1; $acuEstrategica[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAED304"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1; $acuEstrategica[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAED304"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1; $acuEstrategica[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAED304"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1; $acuEstrategica[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAED305"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1; $acuEstrategica[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAED305"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1; $acuEstrategica[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAED305"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1; $acuEstrategica[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAED305"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1; $acuEstrategica[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAED305"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1; $acuEstrategica[4] += 1; $acuSocial[4] += 1;  }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEC101"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC101"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC101"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC101"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEC102"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  } 
			else if($form["MAEC102"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC102"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC102"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC102"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEC103"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEC103"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC103"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC103"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC103"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEC104"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEC104"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEC104"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEC104"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEC104"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEC105"] == 1) {
				$acuEstrutural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAEC105"] == 2) {
				$acuEstrutural[1] += 1; $acuEstrategica[1] += 1;  }
			else if($form["MAEC105"] == 3) {
				$acuEstrutural[2] += 1; $acuEstrategica[2] += 1;  }
			else if($form["MAEC105"] == 4) {
				$acuEstrutural[3] += 1; $acuEstrategica[3] += 1;  }
			else if($form["MAEC105"] == 5) {
				$acuEstrutural[4] += 1; $acuEstrategica[4] += 1;  }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEC201"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC201"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC201"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC201"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEC202"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEC202"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC202"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC202"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC202"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }

			if($form["MAEC203"] == 1) {
				$acuEstrutural[0] += 1; $acuCultural[0] += 1;  }
			else if($form["MAEC203"] == 2) {
				$acuEstrutural[1] += 1; $acuCultural[1] += 1;  }
			else if($form["MAEC203"] == 3) {
				$acuEstrutural[2] += 1; $acuCultural[2] += 1;  }
			else if($form["MAEC203"] == 4) {
				$acuEstrutural[3] += 1; $acuCultural[3] += 1;  }
			else if($form["MAEC203"] == 5) {
				$acuEstrutural[4] += 1; $acuCultural[4] += 1;  }


			if($form["MAEC204"] == 1) {
				$acuEstrutural[0] += 1; $acuSocial[0] += 1;  }
			else if($form["MAEC204"] == 2) {
				$acuEstrutural[1] += 1; $acuSocial[1] += 1;  }
			else if($form["MAEC204"] == 3) {
				$acuEstrutural[2] += 1; $acuSocial[2] += 1;  }
			else if($form["MAEC204"] == 4) {
				$acuEstrutural[3] += 1; $acuSocial[3] += 1;  }
			else if($form["MAEC204"] == 5) {
				$acuEstrutural[4] += 1; $acuSocial[4] += 1;  }

			if($form["MAEC205"] == 1) {
				$acuEstrutural[0] += 1; $acuEstrategica[0] += 1;  }
			else if($form["MAEC205"] == 2) {
				$acuEstrutural[1] += 1; $acuEstrategica[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuEstrutural[2] += 1; $acuEstrategica[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuEstrutural[3] += 1; $acuEstrategica[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuEstrutural[4] += 1; $acuEstrategica[4] += 1; }
			}
		}


/*
        		['Alinhamento Inexistente', ".($acuTINegocio[0]*100)/($cont*25) ."],
        		['Alinhamento Fraco', ".($acuTINegocio[1]*100)/($cont*25) ."],
        		['Alinhamento Moderado', ". ($acuTINegocio[2]*100)/($cont*25)."],
        		['Alinhamento Forte', ".($acuTINegocio[3]*100)/($cont*25) ."],
        		['Alinhamento Total', ". ($acuTINegocio[4]*100)/($cont*25)."]

*/


	$pizza = "      
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dimensões', 'Alinhamento Inexistente', 'Alinhamento Fraco', 'Alinhamento Moderado', 'Alinhamento Forte', 'Alinhamento Total'],
          ['Estratégica',".($acuEstrategica[0]*100)/($cont*19).",". ($acuEstrategica[1]*100)/($cont*19).",". ($acuEstrategica[2]*100)/($cont*19).",".($acuEstrategica[3]*100)/($cont*19) .",".($acuEstrategica[4]*100)/($cont*19) ."],
          ['Cultural',".($acuCultural[0]*100)/($cont*41) .",".($acuCultural[1]*100)/($cont*41) .",". ($acuCultural[2]*100)/($cont*41).",". ($acuCultural[3]*100)/($cont*41).",". ($acuCultural[4]*100)/($cont*41)."],
          ['Social',".($acuSocial[0]*100)/($cont*12) .",".($acuSocial[1]*100)/($cont*12) .",".($acuSocial[2]*100)/($cont*12) .",". ($acuSocial[3]*100)/($cont*12).",". ($acuSocial[4]*100)/($cont*12)."],
          ['Estrutural',".($acuEstrutural[0]*100)/($cont*50) .",". ($acuEstrutural[1]*100)/($cont*50).",".($acuEstrutural[2]*100)/($cont*50) .",". ($acuEstrutural[3]*100)/($cont*50).",". ($acuEstrutural[4]*100)/($cont*50)."]
        ]);

        var options = {
          chart: {
            title: 'Alinhamento por Dimensões em Percentual (%)',
            subtitle: 'Alinhamento Inexistente, Alinhamento Fraco, Alinhamento Moderado, Alinhamento Forte, Alinhamento Total',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var dimensoes = new google.charts.Bar(document.getElementById('dimensao'));

        dimensoes.draw(data, google.charts.Bar.convertOptions(options));
      }
        ";

    $html_string = file_get_contents("pages/relatorio-template-dimensao.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;





#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 6){

	$cont = 0;

	$acuObjTI = array(0,0,0,0,0);
	$acuObjNegocio = array(0,0,0,0,0);
	$acuGesTI = array(0,0,0,0,0);
	$acuGesNegocio = array(0,0,0,0,0);
	$acuInfraTI = array(0,0,0,0,0);
	$acuInfraNegocio = array(0,0,0,0,0);
	$acuProcTI = array(0,0,0,0,0);
	$acuProcNegocio = array(0,0,0,0,0);



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
				$acuObjTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuObjTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuObjTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuObjTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuObjTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuObjTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuObjTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuObjTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuObjTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuObjTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuObjTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuObjTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuObjTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuObjTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuObjTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuObjTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuObjTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuObjTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuObjTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuObjTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuObjTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuObjTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuObjTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuObjTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuObjTI[4] += 1; $acuObjNegocio[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuObjNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuObjNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuObjNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuObjNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuObjNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuObjNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuObjNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuObjNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuObjNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuObjNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuObjNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuObjNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuObjNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuObjNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuObjNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuObjNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuObjNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuObjNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuObjNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuObjNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuObjNegocio[0] += 1; $acuObjTI[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuObjNegocio[1] += 1; $acuObjTI[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuObjNegocio[2] += 1; $acuObjTI[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuObjNegocio[3] += 1; $acuObjTI[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuObjNegocio[4] += 1; $acuObjTI[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuObjTI[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuObjTI[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuObjTI[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuObjTI[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuObjTI[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuProcTI[0] += 1; $acuObjTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuProcTI[1] += 1; $acuObjTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuProcTI[2] += 1; $acuObjTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuProcTI[3] += 1; $acuObjTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuProcTI[4] += 1; $acuObjTI[4] += 1; $acuObjNegocio[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuObjNegocio[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuProcNegocio[0] += 1; $acuProcTI[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuProcNegocio[1] += 1; $acuProcTI[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuProcNegocio[2] += 1; $acuProcTI[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuProcNegocio[3] += 1; $acuProcTI[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuProcNegocio[4] += 1; $acuProcTI[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuObjTI[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuObjTI[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuObjTI[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuObjTI[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuObjTI[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuInfraNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuInfraNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuInfraNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuInfraNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuInfraNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuInfraNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuInfraNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuInfraNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuInfraNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuInfraNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuInfraNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuInfraNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuInfraNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuInfraNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuInfraNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuInfraNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuInfraNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuInfraNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuInfraNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuInfraNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuInfraNegocio[0] += 1; $acuProcTI[0] += 1; $acuObjTI[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuInfraNegocio[1] += 1; $acuProcTI[1] += 1; $acuObjTI[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuInfraNegocio[2] += 1; $acuProcTI[2] += 1; $acuObjTI[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuInfraNegocio[3] += 1; $acuProcTI[3] += 1; $acuObjTI[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuInfraNegocio[4] += 1; $acuProcTI[4] += 1; $acuObjTI[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuInfraTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuInfraTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuInfraTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuInfraTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuInfraTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuInfraTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuInfraTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuInfraTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuInfraTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuInfraTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuInfraTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuInfraTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuInfraTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuInfraTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuInfraTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuInfraTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuInfraTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuInfraTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuInfraTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuInfraTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuInfraTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuInfraTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuInfraTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuInfraTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuInfraTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuObjNegocio[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuObjNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuObjNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuObjNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuObjNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuObjNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuObjNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuObjNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuObjNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuObjNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuObjNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuObjNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuObjNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuObjNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuObjNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuObjNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuObjNegocio[0] += 1; $acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuObjNegocio[1] += 1; $acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuObjNegocio[2] += 1; $acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuObjNegocio[3] += 1; $acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuObjNegocio[4] += 1; $acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuObjNegocio[0] += 1; $acuProcTI[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuObjNegocio[1] += 1; $acuProcTI[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuObjNegocio[2] += 1; $acuProcTI[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuObjNegocio[3] += 1; $acuProcTI[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuObjNegocio[4] += 1; $acuProcTI[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuObjTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuObjTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuObjTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuObjTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuObjTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuObjTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuObjTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuObjTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuObjTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuObjTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuObjTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuObjTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuObjTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuObjTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuObjTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuObjTI[0] += 1; $acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuObjTI[1] += 1; $acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuObjTI[2] += 1; $acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuObjTI[3] += 1; $acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuObjTI[4] += 1; $acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuObjTI[0] += 1; $acuProcNegocio[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuObjTI[1] += 1; $acuProcNegocio[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuObjTI[2] += 1; $acuProcNegocio[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuObjTI[3] += 1; $acuProcNegocio[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuObjTI[4] += 1; $acuProcNegocio[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuProcTI[0] += 1; $acuGesNegocio[0] += 1; $acuGesTI[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuProcTI[1] += 1; $acuGesNegocio[1] += 1; $acuGesTI[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuProcTI[2] += 1; $acuGesNegocio[2] += 1; $acuGesTI[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuProcTI[3] += 1; $acuGesNegocio[3] += 1; $acuGesTI[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuProcTI[4] += 1; $acuGesNegocio[4] += 1; $acuGesTI[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuProcTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuProcTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuProcTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuProcTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuProcTI[4] += 1; $acuObjNegocio[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuGesNegocio[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuGesNegocio[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuGesNegocio[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuGesNegocio[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuGesNegocio[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuProcNegocio[0] += 1; $acuGesTI[0] += 1; $acuObjNegocio[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuProcNegocio[1] += 1; $acuGesTI[1] += 1; $acuObjNegocio[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuProcNegocio[2] += 1; $acuGesTI[2] += 1; $acuObjNegocio[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuProcNegocio[3] += 1; $acuGesTI[3] += 1; $acuObjNegocio[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuProcNegocio[4] += 1; $acuGesTI[4] += 1; $acuObjNegocio[4] += 1; }			
		
			}
		}


	$pizza = "      
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Recursos', 'Alinhamento Inexistente', 'Alinhamento Fraco', 'Alinhamento Moderado', 'Alinhamento Forte', 'Alinhamento Total'],
          ['Objetivos de Negócios',".($acuObjNegocio[0]*100)/($cont*16).",". ($acuObjNegocio[1]*100)/($cont*16).",". ($acuObjNegocio[2]*100)/($cont*16).",".($acuObjNegocio[3]*100)/($cont*16) .",".($acuObjNegocio[4]*100)/($cont*16) ."],
          ['Objetivos de TI',".($acuObjTI[0]*100)/($cont*15) .",".($acuObjTI[1]*100)/($cont*15) .",". ($acuObjTI[2]*100)/($cont*15).",". ($acuObjTI[3]*100)/($cont*15).",". ($acuObjTI[4]*100)/($cont*15)."],
          ['Gestores de Negócios',".($acuGesNegocio[0]*100)/($cont*38) .",".($acuGesNegocio[1]*100)/($cont*38) .",".($acuGesNegocio[2]*100)/($cont*38) .",". ($acuGesNegocio[3]*100)/($cont*38).",". ($acuGesNegocio[4]*100)/($cont*38)."],
          ['Gestores de TI',".($acuGesTI[0]*100)/($cont*36) .",". ($acuGesTI[1]*100)/($cont*36).",".($acuGesTI[2]*100)/($cont*36) .",". ($acuGesTI[3]*100)/($cont*36).",". ($acuGesTI[4]*100)/($cont*36)."],
          ['Infraestrutura de Negócios',".($acuInfraNegocio[0]*100)/($cont*5) .",". ($acuInfraNegocio[1]*100)/($cont*5).",".($acuInfraNegocio[2]*100)/($cont*5) .",". ($acuInfraNegocio[3]*100)/($cont*5).",". ($acuInfraNegocio[4]*100)/($cont*5)."],
          ['Infraestrutura de TI',".($acuInfraTI[0]*100)/($cont*5) .",". ($acuInfraTI[1]*100)/($cont*5).",".($acuInfraTI[2]*100)/($cont*5) .",". ($acuInfraTI[3]*100)/($cont*5).",". ($acuInfraTI[4]*100)/($cont*5)."],
          ['Processos de Negócios',".($acuProcNegocio[0]*100)/($cont*20) .",". ($acuProcNegocio[1]*100)/($cont*20).",".($acuProcNegocio[2]*100)/($cont*20) .",". ($acuProcNegocio[3]*100)/($cont*20).",". ($acuProcNegocio[4]*100)/($cont*20)."],
          ['Processos de TI',".($acuProcTI[0]*100)/($cont*31) .",". ($acuProcTI[1]*100)/($cont*31).",".($acuProcTI[2]*100)/($cont*31) .",". ($acuProcTI[3]*100)/($cont*31).",". ($acuProcTI[4]*100)/($cont*31)."]
        ]);

        var options = {
          chart: {
            title: 'Alinhamento por Recursos em Percentual (%)',
            subtitle: 'Alinhamento Inexistente, Alinhamento Fraco, Alinhamento Moderado, Alinhamento Forte, Alinhamento Total',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var recurso = new google.charts.Bar(document.getElementById('recurso'));

        recurso.draw(data, google.charts.Bar.convertOptions(options));
      }
        ";

    $html_string = file_get_contents("pages/relatorio-template-recurso.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;



#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 7){

	$cont = 0;

	$acuP1 = array(0,0,0,0,0);
	$acuP2 = array(0,0,0,0,0);

	$acuO1 = array(0,0,0,0,0);
	$acuO2 = array(0,0,0,0,0);
	$acuO3 = array(0,0,0,0,0);
	$acuO4 = array(0,0,0,0,0);
	$acuO5 = array(0,0,0,0,0);

	$acuD1 = array(0,0,0,0,0);
	$acuD2 = array(0,0,0,0,0);
	$acuD3 = array(0,0,0,0,0);

	$acuC1 = array(0,0,0,0,0);
	$acuC2 = array(0,0,0,0,0);

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
			$cont += 1;

			if($form["MAEP101"] == 1) {
				$acuP1[0] += 1; }
			else if($form["MAEP101"] == 2) {
				$acuP1[1] += 1; }
			else if($form["MAEP101"] == 3) {
				$acuP1[2] += 1; }
			else if($form["MAEP101"] == 4) {
				$acuP1[3] += 1; }
			else if($form["MAEP101"] == 5) {
				$acuP1[4] += 1; }


			if($form["MAEP102"] == 1) {
				$acuP1[0] += 1; }
			else if($form["MAEP102"] == 2) {
				$acuP1[1] += 1; }
			else if($form["MAEP102"] == 3) {
				$acuP1[2] += 1; }
			else if($form["MAEP102"] == 4) {
				$acuP1[3] += 1; }
			else if($form["MAEP102"] == 5) {
				$acuP1[4] += 1; }

			if($form["MAEP103"] == 1) {
				$acuP1[0] += 1; }
			else if($form["MAEP103"] == 2) {
				$acuP1[1] += 1; }
			else if($form["MAEP103"] == 3) {
				$acuP1[2] += 1; }
			else if($form["MAEP103"] == 4) {
				$acuP1[3] += 1; }
			else if($form["MAEP103"] == 5) {
				$acuP1[4] += 1; }


			if($form["MAEP104"] == 1) {
				$acuP1[0] += 1; }
			else if($form["MAEP104"] == 2) {
				$acuP1[1] += 1; }
			else if($form["MAEP104"] == 3) {
				$acuP1[2] += 1; }
			else if($form["MAEP104"] == 4) {
				$acuP1[3] += 1; }
			else if($form["MAEP104"] == 5) {
				$acuP1[4] += 1; }

			if($form["MAEP105"] == 1) {
				$acuP1[0] += 1; }
			else if($form["MAEP105"] == 2) {
				$acuP1[1] += 1; }
			else if($form["MAEP105"] == 3) {
				$acuP1[2] += 1; }
			else if($form["MAEP105"] == 4) {
				$acuP1[3] += 1; }
			else if($form["MAEP105"] == 5) {
				$acuP1[4] += 1; }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuP2[0] += 1; }
			else if($form["MAEP201"] == 2) {
				$acuP2[1] += 1; }
			else if($form["MAEP201"] == 3) {
				$acuP2[2] += 1; }
			else if($form["MAEP201"] == 4) {
				$acuP2[3] += 1; }
			else if($form["MAEP201"] == 5) {
				$acuP2[4] += 1; }


			if($form["MAEP202"] == 1) {
				$acuP2[0] += 1; }
			else if($form["MAEP202"] == 2) {
				$acuP2[1] += 1; }
			else if($form["MAEP202"] == 3) {
				$acuP2[2] += 1; }
			else if($form["MAEP202"] == 4) {
				$acuP2[3] += 1; }
			else if($form["MAEP202"] == 5) {
				$acuP2[4] += 1; }

			if($form["MAEP203"] == 1) {
				$acuP2[0] += 1; }
			else if($form["MAEP203"] == 2) {
				$acuP2[1] += 1; }
			else if($form["MAEP203"] == 3) {
				$acuP2[2] += 1; }
			else if($form["MAEP203"] == 4) {
				$acuP2[3] += 1; }
			else if($form["MAEP203"] == 5) {
				$acuP2[4] += 1; }


			if($form["MAEP204"] == 1) {
				$acuP2[0] += 1; }
			else if($form["MAEP204"] == 2) {
				$acuP2[1] += 1; }
			else if($form["MAEP204"] == 3) {
				$acuP2[2] += 1; }
			else if($form["MAEP204"] == 4) {
				$acuP2[3] += 1; }
			else if($form["MAEP204"] == 5) {
				$acuP2[4] += 1; }

			if($form["MAEP205"] == 1) {
				$acuP2[0] += 1; }
			else if($form["MAEP205"] == 2) {
				$acuP2[1] += 1; }
			else if($form["MAEP205"] == 3) {
				$acuP2[2] += 1; }
			else if($form["MAEP205"] == 4) {
				$acuP2[3] += 1; }
			else if($form["MAEP205"] == 5) {
				$acuP2[4] += 1; }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuO1[0] += 1; }
			else if($form["MAEO101"] == 2) {
				$acuO1[1] += 1; }
			else if($form["MAEO101"] == 3) {
				$acuO1[2] += 1; }
			else if($form["MAEO101"] == 4) {
				$acuO1[3] += 1; }
			else if($form["MAEO101"] == 5) {
				$acuO1[4] += 1; }


			if($form["MAEO102"] == 1) {
				$acuO1[0] += 1; }
			else if($form["MAEO102"] == 2) {
				$acuO1[1] += 1; }
			else if($form["MAEO102"] == 3) {
				$acuO1[2] += 1; }
			else if($form["MAEO102"] == 4) {
				$acuO1[3] += 1; }
			else if($form["MAEO102"] == 5) {
				$acuO1[4] += 1; }

			if($form["MAEO103"] == 1) {
				$acuO1[0] += 1; }
			else if($form["MAEO103"] == 2) {
				$acuO1[1] += 1; }
			else if($form["MAEO103"] == 3) {
				$acuO1[2] += 1; }
			else if($form["MAEO103"] == 4) {
				$acuO1[3] += 1; }
			else if($form["MAEO103"] == 5) {
				$acuO1[4] += 1; }


			if($form["MAEO104"] == 1) {
				$acuO1[0] += 1; }
			else if($form["MAEO104"] == 2) {
				$acuO1[1] += 1; }
			else if($form["MAEO104"] == 3) {
				$acuO1[2] += 1; }
			else if($form["MAEO104"] == 4) {
				$acuO1[3] += 1; }
			else if($form["MAEO104"] == 5) {
				$acuO1[4] += 1; }

			if($form["MAEO105"] == 1) {
				$acuO1[0] += 1; }
			else if($form["MAEO105"] == 2) {
				$acuO1[1] += 1; }
			else if($form["MAEO105"] == 3) {
				$acuO1[2] += 1; }
			else if($form["MAEO105"] == 4) {
				$acuO1[3] += 1; }
			else if($form["MAEO105"] == 5) {
				$acuO1[4] += 1; }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuO2[0] += 1; }
			else if($form["MAEO201"] == 2) {
				$acuO2[1] += 1; }
			else if($form["MAEO201"] == 3) {
				$acuO2[2] += 1; }
			else if($form["MAEO201"] == 4) {
				$acuO2[3] += 1; }
			else if($form["MAEO201"] == 5) {
				$acuO2[4] += 1; }


			if($form["MAEO202"] == 1) {
				$acuO2[0] += 1; }
			else if($form["MAEO202"] == 2) {
				$acuO2[1] += 1; }
			else if($form["MAEO202"] == 3) {
				$acuO2[2] += 1; }
			else if($form["MAEO202"] == 4) {
				$acuO2[3] += 1; }
			else if($form["MAEO202"] == 5) {
				$acuO2[4] += 1; }

			if($form["MAEO203"] == 1) {
				$acuO2[0] += 1; }
			else if($form["MAEO203"] == 2) {
				$acuO2[1] += 1; }
			else if($form["MAEO203"] == 3) {
				$acuO2[2] += 1; }
			else if($form["MAEO203"] == 4) {
				$acuO2[3] += 1; }
			else if($form["MAEO203"] == 5) {
				$acuO2[4] += 1; }


			if($form["MAEO204"] == 1) {
				$acuO2[0] += 1; }
			else if($form["MAEO204"] == 2) {
				$acuO2[1] += 1; }
			else if($form["MAEO204"] == 3) {
				$acuO2[2] += 1; }
			else if($form["MAEO204"] == 4) {
				$acuO2[3] += 1; }
			else if($form["MAEO204"] == 5) {
				$acuO2[4] += 1; }

			if($form["MAEO205"] == 1) {
				$acuO2[0] += 1; }
			else if($form["MAEO205"] == 2) {
				$acuO2[1] += 1; }
			else if($form["MAEO205"] == 3) {
				$acuO2[2] += 1; }
			else if($form["MAEO205"] == 4) {
				$acuO2[3] += 1; }
			else if($form["MAEO205"] == 5) {
				$acuO2[4] += 1; }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuO3[0] += 1; }
			else if($form["MAEO301"] == 2) {
				$acuO3[1] += 1; }
			else if($form["MAEO301"] == 3) {
				$acuO3[2] += 1; }
			else if($form["MAEO301"] == 4) {
				$acuO3[3] += 1; }
			else if($form["MAEO301"] == 5) {
				$acuO3[4] += 1; }


			if($form["MAEO302"] == 1) {
				$acuO3[0] += 1; }
			else if($form["MAEO302"] == 2) {
				$acuO3[1] += 1; }
			else if($form["MAEO302"] == 3) {
				$acuO3[2] += 1; }
			else if($form["MAEO302"] == 4) {
				$acuO3[3] += 1; }
			else if($form["MAEO302"] == 5) {
				$acuO3[4] += 1; }

			if($form["MAEO303"] == 1) {
				$acuO3[0] += 1; }
			else if($form["MAEO303"] == 2) {
				$acuO3[1] += 1; }
			else if($form["MAEO303"] == 3) {
				$acuO3[2] += 1; }
			else if($form["MAEO303"] == 4) {
				$acuO3[3] += 1; }
			else if($form["MAEO303"] == 5) {
				$acuO3[4] += 1; }


			if($form["MAEO304"] == 1) {
				$acuO3[0] += 1; }
			else if($form["MAEO304"] == 2) {
				$acuO3[1] += 1; }
			else if($form["MAEO304"] == 3) {
				$acuO3[2] += 1; }
			else if($form["MAEO304"] == 4) {
				$acuO3[3] += 1; }
			else if($form["MAEO304"] == 5) {
				$acuO3[4] += 1; }

			if($form["MAEO305"] == 1) {
				$acuO3[0] += 1; }
			else if($form["MAEO305"] == 2) {
				$acuO3[1] += 1; }
			else if($form["MAEO305"] == 3) {
				$acuO3[2] += 1; }
			else if($form["MAEO305"] == 4) {
				$acuO3[3] += 1; }
			else if($form["MAEO305"] == 5) {
				$acuO3[4] += 1; }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuO4[0] += 1; }
			else if($form["MAEO401"] == 2) {
				$acuO4[1] += 1; }
			else if($form["MAEO401"] == 3) {
				$acuO4[2] += 1; }
			else if($form["MAEO401"] == 4) {
				$acuO4[3] += 1; }
			else if($form["MAEO401"] == 5) {
				$acuO4[4] += 1; }


			if($form["MAEO402"] == 1) {
				$acuO4[0] += 1; }
			else if($form["MAEO402"] == 2) {
				$acuO4[1] += 1; }
			else if($form["MAEO402"] == 3) {
				$acuO4[2] += 1; }
			else if($form["MAEO402"] == 4) {
				$acuO4[3] += 1; }
			else if($form["MAEO402"] == 5) {
				$acuO4[4] += 1; }

			if($form["MAEO403"] == 1) {
				$acuO4[0] += 1; }
			else if($form["MAEO403"] == 2) {
				$acuO4[1] += 1; }
			else if($form["MAEO403"] == 3) {
				$acuO4[2] += 1; }
			else if($form["MAEO403"] == 4) {
				$acuO4[3] += 1; }
			else if($form["MAEO403"] == 5) {
				$acuO4[4] += 1; }


			if($form["MAEO404"] == 1) {
				$acuO4[0] += 1; }
			else if($form["MAEO404"] == 2) {
				$acuO4[1] += 1; }
			else if($form["MAEO404"] == 3) {
				$acuO4[2] += 1; }
			else if($form["MAEO404"] == 4) {
				$acuO4[3] += 1; }
			else if($form["MAEO404"] == 5) {
				$acuO4[4] += 1; }

			if($form["MAEO405"] == 1) {
				$acuO4[0] += 1; }
			else if($form["MAEO405"] == 2) {
				$acuO4[1] += 1; }
			else if($form["MAEO405"] == 3) {
				$acuO4[2] += 1; }
			else if($form["MAEO405"] == 4) {
				$acuO4[3] += 1; }
			else if($form["MAEO405"] == 5) {
				$acuO4[4] += 1; }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuO5[0] += 1; }
			else if($form["MAEO501"] == 2) {
				$acuO5[1] += 1; }
			else if($form["MAEO501"] == 3) {
				$acuO5[2] += 1; }
			else if($form["MAEO501"] == 4) {
				$acuO5[3] += 1; }
			else if($form["MAEO501"] == 5) {
				$acuO5[4] += 1; }


			if($form["MAEO502"] == 1) {
				$acuO5[0] += 1; }
			else if($form["MAEO502"] == 2) {
				$acuO5[1] += 1; }
			else if($form["MAEO502"] == 3) {
				$acuO5[2] += 1; }
			else if($form["MAEO502"] == 4) {
				$acuO5[3] += 1; }
			else if($form["MAEO502"] == 5) {
				$acuO5[4] += 1; }

			if($form["MAEO503"] == 1) {
				$acuO5[0] += 1; }
			else if($form["MAEO503"] == 2) {
				$acuO5[1] += 1; }
			else if($form["MAEO503"] == 3) {
				$acuO5[2] += 1; }
			else if($form["MAEO503"] == 4) {
				$acuO5[3] += 1; }
			else if($form["MAEO503"] == 5) {
				$acuO5[4] += 1; }


			if($form["MAEO504"] == 1) {
				$acuO5[0] += 1; }
			else if($form["MAEO504"] == 2) {
				$acuO5[1] += 1; }
			else if($form["MAEO504"] == 3) {
				$acuO5[2] += 1; }
			else if($form["MAEO504"] == 4) {
				$acuO5[3] += 1; }
			else if($form["MAEO504"] == 5) {
				$acuO5[4] += 1; }

			if($form["MAEO505"] == 1) {
				$acuO5[0] += 1; }
			else if($form["MAEO505"] == 2) {
				$acuO5[1] += 1; }
			else if($form["MAEO505"] == 3) {
				$acuO5[2] += 1; }
			else if($form["MAEO505"] == 4) {
				$acuO5[3] += 1; }
			else if($form["MAEO505"] == 5) {
				$acuO5[4] += 1; }



################################################################################

			if($form["MAED101"] == 1) {
				$acuD1[0] += 1; }
			else if($form["MAED101"] == 2) {
				$acuD1[1] += 1; }
			else if($form["MAED101"] == 3) {
				$acuD1[2] += 1; }
			else if($form["MAED101"] == 4) {
				$acuD1[3] += 1; }
			else if($form["MAED101"] == 5) {
				$acuD1[4] += 1; }


			if($form["MAED102"] == 1) {
				$acuD1[0] += 1; }
			else if($form["MAED102"] == 2) {
				$acuD1[1] += 1; }
			else if($form["MAED102"] == 3) {
				$acuD1[2] += 1; }
			else if($form["MAED102"] == 4) {
				$acuD1[3] += 1; }
			else if($form["MAED102"] == 5) {
				$acuD1[4] += 1; }

			if($form["MAED103"] == 1) {
				$acuD1[0] += 1; }
			else if($form["MAED103"] == 2) {
				$acuD1[1] += 1; }
			else if($form["MAED103"] == 3) {
				$acuD1[2] += 1; }
			else if($form["MAED103"] == 4) {
				$acuD1[3] += 1; }
			else if($form["MAED103"] == 5) {
				$acuD1[4] += 1; }


			if($form["MAED104"] == 1) {
				$acuD1[0] += 1; }
			else if($form["MAED104"] == 2) {
				$acuD1[1] += 1; }
			else if($form["MAED104"] == 3) {
				$acuD1[2] += 1; }
			else if($form["MAED104"] == 4) {
				$acuD1[3] += 1; }
			else if($form["MAED104"] == 5) {
				$acuD1[4] += 1; }

			if($form["MAED105"] == 1) {
				$acuD1[0] += 1; }
			else if($form["MAED105"] == 2) {
				$acuD1[1] += 1; }
			else if($form["MAED105"] == 3) {
				$acuD1[2] += 1; }
			else if($form["MAED105"] == 4) {
				$acuD1[3] += 1; }
			else if($form["MAED105"] == 5) {
				$acuD1[4] += 1; }



################################################################################

			if($form["MAED201"] == 1) {
				$acuD2[0] += 1; }
			else if($form["MAED201"] == 2) {
				$acuD2[1] += 1; }
			else if($form["MAED201"] == 3) {
				$acuD2[2] += 1; }
			else if($form["MAED201"] == 4) {
				$acuD2[3] += 1; }
			else if($form["MAED201"] == 5) {
				$acuD2[4] += 1; }


			if($form["MAED202"] == 1) {
				$acuD2[0] += 1; }
			else if($form["MAED202"] == 2) {
				$acuD2[1] += 1; }
			else if($form["MAED202"] == 3) {
				$acuD2[2] += 1; }
			else if($form["MAED202"] == 4) {
				$acuD2[3] += 1; }
			else if($form["MAED202"] == 5) {
				$acuD2[4] += 1; }

			if($form["MAED203"] == 1) {
				$acuD2[0] += 1; }
			else if($form["MAED203"] == 2) {
				$acuD2[1] += 1; }
			else if($form["MAED203"] == 3) {
				$acuD2[2] += 1; }
			else if($form["MAED203"] == 4) {
				$acuD2[3] += 1; }
			else if($form["MAED203"] == 5) {
				$acuD2[4] += 1; }


			if($form["MAED204"] == 1) {
				$acuD2[0] += 1; }
			else if($form["MAED204"] == 2) {
				$acuD2[1] += 1; }
			else if($form["MAED204"] == 3) {
				$acuD2[2] += 1; }
			else if($form["MAED204"] == 4) {
				$acuD2[3] += 1; }
			else if($form["MAED204"] == 5) {
				$acuD2[4] += 1; }

			if($form["MAED205"] == 1) {
				$acuD2[0] += 1; }
			else if($form["MAED205"] == 2) {
				$acuD2[1] += 1; }
			else if($form["MAED205"] == 3) {
				$acuD2[2] += 1; }
			else if($form["MAED205"] == 4) {
				$acuD2[3] += 1; }
			else if($form["MAED205"] == 5) {
				$acuD2[4] += 1; }



################################################################################

			if($form["MAED301"] == 1) {
				$acuD3[0] += 1; }
			else if($form["MAED301"] == 2) {
				$acuD3[1] += 1; }
			else if($form["MAED301"] == 3) {
				$acuD3[2] += 1; }
			else if($form["MAED301"] == 4) {
				$acuD3[3] += 1; }
			else if($form["MAED301"] == 5) {
				$acuD3[4] += 1; }


			if($form["MAED302"] == 1) {
				$acuD3[0] += 1; }
			else if($form["MAED302"] == 2) {
				$acuD3[1] += 1; }
			else if($form["MAED302"] == 3) {
				$acuD3[2] += 1; }
			else if($form["MAED302"] == 4) {
				$acuD3[3] += 1; }
			else if($form["MAED302"] == 5) {
				$acuD3[4] += 1; }

			if($form["MAED303"] == 1) {
				$acuD3[0] += 1; }
			else if($form["MAED303"] == 2) {
				$acuD3[1] += 1; }
			else if($form["MAED303"] == 3) {
				$acuD3[2] += 1; }
			else if($form["MAED303"] == 4) {
				$acuD3[3] += 1; }
			else if($form["MAED303"] == 5) {
				$acuD3[4] += 1; }


			if($form["MAED304"] == 1) {
				$acuD3[0] += 1; }
			else if($form["MAED304"] == 2) {
				$acuD3[1] += 1; }
			else if($form["MAED304"] == 3) {
				$acuD3[2] += 1; }
			else if($form["MAED304"] == 4) {
				$acuD3[3] += 1; }
			else if($form["MAED304"] == 5) {
				$acuD3[4] += 1; }

			if($form["MAED305"] == 1) {
				$acuD3[0] += 1; }
			else if($form["MAED305"] == 2) {
				$acuD3[1] += 1; }
			else if($form["MAED305"] == 3) {
				$acuD3[2] += 1; }
			else if($form["MAED305"] == 4) {
				$acuD3[3] += 1; }
			else if($form["MAED305"] == 5) {
				$acuD3[4] += 1; }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuC1[0] += 1; }
			else if($form["MAEC101"] == 2) {
				$acuC1[1] += 1; }
			else if($form["MAEC101"] == 3) {
				$acuC1[2] += 1; }
			else if($form["MAEC101"] == 4) {
				$acuC1[3] += 1; }
			else if($form["MAEC101"] == 5) {
				$acuC1[4] += 1; }


			if($form["MAEC102"] == 1) {
				$acuC1[0] += 1; } 
			else if($form["MAEC102"] == 2) {
				$acuC1[1] += 1; }
			else if($form["MAEC102"] == 3) {
				$acuC1[2] += 1; }
			else if($form["MAEC102"] == 4) {
				$acuC1[3] += 1; }
			else if($form["MAEC102"] == 5) {
				$acuC1[4] += 1; }

			if($form["MAEC103"] == 1) {
				$acuC1[0] += 1; }
			else if($form["MAEC103"] == 2) {
				$acuC1[1] += 1; }
			else if($form["MAEC103"] == 3) {
				$acuC1[2] += 1; }
			else if($form["MAEC103"] == 4) {
				$acuC1[3] += 1; }
			else if($form["MAEC103"] == 5) {
				$acuC1[4] += 1; }


			if($form["MAEC104"] == 1) {
				$acuC1[0] += 1; }
			else if($form["MAEC104"] == 2) {
				$acuC1[1] += 1; }
			else if($form["MAEC104"] == 3) {
				$acuC1[2] += 1; }
			else if($form["MAEC104"] == 4) {
				$acuC1[3] += 1; }
			else if($form["MAEC104"] == 5) {
				$acuC1[4] += 1; }

			if($form["MAEC105"] == 1) {
				$acuC1[0] += 1; }
			else if($form["MAEC105"] == 2) {
				$acuC1[1] += 1; }
			else if($form["MAEC105"] == 3) {
				$acuC1[2] += 1; }
			else if($form["MAEC105"] == 4) {
				$acuC1[3] += 1; }
			else if($form["MAEC105"] == 5) {
				$acuC1[4] += 1; }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuC2[0] += 1; }
			else if($form["MAEC201"] == 2) {
				$acuC2[1] += 1; }
			else if($form["MAEC201"] == 3) {
				$acuC2[2] += 1; }
			else if($form["MAEC201"] == 4) {
				$acuC2[3] += 1; }
			else if($form["MAEC201"] == 5) {
				$acuC2[4] += 1; }


			if($form["MAEC202"] == 1) {
				$acuC2[0] += 1; }
			else if($form["MAEC202"] == 2) {
				$acuC2[1] += 1; }
			else if($form["MAEC202"] == 3) {
				$acuC2[2] += 1; }
			else if($form["MAEC202"] == 4) {
				$acuC2[3] += 1; }
			else if($form["MAEC202"] == 5) {
				$acuC2[4] += 1; }

			if($form["MAEC203"] == 1) {
				$acuC2[0] += 1; }
			else if($form["MAEC203"] == 2) {
				$acuC2[1] += 1; }
			else if($form["MAEC203"] == 3) {
				$acuC2[2] += 1; }
			else if($form["MAEC203"] == 4) {
				$acuC2[3] += 1; }
			else if($form["MAEC203"] == 5) {
				$acuC2[4] += 1; }


			if($form["MAEC204"] == 1) {
				$acuC2[0] += 1; }
			else if($form["MAEC204"] == 2) {
				$acuC2[1] += 1; }
			else if($form["MAEC204"] == 3) {
				$acuC2[2] += 1; }
			else if($form["MAEC204"] == 4) {
				$acuC2[3] += 1; }
			else if($form["MAEC204"] == 5) {
				$acuC2[4] += 1; }

			if($form["MAEC205"] == 1) {
				$acuC2[0] += 1; }
			else if($form["MAEC205"] == 2) {
				$acuC2[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuC2[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuC2[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuC2[4] += 1; }			
		}
	}

	$pizza = "      
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dimensões', 'Alinhamento Inexistente', 'Alinhamento Fraco', 'Alinhamento Moderado', 'Alinhamento Forte', 'Alinhamento Total'],
          ['Planejamento 1',".($acuP1[0]*100)/($cont*5).",". ($acuP1[1]*100)/($cont*5).",". ($acuP1[2]*100)/($cont*5).",".($acuP1[3]*100)/($cont*5) .",".($acuP1[4]*100)/($cont*5) ."],
          ['Planejamento 2',".($acuP2[0]*100)/($cont*5) .",".($acuP2[1]*100)/($cont*5) .",". ($acuP2[2]*100)/($cont*5).",". ($acuP2[3]*100)/($cont*5).",". ($acuP2[4]*100)/($cont*5)."],
          ['Organização 1',".($acuO1[0]*100)/($cont*5) .",".($acuO1[1]*100)/($cont*5) .",".($acuO1[2]*100)/($cont*5) .",". ($acuO1[3]*100)/($cont*5).",". ($acuO1[4]*100)/($cont*5)."],
          ['Organização 2',".($acuO2[0]*100)/($cont*5) .",".($acuO2[1]*100)/($cont*5) .",".($acuO2[2]*100)/($cont*5) .",". ($acuO2[3]*100)/($cont*5).",". ($acuO2[4]*100)/($cont*5)."],
          ['Organização 3',".($acuO3[0]*100)/($cont*5) .",".($acuO3[1]*100)/($cont*5) .",".($acuO3[2]*100)/($cont*5) .",". ($acuO3[3]*100)/($cont*5).",". ($acuO3[4]*100)/($cont*5)."],
          ['Organização 4',".($acuO4[0]*100)/($cont*5) .",".($acuO4[1]*100)/($cont*5) .",".($acuO4[2]*100)/($cont*5) .",". ($acuO4[3]*100)/($cont*5).",". ($acuO4[4]*100)/($cont*5)."],
          ['Organização 5',".($acuO5[0]*100)/($cont*5) .",".($acuO5[1]*100)/($cont*5) .",".($acuO5[2]*100)/($cont*5) .",". ($acuO5[3]*100)/($cont*5).",". ($acuO5[4]*100)/($cont*5)."],                                       
          ['Direção 1',".($acuD1[0]*100)/($cont*5) .",". ($acuD1[1]*100)/($cont*5).",".($acuD1[2]*100)/($cont*5) .",". ($acuD1[3]*100)/($cont*5).",". ($acuD1[4]*100)/($cont*5)."],
          ['Direção 2',".($acuD2[0]*100)/($cont*5) .",". ($acuD2[1]*100)/($cont*5).",".($acuD2[2]*100)/($cont*5) .",". ($acuD2[3]*100)/($cont*5).",". ($acuD2[4]*100)/($cont*5)."],
          ['Direção 3',".($acuD3[0]*100)/($cont*5) .",". ($acuD3[1]*100)/($cont*5).",".($acuD3[2]*100)/($cont*5) .",". ($acuD3[3]*100)/($cont*5).",". ($acuD3[4]*100)/($cont*5)."],                    
          ['Controle 1',".($acuC1[0]*100)/($cont*5) .",". ($acuC1[1]*100)/($cont*5).",".($acuC1[2]*100)/($cont*5) .",". ($acuC1[3]*100)/($cont*5).",". ($acuC1[4]*100)/($cont*5)."],
          ['Controle 2',".($acuC2[0]*100)/($cont*5) .",". ($acuC2[1]*100)/($cont*5).",".($acuC2[2]*100)/($cont*5) .",". ($acuC2[3]*100)/($cont*5).",". ($acuC2[4]*100)/($cont*5)."]          
        ]);

        var options = {
          chart: {
            title: 'Alinhamento por Diretrizes em Percentual (%)',
            subtitle: 'Alinhamento Inexistente, Alinhamento Fraco, Alinhamento Moderado, Alinhamento Forte, Alinhamento Total',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var diretriz = new google.charts.Bar(document.getElementById('diretriz'));

        diretriz.draw(data, google.charts.Bar.convertOptions(options));
      }
        ";

    $html_string = file_get_contents("pages/relatorio-template-diretriz.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;


#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
} else if ($empresa != null && $_GET["tipo"] == 8){
	$cont = 0;

	$contTINegocio = 0;
	$contNegocioTI = 0;

	$acuTINegocio = array(0,0,0,0,0);
	$acuNegocioTI = array(0,0,0,0,0);

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
			$cont += 1;

			if($form["MAEP101"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEP101"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEP101"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEP101"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEP101"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEP102"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEP102"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEP102"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEP102"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEP102"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEP103"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEP103"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEP103"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEP103"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEP103"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEP104"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEP104"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEP104"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEP104"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEP104"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEP105"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEP105"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEP105"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEP105"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEP105"] == 5) {
				$acuNegocioTI[4] += 1;  }


#############################################################################

			if($form["MAEP201"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEP201"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEP201"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEP201"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEP201"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEP202"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEP202"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEP202"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEP202"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEP202"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEP203"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEP203"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEP203"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEP203"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEP203"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEP204"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEP204"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEP204"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEP204"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEP204"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEP205"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEP205"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEP205"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEP205"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEP205"] == 5) {
				$acuTINegocio[4] += 1;  }
############################################################################			
	
			if($form["MAEO101"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO101"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO101"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO101"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO101"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO102"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO102"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO102"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO102"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO102"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO103"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO103"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO103"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO103"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO103"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO104"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO104"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO104"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO104"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO104"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO105"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO105"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO105"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO105"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO105"] == 5) {
				$acuNegocioTI[4] += 1;  }

############################################################################## 

			if($form["MAEO201"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO201"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO201"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO201"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO201"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEO202"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO202"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO202"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO202"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO202"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEO203"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO203"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO203"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO203"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO203"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEO204"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO204"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO204"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO204"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO204"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEO205"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO205"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO205"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO205"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO205"] == 5) {
				$acuTINegocio[4] += 1;  }



################################################################################

			if($form["MAEO301"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO301"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO301"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO301"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO301"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO302"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO302"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO302"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO302"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO302"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO303"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO303"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO303"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO303"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO303"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO304"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO304"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO304"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO304"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO304"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO305"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO305"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO305"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO305"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO305"] == 5) {
				$acuNegocioTI[4] += 1;  }



#################################################################################

			if($form["MAEO401"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO401"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO401"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO401"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO401"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO402"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO402"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO402"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO402"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO402"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO403"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO403"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO403"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO403"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO403"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEO404"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO404"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO404"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO404"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO404"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEO405"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEO405"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEO405"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEO405"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEO405"] == 5) {
				$acuNegocioTI[4] += 1;  }




#################################################################################

			if($form["MAEO501"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO501"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO501"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO501"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO501"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEO502"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO502"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO502"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO502"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO502"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEO503"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO503"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO503"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO503"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO503"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEO504"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO504"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO504"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO504"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO504"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEO505"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEO505"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEO505"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEO505"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEO505"] == 5) {
				$acuTINegocio[4] += 1;  }



################################################################################

			if($form["MAED101"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED101"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED101"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED101"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED101"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAED102"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED102"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED102"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED102"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED102"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAED103"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED103"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED103"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED103"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED103"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAED104"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED104"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED104"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED104"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED104"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAED105"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED105"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED105"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED105"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED105"] == 5) {
				$acuNegocioTI[4] += 1;  }



################################################################################

			if($form["MAED201"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAED201"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAED201"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAED201"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAED201"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAED202"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAED202"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAED202"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAED202"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAED202"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAED203"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAED203"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAED203"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAED203"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAED203"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAED204"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAED204"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAED204"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAED204"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAED204"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAED205"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAED205"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAED205"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAED205"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAED205"] == 5) {
				$acuTINegocio[4] += 1;  }



################################################################################

			if($form["MAED301"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED301"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED301"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED301"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED301"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAED302"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED302"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED302"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED302"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED302"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAED303"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED303"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED303"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED303"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED303"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAED304"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED304"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED304"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED304"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED304"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAED305"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAED305"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAED305"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAED305"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAED305"] == 5) {
				$acuNegocioTI[4] += 1;  }




#################################################################################

			if($form["MAEC101"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEC101"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEC101"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEC101"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEC101"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEC102"] == 1) {
				$acuNegocioTI[0] += 1;  } 
			else if($form["MAEC102"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEC102"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEC102"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEC102"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEC103"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEC103"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEC103"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEC103"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEC103"] == 5) {
				$acuNegocioTI[4] += 1;  }


			if($form["MAEC104"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEC104"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEC104"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEC104"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEC104"] == 5) {
				$acuNegocioTI[4] += 1;  }

			if($form["MAEC105"] == 1) {
				$acuNegocioTI[0] += 1;  }
			else if($form["MAEC105"] == 2) {
				$acuNegocioTI[1] += 1;  }
			else if($form["MAEC105"] == 3) {
				$acuNegocioTI[2] += 1;  }
			else if($form["MAEC105"] == 4) {
				$acuNegocioTI[3] += 1;  }
			else if($form["MAEC105"] == 5) {
				$acuNegocioTI[4] += 1;  }



#################################################################################
			if($form["MAEC201"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEC201"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEC201"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEC201"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEC201"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEC202"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEC202"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEC202"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEC202"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEC202"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEC203"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEC203"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEC203"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEC203"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEC203"] == 5) {
				$acuTINegocio[4] += 1;  }


			if($form["MAEC204"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEC204"] == 2) {
				$acuTINegocio[1] += 1;  }
			else if($form["MAEC204"] == 3) {
				$acuTINegocio[2] += 1;  }
			else if($form["MAEC204"] == 4) {
				$acuTINegocio[3] += 1;  }
			else if($form["MAEC204"] == 5) {
				$acuTINegocio[4] += 1;  }

			if($form["MAEC205"] == 1) {
				$acuTINegocio[0] += 1;  }
			else if($form["MAEC205"] == 2) {
				$acuTINegocio[1] += 1; }
			else if($form["MAEC205"] == 3) {
				$acuTINegocio[2] += 1; }
			else if($form["MAEC205"] == 4) {
				$acuTINegocio[3] += 1; }
			else if($form["MAEC205"] == 5) {
				$acuTINegocio[4] += 1; }
			}
		}


	$pizza = "      
		google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

    	function drawChart() {

    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuTINegocio[0]*100)/($cont*25) ."],
        		['Alinhamento Fraco', ".($acuTINegocio[1]*100)/($cont*25) ."],
        		['Alinhamento Moderado', ". ($acuTINegocio[2]*100)/($cont*25)."],
        		['Alinhamento Forte', ".($acuTINegocio[3]*100)/($cont*25) ."],
        		['Alinhamento Total', ". ($acuTINegocio[4]*100)/($cont*25)."]
        	]);

        	var options = {
        		title: 'TI para Negócio'
        	};

        	var tinegocio = new google.visualization.PieChart(document.getElementById('tinegocio'));
        	tinegocio.draw(data, options);
        
    		var data = google.visualization.arrayToDataTable([
       			['Alinhamento', 'Percentual'],
        		['Alinhamento Inexistente', ".($acuNegocioTI[0]*100)/($cont*35) ."],
        		['Alinhamento Fraco', ".($acuNegocioTI[1]*100)/($cont*35) ."],
        		['Alinhamento Moderado', ". ($acuNegocioTI[2]*100)/($cont*35)."],
        		['Alinhamento Forte', ".($acuNegocioTI[3]*100)/($cont*35) ."],
        		['Alinhamento Total', ". ($acuNegocioTI[4]*100)/($cont*35)."]
        	]);

        	var options = {
        		title: 'Negócio para TI'
        	};

        	var negocioti = new google.visualization.PieChart(document.getElementById('negocioti'));
        	negocioti.draw(data, options);        

        }
        ";

    $html_string = file_get_contents("pages/relatorio-template-orientacao.html");
    $html = str_replace('pizza1', $pizza, $html_string);
    echo $html;


#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
#####################################################################################################
	}
}else {
    header("location:login.php");
}

?>