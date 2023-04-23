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
        <h1 class="text-center mb-5">Motoristas</h1>

        <div class="d-flex flex-column align-items-center mt-3 mx-4">

            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="text-center text-info">Nuevo motorista</h3>
                        <h6 class="text-center"><strong>Nombre:</strong> San</h6>
                        <h6 class="text-center"><strong>Apellido:</strong> goloteas</h6>
                        <h6 class="text-center"><strong>Email:</strong> sango@gmail.com</h6>
                        <h6 class="text-center"><strong>Telefono:</strong> 9887-5465</h6>
                        <h6 class="text-center"><strong>DNI:</strong> 0801-1995-12358</h6>
                        <h6 class="text-center"><strong>RTN:</strong> 0801-1995-123589</h6>
                        <h6 class="text-center"><strong>Fecha de nacimiento:</strong> 12-05-1995</h6>
                        <h6 class="text-center"><strong>Nombre de la empresa:</strong> null</h6>
                        <div class="row mt-5">
                            <div class="col">
                                <form action="#">
                                    <button class="btn btn-success ms-4">Aceptar</button>
                                </form>
                            </div>
                            <div class="col">
                                <form class="float-end" action="#">
                                    <button class="btn btn-danger me-4">Rechazar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>