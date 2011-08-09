<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
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
		<li class="item first" id="one"><a href="#" class="main current"><span class="outer"><span class="inner dashboard">Pizarra</span></span></a></li>
        <li class="item middle" id="two"><a href="<?php echo base_url(); ?>index.php/licitaciones" class="main menutop"><span class="outer"><span class="inner content">Licitaciones</span></span></a></li>
        <li class="item middle" id="three"><a href="#"><span class="outer"><span class="inner reports png">Reports</span></span></a></li>
        <li class="item middle" id="four"><a href="#" class="main"><span class="outer"><span class="inner users">Users</span></span></a></li>
		<li class="item middle" id="five"><a href="#" class="main"><span class="outer"><span class="inner media_library">Media Library</span></span></a></li>        
		<li class="item middle" id="six"><a href="#" class="main"><span class="outer"><span class="inner event_manager">Event Manager</span></span></a></li>        
		<li class="item middle" id="seven"><a href="#" class="main"><span class="outer"><span class="inner newsletter">Newsletter</span></span></a></li>        
		<li class="item last" id="eight"><a href="#" class="main"><span class="outer"><span class="inner settings">Settings</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div> 
<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">You don't have any events for today! Yay!</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
		<div class="portlet">
            <div class="portlet-header"><img src="<?php echo base_url(); ?>images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Visitors - Last 30 days</div>
            <div class="portlet-content">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="placeholder" style="width:auto; height:250px;"></div>
            </div>
        </div>      
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Anything  (no icon too if you like it better)</div>

		<div class="portlet-content">
		  <p>This can be any content you want. I placed a basic form here with text editor so you can see the functionality of the forms too.</p>
		  <h3>This is a form</h3>
		  <form id="form1" name="form1" method="post" action="#">
		    <label>Some title</label>
		     <input type="text" name="textfield" id="textfield" class="smallInput" />
			<label>Large input box</label>
            <input type="text" name="textfield2" id="textfield2" class="largeInput" />
            <label>This is a textarea</label>
		    <textarea name="textarea" cols="45" rows="3" class="smallInput" id="textarea"></textarea>
            <a class="button"><span>Submit in blue</span></a>
            <a class="button_grey"><span>Submit this form</span></a>
		  </form>
		  <p>&nbsp;</p>
		</div>
        </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
      <div class="portlet">
		<div class="portlet-header"><img src="<?php echo base_url(); ?>images/icons/comments.gif" width="16" height="16" alt="Comments" />Latest Comments</div>

		<div class="portlet-content">
         <p class="info" id="success"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
    <p class="info" id="error"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
    <p class="info" id="warning"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
<p class="info" id="info"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
       </div>    
      <!--THIS IS A PORTLET--> 
      <div class="portlet">
		<div class="portlet-header"><img src="<?php echo base_url(); ?>images/icons/feed.gif" width="16" height="16" alt="Feeds" />Your selected News source					</div>
		<div class="portlet-content">
        <ul class="news_items">
        	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean  adipiscing massa quis arcu interdum scelerisque. Duis vitae nunc nisi.  Quisque eget leo a nibh gravida vulputate ut sed nulla. <a href="#">Donec quis  lectus turpis, sed mollis nibh</a>. Donec ut mi eu metus ultrices  porttitor. Phasellus nec elit in nisi</li>
            <li>Nunc convallis, enim quis tincidunt dictum, ante ipsum  interdum massa, consequat sodales arcu magna nec eros.<a href="#"> Vivamus nec  placerat odio.</a> Sed nec mi sed orci mattis feugiat. Etiam est dui,  rutrum nec dictum vel, accumsan id sem. </li>
            <li>Nunc convallis, enim quis tincidunt dictum, ante ipsum  interdum massa, consequat sodales arcu magna nec eros.<a href="#"> Vivamus nec  placerat odio.</a> Sed nec mi sed orci mattis feugiat. Etiam est dui,  rutrum nec dictum vel, accumsan id sem. </li>
            <li>Nunc convallis, enim quis tincidunt dictum, ante ipsum  interdum massa, consequat sodales arcu magna nec eros.<a href="#"> Vivamus nec  placerat odio.</a> Sed nec mi sed orci mattis feugiat. Etiam est dui,  rutrum nec dictum vel, accumsan id sem. </li>
            <li>Nunc convallis, enim quis tincidunt dictum, ante ipsum  interdum massa, consequat sodales arcu magna nec eros.<a href="#"> Vivamus nec  placerat odio.</a> Sed nec mi sed orci mattis feugiat. </li>
        </ul>
        <a href="#">&raquo; View all news items</a>
        </div>
       </div>                         
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        <div class="portlet-header fixed"><img src="<?php echo base_url(); ?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="136" scope="col">Name</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Date</th>
                <th width="129" scope="col">Location</th>
                <th width="171" scope="col">E-mail</th>
                <th width="123" scope="col">Phone</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                </label></td>
                <td>Stephen C. Cox</td>
                <td>stephen</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                <td>Josephin Tan</td>
                <td>josephin</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="edit_modal.html" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox3" id="checkbox3" /></td>
                <td>Joyce Ming</td>
                <td>joyce_m</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox4" id="checkbox4" /></td>
                <td>James A. Pentel</td>
                <td>james_pent</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr class="footer">
                <td colspan="4"><a href="#" class="edit_inline">Edit all</a><a href="#" class="delete_inline">Delete all</a><a href="#" class="approve_inline">Approve all</a><a href="#" class="reject_inline">Reject all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
                    <span class="previous-off">&laquo; Previous</span>
                    <span class="active">1</span>
                    <a href="dashboard4658.html?page=2">2</a>
                    <a href="dashboard9ba9.html?page=3">3</a>
                    <a href="dashboardfdb0.html?page=4">4</a>
                    <a href="dashboardaf4d.html?page=5">5</a>
                    <a href="dashboardc575.html?page=6">6</a>
                    <a href="dashboard235c.html?page=7">7</a>
                    <a href="dashboard4658.html?page=2" class="next">Next &raquo;</a>
                    </div>  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
            </tbody>
          </table>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
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
