<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class controladorCentros extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getcentro = DB::table('centros')->get();
        return view('centros.indexCentros',compact('getcentro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request-> validate([
            'txt-nombre'=> 'required',
        ]);
        DB::table('centros')->insert([
            "nombre" => $request -> input('txt-nombre'),
            "Direccion" => $request -> input('txt-domicilio'),
            "Telefono" => $request -> input('txt-telefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Centros')->with('exito','Guardado con Exito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getcentro = DB::table('centros')
        ->where('id', $id)
        ->first();
        return view('centros.editar', compact('getcentro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request-> validate([
            'txt-nombre'=> 'required',
        ]);
        DB::table('centros')->where('id', $id)->update([
            "nombre" => $request-> input('txt-nombre'),
            "Direccion" => $request -> input('txt-domicilio'),
            "telefono" => $request -> input('txt-telefono') ,
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Centros')->with('editado','editado');
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
        DB::table('centros')->delete($id);
        return redirect('/dash/Centros')->with('eliminado','Eliminar');
    }
}
