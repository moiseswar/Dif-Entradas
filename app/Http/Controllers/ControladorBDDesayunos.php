<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ControladorBDDesayunos extends Controller
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
        $consultaDesayunos= DB::table('desayunos')->get();
        return view('trabajo_social.desayunos.consulta',compact('consultaDesayunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajo_social.desayunos.registro');
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
            'txt-direccion'=> 'required',
            'txt-curp'=> 'required',
            'txt-escuela'=> 'required',
            'txt-clave'=> 'required',
            'txt-fecha'=> 'required'
        ]);
        
        DB::table('desayunos')->insert([
            "nombre" => $request -> input('txt-nombre'),
            "direccion" => $request -> input('txt-direccion'),
            "curp" => $request -> input('txt-curp'),
            "escuela" => $request -> input('txt-escuela'),
            "clave" => $request -> input('txt-clave'),
            "fecha_nacimiento" => $request -> input('txt-fecha'),
            "sexo" => $request -> input('txt-sexo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Desayunos/Registro')->with('exito','Guardado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desayunoInfo= DB :: table('desayunos')->where('id',$id)->first();
      return view('trabajo_social.desayunos.detalle',compact('desayunoInfo'));
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
        DB::table('desayunos')->where('id', $id)->update([
            "nombre" => $request-> input('txt-nombre'),
            "direccion" => $request-> input('txt-direccion'),
            "curp" => $request-> input('txt-curp'),
            "escuela" => $request-> input('txt-escuela'),
            "clave" => $request-> input('txt-clave'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Desayunos/Padron')->with('actualizado','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('desayunos')->where('id', $id)->delete();
        return redirect('/dash/Desayunos/Padron')->with('eliminado','Eliminado con Exito');
    }
}
