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
                <h1 class="m-0">SCAM</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </nav>

    <main id="apartado-inicio-sesion">
        <!-- Datos de la empresa -->
        <h1 class="text-center mt-5 mb-3">Scam</h1>
        <h6 class="text-center"><strong>Correo:</strong> {{$empresa->email}}</h6>
        <h6 class="text-center"><strong>rtn:</strong> {{$empresa->rtn}}</h6>
        <h6 class="text-center"><strong>Nro. sucursal</strong>: {{$sucursal->numSucursal}}</h6>
        <h6 class="text-center"><strong>Telefono</strong>: {{$sucursal->telefono}}</h6>
        <h6 class="text-center"><strong>Direccion</strong>: {{$sucursal->direccion}}</h6>

        <!-- Datos de la factura -->
        <h3 class="text-center my-3">Factura</h3>
        <h6 class="text-center"><strong>CAI:</strong> {{$empresa->cai}}</h6>
        <h6 class="text-center"><strong>Caja:</strong> {{$cajaDigital->numeroCaja}}</h6>
        <h6 class="text-center"><strong>Nro. factura:</strong> {{$factura->numFactura}}</h6>
        <h6 class="text-center"><strong>Fecha limite:</strong> {{$sar->fechaLImite}}</h6>
        <h6 class="text-center"><strong>Nro. inicial:</strong> {{$sar->inicioRango}}</h6>
        <h6 class="text-center"><strong>Nro. final:</strong> {{$sar->finalRango}}</h6>
        <h6 class="text-center">-------------------------------</h6>

        <h6 class="text-center"><strong>Fecha:</strong> {{$factura->fecha}}</h6>
        <h6 class="text-center"><strong>Motorista:</strong> {{$persona->primerNombre}} {{$persona->primerApellido}}</h6>
        <h6 class="text-center"><strong>sub total:</strong> {{$solicitud->subTotal}}</h6>
        <h6 class="text-center"><strong>impuesto:</strong> {{$valorImpuesto->valor}}</h6>
        <h6 class="text-center"><strong>total:</strong> {{$solicitud->total}}</h6>

        <form action="#">
            <p class="text-center fs-5 px-5 mt-5"><button class="btn btn-success">Finalizar</button></p>
        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>