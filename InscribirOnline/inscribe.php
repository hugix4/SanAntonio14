<?php
require("ins_s.php");
include("conexionh.php");
$conexion=new conexion();
$conexion->conectar();
?>
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
		<title>LGTSA 2014</title>
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
				width: 100%;
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
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Inscripción en LGTSA2014</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Inscripción</b></li>
	</ul>

	<div id="tab-1" class="tab-content current">		
	
	<form action='altaIns.php'method='post'>
		Número de cuenta: <input type='number' name='cuenta'><br/><br/>
		Plantel: 
		<select name='Plantel'>
		<option></option>
		<option value='ENP 1'>ENP1</option>
		<option value='ENP 2'>ENP2</option>
		<option value='ENP 3'>ENP3</option>
		<option value='ENP 4'>ENP4</option>
		<option value='ENP 5'>ENP5</option>
		<option value='ENP 6'>ENP6</option>
		<option value='ENP 7'>ENP7</option>
		<option value='ENP 8'>ENP8</option>
		<option value='ENP 9'>ENP9</option>
		<option value='Azcapotzalco'>CCH Azcapotzalco</option>
		<option value='Naucalpan'>CCH Naucalpan</option>
		<option value='Oriente'>CCH Oriente</option>
		<option value='Sur'>CCH Sur</option>
		<option value='Vallejo'>CCH Vallejo</option>
		</select><br/><br/>
		Nombre completo(Apellido paterno, materno, nombre(s)):<input name='nombre'size='40'><br/><br/>
		Grupo y sección:<input name='grupo'><br/><br/>
		Turno:
		<select name='Turno'>
		<option></option>
		<option value='Matutino'>Matutino</option>
		<option value='Vespertino'>Vespertino</option>
		</select><br/><br/>
		Fecha de nacimiento(dd/mm/aaaa): <input name='nac'><br/><br/>
		Email: <input name='mail'><br/><br/>
		Email alterno:<input name='mail1' value='-'><br/><br/>
		Teléfono:<input name='tel'><br/><br/>
		Teléfono alterno:<input name='tel1' value='-'><br/><br/>
		Domicilio:<input name='dom' size='100'><br/><br/>
		<input type='submit' value='Inscribir'>
	</form>
	
	
	</body>

		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, @Hugix4</p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>