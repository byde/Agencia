<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agencia Única | Uniendo empresas</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/text.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/blue.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/smoothness/ui.css"/>
<link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>css/cupertino/jquery-ui-1.8.10.custom.css' />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/agencia.unica.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fancy.css"/>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Rancho'>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.10.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/inicio.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
  	<!--LOGO-->
	<div class="grid_8" id="logo"><a href="./" target="_blank" style="color: #FFFFFF">Agencia Única</a></div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><?php echo $sesion; ?></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="<?php echo base_url(); ?>index.php" class="main current"><span class="outer"><span class="inner dashboard">Inicio</span></span></a></li>
        <li class="item middle" id="two"><a href="<?php echo base_url(); ?>index.php/licitaciones/cargar_mis_licitaciones" class="main menutop"><span class="outer"><span class="inner content">Cliente</span></span></a></li>
        <li class="item middle" id="three"><a href="<?php echo base_url(); ?>index.php/licitaciones/cargar_ultimas_licitaciones" class="main menutop"><span class="outer"><span class="inner reports png">Proveedor</span></span></a></li>
        <li class="item middle" id="four"><a href="#" class="main"><span class="outer"><span class="inner users">Usuarios</span></span></a></li>
		<li class="item middle" id="five"><a href="#" class="main"><span class="outer"><span class="inner media_library">Media Library</span></span></a></li>        
		<li class="item middle" id="six"><a href="#" class="main"><span class="outer"><span class="inner event_manager">Agenda</span></span></a></li>        
		<li class="item middle" id="seven"><a href="<?php echo base_url(); ?>index.php/ayuda" class="main menutop"><span class="outer"><span class="inner newsletter">Ayuda</span></span></a></li>        
		<li class="item last" id="eight"><a href="<?php echo base_url(); ?>index.php/herramientas" class="main menutop"><span class="outer"><span class="inner settings">Herramientas</span></span></a></li>
    </ul>
</div>
<!-- MENU END -->
</div> 

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--<div style="background-image: url("<?php echo base_url();?>images/icon_new.png");"></div>-->
    
    <!--  TITLE START  --> 
    <div class="info-principal-contenedor">
		<div id="info-principal" class="grid_9">
			<div id="pregunta-principal" class="fl"><h2>¿Qué es?...</h2></div>
			<div id="video-contenedor-principal" class="fl">
				<span class="intro-span-video fl">Promo</span>
				<div class="video-contenedor fl">
					<a id="video-link-principal" href="<?php echo base_url(); ?>index.php/paginas_extras/promo" class="video-principal">
						Video Principal
					</a>
				</div>
				<div class="cl"></div>
			</div>
		</div>
		<div class="cl"></div>
		<div id="wrapper-navegador">
			<div class="navegador">
				<div class="contenedor-dialogo">
					<div class="efecto"></div>
					<div class="dialogo">
						<div id="dialogo-quees" class="carta-dialogo">
							<div class="imagen-carta fl">
								<img src="images/quees.png"/>
							</div>
							<div class="texto-carta fl">
								<p><strong>Agencia Única</strong> lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p><a class="masinformacion" href="<?php echo base_url(); ?>index.php/paginas_extras/quees">Más Información</a></p>
							</div>
							<div class="cl"></div>
						</div>
						<div id="dialogo-como-funciona" class="carta-dialogo">
							<div class="imagen-carta fl">
								<img src="images/comofunciona.png" height="97px" />
							</div>
							<div class="texto-carta fl">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p><a class="masinformacion" href="<?php echo base_url(); ?>index.php/paginas_extras/comofunciona">Más Información</a></p>
							</div>
							<div class="cl"></div>
						</div>
						<div id="dialogo-como-comprar" class="carta-dialogo">
							<div class="imagen-carta fl">
								<img src="images/comocomprar.png" />
							</div>
							<div class="texto-carta fl">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p><a class="masinformacion" href="<?php echo base_url(); ?>index.php/paginas_extras/comocomprar">Más Información</a></p>
							</div>
							<div class="cl"></div>
						</div>
						<div id="dialogo-como-vender" class="carta-dialogo">
							<div class="imagen-carta fl">
								<img src="images/comovender.png" height="145px" />
							</div>
							<div class="texto-carta fl">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p><a class="masinformacion" href="<?php echo base_url(); ?>index.php/paginas_extras/comovender">Más Información</a></p>
							</div>
							<div class="cl"></div>
						</div>
					</div>
				</div>
			</div>
			<a class="siguiente-navegacion" href="#">Siguiente</a>
		</div>
		<div id="info-principal-navegacion">
			<ul>
				<li><a id="menu-quees" class="link-menu" href="#">¿Qué es?</a><span class="oculto">¿Qué es?</span></li>
				<li><a id="menu-como-funciona" class="link-menu" href="#">¿Cómo funciona?</a><span class="oculto">¿Cómo funciona?</span></li>
				<li><a id="menu-como-comprar" class="link-menu" href="#">¿Cómo comprar?</a><span class="oculto">¿Cómo comprar?</span></li>
				<li><a id="menu-como-vender" class="link-menu" href="#">¿Cómo vender?</a><span class="oculto">¿Cómo vender?</span></li>
			</ul>
			<div class="cl"></div>
		</div>
	</div>
    <!--RIGHT TEXT/CALENDAR END-->
    <!--  TITLE END  -->    

    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
  
<div class="clear"> </div>

</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Agencia Unica Copyright<a href="http://nicetheme.net/"> AU 2011</a></div>
<!-- FOOTER END -->
<div id="dia" title="Iniciar Sesión"></div>
<div id="dia_reg" title="Registrarse"></div>
<div id="dia_mod" title="Modificar datos"></div>
</body>
</html>
