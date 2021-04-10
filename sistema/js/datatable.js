$(document).ready(function(){
    $("#InicioTabla").DataTable({
        language: {            
            decimal:        "",
            emptyTable:     "No se encontró información",
            info:           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty:      "Mostrando 0 a 0 de 0 resgistros",
            infoFiltered:   "(Obtenidos a partir de _MAX_ registros)",
            infoPostFix:    "",
            thousands:      ",",
            lengthMenu:     "Mostrar _MENU_ registros",
            loadingRecords: "Cargando...",
            processing:     "Procesando...",
            search:         "Búsqueda:",
            zeroRecords:    "No se encontraron coincidencias.",
            paginate: {
                first:      "Inicio",
                last:       "Fin",
                next:       "Sig.",
                previous:   "Ant."
            },
            aria: {
                sortAscending:  ": activar para ordenar ascendentemente.",
                sortDescending: ": activar para ordenar ascendentemente."
            }
        }
    })
}
);