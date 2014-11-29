
$('document').ready(init);

var id;//variable id de la tarea
var estado;//variable  que tomara el estado deseado 

           function init(){
            $('.tarea').bind('dragstart', function(event) {
                event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));

               //alert(event.target.getAttribute('id'));
                 id = event.target.getAttribute('id');//obtiene el id de la tarea seleccionada 
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
             estado = event.target.getAttribute('id');//obtiene el id de contenedor al cual se le inserto latarea

            // alert(id+estado);
              $.getJSON('cambiarEstado', {id : id, estado : estado}, function(json) //se llama a cambiarestado y se le pasa por parametros el id de la tarea y el estado deseado 
              {
                    //  alert(json);

             });


// Turn off the default behaviour
// without this, FF will try and go to a URL with your id's name
            event.preventDefault();
            });
        }

