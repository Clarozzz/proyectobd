<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mapa</title>
    <!-- Link de boostrap -->
    <link href="{{ asset ('Content/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Link de font awesome para los iconos -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <!-- Link para las fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="{{ asset ('css/mapa.css')}}" rel="stylesheet" />
</head>
<body>
  
    <!-- Contenedor del mapa -->
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Encuentra la distancia entre dos lugares.</h1>
            <form class="form-horizontal">
                <!-- Boton de origen -->
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Origen" class="form-control">
                    </div>
               </div>
               <div class="form-group">
                    <!-- boton de destino -->
                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destino" class="form-control">
                    </div>
                  
                 </div>
                 
            </form>

            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg " onclick="calcRoute();"><i class="fas fa-map-signs"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Aqui va el mapa -->
            <div id="googleMap">

            </div>
            <!-- Almacena la informacion desde el origen hasta el destino -->
            <div id="output">

            </div>
        </div>

    </div>
    <!-- Fin del contenedor -->
    <script>

    </script>

      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr406V0o5DTqMW6cHqUErqcpaWMr4w3gM&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{ asset ('js/mapa.js')}}"></script>
</body>
</html>