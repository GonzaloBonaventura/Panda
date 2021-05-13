<!DOCTYPE html>
<html>
<head>
	<title>PANDA</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no">
 	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" media="all" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" media="(max-device-width: 1023px) and (min-device-width: 600px)" href="1023.css">
	<link rel="stylesheet" type="text/css" media="(max-device-width: 599px) and (min-device-width: 426px)" href="599.css">
	<link rel="stylesheet" type="text/css" media="(max-device-width: 425px) and (min-device-width: 300px)" href="425.css">
	<link rel="stylesheet" type="text/css" media="(max-device-width: 299px)" href="299.css">
	<link rel="icon" href="img/favicon.png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<header>
	<img src="img/marca.png" id="marca">
	<img src="img/panmarca.jpg" id="marca2"></img>
	<div id="botonera">
		<a href="#principal" id="boton1">Inicio</a>
		<a href="#informacion" id="boton2">Informacion</a>
		<a href="#footer" id="boton3">Contacto</a>
	</div>
</header>
<section id="principal">
	<h2 class="nosotros">¿QUIÉNES SOMOS?</h2>
	<p  id="general">
		Panda es una ONG sin fines de lucro enfocada en la Proteccion a Animales Nativos De América (P.A.N.D.A).
		En especial animales endemicos o en peligro de extincion, porque, si no los protegemos nosotros <em>¿Quien lo hara?</em><br><br>
		Es por eso que estamos aqui, para defender a los que no pueden defenderse por si mismos, los animales.<br><br>
		PANDA se financia de las aportaciones de sus socios, miembros colaboradores y donantes.
	</p>
	<a href="img/guanaco.jpg" data-lightbox="first"  data-title="Un guanaco"><img id="imagen1" src="img/guanaco.jpg"></a>
	<a href="img/amazonas.jpg" data-lightbox="first"  data-title="El Amazonas"><img id="imagen3" src="img/amazonas.jpg"></a>
</section>
<section id="animales">
	<div id="botones">
		<a class="botonsolo" href="index.php?id=uno#animales">Tucán banana</a>
		<a class="botonsolo" href="index.php?id=dos#animales">Lobo Gris</a>
		<a class="botonsolo" href="index.php?id=tre#animales">Tortuga Marina</a>
	</div>
	<?php 
		if (isset($_GET['id'])) {
			switch ($_GET['id']) {
			case 'dos':
				$animal='Lobo gris';
				$cientifico='Canis lupus baileyi';
				$descripcion='Es de color gris, su lomo presenta tonos marrón, la altura del lobo gris puede variar entre 0.66 mts y 0.81 mts, su longitud va de 1.4 mts a 1.7 mts; un lobo adulto puede pesar entre 22.7 y 40.8 kilos.';	
				$estado='En peligro de extincion';
				$imgsrc='lobo-gris.jpg';	
				$color='orange';	
				break;
			case 'tre':
				$animal='Tortuga marina';
				$cientifico='Eretmochelys imbricata';
				$descripcion='Las tortugas marinas pueden llegar a una velocidad de hasta 35 kilómetros por hora en el agua. Durante la época de reproducción es muy común verlas en las playas y costas arenosas en grandes grupos por que están enterrando sus huevos que se incuban con la temperatura ambiental. Después de 45 a 65 días las crías (las tortugas bebé) rompen el cascarón y salen hacia la superficie de la arena. Se dirigen muy rápidamente al mar. Muy pocas tortugas bebés logran sobrevivir (depende en la situación a la que se enfrenten). Su destino puede ser con cualquiera de estas situaciones: que otro pez se las coma, que las capturen o logran sobrevivir.';	
				$estado='En peligro critico de extincion';
				$imgsrc='tortuga-marina.jpg';	
				$color='rgb(100,0,0)';	
				break;
			case 'uno':
			default:
				$animal='Tucán banana';
				$cientifico='Pteroglossus bailloni';
				$descripcion='Es un tucán de cola relativamente larga, con una longitud total de 35-40 cm. Es único entre los tucanes, por su color azafrán. La cola y el trasero son de color negruzco oliva. La grupa, la piel ocular y los parches en la mitad basal son verdosos, el pico rojo. El iris es amarillo pálido.';
				$estado='Casi en amenaza de extincion';
				$imgsrc='tucan.jpg';
				$color='white';	
				break;
			}
		
	?>
	<ul id="ulanimal">
		<h3 class="listanimal" id="item1"><?php echo $animal; ?> </h3>
		<li class="listanimal">Nombre cientifico: <?php echo $cientifico; ?> </li>
		<li class="listanimal">Descripcion: <?php echo $descripcion; ?> </li>
		<li class="listanimal" style="color: <?php echo $color; ?>;">Estado: <?php echo $estado; ?></li>
		<li class="listanimal"><img id="imganimal" src="img/<?php echo $imgsrc; ?>"></li>
	</ul>
	<?php 
			}
	?>
