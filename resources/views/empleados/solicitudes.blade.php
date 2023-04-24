<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">

    <nav id="navbar-inicio" class="navbar sticky-top bg-primary text-white">
        <div class="container justify-content-center">
            <div class="d-flex">
                <img src="{{URL('images/logo.png')}}" alt="Logo" height="55" class="d-inline-block align-text-top">
                <h1 id="encabezado-navbar" class="m-0 align-self-center">SCAM</h1>
            </div>
        </div>
    </nav>

    <main id="paginaPrincipal" class="my-5">
        <h1 class="text-center mb-5">Solicitudes</h1>

        <div class="d-flex flex-column align-items-center mt-3 mx-4">

            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="text-center text-info">Nueva solicitud</h3>
                        <h6 class="text-center"><strong>Direccion actual:</strong> San goloteas</h6>
                        <h6 class="text-center"><strong>Destino:</strong> Lago antaras</h6>
                        <h6 class="text-center"><strong>Fecha:</strong> 28-12-23</h6>
                        <h6 class="text-center"><strong>Sub total:</strong> 25lps</h6>
                        <h6 class="text-center"><strong>Impuesto:</strong> 10%</h6>
                        <h6 class="text-center"><strong>Total:</strong> 27.5</h6>
                        <h6 class="text-center"><strong>Cliente:</strong> Aquiles Bailo</h6>
                        <h6 class="text-center"><strong>Telefono:</strong> 8794-5958</h6>

                        <form action="{{route('empleados.asignarSolicitud')}}">
                            <p class="text-center fs-5 px-5 mt-5"><button class="btn btn-success">Aceptar</button></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>