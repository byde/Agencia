<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         
            <ul>
                      <li><a href="#" class="current"><span>Últimas Licitaciones</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/buscar_licitacion" class="menutop"><span>Buscar Licitaciones</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/licitaciones_sugeridas" class="menutop"><span>Licitaciones Sugeridas</span></a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/proveedor/catalogo_productos" class="menutop"><span>Catalogos de Productos</span></a></li>
            </ul>
        
    </div> <!-- TABS END -->    
</div>
<div class="grid_8">
	</br>
	</br>
	<h2>Ultimas licitaciones en Agencia Unica</h2>
	<!-- El boton de crear licitacion ha pasado al apartado de comprar
	<!-- <a href="<?php echo base_url(); ?>index.php/licitaciones/cargar_formulario_nueva_licitacion" class="menutop button_grey">
	    <img src="<?php echo base_url(); ?>images/icon_new.png" border="0" width="18px" />Crear Licitacion</a> -->
	
	
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