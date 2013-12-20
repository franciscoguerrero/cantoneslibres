<?php
// ARCHIVO DE CONECCION POR FRANCISCO GUERRERO

//CONEXION SERVER
$conexion = mysql_connect("localhost","voxpopul_libres","u6yHAKoH&6eK") or die("No se pudo ");  
mysql_select_db("voxpopul_cantoneslibres") or die("No se puede seleccionar BD");

// CONEXION LOCAL
//$conexion = mysql_connect("localhost","root","") or die("No se pudo conectar a la base de datos"); 
//mysql_select_db("cantoneslibres") or die("No se puede seleccionar BD");


?>