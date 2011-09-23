<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>
<div style="display: none;" class="demo-description">
		
</div><!-- End demo-description -->
<form id="formOfertarLicitacion" action="<?php echo base_url(); ?>index.php/licitaciones/nueva_oferta_licitacion">
<table>
    <thead>
        <tr>
         <td colspan="2"><h1>Ofertar licitacion<?php echo "  ".$licitacion['descriptivo']; ?></h1></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p><strong>Numero de licitación</strong></p></td>
            <td><p><?php echo $licitacion['idlicitacion']; ?></p></td>
            <input type="hidden" name="idlicitacion" value="<?php echo $licitacion['idlicitacion']; ?>"
        </tr>
        <tr>
            <td><p><strong>Usuario</strong></p></td>
            <td><p><?php echo $licitacion['idUsuario']; ?></td></p>
            
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
            <td><input type="checkbox" name="producto"></td>
        </tr>
	    <?php if(is_array($campos)) : ?>
        <?php foreach($campos as $c): ?>
        <tr>
            <td><strong><?php echo " ".$c['nombre'] ?></strong></td>
            <td><?php echo $c['valor'] ?></td>
            <td><input type="checkbox" name="<?php echo " ".$c['nombre'] ?>"></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        <tr>
        	<td>
        		<label for="preciounitario">Precio unitario:</label>
        	</td>
        	<td>
        		<input type="text" name="precio">
        	</td>
        </tr>
        <tr>
        	<td>
        		<label for="nota">Agregar nota:</label>
        		<textarea cols=60 rows=5 name="nota"></textarea>
        	</td>
        </tr>
        
    </tbody>
</table>
</form>

<a href="#" class="button_grey" id="btn_ofertar_licitacion">
				<img src="<?php echo base_url(); ?>images/icon_success.gif" border="0" />
	    			Guardar
</a>

<!--<a href="<?php echo base_url(); ?>index.php/licitaciones/ver_comentarios_licitacion/<?php echo $licitacion['idlicitacion'] ?>" class="menutop"><h2>Ver Comentarios</h2></a>-->

<!--</div>	-->