<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Syar Corp</title>
	<link rel='stylesheet' href='css/camera.css' media='all'> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/coin-slider-styles.css">

	<script src="js/jquery.js"></script>
	<script type='text/javascript' src='js/camera/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/camera/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera/camera.js'></script>
	<script src="js/coin-slider.js"></script>
	<script src="js/main.js"></script>
</head>

<body>

	<div class="contenedor-global">

		<!-- bloque uno logo y menu-->
		<div class="menu">	
			<div class="logo left">
				<img src="images/logo.png" >
				
			</div>
			<div class="navegador right">
				<nav>
					<ul>
						<li class="inicio"><a href="">Inicio</a></li>
						<li><a href="">Dominios</a></li>
						<li><a href="">Hosting</a></li>
						<li><a href="">Hardware</a></li>
						<li><a href="">Aplicaciones</a></li>
					</ul>
				</nav>
			</div>
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
				<div class="cuadro-area">
				
				</div>
				<div class="cuadro-area">
					
				</div>	
				<div class="cuadro-area">
					
				</div>	
				<div class="cuadro-area">
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
			<div id="porque">
				<div class="porque-titulo">Sobre <span>SyArPC</span></div>
				<div class="porque-texto" class="left">
                    SyArPC Soluciones Informáticas - Hosting, Dominios, Diseño web, Diseño Gráfico, Logos, Venta de Software, Venta de Hardware, Soporte PC y mucho mas. <br>
					Tenemos como principal objetivo, brindar soluciones para todo tipo de proyecto que desee llevar a cabo y a su vez llevar el mantenimiento de estos. <br><br>Nos comprometemos en la creación de soluciones globales para las empresas de todos los sectores, en forma activa, eficiente y rentable ajustándonos a sus presupuestos.<br> 
				</div>
			</div>
			<div id="ultimos-proyectos" class="right">
				
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