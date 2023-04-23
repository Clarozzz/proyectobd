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
        <h1 class="text-center mb-5">Administrar</h1>

        <div class="container">
            <div class="row">
                <div class="col px-5">
                    <div class="card mb-3">
                        <div class="p-4">
                            <img src="{{URL('images/motoristas.png')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Motoristas</h5>
                            <p class="card-text">Apartado para administrar a los motoristas.</p>
                            <form action="{{route('empleados.motoristas')}}">
                                <button class="btn btn-primary">Ir a motoristas</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col px-5">
                    <div class="card mb-3">
                        <div class="p-4">
                            <img src="{{URL('images/solicitudes.png')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Solicitudes</h5>
                            <p class="card-text">Apartado para administrar las solicitudes</p>
                            <form action="{{route('empleados.solicitudes')}}">
                                <button class="btn btn-primary">Ir a solicitudes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col px-5">
                    <div class="card mb-3">
                        <div class="p-4">
                            <img src="{{URL('images/clientes.png')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text">Apartado para administrar datos de clientes</p>
                            <form action="{{route('empleados.clientes')}}">
                                <button class="btn btn-primary">Ir a clientes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>