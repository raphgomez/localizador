<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="mangrisk" href="qx3m_rMk_icon.ico" />
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF8_spanish_ci">
<title>QX3M-7.Mangrisk|Dashboards.php</title>
<link rel="stylesheet" href="2col_leftNav.css" type="text/css" />
<style type="text/css">
	table {font:normal 12px verdana, arial, helvetica, sans-serif;color: black;font-size:10px;background-color: white;}
	th{border: 0;text-align: center;}
	th{background-color: #FF3333;}
	tr:hover{background-color: #99CCFF;color: #FF0000;}
	tr:first-child:hover{background-color: #F4F4F4;color: #000000;}
	tr:first-child:hover{background-color: white;color: black;}
	td{border: 0; text-align: center;text-align: left;}
.Estilo10 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo11 {font-size: 12}
.Estilo12 {
	font-weight: bold;
	color: #0000FF;
}
div.avatar {
    /* cambia estos dos valores para definir el tamaño de tu círculo */
    height: 40px;
    width: 40px;
    /* los siguientes valores son independientes del tamaño del círculo */
    background-repeat: no-repeat;
    background-position: 70%;
    border-radius: 70%;
    background-size: 100% auto;
}
div.avatar2 {
    /* cambia estos dos valores para definir el tamaño de tu círculo */
    height: 30px;
    width: 40px;
    /* los siguientes valores son independientes del tamaño del círculo */
    background-repeat: no-repeat;
    background-position: 45%;
    border-radius: 50%;
    background-size: 180% auto;
}
#rcorners1 {  border-radius: 15px 50px 30px 5px;  
background: #73AD21;  
padding: 20px;   
width: 200px;  height: 150px; 
}
.topnav {
  overflow: hidden;
  background-color: #fff;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  float: left;
  color: white;
  padding: 4px 6px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.icon {
  float: right;
}

.topnav a:hover {
  background-color: #fff;
  color: black;
}

.active {
  background-color: #ffffff;
  color: white;
}
a.loader {
    border: 4px solid #000000; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 2s linear infinite;
}

.calloutA {
  position: fixed;
  bottom: 410px;
  left: -5px;
  margin-left: 10px;
  max-width: 300px;
}
.callout-containerA {
  padding: 20px 10px;
  background-image: url(img/Here-are-the-Proven-Real-world-Applications-of-Artificial-Neural-Network-jpg-webp.webp);
  color: black;
  border-radius: 10px;
  opacity: 0.8;
  box-shadow: 1px 4px 20px rgba(50,0,0,0.8);
}
.callout-container1A {
  padding: 30px 1px;
  background-color: #ffffff;
  color: black;
  border-radius: 10px;
  opacity: 0.8;
  box-shadow: 1px 4px 20px rgba(50,0,0,0.8);
}
.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.notification {
  background-color: ffffff;
  color: white;
  text-decoration: none;
  padding: 5px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: lightblue;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
<!--
body {<?php
	//Sentencia de control
	$hoy = date("H:i:s"); 
	if($hoy < '14:11:16')
	{?>background-image: url(img/SiteInfo4.jpg);<?php
	} 
	else ?>
	background-image: url(img/SiteInfo4.jpg);
}
-->
</style>
</head>
<body>

</body>   
<?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Gasto'
ORDER BY id_presupuesto DESC");
$a = mysql_fetch_array($r);
?>	
<?php 
// primero conectamos siempre a la base de datos mysql 
$sql = "SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Gasto'
ORDER BY id_presupuesto DESC";  // sentencia sql 
$r = mysql_query($sql); 
$gastos_dig = mysql_num_rows($r); // obtenemos el n�mero de filas 
''.$gastos_dig.' documentos dig';  // imprimos en pantalla el n�mero generado 
?>
<?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Ingreso'
ORDER BY id_presupuesto DESC");
$a = mysql_fetch_array($r);
?>	
<?php 
// primero conectamos siempre a la base de datos mysql 
$sql = "SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Ingreso'
ORDER BY id_presupuesto DESC";  // sentencia sql 
$r = mysql_query($sql); 
$ingresos_dig = mysql_num_rows($r); // obtenemos el n�mero de filas 
''.$ingresos_dig.' documentos dig';  // imprimos en pantalla el n�mero generado 
?>
<?php
//defino server, db, user, pass
include 'conexion.php';
mysql_select_db("calidad");
$r = mysql_query("SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Gasto' AND Descripcion='Inversion' 
ORDER BY id_presupuesto DESC");
$a = mysql_fetch_array($r);
?>	
<?php 
// primero conectamos siempre a la base de datos mysql 
$sql = "SELECT*
FROM
presupuesto_personal
WHERE Clasificacion='Gasto' AND Descripcion='Inversion' 
ORDER BY id_presupuesto DESC";  // sentencia sql 
$r = mysql_query($sql); 
$inversiones_dig = mysql_num_rows($r); // obtenemos el n�mero de filas 
''.$inversiones_dig.' documentos dig';  // imprimos en pantalla el n�mero generado 
?>
<?php
$hoy = date("H:i:s");
		 if ($hoy > 0)
			{?>	
			<div class="calloutA"><div class="callout-header1A"><div align="center"><img src="img/Logo.png" width="40" height="38" /><img src="img/Brand1.png" width="180" height="28" /></div><span class="closebtn" onclick="this.parentElement.style.display='none';">×</span><div class="callout-containerA"><h1>Indices Bursatiles de Mercado</h1>
			  <tr></td></span>
    <td><p><span class="badge"></p><strong>
        <?php
		//defino server, db, user, pass
		include 'conexion.php';
		//cargo los datos de la noticia
		$r = mysql_query("SELECT
		planeacion_estrategica.id_planestrat,
		planeacion_estrategica.id_variablesprestel,
		planeacion_estrategica.`date`,
		planeacion_estrategica.dif,
		planeacion_estrategica.valid_user,
		planeacion_estrategica.factor,
		planeacion_estrategica.idpaises,
		planeacion_estrategica.age,
		planeacion_estrategica.fuente,
		planeacion_estrategica.clasificacion,
		planeacion_estrategica.observaciones,
		planeacion_estrategica.Estado_factor,
		planeacion_estrategica.ruta_fichero,
		planeacion_estrategica.Esencia
		FROM
		planeacion_estrategica
		WHERE Esencia='Principales Indices bursatiles'
		ORDER BY factor ASC");
		$a = mysql_fetch_array($r);
		?>
		<table id="myTable">
			<th style="width:1%;">Indices bursatiles</span></th>
		  <tr style="">
			<td>
				<?
				$hoy = date("Y-m-d")."\n";  
				//comienza el ciclo
						  for($b=0;$b<mysql_num_rows($r);$b++)
						   {
							 mysql_data_seek($r,$b);
							 $a = mysql_fetch_array($r);
							 //mostrar la imagen si hay alguna
							 if($b%2>0 && $color = "#ffffff")
						echo '<tr bgcolor=#cccccc><td><strong>'.$a["factor"].'</strong>:'.$a["observaciones"].'</a></span></td>
						  ';
						  else
						echo '<tr bgcolor=#ffffff><td><strong>'.$a["factor"].'</strong>:'.$a["observaciones"].'</a></span></td>
						  ';
						   }
		?>
      <span class="Estilo3"><strong><strong>
      </strong></strong></span> </strong>
	</td>
	<td+1>
	 <div class="callout-container1"><table><tr><td>
 			</span>
	</tr><tr>
	<td>
	 </tr></td></table></div></div></div>
			<?php   
		    }
		else
			{
			echo '';					
			}
?>
