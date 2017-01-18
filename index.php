<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Syar Corp</title>
	<link rel='stylesheet' href='css/camera.css' media='all'> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/coin-slider-styles.css">

	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="js/jquery.js"></script>
	<script type='text/javascript' src='js/camera/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/camera/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera/camera.js'></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/coin-slider.js"></script>
	<script src="js/main.js"></script>
</head>

<body>

	<div class="contenedor-global">
		<!--bloque 0 contacto y redes sociales-->
		<div class="contacto">
			<div class="top-menu left">
				<ul>
					<li><a href="">Nosotros</a></li>
					<li><a href="">Soporte</a></li>
					<li><a href="">Medios de pago</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</div>
			<div class="redes-sociales right">
				<a href="" class="twitter"></a>
				<a href="" class="facebook"></a>
				<a href="" class="youtube"></a>
			</div>
		</div>

		<!-- bloque uno logo y menu-->
		<div class="menu">	
			<?php 
			include("vista/include/nav.php") ;
			?>
		</div>

		<!-- bloque dos silder -->
		<!--
		<div id="slider">
			<a href="img01_url" target="_blank">
				<img src='images/1.jpg' >
				<span>
					Description for img01
				</span>
			</a>
			<a href="imgN_url">
				<img src='images/2.jpg' >
				<span>
					Description for imgN
				</span>
			</a>
		</div>
		-->
		<div id="slider">
			<div class="camera_wrap camera_azure_skin" id = "camera_wrap">
			    <div data-src="images/1.jpg">
			    	<div class="camera_caption">Aqui se puede poner texto</div>
			    </div>
			    <div data-src="images/2.jpg"></div>
			</div>
		</div>
		

		<!-- bloque tres Areas de darrollo  -->
		<div class="areas">
			<div id = "titulo-areas">Areas de Desarrollo</div>

			<div class="contenedor-areas">
				<div class="area">
					<div class="circulo grow">
						<div class="foto-area"></div>
					</div>
					<div class="cuadrado">
						<div class="area-info">
							<div class="titulo-area">
								<h5>DESARROLLO WEB</h5>
							</div>
							<div class="descripcion-area">
								<p>Syar Corp ofrece el servicio de desarrollo de sistemas
								web, junto a este brindamos tambien el servicio de alquiler
								de hosting y venta de dominios.
								De este modo nuetros clientes no solo tendran una página
								web propia con un diseño elegante, sino tambien alojamiento 
								en la nube con un dominio propio a gusto y necesidad</p>
							</div>
						</div>
					</div>				
				</div>
				<div class="area">
					<div class="circulo grow">
						<div class="foto-area"></div>
					</div>
					<div class="cuadrado">
						<div class="area-info">
							<div class="titulo-area">
								<h5>SERVICIO TÉCNICO</h5>
							</div>
							<div class="descripcion-area">
								<p>Problemas con tu Pc o laptop?
								Tenemos un grupo de técnicos capcitados que les ayudarán 
								a solucionar de forma rápida y eficiente.
								Si busca algún complemento para su Pc como: 
								Teclados, algún mouse, memorias o USB o speakers entre otros
								Nosotros también se lo podemos brindar en las mejores marcas
								y modelos</p>
							</div>
						</div>
					</div>
				</div>	
				<div class="area">
					<div class="circulo grow">
						<div class="foto-area"></div>
					</div>
					<div class="cuadrado">
						<div class="area-info">
							<div class="titulo-area">
								<h5>APLICACIONES ANDROID</h5>
							</div>
							<div class="descripcion-area">
								<p>Si lo tuyo no son las páginas web  y prefieres utilizar las
								aplicaciones de tu móvil por ser más dinámicas y tener mayor 
								accesabilidad al tenerlas; tenemos también servicio de creación 
								de tefónos android,
								ya sea para negocio o simplemente por  entretenimiento, solo
								necesitamos las especificaciones y tu app sera una realidad.</p>
							</div>
						</div>
					</div>
					
				</div>	
				<div class="area">
					<div class="circulo grow">
						<div class="foto-area"></div>
					</div>
					<div class="cuadrado">
						<div class="area-info">
							<div class="titulo-area">
								<h5>SERVIDORES</h5>
							</div>
							<div class="descripcion-area">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum feugiat neque non dignissim. Fusce et ultricies leo. Duis ultricies a dolor vel placerat. Sed consectetur elementum nunc eget porttitor. Cras viverra, leo ac aliquam vehicula, orci nulla pellentesque tellus, eu luctus felis diam vel tortor. Quisque aliquam eros sit amet lectus elementum, eget blandit elit tempor. </p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>

		<!-- bloque cuatro  publicidad -->
		<div class="publicidad">
			<div id="publicidad-texto" class="left">
				¿Desea una mejor atención? <br>
				¿Un mejor servicio? <br>
				Nuestro equipo de soporte esta a su servicio 24/7.
			</div>		
			<div id="publicidad-link" class="right">
				<a href="">Atención</a>
			</div>
		</div>

		<!-- bloque cinco descripcion de la empresa con slider-->
		<div class="descripcion">
			<div id="porque" class="left">
				<div id="porque-titulo">Sobre <span>SyArPC</span></div>
				<div id="porque-texto">
                    SyArPC Soluciones Informáticas - Hosting, Dominios, Diseño web, Diseño Gráfico, Logos, Venta de Software, Venta de Hardware, Soporte PC y mucho mas. <br>
					Tenemos como principal objetivo, brindar soluciones para todo tipo de proyecto que desee llevar a cabo y a su vez llevar el mantenimiento de estos. <br><br>Nos comprometemos en la creación de soluciones globales para las empresas de todos los sectores, en forma activa, eficiente y rentable ajustándonos a sus presupuestos.<br> 
				</div>
			</div>
			<div id="ultimos-proyectos" class="right">
				 <div class="carousel">
				    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
				    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
				    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
				    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
				    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
				 </div>
				
			</div>
		</div>
		<!-- bloque seis tecnologias -->

		<div class="tecnologias">
			<marquee direction="LEFT">
				<img height="100"  width="180" src="images/logos/1.png"  /> 
				<img height="100"  width="180" src="images/logos/2.png"  />  
  				<img height="100"  width="180" src="images/logos/3.png"  />  
	  		</marquee> 
		</div>

		<!-- bloque siete footer -->
		<div class="footer">

			aqui va el footer
			<br>
			<br>
			<br>
			<br>
			<br>
			
		</div>
	</div>
	
</body>
</html>