<div class="grid_8">
	<br>
	<br>
	<br>
	<h2>Comentarios <?php echo " ".$licitacion['descriptivo']; ?></h2>
	<table width="80%" cellpadding="0" cellspacing="0" id="box-table-a">
	    <tbody>
	        
	    <?php foreach ($comentarios as $c): ?>
	    <tr>
	    	<td>
	    		<p><?php echo" Usuario ".$c['idusuario'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$c['fecha'] ?></p>
	    	    <p><?php echo $c['comentario'] ?></p>
	    	    <p><a href="#" id="btn_responder_a">Responder a <?php echo $c['idusuario']/*$comentarios["user"]; */?></a></p>
	    	</td>
	    
	    </tr>    
	    <?php endforeach; ?>
	    </tbody>
	</table>
	<div style="display:none" id="responder_a_form">
		<form id="formNuevaComentario" action="<?php echo base_url(); ?>index.php/licitaciones/nuevo_comentario_licitacion" >
			
			<label for="comentario">Incluir Comentario:</label>
			<textarea cols=60 rows=5 name="comentario"></textarea> 
			
		</form>
		
		<a href="#" class="button_grey" id="btn_ver_comentarios">
						<img src="<?php echo base_url(); ?>images/icon_success.gif" border="0" />
			    			Publicar comentario
		</a>
	</div>
</div>

