<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agencia Única | Uniendo empresas</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/text.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/blue.css" />
<link type="text/css" href="<?php echo base_url(); ?>css/smoothness/ui.css" rel="stylesheet" />
    <link href='<?php echo base_url(); ?>css/cupertino/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.10.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/inicio.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
  	<!--LOGO-->
	<div class="grid_8" id="logo"><a href="http://nicetheme.net" target="_blank" style="color: #FFFFFF">Agenda Unica</a></div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><?php echo $sesion; ?></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="<?php echo base_url(); ?>index.php" class="main current"><span class="outer"><span class="inner dashboard">Portada</span></span></a></li>
        <li class="item middle" id="two"><a href="<?php echo base_url(); ?>index.php/licitaciones" class="main menutop"><span class="outer"><span class="inner content">Licitaciones</span></span></a></li>
    </ul>
</div>
<!-- MENU END -->
</div> 
<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Portada</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">No tienes ninguna licitación programa para el dia de hoy</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    

    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration Share by <a href="http://nicetheme.net/">Nice Theme</a></div>
<!-- FOOTER END -->
<div id="dia" title="Iniciar Sesión"></div>
<div id="dia_reg" title="Registrarse"></div>
<div id="dia_mod" title="Modificar datos"></div>
</body>
</html>
