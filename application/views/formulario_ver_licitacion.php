 <html>
	 <head>
	 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.10.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>
	</head>
	<body>	
			
		<h3>Ver licitacion</h3>
		<?php echo form_open('licitaciones/ver'); ?>
		<fieldset>
		<p>
			<label for="descriptivo">Nombre descriptivo:</label>
			<input type="text" name="descriptivo" id="descriptivo" />
		</p>
		
		 <input type="submit" value="Buscar"/>
		 </fieldset>
		<?php echo form_close();?>
		
	</body>
</html>