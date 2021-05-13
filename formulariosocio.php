<?php
$errorbool = false;
$errorbool2 = false;

if (isset($_GET['error'])) {
	$errorbool=true;
}
if (isset($_GET['error2'])) {
	$errorbool2=true;
}
?>
<h2 id="titulosocio">CONVERTIME EN SOCIO</h2>
<form action="pandaDB.php" method="POST" id="formsocio">

	<input type="text" name="nombre" class="inputpost" placeholder="Nombre">
<?php
if ($errorbool == true) {
	if ($_GET['error'] == "0" || $_GET['error'] == "3"  || $_GET['error'] == "5"  || $_GET['error'] == "6" || $_GET['error'] == "9" || $_GET['error'] == "10") {
		?>
		<p class="error">El nombre es obligatorio</p>
		<?php
	}
}
if ($errorbool2 == true) {
		if ($_GET['error2'] == "1" || $_GET['error2'] == "4"  || $_GET['error2'] == "6"  || $_GET['error2'] == "7") {
			?>
			<p class="error">El nombre no puede superar los 30 caracteres</p>
			<?php
		}
	}
?>

	<input type="text" name="apellido" class="inputpost" placeholder="Apellido">
<?php
if ($errorbool == true) {
	if ($_GET['error'] == "1" || $_GET['error'] == "3" || $_GET['error'] == "4"  || $_GET['error'] == "6" || $_GET['error'] == "8" || $_GET['error'] == "10") {
		?>
		<p class="error">El apellido es obligatorio</p>
		<?php
	}
}
if ($errorbool2 == true) {
		if ($_GET['error2'] == "2" || $_GET['error2'] == "4"  || $_GET['error2'] == "5"  || $_GET['error2'] == "7") {
			?>
			<p class="error">El apellido no puede superar los 30 caracteres</p>
			<?php
		}
	}
?>


	<input type="text" name="mail" class="inputpost" placeholder="Correo" size="30">
<?php
if ($errorbool == true) {
	if ($_GET['error'] == "2"  || $_GET['error'] == "4"  || $_GET['error'] == "5"  || $_GET['error'] == "6") {
		?>
		<p class="error">El correo es obligatorio</p>
		<?php
	}

	if ($_GET['error'] == "7"  || $_GET['error'] == "8"  || $_GET['error'] == "9"  || $_GET['error'] == "10") {
		?>
		<p class="error">El correo debe ser valido</p>
		<?php
	}
}
if ($errorbool2 == true) {
		if ($_GET['error2'] == "3" || $_GET['error2'] == "5"  || $_GET['error2'] == "6"  || $_GET['error2'] == "7") {
			?>
			<p class="error">El correo no puede superar los 30 caracteres</p>
			<?php
		}
	}
?>
	<input type="submit" name="envio" class="inputpost">
</form>

