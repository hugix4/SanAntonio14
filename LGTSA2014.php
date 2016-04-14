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
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="10%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	 
	<?php echo "<script>
function todos(){
   if(document.getElementById('tel').value==0 || document.getElementById('mail').value==0 || document.getElementById('Turno').value==0 || document.getElementById('dia').value==0 || document.getElementById('mes').value==0 || document.getElementById('año').value==0){		
     alert('Debes llenar los campos con asterisco');
	 return false;
   } else{     
     return true;
   }
 }
</script> "?>
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
			
								
			<div align="center"> 
     
            <?php  
$cuenta = $_POST['Cuenta']; 
    $sql= "select Inscrito,Nombre,Plantel,Grupo from LGTSA2014 where Cuenta = '$cuenta'";
	$sql=$conexion->consulta($sql);    

while ($registro = mysql_fetch_array($sql)){ 

	if($registro['Inscrito']== 'SI' || $registro['Inscrito']== 'Si' || $registro['Inscrito']== 'si'){
		echo"</br></br>Tus datos ya se encuentran registrados para el Concurso 'Let's Go to San Antonio 2014' agradecemos tu participaci&oacute;n, mucha suerte. </br></br></br>";
	//	exit("Gracias"); 
	}

if($registro['Inscrito']== 'No'){
echo " 
<div align='center' > 
    <table border='0' width='65%' style='font-family: Verdana; font-size: 8pt' id='table1'> 
        <tr> 
            <td colspan='8'><h3 align='center'>Verifica que tus datos sean correctos</h3></td> 
        </tr> 
        <tr> 
            <td ><p align='right'><b>Nombre: </b></td> 
            <td ><p align='center'><input type='text' name='nombre' readonly='readonly' disabled='yes' size='50' value='".$registro['Nombre']."'></td>
			<td ><p align='right'><b>Plantel: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='20' value='".$registro['Plantel']."'></td> 
			<td ><p align='right'><b>Grupo: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='5' value='".$registro['Grupo']."'></td>			
		</tr><br/>	
		<tr>            
			<td colspan='8'><p align='center'><b>Llena los siguientes campos y da click en 'Finalizar inscripción' </b></td> 
        </tr> 	
        <form method='POST' action='LGTSA2014x.php' onsubmit='return todos();'>
		<tr> 
            <td ><p align='right'><b>*Email: </b></td> 
            <td ><p align='left'><input type='text' id='mail' name='mail' size='40'></td> 
			<td ><p align='right'><b>E-mail alterno:</b></td> 
            <td colspan='2'><p align='left'><input type='text' id='mail1' name='mail1' size='40'></td>
			<td ><p align='right'><b>*Turno: </b></p></td>
			<td valign='top'>
			<select id='Turno' name='Turno'>
			<option></option>
			<option value='Matutino'>Matutino</option>
			<option value='Vespertino'>Vespertino</option>
			</td>
			
		</tr>
		<tr>	
			<td ><p align='right'><b>*Teléfono: </b></td> 
            <td ><p align='left'><input type='text' id='tel' name='tel' size='25'></td> 
			<td ><p align='right'><b>Teléfono alterno:</b></td> 
            <td ><p align='center'><input type='text' name='tel1' size='25'></td> 
		</tr>
		
        <tr> 			
            <td ><p align='right'><b>Domicilio:</b></td> 
            <td colspan='7'><p align='left'><input type='text' name='dom' size='90'></td> 			
        </tr>   	

		
		 
	</table> 		
		
		
		<br/>
		<style type='text/css'>
				a:hover{color:#cb9d01;}
			  p {
				font-family:Century Gothic, sans-serif;
				font-size:14px;
				color: #fff;
				}

				p4{
				font-family:Century Gothic, sans-serif;
				font-size:12%;
				color: #fff;
				}				
				
				.tablin{
				font-size:14px;
				font-family:Century Gothic, sans-serif;
				color: #fff;
				}
				
				div.tabla_centro{
				text-align: center;
				}

				div.tabla_centro table {
				margin: 0 auto;
				text-align: center;
				}
				
				  </style>
		
		<div class=tabla_centro><table class=tablin align=center valign=middle border=0 width=40% cellpadding='10'>
		<tr>
			<td colspan='2'><p align='right'><b>*Fecha de nacimiento:</b></td> 
			<td align='right' valign='top'>
			<select id='dia' name='dia'>
			<option></option>
			<option value='01'>1</option>
			<option value='02'>2</option>
			<option value='03'>3</option>
			<option value='04'>4</option>
			<option value='05'>5</option>
			<option value='06'>6</option>
			<option value='07'>7</option>
			<option value='08'>8</option>
			<option value='09'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			<option value='13'>13</option>
			<option value='14'>14</option>
			<option value='15'>15</option>
			<option value='16'>16</option>
			<option value='17'>17</option>
			<option value='18'>18</option>
			<option value='19'>19</option>
			<option value='20'>20</option>
			<option value='21'>21</option>
			<option value='22'>22</option>
			<option value='23'>23</option>
			<option value='24'>24</option>
			<option value='25'>25</option>
			<option value='26'>26</option>
			<option value='27'>27</option>
			<option value='28'>28</option>
			<option value='29'>29</option>
			<option value='30'>30</option>
			<option value='31'>31</option>
			</select>
			</td>
			<td align='left' valign='top'>Día</td>
			<td align='right' valign='top'>
			<select id='mes' name='mes'>
			<option></option>
			<option value='1'>Enero</option>
			<option value='2'>Febrero</option>
			<option value='3'>Marzo</option>
			<option value='4'>Abril</option>
			<option value='5'>Mayo</option>
			<option value='6'>Junio</option>
			<option value='7'>Julio</option>
			<option value='8'>Agosto</option>
			<option value='9'>Septiembre</option>
			<option value='10'>Octubre</option>
			<option value='11'>Noviembre</option>
			<option value='12'>Diciembre</option>
			</select>
			</td>
			<td align='left' valign='top'>Mes</td>
			<td align='right'valign='top'>
			<select id='año' name='año'>
			<option></option>
			<option value='1990'>1990</option>
			<option value='1991'>1991</option>
			<option value='1992'>1992</option>
			<option value='1993'>1993</option>
			<option value='1994'>1994</option>
			<option value='1995'>1995</option>
			<option value='1996'>1996</option>
			<option value='1997'>1997</option>
			<option value='1998'>1998</option>
			<option value='1999'>1999</option>
			<option value='2000'>2000</option>
			</select>
			</td>
			<td align='left' valign='top'>Año</td>
            
        </tr> 
		</table>
		<br/><br/>
		<input type='hidden' name='Cuenta' value='$cuenta'> 
		<input type='hidden' name='inscrito' value='Si'>		
		<p align='center'> 
		<input type='submit' value='Finalizar inscripción' name='B1'>
		</div>
		</form>
		
		
        
</div> 
"; }
$conexion->desconectar();
} //Fin del while
?> 
	</br>
	<b><a href="LGTSA2014dudas.html">¿No aparecen tus datos o son incorrectos?</a></b>
	</br></br>
</div> 
			
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
</html>
