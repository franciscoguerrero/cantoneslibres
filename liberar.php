<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<title>Liberar Cantón</title>
</head>

<body>
<?php

$canton = $_GET['canton'];

// Establecer conexión con la base de datos.
include("conexion.php");

// cambiar cantón
mysql_query("UPDATE cantones SET libre=1 WHERE id='".$canton."'");
mysql_query("UPDATE cantones SET fecha=CURDATE() WHERE id='".$canton."'");
mysql_close($conexion);

echo "Gracias, ".$canton." es ahora un cantón libre de transgénicos.<br>";
echo "<a href='admin.php' class='btn'>Regresar al Administrador de Cantones Libres</a><br>";
echo "<a href='index.html' class='btn'>Revisar Aplicación Cantones Libres</a>";
?>
</body>
</html>
