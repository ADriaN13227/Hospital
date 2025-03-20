//Se cambio el idioma al plugin de la tabla que se muestra a usuarios y administrador
$(document).ready(function() {
    $("#mitabla").DataTable( {
    	"language":{
				"lengthMenu": "Mostrar _MENU_ Registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Buscando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron Registros coincidentes con los datos proporcionados",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
				},					
			}
     } );
} );