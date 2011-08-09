<?php echo validation_errors() ?>

<?php echo form_open('registros_control/autenticar', array("id"=>"form_ini")) ?>
<br>
<?php echo form_label('Nombre de usuario o correo electronico: ','nombrecorreoaut') ?>
<?php echo form_input(array('name'=>'nombrecorreoaut','id'=>'nombrecorreoaut','size'=>'50')) ?>
<br>
<?php echo form_label('Contraseña: ','passwordaut') ?>
<?php echo form_password(array('name'=>'passwordaut','id'=>'passwordaut','size'=>'50')) ?>
<?php echo form_close() ?>
