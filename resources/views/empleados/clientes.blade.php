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
                <img src="{{URL('images/logo.png')}}" alt="Logo" height="55" class="d-inline-block align-text-top me-2">
                <h1 id="encabezado-navbar" class="m-0 align-self-center">SCAM</h1>
            </div>
        </div>
    </nav>

    <main id="paginaInicio" class="mt-5">
        <h1 class="text-center texto-grande">Clientes</h1>
        <div class="mx-5">
            <table class="table" style="table-layout: fixed; width:100%">
                <thead>
                    <tr>
                        <th scope="col">IdCliente</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">DNI</th>
                        <th scope="col">RTN</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Exonerado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{$cliente->idCliente}}</th>
                        <td>{{$cliente->primerNombre}}</td>
                        <td>{{$cliente->primerApellido}}</td>
                        <td>{{$cliente->nombreUsuario}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->dni}}</td>
                        <td>{{$cliente->rtn}}</td>
                        <td>{{$cliente->estaActivo}}</td>
                        <td>{{$cliente->esExonerado}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>