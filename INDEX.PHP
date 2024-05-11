<?php
session_start();
if(isset($_POST['userid']) && isset($_POST['password']))
{
 //if the user has just try to log in
 $userid = $_POST['userid'];
 $password = $_POST['password'];

$db_conn = new mysqli('localhost', 'root', 'sa', 'calidad');

if(mysqli_connect_errno())
{
echo'Connection to database failed:'.mysqli_connect_error();
exit();
}
$query = "SELECT
serial_system.id_lic,
serial_system.serial,
auth.user_id,
auth.`date`,
auth.id_personalplantilla,
auth.name,
auth.pass,
auth.fecha_limite,
auth.Estado,
auth.serial
FROM
serial_system
Inner Join auth ON serial_system.serial = auth.serial
where name='$userid' and pass='$password' and auth.serial=serial_system.serial and Estado='Valido'";
//$query = "select * from auth where name='$userid' and pass='$hash' ";
$result = $db_conn->query($query);
if($result->num_rows>0)
{
//if they are in the database register the userid
$_SESSION['valid_user'] = $userid;
echo $fecha_limite;
}
$db_conn->close();
}
?>
<?php
//require_once "Role.php"; 
//require_once "PrivilegedUser.php";
if(isset($_SESSION['valid_user']))
  // $u = PrivilegedUser::getByUsername($_SESSION["valid_user"]);
	{
	//echo "Ahora estas logged in como:".$_SESSION['valid_user']."<br><div align='center'>";
   //echo '<script language="javascript">alert("! Welcome '.$userid.' you have granted to access to your System, your licence period will finish in 2018-03-31.");</script>';
   if(($_SESSION["valid_user"] == "admin") )
       {
        header("Location: dashboard.php");    
        }
      elseif($_SESSION["valid_user"] == "testuser")
       {
        header("Location: dashboards.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador1")
       {
        header("Location: procesoprimero.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador2")
       {
        header("Location: procesosegundo.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador3")
       {
        header("Location: procesotercero.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador4")
       {
        header("Location: procesocuarto.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador5")
       {
        header("Location: procesoquinto.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador6")
       {
        header("Location: procesosexto.php");
       }
      elseif($_SESSION["valid_user"] == "coordinador9")
       {
        header("Location: procesonoveno.php");
       }
      else
       {
        header("Location: procesodecimo.php");
       }
	}
	else
	{
  if (isset($userid) )
		{
		echo '<script language="javascript">alert("Hola, existe un error de usuario y/o contraseña. No has podido hacer login a QX3M-7.Mangrisk!. Consulte al administrador del sistema");</script>';
		//echo '<script language="javascript">alert("! Hello  '.$userid.' , sorry but your licence period had finished.");</script>';		
		}
		else
		{
		//si no han intentado hacer logging o han hecho logged out.
		echo '<script language="javascript">alert("¡Hey, ahora estas logged out de QX3M-7.Mangrisk!.");</script>';				
		}
		//provee el formulario para hacer log in.
		echo'<div align="center"><a><img src="img/Product.PNG" width="489" height="193" /></a>';
		echo "<form method=post action=\"index.php\">"; 
		echo "<img src='img/HOME-BG.PNG' width='249' height='313'/><img src='img/580b585b2edbce24c47b29fb.png' width='343' height='313'/><div class='mobile-container'>";
        echo "<div class='mobile-container'><table width='216' border='0' align='right'></div>"; 
		echo "<tr><td>Usuario:</td>"; 
		echo "<td><input type=text name=userid></td></tr>"; 
		echo "<tr><td>Contrasena:</td>";  
		echo "<td><input type=password name=password></td></tr>";  
		echo "<tr><td><align=center>"; 
		echo "<input type=submit value=\"Log in\"></td></tr>";
		echo "<td><a href='registration_form.php'>Registrar / </td><td><a href='registration_form.php'>Olvido Contraseña?</td>"; 
		echo "</table></div class='mobile-container'></form>"; 
     //echo'';
        
	}
// once processing is complete
// free result set
//mysql_free_result($result);
// close connection to MySQL server
//mysql_close($connection);
?>
<?php
//reaadfile, header, include
include('filtrar_script.asp.php');
?>
<?php
    $date= date('Y-m-d G:i:s');
    $valid_user = $_SESSION['valid_user'];

//Conexion con la base
mysql_connect("localhost","root","sa");
//Ejecucion de la sentencia SQL
mysql_db_query("calidad","insert into control_acceso (date,valid_user) values ('" . $date . "','" . $valid_user . "')");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="icon" type="image/png" id="favicon" href="img/Logo.png"/>
<!-- DW6 -->

<meta name="viewport" content="width=device-width,user-scalable=no, intial-scale=1.0, maximun-scale=1.0, , minimun-scale=1.0; charset=UTF8_spanish_ci">
<title>QX3M-7.Mangrisk.php</title>
<link rel="icon" type="image/png" id="favicon" href="img/Logo.png"/>
<link rel="stylesheet" href="2col_leftNav.css" type="text/css" />
</head>
<style type="text/css">
	*{margin:0px;padding:0px}
    body{font-family:arial}
    }
    @media only screen and (min-width: 480px)
    {   
     
    }
    @media only screen and (min-width: 768px){
     
    }

	table {font:normal 12px verdana, arial, helvetica, sans-serif;color: black;font-size:10px;background-image: url(imagen/aEncabezadoWebsite.jpg);}
	th{border: 0;text-align: center;}
	th{background-color: #FF3333;}
	tr:hover{background-color: #99CCFF;color: #FF0000;}
	tr:first-child:hover{background-color: #F4F4F4;color: #000000;}
	tr:first-child:hover{background-color: white;color: black;}
	td{border: 0; text-align: center;text-align: center;}
.Estilo10 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo11 {font-size: 12}
.Estilo12 {
	font-weight: bold;
	color: #0000FF;
}
.mobile-container {
  max-width: 320px;
  margin: auto;
  background-color: #fff;
  height: 150px;
  width: 260px;
  color: white;
  border-radius: 10px;
  float: right;
  box-shadow: 2px 10px 20px rgba(150,0,0,0.8);
}

.age {
  position: absolute;
    top: 504px;
    width: 639px;
    height: 60px;
    font-size: 15px;
    font-weight:600;
    margin: 2px -830px;
}

.cover {
  width: 100%;
  height: 120%;
  border-radius: 5px;
  transition: background .5s;
  background: rgba(0,255,255,0.7);
}
.history-block {
  box-shadow: -10px 25px 80px rgba(250,0,0,0.8);
 }

.loader {
    border: 4px solid #cccccc; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 2s linear infinite;
	margin: 450px;
}
@keyframes spin {
    0% { transform: rotate(0 deg); }
    100% { transform: rotate(360 deg); }
}
<!--
body {<?php
	//Sentencia de control
	$hoy = date("H:i:s"); 
	if($hoy < '14:11:16')
	{?>background-image: url(img/DESK.JPG);<?php
	} 
	else ?>
	background-image: url(img/DESK.JPG);
}
-->
</style>
<link rel="stylesheet" href="2col_leftNav1.css" typec="text/css" />
<body>
<?php echo '<div class="age"><div class="cover"><div class="history-block"><align=center width="214"></a>TRASNFORME DIGITALMENTE SU ORGANIZACION POR MEDIO DE UNA HERRAMIENTA WEB DESDE UN DISPOSITIVO MOVIL. PLANIFIQUE SU SISTEMA DE GESTION DE CALIDAD Y MEJORE LA EFICACIA DE LOS PROCESOS DE NEGOCIO, CONFORME A LA ISO 9001:2015 POWERED BY: QualityXtreme.</a></div>';?>
&nbsp;
<align=center><a href="www.facebook.com/raphgomez"><img src="img/facebook-logo-redondo-PNG.png" width="68" height="66" /></a></span></td></span>&nbsp;&nbsp;&nbsp;</td+1><td><a href="www.twitter.com/raphgomez"><td+1>&nbsp;&nbsp;&nbsp;<img src="img/twitter-bird-symbols-png-logo-0.png" width="80" height="78" /></a></span></td></span></td+1><td></a> &nbsp;&nbsp;&nbsp;<img src="img/logo-ig-instagram-logo-icon-icon-instagram-logo-social-media-10.png" width="80" height="78" /></span></td></span></td+1><td></a>&nbsp;&nbsp;&nbsp;&nbsp; <img src="img/youtube-circle-icon-png-logo-14.png" width="80" height="78" /></span></td></span></td+1><td></a>&nbsp;&nbsp;&nbsp;&nbsp; <img src="img/580b57fcd9996e24bc43c543.png" width="72" height="70" /> 
<align=center><footer> Software Sistema de Gestion de Calidad-7, version 1.0.7 </a> 
<align=center><footer> Copyright © 2022 !Todos los derechos reservados! <a href="http://www.facebook.com/qms">www.facebook.com/qms</a> 
<align=center><footer>  | No.Registro: 1963-11-2023 </a> 

</footer> 
</body> 
</html>