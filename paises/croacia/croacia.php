<?php session_start();
include "conexion.php";
$consulta = llamar(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="ima/logo1.png" href="ima/logo1.png">
	<title>Croacia</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/paises.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../../css/menupaises.css">
</head>
<body>
	<?php include "../../frontend/menupaises.php"; ?>
<div id="container">
	<div class="argentina">
		<img src="ima/argentina/seleccion.jpg">
	</div>
	<div class="espacio">
		<p>Hola a todos la hichada de Argentina les deseamos buena suerte. A continuación les mostraremos todos los jugadores que partisiparan en el mundial 2018 con una breve descripcion de cada uno de ellos, tambien puedes comentar criticar o alentar muchas gracias y a disfrutar. </p>
	</div>

	<div class="box">
		<?php  
		while ($row = $consulta->fetch_assoc()){
		 ?>
		<div class="content">
			<p><?php echo $row["nombre_completo"]; ?>
				<p>nacio el
				<?php echo $row["fecha_nac"]; ?>
				<br> </p>
				<?php echo $row["info"]; ?>		 
				<?php echo $row["pais_id"]; } ?>		 </p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3><?php echo $row["nombre_completo"]; ?><br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
		


	
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
	<div class="box">
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam, explicabo nostrum sint dolorum exercitationem odit iure ullam incidunt sequi ad saepe excepturi expedita corporis animi eum mollitia, iusto provident?</p>
		</div>
		<br>
		<div class="details">
			 <div class="image"><img src="img/Lionel-Messi-973592.jpg"></div>
			 <h3>Lionel Messi<br><span>Capitan del equipo, camiseta N°10</span></h3>
		</div>		
	</div>
</div>
<footer>
	<div class="sociales">
		<ul class="contact">
			<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
			<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
			<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
			<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
		</ul>	
	</div>
	<div class="contenedor">
		<p class="copy">Mundial 2018-Copyright © Nicolás Mansilla Todos los Derechos Reservados</p>
	</div>
</footer>

</body>
</html>