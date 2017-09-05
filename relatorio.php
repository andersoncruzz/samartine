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
#	print("cont TI: ". $contTI."<br>");
#	print("total nivel 1: ". $acuTI[0]."<br>");
#	print("total nivel 2: ". $acuTI[1]."<br>");
#	print("total nivel 3: ". $acuTI[2]."<br>");
#	print("total nivel 4: ". $acuTI[3]."<br>");
#	print("total nivel 5: ". $acuTI[4]."<br><br><br>");



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
        		title: 'Alinhamento Geral - Opinião de Ambos'
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
        		title: 'Alinhamento Geral - Opinião dos Gerentes de TI'
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
        		title: 'Alinhamento Geral - Opinião dos Gerentes de Negocio'
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
        		title: 'Alinhamento Critério - Capacidade'
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
        		title: 'Alinhamento Critério - Compromisso'
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
        		title: 'Alinhamento Critério - Conhecimento'
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
        		title: 'Alinhamento Critério - Cooperação'
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
        		title: 'Alinhamento Critério - Coerência'
        	};

        	var coerencia = new google.visualization.PieChart(document.getElementById('coerencia'));
        	coerencia.draw(data, options);


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
				$acu[4] += 1; }

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
        		['Alinhamento Inexistente', ".($acuPlanejamento[0]*100)/($cont*10) ."],
        		['Alinhamento Fraco', ".($acuPlanejamento[1]*100)/($cont*10) ."],
        		['Alinhamento Moderado', ". ($acuPlanejamento[2]*100)/($cont*10)."],
        		['Alinhamento Forte', ".($acuPlanejamento[3]*100)/($cont*10) ."],
        		['Alinhamento Total', ". ($acuPlanejamento[4]*100)/($cont*10)."]
        	]);

        	var options = {
        		title: 'Alinhamento por Funções Administrativas - Planejamento'
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
        		title: 'Alinhamento por Funções Administrativas - Organização'
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
        		title: 'Alinhamento por Funções Administrativas - Direção'
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
        		title: 'Alinhamento por Funções Administrativas - Controle'
        	};

        	var controle = new google.visualization.PieChart(document.getElementById('controle'));
        	controle.draw(data, options);

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


}

?>