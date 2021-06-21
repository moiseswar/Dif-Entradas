<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ControladorBDregistroEntradas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entradas.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'txt-nombre'=> 'required',
            'txt-apellidoP'=> 'required',
            'txt-apellidoM'=> 'required',
            'txt-telefono'=> 'required|min:10',
            'txt-comunidad'=> 'required',
            'txt-motivo'=> 'required'
        ]);
        
        DB::table('entradas')->insert([
            "nombre" => $request -> input('txt-nombre'),
            "apellido_p" => $request -> input('txt-apellidoP'),
            "apellido_m" => $request -> input('txt-apellidoM'),
            "telefono" => $request -> input('txt-telefono'),
            "comunidad" => $request -> input('txt-comunidad'),
            "motivo" => $request -> input('txt-motivo'),
            "Division" => $request -> input('txt-division'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/')->with('exito','Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
