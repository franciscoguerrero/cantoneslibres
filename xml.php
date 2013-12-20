<?php
/*
Descripción: Creador de XML de Cantones de Costa Rica
Autor: Francisco Guerrero
Version: 1.0.0
*/

// Establecer una conexión con la base de datos.
include("conexion.php");

// Recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE libre = 1 ORDER BY  `cantones`.`fecha` DESC");

// Crear xml
echo "<?xml version='1.0' encoding='utf-8'?>\n";
echo "<cantones>\n\n";

while($array=mysql_fetch_array($result)){
	$nombre = utf8_encode($array['nombre']);
	$nombre = strtolower($nombre);
	$nombre = str_replace(' ', '', $nombre);
	$nombre = str_replace('�', 'n', $nombre);
	$vocalti= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú");
	$vocales= array ("a","e","i","o","u","A","E","I","O","U");
	$nombre = str_replace($vocalti, $vocales, $nombre);
	$fecha = $array['fecha'];
	$fecha = date("d M, Y", strtotime($fecha));
	echo "<canton nombre='".$nombre."' titulo='".utf8_encode($array['nombre'])."'>\n";
	echo "<id>".$array['id']."</id>\n";
	echo "<libre>".$array['libre']."</libre>\n";
	echo "<fecha>".$fecha."</fecha>\n";
	echo "</canton>\n\n";
}
echo "\n</cantones>";

?>