<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alojamiento Web</title>
	<link rel='stylesheet' href='../css/camera.css' media='all'> 
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/alojamiento.css">
	<link rel="stylesheet" href="../css/coin-slider-styles.css">

	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="../js/jquery.js"></script>
	<script type='text/javascript' src='../js/camera/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../js/camera/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../js/camera/camera.js'></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../js/coin-slider.js"></script>
	<script src="../js/main.js"></script>
</head>
<body>
	<div class="contenedor-global">
		<div class="menu">	
			<?php 
			include("../vista/include/nav.php") ;
			?>
		</div>

		<div id="pricing-table">
			<div class="pricing-table">
				<div class="free-table left cuadro static-table">
					<div class="pricing-title">Personal</div>
					<div class="pricing-content">
						<div class="amount">
							<div class="sign">S/.</div>
							<div class="big-price">5</div>
							<div class="small-price">99</div>
							<div class="rate">/ mes</div>
						</div>
						<div class="pricing-desc">100 Mb en almacenamiento</div>
						<ul class="pricing-options">
							<li class="ok">cPanel</li>
							<li class="ok">Cuentas FTP</li>
							<li class="x">Dominios Parkeados</li>
			                <li class="x">Dominio Gratis</li>
							<li class="x">Dominios Añadidos</li>
						</ul>
						<div class="info"><a href="#">Solicitar</a></div>
					</div>	
				</div>

				<div class="professional-table left cuadro static-table">
					<div class="pricing-title">Basic</div>
					<div class="pricing-content">
						<div class="amount">
							<div class="sign">S/.</div>
							<div class="big-price">7</div>
							<div class="small-price">99</div>
							<div class="rate">/ mes</div>
						</div>
						<div class="pricing-desc">100 Mb en almacenamiento</div>
							<ul class="pricing-options">
								<li class="ok">cPanel</li>
								<li class="ok">Cuentas FTP</li>
								<li class="ok">Dominios Parkeados</li>
				                <li class="x">Dominio Gratis</li>
								<li class="x">Dominios Añadidos</li>
							</ul>
						<div class="info"><a href="#">Solicitar</a></div>
					</div>
				</div>

				<div class="professional-table left cuadro static-table">
					<div class="pricing-title">Profesional</div>
					<div class="pricing-content">
						<div class="amount">
							<div class="sign">S/.</div>
							<div class="big-price">9</div>
							<div class="small-price">99</div>
							<div class="rate">/ mes</div>
						</div>
						<div class="pricing-desc">100 Mb en almacenamiento</div>
							<ul class="pricing-options">
								<li class="ok">cPanel</li>
								<li class="ok">Cuentas FTP</li>
								<li class="ok">Dominios Parkeados</li>
				                <li class="ok">Dominio Gratis</li>
								<li class="x">Dominios Añadidos</li>
							</ul>
						<div class="info"><a href="#">Solicitar</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>