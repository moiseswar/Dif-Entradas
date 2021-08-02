<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controlardorHorarios extends Controller
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
        $gethorario = DB::table('horarios')->get();
        return view('horario.indexhorarios',compact('gethorario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'flexCheckDefault'=> 'required',
            'txt-area'=> 'required',
            'txt-inicio'=> 'required',
            'txt-fin' => 'required'
        ]);
        DB::table('horarios')->insert([
            "nombre" => $request -> input('txt-nombre'),
            "area" => $request -> input('txt-area'),
            "dias" =>  implode(',',$request ->input('flexCheckDefault')) ,
            "inicio" => $request -> input('txt-inicio'),
            "fin"=> $request -> input('txt-fin'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Horarios')->with('exito','Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gethorario = DB::table('horarios')
        ->where('id', $id)
        ->first();
        return view('horario.editarclima', compact('gethorario'));
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
        $request-> validate([
            'flexCheckDefault'=> 'required',
            'txt-inicio'=> 'required',
            'txt-fin' => 'required'
        ]);
        DB::table('horarios')->where('id', $id)->update([
            "dias" =>implode(',',$request ->input('flexCheckDefault')) ,
            "inicio" => $request -> input('txt-inicio') ,
            "fin" => $request -> input('txt-fin'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Horarios')->with('editado','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('horarios')->delete($id);
        return redirect('/dash/Horarios')->with('eliminado','Eliminar');
    }
}
