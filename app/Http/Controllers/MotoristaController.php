<?php

namespace App\Http\Controllers;

use App\Models\CajaDigital;
use App\Models\Empresa;
use App\Models\Factura;
use App\Models\Motorista;
use App\Models\Sar;
use App\Models\Solicitud;
use App\Models\Sucursal;
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
        return view('motoristas.registro');
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
        //
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
