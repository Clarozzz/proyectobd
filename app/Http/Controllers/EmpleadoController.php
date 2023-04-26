<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Motorista;
use App\Models\Solicitud;
use App\Models\Sucursal;
use App\Models\Salario;
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

        $salario = new Salario();
        $salario->mesPagado = $request->mesPagado;
        $salario->salarioBruto = $request->salarioBruto;
        $salario->salarioNeto = $request->salarioNeto;
        $salario->fecha = Carbon::now();

        $salario->save();

        $idS = Salario::select('idSalario')
        ->where('fecha', '=', $salario->fecha)
        ->get();

        $empleado = new Empleado();
        $empleado->idSalario = $idS[0]->idSalario;
        $empleado->idPersona = $id[0]->idPersona;

        $empleado->save();

        return redirect()->route('empleados.inicio');
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
