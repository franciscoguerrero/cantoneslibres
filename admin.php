<?php
//put sha1() encrypted password here - example 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d' is 'hello'
$password = '8190f494e04bb12d05f7f9680a166d910d2462f3';
session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<?php
if (!isset($_SESSION['loggedIn'])){
    $_SESSION['loggedIn'] = false;
}
if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Clave incorrecta');
    }
} 
if (!$_SESSION['loggedIn']):?>
<title>Identificación</title></head>
  <body>
  <div class="hero-unit">
  <h1>Administrador de Cantones Libres</h1>
    <form method="post">
      Clave: <input type="password" name="password"> <br />
      <input type="submit" class="btn btn-success btn-large" name="submit" value="Entrar">
    </form>
</div>
    
  </body>
</html>

<?php
exit();
endif;
?>
<?php
// establece una conexión con la base de datos.  francis2_canton francis2_cantoneslibres u6yHAKoH&6eK
include("conexion.php");
?>
<title>Administrador de Cantones Libres</title>
</head>
<body>
<div class="hero-unit">
  <h1>Administrador de Cantones Libres</h1>
  <?php 
  $result=mysql_query("SELECT * FROM cantones WHERE libre = 1");
  $rows = mysql_num_rows($result);
  $porcentaje= round($rows/82*100, 0, PHP_ROUND_HALF_DOWN);
  ?><p>¡Felicitaciones! <?php echo $porcentaje; ?>% de los municipios se han declarado libres de transgénicos.</p>
  <div class="progress progress-success progress-striped">
  <div class="bar" style="width:<?php echo $porcentaje; ?>%"></div>
</div>
  <p>
    <a href="index.html" class="btn btn-success btn-large" target="_blank">
      Ver aplicación  Cantones Libres
    </a>
  </p>
<!-- Button to trigger modal -->
<div class="btn-group">
<a href="#instrucciones" role="button" class="btn" data-toggle="modal">Instrucciones</a>
<a href="#acercaDe" role="button" class="btn" data-toggle="modal">Créditos</a>
<a href="logout.php" role="button" class="btn">Salir</a>
</div>
</div>
<p>
 
<!-- Modal -->
<div id="acercaDe" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Créditos</h3>
  </div>
  <div class="modal-body">
    <p><a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.es_ES"><img alt="Licencia de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Cantones Libres</span> es desarrollado por <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.franciscoguerrero.org" property="cc:attributionName" rel="cc:attributionURL">Francisco Guerrero</a> basado en el mapa de <a href="https://www.facebook.com/fernandofrancia">Fernando Francia</a> y se publica bajo licencia <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.es_ES">Creative Commons Reconocimiento 3.0 Unported License</a>.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!-- Modal AYUDA -->
<div id="instrucciones" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Instrucciones</h3>
  </div>
  <div class="modal-body">
    <p>Administre los cantones de Costa Rica y edite cuáles se han declarado libres de transgénicos.<br /><br />Los cantones están organizados por provincia y cada nombre es un botón, utilice los botones para activar y desactivar cantones.<br /><br />Estos cambios se graban en la base de datos y se verán reflejados en el mapa, la lista de cantones libres y el porcentaje desplegado en la aplicación principal.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<div class="well"><?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'alajuela'");
echo "<h2>Alajuela</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}
?>
</div><div class="well">
<?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'cartago'");
echo "<h2>Cartago</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}
?>
</div>
<div class="well"><?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'guanacaste'");
echo "<h2>Guanacaste</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}

?>
</div>
<div class="well">
<?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'heredia'");
echo "<h2>Heredia</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}

?>
</div><div class="well">
<?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'limon'");
echo "<h2>Limón</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}

?></div><div class="well">
<?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'puntarenas'");
echo "<h2>Puntarenas</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}

?>
</div><div class="well"><?php
// recolectar los datos de los cantones
$result=mysql_query("SELECT * FROM cantones WHERE provincia = 'sanjose'");
echo "<h2>San José</h2>";
// listar cantones
while($array=mysql_fetch_array($result))
{
	if ($array['libre']==1)
	{
    echo "<a href='liberar-undo.php?canton=".$array['id']."' class='btn-small btn-success'>".htmlentities($array['nombre'])." es libre</a> ";
	} else
	{
    	echo "<a href='liberar.php?canton=".$array['id']."' class='btn btn-important'>".htmlentities($array['nombre'])." necesita ser liberado</a> ";
	}
}
?>
</div>
</p>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>