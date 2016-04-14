<!doctype html>
<?php
include('conexionh.php');
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
		<meta http-equiv=Content-Type content="text/html; charset=ISO-8859-1">
		<title>Coordinaci&oacute;n General de Lenguas</title>
		<link rel="stylesheet" href="hugix.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="10%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	 
	 
	</head>
	<body>
	<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">&nbsp;Concurso &quot;Let's Go To San Antonio 2014&quot;</b>											
						
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->		
		<div id="wrapper"><!-- Aqu&iacute; se envuelve todo el contenido de la p&aacute;gina -->
			<section id="main"><!-- contenido principal y menus laterales -->
					<style type='text/css'>a:hover{color:#cb9d01;}	</style>
			
					<?php 
					// Actualizamos en funcion del id que recibimos 					 
					$Cuenta = $_POST['Cuenta']; 
					$inscrito = $_POST['inscrito']; 
					$mail = $_POST['mail'];
					$mail1 = $_POST['mail1'];					
					$turno=$_POST['Turno'];
					$tel = $_POST['tel'];
					$tel1 = $_POST['tel1'];
					$dom = $_POST['dom'];
					$fecha=$_POST['dia'].'/'.$_POST['mes'].'/'.$_POST['año'];
					
					//echo"Update LGTSA2014 Set Turno='$turno', Nac='$fecha', Inscrito='$inscrito', Mail='$mail',Mail1='$mail1', Tel='$tel', Tel1='$tel1', Dom='$dom' where Cuenta='$Cuenta' and Inscrito='No'";

					$sql= "Update LGTSA2014 Set Turno='$turno', Nac='$fecha', Inscrito='$inscrito', Mail='$mail',Mail1='$mail1', Tel='$tel', Tel1='$tel1', Dom='$dom' where Cuenta='$Cuenta' and Inscrito='No'";
					$sql=$conexion->consulta($sql);
					  
					echo " 
					</br></br><p>Tus datos han sido registrados, pronto recibirás un mail de confirmación, recuerda revisar tu Spam o Correo no deseado</p> 					
					<p><a href='sanantonio2014.html'>INICIO</a></p> 
					"; 
					?> 			
			
			
				<aside id="sidebar1"><!-- barra lateral izquierda -->
				</aside><!-- Aqui termina la barra lateral izquierda -->
					<section id="content"><!-- Este es el contenido principal -->			
						<article></article>					
					</section><!-- Aqu&iacute; termina el contenido principal de la p&aacute;gina -->
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
		<!--Que no le digan y que no le cuenten, toda esta p&aacute;gina fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
		</form>
	</body>
	<script type="text/javascript">


</script>
</html>
