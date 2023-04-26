<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Motorista;
use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('empleados.inicio');
    }

    public function indexClientes()
    {
        $clientes = User::select()
            ->join('cliente', 'cliente.idPersona', '=', 'persona.idPersona')
            ->get();
        return view('empleados.clientes', compact('clientes'));
    }

    public function indexSolicitudes()
    {
        $solicitudes = Solicitud::select()
            ->join('cliente', 'cliente.idCliente', '=', 'solicitud.idCliente')
            ->join('valorImpuesto', 'valorImpuesto.idImpuesto', '=', 'solicitud.idImpuesto')
            ->join('persona', 'persona.idPersona', '=', 'cliente.idPersona')
            ->get();
        return view('empleados.solicitudes', compact('solicitudes'));
    }

    public function indexDashboard()
    {
        return view('empleados.index');
    }

    public function indexMotoristas()
    {
        $motoristas = Motorista::select()
            ->join('persona', 'motorista.idPersona', '=', 'persona.idPersona')
            ->get()
            ->where('persona.estaHabilitado', false);
        return view('empleados.motoristas', compact('motoristas'));
    }

    public function indexAsignarSolicitud()
    {
        $motoristas = Motorista::select()
            ->join('persona', 'motorista.idPersona', '=', 'persona.idPersona')
            ->get()
            ->where('persona.estaHabilitado', true);
        return view('empleados.asignarsolicitud', compact('motoristas'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
