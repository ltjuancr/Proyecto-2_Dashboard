<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title></title>

     {{HTML::style('style/index.css')}}
     {{HTML::style('style/modi.css')}}

  <script language="javascript">
        function msg(id)
        {
          var answer = confirm("¿Deseas Eliminar esta Tarea?")
          if (answer){
            window.location = "tasks/"+id+"/delete";
                }
        }
  </script>
</head>
<body id="container2">
    <button id="New"  type="button" class="btn btn-warning">{{link_to("tasks/create", 'Nueva Tarea', $attributes = array(), $secure = null);}}
        <img src="style/img/nuevo.gif">
    </button>
    <br>
    <div id="board">

    <div id="nueva">
        <div class="title">Nuevo</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "nueva"){?>
                    
                    

                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#CCFF99">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF85">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF9999">
                     <?php } ?>

                        <a style="float: right; margin-right: 4px; margin-top: 3px;" type="button" class="btn btn-danger btn-xs" onclick="msg({{$tarea->id}})">X </a> 
                        <div class="cardTitle" >
                          <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a>                         
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                       
                   </div>

            <?php } ?>
       @endforeach       
    </div>

    <div id="enprogreso">
    <div class="title">Enprogreso</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "enprogreso"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#CCFF99">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF85">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF9999">
                     <?php } ?>
                        <a style="float: right; margin-right: 4px; margin-top: 3px;" type="button" class="btn btn-danger btn-xs" onclick="msg({{$tarea->id}})">X </a> 
                        <div class="cardTitle">
                           <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        
                   </div>
            <?php } ?>
       @endforeach
    </div>

    <div id="terminada">
        <div class="title">Terminada</div>
        @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "terminada"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#CCFF99">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF85">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF9999">
                     <?php } ?>
                        <a style="float: right; margin-right: 4px; margin-top: 3px;" type="button" class="btn btn-danger btn-xs" onclick="msg({{$tarea->id}})">X </a> 
                        <div class="cardTitle">
                              <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        
                   </div>
            <?php } ?>
       @endforeach
    </div>

    <div id="verificada">
        <div class="title">Verificada</div>
         @foreach($tareas as $tarea)
            <?php If( $tarea->estado  == "verificada"){?>
                     <?php If( $tarea->prioridad  == "baja"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#CCFF99">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "normal"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FFFF85">
                     <?php } ?>

                     <?php If( $tarea->prioridad  == "alta"){?>
                     <div class="tarea" id="{{ $tarea->id }}"  draggable="true" style="background-color:#FF9999">
                     <?php } ?>
                        <a style="float: right; margin-right: 4px; margin-top: 3px;" type="button" class="btn btn-danger btn-xs" onclick="msg({{$tarea->id}})">X </a> 
                        <div class="cardTitle">
                           <a href="tasks/{{$tarea->id}}/edit">{{ $tarea->titulo }} :</a> 
                          <br>
                          {{ $tarea->descripcion }}

                        </div>
                        
                   </div>
            <?php } ?>
       @endforeach
    </div>

</div>
</body>
</html>

