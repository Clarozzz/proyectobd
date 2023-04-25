<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleado</title>
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
        <h1 class="text-center mt-5">Editar empleado</h1>

        <form action="{{route('empleados.update', $empleado->idEmpleado)}}"   method="POST" class="px-5 mt-4">
            @csrf
            @method('PUT')
            <label class="form-label">Codigo Empleado:</label>
            <input type="text" name="idEmpleado" class="form-control form-control-lg mb-3" value="{{$empleado->idEmpleado}}" disabled>
           
            <label class="form-label">Primer nombre:</label>
            <input type="text" name="primerNombre" class="form-control form-control-lg mb-3" value="{{$empleado->primerNombre}}" disabled>

            <label class="form-label">Primer apellido:</label>
            <input type="text" name="primerApellido" class="form-control form-control-lg mb-3" value="{{$empleado->primerApellido}}" disabled>

            <label class="form-label">DNI:</label>
            <input type="text" name="dni" class="form-control form-control-lg mb-3" value="{{$empleado->dni}}" disabled>
            
            <label class="form-label">Sucursal:</label>
            <input type="text" name="sucursal" class="form-control form-control-lg mb-3" value="{{$empleado->idSucursal}}">

            <label class="form-label">Fecha inicio:</label>
            <input type="text" name="fechaInicio" class="form-control form-control-lg mb-3" value="{{$empleado->fechaInicio}}">

            <label class="form-label">Salario:</label>
            <input type="text" name="salario" class="form-control form-control-lg mb-3" value="{{$empleado->salario}}">

            <label class="form-label">Tipo empleado:</label>
            <input type="text" name="tipoEmpleado" class="form-control form-control-lg mb-3" value="{{$empleado->tipoEmpleado}}">

            <div class="text-center">
                <button type="submit" class="btn btn-danger mt-4">Guardar</button>
            </div>
        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>