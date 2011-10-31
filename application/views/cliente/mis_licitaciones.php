<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         
            <ul>
                      <li><a href="#" class="current"><span>Mis Licitaciones</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/formulario_nueva_licitacion" class="menutop"><span>Crear Licitación</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/pagina_buscar_producto" class="menutop"><span>Buscar Producto</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/cliente/historial" class="menutop"><span>Historial</span></a></li>
            </ul>
        
    </div>
<!-- TABS END -->    
</div>
<div class="grid_8">
	</br>
	</br>
	<h2>Mis licitaciones</h2>
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
	        <td><a href="<?php echo base_url(); ?>index.php/licitaciones/ver/<?php echo $l['idlicitacion'] ?>" class="menutop"><?php echo $l['descriptivo'] ?></a></td>
	        <td><?php echo $l['fin'] ?></td>
	    </tr>
	    <?php endforeach; ?>
	    
	    
	    </tbody>
	</table>
	    
	    
</div>