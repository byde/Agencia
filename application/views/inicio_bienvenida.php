    <?php echo form_open('registros_control/registrar', array("id" => "form_ini")) ?>

<?php echo form_label('Nombre de usuario: ','usuario') ?>
<?php echo form_input(array('name'=>'nombrecorreoaut','id'=>'nombrecorreoaut','size'=>'50','value'=>set_value('nombrecorreoaut'))) ?>

<?php echo form_label('Contraseña: ','password') ?>
<?php echo form_password(array('name'=>'password','id'=>'password','size'=>'50','value'=>set_value('password'))) ?>
    <?php echo form_close() ?>
