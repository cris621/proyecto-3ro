<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GeneraOrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos=DB::select("SELECT * FROM aniolectivo"); 
        $jornadas=DB::select("SELECT * FROM jornadas"); 
        $meses= $this->meses();
        return view('generaOrdenes.index')
        ->with('periodos', $periodos)
        ->with('jornadas', $jornadas)
        ->with('meses', $meses)
        ;
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

public function meses(){
    return [ 
        '1'=> "ENERO",
        '2'=> 'FEBRERO',
        '3'=> 'MARZO',
        '4'=> 'ABRIL',
        '5'=> 'MAYO',
        '6'=> 'JUNIO',
        '7'=> 'JULIO',
        '8'=> 'AGOSTO',
        '9'=> 'SEPTIEMBRE',
        '10'=> 'OCTUBRE',
        '11'=> 'NO',
        '12'=> 'DICIEMBRE',
    ];
}

}
