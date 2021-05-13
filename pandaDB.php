<?php
$nombre_socio=$_POST['nombre'];
$apellido_socio=$_POST['apellido'];
$mail_socio=$_POST['mail'];
$conn = mysqli_connect("localhost", "root", "", "progwebinicial");

$error = 0;
$error2 = 0;
$loc = "";
$locE1 = 0;
$locE2 = 0;

if (strlen($nombre_socio) > 30) {
	$error2 += 100;
}
if (strlen($apellido_socio) > 30) {
	$error2 += 150;
}
if (strlen($mail_socio) > 30) {
	$error2 += 200;
}

if ($error == 0) {
		if ($nombre_socio == "") {
		$error += 8;
	}

	if ($apellido_socio == "") {
		$error += 32;

	}

	if ($mail_socio == "") {
		$error += 64;

	}else{
		
		$arroba = false;
		$punto = false;
		$lastindex = 0;
		$mailarray = preg_split( '//u', $mail_socio, null, PREG_SPLIT_NO_EMPTY );

		foreach ($mailarray as $index => $contenido) {
			if ($contenido == '@') {
				$arroba = true;
			}
			if ($arroba == true && $contenido == '.') {
				$punto = true;
			}
			$lastindex = $index;
		}
		if ($punto == false || $lastindex < 6) {
			$error += 1;
		}
		
	}
}

	switch ($error) {
	case 0:
		$locE1 = -1;
		break;
	
	case 8:
		$locE1 = 0;
		break;

	case 32:
		$locE1 = 1;
		break;

	case 64:
		$locE1 = 2;
		break;	

	case 40:
		$locE1 = 3;
		break;

	case 96:
		$locE1 = 4;
		break;

	case 72:
		$locE1 = 5;
		break;

	case 104:
		$locE1 = 6;
		break;

	case 1:
		$locE1 = 7;
		break;

	case 33:
		$locE1 = 8;
		break;

	case 9:
		$locE1 = 9;
		break;

	case 41:
		$locE1 = 10;
		break;
}
switch ($error2) {
//mas de 30 caracteres:
		//error input 1 (1)
	case 100:
		$locE2 = 1;
		break;
		//error input 2 (2)
	case 150:
		$locE2 = 2;
		break;
		//error input 3 (3)
	case 200:
		$locE2 = 3;
		break;

		//error input 1,2 (4)
	case 250:
		$locE2 = 4;
		break;
		//error input 2,3 (5)
	case 350:
		$locE2 = 5;
		break;
		//error input 1,3 (6)
	case 300:
		$locE2 = 6;
		break;

		//error input 1,2,3 (7)
	case 450:
		$locE2 = 7;
		break;
}
$socio = "true";
$var1 = "";
$var2 = "";

if ($locE1 == -1) {
	if ($locE2 == 0) {
		$socio = "false";
		mysqli_query($conn, "INSERT INTO socios VALUES (default, '$nombre_socio','$apellido_socio','$mail_socio')");
	}else{
		switch ($locE2) {
			case 1:
				$var2 = "&error2=1";
				break;
			
			case 2:
				$var2 = "&error2=2";
				break;

			case 3:
				$var2 = "&error2=3";
				break;

			case 4:
				$var2 = "&error2=4";
				break;
			
			case 5:
				$var2 = "&error2=5";
				break;
			
			case 6:
				$var2 = "&error2=6";
				break;

			case 7:
				$var2 = "&error2=7";
				break;

		}
	}
}else{
	switch ($locE1) {
			case 0:
				$var1 = "&error=0";
				break;
			
			case 1:
				$var1 = "&error=1";
				break;

			case 2:
				$var1 = "&error=2";
				break;

			case 3:
				$var1 = "&error=3";
				break;
			
			case 4:
				$var1 = "&error=4";
				break;
			
			case 5:
				$var1 = "&error=5";
				break;

			case 6:
				$var1 = "&error=6";
				break;

			case 7:
				$var1 = "&error=7";
				break;

			case 8:
				$var1 = "&error=8";
				break;

			case 9:
				$var1 = "&error=9";
				break;

			case 10:
				$var1 = "&error=10";
				break;
		}
		switch ($locE2) {
			case 1:
				$var2 = "&error2=1";
				break;
			
			case 2:
				$var2 = "&error2=2";
				break;

			case 3:
				$var2 = "&error2=3";
				break;

			case 4:
				$var2 = "&error2=4";
				break;
			
			case 5:
				$var2 = "&error2=5";
				break;
			
			case 6:
				$var2 = "&error2=6";
				break;

			case 7:
				$var2 = "&error2=7";
				break;
		}
}
$loc= "location: index.php?socio=" . $socio . $var1 . $var2 . "#socios";

header($loc);
?>