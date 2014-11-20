
$('document').ready(init);

var id;
var estado;

           function init(){
            $('.tarea').bind('dragstart', function(event) {
                event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));

               //alert(event.target.getAttribute('id'));
                 id = event.target.getAttribute('id');
            });
            
   // bind the dragover event on the board sections
            $('#nueva, #enprogreso,#terminada, #verificada').bind('dragover', function(event) {
                event.preventDefault();

            });

// bind the drop event on the board sections
   $('#nueva, #enprogreso,#terminada, #verificada').bind('drop', function(event) {
            var notecard = event.originalEvent.dataTransfer.getData("text/plain");
            event.target.appendChild(document.getElementById(notecard));
              
             //alert(event.target.getAttribute('id'));
             estado = event.target.getAttribute('id');

            // alert(id+estado);
              $.getJSON('cambiarEstado', {id : id, estado : estado}, function(json) 
              {
                    //  alert(json);

             });


// Turn off the default behaviour
// without this, FF will try and go to a URL with your id's name
            event.preventDefault();
            });
        }

/*
    function cargar_tareas() {
        $.getJSON('tareasAjax', function(json, textStatus) {
            for (var i = 0; i < json.length; i++) {
               
              document.getElementById("2").innerHTML += "<br>" + TextoLinea;





                var row = '<tr>';
                row += '<td>' + json[i].id + '</td>';
                row += '<td>' + json[i].placa + '</td>';
                row += '<td><input type="color" value="' + json[i].color + '"></td>';
                row += '<td><a href="avionesjs/' + json[i].id + '/edit" >Editar</a>';   
                row += '<button class="eliminar" id=' + json[i].id + '>Eliminar</button></td>';   
                row += '</tr>';
                $('#tabla tr:last').after(row);
            };

            $(".eliminar").on( "click", function() {
                var id = $(this).attr('id');
                $.ajax({
                    url: '/avionesjs/'+id,
                    type: 'DELETE',
                    data: {id: id},
                })
                .done(function() {
                    alert('dato eliminado');
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    location.reload();
                });
                
            });
        });
    }
    */
