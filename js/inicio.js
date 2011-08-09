$(function(){
    $(".menutop").click(function(e){
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
});
