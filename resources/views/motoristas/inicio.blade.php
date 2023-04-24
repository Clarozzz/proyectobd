<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoristas</title>
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

    <main id="apartado-inicio-sesion">
        <h1 class="text-center mt-5">Iniciar sesion</h1>

        <form action="{{route('motoristas.solicitud')}}" class="px-5 mt-4">
            <label class="form-label">Email:</label>
            <input type="text" name="email" class="form-control form-control-lg">

            <label class="form-label mt-3">Contrasena:</label>
            <input type="password" name="contrasena" class="form-control form-control-lg mb-3">

            <div class="text-center">
                <button class="btn btn-danger mt-4 btn-lg">Iniciar sesion</button>
            </div>
        </form>

        <form action="{{route('motoristas.registro')}}">
            <p class="text-center fs-5 px-5 mt-5">¿No tienes una cuenta? <button class="btn btn-link">Registrate</button></p>
        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>