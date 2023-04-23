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

    <main id="paginaInicio" class="mt-5">
        <h1 class="text-center texto-grande">Administradores</h1>
        <h3 class="text-center texto-mediano mt-5 mb-4">Iniciar sesion</h3>

        <form action="{{route('empleados.inicio')}}">
            <div class="d-flex flex-column align-items-center">

                <div class="col-md-3">
                    <label class="form-label">Email:</label>
                    <input name="email" type="text" class="form-control form-control-lg color-inputs mb-4">
                </div>

                <div class="col-md-3">
                    <label class="form-label texto-pequeno">Contrasena:</label>
                    <input name="contrasena" type="password" class="form-control form-control-lg">
                </div>
                <span id="aviso" class="mt-3" style="color: red;"></span>
            </div>


            <div class="text-center">
                <button class="btn btn-primary btn-lg mt-5">Iniciar sesion</button>
            </div>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>