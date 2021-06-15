<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ControladorBDEntradas extends Controller
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
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get();
        return view('entradas.consultaS', compact('consultaEntradas'));
    }
    /**funcition que entrega las entradas con diferentes
     * filtros para cada oficina
     */
    public function entradasTrabajoSocial()
    {
        $consultaEntradas = DB::table('entradas')->get()->where('Division', 'Trabajo Social');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $entradaInfo = DB::table('entradas')
        ->where('id', $id)
        ->first();
        return view('entradas.detalle', compact('entradaInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        DB::table('entradas')->where('id', $id)->update([
            "status" => $request-> input('txt-status'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Entradas')->with('data','Terminado');
    }
    public function updateComent(Request $request, $id)
    {
        DB::table('entradas')->where('id', $id)->update([
            "comentarios" => $request-> input('txt-coments'),
            "status" => $request-> input('txt-status'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('/dash/Entradas')->with('success','Terminado');
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
