<div class="grid_8">
	<table>
	    <thead>
	        <tr>
	         <br>
	         <br>
	         <td colspan="2"><h2>Detalles de la Licitacion</h2></td>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td><p><strong>Inicio</strong></p></td>
	            <td><p><?php echo $licitacion['creacion']; ?></p></td>
	        </tr>
	        <tr>
	            <td><p><strong>Finaliza</strong></p></td>
	            <td><p style="color:red;"><?php echo $licitacion['fin']; ?></td></p>
	        </tr>
	        <tr>
	            <td><p><strong>Descripcion</strong></p></td>
	            <td><?php echo $licitacion['descriptivo']; ?></td>
	        </tr>
	        <tr>
	            <td><strong>Producto</strong></td>
	            <td><?php echo $licitacion['producto']; ?></td>
	        </tr>
	        <?php if(is_array($campos)) : ?>
	        <?php foreach($campos as $c): ?>
	        <tr>
	            <td><strong><?php echo " ".$c['nombre'] ?></strong></td>
	            <td><?php echo $c['valor'] ?></td>
	        </tr>
	        <?php endforeach; ?>
	        <?php endif; ?>
	        
	    </tbody>
	    
	</table>
	<form id="formNuevaComentario" action="<?php echo base_url(); ?>index.php/licitaciones/nuevo_comentario_licitacion" >
		<p>
			<label for="comentario">Incluir Comentario:</label>
			<textarea cols=60 rows=5 name="comentario"></textarea> 
			<input type="hidden" name="idlicitacion" value="<?php echo $licitacion["idlicitacion"]; ?>">
		</p>
	</form>
	
		
	<a href="#" class="button_grey" id="btn_publicar_comentario">
					<img src="<?php echo base_url(); ?>images/icon_success.gif" border="0" />
		    			Publicar comentario
	</a>
	<a href="<?php echo base_url(); ?>index.php/licitaciones/ofertar_licitacion/<?php echo $licitacion['idlicitacion'] ?>" class="menutop"><h2>Ofertar</h2></a>
	<a href="<?php echo base_url(); ?>index.php/licitaciones/ver_comentarios_licitacion/<?php echo $licitacion['idlicitacion'] ?>" class="menutop"><h2>Ver Comentarios</h2></a>
</div>