<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>-->
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         
            <ul>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/" class="menutop"><span>Mis Licitaciones</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/formulario_nueva_licitacion" class="menutop"><span>Crear Licitación</span></a></li>
                      <li><a href="#" class="current"><span>Buscar Producto</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/historial" class="menutop"><span>Historial</span></a></li>
            </ul>
        
    </div>
<!-- TABS END -->    
</div>
<div class="grid_8">
	</br>
	</br>
	<h2>Buscar Producto</h2>
	<?php echo form_open("cliente/buscar_producto",array("id"=>"form_buscar_producto"))?>
	<table>
		<tr>
			<td>
			<?php echo form_input(array('name'=>'busqueda','id'=>'busqueda','size'=>'25','value'=>set_value('producto a buscar'))) ?>
			</td>
			<td>
			<input type="submit" value="Buscar"/></p>				
			</td>
			<td><img src="<?php echo base_url();?>images/find256.png" height="30%" width="30%"></td>
		</tr>
	</table>
	<?=form_close();?>
	<!--<a href="#" class="button_grey" id="btn_buscar_licitacion">
	    <img src="<?php echo base_url(); ?>images/icon_success.gif" border="0" />
	    Buscar
 </a>-->
	<table width="80%" cellpadding="0" cellspacing="0" id="box-table-a">
	    <thead>
	    <tr>
	        <th width="100px">Producto</th>
	        <th width="100px">Descripción</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php 
	    if(isset($resultado_busqueda_producto)){
	    foreach ($resultado_busqueda_producto as $q): ?>
	    <tr>
	    	<td><a href="<?php echo base_url(); ?>index.php/licitaciones/ver/<?php echo $q['idlicitacion'] ?>" class="menutop"><?php echo $q['producto'] ?></a></td>
	        <td><?php echo $q['descriptivo'] ?></td>
	    </tr>
	    <?php endforeach;
		} // end if
		 ?>
	    
	    
	    </tbody>
	</table>
	    
</div>