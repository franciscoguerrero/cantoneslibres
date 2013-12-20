<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liberar Cantón</title>
</head>

<body>
<?php

$canton = $_GET['canton'];

// Establecer conexión con la base de datos.
include("conexion.php");

// cambiar cantón
mysql_query("UPDATE cantones SET libre=0 WHERE id='".$canton."'");
mysql_close($conexion);

echo $canton." ya no es un cantón libre de transgénicos.<br>";
echo "<a href='admin.php'>Regresar al Administrador de Cantones Libres</a><br>";
echo "<a href='index.html'>Revisar Aplicación Cantones Libres</a>";
?>
</body>
</html>
