
</br>
<a href="<?php echo base_url(); ?>index.php/licitaciones/cargar_formulario_nueva_licitacion" class="menutop button_grey" >
    <img src="<?php echo base_url(); ?>images/icon_new.png" border="0" width="18px" />Crear Licitacion</a>
    <div class="clear"></div>
<div id="portlet"><div class="portlet-content nopadding">
<table width="80%" cellpadding="0" cellspacing="0" id="box-table-a">
    <thead>
    <tr>
        <th scope="col">Licitaciones</th>
        <th scope="col" width="200px">Tiempo Restante</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($licitaciones as $l): ?>
    <tr>
        <td><?php echo  $l['descriptivo'] ?></td>
        <td><?php echo $l['fin'] ?></td>
    </tr>
    <?php endforeach; ?>
    
    
    </tbody>
</table>
    </div>
    </div>
    <div class="clear"></div>