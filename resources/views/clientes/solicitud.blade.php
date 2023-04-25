<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Link de boostrap -->
    <link href="{{asset ('Content/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Link de font awesome para los iconos -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <!-- Link para las fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="{{asset ('css/mapa.css')}}" rel="stylesheet" />
</head>

<body class="bg-body-tertiary">

    <nav class="navbar sticky-top bg-danger text-white">
        <div class="container text-center">
            <div class="col">
                <a href="#">
                    <img src="{{URL('images/logo.png')}}" alt="Logo" height="55" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="col-6">
                <h1 class="m-0">SCAM</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </nav>

    <main id="apartado-inicio-sesion">
        <h1 class="text-center mt-5">Solicitud</h1>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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

        <form action="{{route('clientes.factura')}}" class="d-flex flex-column align-items-center">
            <button class="btn btn-primary">Aceptar</button>
        </form>
    </div>
    <!-- Fin del contenedor -->





    <!-- Script necesarios para el mapa -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr406V0o5DTqMW6cHqUErqcpaWMr4w3gM&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{ asset ('js/mapa.js')}}"></script>
</body>

</html>