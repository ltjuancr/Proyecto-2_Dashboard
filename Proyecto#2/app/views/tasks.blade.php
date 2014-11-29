<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
   {{HTML::style('style/index.css')}}

<script language="javascript">
      function msg(id)
      {
        var answer = confirm("¿Deseas Eliminar esta Tarea?")
        if (answer){
          window.location = "tasks/"+id+"/delete";
              }
      }
</script>
<body>
    
     {{link_to("tasks/create", 'Nueva Tarea', $attributes = array(), $secure = null);}}
    <div id="board">

    <div id="nueva">
        <div class="title">Nuevo</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "nueva"){?>
                    
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#009900">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF00">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF0000">
                     <?php } ?>


                        <div class="cardTitle" >
                          <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a>                         
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        <a onclick="msg({{$tarea->id}})">Eliminar </a>
                   </div>
            <?php } ?>
       @endforeach       
    </div>

    <div id="enprogreso">
    <div class="title">Enprogreso</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "enprogreso"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#009900">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF00">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF0000">
                     <?php } ?>
                        <div class="cardTitle">
                           <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        <a onclick="msg({{$tarea->id}})">Eliminar </a>
                   </div>
            <?php } ?>
       @endforeach
    </div>

    <div id="terminada">
        <div class="title">Terminada</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "terminada"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#009900">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF00">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF0000">
                     <?php } ?>
                        <div class="cardTitle">
                              <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        <a onclick="msg({{$tarea->id}})">Eliminar </a>
                   </div>
            <?php } ?>
       @endforeach
    </div>

    <div id="verificada">
        <div class="title">Verificada</div>
         @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "verificada"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#009900">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF00">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF0000">
                     <?php } ?>
                        <div class="cardTitle">
                           <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        <a onclick="msg({{$tarea->id}})">Eliminar </a>
                   </div>
            <?php } ?>
       @endforeach
    </div>

</div>
</body>
</html>

