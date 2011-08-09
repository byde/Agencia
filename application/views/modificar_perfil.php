<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>modificar_perfil</title>
	
</head>

<body>
<right><a href='salir'>salir</a></right>
<h2>perfil de:
<? echo $_SESSION['nombreocorreo'] ?>
</h2>
<br><br>
<?php echo validation_errors()?>
<?php echo form_open('registros_control/modificar_registrar') ?>
<?php echo form_label('Nombre: ','nombre') ?>
<?php echo form_input(array('name'=>'nombre_usuario','id'=>'nombre_usuario','size'=>'50','value'=>$perf['nombre_usuario']	)) ?>
<br>
<?php echo form_label('Apellido: ','apellido') ?>
<?php echo form_input(array('name'=>'apellido_usuario','id'=>'apellido_usuario','size'=>'50','value'=>$perf['apellido_usuario'])) ?>
<br>
<?php echo form_label('Correo electrónico: ','correo') ?>
<?php echo form_input(array('name'=>'correo_electronico','id'=>'correo_electronico','size'=>'30','value'=>$perf['correo_electronico'])) ?>
<br>
<?php echo form_label('Contraseña: ','password') ?>
<?php echo form_password(array('name'=>'password','id'=>'password','size'=>'50','value'=>$perf['password'])) ?>
<br>
<?php echo form_label('Empresa en que laboras: ','empresa_usuario') ?>
<?php echo form_input(array('name'=>'empresa_usuario','id'=>'empresa_usuario','size'=>'50','value'=>$perf['empresa_usuario'])) ?>
<br>
<?php echo form_label('Ciudad: ','ciudad_usuario') ?>
<?php echo form_input(array('name'=>'ciudad_usuario','id'=>'ciudad_usuario','size'=>'30','value'=>$perf['ciudad_usuario'])) ?>
<br>
<?php echo form_label('Estado: ','estado_usuario') ?>
<?php echo form_input(array('name'=>'estado_usuario','id'=>'estado_usuario','size'=>'30','value'=>$perf['estado_usuario'])) ?>
<input type='submit' value='actualizar'/>
<?php echo form_close() ?>


</body>
</html>
