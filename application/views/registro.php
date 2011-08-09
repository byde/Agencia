<?php echo validation_errors()?>
<?php echo form_open('registros_control/registrar', array("id"=>"form_reg")) ?>
<?php echo form_label('Nombre: ','nombre') ?>
<?php echo form_input(array('name'=>'nombre_usuario','id'=>'nombre_usuario','size'=>'50','value'=>set_value('nombre_usuario'))) ?>

<?php echo form_label('Apellido: ','apellido') ?>
<?php echo form_input(array('name'=>'apellido_usuario','id'=>'apellido_usuario','size'=>'50','value'=>set_value('apellido_usuario'))) ?>

<?php echo form_label('Correo electrónico: ','correo') ?>
<?php echo form_input(array('name'=>'correo_electronico','id'=>'correo_electronico','size'=>'30','value'=>set_value('correo_electronico'))) ?>

<?php echo form_label('Nombre de usuario: ','usuario') ?>
<?php echo form_input(array('name'=>'usuario','id'=>'usuario','size'=>'50','value'=>set_value('usuario'))) ?>

<?php echo form_label('Contraseña: ','password') ?>
<?php echo form_password(array('name'=>'password','id'=>'password','size'=>'50','value'=>set_value('password'))) ?>


<?php echo form_label('Empresa en que laboras: ','empresa_usuario') ?>
<?php echo form_input(array('name'=>'empresa_usuario','id'=>'empresa_usuario','size'=>'50','value'=>set_value('empresa_usuario'))) ?>

<?php echo form_label('Ciudad: ','ciudad_usuario') ?>
<?php echo form_input(array('name'=>'ciudad_usuario','id'=>'ciudad_usuario','size'=>'30','value'=>set_value('ciudad_usuario'))) ?>

<?php echo form_label('Estado: ','estado_usuario') ?>
<?php echo form_input(array('name'=>'estado_usuario','id'=>'estado_usuario','size'=>'30','value'=>set_value('estado_usuario'))) ?>
<?php echo form_close() ?>

</body>
</html>
