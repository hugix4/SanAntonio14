<?php
require_once("conexionh1.php");
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
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
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
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
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
						</br><b style="color: #000066;">Resultados del Examen Diagnóstico Final 2014</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Resultados</b></li>
	</ul>
	<div id="tab-1" class="tab-content current">			
	<form align='center' id="examen" action="resultado.php" method="POST">
	<?php
	
	$sql0 = "select Cuenta, Grado, Clave from ExamenLGTSA2014 where Cuenta='$_POST[Cuenta]' And Clave='$_POST[Contra]'";
	$sql0=$conexion->consulta($sql0);
	while($row0=mysql_fetch_array($sql0)){
				$Cuenta=$row0["Cuenta"];
				$Clave=$row0["Clave"];
				$Grado=$row0["Grado"];
			}
	//echo"Cuenta: ".$Cuenta." Clave: ".$Clave." Grado: ".$Grado."<br/><br/>";
	
	
	if($Grado=='Cuarto'){
	echo"1.The young girl wants to go to a ___ with her father.
	</br><input type='radio' name='p1' value='1'>A. movie</input>
	</br><input type='radio' name='p1' value='0'>B. play</input>
	</br><input type='radio' name='p1' value='0'>C. musical</input>
	</br></br>
	2.Her father searches in the ___.
	</br><input type='radio' name='p2' value='0'>A. weekly paper</input>
	</br><input type='radio' name='p2' value='0'>B. local news</input>
	</br><input type='radio' name='p2' value='1'>C. newspaper</input>
	</br></br>
	3.The show starts at___.
	</br><input type='radio' name='p3' value='0'>A. 4:25</input>
	</br><input type='radio' name='p3' value='1'>B. 2:45</input>
	</br><input type='radio' name='p3' value='0'>C. 2:25</input>
	</br></br>
	4. They’re  going out with the girl’s ___.
	</br><input type='radio' name='p4' value='0'>A. granny</input>
	</br><input type='radio' name='p4' value='0'>B. granddaddy</input>
	</br><input type='radio' name='p4' value='1'>C. mommy</input>
	</br></br>
	5. Who’s at a meeting right now? ___.
	</br><input type='radio' name='p5' value='1'>A. The girl’s  mom</input>
	</br><input type='radio' name='p5' value='0'>B. The man’s young girl</input>
	</br><input type='radio' name='p5' value='0'>C. The girl’s parents</input>
	</br></br>
	6. What does the girl want to do later?___.
	</br><input type='radio' name='p6' value='1'>A. Go down to the beach</input>
	</br><input type='radio' name='p6' value='0'>B. Go through the park</input>
	</br><input type='radio' name='p6' value='0'>C. Go snorkeling  in the sea</input>
	</br></br>
	.
	</br><input type='radio' name='p7' value='0'>A. </input>
	</br><input type='radio' name='p7' value='0'>B. </input>
	</br><input type='radio' name='p7' value='0'>C. </input>
	</br></br>
	.
	</br><input type='radio' name='p8' value='0'>A. </input>
	</br><input type='radio' name='p8' value='0'>B. </input>
	</br><input type='radio' name='p8' value='0'>C. </input>
	</br></br>
	.
	</br><input type='radio' name='p9' value='0'>A. </input>
	</br><input type='radio' name='p9' value='0'>B. </input>
	</br><input type='radio' name='p9' value='0'>C. </input>
	</br></br>
	.
	</br><input type='radio' name='p10' value='0'>A. </input>
	</br><input type='radio' name='p10' value='0'>B. </input>
	</br><input type='radio' name='p10' value='0'>C. </input>
	</br></br>
	.
	</br><input type='radio' name='p11' value='0'>A. </input>
	</br><input type='radio' name='p11' value='0'>B. </input>
	</br><input type='radio' name='p11' value='0'>C. </input>
	</br></br>
	.
	</br><input type='radio' name='p12' value='0'>A. </input>
	</br><input type='radio' name='p12' value='0'>B. </input>
	</br><input type='radio' name='p12' value='0'>C. </input>
	</br></br>
	";
	}
	
	if($Grado=='Quinto'){
	echo"1.Speaker One really likes receiving ___ in Saint Valentine´s Day.  
	</br><input type='radio' name='vehicle' value='0'>A. presents</input>
	</br><input type='radio' name='vehicle' value='1'>B. cards</input>
	</br><input type='radio' name='vehicle' value='0'>C. candy</input>
	</br>	
	2.Last year she ___a Valentine ___someone special.
	</br><input type='radio' name='p1' value='0'>A. sent….to</input>
	</br><input type='radio' name='p1' value='0'>B. prepared ….for</input>
	</br><input type='radio' name='p1' value='1'>C. received…from</input>
	</br>
	";
	}
	
	if($Grado=='Sexto'){
	echo"1.The girl’s going out with a boy named ___. 
	</br><input type='radio' name='vehicle' value='1'>A. Dirk</input>
	</br><input type='radio' name='vehicle' value='0'>B. Rick</input>
	</br><input type='radio' name='vehicle' value='0'>C. Mark</input>
	</br>
	";
	}
	
	else if(!$Grado=='Cuarto' || !$Grado=='Quinto' || !$Grado=='Sexto'){
	echo "Hubo un problema con tu grado";
	}
	echo "<form/>";
	echo"</body>";
?>
		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2014. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>