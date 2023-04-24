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

    <nav class="navbar sticky-top bg-danger text-white">
        <div class="container text-center">
            <div class="col">
                <a href="#">
                    <img src="{{URL('images/logo.png')}}" alt="Logo" height="55" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="col-6">
                <h1 class="m-0">Motoristas</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </nav>

    <div class="mt-5">
        <p class="text-center fs-1 fw-bold">Gracias por Registrarte</p>
        <p class="text-center mt-4 px-5 fs-4 fw-semibold">Debes esperar a que un administrador te apruebe para iniciar
        </p>
        <form action="{{route('motoristas.inicio')}}">
            <div class="text-center">
                <button class="btn btn-danger mt-4 btn-lg">Volver al inicio</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>