</section>
<section id="informacion">
	<h2 class="info">INFORMACION</h2>
	<p id="info">
		Colaboramos con Organizaciones, Instituciones, Empresas y Asociaciones de carácter social que puedan ejercer una influencia positiva en la relación de las personas con los animales y el entorno natural. <br>
		Realizamos campañas y presionamos para que se cumpla la normativa vigente y que ésta les resulte beneficiosa.<br>
	</p>
	<a href="img/yaguarete.jpg" data-lightbox="first"  data-title="Un yaguarete"><img id="imagen2" src="img/yaguarete.jpg"></a>
	<div id="reserva">
		<p class="column3" id="sombra">
			En la actualidad estamos colaborando con la reserva natural de la Peninsula de Valdez por los residuos plasticos dejados por industrias pesqueras, en esta reserva, es un habitat que conserva una variedad de especies en peligro de extincion.
			<br><br>
		Hemos ayudado en el rescate de especies en incendios forestales en el amazonas y en la recuperacion de sus hábitats naturales.
		Planeamos intervenir en otros casos de incendios forestales en el futuro, buscamos colaboradores y mas recursos.
		<br><br>
	El "oso de anteojos" es una criatura extraordinaria que solo puede ser vista en la regiones andinas o 'frías' de America. Es la única especie viva en su género actualmente corre peligro de extinción por la destrucción de su hábitat.</p>	
	</div>
	<a href="img/ballena.jpg" data-lightbox="second"  data-title="Ballena"><img src="img/ballena.jpg" id="fila4seccion1"></img></a>
	<a href="img/incendio.jpg" data-lightbox="second"  data-title="Incendio forestal"><img src="img/incendio.jpg" id="fila4seccion2"></img> </a>
	<a href="img/oso.jpg" data-lightbox="second"  data-title="Un Oso"><img src="img/oso.jpg" id="fila4seccion3"></img></a>
</section>
<section id="socios">
	<?php
		if (isset($_GET['socio'])) {
			$sociobool = filter_var($_GET['socio'], FILTER_VALIDATE_BOOLEAN);
			if ($sociobool == true) {
				include("formulariosocio.php");
			}else{
				?>
					<a class="botonsocio">ERES SOCIO</a>
				<?php
			}
		}else{
			?>
				<a class="botonsocio" id="ensocio" href="index.php?socio=true#socios">CONVERTIRME EN SOCIO</a>
			<?php
		}	
	?>
</section>
<footer id="footer">
    <div class="column2" id="end">
        <h4 id="contacto">CONTACTO</h4>
        <div class="two-cols">
            <div class="margen">
                <p class="leftend">Telefono:</p>
                <p class="leftend">Email:</p>
                <p class="leftend">Direccion:</p>
            </div>
            <div>
                <p>4023-5210</p>
                <p><a class="rightend" href="">panda@pandaong.org</a></p>
                <p><a class="rightend"href="">B1904 La Plata, Provincia de Buenos Aires</a></p>
            </div>
        </div>
    </div>
</footer>

  <script src="js/lightbox-plus-jquery.min.js"></script>

</body>
</html>