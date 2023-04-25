<?php

namespace App\Http\Controllers;

use App\Models\CajaDigital;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Factura;
use App\Models\Sar;
use App\Models\Solicitud;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes.inicio');
    }

    public function indexRegistro()
    {
        return view('clientes.registro');
    }

    public function indexSolicitud()
    {
        return view('clientes.solicitud');
    }

    public function indexFactura()
    {
        $empresa = Empresa::find(1);
        $sucursal = Sucursal::find(1);
        $cajaDigital = CajaDigital::find(1);
        $factura = Factura::find(3);
        $sar = Sar::find(4);
        $solicitud = Solicitud::select()
            ->join('cliente', 'cliente.idCliente', '=', 'solicitud.idCliente')
            ->join('valorImpuesto', 'valorImpuesto.idImpuesto', '=', 'solicitud.idImpuesto')
            ->join('persona', 'persona.idPersona', '=', 'cliente.idPersona')
            ->where('solicitud.idSolicitud', 3)
            ->get();
        $solicitud = $solicitud[0];
        return view('clientes.factura', compact('empresa', 'sucursal', 'cajaDigital', 'factura', 'sar', 'solicitud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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


        $cliente = new Cliente();
        $cliente->nombreUsuario = $request->nombreUsuario;
        $cliente->esExonerado = false;
        $cliente->idPersona = $id[0]->idPersona;

        $cliente->save();

        return redirect()->route('clientes.inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
