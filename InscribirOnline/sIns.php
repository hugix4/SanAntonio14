<?php
	session_start();
	session_destroy();
?>
<!doctype html>
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Caja 2014</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
			})

		})
  </script>
		 
	
	</head>	
	<body>
	
		<style>
			.container{
				width: 60%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
		</style> 
<!--****************************Esta es la secci�n destinada a la barra del men� principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Consulta tus ahorros en caja 2014</b>										
					</ul>
	</div>
<!--****************************Termino de la secci�n de la barra del men� principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aqu� se envuelve todo el contenido de la p�gina -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Gracias</b></li>
	</ul>

	<div id="tab-1" class="tab-content current">		
		<br><br>
		<h1>Sesi�n finalizada</h1>
		<br><br>
		Gracias por acceder a la p�gina
		<br><br>
		<u><a href="Caja2014.html">Ir a la p�gina de inicio</a></u>
		
	</div>
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">@Hugix4</p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>