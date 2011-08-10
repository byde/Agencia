var campos = 0;
$(function() {
    $( "#fin2" ).datepicker({ 
        altField: '#fin',
        altFormat: 'yy-mm-dd',
        dateFormat: 'dd-mm-yy'
    });
                
    $("#formAlter").submit(function(e){
        e.preventDefault();
    });
    $("#formNueva").submit(function(e){
        e.preventDefault();
    });
                
    $("#btn_agregar_campos").click(function(e){
        e.preventDefault();
        campos++;
        $("#campos").attr("value", campos);
        $("#tablaAlter").attr("style", "display: ;");
        var campoNombre = prompt("Ingrese el nombre del campo", "");
        var d = "<tr><td>" + campoNombre + "</td><td><input type=\"text\" name=\"campovalor" + campos + "\" /><input type=\"hidden\" name=\"camponombre" + campos + "\" value=\"" + campoNombre + "\" /></tr></tr>";
        $("#tablaAlter").append(d);
    });
                
    $("#btn_enviar").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#formNueva").attr("action"),
            type: "POST",
            data: $("#formNueva").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else
                    $.ajax({
                        url: $("#formAlter").attr("action") + data,
                        type: "POST",
                        data: $("#formAlter").serialize(),
                        success: function(){
                            $("#content").load("<?php echo base_url(); ?>index.php/licitaciones");
                        }
                    });
            }
        });
    });
});
