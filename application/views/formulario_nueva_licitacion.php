
	 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilo_opciones_licitacion.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/licitaciones.js"></script>
		<div style="display: none;" class="demo-description">
		
		</div><!-- End demo-description -->
		
		<h3>Crear nueva licitacion</h3>
            <form id="formNueva" action="<?php echo base_url(); ?>index.php/licitaciones/nueva" >
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
            </form>

		<p>
                    <a href="#" class="button_grey" id="btn_agregar_campos" >
                            <img src="<?php echo base_url(); ?>images/icon_new.png" border="0" width="18px" />
                            Agregar Campos
                        </a>
    <div class="clear"></div>
                <form id="formAlter"  action="<?php echo base_url(); ?>index.php/licitaciones/nuevacampos/">
                    <table id="tablaAlter" width="350px" border="1" class="box-table-b" style="display: none"> 
                        <thead>
                        <tr>
                            <th colspan="2">Agregar mas detalles<input type="hidden" id="campos" name="campos" value="0" /></th>
                        </tr>
                        <tr>
                            <th width="150">Campo</th>
                            <th width="200">Valor</th>
                        </tr>
                        </thead>
                    </table>
                    <small>** Si no desea agregar mas detalles simplemente omita este paso</small>
                </form>
		</p>
                
                
    <div class="clear"></div>
                    <a href="#" class="button_grey" id="btn_enviar">
                            <img src="<?php echo base_url(); ?>images/icon_success.gif" border="0" />
                            Enviar Licitacion
                        </a>
    <div class="clear"></div>