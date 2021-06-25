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
    public function entradasPsicologico()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Psicologico');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }


    public function entradasJuridico()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Juridico');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasdental()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Medico Dental');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasMedicoNutricional()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Medico Nutricional');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasMedicoGeneral()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Medico General');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasEstufas()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Estufas Ecologicas');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasSociales()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Apoyos Sociales');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasDesayunos()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Desayunos Ecolares');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasAlimentarios()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Apoyos Alimentarios');
        return view('trabajo_social.entradas.consultaTrabajoSocialEntadas', compact('consultaEntradas'));
    }

    public function entradasPreventivos()
    {
        $consultaEntradas = DB::table('entradas')
        ->selectRaw('*,DATE(created_at) AS Fecha')
        ->get()
        ->where('Division', 'Programas Preventivos');
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
        $request-> validate([
            'txt-coments'=> 'required',
        ]);
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
