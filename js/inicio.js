$(function(){
    $(".menutop").live('click', function(e){
        e.preventDefault();
        //alert($(this).attr("href"));
        $("#content").load($(this).attr("href"));
    });
    
    $("#btn_ini").click(function(e) {
        e.preventDefault();
        $("#dia").html($("<img />").attr("src", "images/ajax-loader.gif"));
        $("#dia").load($(this).attr("href"), {});
        $("#dia").dialog("open");
    });
    $("#btn_reg").click(function(e) {
        e.preventDefault();
        $("#dia_reg").html($("<img />").attr("src", "images/ajax-loader.gif"));
        $("#dia_reg").load($(this).attr("href"), {});
        $("#dia_reg").dialog("open");
    });
    $("#btn_mod").click(function(e) {
        e.preventDefault();
        $("#dia_mod").html($("<img />").attr("src", "images/ajax-loader.gif"));
        $("#dia_mod").load($(this).attr("href"), {});
        $("#dia_mod").dialog("open");
    });
    $( "#dia" ).dialog({
        autoOpen: false,
        height: 250,
        width: 430,
        modal: true,
        buttons: {
            "Ingresar": function() {
                $("#form_ini").submit();
            },
            "Cancelar": function() {
                $( this ).dialog( "close" );
            }
        }
    });
    $( "#dia_reg" ).dialog({
        autoOpen: false,
        height: 530,
        width: 430,
        modal: true,
        buttons: {
            "Registrarse": function() {
                $("#form_reg").submit();
            },
            "Cancelar": function() {
                $( this ).dialog( "close" );
            }
        }
    });
    $( "#dia_mod" ).dialog({
        autoOpen: false,
        height: 530,
        width: 430,
        modal: true,
        buttons: {
            "Guardar": function() {
                $("#form_mod").submit();
            },
            "Cancelar": function() {
                $( this ).dialog( "close" );
            }
        }
    });
	
	var primerCarta = $("#wrapper-navegador .carta-dialogo:eq(0)");
	primerCarta.show();
	$("#info-principal-navegacion a").click(function(){
				var id = $(this).attr("id").substring(5);
                $("#wrapper-navegador .carta-dialogo").hide();
                cambiaTituloNavegacionBienvenida(id, $("#dialogo-"+id));
		return false;
	});
	
	$("#wrapper-navegador .siguiente-navegacion").click(function(){
		var cartas = $("#wrapper-navegador .carta-dialogo");
		cartas.each(function(elemento){
			var elemento = $(this);
			if(elemento.is(":visible")){
				var siguiente = (elemento.next().length != 0)? elemento.next() : primerCarta;
				cartas.hide();
				cambiaTituloNavegacionBienvenida(siguiente.attr("id").substring(8), siguiente);
				return;
			}
		});
		return false;
	});

	function cambiaTituloNavegacionBienvenida(id, elementoContenido){
		var titulo = $("#pregunta-principal h2").fadeOut(100, function(){
			var nuevoTitulo = "";
			if(id == "quees"){
				nuevoTitulo = "&iquest;Qu&eacute; es?...";
			}else if(id == "como-funciona"){
				nuevoTitulo = "&iquest;C&oacute;mo funciona?";
			}else if(id == "como-comprar"){
				nuevoTitulo = "&iquest;C&oacute;mo comprar?...";
			}else if(id == "como-vender"){
				nuevoTitulo = "&iquest;C&oacute;mo vender?...";
			}
			titulo.fadeIn("slow", function(){
				elementoContenido.fadeIn();
			}).html(nuevoTitulo);
		});
	}
	$("#video-link-principal").click(function(){
		return false;
	});
	function l(m){
		console.log(m);
	}
});
