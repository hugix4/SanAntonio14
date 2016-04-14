<?php
require_once('conexionh.php');
$conexion=new conexion();
$conexion->conectar();
session_start();
//Se verifica el usuario y su contraseña   
$Clave = $_POST[Clave];
//*********************************************************************************


//No hubo datos previos************************************************************
	if(!empty($Clave)){
	$sql = "select Adm from LGTSA2014 where Cuenta='".$Clave."'";
    $sql=$conexion->consulta($sql);	
	if(mysql_num_rows($sql)>0){
	
		$con=mysql_fetch_array($sql);
		if($con[Adm]=='S'){		
			$_SESSION["a1"]="1";
			header("Location:inscribe.php");
		}		
		else{
			header("Location:inscribe.html?errorusuario=si");		
		}
		
	}
	else{
			header("Location:inscribe.html?errorusuario=si");			
		}
	}	

	
?>