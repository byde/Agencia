<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>-->
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         
            <ul>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/" class="menutop"><span>Últimas Licitaciones</span></a></li>
                      <li><a href="#" class="current"><span>Buscar Licitaciones</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/licitaciones_sugeridas" class="menutop"><span>Licitaciones Sugeridas</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/catalogo_productos" class="menutop"><span>Catalogos de Productos</span></a></li>
            </ul>
        
    </div> <!-- TABS END -->    
</div>
<div class="grid_8">
	</br>
	</br>
	<h2>Buscar Licitación</h2>
	<?php echo form_open("proveedor/buscar_licitacion",array("id"=>"form_buscar_licitacion"))?>
	<table>
		<tr>
			<td>
			<?php echo form_input(array('name'=>'busqueda','id'=>'busqueda','size'=>'25','value'=>set_value('licitacion a buscar'))) ?>
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
	        <th width="10px">idUsuario</th>
	        <th width="100px">Producto</th>
	        <th width="100px">Descriptivo</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php 
	    if(isset($resultado_busqueda)){
	    foreach ($resultado_busqueda as $q): ?>
	    <tr>
	    	<td><?php echo $q['idUsuario'] ?></td>
	        <td><a href="<?php echo base_url(); ?>index.php/licitaciones/ver/<?php echo $q['idlicitacion'] ?>" class="menutop"><?php echo $q['producto'] ?></a></td>
	        <td><?php echo $q['descriptivo'] ?></td>
	    </tr>
	    <?php endforeach;
		} // end if
		 ?>
	    
	    
	    </tbody>
	</table>
	    
</div>