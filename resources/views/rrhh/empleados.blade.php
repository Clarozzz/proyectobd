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

    <nav id="navbar-inicio" class="navbar sticky-top bg-dark text-white">
        <div class="container justify-content-center">
            <div class="d-flex">
                <img src="{{URL('images/logo.png')}}" alt="Logo" height="55" class="d-inline-block align-text-top bg-white rounded-circle me-2">
                <h1 id="encabezado-navbar" class="m-0 align-self-center">SCAM</h1>
            </div>
        </div>
    </nav>

    <main id="paginaPrincipal" class="my-5">
        <h1 class="text-center mb-5">Empleados</h1>

        <form action="" class="d-flex flex-column align-items-center">
            <button class="btn btn-success">Agregar empleado</button>
        </form>

        <div class="m-5">
            <table class="table" style="table-layout: fixed; width:100%">
                <thead>
                    <tr>
                        <th scope="col">IdEmpleado</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Sucural</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Salario</th>
                        <th scope="col">Tipo de empleado</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <th scope="row">{{$empleado->idEmpleado}}</th>
                        <td>{{$empleado->primerNombre}}</td>
                        <td>{{$empleado->primerApellido}}</td>
                        <td>{{$cliente->dni}}</td>
                        <td>{{$empleado->idSucursal}}</td>
                        <td>{{$empleado->fechaInicio}}</td>
                        <td>{{$empleado->salario}}</td>
                        <td>{{$empleado->tipoEmpleado}}</td>
                        <td><a href="{{route('rrhh.editEmpleado', $empleado->idEmpleado)}}">Editar</a></td>
                        <form action="{{route('rrhh.destroyEmpleado', $empleado->idEmpleado)}}" method="post">
                            @csrf
                            @method('delete')
                            <td><button class="btn btn-danger">Eliminar</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>