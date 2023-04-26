<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h1 class="m-0">Motoristas</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </nav>

    <main id="apartado-inicio-sesion">
        <h1 class="text-center mt-5">Registrarse</h1>


        <form action="{{route('motoristas.espera')}}" class="px-5 mt-4">

            <label class="form-label">Primer nombre:</label>
            <input type="text" name="primerNombre" class="form-control form-control-lg mb-3">

            <label class="form-label">Segundo nombre:</label>
            <input type="text" name="segundoNombre" class="form-control form-control-lg mb-3">

            <label class="form-label">Primer apellido:</label>
            <input type="text" name="primerApellido" class="form-control form-control-lg mb-3">

            <label class="form-label">Segundo apellido:</label>
            <input type="text" name="segundoApellido" class="form-control form-control-lg mb-3">

            <label class="form-label">Email:</label>
            <input type="text" name="email" class="form-control form-control-lg mb-3">

            <label class="form-label">Telefono:</label>
            <input type="text" name="telefono" class="form-control form-control-lg mb-3">

            <label class="form-label">DNI:</label>
            <input type="text" name="dni" class="form-control form-control-lg mb-3">

            <label class="form-label">RTN:</label>
            <input type="text" name="rtn" class="form-control form-control-lg mb-3">

            <label class="form-label">Fecha de nacimiento:</label>
            <input type="date" name="fechaNacimiento" class="form-control form-control-lg mb-3">

            <label class="form-label">Cuenta bancaria:</label>
            <input type="text" name="cuentaBancaria" class="form-control form-control-lg mb-3">


            <label class="form-label">Contrasena:</label>
            <input type="password" name="contrasena" class="form-control form-control-lg mb-3">
            
            <h1 class="text-center my-5">Datos del vehiculo</h1>

            <label class="form-label">Numero de placa del vehiculo:</label>

            <input type="text" id="numeroPlaca" class="form-control form-control-lg mb-3">

            <label class="form-label">Tipo de vehiculo:</label>
            <input type="text" id="tipo" class="form-control form-control-lg mb-3">

            <label class="form-label">Anio del vehiculo:</label>
            <input type="number" id="anio" min="1900" max="2099"  class="form-control form-control-lg mb-3">

            <label class="form-label">Marca del vehiculo:</label>
            <input type="text" id="marca" class="form-control form-control-lg mb-3">

            <label class="form-label">Permiso explotacion del vehiculo:</label>
            <input type="text" id="permisoExplitacion" class="form-control form-control-lg mb-3">

            <label class="form-label">Url foto</label>
            <input type="text" id="foto" class="form-control form-control-lg mb-3">

            <label class="form-label">Color del vehiculo:</label>
            <input type="text" id="color" class="form-control form-control-lg mb-3">


            <div class="text-center">
                <button class="btn btn-danger btn-lg mt-4">Registrarse</button>
            </div>
        </form>

        <form action="{{route('motoristas.inicio')}}">
            <p class="text-center fs-5 px-5 mt-5">¿Ya tienes una cuenta? <button class="btn btn-link mb-5">Inicar sesion</button></p>
        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>