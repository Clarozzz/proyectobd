<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Models\CajaDigital;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Factura;
use App\Models\Sar;
use App\Models\Solicitud;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Support\Carbon;
=======
use App\Models\Cliente;

>>>>>>> 9462b6a057781d6e715543a7dbd7b36913a36cc4
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

        return view('clientes.factura');

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
