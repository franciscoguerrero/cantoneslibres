<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<title>Cantones que necesitan ayuda</title>
</head>

<body>
<?php

// Establecer conexión con la base de datos.
include("conexion.php");

$result=mysql_query("SELECT * FROM cantones WHERE libre = 0");
while($array=mysql_fetch_array($result))
{
	echo htmlentities($array['nombre'])."<br/> ";
}


?>
</body>
</html>
