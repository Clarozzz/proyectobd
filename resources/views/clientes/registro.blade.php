<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">viewport
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registrarse</title>
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
                <h1 class="m-0">SCAM</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </nav>

    <main id="apartado-inicio-sesion">
        <h1 class="text-center mt-5">Registrarse</h1>


        <div  class="px-5 mt-4">
            <label class="form-label">Primer nombre:</label>
            <input id="primerNombre"  type="text" name="primerNombre" class="form-control form-control-lg mb-3">

            <label class="form-label">Segundo nombre:</label>
            <input id="segundoNombre"  type="text" name="segundoNombre" class="form-control form-control-lg mb-3">

            <label class="form-label">Primer apellido:</label>
            <input id="primerApellido"  type="text" name="primerApellido" class="form-control form-control-lg mb-3">

            <label class="form-label">Segundo apellido:</label>
            <input id="segundoApellido"  type="text" name="segundoApellido" class="form-control form-control-lg mb-3">

            <label class="form-label">Nombre de usuario:</label>
            <input id="nombreUsuario"  type="text" name="nombreUsuario" class="form-control form-control-lg mb-3">

            <label class="form-label">Email:</label>
            <input id="email"  type="text" name="email" class="form-control form-control-lg mb-3">

            <label class="form-label">Telefono:</label>
            <input id="telefono"  type="text" name="telefono" class="form-control form-control-lg mb-3">

            <label class="form-label">DNI:</label>
            <input id="dni"  type="text" name="dni" class="form-control form-control-lg mb-3">

            <label class="form-label">RTN:</label>
            <input id="rtn"  type="text" name="rtn" class="form-control form-control-lg mb-3">

            <label class="form-label">Fecha de nacimiento:</label>
            <input id="fechaNacimiento"  type="date" name="fechaNacimiento" class="form-control form-control-lg mb-3">

            
            <label class="form-label">Nombre empresa:</label>
            <input id="nombreEmpresa"  type="text" name="nombreEmpresa" class="form-control form-control-lg mb-3" placeholder="(Opcional)">
            
            <label class="form-label">Contrasena:</label>
            <input id="password"  type="password" name="password" class="form-control form-control-lg mb-3">

            <div class="text-center">
                <button onclick="registrarse()" class="btn btn-danger mt-4">Registrarse</button>
            </div>
        </div>

        <p  id="error" >
            
        </p>


        <form action="{{route('clientes.inicio')}}">
            <p class="text-center fs-5 px-5 mt-5">¿Ya tienes una cuenta? <button class="btn btn-link">Inicar sesion</button></p>
        </form>

    </main>




    <script src="{{ asset('js/clientes/registro.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>