 <html>
	 <head>
	 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>
	</head>
	<body>	
		<div style="display: none;" class="demo-description">
		
		</div><!-- End demo-description -->
		
		<h3>Crear nueva licitacion</h3>
		<?php echo form_open('licitaciones/nueva'); ?>
		<fieldset>
		<p>
			<label for="descriptivo">Nombre descriptivo:</label>
			<input type="text" name="descriptivo" id="descriptivo" />
		</p>
		<p>
			<label for="producto">Producto:</label>
			<input type="text" name="producto" id="producto" />
		</p>
		<!--
		<p>
			<label for="cantidad">Cantidad</label>
			<input type="text" name="cantidad" id="cantidad" />
			
		</p>-->
		<div class="demo">
		<p>
			<label for="fin2">Fecha de finalizacion:</label>
			<input type="text" id="fin2" />
			<input type="hidden" name="fin" id="fin" />
			
		</p>
		</div>
		 
		<!--
		<p>
			<label for="inicio">fecha de inicio</label>
			<input type="text" name="inicio" id="inicio" />
			
		</p>
		 -->
		 <input type="submit" value="Guardar"/>
		 </fieldset>
		<?php echo form_close();?>
		
	</body>
</html>