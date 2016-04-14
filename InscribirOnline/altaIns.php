<?php
require("ins_s.php");
include("conexionh.php");
$conexion=new conexion();
$conexion->conectar();
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
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Inscripción LGTSA2014</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Inscrito</b></li>
	</ul>

	<div id="tab-1" class="tab-content current">		
		<br><br>
		<?php
		$cuenta=$_POST[cuenta];
		$plantel=$_POST[Plantel];
		$nombre=$_POST[nombre];
		$grupo=$_POST[grupo];
		$turno=$_POST[Turno];
		$fecha=$_POST[nac];
		$mail=$_POST[mail];
		$mail1=$_POST[mail1];
		$tel=$_POST[tel];
		$tel1=$_POST[tel1];
		$dom=$_POST[dom];
		
		
		
		//echo "Hola".$cuenta.$plantel.$nombre.$grupo.$turno.$fecha.$mail.$mail1.$tel.$tel1;		
		$sql="insert into LGTSA2014 (Cuenta, Plantel, Nombre, Grupo, Turno, Nac, Inscrito, Mail, Mail1, Tel, Tel1, Dom) VALUES('$cuenta', '$plantel', '$nombre', '$grupo', '$turno', '$fecha','SI', '$mail', '$mail1', '$tel', '$tel1','$dom')";	
		//echo $sql;
		$sql=$conexion->consulta($sql);
		echo "<br/>Inscripción exitosa<br/>";
		echo "<u><a href='javascript:history.back(-1);' title='Back'>Regresar </a></u>";
		?>
		
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