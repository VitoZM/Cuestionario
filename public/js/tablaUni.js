$(document).ready(function() {
    $("#add_rowa").on("click", function() {
        // Código de filas dinámicas
        
        // // Obtenga la ID de fila máxima y establezca una nueva ID
        var newid = 0;
        $.each($("#tab_logica tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // recorrer cada td y crear nuevos elementos con el nombre de newid
        $.each($("#tab_logica tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // agregue un nuevo td y elemento si tiene un nombre
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logica tr').length
                }).appendTo($(tr));
            }
        });
        
        // boton de eliminar cada que se cree una tabla
        
        $("<td></td>").append(
            $("<button class='btn btn-danger fa fa-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        
        
        // agregar la nueva fila
        $(tr).appendTo($('#tab_logica'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Código ordenable
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});