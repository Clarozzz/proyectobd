<?php

namespace App\Http\Controllers;

use App\Models\TalentoHumano;
use Illuminate\Http\Request;

class TalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rrhh.inicio');
    }

    public function indexEmpleados()
    {
        return view('rrhh.empleados');
    }

    public function indexInfo()
    {
        return view('rrhh.index');
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

}
