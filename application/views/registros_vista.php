<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php echo $titulo ?></title>
	
</head>

<body>

<?php
foreach($filas as $fila)
{
	
echo'<b>'.$fila->id_usuario.'</b>&nbsp&nbsp&nbsp';
echo'<b>'.$fila->nombre_usuario.'</b>&nbsp&nbsp&nbsp';	
echo'<b>'.$fila->apellido_usuario.'</b>&nbsp&nbsp&nbsp';
echo'<b>'.$fila->correo_electronico.'</b>&nbsp&nbsp';
echo'<b>'.$fila->password.'</b>&nbsp&nbsp&nbsp';
echo'<b>'.$fila->empresa_usuario.'</b>&nbsp&nbsp&nbsp';
echo'<b>'.$fila->ciudad_usuario.'</b>&nbsp&nbsp&nbsp';
echo'<b>'.$fila->estado_usuario.'</b>&nbsp';	

echo'<p>_______________</p>';
}
?>
</body>
</html>
