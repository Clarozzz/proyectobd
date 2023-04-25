<?php

namespace App\Http\Controllers;

use App\Models\CajaDigital;
use App\Models\Color;
use App\Models\Empresa;
use App\Models\Factura;
use App\Models\Motorista;
use App\Models\Sar;
use App\Models\Solicitud;
use App\Models\Sucursal;
use App\Models\User;
use App\Models\Vehiculo;
use App\Models\VehiculoColor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motoristas.inicio');
    }

    public function indexRegistro()
    {
        $colores = Color::all();
        return view('motoristas.registro', compact('colores'));
    }

    public function indexSolicitud()
    {
        $solicitudes = Solicitud::select()
            ->join('cliente', 'cliente.idCliente', '=', 'solicitud.idCliente')
            ->join('valorImpuesto', 'valorImpuesto.idImpuesto', '=', 'solicitud.idImpuesto')
            ->join('persona', 'persona.idPersona', '=', 'cliente.idPersona')
            ->get();
        return view('motoristas.solicitudes', compact('solicitudes'));
    }

    public function factura(Solicitud $solicitud){
        $solicitud = Solicitud::select()
            ->join('cliente', 'cliente.idCliente', '=', 'solicitud.idCliente')
            ->join('valorImpuesto', 'valorImpuesto.idImpuesto', '=', 'solicitud.idImpuesto')
            ->join('persona', 'persona.idPersona', '=', 'cliente.idPersona')
            ->where('solicitud.idSolicitud', $solicitud->idSolicitud)
            ->get();
        $solicitud = $solicitud[0];

        $empresa = Empresa::find(1);
        $sucursal = Sucursal::find(1);
        $cajaDigital = CajaDigital::find(1);
        $factura = Factura::find(3);
        $sar = Sar::find(4);

        return view('motoristas.factura', compact('solicitud', 'empresa', 'sucursal', 'cajaDigital', 'factura', 'sar'));
    }

    public function indexEspera()
    {
        return view('motoristas.espera');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $vehiculo = new Vehiculo();
        $vehiculo->numeroPlaca = $request->numeroPlaca;
        $vehiculo->tipo = $request->tipo;
        $vehiculo->anio = $request->anio;
        $vehiculo->marca = $request->marca;
        $vehiculo->permisoExplitacion = $request->permisoExplotacion;
        $vehiculo->foto = $request->foto;

        $vehiculo->save();

        $auto = Vehiculo::select('idVehiculo')
            ->where('numeroPlaca', '=', $vehiculo->numeroPlaca)
            ->get();

        $vehiculoColor = new VehiculoColor();
        $vehiculoColor->idVehiculo = $auto[0]->idVehiculo;
        $vehiculoColor->idColor = $request->color;
        $vehiculoColor->save();

        $user = new User();
        $user->primerNombre = $request->primerNombre;
        $user->primerApellido = $request->primerApellido;
        $user->segundoNombre = $request->segundoNombre;
        $user->segundoApellido = $request->segundoApellido;
        $user->telefono = $request->telefono;
        $user->dni = $request->dni;
        $user->rtn = $request->rtn;
        $user->fechaNacimiento = $request->fechaNacimiento;
        $user->email = $request->email;
        $user->password = $request->contrasena;
        $user->fechaAlta = Carbon::now();
        $user->nombreEmpresa = $request->nombreEmpresa;
        $user->estaHabilitado = true;

        $user->save();

        $id = User::select('idPersona')
            ->where('dni', '=', $user->dni)
            ->get();

        $motorista = new Motorista();
        $motorista->cuentaBancaria = $request->cuentaBancaria;
        $motorista->nombreBanco = $request->nombreBanco;
        $motorista->idPersona = $id[0]->idPersona;

        $motorista->save();

        return redirect()->route('motoristas.espera');
    }

    /**
     * Display the specified resource.
     */
    public function show(Motorista $motorista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motorista $motorista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motorista $motorista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motorista $motorista)
    {
        //
    }
}
